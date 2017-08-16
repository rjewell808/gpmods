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
		<h1>Coming Soon</h1>
	</div>
</div>


<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
