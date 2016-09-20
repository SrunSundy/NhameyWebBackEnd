<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>

  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
      	  <?php include 'elements/headnavbar.php';?>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
       	  <?php include 'elements/leftnavbar.php';?>
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 910px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Shop Management
            <small>manage all inserted shop</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Shop Management</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content" >
         	 <!-- Chat box -->
              <div class="box box-danger" style="border-radius: 0;min-height: 500px;">
                <div class="box-header">
                	<div class=" col-sm-12 nham-dropdown-wrapper">
                		<div class="row">
                			<div class="selected-dropdown">
                    		   <input id="brandname" type="text" class="form-control input-lg nham-dropdown-inputbox"  placeholder="Search brand to insert shop">
                    	       <input type="hidden" class="selectedbrandid" id="selectedbrand"/>
                    	    </div>
                    		<div class="nham-dropdown-detail"  >
                    			<div class="nham-dropdown-result-wrapper">
                    				<div id="display-result" class="display-result-wrapper">
                    					
                    				</div>
       				
                  				</div>
                  				<div id="nham-dropdown-footer" class="nham-dropdown-result-footer" align="center">
                  					<button class="btn nhamey-btn" id="yesbrand">Yes</button>
                  				</div>
                  			</div>
                    	</div>
                    	
                  	</div>
                  	
                  	
                </div>
                <div class="box-body " >
                	<!--  -->
                  	 <!-- Small boxes (Stat box) -->
		        
			          <!-- Main row -->
			          <div class="row">
			            <!-- Left col -->
			            <section class="col-lg-5 connectedSortable">
			             	<h5 class="gray-color">Informative Text</h5>
			             	 <div class="form-group">
			                      <label>Shop Name</label>
			                      <input type="text" id="shopengname" class="form-control" placeholder="Shop Name in English">
			                      <input type="text" id="shopkhname" class="form-control top-gap" placeholder="Shop Name in Khmer">
		                     </div>
		                     
		                     <div class="form-group nham-dropdown-wrapper">
			                    <label>Shop Region</label>
			                    <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="selected-dropdown">
			                    		    <input id="regionid" type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search or Select for shop region">
			                    	       <input type="hidden" class="selectedbrandid" id="selectedregion"/>
			                    	    </div>
			                    		<div class="nham-dropdown-detail"  >
			                    			<div class="nham-dropdown-result-wrapper">
			                    				<div id="display-result-region" class="display-result-wrapper">
			                    					
			                    				</div>
			       				
			                  				</div>
			                  				<div id="nham-dropdown-footer-region" class="nham-dropdown-result-footer" align="center">
			                  					<button class="btn nhamey-btn" id="yesregion">Yes</button>
			                  				</div>
			                  			</div>
			                    	</div>			                    	
			                  	</div>
		                     </div>
		                     
		                     <div class="form-group ">
			                    <label>Shop Type</label>
			                     <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="selected-dropdown">
			                    		    <input id="shoptypename" type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search or Select for shop region">
			                    	        <input type="hidden" class="selectedbrandid" id="selectedshoptype"/>
			                    	    </div>
			                    		<div class="nham-dropdown-detail"  >
			                    			<div class="nham-dropdown-result-wrapper">
			                    				<div id="display-result-shoptype" class="display-result-wrapper">
			                    					
			                    				</div>
			       				
			                  				</div>
			                  				<div id="nham-dropdown-footer-shoptype" class="nham-dropdown-result-footer" align="center">
			                  					<button class="btn nhamey-btn" id="yesshoptype">Yes</button>
			                  				</div>
			                  			</div>
			                    	</div>			                    	
			                  	</div>
		                     </div>
		                     
		                     <div class="form-group">
			                    <label>Shop Serve Type</label>
			                    <select class="form-control " style="width: 100%;" id="shopservertype">
			                      <option selected="selected" value="food">Food</option>
			                      <option value="drink">Drink</option>
			                    
			                    </select>
			                  </div><!-- /.form-group -->
			                  
			                  <div class="form-group">
			                     <label>Short Description</label>
			                     <textarea id="shopshortdes" class="form-control" rows="3" placeholder="describe shortly about the shop" style="resize:none;"></textarea>
			                  </div>
			                  
			                  <div class="form-group">
			                     <label>Description</label>
			                     <textarea id="shopdes" class="form-control" rows="3" placeholder="describe briefly about the shop"  style="resize:vertical;"></textarea>
			                  </div>
			                  
			                 		                
		                      
		                       <!-- phone mask -->
			                  <div class="form-group">
			                    <label>Shop Phone:</label>
			                    <div class="input-group">			                      
			                      <input type="text" class="form-control inputmaskphone" id="shop_phonenum" placeholder="shop contact">
			                      <div class="input-group-addon nham-append-data">
			                        <i class="fa fa-plus"></i>
			                      </div>
			                    </div><!-- /.input group -->
			                  	 <div class="phone-add-result" id="phone-add-result">
			                    	                  	
			                    </div>
			                   </div><!-- /.form group -->
			                  
			                  <div class="form-group">
			                      <label>Shop Email</label>
			                      <input id="shopemail" type="text" class="form-control" placeholder="Shop Email address">			                      
		                      </div>
		                      
		                      <div class="form-group"  >
		                      	<div class="col-lg-12">
		                      		<div class="row">
				                      <div style="float: left;">
				                      	<label>Shop Working days</label>
				                      </div>
					                  <div style="float:left;margin-left: 20px;">
						                  <div class="form-group">
						                    	  <div class="nham-control-group">
												    <label class="nham-control nham-control--checkbox">All
												      <input type="checkbox"  value="0" id="allday"/>
												      <div class="nham-control__indicator"></div>
												    </label>
												  </div>			                   
						                  </div>
					                  </div>
					                  
					                  <div style="clear:both;"></div>
					                 </div>
				                  </div>
				                  <div class="col-lg-12" style="margin-bottom:20px;">
				                  	<div class="row">
					                   					                    
					                     <div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Monday
											    <input type="checkbox"  id="mon" value="1"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Tuesday
											    <input type="checkbox"  id="mon" value="2"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Wednesday
											    <input type="checkbox" id="mon" value="3"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Thursday
											    <input type="checkbox"  id="mon" value="4"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Friday
											    <input type="checkbox"  id="mon" value="5"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Saturday
											    <input type="checkbox"  id="mon" value="6"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Sunday
											    <input type="checkbox"  id="mon" value="7"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
					                    					                    
				                    </div>
			                  	  </div>	                      
		                      </div>
			                 
			                  <div class="form-group" >
			                      <label>Shop Opening Time</label>
			                      <input id="shopopentime" type="text" class="form-control timeformat" placeholder="Time to open (ex: 8:00)">			                      
		                      </div>
		                      
		                      <div class="form-group">
			                      <label>Shop Closing Time</label>
			                      <input id="shopclosetime" type="text" class="form-control timeformat" placeholder="Time to close (ex: 20:30)">			                      
		                      </div>
		                      
		                      <div class="input-group top-gap">
			                    <span class="input-group-addon"><i class="fa fa-facebook-square font-size-20" aria-hidden="true"  ></i></span>
			                    <input id="shopfb" type="text" class="form-control" placeholder="Facebook page's link (ex:https://www.facebook.com/shopname)">
			                  </div>
			                  			    		                      
		                      <div class="input-group top-gap">
			                    <span class="input-group-addon"><i class="fa fa-instagram font-size-20" aria-hidden="true"  ></i></span>
			                    <input id="shopinstagram" type="text" class="form-control" placeholder="Instagram page's link (ex:https://www.instagram.com)">
			                  </div>
			                  
			                  <div class="input-group top-gap">
			                    <span class="input-group-addon"><i class="fa fa-google-plus font-size-20" aria-hidden="true"  ></i></span>
			                    <input id="shopgoogleplus"  type="text" class="form-control" placeholder="Googleplus page's link (ex:https://plus.google.com)">
			                  </div>
			                  
			                  <div class="input-group top-gap">
			                    <span class="input-group-addon"><i class="fa fa-twitter font-size-20" aria-hidden="true"  ></i></span>
			                    <input id="shoptwitter" type="text" class="form-control" placeholder="Twitter page's link (ex:https://twitter.com)">
			                  </div>
			                  
			                   <div class="form-group">
			                     <label>Remark</label>
			                     <textarea id="shopremark" class="form-control" rows="3" placeholder="describe what you haven't done for saving shop" style="resize:none;"></textarea>
			                   </div>
			
			            </section><!-- /.Left col -->
			            <!-- right col (We are only adding the ID to make the widgets sortable)-->
			            <section class="col-lg-7 connectedSortable">
							<h5 class="gray-color">Informative Image</h5>
							<div  class="form-group">
								<label>Logo</label>
								<div class="col-lg-12 logo-browsing-wrapper" align="center"  style="position:relative;">											                     		                  		                    	  
			                    	<input type='file' id="logoupload" style="display: none;" accept="image/*"/>
			                    	<div class="image-upload-wrapper" id="logo-upload-wrapper">
			                    		<label class="gray-image-plus"><i class="fa fa-plus"></i></label>
			                    		<p style="font-weight:bold;color:#9E9E9E"> Add logo image </p>
			                    	</div> 									
									<div id="logo-upload-image" class="upload-image-hover"  >
										
									</div>
									<div id="loading-wrapper" class="upload-image-loading" style="display:none" >
										 <div class="progress progress-xxs">
						                    <div id="logoprogressbar" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="">					                      
						                    </div>
						                  </div>
										  <img class="loading-inside-box" src="<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif" style="height:15px;width:23px;" />
									</div>
									<div id="uploadimageremoveback" class="upload-image-remove-background" style="display:none">
									
									</div>
									<div id="removelogoimagewrapper" class="upload-image-remove" style="display:none" >
										<i id="removelogoimage" class="fa fa-trash" aria-hidden="true"></i>										
									</div>
									<div id="removeloadingwrapper" class="upload-image-remove" style="display:none">
										 <img  class="loading-inside-box" src="<?php echo base_url() ?>application/views/nhamdis/img/removeload.gif" style="height:23px;width:23px;" />
										
									</div>
												                    	  		                    	  		                    	  
								</div>
							</div>
							
							<div  class="form-group">
								<label>Cover</label>
								<div class="col-lg-12 logo-browsing-wrapper" align="center"  style="position:relative;">												                     		                  		                    	  
			                    	<input type='file' id="coverupload" style="display: none;" accept="image/*"/>
			                    	<div class="image-upload-wrapper" id="cover-upload-wrapper">
			                    		<label class="gray-image-plus"><i class="fa fa-plus"></i></label>
			                    		<p style="font-weight:bold;color:#9E9E9E"> Add cover image </p>
			                    	</div> 
									<div id="cover-upload-image" class="upload-image-hover"></div>
												                    	  		                    	  		                    	  
								</div>
							</div>
							
							
			                <div class="form-group">
				                 <label>Minimal</label>
				                 <select class="form-control nham-control  select2" style="width: 100%; border-radius: 0!important;">
				                      <option selected="selected">Alabama</option>
				                      <option>Alaska</option>
				                      <option>California</option>
				                      <option>Delaware</option>
				                      <option>Tennessee</option>
				                      <option>Texas</option>
				                      <option>Washington</option>
				                 </select>
				            </div><!-- /.form-group -->
			                
							<div  class="form-group">
							
			                    
		                    
								<label>Shop map</label>
								  <div class="col-lg-12">
								  	<div class="row">
									  <div class="col-lg-6">
									  	 <div class="row">
									  	 <div class="input-group top-gap">
					                     	<span class="input-group-addon">Lat</span>
					                     	<input id="lat-location" type="text" class="form-control" placeholder="Enter the latitude (ex: 11.559844756373714)">
					                     </div>
					                     </div>
									  </div>
									  <div class="col-lg-6">
									     <div class="row">
									     <div class="input-group top-gap">
					                     	<span class="input-group-addon">Lng</span>
					                     	<input id="lng-location" type="text" class="form-control" placeholder="Enter the Longitude (ex: 104.91085053014103)">
					                     </div>
					                     </div>
									   </div>
									 </div>		  
			                      </div>
			                      <div class="col-lg-12 top-gap" style="margin-bottom: 10px;">
								     <button type="button" class="btn  nhambtn" id="detectlocation" style="width:100%" > Detect Location </button>
								  </div>
								<div class="nham-embed-googlemap ">
									
									<script type="text/javascript"
										 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSDjBA-4xhfV7TGP1jrTBcBJ4p70mmezo"></script>
									
									<div id="map_canvas" style="width: 100%; height: 300px;"></div>
								
				                </div>
			                 </div> 
			                 			                                							 			      			
			            </section><!-- right col -->
			            <div class="col-lg-12">
			            	
			            	  <div class="form-group">
			                      <label class="control-label">Shop images detail</label>
			                        <div class="uploaddetailwrapper" style="width: 100%; height: auto;position:relative;">
									    <input id="input-44" name="input44[]" type="file" multiple class="file-loading" accept="image/*">
										<div id="errorBlock" class="help-block"></div>
										<div id="coveruploadimage" class="coveruploadimage" style="display:none;width: 100%;height:100%;background:#fff;z-index:200;position:absolute;top:0;opacity:0.5;">
										</div>
										<div id="coveruploadimagewithload"  align="center" class="coveruploadimagewithload" style="display:none;width: 100%;height:100%;z-index:200;position:absolute;top:0;">
											<img class="loading-inside-box" src="<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif" style="height:23px;width:30px;" />
										</div>
									</div>
			                    </div>			            	
			            	
			            </div>
			            
			          </div><!-- /.row (main row) -->
                </div>
                <div class="box-footer">
                
                 	<button type="button" class="btn btn-danger shop-save" id="saveshop"> Save </button>
                </div>
              </div><!-- /.box (chat box) -->
       	
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
      		<?php include 'elements/footnavbar.php';?>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        	<?php include 'elements/settingnavbar.php';?>
      </aside>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <?php include 'imports/scriptimport.php'; ?>
   

  </body>
	
									<script>
										var map;
									    var geocoder;
									  
									    var mapOptions = { 
											center: new google.maps.LatLng(0.0, 0.0),
											zoom: 2,
									        mapTypeId: google.maps.MapTypeId.ROADMAP 
										};
									
									    function initialize() {
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
									            placeMarker(event.latLng);
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
									          /*   document.getElementById('lat').value=location.lat();
									            document.getElementById('lng').value=location.lng(); */
									          //  alert(location);
									           // getAddress(location);
									          
									        }
									        $("#detectlocation").on("click", function(){
										        var delocation = {lat: parseFloat($("#lat-location").val()) , lng: parseFloat($("#lng-location").val())};
										        alert(delocation);
												marker.setPosition(delocation);												
												map.panTo(delocation); 
												//map.setCenter(test);
												 marker.setAnimation(google.maps.Animation.DROP);
												
									        });
									      
									     /*  function getAddress(latLng) {
									        geocoder.geocode( {'latLng': latLng},
									          function(results, status) {
												
									            if(status == google.maps.GeocoderStatus.OK) {
												  
									              if(results[0]) {
									              //  document.getElementById("address").value = results[0].formatted_address;
									              }
									              else {
									              //  document.getElementById("address").value = "No results";
									              }
									            }
									            else {
									            //  document.getElementById("address").value = status;
									            }
									          });
									        } */
									      }
									      google.maps.event.addDomListener(window, 'load', initialize)
									
									</script>
 
  <script>

