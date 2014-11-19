<?php /* Smarty version Smarty-3.1.14, created on 2014-11-17 19:07:05
         compiled from "/var/www/netmon/templates/base/html/install_info.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1055977901546a3949f23422-19765097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '649bcd30ce45a6749348fbbe0961e11a98950924' => 
    array (
      0 => '/var/www/netmon/templates/base/html/install_info.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1055977901546a3949f23422-19765097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'netmon_version' => 0,
    'pdo_loaded' => 0,
    'template' => 0,
    'pdo_mysql_loaded' => 0,
    'openssl_loaded' => 0,
    'gmp_loaded' => 0,
    'json_loaded' => 0,
    'curl_loaded' => 0,
    'gd_loaded' => 0,
    'iconv_loaded' => 0,
    'php_version' => 0,
    'exec' => 0,
    'mail' => 0,
    'rrdtool_installed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a394a08be68_24906192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a394a08be68_24906192')) {function content_546a394a08be68_24906192($_smarty_tpl) {?><h1>Installationsroutine</h1>
<p>Herzlich willkommen in der Installationsroutine von Netmon. Du benutzt Netmon in der Version <i><?php echo $_smarty_tpl->tpl_vars['netmon_version']->value;?>
</i>. Dieser Assistent wird dich durch die Installation führen und die wichtigsten Einstellungen vornehmen. Alle weiteren Einstellungen und Anpassungen an deine lokale Community kannst du später als eingeloggter Benutzer im Menü unter <i>Konfiguration</i> vornehmen.</p>

<h2>Wichtige Informationen</h2>
<p>Auf den folgenden Webseiten findest du wichtige Informationen rund um Netmon sowie die für Netmon entwickelten Systeme.</p>
<ul>
	<li><a href="http://wiki.freifunk-ol.de/w/Netmon">Allgemeine Wikiseite zu Netmon</a></li>
	<li><a href="http://wiki.freifunk-ol.de/w/Netmon/Handbuch">Handbuch zu Netmon</a></li>
	<li><a href="http://wiki.freifunk-ol.de/w/Netmon/Handbuch#Installation">Handbuch Abschnitt Installation</a></li>
	<li><a href="http://wiki.freifunk-ol.de/w/Netmon/Development-HowTo">Development-HowTo</a></li>
	<li><a href="http://ticket.freifunk-ol.de/projects/netmon">Netmon Entwicklerportal</a></li>
</ul>

<h2>Systemcheck</h2>
<p>Der Systemcheck überprüft ob alle wichtigen PHP-Extensions, PHP-Funktionen sowie die passende PHP-Version auf deinem Webserver verfügbar sind und ob alle notwendigen externen Programme installiert sind.</p>
<div style="width: 100%; display:inline-block">
	<div style="float:left; width: 33%;">
		<h3>PHP-Extensions</h3>
		<a href="http://php.net/manual/de/book.pdo.php">PDO</a>: <?php if ($_smarty_tpl->tpl_vars['pdo_loaded']->value){?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="aktiviert"><?php }else{ ?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" alt="nicht aktiviert"><?php }?><br>
		<a href="http://php.net/manual/de/ref.pdo-mysql.php">PDO MySQL</a>: <?php if ($_smarty_tpl->tpl_vars['pdo_mysql_loaded']->value){?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="aktiviert"><?php }else{ ?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" alt="nicht aktiviert"><?php }?><br>
		<a href="http://php.net/manual/de/book.openssl.php">OpenSSL</a>: <?php if ($_smarty_tpl->tpl_vars['openssl_loaded']->value){?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="aktiviert"><?php }else{ ?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" alt="nicht aktiviert"><?php }?><br>
		<a href="http://php.net/manual/de/book.gmp.php">GMP</a>: <?php if ($_smarty_tpl->tpl_vars['gmp_loaded']->value){?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="aktiviert"><?php }else{ ?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" alt="nicht aktiviert"><?php }?><br>
		<a href="http://php.net/manual/de/book.json.php">Json</a>: <?php if ($_smarty_tpl->tpl_vars['json_loaded']->value){?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="aktiviert"><?php }else{ ?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" alt="nicht aktiviert"><?php }?><br>
		<a href="http://php.net/manual/de/book.curl.php">Curl</a>: <?php if ($_smarty_tpl->tpl_vars['curl_loaded']->value){?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="aktiviert"><?php }else{ ?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" alt="nicht aktiviert"><?php }?><br>
		<a href="http://php.net/manual/de/book.image.php">GD</a>: <?php if ($_smarty_tpl->tpl_vars['gd_loaded']->value){?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="aktiviert"><?php }else{ ?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" alt="nicht aktiviert"><?php }?><br>
		<a href="http://php.net/manual/de/book.iconv.php">Iconv</a>: <?php if ($_smarty_tpl->tpl_vars['iconv_loaded']->value){?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="aktiviert"><?php }else{ ?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" alt="nicht aktiviert"><?php }?><br>
	</div>
	<div style="float:left; width: 33%;">
		<h3>PHP-Version</h3>
		PHP >=5.3: <?php if ($_smarty_tpl->tpl_vars['php_version']->value){?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="aktiviert"><?php }else{ ?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" alt="nicht aktiviert"><?php }?>
		<h3>PHP-Funktionen</h3> 
		<a href="http://php.net/manual/de/function.exec.php">exec()</a>: <?php if ($_smarty_tpl->tpl_vars['exec']->value){?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="aktiviert"><?php }else{ ?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" alt="nicht aktiviert"><?php }?><br>
		<a href="http://php.net/manual/de/function.mail.php">mail()</a>: <?php if ($_smarty_tpl->tpl_vars['mail']->value){?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="aktiviert"><?php }else{ ?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_unknown_small.png" alt="nicht aktiviert"><?php }?><br>

		<h3>Externe Programme</h3> 
		<a href="http://oss.oetiker.ch/rrdtool/">RrdTool</a>: <?php if ($_smarty_tpl->tpl_vars['rrdtool_installed']->value){?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_up_small.png" alt="aktiviert"><?php }else{ ?><img src="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/ffmap/status_down_small.png" alt="nicht aktiviert"><?php }?><br>
	</div>
	<div style="float:left; width: 33%;">
		<h3>Ergebnis</h3>
		<?php if (!$_smarty_tpl->tpl_vars['rrdtool_installed']->value||!$_smarty_tpl->tpl_vars['pdo_loaded']->value||!$_smarty_tpl->tpl_vars['pdo_mysql_loaded']->value||!$_smarty_tpl->tpl_vars['openssl_loaded']->value||!$_smarty_tpl->tpl_vars['gmp_loaded']->value||!$_smarty_tpl->tpl_vars['json_loaded']->value||!$_smarty_tpl->tpl_vars['curl_loaded']->value||!$_smarty_tpl->tpl_vars['gd_loaded']->value||!$_smarty_tpl->tpl_vars['iconv_loaded']->value||!$_smarty_tpl->tpl_vars['exec']->value||!$_smarty_tpl->tpl_vars['php_version']->value){?>
			<div class="error" style="margin: 0px;">Einige Funktionen sind inaktiv, es kann zu Problemen bei Installation und Betrieb kommen!</div>
		<?php }else{ ?>
			<div class="notice" style="margin: 0px;">Alle Funktionen sind aktiv, Installation und Betrieb sollten ohne Probleme ablaufen.</div>
			<?php if (!$_smarty_tpl->tpl_vars['mail']->value){?>
				<div class="unknown" style="margin: 0px; margin-top: 10px;">Da kein Mailserver verfügbar ist, wird ein SMTP-Mailtransport genutzt der im folgenden eingerichtet werden <b>muss</b>.</div>
			 <?php }?>
		<?php }?>
	</div>
</div>
<br>
<br>
<form action="./install.php?section=db" method="POST">
	<p><input type="submit" value="Weiter"></p>
</form>
<?php }} ?>