<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>update shop location | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop-input.css" />
 	
  <style>
  	
 
  div.map-show-box{
  	height: 50px;
  	background: #f6f7f9;
  	border-right:1px solid #E0E0E0;
  }

	 	.shop-event-wrapper{
	 		min-height:600px;
	 		background: #fff;
	 	}
	 	
	 	div.disable-google-map{
	 		width: 100%;
	 		height: 100%;
	 		background: gray;
	 		top: 0;
	 		left: 0;
	 		position: absolute;
	 		opacity: 0.2;
	 	}
	 	
	 	div.location-point{
	 		width: 95% ;
	 	}
	 	
	 	label.input-head-text{
	 		
	 		color: #aeb1b8;
	 	}
	 	
	 	@media screen and (max-width: 768px) {
			div.location-point{
	 			width: 100% !important;
	 		}
		}

  </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    
    <input type="hidden" id="shop_id" value="<?php echo $shop_id ?>"/>
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
    <div class="shop-event-wrapper">	
	
	   <div  class="tab-wrapper">	       	 						       	 						       	 					
		  <div  id="map">	       	 				
		      <div class="tab-header col-lg-12">
		       	 <p class="tab-intro-text">	<i class="fa fa-map-marker" aria-hidden="true"></i><span>Location</span></p>
	
		      </div>
		      <div class="tab-body col-lg-12">
		       	 <div class="row">	
		       	 
		       	 	 <div class="col-lg-6 col-sm-6" >
		       	 	 	<div class="row">
		       	 			<div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">COUNTRY</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap" id="shop-country"></p>
					       	 				</div>
					       	 				<div class="div-right" >
					       	 					<div class="shop-info-edit-btn pull-right">
					       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
					       	 					</div>
					       	 					<div class="shop-update-loading pull-right">
			       	 								<img  class="pull-right update-loading-data" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
			       	 							</div>
					       	 				</div>
					       	 				<div style="clear:both;"></div>	
				       	 				</div>			       	 				
				       	 				<div style="clear:both;"></div>				       	 				
				       	 				<div class="save-shop-info-box">			       	 				
				       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
				       	 						<div class="row">
				       	 						     <select class="form-control nham-control  select2" id="nham_country" style="width: 100%; border-radius: 0!important;">						                      	
						               				 </select>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="shop_serve_type"/>
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		  </div>
			       	 		  
			       	 		  <div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">CITY</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap" id="shop-city">Phnom Penh</p>
					       	 				</div>
					       	 				<div class="div-right" >
					       	 					<div class="shop-info-edit-btn pull-right">
					       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
					       	 					</div>
					       	 					<div class="shop-update-loading pull-right">
			       	 								<img  class="pull-right update-loading-data" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
			       	 							</div>
					       	 				</div>
					       	 				<div style="clear:both;"></div>	
				       	 				</div>			       	 				
				       	 				<div style="clear:both;"></div>				       	 				
				       	 				<div class="save-shop-info-box">			       	 				
				       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
				       	 						<div class="row">
				       	 						    <select class="form-control nham-control  select2" id="nham_city"  style="width: 100%; border-radius: 0!important;">						                    	
						                  			</select>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="shop_serve_type"/>
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		  </div>	 	
		       	 	 	</div>
		       	 	 </div>
		       	 	 <div class="col-lg-6 col-sm-6">
		       	 	 	<div class="row">
			       	 	 	<div class="col-lg-12 col-sm-12 update-info-box">
					       	 	<p class="update-title">DISTRICT</p>
					       	 	<div class="shop-info-wrapper">			       	 			
					       	 		<div class="info-edit-wrapper">
						       	 		<div class="div-left">
						       	 			<p class="shop-info wordwrap" id="shop-district">Cambodia</p>
						       	 		</div>
						       	 		<div class="div-right" >
						       	 			<div class="shop-info-edit-btn pull-right">
						       	 				<i class="fa fa-pencil" aria-hidden="true"></i>
						       	 			</div>
						       	 			<div class="shop-update-loading pull-right">
			       	 							<img  class="pull-right update-loading-data" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
			       	 						</div>
						       	 			
						       	 		</div>
						       	 		<div style="clear:both;"></div>	
					       	 		</div>			       	 				
					       	 		<div style="clear:both;"></div>				       	 				
					       	 		<div class="save-shop-info-box">			       	 				
					       	 			<div class="col-lg-12 col-sm-12 input-wrapper">	
					       	 				<div class="row">
					       	 					<select class="form-control nham-control  select2" id="nham_district"  style="width: 100%; border-radius: 0!important;">						                    	
						                 		</select>
					       	 				</div>				                							                    	
							            </div>
							            <div class="col-lg-12 col-sm-12 save-btn-wrapper">
							                 <div class="row pull-right">
							                  	 <input type="hidden" class="update-param" value="shop_serve_type"/>
							                  	 <img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
							                  	 <button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
							                  </div>
							             </div>
							             <div style="clear:both;"></div>
					       	 		</div>		       	 							       	 				
					       	 	</div>				       	 							       	 			
				       	 	</div>
				       	 	<div class="col-lg-12 col-sm-12 update-info-box">
					       	 	<p class="update-title">COMMUNE</p>
					       	 	<div class="shop-info-wrapper">			       	 			
					       	 		<div class="info-edit-wrapper">
						       	 		<div class="div-left">
						       	 			<p class="shop-info wordwrap" id="shop-commune">Cambodia</p>
						       	 		</div>
						       	 		<div class="div-right" >
						       	 			<div class="shop-info-edit-btn pull-right">
						       	 				<i class="fa fa-pencil" aria-hidden="true"></i>
						       	 			</div>
						       	 			<div class="shop-update-loading pull-right">
			       	 							<img  class="pull-right update-loading-data" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
			       	 						</div>
						       	 		</div>
						       	 		<div style="clear:both;"></div>	
					       	 		</div>			       	 				
					       	 		<div style="clear:both;"></div>				       	 				
					       	 		<div class="save-shop-info-box">			       	 				
					       	 			<div class="col-lg-12 col-sm-12 input-wrapper">	
					       	 				<div class="row">
					       	 					 <select class="form-control nham-control select2" id="nham_commune"  style="width: 100%; border-radius: 0!important;">						       	 						                    	
						                   		 </select>	
					       	 				</div>				                							                    	
							            </div>
							            <div class="col-lg-12 col-sm-12 save-btn-wrapper">
							                 <div class="row pull-right">
							                  	 <input type="hidden" class="update-param" value="shop_serve_type"/>
							                  	 <img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
							                  	 <button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
							                  </div>
							             </div>
							             <div style="clear:both;"></div>
					       	 		</div>		       	 							       	 				
					       	 	</div>				       	 							       	 			
				       	 	</div>
			       	 	</div>	  
		       	 	 </div>
		       	 	 
		       	 	 <div style="clear:both"></div>
		       	       	 	        	 							
			       	 <div class="map-edit-box col-lg-12" style="padding-top: 10px;">
			       	 	
			       	 		<p class="update-title">MAP & STREET</p>
			       	 		<div class="shop-info-wrapper" style="padding-bottom: 10px;">			       	 			
					       	 		<div class="info-edit-wrapper">						       	 		
						       	 		<div class="div-left">
						       	 			<p class="shop-info wordwrap" id="shop-street"></p>
						       	 		</div>
						       	 		<div class="div-right" >
						       	 			<div class="shop-info-edit-btn pull-right">
						       	 				<i class="fa fa-pencil" aria-hidden="true"></i>
						       	 			</div>						       	 			
						       	 		</div>
						       	 		<div style="clear:both;"></div>							       	 								       	 		
					       	 		</div>			       	 				
					       	 		<div style="clear:both;"></div>				       	 				
					       	 		<div class="save-shop-info-box">			       	 				
					       	 			<div class="col-lg-12 col-sm-12 input-wrapper">	
					       	 				<div class="row">
					       	 					<div class="col-lg-12 col-sm-12">
								       	 			<div class="row">
								       	 				<div class="form-group " >
									                      <label for="exampleInputEmail1" class="input-head-text">STREET</label>
									                      <input type="email" class="form-control" id="" placeholder="longitude for shop">
									                    </div>
								       	 			</div>
								       	 		</div>
								       	 		<div style="clear:both"></div>
					       	 					<div class="col-lg-6 col-sm-6">
								       	 			<div class="row">
								       	 				<div class="form-group pull-left location-point" >
									                      <label for="exampleInputEmail1" class="input-head-text">LONGITUDE</label>
									                      <input type="email" class="form-control" id="" placeholder="longitude for shop">
									                    </div>
								       	 			</div>
								       	 		</div>
								       	 		<div class="col-lg-6 col-sm-6">
								       	 			<div class="row">								       	 				
								       	 				<div class="form-group pull-right location-point" >
									                      <label for="exampleInputEmail1" class="input-head-text">LATITUDE</label>
									                      <input type="email" class="form-control" id="" placeholder="latitude for shop">
									                    </div>
								       	 			</div>
								       	 		</div>
								       	 		
								       	 		<div style="clear:both"></div>
								       	 		<div class="col-lg-12 top-gap" style="margin-top:-6px;">
											    	 <button type="button" class="btn  nhambtn" id="detectlocation" style="width:100%" > Detect Location </button>
											  	</div>	
					       	 				</div>				                							                    	
							            </div>
							            <div class="col-lg-12 col-sm-12 save-btn-wrapper" style="">
							                 <div class="row pull-right">
							                  	 <input type="hidden" class="update-param" value="shop_serve_type"/>
							                  	 <img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
							                  	 <button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
							                  </div>
							             </div>
							             <div style="clear:both;"></div>
					       	 		</div>		       	 							       	 				
					       	 </div>
			       	 		
			       	 			
			       	 		<script type="text/javascript"
								src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSDjBA-4xhfV7TGP1jrTBcBJ4p70mmezo"></script>
								
							<div class="" style="width: 100%; height: 580px;position:relative;">
								<div id="map_canvas" style="width: 100%; height: 580px;">								
								</div>	
								<div class="disable-google-map">
									
								</div>
							</div>											
									       	 								       	 										       	 			       	 											       	 		
			       	 </div>
		       	 </div>
		      </div>
		  </div>
	   </div>	       	 					
	       	 			

    </div><!-- ./wrapper -->

   
    <?php include 'imports/scriptimport.php'; ?>
   
    
    <script>
    /*=================  google map code  =================*/    						
    function initialize() {
    	var map;
    	var geocoder;
    	var mylocationmarker = {lat: 11.559844756373714, lng:  104.91085053014103};
    	var myOptions = {
    		center: new google.maps.LatLng(11.559844756373714, 104.91085053014103 ),
    		zoom: 14,
    		scrollwheel: false,
    		mapTypeId: google.maps.MapTypeId.ROADMAP
    	};
    	geocoder = new google.maps.Geocoder();
    	var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
    	
    	google.maps.event.addListener(map, 'click', function(event) {
    		
    		this.setOptions({scrollwheel:true});
    		placeMarker(event.latLng);
    	});
    	google.maps.event.addListener(map, 'mouseout', function() {
    		this.setOptions({scrollwheel:false});
    	});	
    																						
    	var marker = new google.maps.Marker({
    		position: mylocationmarker,
    		map: map,
    	});
    		
    	function placeMarker(location) {
    		if(marker){ 
    			marker.setPosition(location); 
    		}else{
    			marker = new google.maps.Marker({ 
    				position: location, 
    				map: map
    			});
    		}	
    		getAddress(location);									         
    		$("#lat-location").val(location.lat());
    		$("#lng-location").val(location.lng());
    	}

    	$("#detectlocation").on("click", function(){
    		
    		var delocation = {lat: parseFloat($("#lat-location").val()) , lng: parseFloat($("#lng-location").val())};
    		getAddress(delocation);
    		marker.setPosition(delocation);												
    		map.panTo(delocation); 
    		//map.setCenter(test);
    		marker.setAnimation(google.maps.Animation.DROP);												
    	});
    									      
    	function getAddress(latLng) {
    		var address = "";
    		geocoder.geocode( {'latLng': latLng}, function(results, status) {				
    			console.log(results);	
    			if($("#shopstreetad").val() == ""){
    				if(status == google.maps.GeocoderStatus.OK) {												  
    					if(results[0]) {												              
    						$("#shopstreetad").val(results[0].formatted_address);
    					}
    					else {
    						$("#shopstreetad").val("No results");
    					}
    				}
    				else {
    					$("#shopstreetad").val(status);
    				}
    			}												  										        															           
    		});
    	}
    }
    google.maps.event.addDomListener(window, 'load', initialize)
    /*=================  end google map code  =================*/			
    </script>
    <script>
          
    $(window).load(function(){
    	top.resizeIframe();		
    	window.parent.$(".iframe_hover").hide();
		window.parent.$("#updateShopframe").show();
    });

    $(window).on("resize", function() {
    	top.resizeIframe();
    });

    $(document).ready(function(){
    	
    	$(".select2").select2();
    	$("span.select2-selection").css({ "height":"35px","border-radius" : "0","border":"1px solid #ccc"});
    });
    

	$(document).on("click",".shop-info-edit-btn", function(){    	
		$(this).focus();
        if($(this).hasClass("edit-active")){
        	$(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideUp(100);
        	$(this).removeClass("edit-active");
        }else{
        	$(this).siblings(".shop-update-loading").show();
            $(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
        	$(this).addClass("edit-active");                      		        	
        }       
      	setTimeout(function(){top.resizeIframe();},150);
				
    });

	loadDefaultData();
	function loadDefaultData(){
		$.ajax({
			type: "POST",
			url: $("#base_url").val()+"API/ShopRestController/getDefaultUpdateLocation", 
			contentType : "application/json", 
			data : JSON.stringify({
				"resq_data" : {
					"shop_id" : $("#shop_id").val()
				}					
			}), 
			success: function(data){
				data = JSON.parse(data);
				console.log(data);

				data = data.shop_data;
				shopaddress = data.shop_address.split(",");
				
				if(shopaddress.length >= 5){
					$("#shop-country").html(defaultNull(shopaddress[4]));
					$("#shop-city").html(defaultNull(shopaddress[3]));
					$("#shop-district").html(defaultNull(shopaddress[2]));
					$("#shop-commune").html(defaultNull(shopaddress[1]));

					if(shopaddress[0]){
						$("#shop-street").html(shopaddress[0] +" <span style='color:#a5a8ae'>- STREET</span>");
					}else{
						$("#shop-street").html("<span class='no-information'>NO INFORMATION!<span>");
					}					
				}								
			 }
		});
	}

	function defaultNull( text , cutstring){

		if(text){
			if(cutstring == undefined)
				return text;
			else
				return text.substring(0,cutstring);
		}else{
			return "<span class='no-information'>NO INFORMATION!<span>";
		}
	}
	
    </script>
  </body>
</html>
