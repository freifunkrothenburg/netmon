<?php /* Smarty version Smarty-3.1.14, created on 2014-11-20 11:39:05
         compiled from "/var/www/netmon/templates/base/html/show_crawl_data.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:275564423546dc4c9920915-27630985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '419c90b37a8eb9b9a58a2c45c262f217fbc1fe37' => 
    array (
      0 => '/var/www/netmon/templates/base/html/show_crawl_data.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275564423546dc4c9920915-27630985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'crawl_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546dc4c997bda4_42422175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546dc4c997bda4_42422175')) {function content_546dc4c997bda4_42422175($_smarty_tpl) {?><h1>Crawl-Daten anzeigen</h1>

<p>
	<?php if (!empty($_smarty_tpl->tpl_vars['crawl_data']->value)){?>
		<?php echo $_smarty_tpl->tpl_vars['crawl_data']->value;?>

	<?php }else{ ?>
		Die Crawl-Daten konnten nicht geholt werden.
	<?php }?>
</p><?php }} ?>