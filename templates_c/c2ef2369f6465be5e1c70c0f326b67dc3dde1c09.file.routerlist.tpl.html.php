<?php /* Smarty version Smarty-3.1.14, created on 2014-11-17 19:19:32
         compiled from "/var/www/netmon/templates/base/html/routerlist.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1976755847546a3c345b9782-68896242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2ef2369f6465be5e1c70c0f326b67dc3dde1c09' => 
    array (
      0 => '/var/www/netmon/templates/base/html/routerlist.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1976755847546a3c345b9782-68896242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'routerlist' => 0,
    'router' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a3c34656b16_33479734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a3c34656b16_33479734')) {function content_546a3c34656b16_33479734($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/var/www/netmon/lib/extern/smarty/plugins/function.math.php';
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
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "date-eu" },
			{ "sType": "html" },
			{ "sType": "numeric" },
			{ "sType": "numeric" },
		],
		"aaSorting": [[ 6, "desc" ]]
	} );
} );

</script>

<h1>Liste der Router</h1>
<?php if (!empty($_smarty_tpl->tpl_vars['routerlist']->value)){?>
	<table class="display" id="routerlist" style="width: 100%;">
		<thead>
			<tr>
				<th>Hostname</th>
				<th>O</th>
				<th>Technik</th>
				<th>Angelegt</th>
				<th>Benutzer</th>
				<th>Up (Std.)</th>
				<th>Clients</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['router'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['router']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['routerlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['router']->key => $_smarty_tpl->tpl_vars['router']->value){
$_smarty_tpl->tpl_vars['router']->_loop = true;
?>
				<tr>
					<td><a href="./router.php?router_id=<?php echo $_smarty_tpl->tpl_vars['router']->value->getRouterId();?>
"><?php echo $_smarty_tpl->tpl_vars['router']->value->getHostname();?>
</a></td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getStatus()=="online"){?>
							<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" title="online" alt="online">
						<?php }elseif($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getStatus()=="offline"){?>
							<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" title="offline" alt="offline">
						<?php }elseif($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getStatus()=="unknown"){?>
							<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_unknown_small.png" title="pingbar" alt="pingbar">
						<?php }?>
					</td>
					<td><?php if ($_smarty_tpl->tpl_vars['router']->value->getChipset()->getHardwareName()){?><?php echo $_smarty_tpl->tpl_vars['router']->value->getChipset()->getHardwareName();?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['router']->value->getChipset()->getName();?>
<?php }?></td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['router']->value->getCreateDate(),"%d.%m.%Y");?>
</td>
					<td><a href="./user.php?user_id=<?php echo $_smarty_tpl->tpl_vars['router']->value->getUserId();?>
"><?php echo $_smarty_tpl->tpl_vars['router']->value->getUser()->getNickname();?>
</a></td>
					<td><?php echo smarty_function_math(array('equation'=>"round(x,1)",'x'=>$_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getUptime()/60/60),$_smarty_tpl);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getClientCount();?>
</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }else{ ?>
<p>Keine Router vorhanden.</p>
<?php }?><?php }} ?>