//phone adding
$(document).ready(function(){

	setTimeout(function(){$(".select2").select2();},3000);
	
});
  var shopphones = [];
  var arrnewfileimagename = [];
  var logoimagename = "";


  $('#lat-location').keyup(function() {
	  //code to not allow any changes to be made to input field
	 // var boo = $(this).val().match(/[\d]/g,'');
	  //var filter = /[^\d\.]/g;
	 //$(this).val($(this).val().replace(/[^\d\.\-]/g,''));
	 $(this).val($(this).val().replace(/\d\-\d/,''));
	 // console.log(filter.test($(this).val()));
	 
  });
 
  $('.inputmaskphone').inputmask({
	  mask: '999-999-9999'
	});
  
  $('.timeformat').inputmask({
	  mask: '99:99'
	});
  //Flat red color scheme for iCheck
  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    checkboxClass: 'icheckbox_flat-red',
    radioClass: 'iradio_flat-red'
  });
  

$(".nham-append-data").on("click",function(){
	var phonenum = $("#shop_phonenum").val().replace(/[_]/g,"").trim();
	if(phonenum == '' || phonenum.indexOf('--') > -1  || phonenum == null) return;
	
	shopphones.push(phonenum);
	displayPhones(shopphones);
	console.log(shopphones);	
	$("#shop_phonenum").val("");
	
});
$(document).on("click",".close-phone",function(){
	var arrayno = parseInt($(this).siblings(".phone-wrapper").find("input").val());
	shopphones.splice(arrayno , 1);
	displayPhones(shopphones);
	console.log(shopphones);
	//var shopphoneslash = shopphones.toString().replace(/[,]/g,"|").trim();
	//alert(shopphoneslash);	
});
function displayPhones( data ){
	var dis =""; 
	for( var i=0 ; i<data.length ; i++){
		dis += '<span class="nham-box-wrap">';
		dis += '<span class="phone-wrapper"><input type="hidden" value="'+i+'" />'+data[i]+'</span>';
		dis += '<i class="fa fa-close close-phone" style="margin-left:5px;margin-top:5px;" ></i>';
		dis += '</span>';
	}
	$("#phone-add-result").html(dis);
}
//close phone adding



