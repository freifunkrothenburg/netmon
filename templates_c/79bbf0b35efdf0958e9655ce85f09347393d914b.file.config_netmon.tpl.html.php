<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 19:04:23
         compiled from "/var/www/netmon/templates/base/html/config_netmon.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:25950520546b8a2769fc67-93234330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79bbf0b35efdf0958e9655ce85f09347393d914b' => 
    array (
      0 => '/var/www/netmon/templates/base/html/config_netmon.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25950520546b8a2769fc67-93234330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'installed' => 0,
    'url_to_netmon' => 0,
    'google_maps_api_key' => 0,
    'template_name' => 0,
    'hours_to_keep_mysql_crawl_data' => 0,
    'hours_to_keep_history_table' => 0,
    'crawl_cycle_length_in_minutes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546b8a276e1bc9_07821525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b8a276e1bc9_07821525')) {function content_546b8a276e1bc9_07821525($_smarty_tpl) {?><h1>Konfiguration der Netmon Installation</h1>
<form action="./config.php?section=insert_edit_netmon" method="POST">
	<p>Installationsroutine Gesperrt: <input name="installed" type="checkbox" value="true" <?php if ($_smarty_tpl->tpl_vars['installed']->value){?>checked<?php }?>></p>
	<p>URL zu Netmon:<br><input name="url_to_netmon" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['url_to_netmon']->value;?>
"></p>
	<p>Google Maps API Key:<br><input name="google_maps_api_key" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['google_maps_api_key']->value;?>
"></p>
	<p>Template Name:<br><input name="template" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
"></p>
	<p>Stunden nach denen Crawl Daten gelöscht werden sollen:<br><input name="hours_to_keep_mysql_crawl_data" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['hours_to_keep_mysql_crawl_data']->value;?>
"></p>
	<p>Stunden nach denen die History gelöscht werden soll:<br><input name="hours_to_keep_history_table" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['hours_to_keep_history_table']->value;?>
"></p>
	<p>Länge eines Crawl Zyklus in Minuten:<br><input name="crawl_cycle_length_in_minutes" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['crawl_cycle_length_in_minutes']->value;?>
"></p>

	<p><input type="submit" value="Absenden"></p>
</form><?php }} ?>