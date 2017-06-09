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

<a href=".." class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back - VanillaPlus</a>

<div class="col-lg-12">
	<h1>VanillaPlus <span id="hypen">-</span> Downloads</h1>
	
	<div class="row" id="latest">
		<h2>Latest Version</h2>
		<div class="row">
			<a class="btn btn-success" href="http://adf.ly/1Nrp8E" target="_blank">VanillaPlus v1.5.1 for Minecraft 1.8</a>
			<br>Requires Minecraft Forge to work
		</div>
	</div>
	
	<hr>
	
	<div class="row" id="downloads">
		<div class="col-lg-6">
			<h2>Previous Versions</h2>
			<div class="row">
				<h3>Minecraft 1.8</h3>
					<a class="btn btn-info" href="http://adf.ly/1Q1xg8" target="_blank">VanillaPlus v1.5.0 for Minecraft 1.8</a>
				<h3>Minecraft 1.7.10</h3>
					<a class="btn btn-info" href="http://bit.ly/1tjA8gI" target="_blank">VanillaPlus v1.4.4 for Minecraft 1.7.10</a>
					<a class="btn btn-info" href="http://adf.ly/sWkK0" target="_blank">VanillaPlus v1.4.3 for Minecraft 1.7.10</a>
					<a class="btn btn-info" href="http://adf.ly/rLEye" target="_blank">VanillaPlus v1.4.2 for Minecraft 1.7.10</a>
					<a class="btn btn-info" href="http://adf.ly/qdQAS" target="_blank">VanillaPlus v1.4.1 for Minecraft 1.7.10</a>
					<a class="btn btn-info" href="http://adf.ly/qLSvk" target="_blank">VanillaPlus v1.4.0 for Minecraft 1.7.10</a>
				<h3>Minecraft 1.7.2</h3>
					<a class="btn btn-info" href="http://bit.ly/100Zaan" target="_blank">VanillaPlus v1.4.4 for Minecraft 1.7.2</a>
					<a class="btn btn-info" href="http://adf.ly/sWkFm" target="_blank">VanillaPlus v1.4.3 for Minecraft 1.7.2</a>
					<a class="btn btn-info" href="http://adf.ly/rLF8d" target="_blank">VanillaPlus v1.4.2 for Minecraft 1.7.2</a>
					<a class="btn btn-info" href="http://adf.ly/qdQVB" target="_blank">VanillaPlus v1.4.1 for Minecraft 1.7.2</a>
					<a class="btn btn-info" href="http://adf.ly/qLgne" target="_blank">VanillaPlus v1.4.0 for Minecraft 1.7.2</a>
				<h3>Minecraft 1.6.4</h3>
					<a class="btn btn-info" href="http://adf.ly/ZBj9d" target="_blank">VanillaPlus v1.3.6 for Minecraft 1.6.4</a>
					<a class="btn btn-info" href="http://www.mediafire.com/file/u2kzjr93k7zl7ct/VanillaPlus%5BV.1.3.5%5D.zip" target="_blank">VanillaPlus v1.3.5 for Minecraft 1.6.4</a>
					<a class="btn btn-info" href="http://www.mediafire.com/file/1citem9b26tus3z/VanillaPlus%5BV.1.3.4%5D.zip" target="_blank">VanillaPlus v1.3.4 for Minecraft 1.6.4</a>
					<a class="btn btn-info" href="http://www.mediafire.com/file/3t9nlps8yb87t9s/VanillaPlus%5BV.1.3.3%5D.zip" target="_blank">VanillaPlus v1.3.3 for Minecraft 1.6.4</a>
					<a class="btn btn-info" href="http://www.mediafire.com/file/5qajd0bb6t200r1/VanillaPlus%5BV.1.3.2%5D.zip" target="_blank">VanillaPlus v1.3.2 for Minecraft 1.6.4</a>
				<h3>Minecraft 1.6.2</h3>
					<a class="btn btn-info" href="http://www.mediafire.com/file/zgg49m3ynyutbx8/VanillaPlus%5Bv.1.3.1%5D.zip" target="_blank">VanillaPlus v1.3.1 for Minecraft 1.6.2</a>
				<h3>Minecraft 1.5.2</h3>
					<a class="btn btn-info" href="http://adf.ly/b0mne" target="_blank">VanillaPlus v1.3.6 for Minecraft 1.5.2</a>
					<a class="btn btn-info" href="http://www.mediafire.com/file/2xjpae35857ylez/VanillaPlus%5Bv.1.3.0%5D.zip" target="_blank">VanillaPlus v1.3.0 for Minecraft 1.5.2</a>
					<a class="btn btn-info" href="http://www.mediafire.com/file/occ78q7pgnxq6n2/VanillaPlus%5Bv.1.2.2%5D.zip" target="_blank">VanillaPlus v1.2.2 for Minecraft 1.5.2</a>
					<a class="btn btn-info" href="http://www.mediafire.com/file/0g0z9275vm6568w/VanillaPlus%5Bv.1.2.1%5D.zip" target="_blank">VanillaPlus v1.2.1 for Minecraft 1.5.2</a>
					<a class="btn btn-info" href="http://www.mediafire.com/file/ccna9ajac6u0z7v/VanillaPlus%5BV.1.2.0%5D.zip" target="_blank">VanillaPlus v1.2.0 for Minecraft 1.5.2</a>
					<a class="btn btn-info" href="http://www.mediafire.com/file/kdtv58cjkuguqr5/VanillaPlus%5BV.1.1.2%5D.zip" target="_blank">VanillaPlus v1.1.2 for Minecraft 1.5.2</a>
					<a class="btn btn-info" href="http://www.mediafire.com/file/9b0jqlo7e2y7927/VanillaPlus%5BV.1.1.1%5D.zip" target="_blank">VanillaPlus v1.1.1 for Minecraft 1.5.2</a>
					<a class="btn btn-info" href="http://www.mediafire.com/file/13z3sddmn93sal4/VanillaPlus%5BV.1.1.0%5D.zip" target="_blank">VanillaPlus v1.1.0 for Minecraft 1.5.2</a>
					<a class="btn btn-info" href="http://www.mediafire.com/file/rjzca013kb3a6el/VanillaPlus%5BV.1.0.0%5D.zip" target="_blank">VanillaPlus v1.0.0 for Minecraft 1.5.2</a>
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
					<li>merkaba5 - Russian Translator</li>
					<li>3040wilson2 - Spanish Translator</li>
					<li>Ylcool - French Translator</li>
					<li>medsal15 - French Translator</li>
					<li>Tree_Bek - Programming Assistance</li>
					<li>Dr_Mr_Boss - Additional Textures</li>
					<li>Dogman1123 - Guardian Armor Textures</li>
					<li>Wolfenbrad - Emerald Item Textures</li>
					<li>Siaba_m - Ender Item Textures</li>
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
<strong>VanillaPlus v1.5.1:</strong>
*Change - Raised Sapphire ore spawn rate
*Change - Lowered Enchanted Ore spawn rate
*Fixed - Ender Gems couldn't be smelted

