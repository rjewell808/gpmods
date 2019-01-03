<?php
 require_once '../../vendor/autoload.php';
 $loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/_partials");
 $twig = new Twig_Environment($loader, array(
    /*'cache' => 'compilation-cache', */
 ));
 
 echo $twig->render('_header.php', array(
 	'page_title' => "/css/contact_css.css"
         ));
?>

<div class="row">
	<div class="col-xs-12">
		If you ever need to get in contact with me with questions, suggestions, or general hellos, you can find me in these various ways!
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<h2>Contact</h2>
		Email: <a href="mailto:robertjewell808@gmail.com" target="_blank">robertjewell808@gmail.com</a>
		<br>Twitter: <a href="https://twitter.com/RobertTheJewell" target="_blank">@RobertTheJewell</a>
		<br>Minecraft Forums: <a href="http://www.minecraftforum.net/members/gruntpie224" target="_blank">gruntpie224</a>
	</div>
	<div class="col-md-6">
		<h2>Donate</h2>
		Here's something that is not at all required but for those who would like to help with development costs such as this website :)<br>
		<br>
		Paypal Link: <a href="https://www.paypal.me/RJewell808" target="_blank">RJewell808</a>
		<br><br>
		Thank you for any help!
	</div>
</div>

<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
