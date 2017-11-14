<?php
include_once "misc.php";

$request_uris = clean_request_uri();
if (empty($request_uris)) {
    $request_uris = array("home");
}

switch ($request_uris[0])
{
    case "home":
        define("PAGE_TITLE", "KIRSmartCyber47 SMANELL");
        define("PAGE_BODY_FILE", "home.php");
        define("NAVBAR_ACTIVE_PAGE", "home");
        if (defined('KOMPAS_COUNTDOWN')) {
            define('PAGE_JAVASCRIPTS', 'countdown.js');
            define('PAGE_STYLESHEETS', 'countdown.css');
        }        
        break;

    case "atap":
        define("PAGE_TITLE", "ATAP KIRSmartCyber47");
        define("PAGE_BODY_FILE", "atap.php");
        define("NAVBAR_ACTIVE_PAGE", "atap");
        define('PAGE_STYLESHEETS', 'atap.css');
        break;

    case "kompas":
        define("PAGE_TITLE", "KOMPAS KIRSmartCyber47");
        define("PAGE_BODY_FILE", "kompas.php");
        define("NAVBAR_ACTIVE_PAGE", "kompas");
        if (defined('KOMPAS_COUNTDOWN'))
        {
            define('PAGE_STYLESHEETS', 'countdown.css;kompas.css');
            define('PAGE_JAVASCRIPTS', 'countdown.js');
        }
        else{
            define('PAGE_STYLESHEETS', 'kompas.css');            
        }
        break;

    case "stifect":
        define("PAGE_TITLE", "STIFECT KIRSmartCyber47");
        define("PAGE_BODY_FILE", "stifect.php");
        define("NAVBAR_ACTIVE_PAGE", "stifect");
        if (defined('STIFECT_COUNTDOWN'))
        {
            define('PAGE_STYLESHEETS', 'countdown.css');
            define('PAGE_JAVASCRIPTS', 'countdown.js');
        }
        else{
            //define('PAGE_STYLESHEETS', 'kompas.css');            
        }
        break;

    case "unduhan":
        define("PAGE_TITLE", "Unduhan KIRSmartCyber47");
        define("PAGE_BODY_FILE", "unduhan.php");
        define("NAVBAR_ACTIVE_PAGE", "unduhan");
        define('PAGE_STYLESHEETS', 'unduhan.css');
        break;
}

if (!defined('PAGE_TITLE')) {
    define("PAGE_TITLE", "404: Tidak ditemukan!");
    define("PAGE_BODY_FILE", "404.php");
}