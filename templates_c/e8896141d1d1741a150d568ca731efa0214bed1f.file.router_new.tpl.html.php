<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 20:24:13
         compiled from "/var/www/netmon/templates/base/html/router_new.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:541690341546b9cdd644049-18030963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8896141d1d1741a150d568ca731efa0214bed1f' => 
    array (
      0 => '/var/www/netmon/templates/base/html/router_new.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '541690341546b9cdd644049-18030963',
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
    'chipsetlist' => 0,
    'chipset' => 0,
    'twitter_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546b9cdd6f4e03_19605313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b9cdd6f4e03_19605313')) {function content_546b9cdd6f4e03_19605313($_smarty_tpl) {?><h1>Router anlegen:</h1>
<p>Hier kannst du einen neuen Router anlegen. Dieser wird später unter seinem Hostname in der Routerliste aufgeführt und auch
auf der Karte angezeigt sofern du einen Standort angibst.</p>

<form action="./routereditor.php?section=insert" method="POST">
	<h2>Standort</h2>
	<span id="section_location">
		<div style="margin-bottom: 10px; width: 100%; overflow: hidden;" class="section_location">
			<script type="text/javascript" src='https://maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['google_maps_api_key']->value;?>
&sensor=false'></script>
			<script type="text/javascript" src="./lib/extern/openlayers/OpenLayers.js"></script>
			<script type="text/javascript" src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/OpenStreetMap.js"></script>
			<script type="text/javascript" src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/OsmFreifunkMap.js"></script>
			<div id="map" style="height:312px; width:100%; font-size:9pt;">
				<script type="text/javascript">
					new_router_map('<?php echo $_smarty_tpl->tpl_vars['community_location_longitude']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['community_location_latitude']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['community_location_zoom']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
');
				</script>
			</div>
		</div>
		<input type="hidden" id="longitude" name="longitude" size="20" maxlength="15" value="">
		<input type="hidden" id="latitude" name="latitude" size="20" maxlength="15" value="">
		
		<p style="margin-bottom: 10px">
			<b>Standortbeschreibung:</b> (optional)<br><input name="location" type="text" size="80" maxlength="50">
		</p>
	</span>
	
	<p>
		<b>Standortoptionen:</b><br>
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
				" name="no_location" id="no_location" type="checkbox" value="1"> Ich möchte nicht, dass Standortdaten gespeichert werden.
	</p>
	
	<h2>Daten</h2>
	<p style="margin-bottom: 10px">
		<b>Hostname:</b> (keine Sonderzeichen und Leerzeichen)<br><input name="hostname" type="text" size="40" maxlength="50" value="<?php if (!empty($_GET['hostname'])){?><?php echo $_GET['hostname'];?>
<?php }?>">
	</p>
	
	<p style="margin-bottom: 10px">
		<b>Beschreibung zum Router:</b> (optional)<br><textarea name="description" cols="40" rows="2"></textarea>
	</p>
	
	<p style="margin-bottom: 10px">
		<b>Chipsatz</b> (optional):<br>
		<select name="chipset_id">
			<?php  $_smarty_tpl->tpl_vars['chipset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chipset']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chipsetlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chipset']->key => $_smarty_tpl->tpl_vars['chipset']->value){
$_smarty_tpl->tpl_vars['chipset']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['chipset']->value->getChipsetId();?>
"><?php if ($_smarty_tpl->tpl_vars['chipset']->value->getHardwareName()){?><?php echo $_smarty_tpl->tpl_vars['chipset']->value->getHardwareName();?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['chipset']->value->getHardwareName()&&$_smarty_tpl->tpl_vars['chipset']->value->getName()){?>(<?php }?><?php echo $_smarty_tpl->tpl_vars['chipset']->value->getName();?>
<?php if ($_smarty_tpl->tpl_vars['chipset']->value->getHardwareName()&&$_smarty_tpl->tpl_vars['chipset']->value->getName()){?>)<?php }?></option>
			<?php } ?>
		</select>
	</p>
	
	<p>
		<b>MAC-Adresse:</b> (benötigt für Routerzuweisung)<br>
		<input name="router_auto_assign_login_string" type="text" size="20" maxlength="50" value="<?php if (isset($_GET['router_auto_assign_login_string'])){?><?php echo $_GET['router_auto_assign_login_string'];?>
<?php }?>">
	</p>
	
	<h2>Sonstiges</h2>
	<p style="margin-bottom: 10px">
		<b>Routerzuweisung:</b><br>
		<input name="allow_router_auto_assign" type="checkbox" value="1" <?php if (!isset($_GET['allow_router_auto_assign'])||$_GET['allow_router_auto_assign']==1){?>checked<?php }?>> Ich möchte dass sich mein Router mittels seiner MAC-Adresse mit Netmon verbindet. 
	</p>
	
	<p style="margin-bottom: 10px">
		<b>Statusaktualisierung:</b> (ändere diese Option nur, wenn du weißt was du tust)<br>
		<select name="crawl_method" onChange="getProjectInfo(this.options[this.selectedIndex].value)">
			<option value="crawler" <?php if (!isset($_GET['crawl_method'])||$_GET['crawl_method']=='crawler'){?>selected='selected'<?php }?>>Netmon Crawlt den Router</option>
			<option value="router" <?php if (isset($_GET['crawl_method'])&&$_GET['crawl_method']=='router'){?>selected='selected'<?php }?>>Der Router sendet die Daten selbstständig</option>
		</select>
	</p>
	
	<?php if (!empty($_smarty_tpl->tpl_vars['twitter_token']->value)){?>
	<p style="margin-bottom: 10px">
		<b>Twitterankündigung:</b><br>
		<input name="twitter_notification" type="checkbox" value="1" checked> Freifunker Per Twitter über den neuen Router informieren.
	</p>
	<?php }?>
	
	<p><input type="submit" value="Absenden"></p>
</form>
<?php }} ?>