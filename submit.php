<?php
/**
 * Edoc Ventures — Unified Form Submission Handler
 * Handles: rfq | newsletter | academy
 * All responses are JSON.
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

// Initialise DB
require_once __DIR__ . '/db.php';

$type = trim($_POST['form_type'] ?? '');

// ─── Helper ────────────────────────────────────────────────────────────────
function sanitize(string $val): string {
    return htmlspecialchars(strip_tags(trim($val)), ENT_QUOTES, 'UTF-8');
}

// ─── Route to handler ──────────────────────────────────────────────────────
switch ($type) {

    // ── 1. RFQ / Project Request ──────────────────────────────────────────
    case 'rfq':
        $full_name   = sanitize($_POST['full_name']   ?? '');
        $email       = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $company     = sanitize($_POST['company']     ?? '');
        $budget      = sanitize($_POST['budget']      ?? '');
        $services    = sanitize($_POST['services']    ?? ''); // comma-separated
        $description = sanitize($_POST['description'] ?? '');
        $launch_date = sanitize($_POST['launch_date'] ?? '');
        $urgency     = sanitize($_POST['urgency']     ?? '');

        if (empty($full_name) || empty($email)) {
            echo json_encode(['success' => false, 'message' => 'Full name and email are required.']);
            exit;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
            exit;
        }

        $stmt = $pdo->prepare("
            INSERT INTO rfq_requests
                (full_name, email, company, budget, services, description, launch_date, urgency)
            VALUES
                (:full_name, :email, :company, :budget, :services, :description, :launch_date, :urgency)
        ");
        $stmt->execute([
            ':full_name'   => $full_name,
            ':email'       => $email,
            ':company'     => $company,
            ':budget'      => $budget,
            ':services'    => $services,
            ':description' => $description,
            ':launch_date' => $launch_date,
            ':urgency'     => $urgency,
        ]);

        echo json_encode([
            'success' => true,
            'message' => "Thank you, {$full_name}! Your quotation request has been submitted. A Senior Solutions Architect will contact you within 24 business hours."
        ]);
        break;

    // ── 2. Newsletter Subscription ────────────────────────────────────────
    case 'newsletter':
        $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
            exit;
        }

        // IGNORE if duplicate (UNIQUE constraint)
        $stmt = $pdo->prepare("
            INSERT OR IGNORE INTO newsletter_subscribers (email) VALUES (:email)
        ");
        $stmt->execute([':email' => $email]);

        echo json_encode([
            'success' => true,
            'message' => "You're in! Welcome to the Edoc Ventures network. We'll keep you updated on the latest in tech evolution."
        ]);
        break;

    // ── 3. Academy Student Registration ──────────────────────────────────
    case 'academy':
        $full_name = sanitize($_POST['full_name'] ?? '');
        $email     = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $phone     = sanitize($_POST['phone']     ?? '');
        $program   = sanitize($_POST['program']   ?? '');

        if (empty($full_name) || empty($email)) {
            echo json_encode(['success' => false, 'message' => 'Full name and email are required.']);
            exit;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
            exit;
        }

        $stmt = $pdo->prepare("
            INSERT INTO academy_registrations
                (full_name, email, phone, program)
            VALUES
                (:full_name, :email, :phone, :program)
        ");
        $stmt->execute([
            ':full_name' => $full_name,
            ':email'     => $email,
            ':phone'     => $phone,
            ':program'   => $program,
        ]);

        echo json_encode([
            'success' => true,
            'message' => "Application received, {$full_name}! Our admissions team will review your details and reach out to guide you on your tech journey."
        ]);
        break;

    default:
        echo json_encode(['success' => false, 'message' => 'Unknown form type.']);
        break;
}
