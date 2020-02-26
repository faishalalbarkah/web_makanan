
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<!--//banner-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo base_url(); ?>Home/index">Home</a>
		</li>
		<li class="breadcrumb-item active" style="margin-left: -1172px;">Contact Us</li>
	</ol>
	<!--/main-->
	<section class="banner-bottom">

		<h3 class="tittle">Contact Us</h3>
		<div class="contact-map inner-sec">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.005218414566!2d106.5251614719827!3d-6.263041629516101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e420779651c58ad%3A0x8099c3d8e43cd3ed!2sGRAHA%20SEGOVIA!5e0!3m2!1sid!2sid!4v1576577025623!5m2!1sid!2sid"
			    class="map" style="border:0" allowfullscreen=""></iframe>
		</div>
		<div class="ad-inf-sec">
			<div class="container">
				<div class="address row">

					<div class="col-lg-4 address-grid" data-aos="zoom-in">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Address</h6>
								<p> Citra Raya, Graha Segovia S.35/08</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid" data-aos="zoom-in">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:faisalalbarkah04@gmail.com"> haryaticookies@gmail.com</a>

								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid" data-aos="zoom-in">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Phone</h6>
								<p>0859 2131 1291</p>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<p class="sub text-center">Kritik & Saran</p>
				<div class="contact_grid_right">
					<form action="<?php echo base_url() ?>contact_contro/simpankritik" method="post">
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group" data-aos="fade-down">
									<label for="validationCustom01 my-2">Name</label>
									<input class="form-control" type="text" disabled="" name="username_customer" placeholder="" required="" value="<?php echo $this->session->userdata('username_customer') ?>">
								</div>
								<div class="form-group" data-aos="fade-down">
									<label for="exampleFormControlInput1">Email</label>
									<input class="form-control" type="email" disabled="" name="email_customer" placeholder="" required="" value="<?php echo $this->session->userdata("email_customer") ?>">
								</div>
								<div class="form-group" data-aos="fade-down">
									<label for="validationCustom03 my-2">Subject</label>
									<input class="form-control" type="text" name="subject" placeholder="" required="">
								</div>
							</div>
							<div class="col-md-6 con-right">
								<div class="form-group" data-aos="fade-down">
									<label for="textarea">Message</label>
									<textarea id="textarea" name="message" placeholder=""></textarea>
								</div>
								<input class="form-control" type="submit" value="Submit">

							</div>
						</div>
					</form>
				</div>
		</div>
	</section>
	<!--//main-->

</body>

</html>