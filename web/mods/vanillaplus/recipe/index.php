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
	<a href=".." class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back - VanillaPlus</a>

	<a href="#blocks" class="btn btn-info">Blocks</a>
	<a href="#items" class="btn btn-info">Items</a>
	<a href="#tools" class="btn btn-info">Tools</a>
	<a href="#armor" class="btn btn-info">Armor</a>
	
	<h1 id="blocks">Blocks</h1>
	<hr>

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
		<?php echo $twig->render('_recipe.php', array(
			'name' => "ExpTranslator Table",
			'pic' => "exp_trans.png",
			'desc' => "Only available in v1.4.4 and lower"
		)); ?>
	</div>
	
	<h1 id="items">Items</h1>
	<hr>
	
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
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Diamond Rod",
			'pic' => "diamond_rod.png",
			'desc' => "Used to create the Rapid Bow"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Bloated Ink Sac",
			'pic' => "ink_sac.png",
			'desc' => "Used to create the Scuba Suit"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Air Tank",
			'pic' => "air_tank.png",
			'desc' => "Used to create the Scuba Suit"
		)); ?>
	</div>
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Guardian Ingot",
			'pic' => "guard_ingot.png",
			'desc' => "Used to create Guardian Tools and Armor"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Empty Vial",
			'pic' => "empty_vial.png",
			'desc' => "Only available in v1.4.4 or lower"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Bottle o' Enchanting",
			'pic' => "xp_bottle.png",
			'desc' => ""
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Creeper Head",
			'pic' => "head_creeper.png",
			'desc' => ""
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Skeleton Head",
			'pic' => "head_skeleton.png",
			'desc' => ""
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Zombie Head",
			'pic' => "head_zombie.png",
			'desc' => ""
		)); ?>
	</div>
	
	<h1 id="tools">Tools</h1>
	<hr>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Magma Sword",
			'pic' => "magma_sword.png",
			'desc' => "Catch living things on fire and use as a Flint & Steel"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ink Sword",
			'pic' => "ink_sword.png",
			'desc' => "Deal a deadly Wither effect on your foes"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Airborne Sword",
			'pic' => "air_sword.png",
			'desc' => "Launch living things into the air"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Rapid Bow",
			'pic' => "rapid_bow.png",
			'desc' => "2x faster than a normal bow"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Gravel Axe",
			'pic' => "gravel_axe.png",
			'desc' => "Faster than Gold / Similar to Stone"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Gravel Sword",
			'pic' => "gravel_sword.png",
			'desc' => "Faster than Gold / Similar to Stone"
		)); ?>

	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Gravel Pickaxe",
			'pic' => "gravel_pick.png",
			'desc' => "Faster than Gold / Similar to Stone"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Gravel Shovel",
			'pic' => "gravel_shovel.png",
			'desc' => "Faster than Gold / Similar to Stone"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Gravel Hoe",
			'pic' => "gravel_hoe.png",
			'desc' => "Faster than Gold / Similar to Stone"
		)); ?>

	</div>
	
	<div class="row">
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Emerald Axe",
			'pic' => "emerald_axe.png",
			'desc' => "Faster than Diamond / Similar to Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Emerald Sword",
			'pic' => "emerald_sword.png",
			'desc' => "Faster than Diamond / Similar to Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Emerald Pickaxe",
			'pic' => "emerald_pick.png",
			'desc' => "Faster than Diamond / Similar to Diamond"
		)); ?>

	</div>
	
	<div class="row">
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Emerald Shovel",
			'pic' => "emerald_shovel.png",
			'desc' => "Faster than Diamond / Similar to Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Emerald Hoe",
			'pic' => "emerald_hoe.png",
			'desc' => "Faster than Diamond / Similar to Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ruby Axe",
			'pic' => "ruby_axe.png",
			'desc' => "More damage than Diamond / Slower than Diamond"
		)); ?>

	</div>
	
	<div class="row">
		
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ruby Sword",
			'pic' => "ruby_sword.png",
			'desc' => "More damage than Diamond / Slower than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ruby Pickaxe",
			'pic' => "ruby_pick.png",
			'desc' => "More damage than Diamond / Slower than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ruby Shovel",
			'pic' => "ruby_shovel.png",
			'desc' => "More damage than Diamond / Slower than Diamond"
		)); ?>

	</div>
	
	<div class="row">
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ruby Hoe",
			'pic' => "ruby_hoe.png",
			'desc' => "More damage than Diamond / Slower than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Sapphire Axe",
			'pic' => "sapphire_axe.png",
			'desc' => "More damage than Diamond / Faster than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Sapphire Sword",
			'pic' => "sapphire_sword.png",
			'desc' => "More damage than Diamond / Faster than Diamond"
		)); ?>

	</div>
	
	<div class="row">
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Sapphire Pickaxe",
			'pic' => "sapphire_pick.png",
			'desc' => "More damage than Diamond / Faster than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Sapphire Shovel",
			'pic' => "sapphire_shovel.png",
			'desc' => "More damage than Diamond / Faster than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Sapphire Hoe",
			'pic' => "sapphire_hoe.png",
			'desc' => "More damage than Diamond / Faster than Diamond"
		)); ?>

	</div>
	
	<div class="row">
	
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Reinforced Obsidian Axe",
			'pic' => "obs_axe.png",
			'desc' => "More uses than Diamond / Slower than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Reinforced Obsidian Sword",
			'pic' => "obs_sword.png",
			'desc' => "More uses than Diamond / Slower than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Reinforced Obsidian Pickaxe",
			'pic' => "obs_pick.png",
			'desc' => "More uses than Diamond / Slower than Diamond"
		)); ?>

	</div>
	
	<div class="row">
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Reinforced Obsidian Shovel",
			'pic' => "obs_shovel.png",
			'desc' => "More uses than Diamond / Slower than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Reinforced Obsidian Hoe",
			'pic' => "obs_hoe.png",
			'desc' => "More uses than Diamond / Slower than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ender Axe",
			'pic' => "ender_axe.png",
			'desc' => "More damage than Diamond / Fast as Diamond"
		)); ?>

	</div>
	
	<div class="row">
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ender Sword",
			'pic' => "ender_sword.png",
			'desc' => "More damage than Diamond / Fast as Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ender Pickaxe",
			'pic' => "ender_pick.png",
			'desc' => "More damage than Diamond / Fast as Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ender Shovel",
			'pic' => "ender_shovel.png",
			'desc' => "More damage than Diamond / Fast as Diamond"
		)); ?>

	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ender Hoe",
			'pic' => "ender_hoe.png",
			'desc' => "More damage than Diamond / Fast as Diamond"
		)); ?>
	
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Purified Gold Axe",
			'pic' => "pur_gold_axe.png",
			'desc' => "More uses than Gold / Similar to Gold"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Purified Gold Sword",
			'pic' => "pur_gold_sword.png",
			'desc' => "More uses than Gold / Similar to Gold"
		)); ?>
	
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Purified Gold Pickaxe",
			'pic' => "pur_gold_pick.png",
			'desc' => "More uses than Gold / Similar to Gold"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Purified Gold Shovel",
			'pic' => "pur_gold_shovel.png",
			'desc' => "More uses than Gold / Similar to Gold"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Purified Gold Hoe",
			'pic' => "pur_gold_hoe.png",
			'desc' => "More uses than Gold / Similar to Gold"
		)); ?>
	
	</div>
	
	<h1 id="armor">Armor</h1>
	<hr>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ruby Helmet",
			'pic' => "ruby_helmet.png",
			'desc' => "8 Armor slots / More uses than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ruby Chestplate",
			'pic' => "ruby_chest.png",
			'desc' => "8 Armor slots / More uses than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ruby Leggings",
			'pic' => "ruby_legs.png",
			'desc' => "8 Armor slots / More uses than Diamond"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ruby Boots",
			'pic' => "ruby_boots.png",
			'desc' => "8 Armor slots / More uses than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Sapphire Helmet",
			'pic' => "sap_helmet.png",
			'desc' => "8 Armor slots / More uses than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Sapphire Chestplate",
			'pic' => "sap_chest.png",
			'desc' => "8 Armor slots / More uses than Diamond"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Sapphire Leggings",
			'pic' => "sap_legs.png",
			'desc' => "8 Armor slots / More uses than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Sapphire Boots",
			'pic' => "sap_boots.png",
			'desc' => "8 Armor slots / More uses than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Emerald Helmet",
			'pic' => "emerald_helmet.png",
			'desc' => "7.5 Armor slots / Less uses than Diamond"
		)); ?>
	</div>
	
	<div class="row">	
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Emerald Chestplate",
			'pic' => "emerald_chest.png",
			'desc' => "7.5 Armor slots / Less uses than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Emerald Leggings",
			'pic' => "emerald_legs.png",
			'desc' => "7.5 Armor slots / Less uses than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Emerald Boots",
			'pic' => "emerald_boots.png",
			'desc' => "7.5 Armor slots / Less uses than Diamond"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Obsidian Helmet",
			'pic' => "obs_helmet.png",
			'desc' => "10 Armor slots / More uses than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Obsidian Chestplate",
			'pic' => "obs_chest.png",
			'desc' => "10 Armor slots / More uses than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Obsidian Leggings",
			'pic' => "obs_legs.png",
			'desc' => "10 Armor slots / More uses than Diamond"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Obsidian Boots",
			'pic' => "obs_boots.png",
			'desc' => "10 Armor slots / More uses than Diamond"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Guardian Helmet",
			'pic' => "guardian_helmet.png",
			'desc' => "5.5 Armor slots / Full Set: Invincibility"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Guardian Chestplate",
			'pic' => "guardian_chest.png",
			'desc' => "5.5 Armor slots / More uses than Diamond"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Guardian Leggings",
			'pic' => "guardian_legs.png",
			'desc' => "5.5 Armor slots / Full Set: Invincibility"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Guardian Boots",
			'pic' => "guardian_boots.png",
			'desc' => "5.5 Armor slots / Full Set: Invincibility"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ender Helmet",
			'pic' => "ender_helmet.png",
			'desc' => "8.5 Armor slots / Full Set: No Fall Damage"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ender Chestplate",
			'pic' => "ender_chest.png",
			'desc' => "8.5 Armor slots / Full Set: No Fall Damage"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ender Leggings",
			'pic' => "ender_legs.png",
			'desc' => "8.5 Armor slots / Full Set: No Fall Damage"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Ender Boots",
			'pic' => "ender_boots.png",
			'desc' => "8.5 Armor slots / Full Set: No Fall Damage"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Scuba Helmet",
			'pic' => "scuba_helmet.png",
			'desc' => "7.5 Armor slots / Full Set: Water Breathing"
		)); ?>
	
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Scuba Chestplate",
			'pic' => "scuba_chest.png",
			'desc' => "7.5 Armor slots / Full Set: Water Breathing"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Scuba Leggings",
			'pic' => "scuba_legs.png",
			'desc' => "7.5 Armor slots / Full Set: Water Breathing"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Scuba Boots",
			'pic' => "scuba_boots.png",
			'desc' => "7.5 Armor slots / Full Set: Water Breathing"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Scorched Helmet",
			'pic' => "magma_helmet.png",
			'desc' => "7 Armor slots / Full Set: Fire Protection"
		)); ?>
	
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Scorched Chestplate",
			'pic' => "magma_chest.png",
			'desc' => "7 Armor slots / Full Set: Fire Protection"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Scorched Leggings",
			'pic' => "magma_legs.png",
			'desc' => "7 Armor slots / Full Set: Fire Protection"
		)); ?>
		
		<?php echo $twig->render('_recipe.php', array(
			'name' => "Scorched Boots",
			'pic' => "magma_boots.png",
			'desc' => "7 Armor slots / Full Set: Fire Protection"
		)); ?>

	</div>
	
	<a href="#" class="btn btn-info">Back to the Top</a>
</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
