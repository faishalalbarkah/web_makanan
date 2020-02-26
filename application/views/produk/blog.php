	<!--/banner-->
	<div class="banner-inner">
	</div>
	<!--//banner-->
	<!--/nav-->

	<!--//nav-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo base_url(); ?>Home/index">Home</a>
		</li>
		<li class="breadcrumb-item active">Blogs</li>
	</ol>
	<!--/main-->
	<section class="blog_sec container-fluid">
		<h3 class="tittle">Latest Blogs</h3>
		<div class="row inner-sec">
			<?php foreach($blogsss as $data) { ?>
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
	<!--//main-->


</body>

</html>