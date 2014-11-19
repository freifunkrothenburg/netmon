<?php /* Smarty version Smarty-3.1.14, created on 2014-11-17 21:20:33
         compiled from "/var/www/netmon/templates/base/html/routers_trying_to_assign.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:41995034546a589106f823-27247294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65b3abf2764edb250d84311b1a2fed4a6fd93e2a' => 
    array (
      0 => '/var/www/netmon/templates/base/html/routers_trying_to_assign.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41995034546a589106f823-27247294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'routerlist' => 0,
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a5891146e41_78727292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a5891146e41_78727292')) {function content_546a5891146e41_78727292($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
?><script src="lib/extern/DataTables/jquery.dataTables.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$('#routerlist').dataTable( {
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false,
		"aoColumns": [ 
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "html" }
		],
		"aaSorting": [[ 0, "asc" ]]
	} );
} );

</script>

<h1>Liste der neuen Router</h1>
<?php if (!empty($_smarty_tpl->tpl_vars['routerlist']->value)){?>
	<table class="display" id="routerlist" style="width: 100%;">
		<thead>
			<tr>
				<th>Hostname</th>
				<th>Mac Adresse</th>
				<th>Erstellt</th>
				<th>Update</th>
				<th>Aktionen</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['router'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['router']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routerlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['router']->key => $_smarty_tpl->tpl_vars['router']->value){
$_smarty_tpl->tpl_vars['router']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['router']->key;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['router']->value['hostname'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['router']->value['router_auto_assign_login_string'];?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['router']->value['create_date'],"%d.%m.%Y %H:%M");?>
 Uhr</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['router']->value['update_date'],"%d.%m.%Y %H:%M");?>
 Uhr</td>
					<td><a href="./routereditor.php?section=new&crawl_method=netmon&allow_router_auto_assign=1&router_auto_assign_login_string=<?php echo $_smarty_tpl->tpl_vars['router']->value['router_auto_assign_login_string'];?>
">Übernehmen</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }else{ ?>
	<p>In der Liste der neuen Router ist derzeit kein Router eingetragen.</p>
<?php }?><?php }} ?>