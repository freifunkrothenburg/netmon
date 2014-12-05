<?php /* Smarty version Smarty-3.1.14, created on 2014-11-24 09:42:19
         compiled from "/var/www/netmon/templates/base/html/user_edit.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:5713727735472ef6bce3a77-28590314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b32718fa7bbe17e649b2707991b5b6e6205fd1d' => 
    array (
      0 => '/var/www/netmon/templates/base/html/user_edit.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5713727735472ef6bce3a77-28590314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'is_root' => 0,
    'permissions' => 0,
    'permission' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5472ef6bdb0b21_72946089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5472ef6bdb0b21_72946089')) {function content_5472ef6bdb0b21_72946089($_smarty_tpl) {?><form action="./user_edit.php?section=insert_edit&user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" method="POST">

	<h1>Daten von <?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
 ändern</h1>

	<h2>Passwort</h2>

	Passwort ändern? <input type="checkbox" name="changepassword" value="true">

	<p>Altes Passwort:<br><input name="oldpassword" type="password" size="30"></p>

	<p>Neues Passwort:<br><input name="newpassword" type="password" size="30"></p>
	<p>Neues Passwort wiederholen:<br><input name="newpasswordchk" type="password" size="30"></p>

	<hr>

	<?php if ($_smarty_tpl->tpl_vars['is_root']->value){?>
		<h2>Administrative Einstellungen</h2>
		<h3>Rechtevergabe</h3>
		<p>
			<?php  $_smarty_tpl->tpl_vars['permission'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['permission']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permissions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['permission']->key => $_smarty_tpl->tpl_vars['permission']->value){
$_smarty_tpl->tpl_vars['permission']->_loop = true;
?>
				<input type="checkbox" name="permission[]" value="<?php echo $_smarty_tpl->tpl_vars['permission']->value['dual'];?>
" <?php if ($_smarty_tpl->tpl_vars['permission']->value['check']){?>checked<?php }?>> <?php if ($_smarty_tpl->tpl_vars['permission']->value['role']==3){?>Benutzer<?php }?><?php if ($_smarty_tpl->tpl_vars['permission']->value['role']==4){?>Moderator<?php }?><?php if ($_smarty_tpl->tpl_vars['permission']->value['role']==5){?>Administrator<?php }?><?php if ($_smarty_tpl->tpl_vars['permission']->value['role']==6){?>Root<?php }?><br>
			<?php } ?>
		</p>
		<hr>
	<?php }?>

	<h2>Open-ID</h2>
	<p>Open-ID (Login über Open-ID):<br><input name="openid" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['openid'];?>
"></p>

	<h2>Grunddaten</h2>

	<p>Email:<br><input name="email" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"></p>

	<p>Name:<br><input name="nachname" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['nachname'];?>
"></p>
	<p>Vorname:<br><input name="vorname" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['vorname'];?>
"></p>
	<p>Straße:<br><input name="strasse" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['strasse'];?>
"></p>
	<p>Plz:<br><input name="plz" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['plz'];?>
"></p>
	<p>Ort:<br><input name="ort" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['ort'];?>
"></p>
	<p>Telefon:<br><input name="telefon" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['telefon'];?>
"></p>

	<p>Jabber:<br><input name="jabber" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['jabber'];?>
"></p>
	<p>ICQ:<br><input name="icq" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['icq'];?>
"></p>
	<p>Website:<br><input name="website" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['website'];?>
"></p>

	<p>About:<br><textarea name="about" cols="50" rows="10"><?php echo $_smarty_tpl->tpl_vars['user']->value['about'];?>
</textarea></p>

	<h2>Benachrichtigungen</h2>
	<p>Benachrichtigungen sollen mir per 
		<select name="notification_method" size="1">
			<option value="email" <?php if ($_smarty_tpl->tpl_vars['user']->value['notification_method']=='email'){?>selected<?php }?>>Email</option>
			<option value="jabber" <?php if ($_smarty_tpl->tpl_vars['user']->value['notification_method']=='jabber'){?>selected<?php }?>>Jabber</option>
		</select> gesendet werden.
	</p>

	<p><input type="submit" value="Absenden"></p>
</form>

<hr>

<form action="./user_edit.php?section=delete&user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" method="POST">
	<h2>Benutzer Löschen?</h2>
	Ja <input type="checkbox" name="delete" value="true">
	<input type="hidden" name="user_id" value="<?php echo $_GET['user_id'];?>
">
	<p><input type="submit" value="Löschen!"></p>
</form>
<?php }} ?>