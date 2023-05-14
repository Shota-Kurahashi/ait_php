<?php
class Board
{
  public $subject = "タイトル";
  public $name = "名前";
  public $contents = "内容";

  public function dispArticle()
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
?>
