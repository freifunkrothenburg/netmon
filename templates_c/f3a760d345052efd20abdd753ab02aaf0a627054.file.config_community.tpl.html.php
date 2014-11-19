<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 19:03:49
         compiled from "/var/www/netmon/templates/base/html/config_community.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:411527616546b8a051207b0-76535186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3a760d345052efd20abdd753ab02aaf0a627054' => 
    array (
      0 => '/var/www/netmon/templates/base/html/config_community.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '411527616546b8a051207b0-76535186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'community_name' => 0,
    'community_slogan' => 0,
    'community_essid' => 0,
    'google_maps_api_key' => 0,
    'template' => 0,
    'community_location_longitude' => 0,
    'community_location_latitude' => 0,
    'community_location_zoom' => 0,
    'enable_network_policy' => 0,
    'network_policy_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546b8a05188ed8_72555291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b8a05188ed8_72555291')) {function content_546b8a05188ed8_72555291($_smarty_tpl) {?><h1>Konfiguration der Community Daten</h1>
<form action="./config.php?section=insert_edit_community" method="POST">
	<h2>Lokales</h2>
	<p><b>Name der Community:</b><br><input name="community_name" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['community_name']->value;?>
"></p>
	<p><b>Slogan der Community:</b><br><input name="community_slogan" type="text" size="60" value="<?php echo $_smarty_tpl->tpl_vars['community_slogan']->value;?>
"></p>
	<p><b>ESSID der Community:</b><br><input name="community_essid" type="text" size="60" value="<?php echo $_smarty_tpl->tpl_vars['community_essid']->value;?>
"></p>
	<p><b>Ort der Community:</b><br>
		<div id="section_location">
			<div style="width: 100%; overflow: hidden;" class="section_location">
				<script type="text/javascript" src='https://maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['google_maps_api_key']->value;?>
&sensor=false'></script>
				<script type="text/javascript" src="./lib/extern/openlayers/OpenLayers.js"></script>
				<script type="text/javascript" src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/OpenStreetMap.js"></script>
				<script type="text/javascript" src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/OsmFreifunkMap.js"></script>
				
				<div id="map" style="height:300px; width:400px; border:solid 1px black;font-size:9pt;">
						<script type="text/javascript">
							community_location_map('<?php echo $_smarty_tpl->tpl_vars['community_location_longitude']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['community_location_latitude']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['community_location_zoom']->value;?>
');
						</script>
				</div>
			</div>
			
			<input type="hidden" id="community_location_longitude" name="community_location_longitude" size="20" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['community_location_longitude']->value;?>
">
			<input type="hidden" id="community_location_latitude" name="community_location_latitude" size="20" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['community_location_latitude']->value;?>
">
			<input type="hidden" id="community_location_zoom" name="community_location_zoom" size="5" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['community_location_zoom']->value;?>
">
		</div>
	</p>

	<br>

	<h2>Netzwerkpolicy</h2>
	<p>Ist die Netzwerkpolicy eingeschaltet, dann wird neuen Benutzern bei der Registration ein Link auf eine Netzwerkpolicy gezeigt. Damit ein Benutzer sich erfolgreich registrieren kann, muss er diese bestätigen.</p>
	<p><b>Netzwerkpolicy einschalten:</b> <input name="enable_network_policy" type="checkbox" value="true" <?php if ($_smarty_tpl->tpl_vars['enable_network_policy']->value=='true'){?>checked<?php }?>>
	<p><b>Link zur Netzwerkpolicy:</b><br><input name="network_policy_url" type="text" size="70" value="<?php echo $_smarty_tpl->tpl_vars['network_policy_url']->value;?>
"></p>
	<br>

	<p><input type="submit" value="Absenden"></p>
</form><?php }} ?>