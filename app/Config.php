<?php 

/**
 * Mode Developer
 */

define('APPLICATION_DEMO', TRUE); 

/**
 * DataBase Configuration
 */

define('BASE_URL',(APPLICATION_DEMO == true)?  "http://localhost/" : "{PRODUCTION_URL}");
define('DB_HOST', (APPLICATION_DEMO == true)?  "localhost" : "{PRODUCTION_HOST}");
define('DB_USER', (APPLICATION_DEMO == true)?  "root" : "{PRODUCTION_USER}");
define('DB_PASS', (APPLICATION_DEMO == true)?  "" : "{PRODUCTION_PASSWORD}");
define('DB_NAME', (APPLICATION_DEMO == true)?  "" : "{PRODUCTION_DATABASE_NAME}");
define('DB_CHAR',  "utf8");
define('HASH_SEED', '{PRODUCTION_HASH_SEED}');
/**
 * Aplication General SEO Configuration
 */

define('APP_NAME', 'Proyect Manager Dashboard');
define('APP_DESC', ' ');
define('APP_KEYWORDS', '');

/**
 * Email System Configuration
 * Use PHPEMAILER
 */

define('APP_EMAIL_HOST', '');
define('APP_EMAIL_PORT', '');
define('APP_EMAIL_USERNAME', '');
define('APP_EMAIL_PASSWORD', '');

/**
 * Payment Stripe
 */

define('STRIPE_API_KEY', 
    (APPLICATION_DEMO == true)?  
    'TEST' 
    : "{STRIPE_API_KEY}");






