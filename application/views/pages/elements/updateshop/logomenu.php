<div class="col-lg-12 logo-wrapper" style="margin-left: 35px;">
	<div class="logo-box">
		<img src="<?php echo base_url(); ?>assets/nhamdis/img/new2.jpg"
			class="logo-img" /> <i class="fa fa-camera" aria-hidden="true"></i>
		<div class="edit-logo"></div>
		<div class="edit-logo-button-wrapper">
			<p class="intro-text"
				style="padding-top: 13px; line-height: 20px; padding-left: 70px;">Click
				To</p>
			<p class="intro-text" style="line-height: 0px; padding-left: 80px;">Update
				Logo</p>
		</div>
	</div>
	<div class="shop-name">
		<h3 class="big-shop-name-text">Khmerload</h3>
		<p class="shop-name-extra-text">( @the best munich )</p>
	</div>
	<div class="menu-wrapper">
		<ul class="menu-ul">
			<!--  <li class="item">
				<form action="http://localhost:9090/NhameyWebBackEnd/MainController/updateshop/overview" method="post">
					<input type="hidden" name="shopid" value=""/>
					<a href="javascript:;">Overview</a>
				</form>				
			</li>
			<li class="item">
				<form action="http://localhost:9090/NhameyWebBackEnd/MainController/updateshop/inforamtion" method="post">
					<input type="hidden" name="shopid" value=""/>
					<a href="javascript:;">Inforamtion</a>
				</form>							
			</li>
			<li class="item">				
				<form action="http://localhost:9090/NhameyWebBackEnd/MainController/updateshop/photo" method="post">
					<input type="hidden" name="shopid" value=""/>
					<a href="javascript:;">Photo</a>
				</form>	
			</li>
			<li class="item">
				<form action="http://localhost:9090/NhameyWebBackEnd/MainController/updateshop/product" method="post">
					<input type="hidden" name="shopid" value=""/>
					<a href="javascript:;">Product</a>
				</form>				
			</li>
			<li class="item">
				<form action="http://localhost:9090/NhameyWebBackEnd/MainController/updateshop/map" method="post">
					<input type="hidden" name="shopid" value=""/>
					<a href="javascript:;">Map</a>
				</form>	
				
			</li>-->
			
			<li class="item"><a href="<?php echo base_url(); ?>MainController/updateshop/overview/<?php echo $shopid ?>">Overview</a></li>
			<li class="item"><a href="<?php echo base_url(); ?>MainController/updateshop/information/<?php echo $shopid ?>">Inforamtion</a></li>
			<li class="item"><a href="<?php echo base_url(); ?>MainController/updateshop/photo/<?php echo $shopid ?>">Photo</a></li>
			<li class="item"><a href="<?php echo base_url(); ?>MainController/updateshop/product/<?php echo $shopid ?>">Product</a></li>
			<li class="item"><a href="<?php echo base_url(); ?>MainController/updateshop/location/<?php echo $shopid ?>">Location</a></li>
		</ul>
	</div>
</div>
<div style="clear: both;"></div>