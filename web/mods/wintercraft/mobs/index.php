<?php
 require_once '../../../../vendor/autoload.php';
 $loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/_partials");
 $twig = new Twig_Environment($loader, array(
    /*'cache' => 'compilation-cache', */
 ));
 
 echo $twig->render('_header.php', array(
 	'page_title' => "/css/mobs.css"
         ));
?>

<div class="row">
	<div class="col-xs-12">
		<a href=".." class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back - Wintercraft</a>
		<h1>Wintercraft Mobs</h1>
	</div>
</div>

<div class="row mobs">
	<div class="col-md-6">
		<h2 class="h">Hostile</h2>
		<img src="/images/wintercraft/info/mini_snow.png">
	</div>
	<div class="col-md-6">
		<h2 class="h">Hostile</h2>
		<img src="/images/wintercraft/info/gingerbread.png">
	</div>
	<div class="col-md-6">
		<h2 class="h">Hostile</h2>
		<img src="/images/wintercraft/info/albino_reindeer.png">
	</div>
	<div class="col-md-6">
		<h2 class="n">Neutral</h2>
		<img src="/images/wintercraft/info/polarbear.png">
	</div>
	<div class="col-md-6">
		<h2 class="n">Neutral</h2>
		<img src="/images/wintercraft/info/penguin.png">
	</div>
	<div class="col-md-6">
		<h2 class="p">Passive</h2>
		<img src="/images/wintercraft/info/snowman.png">
	</div>
	<div class="col-md-6">
		<h2 class="p">Passive</h2>
		<img src="/images/wintercraft/info/reindeer.png">
	</div>
	<div class="col-md-6">
		<h2 class="p">Passive</h2>
		<img src="/images/wintercraft/info/elf.png">
	</div>
</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
