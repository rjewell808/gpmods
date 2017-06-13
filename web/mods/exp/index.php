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
	<img id="main-logo" src="/images/exp/exp_logo.png">
	<h1>OVER 12,000 DOWNLOADS!</h1>
	<p>
		Have you ever wanted a use for those stacks of rotten flesh or ever wanted a way to craft bottles of XP or just store it away?
		Well this is the mod for you! This mod adds blocks and items that would normally fit into the game but just aren't there, and gives the most useless items a use!
	</p>
	<hr>
	<div class="row fix-row">
		<div class="col-md-4">
			<a class="btn btn-success" href="download">
				<h2>Downloads</h2>
				<span class="glyphicon glyphicon-download" aria-hidden="true"></span>
			</a>
		</div>
		<div class="col-md-4">
			<a class="btn btn-success" href="recipe">
				<h2>Recipes</h2>
				<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
			</a>
		</div>
		<div class="col-md-4">
			<a class="btn btn-success" href="media">
				<h2 id="screenshots">Screenshots / Media</h2>
				<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
			</a>
		</div>
	</div>
</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
