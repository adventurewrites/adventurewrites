<?php /* Smarty version Smarty3-RC3, created on 2015-05-26 20:25:26
         compiled from "./templates/adventure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14335888795564ba961610f2-65150910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a1a3317e06a7e71c74b82122ad23eda8d7b918' => 
    array (
      0 => './templates/adventure.tpl',
      1 => 1432664700,
    ),
  ),
  'nocache_hash' => '14335888795564ba961610f2-65150910',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<!-- XT:3iIv1HUVA5wSkksmnDLbAgIdwIn8lIYbrHCjWomHILM4ROd9RWt58hCMbne9eCtD -->
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
</head>
<body id="adventure" >
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
			<p class="p2"><span><?php echo $_smarty_tpl->getVariable('podroze1')->value;?>
</span></p>
			<p class="p2"><span><?php echo $_smarty_tpl->getVariable('podroze2')->value;?>
</span></p>
		</div>

		<div id="przygoda_i_ryby">
			<h3><span>Przygoda i ryby</span></h3>
			<p class="p2"><span><?php echo $_smarty_tpl->getVariable('przygoda1')->value;?>
</span></p>
			<p class="p2"><span><?php echo $_smarty_tpl->getVariable('przygoda2')->value;?>
</span></p>
		</div>

		<div id="footer">
			<p class="p2"><span><?php echo $_smarty_tpl->getVariable('licznik')->value;?>
</span></p>
		</div>

	</div>


	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>Wybierz opcję:</span></h3>
			        <p class="p2"><span><?php echo $_smarty_tpl->getVariable('menu1')->value;?>
</span></p>
			</div>
		</div>
	</div>


</div>

</body>
</html>
