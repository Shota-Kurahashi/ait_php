<!-- セッションを開始してセッションの変数の中からキーがnameのデータを表示 -->


<?php
session_start();
$name = $_SESSION["name"];
echo $name;
?>

