<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 19:04:09
         compiled from "/var/www/netmon/templates/base/html/config.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1728153322546b8a19db5701-17478298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97125afd5a1d5a5d0c36a7b026d0b7b6793bc575' => 
    array (
      0 => '/var/www/netmon/templates/base/html/config.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1728153322546b8a19db5701-17478298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mysql_host' => 0,
    'mysql_db' => 0,
    'mysql_user' => 0,
    'mysql_password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546b8a19df0f64_77441499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b8a19df0f64_77441499')) {function content_546b8a19df0f64_77441499($_smarty_tpl) {?><h1>Konfiguration der Datenbankanbindung</h1>
<form action="./config.php?section=insert_edit" method="POST">
	<p>Host:<br><input name="mysql_host" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['mysql_host']->value;?>
"></p>
	<p>Datenbank:<br><input name="mysql_db" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['mysql_db']->value;?>
"></p>
	<p>Benutzer:<br><input name="mysql_user" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['mysql_user']->value;?>
"></p>
	<p>Passwort:<br><input name="mysql_password" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['mysql_password']->value;?>
"></p>

	<p><input type="submit" value="Absenden"></p>
</form><?php }} ?>