<?php
require_once "8-2.php";
$stmt = $pdo->prepare(
  "INSERT INTO member (last_name, first_name, age) VALUES (:last_name, :first_name, :age)"
);

// パラメータのバインド
$stmt->bindParam(":last_name", $last_name);
$stmt->bindParam(":first_name", $first_name);
$stmt->bindParam(":age", $age);

// パラメータの値の設定
$last_name = "中村";
$first_name = "六郎";
$age = 42;

// SQLの実行
$stmt->execute();

echo "Record inserted successfully";
?>
