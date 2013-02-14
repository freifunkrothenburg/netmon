<h1>Grunddaten</h1>

<form action="./install.php?section=messages_insert" method="POST">
	<p>Einige Grundeinstellungen zu Netmon. Alle Weiteren Einstellungen findest du nach der Installation unter dem Menüpunkt <i>Konfiguration</i>.</p>
	<h2>Community</h2>
	<p>URL zur Netmon Website:<br><input name="url_to_netmon" type="text" size="30" value="{$url_to_netmon}"></p>

	<h2>Email</h2>
	<p>Versendeart: <select name="mail_sending_type" onChange="if(this.options[this.selectedIndex].value=='smtp') { document.getElementById('smtp_config').style.display = 'block'; } else { document.getElementById('smtp_config').style.display = 'none';}">
					<option value="php_mail" {if $mail_sending_type == 'php_mail'}selected{/if}>php_mail</option>
					<option value="smtp" {if $mail_sending_type == 'smtp'}selected{/if}>smtp</option>
			      </select>
	</p>

	<p>Absenderadresse:<br><input name="mail_sender_adress" type="text" size="30" value="{if isset($mail_sender_adress)}{$mail_sender_adress}{/if}"></p>
	<p>Absendername:<br><input name="mail_sender_name" type="text" size="30" value="{if isset($mail_sender_name)}{$mail_sender_name}{/if}"></p>
	<span id="smtp_config" style="display: {if $mail_sending_type == 'smtp'}block{else}none{/if};">
		<p>SMTP-Server:<br><input name="mail_smtp_server" type="text" size="30" value="{if isset($mail_smtp_server)}{$mail_smtp_server}{/if}"></p>
		<p>SMTP-Benutzername:<br><input name="mail_smtp_username" type="text" size="30" value="{if isset($mail_smtp_username)}{$mail_smtp_username}{/if}"></p>
		<p>SMTP-Passwort:<br><input name="mail_smtp_password" type="password" size="30" value="{if isset($mail_smtp_password)}{$mail_smtp_password}{/if}"></p>
		<p>SMTP-Login Methode:<br><input name="mail_smtp_login_auth" type="text" size="30" value="{if isset($mail_smtp_login_auth)}{$mail_smtp_login_auth}{/if}"></p>
		<p>SMTP-SSL Typ: <br><input name="mail_smtp_ssl" type="text" size="30" value="{if isset($mail_smtp_ssl)}{$mail_smtp_ssl}{/if}"></p>
	</span>
	
	<p><input type="submit" value="Weiter"></p>
</form>