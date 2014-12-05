<?php /* Smarty version Smarty-3.1.14, created on 2014-11-20 16:36:14
         compiled from "/var/www/netmon/templates/base/html/event.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:733824322546e0a6eb7d4c8-82179288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07b6b35e8594a720b432464fe598ab988f27c09f' => 
    array (
      0 => '/var/www/netmon/templates/base/html/event.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '733824322546e0a6eb7d4c8-82179288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'event' => 0,
    'index' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546e0a6ebe6db6_97655177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546e0a6ebe6db6_97655177')) {function content_546e0a6ebe6db6_97655177($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
?><h1>Informationen zum Event <?php echo $_smarty_tpl->tpl_vars['event']->value->getEventId();?>
</h1>
<h2>Grunddaten</h2>
<b>Angelegt am:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value->getCreateDate(),"%d.%m.%Y %H:%M");?>
 Uhr<br>
<b>Objekt:</b> <?php echo $_smarty_tpl->tpl_vars['event']->value->getObject();?>
<br>
<b>Objekt-ID:</b> <?php echo $_smarty_tpl->tpl_vars['event']->value->getObjectId();?>
<br>
<b>Event:</b> <?php echo $_smarty_tpl->tpl_vars['event']->value->getAction();?>
<br>

<h2>Zusatzdaten</h2>

<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['event']->value->getData(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
	<b><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
:</b> <?php if (is_object($_smarty_tpl->tpl_vars['data']->value)){?>Object vom Typ <?php echo get_class($_smarty_tpl->tpl_vars['data']->value);?>
 <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<?php }?><br>
<?php } ?><?php }} ?>