<strong>VanillaPlus v1.5.0:</strong>
[Update] Updated to 1.8
[Update] French lang file (Thanks to Ylcool)
[Addition] A single ruby/sapphire/hellstone block can now be turned back into its source material
[Addition] The config can now be changed In-Game through the Forge Mods button on the Main Menu
[Change] Enchanted Ore now has a higher light level
[Change] Reinforced Obsidian now has a lower hardness level
[Change] Balanced various food items' stats
[Change] Balanced Rapid Bow stats
[Change] Increased Air Sword air damage 
[Change] Special armor does not show particles anymore
[Change] Scuba armor now only activates if the player is in water
[Change] Magma ore can now be mined with an Iron Pickaxe
[Change] Head fragments will now drop less
[Change] Balanced various tool/armor sets
[Fixed] Rapid Bow 3rd-person animation now works
[Fixed] Hellfire Ore now drops XP
[Fixed] Guardian Ingot recipe was specific to the middle
[Removed] Exp-Translator, Empty Vial, and Exp Vial
[Removed] Rapid Bow information
[Removed] Wooden Door variations
[Removed] Various config options
[Misc] Cleaned up code
[Misc] Cleaned up textures

<strong>VanillaPlus v1.4.4:</strong>
*Updated Scuba Armor Item Textures
*Updated Sapphire Texture
*Updated Bloated Ink Sac Texture
*Changed Head Fragments to drop from their corresponding mobs instead of grass
*Fixed mod info in the mods tab
*Fixed Skeleton Head recipe with Skeleton Head Fragment

