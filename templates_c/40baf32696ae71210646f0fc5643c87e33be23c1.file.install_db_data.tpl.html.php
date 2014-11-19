<?php /* Smarty version Smarty-3.1.14, created on 2014-11-17 19:18:20
         compiled from "/var/www/netmon/templates/base/html/install_db_data.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1417654745546a3becd2da18-80028232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40baf32696ae71210646f0fc5643c87e33be23c1' => 
    array (
      0 => '/var/www/netmon/templates/base/html/install_db_data.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1417654745546a3becd2da18-80028232',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a3becd5eb33_99198289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a3becd5eb33_99198289')) {function content_546a3becd5eb33_99198289($_smarty_tpl) {?><h1>Installation der Datenbank</h1>
<p>In diesem Abschnitt installieren wir die Datenbank. Dazu ist es notwendig, dass du im Voraus bereits manuell eine Datenbank angelegt hast in der wir nun das Datenbankschema von Netmon ablegen können.</p>
<form action="./install.php?section=check_connection" method="POST">
	<h2>Datenbank Informationen</h2>
	<p>Server:<br><input name="mysql_host" type="text" size="30" value="localhost"></p>
	<p>Datenbank:<br><input name="mysql_db" type="text" size="30"></p>
	
	<h2>Datenbank Benutzer</h2>
	<p>Benutzername:<br><input name="mysql_user" type="text" size="30"></p>
	<p>Passwort:<br><input name="mysql_password" type="password" size="30"></p>
	<p><input type="submit" value="Weiter"></p>
</form>
<?php }} ?>