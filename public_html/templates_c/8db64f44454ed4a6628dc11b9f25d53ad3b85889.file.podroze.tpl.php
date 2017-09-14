<?php /* Smarty version Smarty3-RC3, created on 2015-05-26 14:31:04
         compiled from "./templates/podroze.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9835500915564bbe86da6f0-57442870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8db64f44454ed4a6628dc11b9f25d53ad3b85889' => 
    array (
      0 => './templates/podroze.tpl',
      1 => 1432664705,
    ),
  ),
  'nocache_hash' => '9835500915564bbe86da6f0-57442870',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="all" />
	<title>adventurewrites.com</title>

	<script type="text/javascript"></script>

<?php if ($_smarty_tpl->getVariable('tryb_tekstowy')->value!=1){?>
	<style type="text/css" title="currentStyle" media="screen">
		@import "css/adventure.css";
	</style>
<?php }?>
<script type="text/javascript" src="css/lightbox.js"></script>
<link rel="stylesheet" href="css/cienie.css" type="text/css" />
</head>

<body id="adventure">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<?php if ($_smarty_tpl->getVariable('english')->value!=1){?>
			<p class="p2"><span>Napisz do autora <a href=mailto:adventurewrites@gmail.com>adventurewrites@gmail.com</a> Pokaż w wersji <a href=index.php?tryb_tekstowy=1&english=0>mobilnej</a>/<a href=index.php?tryb_tekstowy=0&english=0>standardowej</a></span></p>
			<?php }else{ ?>
			<p class="p2"><span>Write to author <a href=mailto:adventurewrites@gmail.com>adventurewrites@gmail.com</a> Show version: <a href=index.php?tryb_tekstowy=1&english=1>mobile</a>/<a href=index.php?tryb_tekstowy=0&english=1>standard</a></span></p>
			<?php }?>
			<h1><span>Adventurewrites.com</span></h1>
		</div>

		<div id="quickSummary">
			<p class="p1"><span></span></p>
		</div>

		<div id="preamble">
			<br><p class="p1"><span><?php echo $_smarty_tpl->getVariable('lewy1')->value;?>
</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="podroze">
			<h3><span>Podróże</span></h3>
			<span><?php echo $_smarty_tpl->getVariable('podroze1')->value;?>
</span>
			<p class="p2"><span><?php echo $_smarty_tpl->getVariable('podroze2')->value;?>
</span></p>
		</div>

		<div id="footer">
			<p class="p1"><span><?php echo $_smarty_tpl->getVariable('licznik')->value;?>
</span></p>
		</div>

	</div>


	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>Wybierz opcję:</span></h3>
			        <p class="p1"><span><?php echo $_smarty_tpl->getVariable('menu1')->value;?>
</span></p>
			</div>
		</div>
	</div>


</div>

</body>
</html>
