
<div class="banner-inner">
</div>
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="index.html">Home</a>
	</li>
	<li class="breadcrumb-item active">Menu</li>
</ol>
<div class="men-fashions">
	 <div class="container">		
		 <div class="col-md-12 fashions">
			 <div class="title">
				 <h3>TOPS - TITLE</h3>
			 </div>
			 <div class="fashion-section">
				<div class="fashion-grid1">
				<?php foreach($tampilnasi as $data) { ?>
					<div class="col-md-4 fashion-grid">
						 <a href="single.html"><img src="<?php echo base_url(); ?>asset/images/<?php echo $data["image_makanan"]; ?>" alt=""/>
							 <div class="product">
								 <h3><?php echo $data["nama_makanan"] ?></h3>
								 <p><span></span><?php echo $data["harga_makanan"] ?></p>								 
							 </div>							 
						 </a>
						 <div class="fashion-view"><span></span>
									<div class="clearfix"></div>
								 <h4><a href="single.html">Quick View</a></h4>
						 </div>
					</div>
				<?php } ?>
				<div class="pagination">
					<?php echo $this->pagination->create_links(); ?>
				</div>
				 </div>
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>

</body>
</html>
		