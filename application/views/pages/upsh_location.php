<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>update shop location | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop.css" />
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

  </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    
   
    <div class="shop-event-wrapper">	
	
	   <div  class="tab-wrapper">	       	 						       	 						       	 					
		  <div  id="map">	       	 				
		      <div class="tab-header col-lg-12">
		       	 <p class="tab-intro-text">	<i class="fa fa-map-marker" aria-hidden="true"></i><span>Location</span></p>
	
		      </div>
		      <div class="tab-body col-lg-12">
		       	 <div class="row">
			       	 <div class="map-edit-box col-lg-12">
			       	 	 <div class="row">
			       	 		 <div class="col-lg-5 col-sm-5 map-show-box">
			       	 									
			       	 		 </div>
			       	 	     <div class="col-lg-7 col-sm-7 map-edit-box">
			       	 									
			       	 		 </div>
			       	 	</div>	       	 								
			       	 </div>
			       	 							
			       	 <div class="map-edit-box col-lg-12">
			       	 	<div class="row">
			       	 		<div class="col-lg-5 col-sm-5 map-show-box">
			       	 									
			       	 		</div>
			       	 		<div class="col-lg-7 col-lg-7 map-edit-box">
			       	 									
			       	 		</div>
			       	 	</div>	       	 								
			       	 </div>
			       	 							
			       	 <div class="map-edit-box col-lg-12">
			       	 	<div class="row">
			       	 		<div class="col-lg-5 col-sm-5 map-show-box">
			       	 									
			       	 		</div>
			       	 		<div class="col-lg-7 col-lg-7 map-edit-box">
			       	 									
			       	 		</div>
			       	 	</div>	       	 								
			       	 </div>
			       	 							
			       	 <div class="map-edit-box col-lg-12">
			       	 	<div class="row">
			       	 		<div class="col-lg-5 col-sm-5 map-show-box">
			       	 									
			       	 		</div>
			       	 		<div class="col-lg-7 col-lg-7 map-edit-box">
			       	 									
			       	 		</div>
			       	 	</div>	       	 								
			       	 </div>
			       	 							
			       	 <div class="map-edit-box col-lg-12">
			       	 	<div class="row">
			       	 		<div class="col-lg-5 col-sm-5 map-show-box">
			       	 									
			       	 		</div>
			       	 		<div class="col-lg-7 col-lg-7 map-edit-box">
			       	 									
			       	 		</div>
			       	 	</div>	       	 								
			       	 </div>
			       	 							
			       	 <div class="map-edit-box col-lg-12">
			       	 	<div class="row">
			       	 		<div class="col-lg-5 col-sm-5 map-show-box">
			       	 									
			       	 		</div>
			       	 		<div class="col-lg-7 col-lg-7  map-edit-box">
			       	 									
			       	 		</div>
			       	 	</div>	       	 								
			       	 </div>
			       	 							
			       	 <div class="map-edit-box col-lg-12">
			       	 								
			       	 	<script type="text/javascript"
								src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSDjBA-4xhfV7TGP1jrTBcBJ4p70mmezo"></script>
											
						<div id="map_canvas" style="width: 100%; height: 580px;"></div>
			       	 								       	 								
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
    });
  
	function updateShopField(value , param){
		$.ajax({
			type : "POST",
			url : "/NhameyWebBackEnd/API/ShopRestController/updateShopField",
			data : {
				"shopdata" : {
					"updated_value" : value,
					"shop_id" : $("#shop_id").val(),
					"param" : param
				}
			},
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
					
			}
		});
	}
    </script>
  </body>
</html>
