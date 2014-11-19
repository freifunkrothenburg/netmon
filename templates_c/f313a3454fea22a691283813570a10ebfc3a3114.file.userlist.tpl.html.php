<?php /* Smarty version Smarty-3.1.14, created on 2014-11-17 20:12:34
         compiled from "/var/www/netmon/templates/base/html/userlist.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:591062462546a48a2444855-70370631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f313a3454fea22a691283813570a10ebfc3a3114' => 
    array (
      0 => '/var/www/netmon/templates/base/html/userlist.tpl.html',
      1 => 1416247570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '591062462546a48a2444855-70370631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userlist' => 0,
    'user' => 0,
    'role' => 0,
    'first_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a48a24eddf1_66655804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a48a24eddf1_66655804')) {function content_546a48a24eddf1_66655804($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/netmon/lib/extern/smarty/plugins/modifier.date_format.php';
?><script src="lib/extern/DataTables/jquery.dataTables.min.js"></script>
<script src="lib/extern/DataTables/jquery.dataTables.Plugin.DateSort.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$('#routerlist').dataTable( {
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false,
		"aoColumns": [ 
			{ "sType": "html" },
			{ "sType": "numeric" },
			{ "sType": "string" },
			{ "sType": "html" },
			{ "sType": "string" },
			{ "sType": "date-eu" }
		],
		"aaSorting": [[ 0, "asc" ]]
	} );
} );

</script>

<h1>Benutzerliste</h1>
<?php if (!empty($_smarty_tpl->tpl_vars['userlist']->value)){?>
	<table class="display" id="routerlist" style="width: 100%">
		<thead>
			<tr>
				<th>Benutzer</th>
				<th>Router</th>
				<th>Jabber-ID</th>
				<th>Email</th>
				<th>Benutzerrollen</th>
				<th>Dabei seit</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
				<tr>
					<td><a href="./user.php?user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['routercount'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['jabber'];?>
</td>
					<td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</a></td>
					<td>
						<?php $_smarty_tpl->tpl_vars["first_role"] = new Smarty_variable(true, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?><!--
							--><?php if ($_smarty_tpl->tpl_vars['role']->value['check']){?><!--
								--><?php if (!$_smarty_tpl->tpl_vars['first_role']->value){?>, <?php }?><!--
								--><?php if ($_smarty_tpl->tpl_vars['role']->value['role']==3){?>Benutzer<?php }?><!--
								--><?php if ($_smarty_tpl->tpl_vars['role']->value['role']==4){?>Moderator<?php }?><!--
								--><?php if ($_smarty_tpl->tpl_vars['role']->value['role']==5){?>Administrator<?php }?><!--
								--><?php if ($_smarty_tpl->tpl_vars['role']->value['role']==6){?>Root<?php }?><!--
								--><?php $_smarty_tpl->tpl_vars["first_role"] = new Smarty_variable(false, null, 0);?><!--
							--><?php }?><!--
						--><?php } ?>
					</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['create_date'],"%d.%m.%Y");?>
</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<h2>Export</h2>
	<p><a href="./userlist.php?section=export_vcard30">Benutzerliste als vCcard 3.0 exportieren</a></p>
<?php }else{ ?>
<p>Keine Benutzer vorhanden</p>
<?php }?><?php }} ?>