<?php /* Smarty version Smarty-3.1.14, created on 2014-11-17 19:19:27
         compiled from "/var/www/netmon/templates/base/html/user.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:377792271546a3c2fc8eeb8-23581204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c315e4c5496ab3c80e2b6410a567e2d9c2142a4' => 
    array (
      0 => '/var/www/netmon/templates/base/html/user.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '377792271546a3c2fc8eeb8-23581204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'is_logged_in' => 0,
    'role' => 0,
    'first_role' => 0,
    'eventlist' => 0,
    'event' => 0,
    'data' => 0,
    'routerlist' => 0,
    'routersnotassigned_list' => 0,
    'router' => 0,
    'template' => 0,
    'servicelist' => 0,
    'service' => 0,
    'i' => 0,
    'ip' => 0,
    'dns_ressource_record' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a3c30000ce0_12765118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a3c30000ce0_12765118')) {function content_546a3c30000ce0_12765118($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/var/www/netmon/lib/extern/smarty/plugins/function.math.php';
?><script src="lib/extern/DataTables/jquery.dataTables.min.js"></script>
<script src="lib/extern/DataTables/jquery.dataTables.Plugin.DateSort.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$('#new_routerlist').dataTable( {
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

$(document).ready(function() {
	$('#domainlist').dataTable( {
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false,
		"aoColumns": [ 
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "html" }
		],
		"aaSorting": [[ 0, "asc" ]]
	} );
} );

</script>

<h1>Benutzerseite von <?php echo $_smarty_tpl->tpl_vars['user']->value->getNickname();?>
</h1>

<div style="width: 100%; overflow: hidden;">
	<div style="float:left; width: 47%;">
		<h2>Daten</h2>
		<p>
			<?php if ($_smarty_tpl->tpl_vars['is_logged_in']->value){?>
				<?php if ($_SESSION['user_id']==$_smarty_tpl->tpl_vars['user']->value->getUserId()){?><b>API Key:</b> <?php echo $_smarty_tpl->tpl_vars['user']->value->getApiKey();?>
<br><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value->getFirstname()||$_smarty_tpl->tpl_vars['user']->value->getLastname()){?><b>Name:</b> <?php echo $_smarty_tpl->tpl_vars['user']->value->getFirstname();?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->getLastname();?>
<br><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value->getStreet()){?><b>Strasse: </b><?php echo $_smarty_tpl->tpl_vars['user']->value->getStreet();?>
<br><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value->getZipcode()||$_smarty_tpl->tpl_vars['user']->value->getCity()){?><b>Wohnort:</b>  <?php echo $_smarty_tpl->tpl_vars['user']->value->getZipcode();?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->getCity();?>
<br><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value->getPhonenumer()){?><b>Telefon:</b> <?php echo $_smarty_tpl->tpl_vars['user']->value->getPhonenumer();?>
<br><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value->getEmail()){?><b>Email:</b> <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
</a><br><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value->getJabber()){?><b>Jabber-ID:</b> <?php echo $_smarty_tpl->tpl_vars['user']->value->getJabber();?>
<br><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value->getWebsite()){?><b>Website:</b> <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value->getWebsite();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getWebsite();?>
</a><br><?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['user']->value->getDescription()){?><b>Beschreibung:</b> <?php echo $_smarty_tpl->tpl_vars['user']->value->getDescription();?>
<br><?php }?>
			<b>Anmeldedatum:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->getCreateDate(),"%d.%m.%Y");?>
<br>
			<b>Benutzerrollen:</b>	<?php $_smarty_tpl->tpl_vars["first_role"] = new Smarty_variable(true, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value->getRoles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?><!--
							--><?php if ($_smarty_tpl->tpl_vars['role']->value['check']){?><!--
								--><?php if (!$_smarty_tpl->tpl_vars['first_role']->value){?>, <?php }?><!--
								--><?php if ($_smarty_tpl->tpl_vars['role']->value['role']==3){?>Benutzer<?php }?><!--
								--><?php if ($_smarty_tpl->tpl_vars['role']->value['role']==4){?>Moderator<?php }?><!--
								--><?php if ($_smarty_tpl->tpl_vars['role']->value['role']==5){?>Administrator<?php }?><!--
								--><?php if ($_smarty_tpl->tpl_vars['role']->value['role']==6){?>Root<?php }?><!--
								--><?php $_smarty_tpl->tpl_vars["first_role"] = new Smarty_variable(false, null, 0);?><!--
							--><?php }?><!--
						--><?php } ?>
		</p>
	</div>
	<div style="float:left; width: 53%;">
		<h2>Events</h2>
		<?php if (!empty($_smarty_tpl->tpl_vars['eventlist']->value)){?>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['eventlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['event']->key;
?>
					<li>
						<b><a href="event.php?event_id=<?php echo $_smarty_tpl->tpl_vars['event']->value->getEventId();?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value->getCreateDate(),"%e.%m.%Y %H:%M");?>
</a>:</b> 
						<?php if ($_smarty_tpl->tpl_vars['event']->value->getObject()=='router'){?>
							<?php $_smarty_tpl->tpl_vars["data"] = new Smarty_variable($_smarty_tpl->tpl_vars['event']->value->getData(), null, 0);?>
							<a href="./router.php?router_id=<?php echo $_smarty_tpl->tpl_vars['event']->value->getObjectId();?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['hostname'];?>
</a> 
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='status'&&$_smarty_tpl->tpl_vars['data']->value['to']=='online'){?>
								geht <span style="color: #007B0F;">online</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='status'&&$_smarty_tpl->tpl_vars['data']->value['to']=='offline'){?>
								geht <span style="color: #CB0000;">offline</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='status'&&$_smarty_tpl->tpl_vars['data']->value['to']=='unknown'){?>
								erhält Status <span style="color: #F8C901;">pingbar</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='reboot'){?>
								wurde <span style="color: #000f9c;">Rebootet</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='new'){?>
								wurde Netmon hinzugefügt
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='batman_advanced_version'){?>
								änderte Batman adv. Version von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='firmware_version'){?>
								änderte Firmware Version von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='nodewatcher_version'){?>
								änderte Nodewatcher Version von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='distversion'){?>
								änderte Distversion Version von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='distname'){?>
								änderte Distname Version von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='hostname'){?>
								änderte Hostname von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='chipset'){?>
								änderte Chipset von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='watchdog_ath9k_bug'){?>
								<a href="./event.php?event_id=<?php echo $_smarty_tpl->tpl_vars['event']->value->getEventId();?>
">ATH9K Bug registriert</a>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['event']->value->getObject()=='not_assigned_router'){?>
							<?php $_smarty_tpl->tpl_vars["data"] = new Smarty_variable($_smarty_tpl->tpl_vars['event']->value->getData(), null, 0);?>
							
							<?php echo $_smarty_tpl->tpl_vars['data']->value['router_auto_assign_login_string'];?>

							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='new'){?>
								 erscheint in der <a href="./routers_trying_to_assign.php">Liste der neuen, nicht zugewiesenen Router</a>
							<?php }?>
						<?php }?>
					</li>
				<?php } ?>
			</ul>
		<?php }else{ ?>
			<p>Es sind keine Events in der Datenbank gespeichert.</p>
		<?php }?>
	</div>
</div>

<?php if ($_GET['user_id']==$_SESSION['user_id']&&empty($_smarty_tpl->tpl_vars['routerlist']->value)){?>
	<h2>Neu bei Freifunk?</h2>
	<p>Du hast noch keine Router angelegt. Wenn dein Router schon angeschlossen ist, kannst du ihn aus dieser Liste übernehmen. Wenn dein Router trotzdem noch nicht in dieser Liste auftaucht, versuche die Seite in ein paar Minuten (5-10) noch einmal neu zu laden.</p>

	<?php if (!empty($_smarty_tpl->tpl_vars['routersnotassigned_list']->value)){?>
		<table class="display" id="new_routerlist" style="width: 100%;">
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
 $_from = $_smarty_tpl->tpl_vars['routersnotassigned_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['router']->value['update_date'],"%H:%M");?>
 Uhr</td>
						<td><a href="./routereditor.php?section=new&hostname=<?php echo $_smarty_tpl->tpl_vars['router']->value['hostname'];?>
&crawl_method=router&allow_router_auto_assign=1&router_auto_assign_login_string=<?php echo $_smarty_tpl->tpl_vars['router']->value['router_auto_assign_login_string'];?>
">Übernehmen</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	<?php }else{ ?>
		<p>In der Liste der neuen Router ist derzeit kein Router eingetragen.</p>
	<?php }?>
<?php }?>

<h2>Router</h2>
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
<?php }?>

<h2>Dienste</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['servicelist']->value)){?>
	<table class="display" id="servicelist" style="width: 100%;">
		<thead>
			<tr>
				<th>Title</th>
				<th>Ips</th>
				<th>Ressource-Recors</th>
				<th>Port</th>
				<th>Aktionen</th>
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
					<td><a href="./service.php?section=delete&service_id=<?php echo $_smarty_tpl->tpl_vars['service']->value->getServiceId();?>
">Löschen</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }else{ ?>
	<p>Keine Dienste vorhanden.</p>
<?php }?><?php }} ?>