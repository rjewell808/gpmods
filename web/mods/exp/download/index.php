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
	<a href=".." class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back - ExpTranslation</a>
	
	<h1>ExpTranslation<span class="small" id="hypen"> / Downloads</span></h1>
	
	<div class="row" id="latest">
		<h2>Latest Version</h2>
		<div class="row">
			<a class="btn btn-success" href="http://adf.ly/1026464/gpmods.net/downloads/?mod=exp&file=ExpTranslation-1.12.2-1.2.0.jar" target="_blank">ExpTranslation v1.2.0 for Minecraft 1.12.2</a>
			<br>Requires Minecraft Forge to work
		</div>
	</div>
	
	<hr>
	
	<div class="row" id="downloads">
		<div class="col-lg-6">
			<h2>Previous Versions</h2>
			<div class="row">
				<h3>Minecraft 1.12.2</h3>
					<a class="btn btn-info" href="http://adf.ly/1026464/gpmods.net/downloads/?mod=exp&file=ExpTranslation-1.12.2-1.2.0.jar" target="_blank">ExpTranslation v1.2.0 for Minecraft 1.12.2</a>
				<h3>Minecraft 1.9.4</h3>
					<a class="btn btn-info" href="http://adf.ly/1026464/gpmods.net/downloads/?mod=exp&file=ExpTranslation-1.9.4-1.1.0.jar" target="_blank">ExpTranslation v1.1.0 for Minecraft 1.9.4</a>
				<h3>Minecraft 1.8.7</h3>
					<a class="btn btn-info" href="http://adf.ly/1026464/gpmods.net/downloads/?mod=exp&file=ExpTranslation-1.8.7-1.0.0.jar" target="_blank">ExpTranslation v1.0.0 for Minecraft 1.8.7</a>
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
					<li>Tree_Bek - Early code foundation</li>
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
<strong>ExpTranslation v1.2.0</strong>			
* Updated - 1.12.2
* Changed - Experience is now stored with actual experience value instead of by levels
	- Helps keep the mod balanced with Vanilla gameplay
	- You now store all of your exp you have when used
* Fixed - You can cheat the system by transferring levels quickly
* Fixed - You can only craft Empty Vials with wooden oak slabs
* Fixed - You can only craft the ExpTranslator with oak logs / white wool
* Fixed - Textures aren't centered
* Fixed - mcmod logo
* Removed - Bulk Vials
* Removed - ExpTranslation creative tab

<strong>ExpTranslation v1.1.0</strong>
*Updated to 1.9.4

<strong>ExpTranslation v1.0.0</strong>
*Initial Release
			</pre>
	</div>
</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
