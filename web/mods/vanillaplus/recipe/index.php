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

<a href=".." class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back - VanillaPlus</a>

<a href="#blocks" class="btn btn-info">Blocks</a>
<a href="#items" class="btn btn-info">Items</a>
<a href="#tools" class="btn btn-info">Tools</a>
<a href="#armor" class="btn btn-info">Armor</a>


<div class="row" id="recipes">
	<h1 id="blocks">Blocks</h1>
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Compact Gravel",
			'pic' => "com_grav.png",
			'desc' => "Used to make Gravel Tools"
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Reinforced Obsidian",
			'pic' => "rein_obs.png",
			'desc' => "Used to make Obsidian Armor and Tools"
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ruby Block",
			'pic' => "ruby_block.png",
			'desc' => "Decor block"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Chiseled Ruby Block",
			'pic' => "chis_ruby.png",
			'desc' => "Decor block"
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Sapphire block",
			'pic' => "sap_block.png",
			'desc' => "Decor block"
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Chiseled Sapphire Block",
			'pic' => "chis_sap.png",
			'desc' => "Decor block"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Hellstone Block",
			'pic' => "hell_block.png",
			'desc' => "Decor block"
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Chiseled Hellstone block",
			'pic' => "chis_hell.png",
			'desc' => "Decor block"
		)); ?>
	</div>
	
	<h1 id="items">Items</h1>
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Cooked Flesh",
			'pic' => "cooked_flesh.png",
			'desc' => "Feeds same as Rotten Flesh without hunger effect"
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Seasoned Flesh",
			'pic' => "season_flesh.png",
			'desc' => "Feeds 4 Hunger"
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Slime Sandwich",
			'pic' => "slime_sand.png",
			'desc' => "Feeds 7.5 Hunger"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Toast",
			'pic' => "toast.png",
			'desc' => "Feeds 4 Hunger"
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Toasted Slime Sandwich",
			'pic' => "slime_sand_toast.png",
			'desc' => "Feeds 9.5 Hunger"
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Flint Compound",
			'pic' => "flint_com.png",
			'desc' => "Use as a powerful Furnace Fuel"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Enchanted Gem",
			'pic' => "gem.png",
			'desc' => "Used to craft Specialized Swords"
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Golden Feather",
			'pic' => "gold_feather.png",
			'desc' => ""
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Slime Jelly",
			'pic' => "slime_jelly.png",
			'desc' => ""
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ender Crystal",
			'pic' => "ender_cry.png",
			'desc' => ""
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ender Gem",
			'pic' => "ender_gem.png",
			'desc' => ""
		)); ?>
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Purified Gold",
			'pic' => "pure_gold.png",
			'desc' => ""
		)); ?>
	</div>
	
	<h1 id="tools">Tools</h1>
	<h1 id="armor">Armor</h1>
</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
