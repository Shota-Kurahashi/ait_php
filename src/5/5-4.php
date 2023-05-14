<?php
require_once "5-1.php";

class newBoard extends Board
{
  public $subject = "新しい掲示板です。";

  public function submitArticle()
  {
    print "タイトル：" .
      $this->subject .
      "<br>" .
      "名前：" .
      $this->name .
      "<br>" .
      "内容：" .
      $this->contents .
      "<br>";
  }

  public function editArticle()
  {
    print "タイトル：" .
      $this->subject .
      "<br>" .
      "名前：" .
      $this->name .
      "<br>" .
      "内容：" .
      $this->contents .
      "<br>";
  }

  public function deleteArticle()
  {
    print "タイトル：" .
      $this->subject .
      "<br>" .
      "名前：" .
      $this->name .
      "<br>" .
      "内容：" .
      $this->contents .
      "<br>";
  }
}

$board = new newBoard();
$board->submitArticle();
$board->editArticle();
$board->deleteArticle();
?>

