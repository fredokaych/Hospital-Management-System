<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//define('DB_SERVER', 'localhost');
define('DB_SERVER', 'sql311.epizy.com');
define('DB_USERNAME', 'epiz_29038108');
define('DB_PASSWORD', 'lOkfevfhWhc');
define('DB_NAME', 'epiz_29038108_pmsproject');
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);



// Check connection
if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}
?>