<strong>VanillaPlus v1.4.3:</strong>
*Added BeeHorseSword spawn options in config
*Added Russian Translation(Please not that it may not be 100% accurate)
*Fixed BeeHorseSword high spawn rate in dungeons

<strong>VanillaPlus v1.4.2:</strong>
*Added Spanish Translation(Please note that it may not be 100% accurate)
*Added French Translation(Please note that it may not be 100% accurate)
*Changed creative tabs to only Blocks and Items
*Removed test language file

<strong>VanillaPlus v1.4.1:</strong>
*Added anvil repairs to Obsidian, Emerald, Ruby, and Sapphire armor sets using their corresponding materials
*Added anvil repairs to Obsidian, Emerald, Ender, Purified, Ruby, Sapphire, and Gravel tool sets using their corresponding materials
*Added configurations to disable just about everything (Look in the config for options)
*Changed Magma Ore to require a harvest level of 3(Diamond and better)
*Changed Ender Tools to have a harvest level of 4(Can mine Hellfire Ore)
*Fixed config saying 'Sapphire Recipes' when it should've said 'Emerald Recipes'
*Fixed Toasted Slime Sandwich recipe
*Cleaned up code

<strong>VanillaPlus v1.4.0:</strong>
*Updated to 1.7.10/1.7.2
*Added Acacia Door
*Added Dark Oak Door
*Changed various names/text
*Changed various textures
*Changed mod logo
*Cleaned up code

<strong>VanillaPlus v1.3.6:</strong>
*Various Bug fixes

<strong>VanillaPlus v1.3.5:</strong>
*Nerfed Toasted Slime Sandwich to only 8.5 hunger
*Added Cooked-Flesh Config

<strong>VanillaPlus v1.3.4:</strong>
*Changed Magma and HellFire Ores to catch fire like Netherrack  (Never goes out)
*Added Exp-Translator Table (Along with Empty Vial and Exp Vial)
*Added VanillaPlus Achievements
*Increased Chance of getting XP from smelting
*Fixed Middle Clicking on Decor Blocks
*Fixed Game Crash when breaking Decor Blocks
*Removed WIP on RapidBow
*Decreased Spawn Rate for Ruby and Saphhire Ore
*Decreased Spawn Rate for Bee-Horse Sword

<strong>VanillaPlus v1.3.3:</strong> 
*Fixed BeeHorse Sword teleporting you to the End   
*Fixed RapidBow not being in the correct creative tab   
*Fixed RapidBow's missing description
*Fixed Rapid Bow durability
*Removed Secret Eggs

<strong>VanillaPlus v1.3.2:</strong>
*Updated to MC 1.6.4
*Fixed Rapid Bow doesn't render as a bow(Sorta)
*Fixed Ender Crystal Ore getting destroyed by Ender Dragon
*Fixed When the Bee-Horse Sword is used, it spawns a ghost stone sword as well
*Fixed Rapid Bow animation not working and sped it up
*Added Config to disable Mob Fragments

