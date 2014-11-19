<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 19:04:12
         compiled from "/var/www/netmon/templates/base/html/config_network_connection.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:208236805546b8a1c4c8b27-06915692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '517d07d3b777677313c3ff2303de9390e8d3adc2' => 
    array (
      0 => '/var/www/netmon/templates/base/html/config_network_connection.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208236805546b8a1c4c8b27-06915692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'network_connection_ipv4' => 0,
    'network_connection_ipv6' => 0,
    'network_connection_ipv6_interface' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546b8a1c506904_39076942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b8a1c506904_39076942')) {function content_546b8a1c506904_39076942($_smarty_tpl) {?><h1>Konfiguration der Netzwerkandinung</h1>
<form action="./config.php?section=insert_edit_network_connection" method="POST">
	<h2>IPv4</h2>
	<p>Ist netmon lokal per IPv4 an das Freifunk Netzwerk angebunden?</p>
	<p><b>Ja</b> <input name="network_connection_ipv4" type="checkbox" value="true" <?php if ($_smarty_tpl->tpl_vars['network_connection_ipv4']->value=='true'){?>checked<?php }?>>

	<h2>IPv6</h2>
	<p>Ist netmon lokal per IPv6 an das Freifunk Netzwerk angebunden?</p>
	<p><b>Ja</b> <input name="network_connection_ipv6" type="checkbox" value="true" <?php if ($_smarty_tpl->tpl_vars['network_connection_ipv6']->value=='true'){?>checked<?php }?>>
	<p><b>Lokales IPv6 Interface:</b><br><input name="network_connection_ipv6_interface" type="text" size="20" value="<?php echo $_smarty_tpl->tpl_vars['network_connection_ipv6_interface']->value;?>
"></p>
	
	<p><input type="submit" value="Absenden"></p>
</form><?php }} ?>