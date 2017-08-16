<?php
 require_once '../../../vendor/autoload.php';
 $loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/_partials");
 $twig = new Twig_Environment($loader, array(
    /*'cache' => 'compilation-cache', */
 ));
 
 echo $twig->render('_header.php', array(
 	'page_title' => "/css/policy_css.css"
         ));
?>

<div class="col-lg-12">
	<div class="row">
		<h1>Modpack Policy</h1>
		<hr>
		<p>
			I will allow you to use my any of my mods in your modpack under these conditions:
		</p>
		<ol>
			<li>There must be visible credit to gruntpie224 and you must provide a link back to the original mod page.</li>
			<li>You must not make any money off of your modpack which includes Adfly links and any related sites.</li>
			<li>Do not take claim of my mod and/or alter the contents without permission.</li>
			<li>I have all rights to revoke access of my mod from your modpack if any violations occur. </li>
		</ol>
		<p>
			If you follow these rules than you are free to use VanillaPlus/Wintercraft/ExpTranslation in your modpack! 
			<br>
			<br>
			Enjoy,<br>
			gruntpie224
		</p>
	</div>
</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
