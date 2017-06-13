<?php
 require_once '../../../../vendor/autoload.php';
 $loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/_partials");
 $twig = new Twig_Environment($loader, array(
    /*'cache' => 'compilation-cache', */
 ));
 
 echo $twig->render('_header.php', array(
 	'page_title' => "/css/recipe.css"
         ));
?>

<div class="row" id="recipes">
	<a href=".." class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back - ExpTranslation</a>
	
	<div class="row">
		<?php echo $twig->render('_recipe_exp.php', array(
			'name' => "ExpTranslator Table",
			'pic' => "recipe-table.PNG",
			'desc' => "Right-click on the table with an empty vial to store your XP"
		)); ?>
		
		<?php echo $twig->render('_recipe_exp.php', array(
			'name' => "Empty Vials",
			'pic' => "recipe-empty.PNG",
			'desc' => "Use these to store your levels of XP"
		)); ?>
		
		<?php echo $twig->render('_recipe_exp.php', array(
			'name' => "Bulk Vials",
			'pic' => "recipe-large-exp.PNG",
			'desc' => "For a more convenient way of storage"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_exp.php', array(
			'name' => "Single Vials",
			'pic' => "recipe-exp.PNG",
			'desc' => "To get them back into their original form"
		)); ?>

	</div>

</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
