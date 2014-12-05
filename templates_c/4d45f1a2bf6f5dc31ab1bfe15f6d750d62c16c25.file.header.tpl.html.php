<?php /* Smarty version Smarty-3.1.14, created on 2014-12-05 06:58:10
         compiled from "/var/www/netmon/templates/base/html/header.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:25099911546a3949cdd2f6-14441039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d45f1a2bf6f5dc31ab1bfe15f6d750d62c16c25' => 
    array (
      0 => '/var/www/netmon/templates/base/html/header.tpl.html',
      1 => 1417759087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25099911546a3949cdd2f6-14441039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546a3949f1ae64_59939672',
  'variables' => 
  array (
    'community_name' => 0,
    'template' => 0,
    'installed' => 0,
    'top_menu' => 0,
    'topmenu' => 0,
    'loginOutMenu' => 0,
    'count' => 0,
    'menu' => 0,
    'community_slogan' => 0,
    'installation_menu' => 0,
    'normal_menu' => 0,
    'submenu' => 0,
    'object_menu' => 0,
    'admin_menu' => 0,
    'root_menu' => 0,
    'message' => 0,
    'output' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a3949f1ae64_59939672')) {function content_546a3949f1ae64_59939672($_smarty_tpl) {?>    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
            "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['community_name']->value;?>
 | Netmon</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link href="./templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/central_netmon.css" rel="stylesheet" type="text/css"/>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<!--<div style="background-color: red">Derzeit besteht ein Problem beim aktualisieren der Daten. Die angezeigten Daten sind möglicherweise nicht korrekt!</div>-->
<div id="page_margins">
	<div id="page">
		<div id="header">
			<div id="topnav">
				<!-- start: skip link navigation -->
				<a class="skip" href="#navigation" title="skip link">Skip to the navigation</a><span class="hideme">.</span>
				<a class="skip" href="#content" title="skip link">Skip to the content</a><span class="hideme">.</span>
				<!-- end: skip link navigation -->
				<span>
					<?php if ($_smarty_tpl->tpl_vars['installed']->value){?>
						<?php  $_smarty_tpl->tpl_vars['topmenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topmenu']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['top_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topmenu']->key => $_smarty_tpl->tpl_vars['topmenu']->value){
$_smarty_tpl->tpl_vars['topmenu']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['topmenu']->key;
?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['topmenu']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['topmenu']->value['name'];?>
</a> | 
						<?php } ?>
						<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['loginOutMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['menu']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['count']->value!=0){?>| <?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a>
						<?php } ?>
					<?php }?>
				</span>
			</div>
			<div id="headerbg">
			</div>
		<h1><span><?php echo $_smarty_tpl->tpl_vars['community_name']->value;?>
 | Netmon</span></h1>
		<span><?php echo $_smarty_tpl->tpl_vars['community_slogan']->value;?>
</span>
	</div>				
	<!-- begin: main navigation #nav -->
	<div id="nav"> <a id="navigation" name="navigation"></a>
		<!-- skiplink anchor: navigation -->
		<div id="nav_main">
			<ul>
			<!--	<li><a href="http://blog.freifunk-ol.de/">Neues</a></li>
				<li><a href="http://wiki.freifunk-ol.de/">Informationen</a></li>
				<li><a href="http://wiki.freifunk-ol.de/index.php?title=Kontakt">Kontakt</a></li> -->
				<li id="current"><a href="#">Freifunk Rothenburg</a></li>
				<li><a href="http://meta-netmon.freifunk-emskirchen.de">Freifunk Franken Liste</a></li>
				<li><a href="http://meta-netmon.freifunk-emskirchen.de/map.php">Freifunk Franken Map</a></li>
			<!--	<li><a href="http://ticket.freifunk-ol.de/">Entwicklung</a></li>
				<li><a href="http://wiki.freifunk-ol.de/w/Verein">Verein</a></li>  	-->
			</ul>

			<div class="searchbox">
				<form id="searchForm" name="searchForm" action="./search.php" method="POST">
					<input class="suchBox" type="text" onblur="this.value='Suchbegriff eingeben...'" onclick="this.value=''" value="Suchbegriff eingeben..." name="search_string"/>
					<input type="hidden" value="all" name="search_range"/>
				</form>
			</div>
		</div>
	<div id="nav_sub" style="position: relative; z-index: 1;">
		<?php if ($_smarty_tpl->tpl_vars['installed']->value){?>
			<?php if (isset($_smarty_tpl->tpl_vars['installation_menu']->value)){?>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['installation_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a></li>
					<?php } ?>
				</ul>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['normal_menu']->value)){?>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['normal_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
						<li><a  href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[0]['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value[0]['name'];?>
</a>
							<ul>
							<?php  $_smarty_tpl->tpl_vars['submenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['submenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['submenu']->key => $_smarty_tpl->tpl_vars['submenu']->value){
$_smarty_tpl->tpl_vars['submenu']->_loop = true;
?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['submenu']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['submenu']->value['name'];?>
</a></li>
							<?php } ?>
							</ul>
						</li>
					<?php } ?>
				</ul>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['object_menu']->value)){?>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
						<li><a  href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[0]['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value[0]['name'];?>
</a>
							<ul>
								<?php  $_smarty_tpl->tpl_vars['submenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['submenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['submenu']->key => $_smarty_tpl->tpl_vars['submenu']->value){
$_smarty_tpl->tpl_vars['submenu']->_loop = true;
?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['submenu']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['submenu']->value['name'];?>
</a></li>
								<?php } ?>
							</ul>
						</li>
					<?php } ?>
				</ul>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['admin_menu']->value)){?>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admin_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
						<li><a <?php if ($_smarty_tpl->tpl_vars['menu']->value['selected']=='true'){?>class="selected"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a></li>
					<?php } ?>
				</ul>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['root_menu']->value)){?>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['root_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
						<li><a  href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[0]['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value[0]['name'];?>
</a>
							<ul>
								<?php  $_smarty_tpl->tpl_vars['submenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['submenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['submenu']->key => $_smarty_tpl->tpl_vars['submenu']->value){
$_smarty_tpl->tpl_vars['submenu']->_loop = true;
?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['submenu']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['submenu']->value['name'];?>
</a></li>
								<?php } ?>
							</ul>
						</li>
					<?php } ?>
				</ul>
			<?php }?>
		<?php }?>
	</div>
</div>
<!-- end: main navigation -->

<!-- begin: main content area #main -->
<div id="main">
	<!--Systemmeldungen-->
	<?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['output']->value[1]==0){?>
			<div id="messagebox" style="background-color: #f7ce3e"><?php echo $_smarty_tpl->tpl_vars['output']->value[0];?>
</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['output']->value[1]==1){?>
			<div id="messagebox" style="background-color: #97ff5f"><?php echo $_smarty_tpl->tpl_vars['output']->value[0];?>
</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['output']->value[1]==2){?>
			<div id="messagebox" style="background-color: #ff5353"><?php echo $_smarty_tpl->tpl_vars['output']->value[0];?>
</div>
		<?php }?>
	<?php } ?>
	<div id="content">
<?php }} ?>