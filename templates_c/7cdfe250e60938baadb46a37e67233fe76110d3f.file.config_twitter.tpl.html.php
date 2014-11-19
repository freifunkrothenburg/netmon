<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 19:04:21
         compiled from "/var/www/netmon/templates/base/html/config_twitter.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1879247713546b8a25e4c820-67569264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cdfe250e60938baadb46a37e67233fe76110d3f' => 
    array (
      0 => '/var/www/netmon/templates/base/html/config_twitter.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1879247713546b8a25e4c820-67569264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'twitter_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546b8a25e81364_20794162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b8a25e81364_20794162')) {function content_546b8a25e81364_20794162($_smarty_tpl) {?><h1>Konfiguration der Twitter-Anbindung</h1>
<?php if (empty($_smarty_tpl->tpl_vars['twitter_token']->value)){?>
	<form action="./config.php?section=get_twitter_token" method="POST">
		<p><input type="submit" value="Netmon an Twitter anbinden"></p>
	</form>
<?php }else{ ?>
	<form action="./config.php?section=delete_twitter_token" method="POST">
		<p><input type="submit" value="Twitteranbindung entfernen"></p>
	</form>
<?php }?><?php }} ?>