<?php /* Smarty version Smarty-3.1.14, created on 2014-11-19 19:11:01
         compiled from "/var/www/netmon/templates/base/html/resend_activation_mail.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1852976433546cdd359a7bc6-01937955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85157862c2bc1b7f8530f1aeabade230ae1ec59a' => 
    array (
      0 => '/var/www/netmon/templates/base/html/resend_activation_mail.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1852976433546cdd359a7bc6-01937955',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546cdd359d6a66_68493318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546cdd359d6a66_68493318')) {function content_546cdd359d6a66_68493318($_smarty_tpl) {?><h1>Aktivierungsmail erneut zusenden</h1>

<form action="./resend_activation_mail.php" method="POST">
	<p>Deine Emailadresse:<br><input name="email" type="text" size="30" maxlength="50"></p>
	<p><input type="submit" value="Aktivierungsmail erneut zusenden"></p>
</form>
<?php }} ?>