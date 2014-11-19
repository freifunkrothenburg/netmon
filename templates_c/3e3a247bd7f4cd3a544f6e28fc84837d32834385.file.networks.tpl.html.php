<?php /* Smarty version Smarty-3.1.14, created on 2014-11-17 20:17:35
         compiled from "/var/www/netmon/templates/base/html/networks.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1959336775546a49cfea1d25-47915923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e3a247bd7f4cd3a544f6e28fc84837d32834385' => 
    array (
      0 => '/var/www/netmon/templates/base/html/networks.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1959336775546a49cfea1d25-47915923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'networklist' => 0,
    'network' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a49cff19dd6_08017857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a49cff19dd6_08017857')) {function content_546a49cff19dd6_08017857($_smarty_tpl) {?><script src="lib/extern/DataTables/jquery.dataTables.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$('#networklist').dataTable( {
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false,
		"aoColumns": [ 
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "html" },
			{ "sType": "string" }
		],
		"aaSorting": [[ 0, "desc" ]]
	} );
} );

</script>

<h1>Netzwerke</h1>
<p>Administratoren können Netzwerke anlegen aus denen Benutzer dann den Interfaces ihrer Router IP-Adressen zuweisen können.</p>

<h2>Eingetragene Netzwerke</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['networklist']->value)){?>
	<table class="display" id="networklist" style="width: 100%;">
		<thead>
			<tr>
				<th>Netzwerk</th>
				<th>IP-Version</th>
				<th>IP-Range</th>
				<th>Benutzer</h2>
				<th>Eingetragene IPs</h2>
				<th>Aktionen</h2>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['network'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['network']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['networklist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['network']->key => $_smarty_tpl->tpl_vars['network']->value){
$_smarty_tpl->tpl_vars['network']->_loop = true;
?>
				<tr>
					<td><a href="./iplist.php?network_id=<?php echo $_smarty_tpl->tpl_vars['network']->value->getNetworkId();?>
"><?php echo $_smarty_tpl->tpl_vars['network']->value->getIp();?>
/<?php echo $_smarty_tpl->tpl_vars['network']->value->getNetmask();?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['network']->value->getIpv();?>
</td>
					<td></td>
					<td></td>
					<td><?php echo $_smarty_tpl->tpl_vars['network']->value->getIplist()->getTotalCount();?>
</td>
					<td><a href="./networks.php?action=delete&network_id=<?php echo $_smarty_tpl->tpl_vars['network']->value->getNetworkId();?>
">Löschen</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }else{ ?>
	<p>Keine Netzwerke konfiguriert.</p>
<?php }?>

<h2>Neues Netzwerk eintragen</h2>
<form action="./networks.php" method="POST">
		<p>
		<select name="ipv">
			<option value="4">IPv4</option>
			<option value="6">IPv6</option>
		</select>
		<input name="ip" type="text" size="30" maxlength="30">
		<select name="netmask">
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 128+1 - (0) : 0-(128)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
		<?php }} ?>
		</select>

		<input type="submit" value="Eintragen">
		</p>
</form>
<?php }} ?>