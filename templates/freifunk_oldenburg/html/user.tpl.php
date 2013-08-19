<script src="lib/classes/extern/jquery/jquery.min.js"></script>
<script src="lib/classes/extern/DataTables/jquery.dataTables.min.js"></script>

<script type="text/javascript">
{literal}
$(document).ready(function() {
	$('#routerlist').dataTable( {
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false,
		"aoColumns": [ 
			{ "sType": "html" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" },
			{ "sType": "string" }, // zuverlässigkeit need own
			{ "sType": "numeric" },
			{ "sType": "numeric" },
			{ "sType": "numeric" }
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
{/literal}
</script>

<h1>Benutzerseite von {$user.nickname}</h1>

<div style="width: 100%; overflow: hidden;">
	<div style="float:left; width: 47%;">
		<h2>Daten</h2>
		<p>
			{if $is_logged_in}
				{if $smarty.session.user_id == $user.id}<b>API Key:</b> {$user.api_key}<br>{/if}
				{if !empty($user.vorname) OR !empty($user.nachname)}<b>Name:</b> {$user.vorname} {$user.nachname}<br>{/if}
				{if !empty($user.strasse)}<b>Strasse: </b>{$user.strasse}<br>{/if}
				{if !empty($user.plz) OR !empty($user.ort)}<b>Wohnort:</b>  {$user.plz} {$user.ort}<br>{/if}
				{if !empty($user.telefon)}<b>Telefon:</b> {$user.telefon}<br>{/if}
				{if !empty($user.email)}<b>Email:</b> <a href="mailto:{$user.email}">{$user.email}</a><br>{/if}
				{if !empty($user.jabber)}<b>Jabber-ID:</b> {$user.jabber}<br>{/if}
				{if !empty($user.icq)}<b>ICQ:</b> {$user.icq}<br>{/if}
				{if !empty($user.website)}<b>Website:</b> <a href="{$user.website}">{$user.website}</a><br>{/if}
			{/if}
			{if !empty($user.telefon)}<b>Beschreibung:</b> {$user.about}<br>{/if}
			<b>Anmeldedatum:</b> {$user.create_date|date_format:"%e.%m.%Y %H:%M"} Uhr<br>
			<b>Benutzerrollen:</b>	{assign var="first_role" value=true}
						{foreach item=role from=$user.roles}<!--
							-->{if $role.check}<!--
								-->{if !$first_role}, {/if}<!--
								-->{if $role.role == 3}Benutzer{/if}<!--
								-->{if $role.role == 4}Moderator{/if}<!--
								-->{if $role.role == 5}Administrator{/if}<!--
								-->{if $role.role == 6}Root{/if}<!--
								-->{assign var="first_role" value=false}<!--
							-->{/if}<!--
						-->{/foreach}
		</p>
	</div>
	<div style="float:left; width: 53%;">
		<h2>Events</h2>
		{if !empty($eventlist)}
			<ul>
				{foreach key=count item=event from=$eventlist}
					<li>
						<b><a href="event.php?event_id={$event->getEventId()}">{$event->getCreateDate()|date_format:"%e.%m.%Y %H:%M"}</a>:</b> 
						{if $event->getObject() == 'router'}
							{assign var="data" value=$event->getData()}
							<a href="./router_status.php?router_id={$event->getObjectId()}">{$data.hostname}</a> 
							{if $event->getAction() == 'status' AND $data.to == 'online'}
								geht <span style="color: #007B0F;">online</span>
							{/if}
							{if $event->getAction() == 'status' AND $data.to == 'offline'}
								geht <span style="color: #CB0000;">offline</span>
							{/if}
							{if $event->getAction() == 'reboot'}
								wurde <span style="color: #000f9c;">Rebootet</span>
							{/if}
							{if $event->getAction() == 'new'}
								wurde Netmon hinzugefügt
							{/if}
							{if $event->getAction() == 'batman_advanced_version'}
								änderte Batman adv. Version von {$data.from} zu {$data.to}</span>
							{/if}
							{if $event->getAction() == 'firmware_version'}
								änderte Firmware Version von {$data.from} zu {$data.to}</span>
							{/if}
							{if $event->getAction() == 'nodewatcher_version'}
								änderte Nodewatcher Version von {$data.from} zu {$data.to}</span>
							{/if}
							{if $event->getAction() == 'distversion'}
								änderte Distversion Version von {$data.from} zu {$data.to}</span>
							{/if}
							{if $event->getAction() == 'distname'}
								änderte Distname Version von {$data.from} zu {$data.to}</span>
							{/if}
							{if $event->getAction() == 'hostname'}
								änderte Hostname von {$data.from} zu {$data.to}</span>
							{/if}
							{if $event->getAction() == 'chipset'}
								änderte Chipset von {$data.from} zu {$data.to}</span>
							{/if}
							{if $event->getAction() == 'watchdog_ath9k_bug'}
								<a href="./event.php?event_id={$event->getEventId()}">ATH9K Bug registriert</a>
							{/if}
						{/if}
						{if $event->getObject() == 'not_assigned_router'}
							{assign var="data" value=$event->getData()}
							
							{$data.router_auto_assign_login_string}
							{if $event->getAction() == 'new'}
								 erscheint in der <a href="./routers_trying_to_assign.php">Liste der neuen, nicht zugewiesenen Router</a>
							{/if}
						{/if}
					</li>
				{/foreach}
			</ul>
		{else}
			<p>Es sind keine Events in der Datenbank gespeichert.</p>
		{/if}
	</div>
</div>

{if $smarty.get.user_id==$smarty.session.user_id AND empty($routerlist)}
	<h2>Neu bei Freifunk?</h2>
	<p>Du hast noch keine Router angelegt. Wenn dein Router schon angeschlossen ist, kannst du ihn aus dieser Liste übernehmen. Wenn dein Router trotzdem noch nicht in dieser Liste auftaucht, versuche die Seite in ein paar Minuten (5-10) noch einmal neu zu laden.</p>

	{if !empty($routersnotassigned_list)}
		<table class="display" id="routerlist" style="width: 100%;">
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
				{foreach key=count item=router from=$routersnotassigned_list}
					<tr>
						<td>{$router.hostname}</td>
						<td>{$router.router_auto_assign_login_string}</td>
						<td>{$router.create_date|date_format:"%d.%m.%Y %H:%M"} Uhr</td>
						<td>{$router.update_date|date_format:"%H:%M"} Uhr</td>
						<td><a href="./routereditor.php?section=new&hostname={$router.hostname}&crawl_method=router&allow_router_auto_assign=1&router_auto_assign_login_string={$router.router_auto_assign_login_string}">Übernehmen</a></td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	{else}
		<p>In der Liste der neuen Router ist derzeit kein Router eingetragen.</p>
	{/if}
{/if}

<h2>Router von {$user.nickname}</h2>
{if !empty($routerlist)}
	<table class="display" id="routerlist" style="width: 100%;">
		<thead>
			<tr>
				<th>Hostname</th>
				<th>O</th>
				<th>Stand</th>
				<th>Technik</th>
				<th>Online</th>
				<th>Uptime</th>
				<th>Clients</th>
				<th>Traffic</th>
			</tr>
		</thead>
		<tbody>
			{foreach $routerlist as $router}
				<tr>
					<td><a href="./router_status.php?router_id={$router.router_id}">{$router.hostname}</a></td>
					<td>
						{if $router.actual_crawl_data.status=="online"}
							<img src="./templates/{$template}/img/ffmap/status_up_small.png" title="online" alt="online">
						{elseif $router.actual_crawl_data.status=="offline"}
							<img src="./templates/{$template}/img/ffmap/status_down_small.png" title="offline" alt="offline">
						{elseif $router.actual_crawl_data.status=="unknown"}
							<img src="./templates/{$template}/img/ffmap/status_unknown_small.png" title="unknown" alt="unknown">
						{/if}
					</td>
					<td>{$router.actual_crawl_data.crawl_date|date_format:"%H:%M"} Uhr</td>
					<td>{if !empty($router.hardware_name)}{$router.hardware_name}{else}{$router.short_chipset_name}{if $router.short_chipset_name!=$router.chipset_name}...{/if}{/if}</td>
					<td value="{math equation='round(x,1)' x=$router.router_reliability.online_percent}">{math equation="round(x,1)" x=$router.router_reliability.online_percent}%</td>
					<td>{math equation="round(x,1)" x=$router.actual_crawl_data.uptime/60/60} Std.</td>
					<td>{$router.actual_crawl_data.client_count}</td>
					<td>{$router.traffic}</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
{else}
	<p>Du hast noch keine Router angelegt.</p>
{/if}

<h2>Dienste von {$user.nickname}</h2>
{if !empty($servicelist)}
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
			{foreach $servicelist as $service}
				<tr>
					<td><a href="./service.php?service_id={$service->getServiceId()}">{$service->getTitle()}</a></td>
					<td>
						{foreach key=i item=ip from=$service->getIplist()->getIplist()}{if $i>0},<br>{/if}{$ip->getIp()}{/foreach}
					</td>
					<td>
						{foreach key=i item=dns_ressource_record from=$service->getDnsRessourceRecordList()->getDnsRessourceRecordList()}{if $i>0},<br>{/if}{$dns_ressource_record->getHost()}.{$dns_ressource_record->getDnsZone()->getName()}{/foreach}
					</td>
					<td>{$service->getPort()}</td>
					<td><a href="./service.php?section=delete&service_id={$service->getServiceId()}">Löschen</a></td>
				</tr>
			{/foreach}
		</tbody>
	</table>
{else}
	<p>Keine Services vorhanden.</p>
{/if}

<!--TODO
<h2>Domains von {$user.nickname}</h2>
{if !empty($dns_hosts)}
	<table class="display" id="domainlist" style="width: 100%;">
		<thead>
			<tr>
				<th>Domain</th>
				<th>IPv4 Adresse</th>
				<th>IPv6 Adresse</th>
				<th>Aktionen</th>
			</tr>
		</thead>
		<tbody>
			{foreach $dns_hosts as $dns_host}
				<tr>
					<td>{$dns_host.host}.{$dns_tld}</td>
					<td>{if $dns_host.ipv4_id!=0}{$dns_host.ipv4_ip}{else}Keine IPv4 Adresse{/if}</td>
					<td>{if $dns_host.ipv6_id!=0}{$dns_host.ipv6_ip}{else}Keine IPv6 Adresse{/if}</td>
					<td><a href="./dnseditor.php?section=edit_host&host_id={$dns_host.id}">Editieren</a></td>
				</tr>
			{/foreach}
		</tbody>
	</table>
{else}
	<p>Keine Domains vorhanden.</p>
{/if}-->