<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 19:04:15
         compiled from "/var/www/netmon/templates/base/html/config_email.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1181824745546b8a1fa0f076-58542117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcf3cfb421aca18f6f4c018e631057f1c59935c5' => 
    array (
      0 => '/var/www/netmon/templates/base/html/config_email.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1181824745546b8a1fa0f076-58542117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mail_sender_adress' => 0,
    'mail_sender_name' => 0,
    'mail_sending_type' => 0,
    'mail_smtp_server' => 0,
    'mail_smtp_username' => 0,
    'mail_smtp_password' => 0,
    'mail_smtp_login_auth' => 0,
    'mail_smtp_ssl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546b8a1fa5dac8_06186992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b8a1fa5dac8_06186992')) {function content_546b8a1fa5dac8_06186992($_smarty_tpl) {?><h1>Konfiguration des Mailversands</h1>
<form action="./config.php?section=insert_edit_email" method="POST">
	<h2>Abesender</h2>
	<p><b>Absenderadresse:</b><br><input name="mail_sender_adress" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['mail_sender_adress']->value;?>
"></p>
	<p>Absendername:<br><input name="mail_sender_name" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['mail_sender_name']->value;?>
"></p>

	<h2>Versandart</h2>
	<p>Versandart: <select name="mail_sending_type" onChange="if(this.options[this.selectedIndex].value=='smtp') { document.getElementById('smtp_config').style.display = 'block'; } else { document.getElementById('smtp_config').style.display = 'none';}">
					<option value="php_mail" <?php if ($_smarty_tpl->tpl_vars['mail_sending_type']->value=='php_mail'){?>selected<?php }?>>php_mail</option>
					<option value="smtp" <?php if ($_smarty_tpl->tpl_vars['mail_sending_type']->value=='smtp'){?>selected<?php }?>>smtp</option>
			      </select>
	</p>
	<p>SMTP Mail Ausgangsserver (z.B. mail.gmx.de)<br><input name="mail_smtp_server" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtp_server']->value;?>
"></p>
	<p>SMTP Username (z.B. netmon@gmx.de):<br><input name="mail_smtp_username" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtp_username']->value;?>
"></p>
	<p>SMTP Passwort:<br><input name="mail_smtp_password" type="password" size="30" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtp_password']->value;?>
"></p>
	<p>SMTP-Login Methode:<br><input name="mail_smtp_login_auth" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtp_login_auth']->value;?>
"></p>
	<p>SMTP-SSL Typ:<br><input name="mail_smtp_ssl" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtp_ssl']->value;?>
"></p>

	<p><input type="submit" value="Absenden"></p>
</form><?php }} ?>