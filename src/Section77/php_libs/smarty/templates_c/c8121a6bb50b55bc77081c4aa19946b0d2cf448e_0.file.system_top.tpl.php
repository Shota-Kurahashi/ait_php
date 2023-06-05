<?php
/* Smarty version 3.1.30, created on 2023-05-29 06:07:58
  from "/var/www/html/Section77/php_libs/smarty/templates/system_top.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6474413ee70593_02733480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8121a6bb50b55bc77081c4aa19946b0d2cf448e' => 
    array (
      0 => '/var/www/html/Section77/php_libs/smarty/templates/system_top.tpl',
      1 => 1685334119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6474413ee70593_02733480 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<div style="text-align:center;">
<hr>
<strong><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</strong>
<hr>
    <table>
      <tr>
        
      <td style="vertical-align: top;">
      	[ <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=logout">ログアウト</a> ]
	<br>
	<br>
	<?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>

      </td>
      
      <td>
[ <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=list&action=form">会員一覧</a> ]   会員の検索・更新・削除を行います。<br><br>
        <br>
        <br>

         </td>
      </tr>
    </table>
</div>
<?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?><pre><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</pre><?php }?>
</body>
</html>
<?php }
}
