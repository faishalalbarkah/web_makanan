<!DOCTYPE html>
<html lang="zxx">

<head>
	<link rel="icon" href="<?php echo base_url(); ?>asset/images/HC.jpg">
	<title>Snack & Cake</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Baked a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="<?php echo base_url(); ?>asset/css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url(); ?>asset/css/fontawesome-all.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>asset/css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url(); ?>asset///fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="<?php echo base_url(); ?>asset///fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
	<link href="<?php echo base_url(); ?>asset/css/bootstrap1.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url(); ?>asset/css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url(); ?>asset///fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
	<link href="<?php echo base_url(); ?>asset/css/contact.css" rel='stylesheet' type='text/css' />
	<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
  <script async data-id="24534" src="https://cdn.widgetwhats.com/script.min.js"></script>
  

</head>

<body>
	<!--/banner-->
	<header>
		<div class="top-bar_sub container-fluid">
			<div class="row">
				<!-- <style type="text/css">
					.warna{color:green;}
				</style> -->
						<div class="col-md-4 top-forms text-left mt-4"  data-aos="fade-up">
						<?php 
							if(!$this->session->has_userdata('username_customer')){
								echo '<span class="mx-lg-4 mx-md-2  mx-1">
									<a href="'. base_url(). 'Auth/Profile">
										<i class="fas fa-lock"></i> Sign In</a>
								</span>
								<span>
									<a href="'.  base_url() . 'Auth/Registrasi">
										<i class="far fa-user"></i> Register</a>
								</span>';
							}else{
								echo '<a>';
								echo '<i class="far fa-user"></i> &nbsp;';
								echo $this->session->userdata("username_customer");
								echo '<a> 
									<a href="' . base_url() . 'Auth/Profile"><i></i> &nbsp;Profile</a> &nbsp;
									
									<a href="' . base_url() . 'Auth/Logout"><i></i>Logout</a>
				
								</a>';
							}
						?>
						</div>
						<div class="col-md-4 logo text-center" data-aos="fade-up">
							<div class="navbar-brand">
								<img src="<?php echo base_url(); ?>asset/images/Logo.jpg">
							</div>
						</div>
				
				<div class="col-md-4 log-icons text-right"  data-aos="fade-up">

					<ul class="social_list1 mt-4">

						<li>
							<a href="#" class="facebook1 mx-2">
								<i class="fab fa-facebook-f"></i>

							</a>
						</li>
						<li>
							<a href="#" class="twitter2">
								<i class="fab fa-twitter"></i>

							</a>
						</li>
						<li>
							<a href="#" class="dribble3 mx-2">
								<i class="fab fa-dribbble"></i>
							</a>
						</li>
						<li>
							<a href="#" class="pin">
								<i class="fab fa-pinterest-p"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

	<?php if ($this->session->flashdata('flash') ) : ?>

	<?php endif; ?>
	
	<div class="header_top" id="home">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item ">
						<a class="nav-link" href="<?php echo base_url(); ?>Home/index">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>Home/about">About</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						    aria-expanded="false">
							Menu
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#"></a>
						<?php foreach($nasibox as $data) { ?>
							<a class="dropdown-item" href="<?php echo base_url(); ?>kategori_menu/<?php echo $data["menu_makanan"]; ?>"><?php echo $data['menu_makanan']; ?></a>
						<?php } ?>

							<!-- <div class="dropdown-divider"></div>
							<a class="dropdown-item" href="404.html">Snack Box</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="404.html">Cake</a> -->

						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>blog_contro/blogindex">Blog</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>Home/contact">Contact</a>
					</li>

				</ul>
			</div>
		</nav>

	</div>
	

	<!-- end -->

	