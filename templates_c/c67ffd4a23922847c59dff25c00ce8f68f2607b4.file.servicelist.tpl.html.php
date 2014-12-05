<?php /* Smarty version Smarty-3.1.14, created on 2014-11-19 19:16:50
         compiled from "/var/www/netmon/templates/base/html/servicelist.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:127485785546cde92a9ed70-00874870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c67ffd4a23922847c59dff25c00ce8f68f2607b4' => 
    array (
      0 => '/var/www/netmon/templates/base/html/servicelist.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127485785546cde92a9ed70-00874870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'servicelist' => 0,
    'service' => 0,
    'i' => 0,
    'ip' => 0,
    'dns_ressource_record' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546cde92b21f17_45129052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546cde92b21f17_45129052')) {function content_546cde92b21f17_45129052($_smarty_tpl) {?><script src="lib/extern/DataTables/jquery.dataTables.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$('#servicelist').dataTable( {
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false,
		"aoColumns": [ 
			{ "sType": "html" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "html" }
		],
		"aaSorting": [[ 0, "asc" ]]
	} );
} );


</script>

<h1>Liste der Dienste</h1>
<?php if (!empty($_smarty_tpl->tpl_vars['servicelist']->value)){?>
	<table class="display" id="servicelist" style="width: 100%;">
		<thead>
			<tr>
				<th>Title</th>
				<th>Ips</th>
				<th>Ressource-Records</th>
				<th>Port</th>
				<th>Benutzer</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servicelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
$_smarty_tpl->tpl_vars['service']->_loop = true;
?>
				<tr>
					<td><a href="./service.php?service_id=<?php echo $_smarty_tpl->tpl_vars['service']->value->getServiceId();?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value->getTitle();?>
</a></td>
					<td>
						<?php  $_smarty_tpl->tpl_vars['ip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ip']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['service']->value->getIplist()->getIplist(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ip']->key => $_smarty_tpl->tpl_vars['ip']->value){
$_smarty_tpl->tpl_vars['ip']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['ip']->key;
?><?php if ($_smarty_tpl->tpl_vars['i']->value>0){?>,<br><?php }?><?php echo $_smarty_tpl->tpl_vars['ip']->value->getIp();?>
<?php } ?>
					</td>
					<td>
						<?php  $_smarty_tpl->tpl_vars['dns_ressource_record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dns_ressource_record']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['service']->value->getDnsRessourceRecordList()->getDnsRessourceRecordList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dns_ressource_record']->key => $_smarty_tpl->tpl_vars['dns_ressource_record']->value){
$_smarty_tpl->tpl_vars['dns_ressource_record']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['dns_ressource_record']->key;
?><?php if ($_smarty_tpl->tpl_vars['i']->value>0){?>,<br><?php }?><?php echo $_smarty_tpl->tpl_vars['dns_ressource_record']->value->getHost();?>
.<?php echo $_smarty_tpl->tpl_vars['dns_ressource_record']->value->getDnsZone()->getName();?>
<?php } ?>
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['service']->value->getPort();?>
</td>
					<td><a href="./user.php?user_id=<?php echo $_smarty_tpl->tpl_vars['service']->value->getUserId();?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value->getUser()->getNickname();?>
</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }else{ ?>
	<p>Keine Dienste vorhanden.</p>
<?php }?><?php }} ?>