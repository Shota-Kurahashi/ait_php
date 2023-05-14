<?php
require_once "5-1.php";

class newBoard extends Board
{
  public $subject = "新しい掲示板です。";
}

$board = new newBoard();
$board->dispArticle();
?>

