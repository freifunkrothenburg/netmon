<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 20:22:40
         compiled from "/var/www/netmon/templates/base/html/router_edit.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:282739483546b9c80107104-65497405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '850dfdb06a01efe709889c0f03d8be170e152565' => 
    array (
      0 => '/var/www/netmon/templates/base/html/router_edit.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282739483546b9c80107104-65497405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'router_data' => 0,
    'is_root' => 0,
    'google_maps_api_key' => 0,
    'template' => 0,
    'community_location_longitude' => 0,
    'community_location_latitude' => 0,
    'community_location_zoom' => 0,
    'chipsetlist' => 0,
    'chipset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546b9c801fbdc5_35646624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b9c801fbdc5_35646624')) {function content_546b9c801fbdc5_35646624($_smarty_tpl) {?><script type="text/javascript">
	var longitude;
	var latitude;
	var location;
</script>

<h1>Router <?php echo $_smarty_tpl->tpl_vars['router_data']->value['hostname'];?>
 editieren:</h1>

<h2>Router löschen</h2>
<form action="./routereditor.php?section=insert_delete&router_id=<?php echo $_smarty_tpl->tpl_vars['router_data']->value['router_id'];?>
" method="POST">
	<input name="really_delete" type="checkbox" value="1"> Router <?php echo $_smarty_tpl->tpl_vars['router_data']->value['hostname'];?>
 wirklich löschen?
	<p><input type="submit" value="Löschen"></p>
</form>

<?php if (!empty($_smarty_tpl->tpl_vars['router_data']->value['router_auto_assign_hash'])){?>
<h2>Router auto assign Hash zurücksetzen</h2>
<form action="./routereditor.php?section=insert_reset_auto_assign_hash&router_id=<?php echo $_smarty_tpl->tpl_vars['router_data']->value['router_id'];?>
" method="POST">
	<p>Aktueller Hash: <?php echo $_smarty_tpl->tpl_vars['router_data']->value['router_auto_assign_hash'];?>
</p>
	<p><input type="submit" value="Zurücksetzen"></p>
</form>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['is_root']->value=='1'){?>
	<h2>Hash ändern</h2>
	<form action="./routereditor.php?section=insert_edit_hash&router_id=<?php echo $_smarty_tpl->tpl_vars['router_data']->value['router_id'];?>
" method="POST">
		<p>
			Hash ändern:<br><input name="router_auto_assign_hash" type="text" size="35" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['router_data']->value['router_auto_assign_hash'];?>
">
		</p>
		<p><input type="submit" value="Absenden"></p>
	</form>
<?php }?>

<h2>Grunddaten ändern</h2>
<form action="./routereditor.php?section=insert_edit&router_id=<?php echo $_smarty_tpl->tpl_vars['router_data']->value['router_id'];?>
" method="POST">
	<p>
		Hostname: <br><input name="hostname" type="text" size="35" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['router_data']->value['hostname'];?>
">
	</p>

	<p>
		Anmerkungen: <br><textarea name="description" cols="40" rows="3"><?php echo $_smarty_tpl->tpl_vars['router_data']->value['description'];?>
</textarea>
	</p>

	<div>
		<h2>Standort</h2>
		<p>
			<input onChange="
					
						if(document.getElementById('no_location').checked) {
							document.getElementById('section_location').style.display = 'none';
							this.longitude = document.getElementById('longitude').value;
							this.latitude = document.getElementById('latitude').value;
							this.location = document.getElementById('location').value;
							
							document.getElementById('longitude').value = '';
							document.getElementById('latitude').value = '';
							document.getElementById('location').value = '';
						} else {
							document.getElementById('section_location').style.display = 'block';
							document.getElementById('longitude').value = this.longitude;
							document.getElementById('latitude').value = this.latitude;
							document.getElementById('location').value = this.location;
						}
					" name="no_location" id="no_location" type="checkbox" value="1" <?php if (empty($_smarty_tpl->tpl_vars['router_data']->value['longitude'])&&empty($_smarty_tpl->tpl_vars['router_data']->value['latitude'])&&empty($_smarty_tpl->tpl_vars['router_data']->value['location'])){?>checked<?php }?>> Ich möchte nicht, dass Standortdaten gespeichert werden.
		</p>

		<div id="section_location">
			<div style="width: 100%; overflow: hidden;" class="section_location">
				<script type="text/javascript" src='https://maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['google_maps_api_key']->value;?>
&sensor=false'></script>
				<script type="text/javascript" src="./lib/extern/openlayers/OpenLayers.js"></script>
				<script type="text/javascript" src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/OpenStreetMap.js"></script>
				<script type="text/javascript" src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/OsmFreifunkMap.js"></script>
				
				<div id="map" style="height:400px; width:600px; border:solid 1px black;font-size:9pt;">
						<script type="text/javascript">
							edit_router_map('<?php echo $_smarty_tpl->tpl_vars['community_location_longitude']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['community_location_latitude']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['router_data']->value['longitude'];?>
', '<?php echo $_smarty_tpl->tpl_vars['router_data']->value['latitude'];?>
', '<?php echo $_smarty_tpl->tpl_vars['community_location_zoom']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
');
						</script>
				</div>
			</div>
			
			<input type="hidden" id="longitude" name="longitude" size="20" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['router_data']->value['longitude'];?>
">
			<input type="hidden" id="latitude" name="latitude" size="20" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['router_data']->value['latitude'];?>
">
			
			<p>Kurze Beschreibung des Standorts:<br><input id="location" name="location" type="text" size="60" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['router_data']->value['location'];?>
"></p>
		</div>
	</div>

	<h2>Hardware</h2>
	<p>
		Chipset:
		<select name="chipset_id">
			<?php  $_smarty_tpl->tpl_vars['chipset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chipset']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chipsetlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chipset']->key => $_smarty_tpl->tpl_vars['chipset']->value){
$_smarty_tpl->tpl_vars['chipset']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['chipset']->value->getChipsetId();?>
" <?php if ($_smarty_tpl->tpl_vars['chipset']->value->getChipsetId()==$_smarty_tpl->tpl_vars['router_data']->value['chipset_id']){?>selected="selected"<?php }?>><?php if ($_smarty_tpl->tpl_vars['chipset']->value->getHardwareName()){?><?php echo $_smarty_tpl->tpl_vars['chipset']->value->getHardwareName();?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['chipset']->value->getHardwareName()&&$_smarty_tpl->tpl_vars['chipset']->value->getName()){?>(<?php }?><?php echo $_smarty_tpl->tpl_vars['chipset']->value->getName();?>
<?php if ($_smarty_tpl->tpl_vars['chipset']->value->getHardwareName()&&$_smarty_tpl->tpl_vars['chipset']->value->getName()){?>)<?php }?></option>
			<?php } ?>
		</select>
	</p>

	<h2>Statusdaten</h2>
	<p>
		Statusaktualisierung:
		<select name="crawl_method" onChange="getProjectInfo(this.options[this.selectedIndex].value)">
			<option value="crawler" <?php if ($_smarty_tpl->tpl_vars['router_data']->value['crawl_method']=='crawler'){?>selected='selected'<?php }?>>Netmon Crawlt den Router</option>
			<option value="router" <?php if ($_smarty_tpl->tpl_vars['router_data']->value['crawl_method']=='router'){?>selected='selected'<?php }?>>Der Router sendet die Daten selbstständig</option>
		</select>
	</p>

<!--	<h2>Offline Benachrichtigung</h2>
	<p><input name="notify" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['router_data']->value['notify']==1){?>checked<?php }?>> Ich möchte benachrichtigt werden, wenn dieser Router <input name="notification_wait" type="text" size="1" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['router_data']->value['notification_wait'];?>
"> Crawlzyklen offline ist.</p>-->

	<h2>Netmon Autozuweisung</h2>
	<p>
		<input name="allow_router_auto_assign" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['router_data']->value['allow_router_auto_assign']==1){?>checked<?php }?>> Erlaube automatische Router Zuweisung
	</p>

	<p>
		Mac Adresse (ohne Bindestriche oder Doppelpunkte): <br><input name="router_auto_assign_login_string" type="text" size="35" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['router_data']->value['router_auto_assign_login_string'];?>
">
	</p>
	<p><input type="submit" value="Absenden"></p>

</form>
<?php }} ?>