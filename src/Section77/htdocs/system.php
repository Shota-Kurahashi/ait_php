<?php
/*************************************************
 * 管理者実行スクリプト
 *
 */

define("_ROOT_DIR", __DIR__ . "/");
require_once _ROOT_DIR . "../php_libs/init.php";
$controller = new SystemController();
$auth = new Auth();
print $auth->get_hashed_password("123456");
$controller->run();
exit();
