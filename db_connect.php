<?php
// Credentials DB
define('servername', '127.0.0.1');
define('username', 'root');
define('password', '');
define('name', 'edusogno');
define('port', 3306);

// Connection to DB
$connect = new mysqli(servername, username, password, name, port);

// Check for connection errors
if($connect && $connect->connect_error) {
    die($connect->connect_error);
}
echo "Connection successfull";
?>

