<?php
 require_once '../../../vendor/autoload.php';
 $loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/_partials");
 $twig = new Twig_Environment($loader, array(
    /*'cache' => 'compilation-cache', */
 ));
 
 echo $twig->render('_header.php', array(
 	'page_title' => "/css/mod_home.css"
         ));
?>

<div class="row">
	<div class="row fix-row">
		<div class="col-xs-12">
			<img id="main-logo" src="/images/wintercraft/win_logo.png">
			<h1>OVER 250,000 DOWNLOADS!</h1>
			<p>
				I welcome you Wintercraft! A mod that adds more wintry/Christmasy items/blocks/events into your Minecraft worlds!
				Have you ever wanted Santa to visit or maybe have it snow in every biome? Then check this mod out for that and much more!
			</p>
			<hr>
		</div>
	</div>
	<div class="row fix-row">
		<div class="col-md-6">
			<a class="btn btn-success" href="download">
				<h2>Downloads</h2>
				<span class="glyphicon glyphicon-download" aria-hidden="true"></span>
			</a>
		</div>
		<div class="col-md-6">
			<a class="btn btn-success" href="media">
				<h2 id="screenshots-lg">Screenshots / Media</h2>
				<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
			</a>
		</div>
	</div>
	
	<div class="row fix-row" id="row-2">
		<div class="col-md-4">
			<a class="btn btn-success" href="recipe">
				<h2>Recipes</h2>
				<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
			</a>
		</div>
		<div class="col-md-4">
			<a class="btn btn-success" href="mobs">
				<h2>Mobs</h2>
				<span class="glyphicon glyphicon-grain" aria-hidden="true"></span>
			</a>
		</div>
		<div class="col-md-4">
			<a class="btn btn-success" href="download">
				<h2>Events</h2>
				<span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span>
			</a>
		</div>
	</div>
	
	<hr>
	
	<div class="row fix-row" id="features">
		<div class="col-xs-12">
			<h1>Wintercraft's Main Features</h1>
			<ul>
				<li>Random presents!</li>
				<li>Snow in every biome during Decemeber and January!</li>
				<li>Santa may visit if have Cocoa and Cookies for him!</li>
				<li>Christmas tree decorations!</li>
				<li>New wintery mobs!</li>
				<li>Much, much more!</li>
			</ul>
		</div>
	</div>
</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