<strong>VanillaPlus v1.3.1:</strong>
*Updated to MC 1.6.2
*Added Configurations to disable Diamond Rods, Different Doors, and Common Tool Sets Recipes

<strong>VanillaPlus v1.3.0:</strong>
*Added Chiseled Ruby Block
*Added Chiseled Sapphire Block
*Added Chiseled HellStone Block
*Decreased Ruby and Sapphire Sword Damage
*Increased Air Sword's Damage
*Added Birch, Spruce, and Jungle Doors
*Added Bee-Horse Sword
*Added Toasted Slime Sandwich
*Tweaked the Rapid Bow
*Added a Descriptions to all Weapons
*Added Recipe for Rapid Bow
*Added Diamond Rod
*Added Ruby Block
*Added Sapphire Block
*Added HellStone Block

<strong>VanillaPlus v1.2.2:</strong> 
*Added Toast (Fills 4 Hunger)
*Added Armor Durability Info to Armor Descriptions
*Magma Sword now works as a Flint & Steel if Right-Clicked
*Fixed Rapid Bow not being in the right Menu
*Guardian Armor is Invincible against everything

<strong>VanillaPlus v1.2.1:</strong>
*Added Rapid Bow(Alot faster than a normal bow) *Still a Work in Progress*
*Fixed Sapphire and Ruby not being able to be mined with an Iron Pickaxe
*Changed SkeletonHead Fragment to SkeletonSkull Fragment
*Increased Spawn rate for Ruby and Sapphire

<strong>VanillaPlus 1.2.0:</strong> 
*Added Ender Crystal Ore
*Added Ender Crystals
*Added Different Creative Tabs Categories
*Added Ender Set
*Added Ruby Set
*Added Sapphire Set
*Added Purified Set
*Added Scuba Gear
*Added Bloated Ink Sac
*Added Air Tank*Added Scorching Armor
*Added Guardian Teir I Armor
*Added Guardian Ingots
*Added Purified Gold
*Changed Magma Ore now spawn in the Nether
*Changed Golden Feather Texture
*Changed Magma Ore Texture
*Changed Obsidian Armor Recipes
*Changed Reinforced Obisidian Recipe
*Changed Airborne Sword height
*Fixed Gravel Tools being too overpowered
*Fixed Any item can be used as fuel
*Removed &quot;WIP&quot; eggs from Creative Menus


<strong>VanillaPlus v1.1.2:</strong>
*Added Ink Sword
*Added AirBorne Sword
*Added Dead Shrub to Sticks Recipe
*Added Slime Jelly and Slime Sandwich
*Added Item Descriptions to Cooked and Seasoned Flesh
*Added Golden Feather
*Added Enchanted Gem*Added Color to Descriptions (Thanks to IrunoHatake!)
*Changed Magma Chunk Texture
*Changed Magma Sword Recipe
*Increased Magma Ore Vein Size by a little more
*Fixed ZombieHead Recipe not working
*Fixed Magma Sword not working on Servers
*Enchanted Ore now Illuminates light


<strong>VanillaPlus v1.1.1:</strong>
*Nerfed Magma Sword by a little
*Added Zombie Head
*Added Creeper Head
*Increased Magma Ore Spawn-Rate by a little more
*Added Item Description to Magma Sword

<strong>VanillaPlus v1.1.0:</strong>
*Added Gravel Set
*Added Flint Compound
*Added Compacted Gravel
*Added Skeleton Head Fragment
*Added Mod Description in under the &quot;Mods&quot; Button
*Removed Golden Egg from Creative Menus
*Fixed Forge saying Version 0.0.2

<strong>VanillaPlus v1.0.0:</strong>
*First Release
*Added Obsidian Set
*Added Emerald Set
*Added Cooked Flesh
*Added Seasoned Flesh
*Added Enchanted Ore/Powder
*Added Magma Ore/Chunk/Sword

			</pre>
	</div>
</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
