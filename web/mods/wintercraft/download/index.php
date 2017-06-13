<?php
 require_once '../../../../vendor/autoload.php';
 $loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/_partials");
 $twig = new Twig_Environment($loader, array(
    /*'cache' => 'compilation-cache', */
 ));
 
 echo $twig->render('_header.php', array(
 	'page_title' => "/css/download_css.css"
         ));
?>

<div class="col-lg-12">
	<a href=".." class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back - Wintercraft</a>
	
	<h1>Wintercraft <span id="hypen">-</span> Downloads</h1>
	
	<div class="row" id="latest">
		<h2>Latest Version</h2>
		<div class="row">
			<a class="btn btn-success" href="http://adf.ly/1gCvoR" target="_blank">Wintercraft v1.1.4.2 for Minecraft 1.8.9</a>
			<a class="btn btn-success" href="http://adf.ly/1g1q99" target="_blank">Wintercraft v1.1.4.2 for Minecraft 1.8</a>
			<br>Requires Minecraft Forge to work
		</div>
	</div>
	
	<hr>
	
	<div class="row" id="downloads">
		<div class="col-lg-6">
			<h2>Previous Versions</h2>
			<div class="row">
				<h3>Minecraft 1.7.10</h3>
					<a class="btn btn-info" href="http://adf.ly/auim3" target="_blank">Wintercraft v1.1.3 for Minecraft 1.7.10</a>
					<a class="btn btn-info" href="http://adf.ly/1NXXll" target="_blank">Wintercraft v1.1.2 for Minecraft 1.7.10</a>
					<a class="btn btn-info" href="http://adf.ly/vEfBe" target="_blank">Wintercraft v1.1.1 for Minecraft 1.7.10</a>
					<a class="btn btn-info" href="http://adf.ly/uluwO" target="_blank">Wintercraft v1.1.0 for Minecraft 1.7.10</a>
				<h3>Minecraft 1.7.2</h3>
					<a class="btn btn-info" href="http://adf.ly/vRstH" target="_blank">Wintercraft v1.1.2 for Minecraft 1.7.2</a>
					<a class="btn btn-info" href="http://adf.ly/vEfAD" target="_blank">Wintercraft v1.1.1 for Minecraft 1.7.2</a>
					<a class="btn btn-info" href="http://adf.ly/ulv07" target="_blank">Wintercraft v1.1.0 for Minecraft 1.7.2</a>
				<h3>Minecraft 1.6.4</h3>
					<a class="btn btn-info" href="http://adf.ly/vRsnk" target="_blank">Wintercraft v1.0.3 for Minecraft 1.6.4</a>
					<a class="btn btn-info" href="http://adf.ly/aT9hY" target="_blank">Wintercraft v1.0.2 for Minecraft 1.6.4</a>
					<a class="btn btn-info" href="http://adf.ly/aIYm1" target="_blank">Wintercraft v1.0.1 for Minecraft 1.6.4</a>
					<a class="btn btn-info" href="http://adf.ly/aDiHc" target="_blank">Wintercraft v1.0.0 for Minecraft 1.6.4</a>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="row">
				<h2>Required Downloads</h2>
				<a class="btn btn-warning" href="https://files.minecraftforge.net/" target="_blank">Minecraft Forge</a>
			</div>
			<div class="row">
				<h2>Credits</h2>
				<p>
					<ul>
					<li>gruntpie224 - Creator</li>
					<li>Dr_Mr_Boss - Additional Textures</li>
					<li>Dgerr123 - Additional Textures</li>
					<li>RedAbsol0 - Additional Textures</li>
					<li>Dogman1123 - Additional Textures</li>
					<li>XxlinexX - Inspiration</li>
					<li>Minecraft Forge Community - For helping a bunch</li>
					<li>Minecraft Forge - Making it possible</li>
					</ul>
				</p>
			</div>
			<div class="row" id="install">
				<h2>Installation - Windows</h2>
				<p>
					<h3>These instructions work with both client and server:</h3>
					<ol>
					<li>Download the latest version of the forge installer</li>
					<li>Run the installer and select client/server</li>
					<li>Start Minecraft using the Forge profile</li>
					<li>Exit the game</li>
					<li>Download VanillaPlus above and place in the mods folder located in your .minecraft folder</li>
					<li>Re-launch Minecraft with the forge profile and have fun!</li>
					</ol>
				</p>
			</div>
		</div>
	</div>
	
	<div class="row">
		<h2>Changelog</h2>
			<pre>
