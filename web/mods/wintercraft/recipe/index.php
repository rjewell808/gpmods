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
	<div class="row">
		<a href=".." class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back - Wintercraft</a>

		<a href="#freezer" class="btn btn-info">Freezer</a>
		<a href="#blocks" class="btn btn-info">Blocks</a>
		<a href="#items" class="btn btn-info">Items</a>
		<a href="#tools" class="btn btn-info">Tools</a>
		<a href="#armor" class="btn btn-info">Armor</a>
	</div>
	
	<div class="row">
		<h1 id="freezer">Freezer</h1>
		<hr>
		<img class="info-sheet" src="/images/wintercraft/info/freezer.png">
	</div>
		
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Iced Cobble",
			'pic' => "iced_cobble.png",
			'desc' => "Decor block"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Iced Stone",
			'pic' => "iced_stone.png",
			'desc' => "Decor block"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Ice",
			'pic' => "ice.png",
			'desc' => "Alternate recipe"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Iced Ingot",
			'pic' => "iced_ingot.png",
			'desc' => "Item used for Refined Ice Tools"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Iced Crystal",
			'pic' => "iced_crystal.png",
			'desc' => "Item used for Crystal Tools"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Purified Ice Gem",
			'pic' => "pure_ice_gem.png",
			'desc' => "Item used for crafting stable magic items"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Ice Balls",
			'pic' => "ice_balls.png",
			'desc' => "A throwable ball of ice that hurts more than a Rocky Snowball"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Vanilla Icecream",
			'pic' => "vanilla_cream.png",
			'desc' => "Used to make Icecream Cones"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Chocolate Icecream",
			'pic' => "choc_cream.png",
			'desc' => "Used to make Icecream Cones with strength"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Strawberry Icecream",
			'pic' => "strawberry_cream.png",
			'desc' => "Used to make Icecream Cones with Health Regen"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Cookie Dough Icecream",
			'pic' => "cookie_cream.png",
			'desc' => "Used to make Icecream Cones with Speed"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Iced Magma Icecream",
			'pic' => "magma_cream.png",
			'desc' => "Used to make Icecream Cones with Fire Protection"
		)); ?>
	</div>
	
	<div class="row">
		<h1 id="blocks">Blocks</h1>
		<hr>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Snow Bricks",
			'pic' => "snow_bricks.png",
			'desc' => "A nice compact block of snow for decoration"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Snow Slabs",
			'pic' => "snow_slabs.png",
			'desc' => "Half-slabs of Snow"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Snow Stairs",
			'pic' => "snow_stairs.png",
			'desc' => "Stairs made out of Snow"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Freezer",
			'pic' => "freezer.png",
			'desc' => "Important utility block that takes two inputs to produce an output"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Tree Star",
			'pic' => "tree_star.png",
			'desc' => "Decor light-up star but also needed for completing a Christmas Tree"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Fireplace",
			'pic' => "fireplace.png",
			'desc' => "Light it up with a Flint-and-Steel and enjoy the fire!"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Gift Box",
			'pic' => "gift.png",
			'desc' => "An empty box that you can use to send gifts to friends! Just right-click what you want to gift!"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Countdown Calendar",
			'pic' => "count_cal.png",
			'desc' => "Place it on a wall and see how many days are left until Christmas"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Advent Calendar",
			'pic' => "advent_cal.png",
			'desc' => "Like the Countdown Calendar but you get daily treats"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Snowman Head",
			'pic' => "snow_man.png",
			'desc' => "The head of a Snow Man. He may want it back"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Wreath",
			'pic' => "wreath.png",
			'desc' => "A festive decor block"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Empty Stocking",
			'pic' => "stocking_empty.png",
			'desc' => "A festive decor block"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Full Stocking",
			'pic' => "stocking_full.png",
			'desc' => "A festive decor block"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Fruit Cake Bricks",
			'pic' => "fruit_cake_bricks.png",
			'desc' => "A festive decor block"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Candles",
			'pic' => "candles.png",
			'desc' => "A festive decor block that lights up. For different colors, use different dyes"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Fruit Cake",
			'pic' => "fruit_cake.png",
			'desc' => "A new cake that gives Strength when eaten"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Ice Block",
			'pic' => "ice_block.png",
			'desc' => "An easier way to get Ice because why not?"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Snow Globe",
			'pic' => "snow_globe.png",
			'desc' => "A magical globe that is capable of controlling the weather"
		)); ?>
	</div>
	
	<div class="row">
		<h1 id="items">Items</h1>
		<hr>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Ice Chunk",
			'pic' => "ice_chunk.png",
			'desc' => "Made out of Ice Shards that are found in Ice, used in many recipes"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Corrupted Ice Gem",
			'pic' => "corr_ice_gem.png",
			'desc' => "Gem used to craft magic items, although it is recommended to purify it first"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Rocky Snowball",
			'pic' => "rocky_snowball.png",
			'desc' => "Same effect as Snowballs except these hurt"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Iron Sticks",
			'pic' => "iron_sticks.png",
			'desc' => "Sticks used for more sturdy Winter tools"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Mug",
			'pic' => "mug.png",
			'desc' => "Used to hold liquids"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Red Fur",
			'pic' => "red_fur.png",
			'desc' => "Soft, red material originally from Polar Bears"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Christmas Lights",
			'pic' => "lights.png",
			'desc' => "A decorative wall block that can also be placed on leaves"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Ornament",
			'pic' => "ornament.png",
			'desc' => "A decorative orb that can be placed under leaves. Replace the dye to get any color"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Decorated Door",
			'pic' => "decor_door.png",
			'desc' => "A nice decorated wooden door with a wreath"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Cooked Venison",
			'pic' => "cooked_venison.png",
			'desc' => "Tasty cooked meat that drops from Reindeer"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Christmas Cookie",
			'pic' => "christmas_cookie.png",
			'desc' => "A tasty treat for Santa but also deals a good amount of hunger"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Marshmallows",
			'pic' => "marshmallows.png",
			'desc' => "A tasty sugar treat that goes well with Cocoa"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Eggnog",
			'pic' => "eggnog.png",
			'desc' => "Creamy, cold and tasty"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Chocolate Milk",
			'pic' => "choc_milk.png",
			'desc' => "Tastes better warmed up"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Hot Chocolate",
			'pic' => "choc_hot.png",
			'desc' => "Warm drink that gives Speed and is also Santa's favorite drink"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Waffle Cone",
			'pic' => "waffle_cone.png",
			'desc' => "A crunchy cone that holds icecream"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Vanilla Icecream",
			'pic' => "vanilla_cone.png",
			'desc' => "A tasty frozen treat"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Chocolate Icecream",
			'pic' => "choc_cone.png",
			'desc' => "A tasty frozen treat that gives Strength"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Strawberry Icecream",
			'pic' => "strawberry_cone.png",
			'desc' => "A tasty frozen treat that gives Health Regen"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Cookie Dough Icecream",
			'pic' => "cookie_cone.png",
			'desc' => "A tasty frozen treat that gives Speed"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Magma Icecream",
			'pic' => "magma_cone.png",
			'desc' => "A tasty frozen treat that gives Fire Protection"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Candy Cane",
			'pic' => "candy_cane.png",
			'desc' => "A sweet and tasty treat"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Magic Saddle",
			'pic' => "magic_saddle.png",
			'desc' => "Saddle used to ride Reindeer. Can also be found in dungeons and Christmas Presents"
		)); ?>
	</div>
	
	<div class="row">
		<h1 id="tools">Tools</h1>
		<hr>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Candy Cane Axe",
			'pic' => "candy_axe.png",
			'desc' => "Used to chop down Candy Cane Logs without destroying them"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Ice Staff",
			'pic' => "ice_staff.png",
			'desc' => "A magical wand that's capable of freezing a target for 3 seconds per shot"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Chiselled Ice Tools",
			'pic' => "chis_ice_pick.png",
			'desc' => "A tool set that's better than stone but worse than iron"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Refined Ice Tools",
			'pic' => "ref_ice_pick.png",
			'desc' => "A tool set that's better than iron but worse than diamond"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Crystal Tools",
			'pic' => "cry_pick.png",
			'desc' => "A tool set that's better than diamond"
		)); ?>
		
	</div>
	
	<p>
		*Chiselled Ice, Refined Ice, and Crystal tool sets are all crafted like the other tool sets*
	</p>
	
	<div class="row">
		<h1 id="armor">Armor</h1>
		<hr>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Refined Ice Armor",
			'pic' => "ref_ice_helmet.png",
			'desc' => "An armor set that's better than iron but worse than diamond"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Crystal Armor",
			'pic' => "cry_helmet.png",
			'desc' => "An armor set that's better than diamond"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Santa Hat",
			'pic' => "santa_hat.png",
			'desc' => "A toasty hat for the Santa Set"
		)); ?>
	</div>
	
	<div class="row">
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Santa Coat",
			'pic' => "santa_coat.png",
			'desc' => "A jolly jacket for the Santa Set"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Santa Pants",
			'pic' => "santa_pants.png",
			'desc' => "Some comfy pants for the Santa Set"
		)); ?>
		<?php echo $twig->render('_recipe_win.php', array(
			'name' => "Santa Boots",
			'pic' => "santa_boots.png",
			'desc' => "Cozy boots for the Santa Set"
		)); ?>
	</div>
	
	<p>
		*Refined Ice and Crystal armor sets are all crafted like the other armor sets*
	</p>
	
	<div class="row">
		<div class="col-xs-12">
			<img class="info-sheet" src="/images/wintercraft/info/santa_armor.png">
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12">
			<br>
			<a href="#" class="btn btn-info">Back to the Top</a>
		</div>
	</div>
</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
