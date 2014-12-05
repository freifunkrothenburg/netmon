<?php /* Smarty version Smarty-3.1.14, created on 2014-11-21 06:45:28
         compiled from "/var/www/netmon/templates/base/html/interface_add.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1363867946546ed1789e3184-24125500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cc16578a8f785c5ef3d0672dcb3c6febfe67cfa' => 
    array (
      0 => '/var/www/netmon/templates/base/html/interface_add.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1363867946546ed1789e3184-24125500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546ed178a63256_74257751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546ed178a63256_74257751')) {function content_546ed178a63256_74257751($_smarty_tpl) {?><h1>Netzwerkinterface zu <?php echo $_smarty_tpl->tpl_vars['router']->value->getHostname();?>
 hinzufügen</h1>
<p>Hier kannst du dem Router <i><?php echo $_smarty_tpl->tpl_vars['router']->value->getHostname();?>
</i> ein Netzwerkinterface hinzufügen. Nachdem du das Interface angelegt hast, kannst du dem Interface auch IP-Adressen hinzufügen.</p>
<form action="./interface.php?section=insert_add&router_id=<?php echo $_GET['router_id'];?>
" method="POST">
	<h2>Eigenschaften</h2>
	<p><b>Name:</b> <input id="name" name="name" size="20" maxlength="20" ></p>
	
	<p><input type="submit" value="Absenden"></p>
</form><?php }} ?>