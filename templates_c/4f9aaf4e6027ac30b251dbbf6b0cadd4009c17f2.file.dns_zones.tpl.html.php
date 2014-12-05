<?php /* Smarty version Smarty-3.1.14, created on 2014-11-19 19:16:52
         compiled from "/var/www/netmon/templates/base/html/dns_zones.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:230763116546cde94005e34-61308270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f9aaf4e6027ac30b251dbbf6b0cadd4009c17f2' => 
    array (
      0 => '/var/www/netmon/templates/base/html/dns_zones.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230763116546cde94005e34-61308270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dns_zone_list' => 0,
    'dns_zone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546cde94086843_39843886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546cde94086843_39843886')) {function content_546cde94086843_39843886($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
?><script src="lib/extern/DataTables/jquery.dataTables.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$('#dns_zone_list').dataTable( {
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false,
		"aoColumns": [ 
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "html" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "html" }
		],
		"aaSorting": [[ 0, "desc" ]]
	} );
} );

</script>

<h1>DNS-Zonen</h1>

<p>Hier können optional Netzinterne DNS-Zonen konfiguriert werden zu denen Benutzer dann eigene DNS-Records für
Services eintragen können.</p>

<h2>Eingetragene DNS-Zonen</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['dns_zone_list']->value)){?>
	<table class="display" id="dns_zone_list" style="width: 100%;">
		<thead>
			<tr>
				<th>Name</th>
				<th>Primary DNS</th>
				<th>Secondary DNS</th>
				<th>Refresh</th>
				<th>Retry</th>
				<th>Expire</th>
				<th>TTL</th>
				<th>Benutzer</th>
				<th>Angelegt</th>
				<th>Aktionen</h2>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['dns_zone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dns_zone']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dns_zone_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dns_zone']->key => $_smarty_tpl->tpl_vars['dns_zone']->value){
$_smarty_tpl->tpl_vars['dns_zone']->_loop = true;
?>
				<tr>
					<td><a href="./dns_zone.php?dns_zone_id=<?php echo $_smarty_tpl->tpl_vars['dns_zone']->value->getDnsZoneId();?>
"><?php echo $_smarty_tpl->tpl_vars['dns_zone']->value->getName();?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['dns_zone']->value->getPriDns();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['dns_zone']->value->getSecDns();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['dns_zone']->value->getRefresh();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['dns_zone']->value->getRetry();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['dns_zone']->value->getExpire();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['dns_zone']->value->getTtl();?>
</td>
					<td><a href="./user.php?user_id=<?php echo $_smarty_tpl->tpl_vars['dns_zone']->value->getUser()->getUserId();?>
"><?php echo $_smarty_tpl->tpl_vars['dns_zone']->value->getUser()->getNickname();?>
</a></td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['dns_zone']->value->getCreateDate(),"%d.%m.%Y");?>
</td>
					<td><a href="./dns_zone.php?section=delete&dns_zone_id=<?php echo $_smarty_tpl->tpl_vars['dns_zone']->value->getDnsZoneId();?>
">Löschen</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }else{ ?>
	<p>Keine DNS-Zonen eingetragen.</p>
<?php }?>

<h2>Neue DNS-Zone eintragen</h2>
<form action="./dns_zone.php?section=insert_add" method="POST">
	<p><b>Name:</b><br><input name="name" type="text" size="10" value=""></p>
	<p><b>Primary DNS:</b><br><input name="pri_dns" type="text" size="10" value=""></p>
	<p><b>Secondary DNS:</b><br><input name="sec_dns" type="text" size="10" value=""></p>
	<p><b>Refresh:</b><br><input name="refresh" type="text" size="10" value="604800"></p>
	<p><b>Retry:</b><br><input name="retry" type="text" size="10" value="86400"></p>
	<p><b>Expire:</b><br><input name="expire" type="text" size="10" value="2419200"></p>
	<p><b>Time to live:</b><br><input name="ttl" type="text" size="10" value="604800"></p>
	
	
	<p><input type="submit" value="Eintragen"></p>
</form><?php }} ?>