
	</div>
	<!--//nav-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="">Home</a>
		</li>
		<li class="breadcrumb-item active">Signin</li>
	</ol>
	<!--/main-->
	<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">Register Now</h3>
			<div class="inner-sec">
				<div class="login p-5 bg-dark mx-auto mw-100">
					 <style>
			            .merah{color: red; font-size: 10px;}
			          </style>
					<form action="<?php echo base_url() ?>Auth/Registrasi" method="post" name="frmCO" id="frmCO">
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationCustom01">Username</label>
								<input type="text" class="form-control" id="username" name="username_customer" placeholder="Masukan Username" required="">
								<div class="merah"><?php echo form_error('username_customer'); ?></div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationCustom02">Email</label>
								<input type="email" class="form-control" id="email" name="email_customer" placeholder="Masukan Email" required="">
								<div class="merah"><?php echo form_error('email_customer'); ?></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="exampleInputPassword1 mb-2">Password</label>
								<input type="password" class="form-control" id="password" name="password_customer" placeholder="Masukan Password" required="">
								<div class="merah"><?php echo form_error('password_customer'); ?></div>
							</div>
							<div class="form-group col-md-6">
								<label for="exampleInputPassword1 mb-2">Phone</label>
								<input type="number" class="form-control" id="nophone" name="phone_customer" placeholder="Masukan Nomor HP" required="">
								<div class="merah"><?php echo form_error('phone_customer'); ?></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
				                <label for="exampleInputEmail1">Provinsi</label>
				                <select class="form-control" name="input_provinsi">
				                     <option value=''>- Pilih -</option>
				                    <?php foreach ($ambilprov as $row) { ?>
				                     <option><?php echo $row["nama_propinsi"]; ?></option>
				                    <?php } ?>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label for="exampleInputPassword1 mb-2">Name</label>
								<input type="text" class="form-control" id="name" name="name_customer" placeholder="Masukan Nama Anda" required="">
								<div class="merah"><?php echo form_error('name_customer'); ?></div>
							</div>
						</div>

						<div class="form-group col-md-12" >
		                  	<label for="exampleInputEmail1">Alamat</label>
				                <textarea class="form-control" rows="3" name="address_customer" placeholder="Masukan Alamat"></textarea>
				            <div class="merah"><?php echo form_error('address_customer'); ?></div>
		              	</div>
		              <div>
						<button type="submit" class="btn btn-primary submit mb-4" value="simpan" name="submit">Register
						</button>
					</div>
					</form>

				</div>
			</div>
		</div>
	</section>
	<!--//main-->
	
	<!---->
	<!-- js -->
	<!-- <script src="/asset/js/jquery-2.2.3.min.js"></script> -->
	<!-- //js -->
	<!-- password-script -->
	<!-- <script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script> -->
	<!-- //password-script -->
    <!-- /js files -->
	
	<!-- //js files -->
	<!--/ start-smoth-scrolling -->
	
	<!-- <script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script> -->
	<!--// end-smoth-scrolling -->

	<!-- <script>
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
	</script> -->
	<!-- <a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
 -->
	<!-- //Custom-JavaScript-File-Links -->
	


</body>

</html>