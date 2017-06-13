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
		
	<div class="container">
		
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
                <h3>My Mods</h3>
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
                        <p>1.8 / 1.7/ 1.6 / 1.5</p>
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
		
		
		<div id="about-me" class="row">
			<h1>About Gruntpie224</h1>
			<p>
				Hello! I am the creator of three Minecraft mods: <b>Wintercraft</b>, <b>VanillaPlus</b>, and <b>Exp-Translation</b>. My goal is to create mods that I'd want to enjoy myself. 
				Seeing others enjoy my work is one of the greatest benefits to creating these mods in my free time. I hope to one day 
				make a mod that will wow the Minecraft community but until then I will continue to build on my name. Oh and I also have 
				<b><a href="https://www.youtube.com/user/DiamondDiggersGaming" target=_blank>YouTube channel</a></b> with Minecraft content as well.  
			</p>
			<img src="/images/Me.png" alt="Gruntpie224 Bee Avatar">
		</div>
		<!-- /.row -->

	</div>
<!-- Footer -->
<?php
 echo $twig->render('_footer.php');
?>
