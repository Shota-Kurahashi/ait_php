<?php
$member = [
  "name" => "山田太郎",
  "tel" => "03-0000-0000",
  "address" => "東京都千代田区",
];

foreach ($member as $key => $value) {
  print $key . "：" . $value . "<br>";
}
?>
