<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
	<meta name="robots" content="all" />
	<title>www.adventurewrites.com</title>

	<script type="text/javascript"></script>

{if $tryb_tekstowy!=1}
	<style type="text/css" title="currentStyle" media="screen">
		@import "css/adventure.css";
	</style>
{/if}
<script type="text/javascript" src="css/lightbox.js"></script>
<link rel="stylesheet" href="css/cienie.css" type="text/css" />
</head>

<body id="adventure">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			{if $english!=1}
			<p class="p2"><span>Napisz do autora <a href=mailto:adventurewrites@gmail.com>adventurewrites@gmail.com</a></span></p>
			{else}
			<p class="p2"><span>Write to author <a href=mailto:adventurewrites@gmail.com>adventurewrites@gmail.com</a></span></p>
			{/if}
			<h1><span>adventurewrites.com</span></h1>
		</div>

		<div id="quickSummary">
			<p class="p1"><span></span></p>
		</div>

		<div id="preamble">
			<br><p class="p1"><span>{$lewy1}</span></p>
		</div>
	</div>

	<div id="supportingText">
		{if $english!=1}
		<div id="przygoda_i_ryby">
		{else}
		<div id="przygoda_i_ryby_eng">
		{/if}
			<h3><span>Przygoda i ryby</span></h3>
			<p class="p1"><span>{$przygoda1}</span></p>
			<p class="p2"><span>{$przygoda2}</span></p>
		</div>

		<div id="footer">
			<p class="p1"><span>{$licznik}</span></p>
		</div>

	</div>


	<div id="linkList">
		<div id="linkList2">
			{if $english!=1}
			<div id="lselect">
			{else}
			<div id="lselect_eng">
			{/if}
				<h3 class="select"><span>Wybierz opcje:</span></h3>
			        <p class="p1"><span>{$menu1}</span></p>
			</div>
		</div>
	</div>


</div>

</body>
</html>
