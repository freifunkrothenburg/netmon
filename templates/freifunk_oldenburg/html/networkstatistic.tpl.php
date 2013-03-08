<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<!-- Javascript for the graphs -->
<script type="text/javascript" src="lib/classes/extern/javascriptrrd/binaryXHR.js"></script>
<script type="text/javascript" src="lib/classes/extern/javascriptrrd/rrdFile.js"></script>
<!-- rrdFlot class needs the following four include files !-->
<script type="text/javascript" src="lib/classes/extern/javascriptrrd/rrdFlotSupport.js"></script>
<script type="text/javascript" src="lib/classes/extern/javascriptrrd/rrdFlot.js"></script>
<!--<script type="text/javascript" src="lib/classes/extern/flot/jquery.flot.js"></script>
<script type="text/javascript" src="lib/classes/extern/flot/jquery.flot.selection.js"></script>-->

	<script language="javascript" type="text/javascript" src="lib/classes/extern/flot/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="lib/classes/extern/flot/jquery.flot.js"></script>
	<script language="javascript" type="text/javascript" src="lib/classes/extern/flot/jquery.flot.pie.js"></script>
	<script language="javascript" type="text/javascript" src="lib/classes/extern/flot/jquery.flot.selection.js"></script>
{literal}
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
			alert("File "+fname+" is not a valid RRD archive!");
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
				{/literal}{foreach item=router_chipset from=$router_chipsets key=i}{literal}
					{ label: "{/literal}{if !empty($router_chipset.hardware_name)}{$router_chipset.hardware_name}{else}{$router_chipset.chipset_name}{/if}{literal}",
					data: {/literal}{$router_chipset.count}{literal}},
				{/literal}{/foreach}{literal}
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
				$("#hover").html("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
			});

			placeholder.bind("plotclick", function(event, pos, obj) {
				if (!obj) {
					return;
				}
				
				var win=window.open('./routerlist.php?where=crawl_routers.chipset&operator=%3D&value='+obj.series.chipset_name, '_blank');
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
				{/literal}{foreach item=firmware_version_count from=$firmware_versions_count key=i}{literal}
					{ label: "{/literal}{$firmware_version_count.firmware_version}{literal}",
					data: {/literal}{$firmware_version_count.count}{literal},
					color: '{/literal}#{dechex(hexdec(16e211)+$i*10)}{literal}'},
				{/literal}{/foreach}{literal}
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
				$("#hover").html("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
			});

			placeholder.bind("plotclick", function(event, pos, obj) {
				if (!obj) {
					return;
				}
				
				var win=window.open('./routerlist.php?where=crawl_routers.firmware_version&operator=%3D&value='+obj.series.label, '_blank');
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
				{/literal}{foreach item=batman_advanced_version_count from=$batman_advanced_versions_count key=i}{literal}
					{ label: "{/literal}{$batman_advanced_version_count.batman_advanced_version}{literal}",
					data: {/literal}{$batman_advanced_version_count.count}{literal},
					color: '{/literal}#{dechex(hexdec(320000)+$i*30)}{literal}'},
				{/literal}{/foreach}{literal}
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
				$("#hover").html("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
			});

			placeholder.bind("plotclick", function(event, pos, obj) {
				if (!obj) {
					return;
				}
				
				var win=window.open('./routerlist.php?where=crawl_routers.firmware_version&operator=%3D&value='+obj.series.label, '_blank');
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
				{/literal}{foreach item=kernel_version_count from=$kernel_versions_count key=i}{literal}
					{ label: "{/literal}{$kernel_version_count.kernel_version}{literal}",
					data: {/literal}{$kernel_version_count.count}{literal},
					color: '{/literal}#{dechex(hexdec(ff9600)+$i*30)}{literal}'},
				{/literal}{/foreach}{literal}
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
				$("#hover").html("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
			});

			placeholder.bind("plotclick", function(event, pos, obj) {
				if (!obj) {
					return;
				}
				
				var win=window.open('./routerlist.php?where=crawl_routers.firmware_version&operator=%3D&value='+obj.series.label, '_blank');
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
    {/literal}



<h1>Statistik</h1>
{if !empty($last_ended_crawl_cycle)}
<div style="width: 100%; overflow: hidden;">
	<div style="float:left; width: 21%;">
		<h2>Router</h2>
		<table style="text-align: center; vertical-align: baseline; font-size: 2em; font-weight: bold;">
			<tr>
				<td style="width: 33%; color: #007B0F;" ><img src="templates/{$template}/img/status_up_big.png" title="up - node is reachable" alt="up"/><br><a style="color: #007B0F;" href="./routerlist.php?where=crawl_routers.status&operator=%3D&value=online">{$router_status_online}</a></td>
				<td class="node_status_down nodes" style="width: 33%; color: #CB0000;" ><img src="templates/{$template}/img/status_down_big.png" title="down - node is not visible" alt="down"/><br><a style="color: #CB0000;" href="./routerlist.php?where=crawl_routers.status&operator=%3D&value=offline">{$router_status_offline}</a></td>
				<td class="node_status_pending nodes" style="width: 33%; color: #F8C901;" ><img src="templates/{$template}/img/status_pending_big.png" title="pending - node has not yet been seen since registration" alt="pending"/><br><a style="color: #F8C901;" href="./routerlist.php?where=crawl_routers.status&operator=%3D&value=unknown">{$router_status_unknown}</a></td>
			</tr>
		</table>
	</div>
	<div style="float:left; width: 13%;">
		<h2>Clients</h2>
		<table style="text-align: center; vertical-align: baseline; font-size: 2em; font-weight: bold;">
			<tr>
				<td style="width: 100%; color: #006c7b;" ><img src="templates/{$template}/img/client-logo.png" title="clients" alt="clients"/><br>{$clients_connected}</td>				
			</tr>
		</table>
	</div>

	<div style="float:left; width: 33%;">
		<h2>Aktueller Crawl</h2>
		<p>
			<p>Die Daten die Netmon derzeit sammelt, werden nach beendigung dieses Crawls angezeigt.</p>
			<b>Beginn:</b> {$actual_crawl_cycle.crawl_date|date_format:"%e.%m.%Y %H:%M"} Uhr<br>
			<b>Ende:</b> {$actual_crawl_cycle.crawl_date_end|date_format:"%e.%m.%Y %H:%M"} Uhr ({$actual_crawl_cycle.crawl_date_end_minutes} Minuten)
		</p>
	</div>
	<div style="float:left; width: 33%;">
		<h2>Letzter Crawl</h2>
		<p>
			<p>Die aktuell in Netmon gezeigten Daten wurden während dieses Crawls gesammelt.</p>
			<b>Beginn:</b> {$last_ended_crawl_cycle.crawl_date} Uhr<br>
			<b>Ende:</b> {$last_ended_crawl_cycle.crawl_date_end|date_format:"%e.%m.%Y %H:%M"} Uhr
		</p>
	</div>
</div>
<br>

<div style="width: 100%; overflow: hidden;">
	<div style="float:left; width: 50%;">
	<h2>Routers</h2>
	<div style="height: 300px;" id="chipset_chart"></div>
<!--	    <div id="chipset_chart"></div>-->

<!--	<h2>Batman adv. version</h2>
		<p>
		{foreach item=batman_advanced_version_count from=$batman_advanced_versions_count}
			<b>{$batman_advanced_version_count.batman_advanced_version}:</b> <a href="./routerlist.php?where=crawl_routers.batman_advanced_version&operator=%3D&value={$batman_advanced_version_count.batman_advanced_version}">{$batman_advanced_version_count.count}</a> Router<br>
		{/foreach}
		</p>-->
	</div>
	<div style="float:left; width: 50%;">
	<h2>Firmware</h2>
	<div style="height: 300px;" id="firmwareversions_chart"></div>
<!--		<h2>Kernel Version</h2>
		<p>
		{foreach item=kernel_version_count from=$kernel_versions_count}
			<b>{$kernel_version_count.kernel_version}:</b> <a href="./routerlist.php?where=crawl_routers.kernel_version&operator=%3D&value={$kernel_version_count.kernel_version}">{$kernel_version_count.count}</a>  Router<br>
		{/foreach}-->
		</p>
	</div>
<!--	<div style="float:left; width: 33%;">
		<h2>Nodewatcher Version</h2>
		<p>
		{foreach item=nodewatcher_version_count from=$nodewatcher_versions_count}
			<b>{$nodewatcher_version_count.nodewatcher_version}:</b> <a href="./routerlist.php?where=crawl_routers.nodewatcher_version&operator=%3D&value={$nodewatcher_version_count.nodewatcher_version}">{$nodewatcher_version_count.count}</a> Router<br>
		{/foreach}
		</p>
	</div>-->
</div>
<br>

<div style="width: 100%; overflow: hidden;">
	<div style="float:left; width: 50%;">
		<h2>B.A.T.M.A.N advanced</h2>
		<div style="height: 300px;" id="batmanadv_div"></div>
	
<!--
    <div id="batmanadv_div"></div>    

<h2>Router nach Chipset</h2>
		<p>
		{foreach item=router_chipset from=$router_chipsets}
			<b>{if !empty($router_chipset.hardware_name)}{$router_chipset.hardware_name}{else}{$router_chipset.chipset_name}{/if}</b> {if !empty($router_chipset.hardware_name)}({$router_chipset.chipset_name}){/if}: <a href="./routerlist.php?where=crawl_routers.chipset&operator=%3D&value={$router_chipset.chipset_name}">{$router_chipset.count}</a><br>
		{/foreach}
		</p>-->
	</div>
	<div style="float:left; width: 50%;">
		<h2>Kernel</h2>
		<div style="height: 300px;" id="kernelversions_chart"></div>

<!--
	    <div id="kernelversions_chart"></div>
<h2>Router nach Firmware Version</h2>
		<p>
		{foreach item=firmware_version_count from=$firmware_versions_count}
			<b>{$firmware_version_count.firmware_version}:</b> <a href="./routerlist.php?where=crawl_routers.firmware_version&operator=%3D&value={$firmware_version_count.firmware_version}">{$firmware_version_count.count}</a><br>
		{/foreach}
		</p>
	</div>-->
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
{else}
	<p>Es wurde noch kein Crawlzyklus vollständig beendet, sodass keine Daten generiert werden können</p>
{/if}
<br style="clear: both;">
