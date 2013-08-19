<h1>Konfiguration des Routers {$router_data.hostname}</h1>

<div style="width: 100%; overflow: hidden;">
    <div style="float:left; width: 50%;">
		<h2>Grunddaten</h2>
		<b>Benutzer:</b> <a href="./user.php?user_id={$router_data.user_id}">{$router_data.nickname}</a><br>
		<b>Angelegt am:</b> {$router_data.create_date|date_format:"%e.%m.%Y %H:%M"} Uhr<br>
		{if !empty($router_data.description)}<b>Beschreibung:</b> {$router_data.description}<br>{/if}

		<h2>Router Konfiguration</h2>

		<h3><u>Netzwerk</u></h3>
		<b>Hostname:</b> {$router_data.hostname}<br>

		<h3><u>Hardware</u></h3>
		<p>
			<b>Chipset:</b> {$router_data.chipset_name}<br>
		</p>

		<h3><u>Statusdaten</u></h3>
		<b>Datenquelle:</b> {if $router_data.crawl_method=='router'}Router sendet Daten{elseif $router_data.crawl_method=='crawler'}Netmon Crawler{/if}<br>
      </div>

      <div style="float:left; width: 50%;">
		<h2>Standort</h2>
		{if (!empty($router_data.latitude) AND !empty($router_data.longitude)) OR (!empty($router_last_crawl.latitude) AND !empty($router_last_crawl.longitude))}
		<script type="text/javascript" src='https://maps.googleapis.com/maps/api/js?key={$google_maps_api_key}&sensor=false'></script>
		<script type="text/javascript" src="./lib/classes/extern/openlayers/OpenLayers.js"></script>
		<script type="text/javascript" src="./templates/{$template}/js/OpenStreetMap.js"></script>
		<script type="text/javascript" src="./templates/{$template}/js/OsmFreifunkMap.js"></script>

		<div id="map" style="height:300px; width:400px; border:solid 1px black;font-size:9pt;">
			<script type="text/javascript">
				var lat = {$router_data.latitude};
				var lon = {$router_data.longitude};

				var radius = 30
				var zoom = 16;

				/* Initialize Map */
				router_map({$router_data.router_id});
			</script>
		</div>
		<p><b>Standortbeschreibung:</b><br>
			Lat: {$router_data.latitude}
			Lon: {$router_data.longitude}

			<br><br>
			{$router_data.location}
		</p>
		{else}
			<p>Keine Standortdaten verfügbar</p>
		{/if}
	</div>
</div>

<h2>Interfaces</h2>
{if !empty($networkinterfacelist)}
	{foreach key=count item=interface from=$networkinterfacelist}
		<h3>{$interface->getName()}</h3>
		<div style="width: 100%; overflow: hidden;">
			<div style="float:left; width: 50%;">
			<ul>
				<li>
					<b>Angelegt am:</b> {$interface->getCreateDate()|date_format:"%e.%m.%Y %H:%M"}
				</li>
				<li>
					<b>IP-Adressen:</b>
					{foreach $interface->getIpList()->getIpList() as $ip}
						<ul>
							<li>
								<b>IPv{$ip->getNetwork()->getIpv()} Adresse:</b> {$ip->getIpCompressed()}/{$ip->getNetwork()->getNetmask()} (<a href="./ip.php?section=delete&ip_id={$ip->getIpId()}&router_id={$router_data.router_id}">IP entfernen</a>)
								
								(<a href="./ping_ip.php?ip_id={$ip->getIpId()}">Ping</a>, <a href="./show_crawl_data.php?ip_id={$ip->getIpId()}">Crawl Daten</a>)
								
								
								<br>
							</li>
							<ul>
								<li>
									<b>Angelegt am:</b> {$ip->getCreateDate()|date_format:"%e.%m.%Y %H:%M"}
								</li>
							</ul>
						</ul>
					{/foreach}
				</li>
			</ul>
			
			</div>
			<div style="float:left; width: 50%;">
				<p>
					<a href="./ip.php?section=add&router_id={$interface->getRouterId()}&interface_id={$interface->getNetworkinterfaceId()}">IP hinzufügen</a><br>
					<a href="./interface.php?section=delete&interface_id={$interface->getNetworkinterfaceId()}">Interface entfernen</a>
				</p>
			</div>
		</div>
		<hr>
	{/foreach}
{else}
	<p>Es sind keine Interfaces eingetragen</p>
{/if}