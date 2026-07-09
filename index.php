<?php

define('EDOC_LOADED', true);

if(!isset($_REQUEST['submit'])){
    if(!isset($_REQUEST['page'])){
        include 'home.php';
    }else{
        $page = $_REQUEST['page'];
        switch($page){
            case 'home':
                include 'home.php';
                break;
            case 'services':
                include 'services.php';
                break;
            case 'about':
                include 'about.php';
                break;
            case 'contact':
                include 'contact.php';
                break;
            case 'quation':
                include 'quation.php';
                break;
            case 'elearningpro':
            case 'saas/elearningpro':
                if(file_exists('saas/elearningpro.php')){
                    include 'saas/elearningpro.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'sms':
            case 'saas/sms':
                if(file_exists('saas/sms.php')){
                    include 'saas/sms.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'eaccounting':
            case 'saas/eaccounting':
                if(file_exists('saas/eaccounting.php')){
                    include 'saas/eaccounting.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'questpay':
            case 'fintech/questpay':
                if(file_exists('fintech/questpay.php')){
                    include 'fintech/questpay.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'ebankinghub':
            case 'fintech/ebankinghub':
                if(file_exists('fintech/ebankinghub.php')){
                    include 'fintech/ebankinghub.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'swaplabs':
            case 'fintech/swaplabs':
                if(file_exists('fintech/swaplabs.php')){
                    include 'fintech/swaplabs.php';
                } else {
                    include 'home.php';
                }
                break;

            case 'academy':
                if(file_exists('academy.php')){
                    include 'academy.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'ekkilsia':
            case 'saas/ekkilsia':
                if(file_exists('saas/ekkilsia.php')){
                    include 'saas/ekkilsia.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'mylibrary':
            case 'saas/mylibrary':
                if(file_exists('saas/mylibrary.php')){
                    include 'saas/mylibrary.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'cashwired':
            case 'fintech/cashwired':
                if(file_exists('fintech/cashwired.php')){
                    include 'fintech/cashwired.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'payme':
            case 'fintech/payme':
                if(file_exists('fintech/payme.php')){
                    include 'fintech/payme.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'virtualhode':
            case 'cloud/virtualhode':
                if(file_exists('cloud/virtualhode.php')){
                    include 'cloud/virtualhode.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'vod':
            case 'cloud/vod':
                if(file_exists('cloud/vod.php')){
                    include 'cloud/vod.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'stream':
            case 'cloud/stream':
                if(file_exists('cloud/stream.php')){
                    include 'cloud/stream.php';
                } else {
                    include 'home.php';
                }
                break;

            case 'privacy':
                if(file_exists('privacy.php')){
                    include 'privacy.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'terms':
                if(file_exists('terms.php')){
                    include 'terms.php';
                } else {
                    include 'home.php';
                }
                break;
            case 'sla':
                if(file_exists('sla.php')){
                    include 'sla.php';
                } else {
                    include 'home.php';
                }
                break;
            default:
                include 'home.php';
                break;
        }
    }
}

?>