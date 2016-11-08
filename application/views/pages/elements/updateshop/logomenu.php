

<div class="col-lg-12 logo-wrapper" style="margin-left: 35px;">
	<div class="logo-box">
		<img  id="logo-image-display" src="<?php echo base_url(); ?>uploadimages/logo/medium/<?php echo $shop_logo ?>"
			class="logo-img" /> <i class="fa fa-camera" id="edit-logo-pop-up" aria-hidden="true"></i>
		<div class="edit-logo"></div>
		<div class="edit-logo-button-wrapper" id="edit-logo-button-wrapper">
			<p class="intro-text"
				style="padding-top: 13px; line-height: 20px; padding-left: 70px;">Click
				To</p>
			<p class="intro-text" style="line-height: 0px; padding-left: 80px;">Update
				Logo</p>
		</div>
	</div>
	<div class="shop-name">
		<h3 class="big-shop-name-text"><?php echo $shop_name_en ?></h3>
		<p class="shop-name-extra-text"> <?php if($shop_name_kh) echo "( ".$shop_name_kh. " )" ?> </p>
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
			
			<li class="item">
				<input type="hidden" value="updateshop_overview" />
				<a href="javascript:;">Overview</a>
			</li>
			<li class="item">
				<input type="hidden" value="updateshop_information" />
				<a href="javascript:;">Inforamtion</a>
			</li>
			<li class="item">
				<input type="hidden" value="updateshop_photo" />
				<a href="javascript:;">Photo</a>
			</li>
			<li class="item">
				<input type="hidden" value="updateshop_product" />
				<a href="javascript:;">Product</a>
			</li>
			<li class="item">
				<input type="hidden" value="updateshop_location" />
				<a href="javascript:;">Location</a>
			</li>
		</ul>
	</div>
</div>
<div style="clear: both;"></div>
