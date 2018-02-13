<?php
 require_once '../../vendor/autoload.php';
 $loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/_partials");
 $twig = new Twig_Environment($loader, array(
    /*'cache' => 'compilation-cache', */
 ));
 
 echo $twig->render('_header.php', array(
 	'page_title' => "/css/download_css.css"
         ));
?>

<div class="row" id="file-download">

	<a href="/mods/<?php 
		$mod = $_GET['mod'];

		switch($mod)
		{
			case "vp":
				echo "vanillaplus";
				break;
			case "wc":
				echo "wintercraft";
				break;
			case "exp":
				echo "exp";
				break;
		}
	
	?>/download/" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back - Downloads</a>
	<div class="col-xl-4 col-lg-5 col-md-7 col-xs-11">
		<h1><?php
				$mod = $_GET['mod'];

				switch($mod)
				{
					case "vp":
						echo "VanillaPlus";
						break;
					case "wc":
						echo "Wintercraft";
						break;
					case "exp":
						echo "Exp-Translation";
						break;
				}
			?>
		</h1>
		<div id="download-file"> 
			<p>
			- -
			</p>
			<a id="<?php echo $_GET['file']; ?>" href="/downloads/<?php echo $_GET['mod']; ?>/<?php echo $_GET['file']; ?>">
				Download <?php echo $_GET['file']; ?>
			</a>
			<p>
			For Minecraft <?php
				$version = substr($_GET['file'], strpos($_GET['file'], "-") + 1, strpos($_GET['file'], "-", strpos($_GET['file'], "-") + 1) - (strpos($_GET['file'], "-") + 1));    
				echo $version;
			?>
			</p>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-12-xs">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Sidebar Ads -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-7894460385932316"
			 data-ad-slot="5970083963"
			 data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
