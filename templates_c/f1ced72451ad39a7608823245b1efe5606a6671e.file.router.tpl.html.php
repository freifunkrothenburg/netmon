<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 19:00:47
         compiled from "/var/www/netmon/templates/base/html/router.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:468665661546a567648aaf8-39696094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1ced72451ad39a7608823245b1efe5606a6671e' => 
    array (
      0 => '/var/www/netmon/templates/base/html/router.tpl.html',
      1 => 1416333641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '468665661546a567648aaf8-39696094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a56768961c5_66839070',
  'variables' => 
  array (
    'originator_status_list' => 0,
    'originator' => 0,
    'router' => 0,
    'google_maps_api_key' => 0,
    'template' => 0,
    'eventlist' => 0,
    'event' => 0,
    'data' => 0,
    'originators' => 0,
    'networkinterfacelist' => 0,
    'interface' => 0,
    'ip' => 0,
    'schluessel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a56768961c5_66839070')) {function content_546a56768961c5_66839070($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/var/www/netmon/lib/extern/smarty/plugins/function.math.php';
?><!-- Javascript for Interfacelist -->
<script src="lib/extern/DataTables/jquery.dataTables.min.js"></script>

<!-- Javascript for the graphs -->
<script type="text/javascript" src="lib/extern/javascriptrrd/binaryXHR.js"></script>
<script type="text/javascript" src="lib/extern/javascriptrrd/rrdFile.js"></script>
<!-- rrdFlot class needs the following four include files !-->
<script type="text/javascript" src="lib/extern/javascriptrrd/rrdFlotSupport.js"></script>
<script type="text/javascript" src="lib/extern/javascriptrrd/rrdFlot.js"></script>
<script type="text/javascript" src="lib/extern/flot/jquery.flot.js"></script>
<script type="text/javascript" src="lib/extern/flot/jquery.flot.selection.js"></script>
<script language="javascript" type="text/javascript" src="lib/extern/flot/jquery.flot.time.js"></script>



	<script>
		function setBatmanAdvLinqQualityPictures(originator) {
			$(document).ready(function(){
				document.getElementById('batman_adv_link_quality_average_graphic').style.display = 'none';

				<?php  $_smarty_tpl->tpl_vars['originator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['originator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['originator_status_list']->value->getOriginatorStatusList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['originator']->key => $_smarty_tpl->tpl_vars['originator']->value){
$_smarty_tpl->tpl_vars['originator']->_loop = true;
?>
					document.getElementById('batman_adv_link_quality_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['originator']->value->getOriginator(),":","_");?>
_graphic').style.display = 'none';
				<?php } ?>

				document.getElementById('batman_adv_link_quality_'+originator+'_graphic').style.display = 'block';
			});
		}
	</script>



	<script type="text/javascript">
		$(document).ready(function() {
			$('#batman_adv_originator_list').dataTable( {
				"bFilter": false,
				"bInfo": false,
				"sScrollY": "250px",
				"bPaginate": false,
				"aaSorting": [[ 2, "desc" ]]
			} );
		} );
		
		// This function updates the Web Page with the data from the RRD archive header
		// when a new file is selected
		function update_fname(html_graph_id) {
			var graph_opts={legend: {position:"ne", noColumns:2} };
			var ds_graph_opts={	'traffic_rx':{checked:true, color: "#3118c3", lines: { show: true, fill: true, fillColor:""} },
								'traffic_tx':{checked:true, color: "#ef2700", lines: { show: true, fill: true, fillColor:""} },
								'memory_caching':{checked:true, color: "#ffd500", lines: { show: true, fill: true, fillColor:""} },
								'memory_buffering':{checked:true, color: "#002fb5", lines: { show: true, fill: true, fillColor:""} },
								'memory_free':{checked:true, color: "#2cbc00", lines: { show: true, fill: true, fillColor:""} },
								'clients':{checked:true, color: "#006c7b", lines: { show: true, fill: false} },
								'originators':{checked:true, color: "#46ddd4", lines: { show: true, fill: false} },
								'total':{checked:true, color: "#d97500", lines: { show: true, fill: false} },
								'runnable':{checked:true, color: "#d90000", lines: { show: true, fill: false} },
								'quality':{checked:true, color: "#1fa600", lines: { show: true, fill: true, fillColor:""} } };
			
			// the rrdFlot object creates and handles the graph
			var f=new rrdFlot(html_graph_id,rrd_data,graph_opts,ds_graph_opts);
		}
		
		// This is the callback function that,
		// given a binary file object,
		// verifies that it is a valid RRD archive
		// and performs the update of the Web page
		function update_fname_handler(bf, html_graph_id) {
			var i_rrd_data=undefined;
			try {
				var i_rrd_data=new RRDFile(bf);            
			} catch(err) {
				//alert("File "+fname+" is not a valid RRD archive!");
			}
			if (i_rrd_data!=undefined) {
				rrd_data=i_rrd_data;
				update_fname(html_graph_id)
			}
		}
	</script>


<h1>Router <?php echo $_smarty_tpl->tpl_vars['router']->value->getHostname();?>
 <?php if ($_smarty_tpl->tpl_vars['router']->value->getChipset()->getHardwareName()){?>(<?php echo $_smarty_tpl->tpl_vars['router']->value->getChipset()->getHardwareName();?>
)<?php }?></h1>
<div style="width: 100%; margin-bottom: 10px;" class="clearfix">
	<!--<div style="float:left; width: 50%;">
		<div style="height: 100px; margin-bottom: 6px;">
			<div style="float:left; width: 137px; margin-right: 4px; height: 100px; border: solid 0px black;">
				<img src="./data/panorama/round_view_1_234.png">
			</div>
			<div style="float:left; width: 137px; margin-right: 4px; height: 100px; border: solid 0px black;">
				<img src="./data/panorama/round_view_2_234.png">
			</div>
			<div style="float:left; width: 137px; height: 100px; border: solid 0px black;">
				<img src="./data/panorama/round_view_3_234.png">
			</div>
		</div>
		<div style="height: 100px; margin-bottom: 6px;">
			<div style="float:left; width: 137px; margin-right: 4px; height: 100px; border: solid 0px black;">
				<img src="./data/panorama/round_view_8_234.png">
			</div>
			<div style="float:left; width: 137px; margin-right: 4px; height: 100px; border: solid 0px black;">
				<img style="display: block; margin-left: auto; margin-right: auto" src="./templates/freifunk_oldenburg/img/kompass.png">
			</div>
			<div style="float:left; width: 137px; height: 100px; border: solid 0px black;">
				<img src="./data/panorama/round_view_4_234.png">
			</div>
		</div>
		
		<div style="float:left; width: 137px; margin-right: 4px; height: 100px; border: solid 0px black;">
			<img src="./data/panorama/round_view_7_234.png">
		</div>
		<div style="float:left; width: 137px; margin-right: 4px; height: 100px; border: solid 0px black;">
			<img src="./data/panorama/round_view_5_234.png">
		</div>
		<div style="float:left; width: 137px; height: 100px; border: solid 0px black;">
			<img src="./data/panorama/round_view_6_234.png">
		</div>
	</div>-->
	<div style="float:left; width: 100%;">
		<?php if ($_smarty_tpl->tpl_vars['router']->value->getLatitude()&&$_smarty_tpl->tpl_vars['router']->value->getLongitude()){?>
			<script type="text/javascript" src='https://maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['google_maps_api_key']->value;?>
&sensor=false'></script>
			<script type="text/javascript" src="./lib/extern/openlayers/OpenLayers.js"></script>
			<script type="text/javascript" src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/OpenStreetMap.js"></script>
			<script type="text/javascript" src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/OsmFreifunkMap.js"></script>
			<div id="map" style="height:312px; width:100%; border:solid 0px black;font-size:9pt;">
				<script type="text/javascript">
					var lat = <?php echo $_smarty_tpl->tpl_vars['router']->value->getLatitude();?>
;
					var lon = <?php echo $_smarty_tpl->tpl_vars['router']->value->getLongitude();?>
;
					var radius = 30
					var zoom = 17;
					router_map(<?php echo $_smarty_tpl->tpl_vars['router']->value->getRouterId();?>
);
				</script>
			</div>

			<p>
				<b>Standort:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getLocation();?>

			</p>
		<?php }else{ ?>
			<p>Keine Standortdaten verfügbar.</p>
		<?php }?>
	</div>
</div>

<div style="width: 100%; margin-bottom: 0px;" class="clearfix">
	<div style="float:left; width: 60%;">
		<h2>Systemdaten</h2>
		<div style="float:left; width: 60%;">
			<p>
				<b>Benutzer:</b> <a href="./user.php?user_id=<?php echo $_smarty_tpl->tpl_vars['router']->value->getUserId();?>
"><?php echo $_smarty_tpl->tpl_vars['router']->value->getUser()->getNickname();?>
</a><br>
				<b>Angelegt am:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['router']->value->getCreateDate(),"%d.%m.%Y %H:%M");?>
 Uhr<br>
				<b>Beschreibung:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getDescription();?>
<br>
				
				<b>Aktualisiert am:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['router']->value->getUpdateDate(),"%d.%m.%Y %H:%M");?>
 Uhr<br>
				<b>Statusdaten von:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getCreateDate(),"%d.%m.%Y %H:%M");?>
 Uhr<br>
				<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getLocalTime()){?>
					<b>Router-Zeit:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getLocalTime(),"%d.%m.%Y %H:%M");?>
 Uhr<br>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getUptime()){?>
					<b>Idletime/Uptime:</b> <?php echo smarty_function_math(array('equation'=>"round(x,1)",'x'=>$_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getIdletime()/60/60),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getIdletime()){?>/<?php echo smarty_function_math(array('equation'=>"round(x,1)",'x'=>$_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getUptime()/60/60),$_smarty_tpl);?>
<?php }?> Stunden<br>
				<?php }?>
			</p>
			
		</div>
		<div style="float:left; width: 40%;">
			<p>
				<b>Status: </b>
				<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getStatus()=="online"){?>
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="online">
				<?php }elseif($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getStatus()=="offline"){?>
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" alt="offline">
				<?php }elseif($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getStatus()=="unknown"){?>
					<img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_unknown_small.png" title="unknown" alt="unknown">
				<?php }?><br>
				<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getStatus()=="online"){?>
					<b>Clients:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getClientCount();?>
<br>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getHostname()){?>
					<b>Hostname:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getHostname();?>
<br>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getCpu()){?>
					<b>Cpu:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getCpu();?>
<br>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getMemoryFree()){?>
					<b>Free memory:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getMemoryFree();?>
/<?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getMemoryTotal();?>
 Kb<br>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getLoadavg()){?>
					<b>Loadaverage:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getLoadavg();?>
<br>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getProcesses()){?>
					<b>Processes:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getProcesses();?>
<br>
				<?php }?>
			</p>
		</div>
		<br style="clear:both">
		
		<h2>Softwaredaten</h2>
		<p>
			<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getDistname()){?>
				<b>Betriebssystem:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getDistname();?>
 <?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getDistversion()){?>(<?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getDistversion();?>
)<?php }?><br>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getOpenwrtCoreRevision()||$_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getOpenwrtFeedsPackagesRevision()){?>
				<b>Betriebssystem Revs.:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getOpenwrtCoreRevision();?>
 (Core) und <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getOpenwrtCoreRevision();?>
 (Packages)<br>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getKernelVersion()){?>
				<b>Kernel:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getKernelVersion();?>
<br>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getBatmanAdvancedVersion()){?>
				<b>B.A.T.M.A.N advanced:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getBatmanAdvancedVersion();?>
<br>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getNodewatcherVersion()){?>
				<b>Nodewatcher:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getNodewatcherVersion();?>
<br>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getFirmwareVersion()){?>
				<b>Firmware:</b> <?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getFirmwareVersion();?>

				<?php if ($_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getFirmwareRevision()){?>(<?php echo $_smarty_tpl->tpl_vars['router']->value->getStatusdata()->getFirmwareRevision();?>
)<?php }?><br>
			<?php }?>
		</p>
	</div>
	<div style="float:left; width: 40%;">
		<h2>Ereignisse</h2>
		<?php if ($_smarty_tpl->tpl_vars['eventlist']->value->getTotalCount()>0){?>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['eventlist']->value->getEventlist(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['event']->key;
?>
					<li>
						<b><a href="event.php?event_id=<?php echo $_smarty_tpl->tpl_vars['event']->value->getEventId();?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value->getCreateDate(),"%e.%m. %H:%M");?>
</a>:</b> 
						<?php if ($_smarty_tpl->tpl_vars['event']->value->getObject()=='router'){?>
							<?php $_smarty_tpl->tpl_vars["data"] = new Smarty_variable($_smarty_tpl->tpl_vars['event']->value->getData(), null, 0);?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='status'&&$_smarty_tpl->tpl_vars['data']->value['to']=='online'){?>
								geht <span style="color: #007B0F;">online</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='status'&&$_smarty_tpl->tpl_vars['data']->value['to']=='offline'){?>
								geht <span style="color: #CB0000;">offline</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='reboot'){?>
								wurde <span style="color: #000f9c;">Rebootet</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='status'&&$_smarty_tpl->tpl_vars['data']->value['to']=='unknown'){?>
								erhält Status <span style="color: #F8C901;">pingbar</span>
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
					</li>
				<?php } ?>
			</ul>
		<?php }else{ ?>
			<p>Es sind keine Events in der Datenbank gespeichert.</p>
		<?php }?>
	</div>
</div>

<h2>Graphen</h2>
<div style="width: 100%; margin-bottom: 40px;" class="clearfix">
	<div style="float:left; width: 50%;">
		<h3>Speicher</h3>
		<script type="text/javascript">
			fname='./rrdtool/databases/router_<?php echo $_smarty_tpl->tpl_vars['router']->value->getRouterId();?>
_memory.rrd';
			html_graph_id="memory_graph"
			try {
				FetchBinaryURLAsync(fname,update_fname_handler, html_graph_id);
			} catch (err) {
				alert("Failed loading "+fname+"\n"+err);
			}
		</script>
		<div id="memory_graph" style="float:left; width: 100%;"></div>
	</div>
	<div style="width: 50%; float: left;">
		<h3>Prozesse</h3>
		<script type="text/javascript">
			fname='./rrdtool/databases/router_<?php echo $_smarty_tpl->tpl_vars['router']->value->getRouterId();?>
_processes.rrd';
			html_graph_id="processes_graph"
			try {
				FetchBinaryURLAsync(fname,update_fname_handler, html_graph_id);
			} catch (err) {
				alert("Failed loading "+fname+"\n"+err);
			}
		</script>
		<div id="processes_graph" style="float:left; width: 100%;"></div>
	</div>
</div>

<div style="width: 100%; margin-bottom: 40px;" class="clearfix">
	<div style="float:left; width: 50%;">
		<h3>Verbundene Clients</h3>
		<script type="text/javascript">
			fname='./rrdtool/databases/router_<?php echo $_smarty_tpl->tpl_vars['router']->value->getRouterId();?>
_clients.rrd';
			html_graph_id="client_history_graph"
			try {
				FetchBinaryURLAsync(fname,update_fname_handler, html_graph_id);
			} catch (err) {
				alert("Failed loading "+fname+"\n"+err);
			}
		</script> 
		<div id="client_history_graph" style="float:left; width: 100%;"></div>
	</div>
	<div style="width: 50%; float: left;">
		<h3>Sichtbare Nachbarn</h3>
		<script type="text/javascript">
			fname='./rrdtool/databases/router_<?php echo $_smarty_tpl->tpl_vars['router']->value->getRouterId();?>
_originators.rrd';
			html_graph_id="batman_adv_originator_graphic"
			try {
				FetchBinaryURLAsync(fname,update_fname_handler, html_graph_id);
			} catch (err) {
				alert("Failed loading "+fname+"\n"+err);
			}
		</script> 
		<div id="batman_adv_originator_graphic" style="float:left; width: 100%;"></div>
	</div>
</div>

<div style="width: 100%; margin-bottom: 40px;" class="clearfix">
	<h3>Verbindungsqualität zu Nachbarn</h3>
	<div style="float:left; width: 50%;">
		<div style="width: 95%">
		<table class="display" id="batman_adv_originator_list" style="font-size: 8pt;">
			<thead>
				<tr>
					<th>Originator</th>
					<th>Seen</th>
					<th>Qual.</th>
					<th>Nexthop</th>
					<th>Iface</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['originator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['originator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['originator_status_list']->value->getOriginatorStatusList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['originator']->key => $_smarty_tpl->tpl_vars['originator']->value){
$_smarty_tpl->tpl_vars['originator']->_loop = true;
?>
					<tr style="<?php if ($_smarty_tpl->tpl_vars['originator']->value->getOriginator()==$_smarty_tpl->tpl_vars['originator']->value->getNexthop()){?>font-weight: bold;<?php }?> background-color: <?php if ($_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()>=0&&$_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()<105){?>#ff1e1e<?php }elseif($_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()>=105&&$_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()<130){?>#ff4949<?php }elseif($_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()>=130&&$_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()<155){?>#ff6a6a<?php }elseif($_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()>=155&&$_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()<180){?>#ffac53<?php }elseif($_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()>=180&&$_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()<205){?>#ffeb79<?php }elseif($_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()>=205&&$_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()<230){?>#79ff7c<?php }elseif($_smarty_tpl->tpl_vars['originator']->value->getLinkQuality()>=230){?>#04ff0a<?php }?>;">
						<td><a href="search.php?search_range=mac_addr&search_string=<?php echo $_smarty_tpl->tpl_vars['originators']->value['originator'];?>
"><?php echo $_smarty_tpl->tpl_vars['originator']->value->getOriginator();?>
</a></td>
						<td><?php echo $_smarty_tpl->tpl_vars['originator']->value->getLastSeen();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['originator']->value->getLinkQuality();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['originator']->value->getNexthop();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['originator']->value->getOutgoingInterface();?>
</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
	<div style="width: 50%; float: left;">
			<script type="text/javascript">
				fname='./rrdtool/databases/router_<?php echo $_smarty_tpl->tpl_vars['router']->value->getRouterId();?>
_batman_adv_link_quality_average.rrd';
				html_graph_id="batman_adv_link_quality_average_graphic"
				try {
					FetchBinaryURLAsync(fname,update_fname_handler, html_graph_id);
				} catch (err) {
					alert("Failed loading "+fname+"\n"+err);
				}
			</script> 
			<div id="batman_adv_link_quality_average_graphic" style="float:left; width: 100%;"></div>
			
			<?php  $_smarty_tpl->tpl_vars['originator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['originator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['originator_status_list']->value->getOriginatorStatusList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['originator']->key => $_smarty_tpl->tpl_vars['originator']->value){
$_smarty_tpl->tpl_vars['originator']->_loop = true;
?>
				<script type="text/javascript">
					fname='./rrdtool/databases/router_<?php echo $_smarty_tpl->tpl_vars['router']->value->getRouterId();?>
_batman_adv_link_quality_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['originator']->value->getOriginator(),":","_");?>
.rrd';
					html_graph_id="batman_adv_link_quality_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['originator']->value->getOriginator(),":","_");?>
_graphic"
					try {
						FetchBinaryURLAsync(fname,update_fname_handler, html_graph_id);
					} catch (err) {
						alert("Failed loading "+fname+"\n"+err);
					}
				</script> 
				<div id="batman_adv_link_quality_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['originator']->value->getOriginator(),":","_");?>
_graphic" style="float:left; width: 100%; display: none;"></div>
			<?php } ?>
			
			<p>
				<select name="search_range" onChange="setBatmanAdvLinqQualityPictures(this.options[this.selectedIndex].value)">
					<option value="average" >Zeige Grafik für Average</option>
					<?php  $_smarty_tpl->tpl_vars['originator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['originator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['originator_status_list']->value->getOriginatorStatusList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['originator']->key => $_smarty_tpl->tpl_vars['originator']->value){
$_smarty_tpl->tpl_vars['originator']->_loop = true;
?>
						<option value="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['originator']->value->getOriginator(),":","_");?>
" >Zeige Grafik für <?php echo $_smarty_tpl->tpl_vars['originator']->value->getOriginator();?>
</option>
					<?php } ?>
				</select>
			</p>
	</div>
</div>

<h2>Netzwerkinterfaces</h2>
<?php  $_smarty_tpl->tpl_vars['interface'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['interface']->_loop = false;
 $_smarty_tpl->tpl_vars['schluessel'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['networkinterfacelist']->value->getNetworkinterfacelist(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['interface']->key => $_smarty_tpl->tpl_vars['interface']->value){
$_smarty_tpl->tpl_vars['interface']->_loop = true;
 $_smarty_tpl->tpl_vars['schluessel']->value = $_smarty_tpl->tpl_vars['interface']->key;
?>
	<div style="width:100%; margin-bottom: 3px; background-color: #81b59e;" onclick='$("#<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['interface']->value->getName(),".","_");?>
").slideToggle("slow");'>
		<b><?php echo $_smarty_tpl->tpl_vars['interface']->value->getName();?>
</b> (<a href="./interface.php?section=delete&interface_id=<?php echo $_smarty_tpl->tpl_vars['interface']->value->getNetworkinterfaceId();?>
">entfernen</a>)
	</div>
	<div id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['interface']->value->getName(),".","_");?>
" style="<?php if (!(stristr($_smarty_tpl->tpl_vars['interface']->value->getName(),"wlan"))&&!(stristr($_smarty_tpl->tpl_vars['interface']->value->getName(),"br-mesh"))&&!(stristr($_smarty_tpl->tpl_vars['interface']->value->getName(),"vpn"))){?>display:none<?php }?>; margin-bottom: 10px; width: 100%;" class="clearfix">
		<div style="float:left; width: 50%;">
			<ul>
				<?php if ($_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getMacAddr()){?>
					<li>
						<b>Mac-Adresse:</b> <?php echo $_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getMacAddr();?>

					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getMtu()){?>
					<li>
						<b>MTU:</b> <?php echo $_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getMtu();?>

					</li>
				<?php }?>
				<li>
					<b>Traffic RX:</b> <?php echo round($_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getTrafficRxAvg()/1000,2);?>
 kBit/s
				</li>
				<li>
					<b>Traffic TX:</b> <?php echo round($_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getTrafficTxAvg()/1000,2);?>
 kBit/s
				</li>
					<?php if ($_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getWlanMode()){?>
					<li>
						<b>WLAN-Mode:</b> <?php echo $_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getWlanMode();?>

					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getWlanFrequency()){?>
					<li>
						<b>WLAN-Channel:</b> <?php echo $_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getWlanChannel();?>
 (<?php echo $_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getWlanFrequency();?>
)
					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getWlanEssid()){?>
					<li>
						<b>WLAN-ESSID:</b> <?php echo $_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getWlanEssid();?>

					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getWlanBssid()){?>
					<li>
						<b>WLAN-BSSID:</b> <?php echo $_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getWlanBssid();?>

					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getWlanTxPower()){?>
					<li>
						<b>WLAN-TX-Power:</b> <?php echo $_smarty_tpl->tpl_vars['interface']->value->getStatusdata()->getWlanTxPower();?>

					</li>
				<?php }?>
			</ul>

			<ul>
				<li><b>IP-Adressen:</b>
					<ul>
						<?php  $_smarty_tpl->tpl_vars['ip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['interface']->value->getIplist()->getIplist(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ip']->key => $_smarty_tpl->tpl_vars['ip']->value){
$_smarty_tpl->tpl_vars['ip']->_loop = true;
?>
						<li>
							<b><?php echo $_smarty_tpl->tpl_vars['ip']->value->getIpCompressed();?>
/<?php echo $_smarty_tpl->tpl_vars['ip']->value->getNetwork()->getNetmask();?>
</b> (<a href="./ping_ip.php?ip_id=<?php echo $_smarty_tpl->tpl_vars['ip']->value->getIpId();?>
">Ping</a>, <a href="./show_crawl_data.php?ip_id=<?php echo $_smarty_tpl->tpl_vars['ip']->value->getIpId();?>
">Crawl</a>, <a href="./ip.php?section=delete&ip_id=<?php echo $_smarty_tpl->tpl_vars['ip']->value->getIpId();?>
&router_id=<?php echo $_smarty_tpl->tpl_vars['router']->value->getRouterId();?>
">entfernen</a>)
							<ul>
								<li>
									<b>Angelegt am:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ip']->value->getCreateDate(),"%e.%m.%Y %H:%M");?>

								</li>
							</ul>
						</li>
						<?php } ?>
						<li><a href="./ip.php?section=add&router_id=<?php echo $_smarty_tpl->tpl_vars['interface']->value->getRouterId();?>
&interface_id=<?php echo $_smarty_tpl->tpl_vars['interface']->value->getNetworkinterfaceId();?>
">IP hinzufügen</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div style="width: 20%; float: left;">
			<script type="text/javascript">
				fname='./rrdtool/databases/router_<?php echo $_smarty_tpl->tpl_vars['router']->value->getRouterId();?>
_interface_<?php echo $_smarty_tpl->tpl_vars['interface']->value->getName();?>
_traffic_rx.rrd';
				html_graph_id="jrrd_<?php echo $_smarty_tpl->tpl_vars['schluessel']->value;?>
"
				try {
					FetchBinaryURLAsync(fname,update_fname_handler, html_graph_id);
				} catch (err) {
					alert("Failed loading "+fname+"\n"+err);
				}
			</script>
			<div id="jrrd_<?php echo $_smarty_tpl->tpl_vars['schluessel']->value;?>
"></div>
		</div>
	</div>
<?php } ?>
<?php }} ?>