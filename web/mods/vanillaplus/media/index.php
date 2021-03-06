<?php
 require_once '../../../../vendor/autoload.php';
 $loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/_partials");
 $twig = new Twig_Environment($loader, array(
    /*'cache' => 'compilation-cache', */
 ));
 
 echo $twig->render('_header.php', array(
 	'page_title' => "/css/media.css"
         ));
?>

<div class="row">
	<a href=".." class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back - VanillaPlus</a>
	
	<div class="row screenshots">
		<div class="col-md-6">
			<img src="/images/vanillaplus/media/obs_armor.png">
		</div>
		
		<div class="col-md-6">
			<img src="/images/vanillaplus/media/overview.png">
		</div>
	</div>
	<div class="row screenshots">
		<div class="col-md-4">
			<img src="/images/vanillaplus/media/scuba_armor.png">
		</div>
		<div class="col-md-4">
			<img src="/images/vanillaplus/media/1_3.png">
		</div>
		<div class="col-md-4">
			<img src="/images/vanillaplus/media/enchant_dust.png">
		</div>
	</div>
	
	<div class="row video">
		<div class="col-md-6">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/JspebF6UGXg" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div class="col-md-6">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/KZqixSCRvn0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
