<!DOCTYPE html>
<!--[if lt IE 7 ]><html style="margin-top: 0 !important" class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html style="margin-top: 0 !important" class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html style="margin-top: 0 !important" class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html style="margin-top: 0 !important" lang="en-US">
	<!--<![endif]-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Argo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,300italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" >
		<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" >
		<script src="assets/js/jquery.js"></script>
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<link href="assets/css/ie.css" rel='stylesheet' type='text/css'>
		<![endif]-->

		<!--[if IE 7]>
		<link rel="stylesheet" href="http://themestrong.com/demo/argo/assets/css/font-awesome-ie7.min.css">
		<![endif]-->
	</head>
	<body data-spy="scroll" data-target=".navbar">
		<header id="header">
			
			
			<div class="header-holder">
				<div class="container hidden-phone">
					<div class="brow">
						<div class="brick1 logo_container">
							<a href="index.html#" class="nav-item clearfix"> <div class="nav-hover"></div> <h1 class="logo">Polacas Grid </h1> </a>
						</div>
						<div class="brick1 transparent"></div>
					</div>
					<div class="brow">
						<div class="slogan brick3 boffset1 transparent text-right">
							<div class="inner">
								<h1>¡Bienvenido!</h1>
								<p>
									Sabemos lo importante que estar en contacto con tu comunidad y decidimos crear un sitio donde
									puedas hacerlo de forma sencilla, r&aacute; y divertida, aquí encontrar&aacute;s toda
									la informaci&oacute;n relevante de polacas y podr&aacute; compartir tu contenido con los dem&aacute;s miembros de la comunidad.
								</p>
							</div
							
							<?
		include_once("feed_eventos.php");
			$feed = new lectorFeedEventos();
			//$url="http://pipes.yahoo.com/pipes/pipe.run?_id=fed5771008c65d27a6afb7233be4292a&_render=rss";
			$feed->definir("http://pipes.yahoo.com/pipes/pipe.run?_id=fed5771008c65d27a6afb7233be4292a&_render=rss");
			$eventos=$feed->obtenerItems();
			
		?>

						</div>
						<div class="brick1 odd">
							<a href="index.html#blog" class="nav-item"> <div class="nav-hover"></div> <i class="li_bulb"></i> <span>Noticias</span> </a>
						</div>
						<div class="brick1 thumb">
							<div class="nav-item flipX">
								<img class="img1" src="<?php echo $eventos[0]['imagen']; ?>" alt="">
								
							</div>
						</div>
					</div>
					<div class="brow">
						<div class="brick1 thumb">
							<div class="nav-item flipX">
								<img class="img1" src="" alt="<?php echo $eventos[1]['imagen']; ?>">
								
							</div>
						</div>
						<div class="brick1 odd">
							<a href="index.html#portfolio" class="nav-item"> <div class="nav-hover"></div> <i class="li_photo"></i> <span>Cursos</span> </a>
						</div>
						<div class="brick1">
							<a href="index.html#about-us" class="nav-item"> <div class="nav-hover"></div> <i class="li_bubble"></i> <span>Comparte</span> </a>
						</div>
						<div class="brick1 thumb">
							<div class="nav-item flipY">
								<img class="img1" src="<?php echo $eventos[2]['imagen']; ?>" alt="">
								
							</div>
						</div>
						<div class="brick1 thumb">
							<div class="nav-item flipX">
								<img class="img1" src="<?php echo $eventos[3]['imagen']; ?>" alt="">
								
							</div>
						</div>
						<div class="brick1">
							<a href="index.html#blog" class="nav-item"> <div class="nav-hover"></div> <i class="li_note"></i> <span>Blog</span> </a>
						</div>
					</div>
					<div class="brow">
						<div class="brick1 boffset2 thumb">
							<div class="nav-item flipY">
								<img class="img1" src="<?php echo $eventos[4]['imagen']; ?>" alt="">
								
							</div>
						</div>
						<div class="brick1 thumb">
							<div class="nav-item flipY">
								<img class="img1" src="<?php echo $eventos[5]['imagen']; ?>" alt="">
								
							</div>
						</div>
						<div class="brick1 odd">
							<a href="index.html#contact" class="nav-item"> <div class="nav-hover"></div> <i class="li_paperplane"></i> <span>Mapa</span> </a>
						</div>
					</div>

				</div>

				<div class="container visible-phone">
					<div class="brick1 logo_container">
						<a href="live_menu.html#" class="nav-item clearfix"> <div class="nav-hover"></div> <h1 class="logo">Argo</h1> </a>
					</div>
					<div class="brick1 odd">
						<a href="live_menu.html#services" class="nav-item"> <div class="nav-hover"></div> <i class="li_bulb"></i> <span>Services</span> </a>
					</div>
					<div class="brick1 odd">
						<a href="live_menu.html#portfolio" class="nav-item"> <div class="nav-hover"></div> <i class="li_photo"></i> <span>Portfolio</span> </a>
					</div>
					<div class="brick1">
						<a href="live_menu.html#about-us" class="nav-item"> <div class="nav-hover"></div> <i class="li_bubble"></i> <span>About us</span> </a>
					</div>
					<div class="brick1">
						<a href="live_menu.html#services" class="nav-item"> <div class="nav-hover"></div> <i class="li_note"></i> <span>Blog</span> </a>
					</div>
					<div class="brick1 odd">
						<a href="live_menu.html#contact" class="nav-item"> <div class="nav-hover"></div> <i class="li_paperplane"></i> <span>Contact us</span> </a>
					</div>
				</div>
			</div>
		</header>
		<!-- End header -->
		<div id="navbar" class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="live_menu.html#" class="brand">Polacas Hub</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="">
								<a href="live_menu.html#services"><i class="li_bulb"></i>Noticias</a>
							</li>
							<li class="">
								<a href="live_menu.html#portfolio"><i class="li_photo"></i></a>
							</li>
							<li class="">
								<a href="live_menu.html#about-us"><i class="li_bubble"></i>About us</a>
							</li>
							<li class="">
								<a href="live_menu.html#blog"><i class="li_note"></i>Blog</a>
							</li>
							<li class="">
								<a href="live_menu.html#contact"><i class="li_paperplane"></i>Contact us</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end navbar -->
		
		
		<!-- content begin -->
		
		<!--Codigo php-->
		
		<?
		include_once("feed_noticias.php");
			$feed = new lectorFeedNoticias();
			//$url="http://pipes.yahoo.com/pipes/pipe.run?_id=fed5771008c65d27a6afb7233be4292a&_render=rss";
			$feed->definir("http://pipes.yahoo.com/pipes/pipe.run?_id=b3fed65ee94df8fbfdea25b90d4cfffa&_render=rss");
			$noticias=$feed->obtenerItems();
			///print_r($noticias);
		?>
		
		<div id="blog" class="section">
			<div class="container">
				<div class="hero">
					<h1>Noticias</h1>
					<p>
						Toda tu informaci&oacute;n en un s&oacute;lo lugar.
					</p>
				</div>
				
				
				<div class="blog_container">
					<div class="row-full clearfix">
						<div class="brick2">
							<iframe src="http://player.vimeo.com/video/61996880?autoplay=0&api=1" width="400" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
						<div class="brick1 odd">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[0]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i><? echo $noticias[0]['titulo'];?></h5>
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[15]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i><? echo $noticias[15]['titulo'];?></h5>
							</div> </a>
						</div>
						<div class="brick2">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[18]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i><? echo $noticias[18]['titulo'];?></h5>
								
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[30]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i><? echo $noticias[30]['titulo'];?></h5>
								
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[35]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i><? echo $noticias[35]['imagen'];?></h5>
								
							</div> </a>
						</div>
						<div class="brick2">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[40]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i><? echo $noticias[40]['titulo'];?></h5>
								
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[45]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i><? echo $noticias[45]['titulo'];?></h5>
								
							</div> </a>
						</div>
						<div class="brick1 odd">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[50]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> <? echo $noticias[50]['titulo'];?></h5>
								
							</div> </a>
						</div>
					</div>
					<div class="row-full clearfix">
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[55]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> <? echo $noticias[55]['titulo'];?></h5>
								
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[60]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i><? echo $noticias[60]['titulo'];?></h5>
								
							</div> </a>
						</div>

						<div class="brick2 odd">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[65]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> <? echo $noticias[65]['titulo'];?></h5>
								
							</div> </a>
						</div>

						<div class="brick2">
							<iframe src="http://player.vimeo.com/video/40689438?autoplay=0&api=1" width="400" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
						<div class="brick1 odd">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[70]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> <? echo $noticias[70]['titulo'];?></h5>
								
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[80]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> <? echo $noticias[80]['titulo'];?></h5>
								
							</div> </a>
						</div>
						<div class="brick2">
							<iframe src="http://player.vimeo.com/video/40689438?autoplay=0&api=1" width="400" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
						<div class="brick1 odd">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[82]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> <? echo $noticias[82]['titulo'];?></h5>
								
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="<? echo $noticias[90]['imagen'];?>" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i><? echo $noticias[90]['titulo'];?></h5>
								
							</div> </a>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- end Noticias -->
		
		
		<div id="about-us" class="section">
			<div class="container">
				<div class="hero">
					<h1>Cursos</h1>
					<p>
						
					</p>
				</div>
				<div class="row">
					<div class="span6">
						<h3>Extracurriculares</h3>
						<p>
							Praesent varius magna urna. Curabitur sed mi ut purus porttitor commodo. Cras adipiscing turpis a erat imperdiet iaculis non nec mauris. Vestibulum nec est nec urna porttitor egestas. Aliquam nibh elit, placerat ut aliquam eu, eleifend vitae erat.
						</p>
						<p>
							Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor. Maecenas scelerisque nibh nec eros mattis id suscipit sem viverra.
						</p>
					</div>
					
					<div class="span6">
						<h3>Idiomas</h3>
						<div class="progress">
							<div class="bar" data-width="60">
								<span>Funiture design</span>
							</div>
						</div>
						<div class="progress">
							<div class="bar" data-width="80">
								<span>Advice</span>
							</div>
						</div>
						<div class="progress">
							<div class="bar" data-width="70">
								<span>Construction</span>
							</div>
						</div>
						<div class="progress">
							<div class="bar" data-width="90">
								<span>Building design</span>
							</div>
						</div>
					</div>
				</div>
				
			<!--	<h3>our team member</h3>

				<div class="our-team row">
					<div class="span6">
						<div class="team">
							<div class="ava">
								<img src="assets/img/team1.png" alt="team 1">
							</div>
							<div class="info">
								<h4 class="name">Peter L.Marcus<small> - architect</small></h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut dui ante. In malesuada arcu metus, at pulvinar erat.
								</p>
							</div>
							<div class="social">
								<a href="live_menu.html#" class="facebook"><i class="icon-facebook"></i></a><a href="live_menu.html#" class="twitter"><i class="icon-twitter"></i></a><a href="live_menu.html#" class="gplus"><i class="icon-google-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="team">
							<div class="ava">
								<img src="assets/img/team2.png" alt="team 1">
							</div>
							<div class="info">
								<h4 class="name">Peter L.Marcus<small> - architect</small></h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut dui ante. In malesuada arcu metus, at pulvinar erat.
								</p>
							</div>
							<div class="social">
								<a href="live_menu.html#" class="facebook"><i class="icon-facebook"></i></a><a href="live_menu.html#" class="gplus"><i class="icon-google-plus"></i></a>
							</div>
						</div>
					</div>

				</div>
				<div class="our-team row">
					<div class="span6">
						<div class="team">
							<div class="ava">
								<img src="assets/img/team3.png" alt="team 1">
							</div>
							<div class="info">
								<h4 class="name">Peter L.Marcus<small> - architect</small></h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut dui ante. In malesuada arcu metus, at pulvinar erat.
								</p>
							</div>
							<div class="social">
								<a href="live_menu.html#" class="facebook"><i class="icon-facebook"></i></a><a href="live_menu.html#" class="linkedin"><i class="icon-linkedin"></i></a>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="team">
							<div class="ava">
								<img src="assets/img/team4.png" alt="team 1">
							</div>
							<div class="info">
								<h4 class="name">Peter L.Marcus<small> - architect</small></h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut dui ante. In malesuada arcu metus, at pulvinar erat.
								</p>
							</div>
							<div class="social">
								<a href="live_menu.html#" class="facebook"><i class="icon-facebook"></i></a><a href="live_menu.html#" class="gplus"><i class="icon-google-plus"></i></a>
							</div>
						</div>
					</div>

				</div--!>
			</div>
		</div>
		<!-- end Cursos  -->
		
		<!--paralaxs bar-->
		<div id="purchase" class="divider section">
			<div class="bg-holder">
				<div class="container">
					<div class="hero">
						<h1>great one page theme with possibilities and options</h1>
						<p>
							<button class="btn btn-large  " type="button">
								<div class="nav-hover"></div>
								Purchase now
							</button>
							<button class="btn btn-large btn-primary" type="button">
								<div class="nav-hover"></div>
								Learn more
							</button>
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<div id="services" class="section">
			<div class="container">
				<div class="hero">
					<h1>Comparte</h1>
					<p>
						Sabemos que quieres expresarte, este es un canal de comunicaci&oacute;n con  los miembros de la comunidad, muestranos tus proyectos
						,comparte tus puntos de vista, es tu espacio!!
					</p>
				</div>
				<div class="brow sev_list">
					<div class="brick2">
						<i class="li_pen"></i>
						<h2>crea</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt.
						</p>
					</div>
					<div class="brick2">
						<i class="li_lab"></i>
						<h2>Comunica</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt.
						</p>
					</div>
					<div class="brick2">
						<i class="li_settings"></i>
						<h2>Construye</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt.
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<!--end comparte!-->
		
		
		<div id="blog" class="section">
			<div class="container">
				<div class="hero">
					<h1>Blog</h1>
					<p>
						
					</p>
				</div>
				<div class="blog_container">
					<div class="row-full clearfix">
						<div class="brick2">
							<iframe src="http://player.vimeo.com/video/61996880?autoplay=0&api=1" width="400" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
						<div class="brick1 odd">
							<a href="blog.html" class="article"> <img src="assets/img/blog2.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="assets/img/blog1.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO</h5>
							</div> </a>
						</div>
						<div class="brick2">
							<a href="blog.html" class="article"> <img src="assets/img/blog3.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
								<p class="desc">
									Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
								</p>
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="assets/img/blog4.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
								<p class="desc">
									Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
								</p>
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="assets/img/blog5.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
								<p class="desc">
									Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
								</p>
							</div> </a>
						</div>
						<div class="brick2">
							<a href="blog.html" class="article"> <img src="assets/img/blog6.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
								<p class="desc">
									Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
								</p>
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="assets/img/blog7.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
								<p class="desc">
									Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
								</p>
							</div> </a>
						</div>
						<div class="brick1 odd">
							<a href="blog.html" class="article"> <img src="assets/img/blog8.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
								<p class="desc">
									Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
								</p>
							</div> </a>
						</div>
					</div>
					<div class="row-full clearfix">
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="assets/img/blog7.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
								<p class="desc">
									Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
								</p>
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="assets/img/blog5.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
								<p class="desc">
									Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
								</p>
							</div> </a>
						</div>

						<div class="brick2 odd">
							<a href="blog.html" class="article"> <img src="assets/img/blog6.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
								<p class="desc">
									Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
								</p>
							</div> </a>
						</div>

						<div class="brick2">
							<iframe src="http://player.vimeo.com/video/40689438?autoplay=0&api=1" width="400" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
						<div class="brick1 odd">
							<a href="blog.html" class="article"> <img src="assets/img/blog8.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
								<p class="desc">
									Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
								</p>
							</div> </a>
						</div>
						<div class="brick1">
							<a href="blog.html" class="article"> <img src="assets/img/blog7.png" alt="blog">
							<div class="meta">
								<h5><i class="icon-file-alt"></i> veniam, quis nostrud ARGO beautiful form ever</h5>
								<p class="desc">
									Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
								</p>
							</div> </a>
						</div>
						<div class="brick2">
							<iframe src="http://player.vimeo.com/video/40689438?autoplay=0&api=1" width="400" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
						<div class="brick1 odd"><img src="assets/img/blog2.png" alt="blog">
						</div>
						<div class="brick1"><img src="assets/img/blog1.png" alt="blog">
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- end blog -->
		
		
		<!--end paralax2!-->
		<div id="testimonial" class="divider section">
			<div class="bg-holder">
				<div class="container">

					<!-- Bootstrap carousel -->

					<div id="msgs" class="carousel slide" >
						<h3>Tweets</h3>
						<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="active item">
								<img class="thumbnail" src="assets/img/ava2.jpg" alt="">
								<div class="msg">
									<strong>@ArgoTheme</strong>
									<p>
										"ARGO did a great job with the layout of our website. It is easy to navigate and has a clean, modern appearance. Feedback was encouraged throughout the process, and emails were always answered in a timely .
										<br>

										We are very proud of our new website. It has much improved functionality and metrics. ARGO worked to make sure that we were happy with the end product."
									</p>
								</div>
							</div>
							<div class="item">
								<img class="thumbnail" src="assets/img/ava3.jpg" alt="">
								<div class="msg">
									<strong>Astro Galaxy</strong>
									<p>
										"We are very proud of our new website. It has much improved functionality and metrics. ARGO worked to make sure that we were happy with the end product."
									</p>
								</div>
							</div>
							<div class="item">
								<img class="thumbnail" src="assets/img/ava1.jpg" alt="">
								<div class="msg">
									<strong>Joe Doe</strong>
									<p>
										" It is easy to navigate and has a clean, modern appearance. Feedback was encouraged throughout the process, and emails were always answered in a timely."
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end paralax2!-->
		
		<!-- PORTAFOLIO
		<div id="portfolio" class="section">
			<div class="container">
				<div class="hero">
					<h1>PORTFOLIO</h1>
					<p>
						Check out our portfolio and click to see them.
					</p>
				</div>
				<ul class="filter clearfix">
					<li>
						<a href="live_menu.html#" class="active" data-filter="*">All</a>
					</li>
					<li>
						<a href="live_menu.html#" data-filter=".living">Living</a>
					</li>
					<li>
						<a href="live_menu.html#" data-filter=".kitchen">Kitchen</a>
					</li>
					<li>
						<a href="live_menu.html#" data-filter=".bath">Bath</a>
					</li>
					<li>
						<a href="live_menu.html#" data-filter=".bed">Bed</a>
					</li>
				</ul>
				
				<div id="modalbox" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						×
					</button>
					<div class="modal-body">
						<div id="myCarousel" class="carousel slide">
							<div class="carousel-inner">
								<div class="item active">
									<img src="assets/img/demo4.png" alt="">
								</div>
								<div class="item">
									<img src="assets/img/demo2.png" alt="">
								</div>
								<div class="item">
									<img src="assets/img/demo3.png" alt="">
								</div>
							</div>
							<a class="left carousel-control" href="live_menu.html#myCarousel" data-slide="prev">&lsaquo;</a>
							<a class="right carousel-control" href="live_menu.html#myCarousel" data-slide="next">&rsaquo;</a>
						</div>
						<h3>Argo project title living room</h3>
						<p>
							Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor.
						</p>
					</div>
					<div class="modal-footer"></div>
				</div>
				<ul class="isotope clearfix">
					<li class="item brick1 living kitchen">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf1.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>Coachcarter </h4>
							<p>
								Living
							</p>
						</div> </a>
					</li>
					<li class="item brick1 kitchen living">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf2.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>Great Sofa </h4>
							<p>
								Kitchen
							</p>
						</div> </a>
					</li>
					<li class="item brick1 bed">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf3.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>Monster bed</h4>
							<p>
								Bed
							</p>
						</div> </a>
					</li>
					<li class="item brick1 living bath bed">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf4.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>Coachcarter </h4>
							<p>
								Living
							</p>
						</div> </a>
					</li>
					<li class="item brick1 kitchen living">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf5.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>Illustration</h4>
							<p>
								Kitchen
							</p>
						</div> </a>
					</li>
					<li class="item brick1 bath living">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf6.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>King Kong</h4>
							<p>
								Bath
							</p>
						</div> </a>
					</li>
					<li class="item brick1 bed bath">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf7.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>King Kong</h4>
							<p>
								Bed
							</p>
						</div> </a>
					</li>
					<li class="item brick1 bath living kitchen">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf8.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>King Kong</h4>
							<p>
								Bed
							</p>
						</div> </a>
					</li>
					<li class="item brick1 living bath">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf9.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>King Kong</h4>
							<p>
								Bed
							</p>
						</div> </a>
					</li>
					<li class="item brick1 kitchen">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf10.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>CARNABY</h4>
							<p>
								Kitchen
							</p>
						</div> </a>
					</li>
					<li class="item brick1 bath">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf11.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>VIKING</h4>
							<p>
								Bath
							</p>
						</div> </a>
					</li>
					<li class="item brick1 living">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf12.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>BAVARIA</h4>
							<p>
								Living
							</p>
						</div> </a>
					</li>
					<li class="item brick1 bed">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf13.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>HARRIS</h4>
							<p>
								Bed
							</p>
						</div> </a>
					</li>
					<li class="item brick1 living bed">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf14.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>Cloud</h4>
							<p>
								Living
							</p>
						</div> </a>
					</li>
					<li class="item brick1 bed living">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf15.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>Mission</h4>
							<p>
								Bed
							</p>
						</div> </a>
					</li>
					<li class="item brick1 bath living">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf16.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>Pedro</h4>
							<p>
								Bath
							</p>
						</div> </a>
					</li>
					<li class="item brick1 living bath">
						<a href="live_menu.html#modalbox" data-toggle="modal"> <img src="assets/img/pf17.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>Agrippa</h4>
							<p>
								Living
							</p>
						</div> </a>
					</li>
					<li class="item brick1 kitchen">
						<a href="index.html#modalbox" data-toggle="modal"> <img src="assets/img/pf18.png" alt="Portfolio1">
						<div class="hover">
							<img src="assets/img/ico_search.png" alt="">
							<h4>Catch</h4>
							<p>
								Kitchen
							</p>
						</div> </a>
					</li>
				</ul>
			</div>
		</div>
		
		
		!-->
		
		
		

		
		<div id="contact" class="section">
			<div class="container">
				<div class="hero">
					<h1>Mapa</h1>
					<p>
						Encuentra las rutas y lugares a los lugares m&aacute;s relevantes en tu Facultad.
					</p>
				</div>
				
				
				<div class="map">
					<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Times+Square,+New+York,+NY,+United+States&aq=0&oq=time+s&sll=37.0625,-95.677068&sspn=38.41771,93.076172&ie=UTF8&hq=&hnear=Theater+District+-+Times+Square,+New+York&ll=40.759011,-73.984472&spn=0.010562,0.01282&t=m&iwloc=A&output=embed"></iframe>
					<br />
					<small><a href="http://www.google.com/maps?f=q&source=embed&hl=en&geocode=&q=Times+Square,+New+York,+NY,+United+States&aq=0&oq=time+s&sll=37.0625,-95.677068&sspn=38.41771,93.076172&ie=UTF8&hq=&hnear=Theater+District+-+Times+Square,+New+York&ll=40.759011,-73.984472&spn=0.010562,0.01282&t=m&iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small></iframe>

				</div>
				
				<div class="row">
					<div class="span6">
						<h3>Contactanos</h3>
						<ul>
							<li>
								Direcci&oacute;n: Av. Universidad, Coyoac&aacute;n. D.F
							</li>
							<li>
								T&eacute;lefono: 5523972332 - 5523387632
							</li>
							<li>
								Fax: 322323
							</li>
							<li>
								Email: contaco@polacasgrid.unam.mx
							</li>
						</ul>
						<div class="social">
							
							<a href="live_menu.html#" class="facebook"><i class="icon-facebook"></i></a><a href="live_menu.html#" class="linkedin"><i class="icon-linkedin"></i></a>
						</div>
					</div>
					<div class="span6">
						<h3>Dejanos un mensaje</h3>
						<form action="" id="comment_form" class="comment_form">
							<div class="row-fluid">
								<div class="span6">
									<input type="text" id="email" email="email" placeholder="Email*">
								</div>
								<div class="span6">
									<input type="text" id="name" name="name" placeholder="Nombre*">
								</div>
							</div>
							<div class="row-fluid">
								<div class="span8">
									<textarea name="txt_message" id="txt_message" placeholder="Mensaje*" cols="30" rows="10"></textarea>
								</div>
								<div class="span4">
									<button class="btn " type="button">
										<i class="li_paperplane"></i>Enviar Mensaje
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<footer id="footer">
			<div class="container">
				&copy; 2013 <a href="http://crash-development.com">Crash Development</a>. All rights resevered. Designed by <a href="http://themeforest.net/user/dzoan">DZOAN</a> </a>
			</div>
			<a href="index.html#" id="btn_up">home</a>
		</footer>
		<!-- Bootstrap js -->
		<script src="assets/js/bootstrap-transition.js"></script>
		<script src="assets/js/bootstrap-modal.js"></script>
		<script src="assets/js/bootstrap-dropdown.js"></script>
		<script src="assets/js/bootstrap-carousel.js"></script>
		<script src="assets/js/bootstrap-collapse.js"></script>
		<script src="assets/js/bootstrap-scrollspy.js"></script>

		<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="assets/js/jquery.hoverdir.js"></script>
		<script src="assets/js/jquery.isotope.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script>Noticias
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-39747127-1', 'themestrong.com');
			ga('send', 'pageview');

		</script>
	</body>
</html>
