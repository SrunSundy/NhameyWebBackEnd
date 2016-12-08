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
	 	
	 	label.option-address-label{
	 		color:#a8aaae;
	 	}
	 	
	 	img.loaction-loading{
	 		margin-left: 10px;
	 		display:none;
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
					       	 				<div style="clear:both;"></div>	
				       	 				</div>			       	 								       	 					       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		  </div>
			       	 		  
			       	 		  <div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">CITY</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap" id="shop-city"></p>
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
						       	 			<p class="shop-info wordwrap" id="shop-district"></p>
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
						       	 			<p class="shop-info wordwrap" id="shop-commune"></p>
						       	 		</div>
						       	 		<div style="clear:both;"></div>	
					       	 		</div>			       	 									       	 				       	 				      	 							       	 				
					       	 	</div>				       	 							       	 			
				       	 	</div>
				       	 	
			       	 	</div>	  
		       	 	 </div>
		       	 	 
		       	 	 <div style="clear:both"></div>
		       	 	 
		       	 	 <div class="col-lg-12 col-sm-12">
		       	 	 	
		       	 	 		
					       	 	<div class="shop-info-wrapper">			       	 			
					       	 		<div class="info-edit-wrapper">
						       	 		
						       	 		<div class="div-right" >
						       	 			<div class="shop-info-edit-btn location-edit-btn pull-right">
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
					       	 					<div class="row">
						       	 					 <div class="col-lg-6 col-sm-6">
						       	 					 	
						       	 					 		 <div class="form-group ">
							       	 					 		 <label class="option-address-label" >Country 
							       	 					 		 	<img  class="pull-right update-loading-data loaction-loading"  
							       	 					 		 		id="country-img-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
							       	 					 		 </label>						                						                    
								               					 <select class="form-control nham-control  select2" id="nham_country" style="width: 100%; border-radius: 0!important;margin-top:2px;">						                      	
								                			     </select>
							                			     </div>
							                			     
							                			     <div class="form-group">
								               					 <label class="option-address-label">City 
								               					 	<img  class="pull-right update-loading-data loaction-loading" 
								               					 		id="city-img-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
								               					 </label>	
								                  				 <select class="form-control nham-control  select2 " id="nham_city"  style="width: 100%; border-radius: 0!important;margin-top:2px;">						                  	
								                  				 </select>	
								                  				 
							                  				 </div>					                  				 						                				
						       	 					 						       	 					 
						       	 					 </div>	
						       	 					 
						       	 					 <div class="col-lg-6 col-sm-6" >
						       	 					 					       	 					 	  
						       	 					 	     <div class="form-group ">
							       	 					 		 <label class="option-address-label">District 
							       	 					 		 	<img  class="pull-right update-loading-data loaction-loading"
							       	 					 		 		id="district-img-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
							       	 					 		 </label>
								                 				 <select class="form-control nham-control  select2 " id="nham_district"  style="width: 100%; border-radius: 0!important;margin-top:2px;">						                   	
								                				 </select>
								                			 </div>
							                				 <div class="form-group">
								                				 <label class="option-address-label">Commune 
								                				 	<img  class="pull-right update-loading-data loaction-loading"  
								                				 	id="commune-img-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
								                				 </label>
											                  	 <select class="form-control nham-control select2 " id="nham_commune"  style="width: 100%; border-radius: 0!important;margin-top:2px;">									                     	
											                  	 </select>
										                  	 </div>
										                  	
						       	 					 	
						       	 					 </div>
					       	 					</div>
					       	 				</div>					                							                    	
							            </div>
							            <div class="col-lg-12 col-sm-12 save-btn-wrapper">
							                 <div class="row pull-right">
							                  	 <input type="hidden" class="update-param" value="shop_serve_type"/>
							                  	 <img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
							                  	 <button type="button" id="update-location" class="btn btn-default update-shop-save address-location nham-btn">save</button>
							                  </div>
							             </div>
							             <div style="clear:both;"></div>
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
									                      <input type="text" class="form-control" id="shopstreetad" placeholder="street number">
									                    </div>
								       	 			</div>
								       	 		</div>
								       	 		<div style="clear:both"></div>
								       	 		
								       	 		<div class="col-lg-6 col-sm-6">
								       	 			<div class="row">								       	 				
								       	 				<div class="form-group pull-left location-point" >
									                      <label for="exampleInputEmail1" class="input-head-text">LATITUDE</label>
									                      <input type="text" class="form-control" id="lat-location" placeholder="latitude for shop">
									                    </div>
								       	 			</div>
								       	 		</div>
								       	 		
					       	 					<div class="col-lg-6 col-sm-6">
								       	 			<div class="row">
								       	 				<div class="form-group pull-right location-point" >
									                      <label for="exampleInputEmail1" class="input-head-text">LONGITUDE</label>
									                      <input type="text" class="form-control" id="lng-location" placeholder="longitude for shop">
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
							                  	 <button type="button" class="btn btn-default shop-street update-shop-save nham-btn">save</button>
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
    
    function initialize(coord) {

    	if(coord.lat == null || coord.lng == null || coord.lat == "" || coord.lng == "")  {
    		top.swal("Display Error!", "Invalid Coordinate", "error");
        	return;
        }
    	var mylocationmarker = coord;
    	var myOptions = {
    		center: new google.maps.LatLng(coord.lat, coord.lng ),
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
    		optimized:false
    	});
    	
    	google.maps.event.addListener(marker, 'mouseover', function() {
            if (this.getAnimation() == null || typeof this.getAnimation() === 'undefined') {           
               // clearTimeout(bounceTimer);           
              var that = this;             
              bounceTimer = setTimeout(function(){
                   that.setAnimation(google.maps.Animation.BOUNCE);
              },500); 
            }
        });
        
        google.maps.event.addListener(marker, 'mouseout', function() {
            
             if (this.getAnimation() != null) {
                this.setAnimation(null);
             }         
             clearTimeout(bounceTimer);        
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
    		getShopTimeZone(location.lat(), location.lng());
    		$("#lat-location").val(location.lat());
    		$("#lng-location").val(location.lng());
    	}

    	$("#detectlocation").on("click", function(){
    		var latpoint = $("#lat-location").val();
    		var lngpoint = $("#lng-location").val();
    		
    		if( latpoint && lngpoint ){
    			
    			if(isNaN(latpoint)){
    				
    				top.swal("Input Error!", "Invalid lat point", "error");
    				return;
    			}
    			if(isNaN(lngpoint)){
    				
    				top.swal("Input Error!", "Invalid lng point", "error");
    				return;
    			}
    			
    			latpoint = parseFloat(latpoint);
    			lngpoint = parseFloat(lngpoint);
    			
    			if(latpoint > 90 || latpoint <-90){
    				top.swal("Input Error!", "Invalid lat point", "error");
    				return;
    			}		
    			if(lngpoint > 180 || lngpoint <-180){
    				top.swal("Input Error!", "Invalid lng point", "error");
    				return;
    			}
    			var delocation = {lat: latpoint , lng: lngpoint};
    			getAddress(delocation);
    			getShopTimeZone(latpoint, lngpoint);
    			marker.setPosition(delocation);												
    			map.panTo(delocation); 
    			//map.setCenter(test);
    			marker.setAnimation(google.maps.Animation.DROP);	
    		}else{
    			top.swal("Input Error!", "Invalid location point!", "error");
    		}
    		
    													
    	});
    		
    	
    	function getAddress(latLng) {
    		
    		var address = "";
    		geocoder.geocode( {'latLng': latLng}, function(results, status) {				
    		
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
    /*=================  end google map code  =================*/			
    </script>
    <script>

    var address_update_open ;
	var shopaddress;
      
    var isloactionfirst = 0;
    var country_id = 0;
    var city_id = 0;
    var district_id = 0;
    var commune_id = 0;

    var country_text = "";
    var city_text = "";
    var district_text = "";
    var commune_text = "";
    
    $(window).load(function(){
    	top.resizeIframe();		    	
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

            if($(this).hasClass("location-edit-btn")){

                if(isloactionfirst <= 0){
                	address_update_open = this;
                	$(this).siblings(".shop-update-loading").show();
                	loadCountryData( country_id , function(){
    					loadCityData($("#nham_country option:selected").val() , city_id, function(){
    						loadDistrictData($("#nham_city option:selected").val() , district_id , function(){
    							loadCommuneData( $("#nham_district option:selected").val(), commune_id, function(){
    								
    								$(address_update_open).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
    					        	$(address_update_open).addClass("edit-active");  
    					        	$(address_update_open).siblings(".shop-update-loading").hide(); 
    					        	isloactionfirst++;
    					        	setTimeout(function(){top.resizeIframe();},150);
    							});
    						});
    					});
    				});
                }else{
                	$(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
                 	$(this).addClass("edit-active");           
                }
                setTimeout(function(){top.resizeIframe();},150);
				return;
            }
        	
            $(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
        	$(this).addClass("edit-active");                      		        	
        }       
      	setTimeout(function(){top.resizeIframe();},150);
				
    });

    $("#update-location").on("click", function(){

		var updatedata = {
			"country_id" : $("#nham_country").val(),
			"city_id" : $("#nham_city").val(),
			"district_id" : $("#nham_district").val(),
			"commune_id" : $("#nham_commune").val(),
			"shop_address" : getAddress(),
			"shop_id" : $("#shop_id").val()
		};

		var obj = this;
		$(this).siblings("img.update-loading").show();
		console.log(updatedata);
		
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ShopRestController/updateShopLocation",
			contentType : "application/json",
			data : JSON.stringify({
				"request_data" : updatedata
			}),
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
				if(data.is_updated == true){
					//top.swal("Update Success!", data.message, "success");
					$("#shop-country").html(country_text);
					$("#shop-city").html(city_text);
					$("#shop-district").html(district_text);
					$("#shop-commune").html(commune_text);
					
					$(obj).parents(".save-shop-info-box").slideUp(100);
					$(obj).parents(".shop-info-wrapper").find(".shop-info-edit-btn").removeClass("edit-active");
					setTimeout(function(){top.resizeIframe()}, 120); 			
				}else{
					top.swal("Update Error!", data.message, "error");
				}
				$(obj).siblings(".update-loading").hide(); 
					
			}
		});
    });

    $("#shop-street").on("click", function(){
		
    });

    function getAddress(){//name of country, city........

    	country_text = $("#nham_country option:selected").text();
    	city_text = $("#nham_city option:selected").text();
    	district_text = $("#nham_district option:selected").text();
    	commune_text = $("#nham_commune option:selected").text();
    	var streetad = shopaddress[0];
    	  	
    	return streetad +", "+commune_text+", "+district_text+", "+city_text+", "+country_text;
    }
    
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

				if(data){

					google.maps.event.addDomListener(window, 'load', initialize({'lat': parseFloat(data.shop_lat_point) , 'lng': parseFloat(data.shop_lng_point)}));
					shopaddress = data.shop_address.split(",");

					country_id = data.country_id;
					city_id = data.city_id;
					district_id = data.district_id;
					commune_id = data.commune_id; 
					
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
	
					window.parent.$(".iframe_hover").hide();
					window.parent.$("#updateShopframe").show();	
					top.resizeIframe();
				}else{

					top.swal({
						 title: "Error Loading!",
					     text: "",
					     html: true,
					     type: "error"
					    			     
					 });
				}					
			 }
		});
	}
	

	function loadCountryData( selected , callback ){

		$("button.address-location").prop('disabled', true);
		$("#nham_country").prop('disabled', true);
		$("#country-img-loading").show();		
		$.ajax({
			type : "GET",
			url  : $("#base_url").val()+"API/CountryRestController/getCountryCombo",
			success : function(data){
				data = JSON.parse(data);
				console.log(data);			
				$("#nham_country").children().remove();				
				if(data.length > 0){				
					var country = '';
					for(var i=0 ; i< data.length; i++){
						if(selected == "NO"){
							if(i == 0){
								country += '<option selected="selected" value="'+data[i].country_id+'">'+data[i].country_name+'</option>';
							}else{
								country +='<option value="'+data[i].country_id+'">'+data[i].country_name+'</option>';
							}							
						}else{
							if(data[i].country_id == selected){
								country += '<option selected="selected" value="'+data[i].country_id+'">'+data[i].country_name+'</option>';
							}else{
								country +='<option value="'+data[i].country_id+'">'+data[i].country_name+'</option>';
							}	
						}
										
					}
					$("#nham_country").append(country);		
					$("#select2-nham_country-container").html($("#nham_country option:selected").text());
				}
				
				$("button.address-location").prop('disabled', false);
				$("#nham_country").prop('disabled', false);
				$("#country-img-loading").hide();
				if( typeof callback === "function"){
					callback();
				}				
									
			}		
		});
	}

	$("#nham_country").on("change", function(){
		
		loadCityData($("#nham_country option:selected").val() , "NO" , function(){
			loadDistrictData($("#nham_city option:selected").val() , "NO" , function(){
				loadCommuneData( $("#nham_district option:selected").val(), "NO");
			});
		});
		
	});

	function loadCityData( countryid, selected , callback){

		$("#nham_city").prop('disabled', true);
		$("button.address-location").prop('disabled', true);
		$("#city-img-loading").show();
		$.ajax({
			type : "GET",
			url  : $("#base_url").val()+"API/CityRestController/getCityCombo/"+countryid,
			success : function(data){
				data = JSON.parse(data);
				
				$("#nham_city").children().remove();
				$("#select2-nham_city-container").html("");
				if(data.length > 0){
								
					var city = '';
					for(var i=0 ; i< data.length; i++){
							
						if(selected == "NO"){
							if(i == 0){
								city +='<option selected="selected" value="'+data[i].city_id+'">'+data[i].city_name+'</option>';
							}else{
								city +='<option value="'+data[i].city_id+'">'+data[i].city_name+'</option>';
							}							
						}else{
							if(data[i].city_id == selected){
								city +='<option selected="selected" value="'+data[i].city_id+'">'+data[i].city_name+'</option>';
							}else{
								city +='<option value="'+data[i].city_id+'">'+data[i].city_name+'</option>';
							}	
						}					
					}
					$("#nham_city").append(city);
					$("#select2-nham_city-container").html($("#nham_city option:selected").text());
				}
				$("#nham_city").prop('disabled', false);
				$("button.address-location").prop('disabled', false);
				$("#city-img-loading").hide();
				if( typeof callback === "function"){
					callback();
				}	
				
			}		
		});	 
	}

	$("#nham_city").on("change", function(){
		loadDistrictData($("#nham_city option:selected").val() , "NO" , function(){
			loadCommuneData( $("#nham_district option:selected").val(), "NO");
		});	
	});

	function loadDistrictData( cityid , selected , callback){

		$("#nham_district").prop('disabled', true);
		$("button.address-location").prop('disabled', true);
		$("#district-img-loading").show();
		$.ajax({
			type : "GET",
			url  : $("#base_url").val()+"API/DistrictRestController/getDistrictCombo/"+cityid,
			success : function(data){
				data = JSON.parse(data);				
				$("#nham_district").children().remove();
				$("#select2-nham_district-container").html("");
				
				if(data.length > 0){
						
					var district = '';
					for(var i=0 ; i< data.length; i++){						

						if(selected == "NO"){
							if(i == 0){
								district +='<option selected="selected" value="'+data[i].district_id+'">'+data[i].district_name+'</option>';
							}else{
								district +='<option value="'+data[i].district_id+'">'+data[i].district_name+'</option>';
							}							
						}else{
							if(data[i].district_id == selected){
								district +='<option selected="selected" value="'+data[i].district_id+'">'+data[i].district_name+'</option>';
							}else{
								district +='<option value="'+data[i].district_id+'">'+data[i].district_name+'</option>';
							}	
						}					
					}
					$("#nham_district").append(district);
					$("#select2-nham_district-container").html($("#nham_district option:selected").text());					
				}
				$("#nham_district").prop('disabled', false);
				$("button.address-location").prop('disabled', false);
				$("#district-img-loading").hide();
				if( typeof callback === "function"){
					callback();
				}			
			}		
		});			
	}

	$("#nham_district").on("change", function(){
		loadCommuneData( $("#nham_district option:selected").val(), "NO");
	});
	
	function loadCommuneData( districtid, selected , callback){

		 $("#nham_commune").prop('disabled', true);
		 $("button.address-location").prop('disabled', true);
		 $("#commune-img-loading").show();
		 $.ajax({
			type : "GET",
			url  : $("#base_url").val()+"API/CommuneRestController/getCommuneCombo/"+districtid,
			success : function(data){
				data = JSON.parse(data);
							
				$("#nham_commune").children().remove();
				$("#select2-nham_commune-container").html("");
	
				if(data.length > 0){
					
					var commune = '';
					for(var i=0 ; i< data.length; i++){
						
						if(selected == "NO"){
							if(i == 0){
								commune +='<option selected="selected" value="'+data[i].commune_id+'">'+data[i].commune_name+'</option>';
							}else{
								commune +='<option value="'+data[i].commune_id+'">'+data[i].commune_name+'</option>';
							}							
						}else{
							if(data[i].commune_id == selected){
								commune +='<option selected="selected" value="'+data[i].commune_id+'">'+data[i].commune_name+'</option>';
							}else{
								commune +='<option value="'+data[i].commune_id+'">'+data[i].commune_name+'</option>';
							}	
						}						
					}
					$("#nham_commune").append(commune);
					$("#select2-nham_commune-container").html($("#nham_commune option:selected").text());
				}
				$("#nham_commune").prop('disabled', false);
				$("button.address-location").prop('disabled', false);
				$("#commune-img-loading").hide();
				if( typeof callback === "function"){
					callback();
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