$("#allday").on("change", function () {
	if($(this).is(":checked")){		
		$(".work-day").prop('checked', true);
	}else{
		$(".work-day").prop('checked', false);
	}
});
$(".work-day").on("change", function(){

	if($(this).is(":checked")){
		var len = $("input.work-day:checked").length;
		if(len >= 7){
			$("#allday").prop('checked', true);
		}
	}else{
		$("#allday").prop('checked', false);
	}
});
function countWorkingday(){
	var workingday = [];
	$('input.work-day:checked').each(function() {		
		workingday.push(this.value);
	});
	return workingday;
}


$("#input-44").fileinput({
     uploadUrl: '/file-upload-batch/2',
     maxFilePreviewSize: 10240,
     browseClass: "btn btn-danger",
     allowedFileExtensions: ["jpg", "png", "gif"],
     showUpload: false,
});
 
	   
$("#logo-upload-image").on("click",function(){	
		$("#logoupload").click();	
});
$("#removelogoimage").on("click",function(){
	removeLogoImageFromServer();
});
$("#logoupload").change(function(){
	uploadLogo(this);
});
function uploadLogo(input) {

	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) {
 			upoloadLogoToServer();
		      var myimg ='<img  class="upload-shop-img" src="'+e.target.result+'" alt="your image" />';
		              $('#logo-upload-wrapper').html(myimg);
		}
		reader.readAsDataURL(input.files[0]);
	}else{
		 var txt = '<label class="gray-image-plus"><i class="fa fa-plus"></i></label><p style="font-weight:bold;color:#9E9E9E"> Add Logo image </p>';
		$('#logo-upload-wrapper').html(txt);
	}
}
function removeLogoImageFromServer(){
	$("#removeloadingwrapper").show();
	$.ajax({
		url : "/NhameyWebBackEnd/API/UploadRestController/removeShopSingleImage",
		type: "POST",
		data : {
			"removeimagedata":{
				"image_type" : "1",
				"logoimagename" : logoimagename
			}			
		},
		success: function(data){
			
			logoimagename="";
			$("#logoupload").val(null);
			$("#uploadimageremoveback").hide();
			$("#removelogoimagewrapper").hide();
			var txt = '<label class="gray-image-plus"><i class="fa fa-plus"></i></label><p style="font-weight:bold;color:#9E9E9E"> Add Logo image </p>';
			$('#logo-upload-wrapper').html(txt);
			$("#removeloadingwrapper").hide();
		}
	});
}
function upoloadLogoToServer(){
	var inputFile = $("#logoupload");
	$("#logo-upload-image").addClass("loading-box");
	$("#loading-wrapper").show();
	var fileToUpload = inputFile[0].files[0];
	console.log(fileToUpload);
	if(fileToUpload != 'undefined'){

		var formData = new FormData();
		formData.append("file",  fileToUpload);
		
		$.ajax({
			url: "/NhameyWebBackEnd/API/UploadRestController/shopLogoUploadImage",
			type: "POST",
			data : formData,
			processData : false,
			contentType : false,
			success: function(data){
				data = JSON.parse(data);
				
				if(data.is_upload == false){
					alert("error uploading!");
					alert(data.message);
				}else{
					logoimagename = data.filename;
					$("#loading-wrapper").hide();
					$("#logo-upload-image").removeClass("loading-box");
					$("#uploadimageremoveback").show();
					$("#removelogoimagewrapper").show();
				}
				
			},
			xhr: function() {
				var xhr = new XMLHttpRequest();
				xhr.upload.addEventListener("progress", function(event) {
					if (event.lengthComputable) {
						var percentComplete = Math.round( (event.loaded / event.total) * 100 );
						 //console.log(percentComplete);
						
						$("#logoprogressbar").css({width: percentComplete+"%"});
					};
				}, false);

				return xhr;
			}
		});
	} 
}