<strong>Wintercraft v1.1.4.2:</strong>
*Updated - 1.8.9
*Fixed - Freezer cannot be opened
*Fixed - Wintercraft logo not showing up in Mods section​

<strong>Wintercraft v1.1.4.1:</strong>
*Fixed - Server crash on startup

<strong>Wintercraft v1.1.4:</strong>
*Updated - 1.8
*Optimized code 
*Added - Implemented Forge's in-game config editor
*Change - Hot Chocolate model now renders like a normal item
*Change - Clicking on leaves with christmas lights won't drop the lights anymore
*Change - Freezer block is now translucent
*Change - Fireplace model updated
*Change - Various Ornament texture changes
*Change - Ornament achievement can also now be gained by picking up an ornament as well as crafting one
*Change - Christmas Trees were limited to only 10 but can now support as many as you'd like
*Change - Gingerbread Man drop rate altered
*Change - Gingerbread Man rare music disk drop has been changed to 1.5% chance of dropping and must be at night
*Change - Mini Snow Golem rare music disk drop has been changed to 1.5% chance of dropping and must be at night
*Change - You can now have to craft every colored candle the same way
*Change - Lowered Freezer, Snow Stairs, and Fireplace's hardness a bit
*Change - Snow Stairs can be broken faster with shovels now
*Change - Balanced Wintercraft Food saturation
*Fixed - Graphics issue when placing leaves with christmas lights next to each other
*Fixed - Rare and normal Ornament Achievements couldn't be obtained with anything other than Red/Creeper Ornaments
*Fixed - Candles sounded like wool
*Fixed - Breaking Snow Stairs wouldn't return the item

<strong>Wintercraft v1.1.3:</strong>
*Fixed - Death by Albino Reindeer shows code name
*Fixed - Multiple doors are dropped when breaking top section of the door
*Fixed - SnowGlobe only works once on servers until they restart

<strong>Wintercraft v1.1.2:</strong>
*Added config options to enable hostile,neutral, and peaceful mobs
*Added a hint for setting up the Christmas Tree
*Added a description for the Antlers
*Changed Polar Bear bounding box to be smaller
*Changed description for the Candy Cane Sword
*Fixed - You can't search for the Christmas Cookie in Creative
*Fixed - There can only be 1 Christmas Tree setup in a world at a time (Up to 10 trees now!)
*Fixed - Dark Presents will spam the console when spawned/broken
*Fixed - Game crash when placing Fruit Cake
*Removed colors on Christmas Cookie to fix a bug

<strong>Wintercraft v1.1.1:</strong>
*Optimized for better performance
*Added crafting recipe to receive Candy Canes from Candy Cane Logs
*Added "Naughty Weather!" and "Cold Topic!" achievements
*Added config options to change the spawn rate of Igloos, Candy Canes, and Elf Houses
*Added an easter egg for the Snow Globe
*Added special golden Santa Hat texture for Team Members and Beta Testers. Can be disabled in the config.
*Added config option to enable Auto Mob IDs or using custom IDs
*Added Furnace recipes to melt Iced Cobble and Iced Stone
*Added tips for people who may be confused. They can be disabled in the config.
*Changed Marshmallow texture
*Changed Iron Stick recipe to give you 6
*Changed Rocky Snowball recipe 
*Changed Wintercraft achievement layout
*Changed Star particles to only appear on the one that will spawn the presents
*Changed Santa Hat Model texture
*Changed Elf House spawn rate to be higher
*Changed some freezer fuels to last longer
*Changed some Present/Christmas Present drops
*Changed Wintercraft entity IDs to be automatically assigned to any open ID
*Fixed - Chiller Stick recipe still exists
*Fixed - Dyeing Candles doesn't consume dye that was used
*Fixed - Candle block isn't centered
*Fixed - Taking lights off of leaves can crash the game if you restart the world
*Fixed - Santa is placing presents at a previous Christmas Tree location
*Fixed - Bad Ice Staff explosion causes invisible blocks
*Fixed - Marshmallow spelling
*Fixed - Santa Hat model has a jagged line and out of place segment
*Fixed - Snow Globe not working after you use it once
*Fixed - Dark Presents will spam the console when spawned/broken
*Fixed - Dark Presents spawn things when broken in creative
*Fixed - Wall Lights Block name showing up as tile.wallLights.name
*Fixed - Snow Man's name showing up as entity.UsefulSnowMan.name
*Fixed - Snow Man Head bounding box is too small
*Fixed - No recipes for Refined Ice and Crystal Armor
*Removed any unnecessary textures

