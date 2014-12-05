<?php /* Smarty version Smarty-3.1.14, created on 2014-11-21 06:45:51
         compiled from "/var/www/netmon/templates/base/html/ip_add.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:192217129546ed18f5c90e1-06096026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a11d070213e1d966d33499e406c57fe30e0d8c2' => 
    array (
      0 => '/var/www/netmon/templates/base/html/ip_add.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192217129546ed18f5c90e1-06096026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'networkinterface' => 0,
    'router' => 0,
    'networklist' => 0,
    'network' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546ed18f6402a2_47071522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546ed18f6402a2_47071522')) {function content_546ed18f6402a2_47071522($_smarty_tpl) {?><form action="./ip.php?section=insert_add&interface_id=<?php echo $_GET['interface_id'];?>
&router_id=<?php echo $_GET['router_id'];?>
" method="POST">
	<h1>IP-Adresse hinzufügen</h1>
	<p>Hier kannst du dem Interface <i><?php echo $_smarty_tpl->tpl_vars['networkinterface']->value->getName();?>
</i> des Routers <i><?php echo $_smarty_tpl->tpl_vars['router']->value->getHostname();?>
</i> eine IP-Adresse hinzufügen. Nachdem du die IP-Adresse hinzugefügt hast, kannst du der IP-Adresse Dienste zuweisen und diese so im Freifunknetzwerk bekanntgeben.</p>
	
	<h2>IP-Adresse konfigurieren</h2>
	<p>
		<b>Netzwerk:</b> 
		<select id="network_id" name="network_id">
			<option value="false" selected='selected'>Bitte wählen</option>
			<?php  $_smarty_tpl->tpl_vars['network'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['network']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['networklist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['network']->key => $_smarty_tpl->tpl_vars['network']->value){
$_smarty_tpl->tpl_vars['network']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['network']->value->getNetworkId();?>
" <?php if ($_GET['network_id']==$_smarty_tpl->tpl_vars['network']->value->getNetworkId()){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['network']->value->getIp();?>
/<?php echo $_smarty_tpl->tpl_vars['network']->value->getNetmask();?>
</option>
			<?php } ?>
		</select>
	</p>
	
	<p><b>IP-Adresse:</b> <input name="ip" type="text" size="13"></p>
	
	<p><input type="submit" value="Absenden"></p>
</form><?php }} ?>