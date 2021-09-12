<?php
session_start();
$pdo = new PDO('mysql:dbname=COMP3130;host=mysql', 'myuser', 'mypassword', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$query = $pdo->query('SHOW VARIABLES like "version"');
$row = $query->fetch();
echo 'MySQL version:' . $row['Value'];

$_SESSION["favcolor"] = "green";
?>
<h1>Hello World!</h1>
<?
echo $_SESSION["favcolor"];
?>
