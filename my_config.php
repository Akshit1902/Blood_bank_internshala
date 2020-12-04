<?php
/*
 * --------------------------------------------------------------------
 * LOAD THE CUSTOM FILE CONFIGURATIONS
 * --------------------------------------------------------------------
 *
 */
// configure enviroment / set true if it is in live server
$PRODUCTION = false;
define('PRODUCTION', $PRODUCTION);

$BASE_URL = "https://internshala-project1.herokuapp.com";

define('BASE_URL', $BASE_URL);



/**
 * Configuration for database
 */
$HOSTNAME = "sql12.freemysqlhosting.net";
$USERNAME = "sql12380200";
$PASSWORD = "ssmJ2XfQbw";
$DATABASE = "sql12380200";
$PREFIX   = "bb_";

define('HOSTNAME', $HOSTNAME);
define('USERNAME', $USERNAME);
define('PASSWORD', $PASSWORD);
define('DATABASE', $DATABASE);
define('PREFIX'  , $PREFIX);

define('MAINTENANCE_MODE', false);
define('ENCRYPTION_KEY', '');

define('EMAIL_API', '');


?>