<strong>Wintercraft v1.1.0:</strong>
*Updated to 1.7.10/1.7.2
*Updated many textures
*Added Iced Cobble
*Added config to toggle showing Wintercraft structure coordinates in console
*Added the ability to change Winercraft Mob IDs (Helps when Wintercraft is conflicting with other mods)
*Added Mini Snow Golem center animation
*Added Elf House Structure
*Added Antlers and Antlers Hat
*Added "The Star on Top", "Special Decor" achievement
*Added Ice Skates
*Added Winter Ice and Packed Ice to Freezer Fuel
*Added Fireplace 
*Added Mining Fatigue effect to Ice Staff
*Added Santa sound effect
*Added model/particles for Snow Globe 
*Added Candy Cane Axe
*Added Cooked Venison
*Added Raw Venison
*Added Advent Calendar
*Added Candy Cane Structure
*Added Candy Cane Block
*Added Christmas Countdown Calendar
*Added anvil repair ability to Chiseled, Refined, and Crystal Ice Tools
*Added Wintercraft mob spawns in the newer biomes
*Added particle effect to Star when it's active
*Added Albino Reindeer Mob
*Added Empty Stocking Decor and recipe to get Full Stocking Decor
*Added rare mob ornaments
*Added 16 more ornaments(New colors!)
*Added another Rocky Snowball recipe with gravel
*Added Candle & Ornament items to place instead of placing the block directly(Like how Sugar Cane is)
*Added Candles to Wintercraft creative tab as they weren't getting noticed
*Added a Gift Box for present trading (Now Finished!)
*Added Cocoa Beans drop to Gingerbread Men
*Fixed messed up Freezer when Optifine is installed
*Fixed Polar Bear hitboxes
*Fixed Snow Stairs lighting
*Fixed Santa Event restarting even if he didn't visit
*Fixed Santa Armor leaving the bonus on when you took off the armor
*Fixed Igloo spawning to always be risen 1 block too high
*Fixed Shift-clicking on the Freezer not working properly
*Fixed Refined-Ice/Crystal Armor not having textures
*Fixed BadStaff achievement through crafting
*Fixed Snow Man Head direction not facing the player when placed
*Fixed Freezer GUI
*Fixed Ornaments being able to be placed under each other
*Fixed Lights being replaced by placing other lights on the opposite side in a corner
*Fixed Lights on walls getting replaced by a block that is placed in front of it
*Fixed breeding with Reindeer being a Carrort on a Stick when it should've be a Carrot
*Fixed Crystal/Refined Ice Armor not being in the Wintercraft creative tab
*Fixed game crash when using the Ice Staff on non-mob entities such as minecarts
*Fixed the ability to spam the Snow Globe
*Fixed Snow Slab.name to Snow Slab
*Fixed Snow Slabs to be more like snow
*Fixed buckets not being returned when using the Freezer
*Fixed the Green Candle being a seperate block
*Changed the Star to drop glowstone when broken
*Changed Chisled tool set recipe to also accept Iced Cobble
*Changed Snow Brick recipe to give 4 bricks
*Changed Ornaments so that they will fall if the block above them is removed
*Changed getting Lights from Spruce Light Blocks to be more visible when they come off
*Changed the Lights Block so that when you punch it the lights will drop
*Changed it so that when you put lights on any leaf block it will turn into the spruce lights block but if you take the lights off it will turn back into the original leaf block
*Changed Ice recipe to give 2 Ice Blocks to speed up the process of getting a Freezer
*Changed Mini Snow Golem Spawn rate to be higher
*Changed Penguin sounds to be quieter
*Changed Reindeer spawn rate to be lower
*Changed Snow Slab texture
*Changed Freezer freeze time to be longer
*Changed Freezer Inputs by adding newer blocks
*Changed Ice Cream effects to last for 45 seconds
*Changed SnowMan Head recipe
*Changed Stocking recipe to give you 4 stockings
*Changed Candle recipe to give you 3 candles
*Changed Wreath recipe
*Changed receiving presents to have them spawn under the tree instead of in your inventory
*Changed the Snow Globe to a block
*Changed Candy Cane hunger fill to 1.5
*Changed Wintercraft creative tab icon
*Changed Reindeer to drop Venison
*Changed SnowGlobe texture
*Changed Crystal Ice Sword and Axe Recipes to the normal sword/axe recipe 
*Changed Candles to be not as bright
*Changed CandyCaneSword to take more durability when gettings CandyCanes from it
*Changed Christmas, SnowGlobe, IceStaff, and IceStaffBad achievements
*Changed Chiller Stick to be now held like a tool
*Changed hardness of lights when on walls
*Changed sound when placing lights 
*Changed some item/block names
*Changed Ornaments to be one block with metadata
*Changed Ice to drop 0-2 Ice shards when broken
*Removed special Golden Hat for team members
*Removed Chiller Stick Achievement
*Removed Chiller Stick
*Removed Magic Fire
*Removed Magic Snow
*Removed Magic Portal Block
*Removed unfinished North Pole dimension
*Removed seperate Blue Ornament
*Removed seperate Green Ornament
*Removed seperate Green Candle Block
*Removed Winter Ice generation

