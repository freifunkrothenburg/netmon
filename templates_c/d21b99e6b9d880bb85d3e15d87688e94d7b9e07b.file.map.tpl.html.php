<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 06:55:08
         compiled from "/var/www/netmon/templates/base/html/map.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1225658776546adf3cb813d4-01297641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd21b99e6b9d880bb85d3e15d87688e94d7b9e07b' => 
    array (
      0 => '/var/www/netmon/templates/base/html/map.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1225658776546adf3cb813d4-01297641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'google_maps_api_key' => 0,
    'template' => 0,
    'community_location_longitude' => 0,
    'community_location_latitude' => 0,
    'community_location_zoom' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546adf3cbd7064_64578029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546adf3cbd7064_64578029')) {function content_546adf3cbd7064_64578029($_smarty_tpl) {?><h1>Karte der Router</h1>
<div style="margin-right: 10px;">
	<script type="text/javascript" src='https://maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['google_maps_api_key']->value;?>
&sensor=false'></script>
	<script type="text/javascript" src="./lib/extern/openlayers/OpenLayers.js"></script>

	<script type="text/javascript" src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/OpenStreetMap.js"></script>
	<script type="text/javascript" src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/OsmFreifunkMap.js"></script>
	
	<div id="map" style="height:600px; width:100%; border:solid 1px black;font-size:9pt;">
		<script type="text/javascript">
			fullmap('<?php echo $_smarty_tpl->tpl_vars['community_location_longitude']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['community_location_latitude']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['community_location_zoom']->value;?>
');
		</script>
	</div>
</div>
<br>
<h3>Legende</h3>
<div style="float: left; margin-right: 20px;">
<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/green_button.png"> Router ist online<br>
<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/ip_offline.png"> Router ist offline<br>
<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/traffic_6.png" width="20"> Router hat Traffic<br>
</div>
<div>
<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/clients_2_4.png" width="20"> Router hat Clients<br>
<img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/mesh_line.png" width="20"> Mesh Verbindung (Grün: gute Qualität, Gelb: mittlere Qualität, Rot: schlechte Qualität, Blau: VPN Verbindung)<br>
</div><?php }} ?>