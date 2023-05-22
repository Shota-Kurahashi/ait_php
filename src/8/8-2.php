<?php
// using docker
$user = "root";
$password = "root";
$host = "mariadb";
$dbname = "mydb";
$dbtype = "mysql";
$port = 3306;

$dsn = "$dbtype:host=$host;port=$port;dbname=$dbname;charset=utf8";

try {
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Successfully connected to the database!";
} catch (PDOException $e) {
  echo $e->getMessage();
}
?>
