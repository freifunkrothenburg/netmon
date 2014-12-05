<?php /* Smarty version Smarty-3.1.14, created on 2014-11-19 19:33:04
         compiled from "/var/www/netmon/templates/base/html/config_edit_hardware_name.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:782655042546ce260348ec1-42328199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be61e39a8f8d68059ceb9695e55039fb6cef1c0c' => 
    array (
      0 => '/var/www/netmon/templates/base/html/config_edit_hardware_name.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '782655042546ce260348ec1-42328199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chipset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546ce2603914c4_95478533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546ce2603914c4_95478533')) {function content_546ce2603914c4_95478533($_smarty_tpl) {?><h1>Edit Chipset <?php echo $_smarty_tpl->tpl_vars['chipset']->value->getName();?>
 </h1>
<h2>Chipset löschen</h2>
<form action="./config.php?section=insert_delete_chipset&chipset_id=<?php echo $_GET['chipset_id'];?>
" method="POST">
	<input name="really_delete" type="checkbox" value="1"> Chipset <?php echo $_smarty_tpl->tpl_vars['chipset']->value->getName();?>
 wirklich löschen?
	<p><input type="submit" value="Löschen"></p>
</form>

<h2>Chipset ändern</h2>
<form action="./config.php?section=insert_edit_chipset_name&chipset_id=<?php echo $_GET['chipset_id'];?>
" method="POST">
	<p>
		<b>Chipset:</b><br><input name="name" size="30" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['chipset']->value->getName();?>
">
	</p>
	<p>
		<b>Name:</b><br><input name="hardware_name" size="30" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['chipset']->value->getHardwareName();?>
">
	</p>
	
	<p><input type="submit" value="Absenden"></p>
</form><?php }} ?>