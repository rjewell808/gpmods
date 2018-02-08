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
	<img id="main-logo" alt="Exp-Translation Logo" src="/images/exp/exp_logo.png">
	<h1>OVER 12,000 DOWNLOADS!</h1>
	<p>
		Tired of losing levels upon levels of experience to an untimely death or ever wish you could share your experience with a friend? Well now you can with Exp-Translation!
		Simply craft an ExpTranslator Table and some vials to store as many levels of experience as you wish! Just right-click the vials on the table to get started!
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