<strong>Wintercraft v1.0.3:</strong>
*Changed Ice recipe in the Freezer to receive only 4 instead of 16 Ice Blocks now
*Added "Magic on Fire!" Achievement
*Added very early North Pole dimension
*Took out 'Present' as a Christmas Present drop and replaced it with a Magic Saddle
*Changed Candles and Lightst to be Brighter
*Ice Staff in now held like a tool
*Polar Bears can now be bred with Raw-Fish and they will follow you if you have Raw-Fish
*Changed it so that now when you build a Christmas Tree correctly, you'll hear a jingle instead of lightning
*Changed it so that the very top block can have lights on it or not when building a Christmas Tree
*Added Magic Saddle
*Added Reindeer Mob
*Santa Hat is a 3D-Model
*Changed Fruit Cake Bricks Recipe to receive 16
*Major Texture Update
*Added Wintercraft Ice Recipe (Making crafting the Freezer a bit easier)
*Fixed Ice Staff crashing the game when trying to hit the Ender Dragon
*Added Snow-Man Mob
*Added Refined-Ice Armour
*Added Crystal Armour
*Added a Gift Box for present trading (Still in progress)
*Turned down Igloo Generation a little bit more
*Silk Touch works on Presents now so you can pick them up
*You can't stack SnowGlobes now
*Crafting lights now gives you 3 lights
*Changed Chocolate Milk so that you could drink it
*Fixed food not having any saturation, meaning it ran out really fast
*Added Donator Benefits (Also apply to Mod Team Members)
    -Donators now have a greeting announced on a server when they join! (Only if the Server has Wintercraft installed)
*Fixed White Candle when colored green dropping a green candle when broken
*Fixed Santa taking every Christmas Cookie and Hot Chocolate you had in your inventory
*Santa Armour now will make you get 6 presents from Santa if wearing a Full Set
*Nerfed Santa Armour by a lot to make it be a little better than leather

<strong>Wintercraft v1.0.2:</strong>
*Added Mod Information in the Mods section (McMod file)
*Polar bears will attack Penguins on occasion
*Lights can now be placed on walls!
*Added a candle color for every dye
     -New candle dyeing system
     -Took Candles out of Creative Tab since it would be very cluttered
     -New Recipe
*Added Option in the config for snowing all the time in every biome
*Nerfed Mini Snow Golems by doing only Half-Heart Damage per hit
*Lowered Igloo Generation by abit
*Added "Explosion on a Stick!", "Decorating Time!", "Like Christmas Morning!", "Merry Christmas!" Achievements
*Added Descriptions to some Items to point out features
*Added Blue Ornament
*Added Stocking Recipe
*Re-added Santa Armour(Everything but the texture is done)
*Re-added SnowGlobe

<strong>Wintercraft v1.0.1:</strong>
*Took the SnowGlobe and Santa Outfit out of the Creative Tabs since they&amp;amp;#39;re not 100% done yet
*Fixed freezer recipe

<strong>Wintercraft v1.0.0:</strong>
*Initial Release
			</pre>
	</div>
</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