$("#cover-upload-image").on("click",function(){	
	$("#coverupload").click();
});
$("#coverupload").change(function(){
	uploadCover(this);
});
function uploadCover(input){
	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) {
		      var myimg ='<img  class="upload-shop-img" src="'+e.target.result+'" alt="your image" />';
		              $('#cover-upload-wrapper').html(myimg);
		}
		reader.readAsDataURL(input.files[0]);
	}else{
		 var txt = '<label class="gray-image-plus"><i class="fa fa-plus"></i></label><p style="font-weight:bold;color:#9E9E9E"> Add Cover image </p>';
		 $('#cover-upload-wrapper').html(txt);
	}
	
}


$("#input-44").on("change", function(){
	
	uploadShopImageDetailToServer();
});
function splitNewShopImage(){
	var shopimagetoinsert = [];
	for(var i=0; i<arrnewfileimagename.length; i++){
		var newimagetoinsert = arrnewfileimagename[i].split("|")[0];
		shopimagetoinsert.push(newimagetoinsert);
	}
	return shopimagetoinsert;
}

function turnSpecialCharToUnderscore( str ){

	var mystr = "";
	mystr = str.replace(/[\^]/gi,'_');
	mystr = mystr.replace(/[\]]/gi,'_');
	mystr = mystr.replace(/[\[]/gi,'_');
	mystr = mystr.replace(/[\{]/gi,'_');
	mystr = mystr.replace(/[\}]/gi,'_');
	mystr = mystr.replace(/[\(]/gi,'_');
	mystr = mystr.replace(/[\)]/gi,'_');
	mystr = mystr.replace(/[\']/gi,'_');
	mystr = mystr.replace(/[-;#%&=+]/gi, '_');
	return mystr;
}

$(document).on("mousedown","button.kv-file-remove",function(){
	var oldimagename = $(this).parents(".file-thumbnail-footer").find(".file-footer-caption").attr("title").trim();
	 oldimagename = turnSpecialCharToUnderscore(oldimagename);
	for(var i=0; i<arrnewfileimagename.length; i++){ 
		var filefromserver = arrnewfileimagename[i].split("|");
		oldimage = filefromserver[1];
		newimage = filefromserver[0];
		
		oldimage = turnSpecialCharToUnderscore(oldimage);
		console.log(oldimage);
		console.log(oldimagename);
		if(oldimagename == oldimage){
			console.log(newimage);
			arrnewfileimagename.splice(i , 1);
			removeShopImageDetailFromServer(newimage).success(function (data) {	
				
			});
			console.log(arrnewfileimagename);
			
		}else{
			//alert("incorrect");
			//do nothing
		}
		
	}
	
});
$(document).on("mousedown", "button.fileinput-remove-button", function(){
	//console.log(splitNewShopImage());
	//arrnewfileimagename = [];
	//console.log(arrnewfileimagename);
	
	removeShopImageDetailFromServerMulti(splitNewShopImage()).success(function(data){
		arrnewfileimagename = [];
		console.log(arrnewfileimagename);
	});
});
function removeShopImageDetailFromServerMulti(imagestoremove){
	return $.ajax({
		url : "/NhameyWebBackEnd/API/UploadRestController/removeShopMultipleImage",
		type: "POST",
		data : {
			"removeimagedata": imagestoremove		
		}
	});
}
function removeShopImageDetailFromServer(imagetoremove){
	return $.ajax({
		url : "/NhameyWebBackEnd/API/UploadRestController/removeShopSingleImage",
		type: "POST",
		data : {
			"removeimagedata":{
				"image_type" : "3",
				"logoimagename" : imagetoremove
			}			
		}
	});
}
function uploadShopImageDetailToServer(){
	alert(2);
	$("#coveruploadimage").show();
	$("#coveruploadimagewithload").show();
	
	var inputFile = $("#input-44");
	var filesToUpload = inputFile[0].files;
	console.log(filesToUpload);
	if (filesToUpload.length > 0) {
		var formData = new FormData();
		for (var i = 0; i < filesToUpload.length; i++) {
			var file = filesToUpload[i];
			formData.append("file[]", file, file.name);				
		}
		$.ajax({
			url: "/NhameyWebBackEnd/API/UploadRestController/shopImageDetailUpload",
			type: 'POST',
			data: formData,
			processData: false,
			contentType: false,
			success: function(data) {
				data = JSON.parse(data);
			    console.log(data);
			    var filelen = data.fileupload.length;			 
			    for(var i=0 ;i< filelen; i++){
				    if(data.fileupload[i].is_upload == true){
				    		arrnewfileimagename.push( data.fileupload[i].filename);
					}else{
						alert(data.fileupload[i].filename+" :: "+data.fileupload[i].message);
					}						
					console.log(data.fileupload[i].filename);
				}				
				console.log(arrnewfileimagename);
				$("#coveruploadimage").hide();
				$("#coveruploadimagewithload").hide();	
			}
		});
	}
}


function getDataToInsert(){
	var shopdata = {
		"ShopData":{
			"brand_id" : $("#selectedbrand").val(),
			"shop_name_en" : $("#shopengname").val() ,
			"shop_name_kh" : $("#shopkhname").val(),
			"shop_logo" : "123",
			"shop_cover" : "34343",
			"region_id" : 3,
			"shop_type_id" : 2,
			"shop_serve_type" : $("#shopservertype").val(),
			"shop_short_description": $("#shopshortdes").val() ,
			"shop_description" : $("#shopdes").val(),
			"shop_address": $("#shopaddress").val(),
			"shop_phone": shopphones.toString().replace(/[,]/g,"|").trim(),
			"shop_email":$("#shopemail").val(),
			"shop_working_day": countWorkingday().toString().replace(/[,]/g,"|").trim(),
			"shop_opening_time": $("#shopopentime").val(),
			"shop_close_time": $("#shopclosetime").val(),
			"shop_map_address": "32424",
			"shop_social_media": {
				"facebook" : $("#shopfb").val(),
				"instagram" : $("#shopinstagram").val(),
				"googleplus" : $("#shopgoogleplus").val(),
				"twitter": $("#shoptwitter").val()
			} ,
			"shop_remark": $("#shopremark").val(),
			"shop_image_detail": {
				"image_type" : "3",
				"image_detail" : arrnewfileimagename
			}
		}	
	};
	return shopdata;
}

$("#saveshop").on("click",function(){
	// console.log(getDataToInsert());
	 /* alert(0);
	 $.ajax({
		 type: "POST",
		 url: "/NhameyWebBackEnd/API/ShopRestController/insertShop", 
		 data: getDataToInsert(),
		 success: function(data){
         	alert(data);    
     	 }
     }); */
   /*  alert($("#logoupload").val());
    alert(logoimagename); */
  //  uploadShopImageDetailToServer();
	  console.log(getDataToInsert());
});




$("#brandname").on("focus keyup",function(){
	
	var srchbrandname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result").html("<img src='"+loadingimgsrc+"'  style='padding:20px;'/> "); 
	if(srchbrandname == '' || srchbrandname == null) srchbrandname = "all";
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/BrandRestController/getBrandByNameCombo/"+srchbrandname+"/10", 
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
			 var branddis = '';
			if(data.length <= 0){
				branddis +='<div  class="nham-dropdown-noresult">';
				branddis +=' <p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>';
				branddis +='  Searching "'+cutString(srchbrandname , 35)+'" has no Result!</p>';
				branddis +='</div>';
				branddis +='<div class="nham-dropdown-question">';
				branddis +='<p>Do you want to register "'+cutString(srchbrandname , 20)+'" as a new brand? (Yes to accept) or (NO to deny)</p>';
				branddis +='</div>';
				$("#nham-dropdown-footer").show();
			}else{	
				$("#nham-dropdown-footer").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 branddis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].brand_id+'" /><p><span class="title">'+data[i].brand_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result").html(branddis); 					 
   	 	 }
   });
});
$("#yesbrand").on("mousedown",function(){
	var branddata = {
		"BrandData" : {
			"brand_name" : $("#brandname").val(),
			"brand_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/BrandRestController/insertBrand",
		data : branddata,
		success : function(data){
			 data = JSON.parse(data);
			console.log(data);
			if(data.is_insert == false){
				alert("error");
			}else{
				$("#selectedbrand").val(data.brand_id);
			}
			//alert(data);
			
		}
	});
});



$("#regionid").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result-region").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	if(srchname == '' || srchname == null) srchname = "all";
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/RegionRestController/getRegionByNameCombo/"+srchname+"/10", 
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
			 var dis = '';
			if(data.length <= 0){
				dis +='<div  class="nham-dropdown-noresult">';
				dis +=' <p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>';
				dis +='  Searching "'+cutString(srchname , 15)+'" has no Result!</p>';
				dis +='</div>';
				dis +='<div class="nham-dropdown-question">';
				dis +='<p>Do you want to register "'+cutString(srchname , 20)+'" as a new brand?</p>';
				dis +='</div>';
				$("#nham-dropdown-footer-region").show();
			}else{	
				$("#nham-dropdown-footer-region").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 dis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].region_id+'" /><p><span class="title">'+data[i].region_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result-region").html(dis); 					 
   	 	 }
   });
});
$("#yesregion").on("mousedown",function(){
	var regiondata = {
		"RegionData" : {
			"region_name" : $("#regionid").val(),
			"region_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/RegionRestController/insertRegion",
		data : regiondata,
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.is_insert == false){
				alert("Insert error!");
			}else{
				//alert(data);
				$("#selectedregion").val(data.region_id);
			}
			
		}
	});
});



