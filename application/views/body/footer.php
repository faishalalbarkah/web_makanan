<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid text-left" data-aos="fade-right">
					<h3>Store <span>Information</span></h3>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true" style="color: white;"></i>
							</div>
							<div class="w3-address-right" style="color: white;">
								<h6>Phone Number</h6>
								<p>0859 2131 1291</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true" style="color: white;"></i>
							</div>
							<div class="w3-address-right" style="color: white;">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:example@email.com">haryaticookies@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true" style="color: white;"></i>
							</div>
							<div class="w3-address-right" style="color: white;">
								<h6>Location</h6>
								<p>Citra Raya, Graha Segovia S.35/08</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- subscribe -->
				<div class="col-lg-8 subscribe-main footer-grid text-left" data-aos="fade-left">
					<h2>Subscribe for hot updates</h2>
					<div class="subscribe-main text-left">
						<div class="subscribe-form">
							<form action="#" method="post" class="subscribe_form">
								<input class="form-control" type="email" placeholder="Enter your email..." required="">
								<button type="submit" class="btn btn-primary submit">Submit</button>
							</form>

						</div>
						<p>We respect your privacy.No spam ever!</p>
					</div>
					<!-- //subscribe -->
					<div class="footer-cpy text-left">
						<div class="copyrighttop">
							<ul>
								<li class="mx-lg-3 mx-md-2 mx-1">
									<a class="facebook" href="#">
										<i class="fab fa-facebook-f"></i>
										<span>Facebook</span>
									</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-twitter"></i>
										<span>Twitter</span>
									</a>
								</li>
								<li class="mx-lg-3 mx-md-2 mx-1">
									<a class="facebook" href="#">
										<i class="fab fa-google-plus-g"></i>
										<span>Google+</span>
									</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-pinterest-p"></i>
										<span>Pinterest</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="copyrightbottom">
							<p>© 2018 Baked. All Rights Reserved | Design by
								<a href="http://w3layouts.com/">W3layouts</a>
							</p>

						</div>
					</div>
				</div>
			</div>
			<!-- //footer -->
		</div>
	</footer>
	<!---->

	<!-- js -->
	
	<!-- //js -->
	<!-- /flexisel -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<script src="<?php echo base_url(); ?>/asset/js/jquery.flexisel.js"></script>
	<!-- //flexisel -->
	<!-- flexSlider -->
	<script defer src="<?php echo base_url(); ?>/asset/js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>

	<!-- //flexSlider -->

	<!-- simpleLightbox -->
	<script src="<?php echo base_url(); ?>/asset/js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
	<!-- /js files -->
	<link href='<?php echo base_url(); ?>/asset/css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<link href='<?php echo base_url(); ?>/asset/css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<script src='<?php echo base_url(); ?>/asset/js/aos.js'></script>
	<script src="<?php echo base_url(); ?>/asset/js/aosindex.js"></script>
	<!-- //js files -->
	<!--/ start-smoth-scrolling -->
	<script src="<?php echo base_url(); ?>/asset/js/move-top.js"></script>
	<script src="<?php echo base_url(); ?>/asset/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //Custom-JavaScript-File-Links -->
	<script src="<?php echo base_url(); ?>/asset/js/bootstrap.js"></script>
	<script src='<?php echo base_url(); ?>/asset/js/aos.js'></script>
	<script src="<?php echo base_url(); ?>/asset/js/aosindex.js"></script>
	<script src="<?php echo base_url(); ?>/asset/js/move-top.js"></script>
	<script src="<?php echo base_url(); ?>/asset/js/easing.js"></script>
	<script src="<?php echo base_url(); ?>/asset/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/sweetalert2.all.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/dataflas.js"></script>

	<link href='<?php echo base_url(); ?>/asset/css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<link href='<?php echo base_url(); ?>/asset/css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
</body>

</html>