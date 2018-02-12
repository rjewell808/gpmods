<?php
 require_once '../vendor/autoload.php';
 $loader = new Twig_Loader_Filesystem("_partials");
 $twig = new Twig_Environment($loader, array(
    /*'cache' => 'compilation-cache', */
 ));
 
 echo $twig->render('_header.php', array(
 	'page_title' => "/css/home_css.css"
         ));
?>
		
        <!-- Jumbotron Header -->
        <div id="carousel-example-generic" class="carousel slide hidden-sm hidden-xs" data-ride="carousel">
		 
		  <ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		
		  
		 
		  <div class="carousel-inner" role="listbox">
			<header class="jumbotron hero-spacer" id="overlay">
				<h1>Welcome to Gruntpie's Mods</h1>
				<p>
					This is the home of Wintercraft, VanillaPlus, and Exp-Translation! 
					<br>
					Here you'll be able to find all the latest info and update information on my many mods. 
				</p>
			</header>
		  
			<div class="item active">
			  <img src="/images/slide/slide_1.png" alt="...">
			</div>
			
			<div class="item">
			  <img src="/images/slide/slide_2.png" alt="...">
			</div>
			
			<div class="item">
			  <img src="/images/slide/slide_3.png" alt="...">
			</div>
		  </div>

		
		</div>  
		
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-1 hidden-xs hidden-sm">
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
			<div class="col-lg-8 col-md-10">
			
				<header class="jumbotron hero-spacer visible-sm visible-xs">
					<h1>Welcome to Gruntpie's Mods</h1>
					<p>
						This is the home of Wintercraft, VanillaPlus, and Exp-Translation! 
						<br>
						Here you'll be able to find all the latest info and update information on my many mods. 
					</p>
				</header>
				
				<!-- Title -->
				<div class="row">
					<div class="col-lg-12">
						<h1>My Mods</h1>
					</div>
				</div>
				<!-- /.row -->

				<!-- Page Features -->
				<div class="row text-center">

					<div class="col-md-4 col-sm-6 hero-feature">
						<div class="thumbnail">
							<img src="images/thumb_vanilla.png" alt="">
							<div class="caption">
								<h3>VanillaPlus</h3>
								<p>1.8 / 1.7 / 1.6 / 1.5</p>
								<p>
									<a href="mods/vanillaplus/download/" class="btn btn-info">Download Latest</a> <a href="mods/vanillaplus/" class="btn btn-default">More Info</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 hero-feature">
						<div class="thumbnail">
							<img src="images/thumb_winter.png" alt="">
							<div class="caption">
								<h3>Wintercraft</h3>
								<p>1.8 / 1.7 / 1.6</p>
								<p>
									<a href="mods/wintercraft/download/" class="btn btn-info">Download Latest</a> <a href="mods/wintercraft/" class="btn btn-default">More Info</a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 hero-feature">
						<div class="thumbnail">
							<img src="images/thumb_exp.png" alt="">
							<div class="caption">
								<h3>Exp-Translation</h3>
								<p>1.9 / 1.8</p>
								<p>
									<a href="mods/exp/download/" class="btn btn-info">Download Latest</a> <a href="mods/exp/" class="btn btn-default">More Info</a>
								</p>
							</div>
						</div>
					</div>

				</div>
				<!-- /.row -->
				
				<!-- Title -->
				<div id="news" class="row">
					<div class="col-lg-12">
						<h1>News</h1>
						<ul class="list-group">
						  <li class="list-group-item list-group-item">
							<h4 class="list-group-item-heading">VANILLAPLUS UPDATE - 08/24/2017</h4>
							<p class="list-group-item-text">VanillaPlus has received the 1.5.1 update for Minecraft 1.7.10. While it's nothing major
							I figured since 1.7.10 is still the most popular version I'd update it to be very close to the 1.8 version on VanillaPlus. Enjoy!
							</p>
						  </li>
						  <li class="list-group-item list-group-item-info">
							<h4 class="list-group-item-heading">GPMODS.NET LAUNCH - 08/17/2017</h4>
							<p class="list-group-item-text">Welcome to the brand new website where I'll be hosting my mods! Please explore and be
							sure to suggest any ideas at: <a href="mailto:diamonddiggersgaming@gmail.com">diamonddiggersgaming@gmail.com</a>
							</p>
						  </li>
						</ul>
					</div>
				</div>
				
				
				<div id="about-me" class="row">
					<div class="col-md-6">
					<h1 id="about-gp-title">About Gruntpie224</h1>
					<p>
						Hello! I am the creator of three Minecraft mods: <strong>Wintercraft</strong>, <strong>VanillaPlus</strong>, and <strong>Exp-Translation</strong>. My goal is to create mods that I'd want to enjoy myself. 
						Seeing others enjoy my work is one of the greatest benefits to creating these mods in my free time. I hope to one day 
						make a mod that will wow the Minecraft community but until then I will continue to build on my name.
						<br><br>
						Oh and I also have 
						<strong><a href="https://www.youtube.com/user/DiamondDiggersGaming" target=_blank>YouTube channel</a></strong> with Minecraft content as well.  
					</p>
					</div>
					
					<div class="col-md-6">
						<img src="/images/Me.png" alt="Gruntpie224 Bee Avatar">
					</div>
				</div>
				<!-- /.row -->
			</div>
			<div class="col-lg-2 col-md-1 hidden-xs hidden-sm">
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
	</div>
<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
