<?php /* Smarty version Smarty-3.1.14, created on 2014-11-17 19:19:11
         compiled from "/var/www/netmon/templates/base/html/login.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1202864659546a3c1fa83e51-38448208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '362857f533cdcb2adb1c9feee694af295a41b850' => 
    array (
      0 => '/var/www/netmon/templates/base/html/login.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1202864659546a3c1fa83e51-38448208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a3c1fabceb0_12565509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a3c1fabceb0_12565509')) {function content_546a3c1fabceb0_12565509($_smarty_tpl) {?><h1>Login</h1>

<p>Bitte logge dich ein, um auf den Verwaltungsbereich zugreifen zu können.</p>

<div id="traditionall_login" style="display:block;">
<form action="./login.php?section=login_send" method="POST">
	<p>Benutzername:<br><input name="nickname" type="text" size="30" maxlength="30"> <img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/openid-logo-small.png" onclick="document.getElementById('openid_login').style.display = 'block'; document.getElementById('traditionall_login').style.display = 'none';"></p>
	<p>Passwort:<br><input name="password" type="password" size="30"></p>
	<p><input type="checkbox" name="remember" value="true" checked> Login merken</p>
	
	<p><a href="./send_new_password.php">Passwort vergessen?</a><br><a href="./resend_activation_mail.php">Aktivierungsmail erneut zusenden?</a></p>
	<p><input type="submit" value="Login"></p>
</form>
</div>

<div id="openid_login" style="display:none;">
<form action="./login.php?section=login_send" method="POST">
	<p>Open-ID:<br><input name="openid_identifier" type="text" size="30" maxlength="200"> <img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/arrow_undo.png" onclick="document.getElementById('openid_login').style.display = 'none'; document.getElementById('traditionall_login').style.display = 'block';"></p>
	<p><input type="checkbox" name="remember" value="true" checked> Login merken</p>

	<p><input type="submit" value="Login"></p>
</form>
</div><?php }} ?>