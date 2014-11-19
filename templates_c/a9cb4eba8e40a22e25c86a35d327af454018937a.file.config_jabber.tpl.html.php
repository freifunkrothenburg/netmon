<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 19:04:19
         compiled from "/var/www/netmon/templates/base/html/config_jabber.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1564539025546b8a236b1dc0-71478618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9cb4eba8e40a22e25c86a35d327af454018937a' => 
    array (
      0 => '/var/www/netmon/templates/base/html/config_jabber.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1564539025546b8a236b1dc0-71478618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jabber_server' => 0,
    'jabber_username' => 0,
    'jabber_password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546b8a236e57d5_19429852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b8a236e57d5_19429852')) {function content_546b8a236e57d5_19429852($_smarty_tpl) {?><h1>Konfiguration der Jabber-Anbindung</h1>
<form action="./config.php?section=insert_edit_jabber" method="POST">
	<p>Jabber Server:<br><input name="jabber_server" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['jabber_server']->value;?>
"></p>
	<p>Jabber Username:<br><input name="jabber_username" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['jabber_username']->value;?>
"></p>
	<p>Jabber Passwort:<br><input name="jabber_password" type="password" size="30" value="<?php echo $_smarty_tpl->tpl_vars['jabber_password']->value;?>
"></p>

	<p><input type="submit" value="Absenden"></p>
</form><?php }} ?>