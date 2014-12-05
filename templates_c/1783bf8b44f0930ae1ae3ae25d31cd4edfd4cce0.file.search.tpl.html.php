<?php /* Smarty version Smarty-3.1.14, created on 2014-11-20 16:27:36
         compiled from "/var/www/netmon/templates/base/html/search.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:658206887546e0868965c30-12678124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1783bf8b44f0930ae1ae3ae25d31cd4edfd4cce0' => 
    array (
      0 => '/var/www/netmon/templates/base/html/search.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '658206887546e0868965c30-12678124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'object' => 0,
    'object_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546e0868b27dc9_88643756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546e0868b27dc9_88643756')) {function content_546e0868b27dc9_88643756($_smarty_tpl) {?><h1>Suchen</h1>

<form action="./search.php" method="POST">
	<p>
		<b>Objekt: </b>
		<select name="what">
			<option <?php if (isset($_POST['what'])&&$_POST['what']=='ip'){?>selected<?php }?> value="ip">Ip-Adresse</option>
<!--			<option <?php if (isset($_POST['what'])&&$_POST['what']=='mac_addr'){?>selected<?php }?> value="mac_addr">Mac Adresse</option>-->
		</select>
	</p>
	
	<p>
		<b>Suchterm: </b>
		<select name="ipv">
			<option <?php if (isset($_POST['ipv'])&&$_POST['ipv']=='6'){?>selected<?php }?> value="6">IPv6</option>
			<option <?php if (isset($_POST['ipv'])&&$_POST['ipv']=='4'){?>selected<?php }?> value="4">IPv4</option>
		</select> 
		<input name="ip" type="text" size="40" value="<?php if (isset($_POST['ip'])){?><?php echo $_POST['ip'];?>
<?php }?>">/<input name="netmask" type="text" size="3" value="<?php if (isset($_POST['netmask'])){?><?php echo $_POST['netmask'];?>
<?php }?>">
	</p>
	
	<p><input type="submit" value="suchen"></p>
</form>

<?php if (!empty($_POST['what'])){?>
	<h2>Ergebnis</h2>
	<?php if (isset($_smarty_tpl->tpl_vars['object']->value)){?>
		<?php if ($_smarty_tpl->tpl_vars['object']->value=='router'){?>
			<a href="./router.php?router_id=<?php echo $_smarty_tpl->tpl_vars['object_data']->value->getRouterId();?>
"><?php echo $_smarty_tpl->tpl_vars['object_data']->value->getHostname();?>
</a>
		<?php }?>
	<?php }else{ ?>
		<p>Leider nichts gefunden.</p>
	<?php }?>
<?php }?><?php }} ?>