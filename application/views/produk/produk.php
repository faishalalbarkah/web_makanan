	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner" style="height: 510px;">
	    <div class="carousel-item active">
	      <img src="<?php echo base_url(); ?>asset/images/slider1.jpg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url(); ?>asset/images/slider2.jpg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url(); ?>asset/images/slider3.jpg" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	
	<!--/Menu-->
	<section class="banner-bottom menu" id="menu">
		<div class="container">
			<h3 class="tittle">Menu</h3>
			<div class="row inner-sec">
				<div class="tabs">
					<ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
							    aria-selected="true">Nasi Box</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
							    aria-selected="false">Snack Box</a>
						</li>
						<li class="nav-item">
							<a class="nav-link pasif" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about"
							    aria-selected="false true">Cake</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="menu-grids my-lg-4 my-md-2">
								<div class="row inner-menu mt-4">
								<?php foreach($Nasi_Box as $row) { ?>
									<div class="col-md-6 menu-grid" data-aos="fade-down">
										<div class="row mt-2">
											<div class="col-md-5 menu-img">
												<img src="<?php echo base_url(); ?>asset/images/<?php echo $row["image_makanan"]; ?>" class="img-fluid rounded-circle" alt="">
											</div>
											<div class="col-md-7 menu-img-info mt-4 mt-md-2">
												<h5><?php echo $row["nama_makanan"] ?></h5>
												<p class="sub-meta mt-2">

													<?php echo $row["harga_makanan"] ?>
												</p>
											</div>
										</div>
									</div>
								<?php } ?>	
								</div>
							</div>
						</div>
						</div>
						<!-- end -->
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="menu-grids my-lg-4 my-md-2">
									<div class="row inner-menu mt-4">
								<?php foreach($Snack_Box as $row) { ?>
									<div class="col-md-6 menu-grid-left" data-aos="fade-down">
										<div class="row mt-2">
											<div class="col-md-5 menu-img">
												<img src="<?php echo base_url(); ?>asset/images/<?php echo $row["image_makanan"]; ?>" class="img-fluid rounded-circle" alt="">
											</div>
											<div class="col-md-7 menu-img-info mt-4 mt-md-2">
												<h5><?php echo $row["nama_makanan"] ?></h5>
												<p class="sub-meta mt-2">
													<?php echo $row["harga_makanan"] ?>
												</p>
											</div>
										</div>
									</div>
								<?php } ?>
								</div>
							</div>
						</div>

						<!-- end -->

						<div class="tab-pane fade" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
							<div class="menu-grids my-lg-4 my-md-2">
									<div class="row inner-menu mt-4">
								<?php foreach($Cake as $data) { ?>
									<div class="col-md-6 menu-grid-" data-aos="fade-down">
										<div class="row mt-2">
											<div class="col-md-5 menu-img">
												<img src="<?php echo base_url(); ?>asset/images/<?php echo $data["image_makanan"]; ?>" class="img-fluid rounded-circle" alt="">
											</div>
											<div class="col-md-7 menu-img-info mt-4 mt-md-2">
												<h5><?php echo $data["nama_makanan"] ?></h5>
												<p class="sub-meta mt-2">

													<?php echo $data["harga_makanan"] ?>
												</p>
											</div>
										</div>
									</div>
								<?php } ?>
								</div>
							</div>
						</div>
						<!-- end -->
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//Menu-->

	<!--/banner-bottom-->
	<section class="grid-info-section">
		<div class="container">
			<h3 class="tittle">New Product</h3>
			<div class="row inner-sec">
				<ul id="flexiselDemo1">
					<?php foreach ($image_makanan as $data ) { ?>
					<li>
						<div class="blog-item text-center">
							<img src="<?php echo base_url(); ?>asset/images/<?php echo $data["image_makanan"]; ?>" alt=" " class="img-fluid rounded-circle" style="height: 200px; width: 200px;" />
							<div class="floods-text">
								<!-- <h3>Item 1</h3> -->

							</div>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</section>
	<!--//banner-bottom-->
	
	<!--/blog-->
	<section class="blog_sec container-fluid">
		<h3 class="tittle">Latest Blogs</h3>
		<div class="row inner-sec">
			<?php foreach($blogss as $data) { ?>
			<div class="col-md-6 banner-btm">
				<div class="banner-btm-top" style="height: 450px;">
					<div class="banner-btm-inner a1 text-left" style="height: 378px;">
						<div class="blog_date">

							<h4><?php echo $data["create_date"] ?></h4>

						</div>
						<h6>
							<a href="single.html"><?php echo $data["nama_blog"] ?></a>
						</h6>
						<p class="paragraph"><?php echo $data["keterangan_blog"] ?></p>

						<a href="single.html" class="blog-btn" data-aos="fade-down">Know More</a>
					</div>
					<div class="banner-btm-inner">
						<img src="<?php echo base_url(); ?>asset/images/<?php echo $data["image_blog"]; ?>" alt=" " class="img-fluid rounded-circle"/>
					</div>
				</div>
			
				<!-- <div class="banner-btm-bottom">
					<div class="banner-btm-inner a3">

					</div>
					<div class="banner-btm-inner a4 text-left">
						<div class="blog_date">

							<h4>Feb.18.2018</h4>

						</div>
						<h6>
							<a href="single.html">Malted wheat flake bread</a>
						</h6>
						<p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>

						<a href="single.html" class="blog-btn" data-aos="fade-down">Know More</a>
					</div>
				</div> -->
			</div>
			<?php } ?>
			<!-- <div class="col-lg-6 banner-btm-left">
				<div class="banner-btm-top">
					<div class="banner-btm-inner a1 text-left">
						<div class="blog_date">

							<h4>Mar.25.2018</h4>

						</div>
						<h6>
							<a href="single.html">Malted wheat flake bread</a>
						</h6>
						<p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>

						<a href="single.html" class="blog-btn" data-aos="fade-down">Know More</a>
					</div>
					<div class="banner-btm-inner a5">

					</div>
				</div>
				<div class="banner-btm-bottom">
					<div class="banner-btm-inner a6">

					</div>
					<div class="banner-btm-inner a4 text-left">
						<div class="blog_date">

							<h4>Mar.30.2018</h4>

						</div>
						<h6>
							<a href="single.html">Malted wheat flake bread</a>
						</h6>
						<p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>

						<a href="single.html" class="blog-btn" data-aos="fade-down">Know More</a>
					</div>
				</div>
			</div> -->

		</div>
	</section>
	<!--//blog-->
	<!--/Gallry-->
	<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">Our Gallery</h3>
			<div class="row inner-sec">

				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/p1.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?php echo base_url(); ?>asset/images/p1.jpg" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<h3>Baked Food</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/p2.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?php echo base_url(); ?>asset/images/p2.jpg" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<h3>Baked Food</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>

				</div>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/p4.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?php echo base_url(); ?>asset/images/p4.jpg" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<h3>Baked Food</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/p5.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?php echo base_url(); ?>asset/images/p5.jpg" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<h3>Baked Food</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>

				</div>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/p3.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?php echo base_url(); ?>asset/images/p3.jpg" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<h3>Baked Food</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/p2.jpg">
							<div class="section_1_gallery_grid1">
								<img src="<?php echo base_url(); ?>asset/images/p2.jpg" alt=" " class="img-fluid" />
								<div class="proj_gallery_grid1_pos">
									<h3>Baked Food</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--//gallery-->
	<!--reviews_sec-->
	<!-- <section class="banner-bottom reviews_sec">
		<div class="container">
			<h3 class="tittle cen">Testimonial</h3>
			<div class="inner-sec">
				<div class="flexslider mx-auto">
					<ul class="slides">
						<li>
							<div class="row">
								<div class="col-md-3 testimonials_grid-inn">

									<img src="<?php echo base_url(); ?>asset/images/t1.jpg" alt=" " class="img-fluid" />
								</div>
								<div class="col-md-9 testimonials_grid text-left">
									<h3>Gretchen
										<span>(Customer)</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor,Proin eget gravida odio. Donec ullamcorper est eu magna quam
										egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-md-3 testimonials_grid-inn">

									<img src="<?php echo base_url(); ?>asset/images/t2.jpg" alt=" " class="img-fluid" />
								</div>
								<div class="col-md-9 testimonials_grid text-left">
									<h3>Josephine Lee
										<span>Customer</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor,Proin eget gravida odio. Donec ullamcorper est eu magna quam
										egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-md-3 testimonials_grid-inn">


									<img src="<?php echo base_url(); ?>asset/images/t1.jpg" alt=" " class="img-fluid" />
								</div>
								<div class="col-md-9 testimonials_grid text-left">
									<h3>Mark Olson
										<span>Customer</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor,Proin eget gravida odio. Donec ullamcorper est eu magna quam
										egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section> -->