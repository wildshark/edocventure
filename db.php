<?php
/**
 * Edoc Ventures — SQLite Database Handler
 * Initialises the database and provides a connection.
 */

$db_path = __DIR__ . '/data/edoc.sqlite';

// Ensure the data directory exists
if (!is_dir(__DIR__ . '/data')) {
    mkdir(__DIR__ . '/data', 0755, true);
}

try {
    $pdo = new PDO('sqlite:' . $db_path);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Create tables if they don't exist
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS rfq_requests (
            id          INTEGER PRIMARY KEY AUTOINCREMENT,
            full_name   TEXT    NOT NULL,
            email       TEXT    NOT NULL,
            company     TEXT,
            budget      TEXT,
            services    TEXT,
            description TEXT,
            launch_date TEXT,
            urgency     TEXT,
            submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );

        CREATE TABLE IF NOT EXISTS newsletter_subscribers (
            id          INTEGER PRIMARY KEY AUTOINCREMENT,
            email       TEXT    NOT NULL UNIQUE,
            subscribed_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );

        CREATE TABLE IF NOT EXISTS academy_registrations (
            id          INTEGER PRIMARY KEY AUTOINCREMENT,
            full_name   TEXT    NOT NULL,
            email       TEXT    NOT NULL,
            phone       TEXT,
            program     TEXT,
            registered_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ");
} catch (PDOException $e) {
    // Return JSON error for AJAX calls
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    exit;
}
