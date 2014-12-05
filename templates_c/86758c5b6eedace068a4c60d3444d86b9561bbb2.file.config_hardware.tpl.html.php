<?php /* Smarty version Smarty-3.1.14, created on 2014-11-19 19:32:57
         compiled from "/var/www/netmon/templates/base/html/config_hardware.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1125662331546ce2593e5d44-57298602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86758c5b6eedace068a4c60d3444d86b9561bbb2' => 
    array (
      0 => '/var/www/netmon/templates/base/html/config_hardware.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1125662331546ce2593e5d44-57298602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chipsetlist' => 0,
    'chipset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546ce259443c27_61599502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546ce259443c27_61599502')) {function content_546ce259443c27_61599502($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
?><script src="lib/extern/DataTables/jquery.dataTables.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$('#chipsetlist').dataTable( {
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false,
		"aoColumns": [ 
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "html" }
		],
		"aaSorting": [[ 0, "desc" ]]
	} );
} );

$(document).ready(function() {
	$('#chipsetlist_unnamed').dataTable( {
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false,
		"aoColumns": [ 
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "html" }
		],
		"aaSorting": [[ 0, "desc" ]]
	} );
} );

</script>

<h1>Konfiguration der Chipsätze</h1>
<p>Hier können den Chipbezeichnungen der Hersteller Routernamen für normalsterbliche zugewiesen werden. Neue Chipbezeichnungen werden
normalerweise wärend des Crawlens automatisch aufgenommen. Es besteht auch die Möglichkeit diese manuell hinzuzufügen.</p>
<h2>Vorhandene Chipsätze</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['chipsetlist']->value)){?>
<table class="display" id="chipsetlist">
	<thead>
		<tr>
			<th>Chipset</th>
			<th>Name</th>
			<th>Erstellt</th>
			<th>Aktionen</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['chipset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chipset']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chipsetlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chipset']->key => $_smarty_tpl->tpl_vars['chipset']->value){
$_smarty_tpl->tpl_vars['chipset']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['chipset']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['chipset']->value->getName();?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['chipset']->value->getHardwareName();?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['chipset']->value->getCreateDate(),"%d.%m.%Y %H:%M");?>
 Uhr</td>
				<td><a href="./config.php?section=edit_hardware_name&chipset_id=<?php echo $_smarty_tpl->tpl_vars['chipset']->value->getChipsetId();?>
">Editieren</a></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<?php }else{ ?>
	<p>Keine Chipsätze vorhanden. Neue Chipsets werden wärend der Crawls automatisch hinzugefügt und können dann zugewiesen werden.</p>
<?php }?>

<h2>Neuen Chipsatz eintragen</h2>
<form action="./config.php?section=add_hardware" method="POST">
	<p><b>Chipsatz:</b><br><input name="name" type="text" size="30" value=""></p>
	<p><b>Name:</b><br><input name="hardware_name" type="text" size="30" value=""></p>
	
	<p><input type="submit" value="Eintragen"></p>
</form><?php }} ?>