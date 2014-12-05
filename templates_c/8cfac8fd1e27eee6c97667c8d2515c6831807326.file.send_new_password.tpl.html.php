<?php /* Smarty version Smarty-3.1.14, created on 2014-11-20 16:36:06
         compiled from "/var/www/netmon/templates/base/html/send_new_password.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1606420542546e0a668320d0-95446611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cfac8fd1e27eee6c97667c8d2515c6831807326' => 
    array (
      0 => '/var/www/netmon/templates/base/html/send_new_password.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1606420542546e0a668320d0-95446611',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546e0a66878583_58246660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546e0a66878583_58246660')) {function content_546e0a66878583_58246660($_smarty_tpl) {?><h1>Neues Passwort zusenden</h1>

<form action="./send_new_password.php" method="POST">
	<p>Deine Emailadresse:<br><input name="email" type="text" size="30" maxlength="50"></p>
	<p><input type="submit" value="Passwort zusenden"></p>
</form>
<?php }} ?>