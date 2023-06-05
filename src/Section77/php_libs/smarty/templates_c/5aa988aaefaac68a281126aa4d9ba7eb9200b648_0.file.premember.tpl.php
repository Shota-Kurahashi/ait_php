<?php
/* Smarty version 3.1.30, created on 2023-05-29 05:40:16
  from "/var/www/html/Section77/php_libs/smarty/templates/premember.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64743ac0e32074_39831830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aa988aaefaac68a281126aa4d9ba7eb9200b648' => 
    array (
      0 => '/var/www/html/Section77/php_libs/smarty/templates/premember.tpl',
      1 => 1685334119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64743ac0e32074_39831830 (Smarty_Internal_Template $_smarty_tpl) {
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
        
      <td> <a href="index.php">トップページへ</a>
      </td>
        
      <td>
  		<?php echo $_smarty_tpl->tpl_vars['message']->value;?>


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
