<?php
// DB credentials.
if (!defined('DB_HOST')) define('DB_HOST','localhost');
if (!defined('DB_USER')) define('DB_USER','root');
if (!defined('DB_PASS')) define('DB_PASS','');
if (!defined('DB_NAME')) define('DB_NAME','tms');

// Establish database connection.
try
{
    $dbh = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME,
        DB_USER,
        DB_PASS,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
    );
    // ensure exceptions on error
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    exit("Error: " . $e->getMessage());
}
?>