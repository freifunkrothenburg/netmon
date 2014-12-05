<?php /* Smarty version Smarty-3.1.14, created on 2014-11-20 16:28:18
         compiled from "/var/www/netmon/templates/base/html/iplist.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:459224387546e0892f2a578-79380557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd24c0ff182ed293e895495a77753bfaa4aeef05f' => 
    array (
      0 => '/var/www/netmon/templates/base/html/iplist.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '459224387546e0892f2a578-79380557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'network' => 0,
    'iplist' => 0,
    'ip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546e08930b1757_45326841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546e08930b1757_45326841')) {function content_546e08930b1757_45326841($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
?><script src="lib/extern/DataTables/jquery.dataTables.min.js"></script>
<script src="lib/extern/DataTables/jquery.dataTables.Plugin.DateSort.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$('#routerlist').dataTable( {
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false,
		"aoColumns": [ 
			{ "sType": "html" },
			{ "sType": "numeric" },
			{ "sType": "html" },
			{ "sType": "html" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "date-eu" }
		],
		"aaSorting": [[ 0, "asc" ]]
	} );
} );

</script>

<h1>IP-Adressen im Netzwerk <?php echo $_smarty_tpl->tpl_vars['network']->value->getIpCompressed();?>
/<?php echo $_smarty_tpl->tpl_vars['network']->value->getNetmask();?>
</h1>
<?php if (!empty($_smarty_tpl->tpl_vars['iplist']->value)){?>
	<table class="display" id="routerlist" style="width: 100%">
		<thead>
			<tr>
				<th>IP</th>
				<th>IP-Version</th>
				<th>Benutzer</th>
				<th>Router</th>
				<th>Interface</th>
				<th>Ressource-Records</th>
				<th>Angelegt am</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['ip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['iplist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ip']->key => $_smarty_tpl->tpl_vars['ip']->value){
$_smarty_tpl->tpl_vars['ip']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['ip']->value->getIpCompressed();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['ip']->value->getNetwork()->getIpv();?>
</td>
					<td>TODO</td>
					<td>TODO</td>
					<td>TODO</td>
					<td>TODO</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ip']->value->getCreateDate(),"%d.%m.%Y");?>
</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }else{ ?>
	<p>Keine IP-Adressen vorhanden.</p>
<?php }?><?php }} ?>