<?php /* Smarty version Smarty-3.1.14, created on 2014-11-19 07:20:41
         compiled from "/var/www/netmon/templates/base/html/event_notifications.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:470644832546c36b98a8b58-14211893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82ee72c3873875ce45bdec6fb9fbc90be840b4e1' => 
    array (
      0 => '/var/www/netmon/templates/base/html/event_notifications.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '470644832546c36b98a8b58-14211893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'routerlist' => 0,
    'router' => 0,
    'event_notification_list' => 0,
    'event_notification' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546c36b9e8ddf8_41006344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546c36b9e8ddf8_41006344')) {function content_546c36b9e8ddf8_41006344($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
?><script src="lib/extern/DataTables/jquery.dataTables.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$('#event_notification_list').dataTable( {
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
		"aaSorting": [[ 0, "desc" ]]
	} );
} );

var object_list = new Array();

object_list['router_offline'] = new Array();

<?php  $_smarty_tpl->tpl_vars['router'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['router']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routerlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['router']->key => $_smarty_tpl->tpl_vars['router']->value){
$_smarty_tpl->tpl_vars['router']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['router']->key;
?>
	object_list['router_offline'].push(new Array(<?php echo $_smarty_tpl->tpl_vars['router']->value->getRouterId();?>
, '<?php echo $_smarty_tpl->tpl_vars['router']->value->getHostname();?>
'));
<?php } ?>


object_list['network_down'] = new Array( new Array('netmon', 'Netmon'));


function apply_object_list(f) {
	var action = f.action.options[f.action.selectedIndex].value;
	f.object.options.length = object_list[action].length;
	for (var i=0; i<object_list[action].length; i++) {
		f.object.options[i].value = object_list[action][i][0];
		f.object.options[i].text = object_list[action][i][1];
	}
	/*
	if(action=='router_offline') {
		// ganze XML-datei einlesen und in variable 'XMLmediaArray' speichern
		$.get("./api/rest/routerlist", function(XMLmediaArray){
			// suche nach jedem (each) 'bluray' abschnitt 
			console.log($(XMLmediaArray));
			$(XMLmediaArray).find("router").each(function(){
				// gefundenen abschnitt in variable zwischenspeichern (cachen)
				var $myMedia = $(this);
				
				// einzelne werte auslesen und zwischenspeichern
				// attribute: funktion 'attr()'
				// tags: nach dem tag suchen & text auslesen
				var router_id = $myMedia.children('router_id').text();
				var hostname = $myMedia.children('hostname').text();
				
				// daten von jeden treffer ausgeben
				// unformatiert...nur zum zeigen!
				// append = inhalt/string dem kontainer anhängen
				//console.log("id: "+router_id+", hostname: "+hostname);
				f.object.add(new Option(hostname, router_id),
							 null);
			});
		});
	}*/
}


</script>

<h1>Benachrichtigungen</h1>

<p>Benutzer können sich beim Auftreten bestimmter Ereignisse innerhalb des Netzwerks benachrichtigen lassen.
Diese Benachrichtigungen können hier konfiguriert werden.</p>

<h2>Eingetragene Benachrichtigungen</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['event_notification_list']->value)){?>
	<table class="display" id="event_notification_list" style="width: 100%;">
		<thead>
			<tr>
				<th>Was passiert</th>
				<th>Wer meldet</th>
				<th>Benachrichtigung pausiert</th>
				<th>Letzte Benachrichtigung</th>
				<th>Aktionen</h2>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['event_notification'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event_notification']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event_notification_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event_notification']->key => $_smarty_tpl->tpl_vars['event_notification']->value){
$_smarty_tpl->tpl_vars['event_notification']->_loop = true;
?>
				<tr>
					<td><?php if ($_smarty_tpl->tpl_vars['event_notification']->value->getAction()=='router_offline'){?>Router ist offline<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['event_notification']->value->getAction();?>
<?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['event_notification']->value->getAction()=='router_offline'){?><a href="./router.php?router_id=<?php echo $_smarty_tpl->tpl_vars['event_notification']->value->getObject();?>
"><?php echo $_smarty_tpl->tpl_vars['event_notification']->value->getObjectData()->getHostname();?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['event_notification']->value->getObject();?>
<?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['event_notification']->value->getNotified()==true){?>Ja<?php }else{ ?>Nein<?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['event_notification']->value->getNotificationDate()=='-62169987600'){?>Bisher keine versendet<?php }else{ ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event_notification']->value->getNotificationDate(),"%d.%m.%Y %H:%M");?>
 Uhr<?php }?></td>
					<td><a href="./event_notifications.php?action=delete&event_notification_id=<?php echo $_smarty_tpl->tpl_vars['event_notification']->value->getEventNotificationId();?>
">Nicht mehr benachrichtigen</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }else{ ?>
	<p>Keine Benachrichtigungen konfiguriert.</p>
<?php }?>

<h2>Neue Benachrichtigung eintragen</h2>
<form action="./event_notifications.php" method="POST">
		<p>
		<select name="action" onchange="apply_object_list(this.form);">
			<option value="router_offline">Router ist offline</option>
			<option value="network_down">Großer Teil des Netzwerks offline</option>
		</select>
		<select name="object">
			<?php  $_smarty_tpl->tpl_vars['router'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['router']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routerlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['router']->key => $_smarty_tpl->tpl_vars['router']->value){
$_smarty_tpl->tpl_vars['router']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['router']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['router']->value->getRouterId();?>
"><?php echo $_smarty_tpl->tpl_vars['router']->value->getHostname();?>
</option>
			<?php } ?>
		</select>
		<input type="submit" value="Eintragen">
		</p>
</form>
<?php }} ?>