<?php /* Smarty version Smarty-3.1.14, created on 2014-11-19 07:20:04
         compiled from "/var/www/netmon/templates/base/html/api_key_list.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:388348631546c3694b35b61-70706556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ff625378dee94a649aa1254f5fc8f30ea2fe253' => 
    array (
      0 => '/var/www/netmon/templates/base/html/api_key_list.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '388348631546c3694b35b61-70706556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'api_key_list' => 0,
    'api_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546c3694bb5008_28343044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546c3694bb5008_28343044')) {function content_546c3694bb5008_28343044($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
?><script src="lib/extern/DataTables/jquery.dataTables.min.js"></script>
<script src="lib/extern/DataTables/jquery.dataTables.Plugin.DateSort.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$('#api_key_list').dataTable( {
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false,
		"aoColumns": [ 
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "date-eu" },
			{ "sType": "date-eu" },
			{ "sType": "html" }
		],
		"aaSorting": [[ 2, "desc" ]]
	} );
} );

</script>

<h1>Liste der API-Keys</h1>
<p>Auf dieser Seite kannst du die API-Keys eines bestimmten Objekts verwalten. Mittels eines API-Keys kannst du einer Software
den Zugriff auf die Daten eines Objekts sowie aller zu diesem Objekt gehörenden Unterobjekte erlauben. Diese Funktion wird
beispielsweise benötigt um einen Router mit Netmon zu verknüpfen. So ist es möglich jederzeit aktuelle Statusdaten anzuzeigen.</p>
<?php if (!empty($_smarty_tpl->tpl_vars['api_key_list']->value)){?>
	<table class="display" id="api_key_list" style="width: 100%;">
		<thead>
			<tr>
				<th>API-Key</th>
				<th>Beschreibung</th>
				<th>Angelegt</th>
				<th>Letzte Änderung</th>
				<th>Aktionen</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['api_key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['api_key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['api_key_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['api_key']->key => $_smarty_tpl->tpl_vars['api_key']->value){
$_smarty_tpl->tpl_vars['api_key']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['api_key']->value->getApiKey();?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['api_key']->value->getDescription();?>
</a></td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['api_key']->value->getCreateDate(),"%d.%m.%Y %H:%M");?>
 Uhr</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['api_key']->value->getUpdateDate(),"%d.%m.%Y %H:%M");?>
 Uhr</td>
					<td><a href="./api_key.php?section=delete&api_key_id=<?php echo $_smarty_tpl->tpl_vars['api_key']->value->getId();?>
&object_id=<?php echo $_GET['object_id'];?>
&object_type=<?php echo $_GET['object_type'];?>
">Löschen</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }else{ ?>
<p>Keine API-Keys vorhanden.</p>
<?php }?>


<h2>Neuen API-Key generieren</h2>
<form action="./api_key.php?section=insert_add&object_id=<?php echo $_GET['object_id'];?>
&object_type=<?php echo $_GET['object_type'];?>
" method="POST">
	<p><b>Beschreibung:</b><br><input name="description" type="text" size="40" value=""></p>
	<p><input type="submit" value="Generieren und Speichern"></p>
</form><?php }} ?>