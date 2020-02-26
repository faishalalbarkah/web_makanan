<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->


	<!--/banner-->
	<div class="banner-inner">
	</div>
	<!--//banner-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active">Signin</li>
	</ol>
	<!--/main-->
	<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">Sign In Now</h3>
			<div class="row inner-sec">
				<div class="login p-5 bg-dark mx-auto mw-100">
					<form action="<?php echo base_url(); ?>Auth/loginSubmit" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1 mb-2">Username</label>
							<input type="text" class="form-control" name="username_customer" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1 mb-2">Password</label>
							<input type="password" class="form-control" name="password_customer" id="exampleInputPassword1" placeholder="" required="">
						</div>
						<!-- <div class="form-check mb-2">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1"> Check me out</label>
						</div> -->
						<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
						<p>
							<a href="register.html"> Don't have an account?</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--//main-->
	

</body>

</html>