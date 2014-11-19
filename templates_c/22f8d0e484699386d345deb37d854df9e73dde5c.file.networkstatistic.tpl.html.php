<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 18:59:48
         compiled from "/var/www/netmon/templates/base/html/networkstatistic.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1332279047546a4931923821-51029543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22f8d0e484699386d345deb37d854df9e73dde5c' => 
    array (
      0 => '/var/www/netmon/templates/base/html/networkstatistic.tpl.html',
      1 => 1416333575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1332279047546a4931923821-51029543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a49319fb282_24551065',
  'variables' => 
  array (
    'router_chipsets' => 0,
    'router_chipset' => 0,
    'firmware_versions_count' => 0,
    'firmware_version_count' => 0,
    'i' => 0,
    'batman_advanced_versions_count' => 0,
    'batman_advanced_version_count' => 0,
    'kernel_versions_count' => 0,
    'kernel_version_count' => 0,
    'last_ended_crawl_cycle' => 0,
    'template' => 0,
    'router_status_online' => 0,
    'router_status_offline' => 0,
    'router_status_unknown' => 0,
    'clients_connected' => 0,
    'actual_crawl_cycle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a49319fb282_24551065')) {function content_546a49319fb282_24551065($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
?><link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<!-- Javascript for the graphs -->
<script type="text/javascript" src="lib/extern/javascriptrrd/binaryXHR.js"></script>
<script type="text/javascript" src="lib/extern/javascriptrrd/rrdFile.js"></script>
<!-- rrdFlot class needs the following four include files !-->
<script type="text/javascript" src="lib/extern/javascriptrrd/rrdFlotSupport.js"></script>
<script type="text/javascript" src="lib/extern/javascriptrrd/rrdFlot.js"></script>

<script language="javascript" type="text/javascript" src="lib/extern/flot/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="lib/extern/flot/jquery.flot.pie.js"></script>
<script language="javascript" type="text/javascript" src="lib/extern/flot/jquery.flot.selection.js"></script>
<script language="javascript" type="text/javascript" src="lib/extern/flot/jquery.flot.time.js"></script>


<script type="text/javascript">
	// This function updates the Web Page with the data from the RRD archive header
	// when a new file is selected
	function update_fname(html_graph_id) {
		var graph_opts={legend: {position:"ne", noColumns:2} };
		var ds_graph_opts={'online':{checked:true, color: "#007B0F", 
					lines: { show: true, fill: false, fillColor:""} },
				'offline':{checked:true, color: "#CB0000", 
					lines: { show: true, fill: false, fillColor:""} },
				'unknown':{checked:true, color: "#F8C901", 
					lines: { show: true, fill: false, fillColor:""} },
				'total':{checked:true, color: "#696969", 
					lines: { show: true, fill: false, fillColor:""} },
				'clients':{checked:true, color: "#006c7b", 
					lines: { show: true, fill: false} } };
		
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
<script type="text/javascript">
		$(function() {
			var placeholder = $("#chipset_chart");
			
			var data = [
				<?php  $_smarty_tpl->tpl_vars['router_chipset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['router_chipset']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['router_chipsets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['router_chipset']->key => $_smarty_tpl->tpl_vars['router_chipset']->value){
$_smarty_tpl->tpl_vars['router_chipset']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['router_chipset']->key;
?>
					{ label: "<?php if (!empty($_smarty_tpl->tpl_vars['router_chipset']->value['hardware_name'])){?><?php echo $_smarty_tpl->tpl_vars['router_chipset']->value['hardware_name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['router_chipset']->value['chipset_name'];?>
<?php }?>",
					data: <?php echo $_smarty_tpl->tpl_vars['router_chipset']->value['count'];?>
},
				<?php } ?>
			];
			
			$.plot(placeholder, data, {
				series: {
					pie: { 
						show: true,
						radius: 0.6,
						label: {
							show: true,
							radius: 0.4,
							threshold: 0.15,
							formatter: labelFormatter,
						}
					}
				},
				grid: {
					hoverable: true,
					clickable: true
				},
				legend: {
					show: true,
					labelFormatter: legendFormatter,
					noColumns: 1
				}
			});
			
			placeholder.bind("plothover", function(event, pos, obj) {
				if (!obj) {
					return;
				}

				var percent = parseFloat(obj.series.percent).toFixed(2);
				$("#hover_chipset").html("<span>" + obj.series.label + " (" + percent + "%)</span>");
			});

			placeholder.bind("plotclick", function(event, pos, obj) {
				if (!obj) {
					return;
				}
				
				var win=window.open('./routerlist.php?hardware_name='+obj.series.label, '_blank');
				win.focus();
			});
		});
		
		function labelFormatter(label, series) {
			return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + series.data[0][1] /*Math.round(series.percent) + "%*/ +"</div>";
		}
	</script>

	<script type="text/javascript">
		$(function() {
			var placeholder = $("#firmwareversions_chart");
			
			var data = [
				<?php  $_smarty_tpl->tpl_vars['firmware_version_count'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['firmware_version_count']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['firmware_versions_count']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['firmware_version_count']->key => $_smarty_tpl->tpl_vars['firmware_version_count']->value){
$_smarty_tpl->tpl_vars['firmware_version_count']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['firmware_version_count']->key;
?>
					{ label: "<?php echo $_smarty_tpl->tpl_vars['firmware_version_count']->value['firmware_version'];?>
",
					data: <?php echo $_smarty_tpl->tpl_vars['firmware_version_count']->value['count'];?>
,
					color: '#<?php echo dechex(hexdec('16e211')+$_smarty_tpl->tpl_vars['i']->value*10);?>
'},
				<?php } ?>
			];
			
			$.plot(placeholder, data, {
				series: {
					pie: { 
						show: true,
						radius: 0.6,
						label: {
							show: true,
							radius: 0.4,
							threshold: 0.10,
							formatter: labelFormatter,
						}
					}
				},
				grid: {
					hoverable: true,
					clickable: true
				},
				legend: {
					show: true,
					labelFormatter: function(label, series) {
			return label.substr(0,17)+"...";
		},
					noColumns: 1
				}
			});
			
			placeholder.bind("plothover", function(event, pos, obj) {
				if (!obj) {
					return;
				}

				var percent = parseFloat(obj.series.percent).toFixed(2);
				$("#hover_firmwareversions").html("<span>" + obj.series.label + " (" + percent + "%)</span>");
			});

			placeholder.bind("plotclick", function(event, pos, obj) {
				if (!obj) {
					return;
				}
				
				var win=window.open('./routerlist.php?firmware_version='+obj.series.label, '_blank');
				win.focus();
			});
		});
		
		function labelFormatter(label, series) {
			return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + series.data[0][1] /*Math.round(series.percent) + "%*/ +"</div>";
		}
		
		function legendFormatter(label, series) {
			return label.substr(0,10) ;
		}
	</script>

	<script type="text/javascript">
		$(function() {
			var placeholder = $("#batmanadv_div");
			
			var data = [
				<?php  $_smarty_tpl->tpl_vars['batman_advanced_version_count'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['batman_advanced_version_count']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['batman_advanced_versions_count']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['batman_advanced_version_count']->key => $_smarty_tpl->tpl_vars['batman_advanced_version_count']->value){
$_smarty_tpl->tpl_vars['batman_advanced_version_count']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['batman_advanced_version_count']->key;
?>
					{ label: "<?php echo $_smarty_tpl->tpl_vars['batman_advanced_version_count']->value['batman_advanced_version'];?>
",
					data: <?php echo $_smarty_tpl->tpl_vars['batman_advanced_version_count']->value['count'];?>
,
					color: '#<?php echo dechex(hexdec(320000)+$_smarty_tpl->tpl_vars['i']->value*30);?>
'},
				<?php } ?>
			];
			
			$.plot(placeholder, data, {
				series: {
					pie: { 
						show: true,
						radius: 0.6,
						label: {
							show: true,
							radius: 0.4,
							threshold: 0.15,
							formatter: labelFormatter,
						}
					}
				},
				grid: {
					hoverable: true,
					clickable: true
				},
				legend: {
					show: true,
					labelFormatter: legendFormatter,
					noColumns: 1
				}
			});

			placeholder.bind("plothover", function(event, pos, obj) {
				if (!obj) {
					return;
				}

				var percent = parseFloat(obj.series.percent).toFixed(2);
				$("#hover_batmanadv").html("<span>" + obj.series.label + " (" + percent + "%)</span>");
			});
			 
			placeholder.bind("plotclick", function(event, pos, obj) {
				if (!obj) {
					return;
				}
				
				var win=window.open('./routerlist.php?batman_advanced_version='+obj.series.label, '_blank');
				win.focus();
			});
		});

		function labelFormatter(label, series) {
			return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + series.data[0][1] /*Math.round(series.percent) + "%*/ +"</div>";
		}
		
		function legendFormatter(label, series) {
			return label.substr(0,25) ;
		}
	</script>

	<script type="text/javascript">
		$(function() {
			var placeholder = $("#kernelversions_chart");
			
			var data = [
				<?php  $_smarty_tpl->tpl_vars['kernel_version_count'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kernel_version_count']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['kernel_versions_count']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kernel_version_count']->key => $_smarty_tpl->tpl_vars['kernel_version_count']->value){
$_smarty_tpl->tpl_vars['kernel_version_count']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['kernel_version_count']->key;
?>
					{ label: "<?php echo $_smarty_tpl->tpl_vars['kernel_version_count']->value['kernel_version'];?>
",
					data: <?php echo $_smarty_tpl->tpl_vars['kernel_version_count']->value['count'];?>
,
					color: '#<?php echo dechex(hexdec('ff9600')+$_smarty_tpl->tpl_vars['i']->value*30);?>
'},
				<?php } ?>
			];
			
			$.plot(placeholder, data, {
				series: {
					pie: { 
						show: true,
						radius: 0.6,
						label: {
							show: true,
							radius: 0.4,
							threshold: 0.15,
							formatter: labelFormatter,
						}
					}
				},
				grid: {
					hoverable: true,
					clickable: true
				},
				legend: {
					show: true,
					labelFormatter: legendFormatter,
					noColumns: 1
				}
			});
			
			placeholder.bind("plothover", function(event, pos, obj) {
				if (!obj) {
					return;
				}

				var percent = parseFloat(obj.series.percent).toFixed(2);
				$("#hover_kernelversion").html("<span>" + obj.series.label + " (" + percent + "%)</span>");
			});

			placeholder.bind("plotclick", function(event, pos, obj) {
				if (!obj) {
					return;
				}
				
				var win=window.open('./routerlist.php?kernel_version='+obj.series.label, '_blank');
				win.focus();
			});
		});

		function labelFormatter(label, series) {
			return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + series.data[0][1] /*Math.round(series.percent) + "%*/ +"</div>";
		}
		
		function legendFormatter(label, series) {
			return label.substr(0,25) ;
		}
	</script>
	<style type="text/css">
		.legendLabel {
			width: 110px;
		}
	</style>




<h1>Statistik</h1>
<?php if (!empty($_smarty_tpl->tpl_vars['last_ended_crawl_cycle']->value)){?>
	<div style="width: 100%; overflow: hidden;">
		<div style="float:left; width: 21%;">
			<h2>Router</h2>
			<table style="text-align: center; vertical-align: baseline; font-size: 2em; font-weight: bold;">
				<tr>
					<td style="width: 33%; color: #007B0F;" ><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/status_up_big.png" title="up - node is reachable" alt="up"/><br><a style="color: #007B0F;" href="./routerlist.php?status=online"><?php echo $_smarty_tpl->tpl_vars['router_status_online']->value;?>
</a></td>
					<td class="node_status_down nodes" style="width: 33%; color: #CB0000;" ><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/status_down_big.png" title="down - node is not visible" alt="down"/><br><a style="color: #CB0000;" href="./routerlist.php?status=offline"><?php echo $_smarty_tpl->tpl_vars['router_status_offline']->value;?>
</a></td>
					<td class="node_status_pending nodes" style="width: 33%; color: #F8C901;" ><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/status_pending_big.png" title="pending - node has not yet been seen since registration" alt="pending"/><br><a style="color: #F8C901;" href="./routerlist.php?status=unknown"><?php echo $_smarty_tpl->tpl_vars['router_status_unknown']->value;?>
</a></td>
				</tr>
			</table>
		</div>
		<div style="float:left; width: 13%;">
			<h2>Clients</h2>
			<table style="text-align: center; vertical-align: baseline; font-size: 2em; font-weight: bold;">
				<tr>
					<td style="width: 100%; color: #006c7b;" ><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/client-logo.png" title="clients" alt="clients"/><br><?php echo $_smarty_tpl->tpl_vars['clients_connected']->value;?>
</td>
				</tr>
			</table>
		</div>

		<div style="float:left; width: 33%;">
			<h2>Aktueller Crawl</h2>
			<p>
				<p>Die Daten die Netmon derzeit sammelt, werden nach beendigung dieses Crawls angezeigt.</p>
				<b>Beginn:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['actual_crawl_cycle']->value['crawl_date'],"%e.%m.%Y %H:%M");?>
 Uhr<br>
				<b>Ende:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['actual_crawl_cycle']->value['crawl_date_end'],"%e.%m.%Y %H:%M");?>
 Uhr 
				<script type="text/javascript">
					var Time = "<?php echo $_smarty_tpl->tpl_vars['actual_crawl_cycle']->value['crawl_date_end_minutes'];?>
";

					var Splittime = Time.split(':');

					var sec = parseInt((Splittime[1]));

					var cMinuten = parseInt((Splittime[0]));

					var cSekunden = (cMinuten * 60) + sec;

					function countdown() {
						setTimeout('Decrement()',1000);
					}
					function Decrement() {
						if (document.getElementById) {
								minutes = document.getElementById("minutes");
								seconds = document.getElementById("seconds");
								if(cMinuten == 0 && cSekunden == 0){
									location.reload();
								}
								if (seconds < 59) {
									seconds.value = cSekunden;
								} else {
									minutes.value = getminutes();
									seconds.value = getseconds();
								}
							cSekunden--;
							if (cSekunden >= 0) {
									setTimeout('Decrement()',1000); 
							}
						}
					}
					function getminutes() {
						cMinuten = Math.floor(cSekunden / 60);
						return cMinuten;
					}
					function getseconds() {
						return cSekunden-Math.round(cMinuten *60);
					}
				</script>
				(<input id="minutes" style="width: 14px; border: none;">:<input id="seconds" style="width: 26px; border: none;">Minuten)
				<script>
					countdown();
				</script>
			</p>
		</div>
		<div style="float:left; width: 33%;">
			<h2>Letzter Crawl</h2>
			<p>
				<p>Die aktuell in Netmon gezeigten Daten wurden während dieses Crawls gesammelt.</p>
				<b>Beginn:</b> <?php echo $_smarty_tpl->tpl_vars['last_ended_crawl_cycle']->value['crawl_date'];?>
 Uhr<br>
				<b>Ende:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['last_ended_crawl_cycle']->value['crawl_date_end'],"%e.%m.%Y %H:%M");?>
 Uhr
			</p>
		</div>
	</div>
	<br>

	<div style="width: 100%; overflow: hidden;">
		<div style="float:left; width: 50%;">
			<div style="width: 100%; overflow: hidden;">
				<div style="float:left; margin-right: 5px;">
					<h2>Routermodelle</h2>
				</div>
				<div style="float:left; margin-top: 10px;">
					(<span id="hover_chipset">Details</span>)
				</div>
			</div>
			<br style="clear: both;">
			<div style="height: 300px;" id="chipset_chart"></div>
		</div>
		<div style="float:left; width: 50%;">
			<div style="width: 100%; overflow: hidden;">
				<div style="float:left; margin-right: 5px;">
					<h2>Firmware</h2>
				</div>
				<div style="float:left; margin-top: 10px;">
					(<span id="hover_firmwareversions">Details</span>)
				</div>
			</div>
			<br style="clear: both;">
			<div style="height: 300px;" id="firmwareversions_chart"></div>
		</div>
	</div>
	<br>

	<div style="width: 100%; overflow: hidden;">
		<div style="float:left; width: 50%;">
			<div style="width: 100%; overflow: hidden;">
				<div style="float:left; margin-right: 5px;">
					<h2>B.A.T.M.A.N adv.</h2>
				</div>
				<div style="float:left; margin-top: 10px;">
					(<span id="hover_batmanadv">Details</span>)
				</div>
			</div>
			<br style="clear: both;">
			<div style="height: 300px;" id="batmanadv_div"></div>
		</div>
		<div style="float:left; width: 50%;">
			<div style="width: 100%; overflow: hidden;">
				<div style="float:left; margin-right: 5px;">
					<h2>Kernel</h2>
				</div>
				<div style="float:left; margin-top: 10px;">
					(<span id="hover_kernelversion">Details</span>)
				</div>
			</div>
			<br style="clear: both;">
			<div style="height: 300px;" id="kernelversions_chart"></div>
		</div>
	</div>
	<br>

	<div style="width: 100%; overflow: hidden;">
		<div style="float:left; width: 47%;">
			<h2>Router</h2>
			<script type="text/javascript">
				fname='./rrdtool/databases/netmon_history_router_status.rrd';
				html_graph_id="routers_status_graph"
				try {
					FetchBinaryURLAsync(fname,update_fname_handler, html_graph_id);
				} catch (err) {
					alert("Failed loading "+fname+"\n"+err);
				}
			</script>
			
			<div id="routers_status_graph" style="width: 100%;"></div>
		</div>
		<div style="float:left; width: 53%;">
			<h2>Clients</h2>
			<script type="text/javascript">
				fname='./rrdtool/databases/netmon_history_client_count.rrd';
				html_graph_id="client_count_graph"
				try {
					FetchBinaryURLAsync(fname,update_fname_handler, html_graph_id);
				} catch (err) {
					alert("Failed loading "+fname+"\n"+err);
				}
			</script>
			<div id="client_count_graph" style="width: 100%;"></div>
		</div>
	</div>
	<br style="clear: both">
<?php }else{ ?>
	<p>Es wurde noch kein Crawlzyklus vollständig beendet, sodass keine Daten generiert werden können</p>
<?php }?>
<?php }} ?>