<?php /* Smarty version 2.6.18, created on 2010-07-26 06:23:15
         compiled from adventure.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<!-- XT:3iIv1HUVA5wSkksmnDLbAgIdwIn8lIYbrHCjWomHILM4ROd9RWt58hCMbne9eCtD -->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="all" />
	<title>www.adventure.oz.pl</title>

	<script type="text/javascript"></script>

<?php if ($this->_tpl_vars['tryb_tekstowy'] != 1): ?>
	<style type="text/css" title="currentStyle" media="screen">
		@import "css/adventure.css";
	</style>
<?php endif; ?>
</head>
<body id="adventure" >
<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<?php if ($this->_tpl_vars['english'] != 1): ?>
			<p class="p2"><span>Napisz do autora <a href=mailto:sowiakr@interia.pl>sowiakr@interia.pl</a> Pokaż w wersji <a href=index.php?tryb_tekstowy=1&english=0>mobilnej</a>/<a href=index.php?tryb_tekstowy=0&english=0>standardowej</a></span></p>
			<?php else: ?>
			<p class="p2"><span>Write to author <a href=mailto:sowiakr@interia.pl>sowiakr@interia.pl</a> Show version: <a href=index.php?tryb_tekstowy=1&english=1>mobile</a>/<a href=index.php?tryb_tekstowy=0&english=1>standard</a></span></p>
			<?php endif; ?>
			<h1><span>Adventure.oz.pl</span></h1>
		</div>

		<div id="quickSummary">
			<p class="p1"><span></span></p>
		</div>

		<div id="preamble">
			<br><p class="p1"><span><?php echo $this->_tpl_vars['lewy1']; ?>
</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="podroze">
			<h3><span>Podró¿e</span></h3>
			<p class="p1"><span><?php echo $this->_tpl_vars['podroze1']; ?>
</span></p>
			<p class="p2"><span><?php echo $this->_tpl_vars['podroze2']; ?>
</span></p>
		</div>

		<div id="miejsca_magiczne">
			<h3><span>Miejsca magiczne</span></h3>
			<p class="p1"><span><?php echo $this->_tpl_vars['miejsca1']; ?>
</span></p>
			<p class="p2"><span><?php echo $this->_tpl_vars['miejsca2']; ?>
</span></p>
		</div>

		<div id="przygoda_i_ryby">
			<h3><span>Przygoda i ryby</span></h3>
			<p class="p1"><span><?php echo $this->_tpl_vars['przygoda1']; ?>
</span></p>
			<p class="p1"><span><?php echo $this->_tpl_vars['przygoda2']; ?>
</span></p>
		</div>

		<div id="samochody">
			<h3><span>Samochody</span></h3>
			<p class="p1"><span><?php echo $this->_tpl_vars['samochody1']; ?>
</span></p>
			<p class="p1"><span><?php echo $this->_tpl_vars['samochody2']; ?>
</span></p>
		</div>

		<div id="footer">
			<p class="p1"><span><?php echo $this->_tpl_vars['licznik']; ?>
</span></p>
		</div>

	</div>


	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>Wybierz opcję:</span></h3>
			        <p class="p1"><span><?php echo $this->_tpl_vars['menu1']; ?>
</span></p>
			</div>
			<div id="lresources">
				<h3 class="select"><span>Zasoby:</span></h3>
			        <p class="p1"><span><?php echo $this->_tpl_vars['menu2']; ?>
</span></p>
			</div>
		</div>
	</div>


</div>

</body>
</html>