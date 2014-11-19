<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 09:59:20
         compiled from "/var/www/netmon/templates/base/html/eventlist.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1157809478546b0a681e6400-86552329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86d0bd9bc3546c4729757f2be301b55017d532a7' => 
    array (
      0 => '/var/www/netmon/templates/base/html/eventlist.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1157809478546b0a681e6400-86552329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'event_count' => 0,
    'eventlist' => 0,
    'event' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546b0a682fa441_49284640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b0a682fa441_49284640')) {function content_546b0a682fa441_49284640($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
?><h1>Die letzten <?php echo $_smarty_tpl->tpl_vars['event_count']->value;?>
 Events</h1>

<form action="./eventlist.php" method="POST" enctype="multipart/form-data">
<p>Die letzten <input name="event_count" type="text" size="1" value="<?php echo $_smarty_tpl->tpl_vars['event_count']->value;?>
"> Events anzeigen <input type="submit" value="aktualisieren"></p>
</form>

<?php if (!empty($_smarty_tpl->tpl_vars['eventlist']->value)){?>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['eventlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['event']->key;
?>
			<li>
				<b><a href="event.php?event_id=<?php echo $_smarty_tpl->tpl_vars['event']->value->getEventId();?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value->getCreateDate(),"%e.%m.%Y %H:%M");?>
</a>:</b> 
				<?php if ($_smarty_tpl->tpl_vars['event']->value->getObject()=='router'){?>
					<?php $_smarty_tpl->tpl_vars["data"] = new Smarty_variable($_smarty_tpl->tpl_vars['event']->value->getData(), null, 0);?>
					<a href="./router.php?router_id=<?php echo $_smarty_tpl->tpl_vars['event']->value->getObjectId();?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['hostname'];?>
</a> 
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='status'&&$_smarty_tpl->tpl_vars['data']->value['to']=='online'){?>
						geht <span style="color: #007B0F;">online</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='status'&&$_smarty_tpl->tpl_vars['data']->value['to']=='offline'){?>
						geht <span style="color: #CB0000;">offline</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='status'&&$_smarty_tpl->tpl_vars['data']->value['to']=='unknown'){?>
						erhält Status <span style="color: #F8C901;">pingbar</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='reboot'){?>
						wurde <span style="color: #000f9c;">Rebootet</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='new'){?>
						wurde Netmon hinzugefügt
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='batman_advanced_version'){?>
						änderte Batman adv. Version von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='firmware_version'){?>
						änderte Firmware Version von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='nodewatcher_version'){?>
						änderte Nodewatcher Version von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='distversion'){?>
						änderte Distversion Version von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='distname'){?>
						änderte Distname Version von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='hostname'){?>
						änderte Hostname von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='chipset'){?>
						änderte Chipset von <?php echo $_smarty_tpl->tpl_vars['data']->value['from'];?>
 zu <?php echo $_smarty_tpl->tpl_vars['data']->value['to'];?>
</span>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='watchdog_ath9k_bug'){?>
						<a href="./event.php?event_id=<?php echo $_smarty_tpl->tpl_vars['event']->value->getEventId();?>
">ATH9K Bug registriert</a>
					<?php }?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['event']->value->getObject()=='not_assigned_router'){?>
					<?php $_smarty_tpl->tpl_vars["data"] = new Smarty_variable($_smarty_tpl->tpl_vars['event']->value->getData(), null, 0);?>
					<?php echo $_smarty_tpl->tpl_vars['data']->value['router_auto_assign_login_string'];?>
 
					<?php if ($_smarty_tpl->tpl_vars['event']->value->getAction()=='new'){?>
						 erscheint in der <a href="./routers_trying_to_assign.php">Liste der neuen, nicht zugewiesenen Router</a>
					<?php }?>
				<?php }?>
			</li>
		<?php } ?>
	</ul>
<?php }else{ ?>
<p>Es sind keine Events in der Datenbank gespeichert.</p>
<?php }?>
<?php }} ?>