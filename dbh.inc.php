<?php

$_SESSION ['first']['last'] = "1000";
/*
Prijungiau prie duomenu bazes
*/
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginsystem"; //duomenu bazes pavadinimas

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
/*
Prijungiau prie duomenu bazes
*/

?>
