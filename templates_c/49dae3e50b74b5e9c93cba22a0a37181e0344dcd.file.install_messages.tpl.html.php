<?php /* Smarty version Smarty-3.1.14, created on 2014-11-17 19:18:30
         compiled from "/var/www/netmon/templates/base/html/install_messages.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1151737988546a3bf64053a6-16304614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49dae3e50b74b5e9c93cba22a0a37181e0344dcd' => 
    array (
      0 => '/var/www/netmon/templates/base/html/install_messages.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1151737988546a3bf64053a6-16304614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_to_netmon' => 0,
    'mail_sending_type' => 0,
    'mail_sender_adress' => 0,
    'mail_sender_name' => 0,
    'mail_smtp_server' => 0,
    'mail_smtp_username' => 0,
    'mail_smtp_password' => 0,
    'mail_smtp_login_auth' => 0,
    'mail_smtp_ssl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a3bf648b4c2_55827154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a3bf648b4c2_55827154')) {function content_546a3bf648b4c2_55827154($_smarty_tpl) {?><h1>Grunddaten</h1>

<form action="./install.php?section=messages_insert" method="POST">
	<p>Hier werden nur die zum Betrieb von Netmon unbedingt notwendigen Daten abgefragt. Alle Weiteren Einstellungen findest du nach der Installation unter dem Menüpunkt <i>Konfiguration</i>.</p>
	<h2>Community</h2>
	<p>URL zur Netmon Website:<br><input name="url_to_netmon" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['url_to_netmon']->value;?>
"></p>

	<h2>Email</h2>
	<p>Versendeart: <select name="mail_sending_type" onChange="if(this.options[this.selectedIndex].value=='smtp') { document.getElementById('smtp_config').style.display = 'block'; } else { document.getElementById('smtp_config').style.display = 'none';}">
				<option value="php_mail" <?php if ($_smarty_tpl->tpl_vars['mail_sending_type']->value=='php_mail'){?>selected<?php }?>>php_mail</option>
				<option value="smtp" <?php if ($_smarty_tpl->tpl_vars['mail_sending_type']->value=='smtp'){?>selected<?php }?>>smtp</option>
			</select>
	</p>

	<p>Absenderadresse:<br><input name="mail_sender_adress" type="text" size="30" value="<?php if (isset($_smarty_tpl->tpl_vars['mail_sender_adress']->value)){?><?php echo $_smarty_tpl->tpl_vars['mail_sender_adress']->value;?>
<?php }?>"></p>
	<p>Absendername:<br><input name="mail_sender_name" type="text" size="30" value="<?php if (isset($_smarty_tpl->tpl_vars['mail_sender_name']->value)){?><?php echo $_smarty_tpl->tpl_vars['mail_sender_name']->value;?>
<?php }?>"></p>
	<span id="smtp_config" style="display: <?php if ($_smarty_tpl->tpl_vars['mail_sending_type']->value=='smtp'){?>block<?php }else{ ?>none<?php }?>;">
		<p>SMTP-Server:<br><input name="mail_smtp_server" type="text" size="30" value="<?php if (isset($_smarty_tpl->tpl_vars['mail_smtp_server']->value)){?><?php echo $_smarty_tpl->tpl_vars['mail_smtp_server']->value;?>
<?php }?>"></p>
		<p>SMTP-Benutzername:<br><input name="mail_smtp_username" type="text" size="30" value="<?php if (isset($_smarty_tpl->tpl_vars['mail_smtp_username']->value)){?><?php echo $_smarty_tpl->tpl_vars['mail_smtp_username']->value;?>
<?php }?>"></p>
		<p>SMTP-Passwort:<br><input name="mail_smtp_password" type="password" size="30" value="<?php if (isset($_smarty_tpl->tpl_vars['mail_smtp_password']->value)){?><?php echo $_smarty_tpl->tpl_vars['mail_smtp_password']->value;?>
<?php }?>"></p>
		<p>SMTP-Login Methode:<br><input name="mail_smtp_login_auth" type="text" size="30" value="<?php if (isset($_smarty_tpl->tpl_vars['mail_smtp_login_auth']->value)){?><?php echo $_smarty_tpl->tpl_vars['mail_smtp_login_auth']->value;?>
<?php }?>"></p>
		<p>SMTP-SSL Typ: <br><input name="mail_smtp_ssl" type="text" size="30" value="<?php if (isset($_smarty_tpl->tpl_vars['mail_smtp_ssl']->value)){?><?php echo $_smarty_tpl->tpl_vars['mail_smtp_ssl']->value;?>
<?php }?>"></p>
	</span>

	<p><input type="submit" value="Weiter"></p>
</form>
<?php }} ?>