$("#shoptypename").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result-shoptype").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	if(srchname == '' || srchname == null) srchname = "all";
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/ShopTypeRestController/getShopTypeByNameCombo/"+srchname+"/10", 
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
			 var dis = '';
			if(data.length <= 0){
				dis +='<div  class="nham-dropdown-noresult">';
				dis +=' <p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>';
				dis +='  Searching "'+cutString(srchname , 15)+'" has no Result!</p>';
				dis +='</div>';
				dis +='<div class="nham-dropdown-question">';
				dis +='<p>Do you want to register "'+cutString(srchname , 20)+'" as a new brand?</p>';
				dis +='</div>';
				$("#nham-dropdown-footer-shoptype").show();
			}else{	
				$("#nham-dropdown-footer-shoptype").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 dis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].shop_type_id+'" /><p><span class="title">'+data[i].shop_type_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result-shoptype").html(dis); 					 
   	 	 }
   });
});
$("#yesshoptype").on("mousedown",function(){
	var shoptypedata = {
		"ShoptypeData" : {
			"shop_type_name" : $("#shoptypename").val(),
			"shop_type_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/ShopTypeRestController/insertShopType",
		data : shoptypedata,
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.is_insert == false){
				alert("Insert error!");
			}else{
				//alert(data);
				$("#selectedshoptype").val(data.shop_type_id);
			}
			
		}
	});
});




	
  </script>
</html>