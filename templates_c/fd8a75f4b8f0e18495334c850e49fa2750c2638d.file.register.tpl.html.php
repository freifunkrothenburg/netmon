<?php /* Smarty version Smarty-3.1.14, created on 2014-11-17 19:18:45
         compiled from "/var/www/netmon/templates/base/html/register.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:515809909546a3c051a4ea9-56006646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd8a75f4b8f0e18495334c850e49fa2750c2638d' => 
    array (
      0 => '/var/www/netmon/templates/base/html/register.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '515809909546a3c051a4ea9-56006646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template' => 0,
    'enable_network_policy' => 0,
    'network_policy_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a3c05249700_74436698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a3c05249700_74436698')) {function content_546a3c05249700_74436698($_smarty_tpl) {?><h1>Registrieren</h1>
<p>Wenn du einen Freifunk Knoten betreiben möchtest, musst du dich auf unserem Verwaltungsportal registrieren. Nach Absenden deiner Daten bekommst du eine Bestätigungsmail mit deinem Benutzernamen, deinem Passwort und einem Bestätigungslink über den du deine Registration bestätigen musst.</p>

<h2>Daten</h2>
<form action="./register.php<?php if (isset($_GET['openid'])){?>?openid=<?php echo $_GET['openid'];?>
<?php }?>" method="POST">
	<?php if (!empty($_GET['openid'])){?>
	<p>
		Open-ID:<br><input name="openid" type="text" size="30" maxlength="30" value="<?php if (isset($_GET['openid'])){?><?php echo $_GET['openid'];?>
<?php }?>">
		<a href="./register.php"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/arrow_undo.png" style="border-style: none;"></a>
	</p>
	<?php }?>
	<p>
		Benutzername:<br><input name="nickname" type="text" size="30" maxlength="30" value="<?php if (isset($_POST['nickname'])){?><?php echo $_POST['nickname'];?>
<?php }?>">
		<?php if (empty($_GET['openid'])){?>
			<a href="./register.php?openid=openid.example.com"><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/openid-logo-small.png" style="border-style: none;"></a>
		<?php }?>
	</p>
	<?php if (empty($_GET['openid'])){?>
		<p>Passwort:<br><input name="password" type="password" size="30" value="<?php if (isset($_POST['password'])){?><?php echo $_POST['password'];?>
<?php }?>"></p>
		<p>Passwort wiederholen:<br><input name="passwordchk" type="password" size="30" value="<?php if (isset($_POST['passwordchk'])){?><?php echo $_POST['passwordchk'];?>
<?php }?>"></p>
	<?php }?>
	<p>Emailadresse:<br><input name="email" type="text" size="30" maxlength="60" value="<?php if (isset($_POST['email'])){?><?php echo $_POST['email'];?>
<?php }?>"></p>
	<?php if ($_smarty_tpl->tpl_vars['enable_network_policy']->value=='true'){?>
	<p><input type="checkbox" <?php if (isset($_POST['agb'])){?>checked="checked"<?php }?> name="agb" value="true"> Ich habe die <a href="<?php echo $_smarty_tpl->tpl_vars['network_policy_url']->value;?>
" target="_blank" >Netzwerkpolicy</a> gelesen und erkäre mich bereit den dort beschriebenen Verpflichtungen nachzukommen.</p>
	<?php }?>
	<p><input type="submit" value="Registrieren"></p>
</form>
<?php }} ?>