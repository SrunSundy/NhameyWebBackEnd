<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<style>
 	
.nham-control-group {
  display: inline-block;
  vertical-align: top;
  text-align: left;
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  margin-right: 20px;
  
}
.nham-control {
  display: block;
  position: relative;
  padding-left: 30px;
  cursor: pointer;
 
}
.nham-control input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}
.nham-control__indicator {
  position: absolute;
  top: 2px;
  left: 0;
  height: 20px;
  width: 20px;
  background: #e3e3e3;
}
.nham-control--radio .nham-control__indicator {
  border-radius: 50%;
}
.nham-control:hover input ~ .nham-control__indicator,
.nham-control input:focus ~ .nham-control__indicator {
  background: #e3e3e3;
}
.nham-control input:checked ~ .nham-control__indicator {
  background: #dd4b39;
}
.nham-control:hover input:not([disabled]):checked ~ .nham-control__indicator,
.nham-control input:checked:focus ~ .nham-control__indicator {
  background: #dd4b39;
}
.nham-control input:disabled ~ .nham-control__indicator {
  background: #dd4b39;
  opacity: 0.6;
  pointer-events: none;
}
.nham-control__indicator:after {
  content: '';
  position: absolute;
  display: none;
}
.nham-control input:checked ~ .nham-control__indicator:after {
  display: block;
}
.nham-control--checkbox .nham-control__indicator:after {
  left: 8px;
  top: 4px;
  width: 5px;
  height: 10px;
  border: solid #fff;
  border-width: 0 2px 2px 0;
  transform: rotate(50deg);
}
.nham-control--checkbox input:disabled ~ .nham-control__indicator:after {
  border-color: #7b7b7b;
}








div.image-upload-wrapper{
	margin: 8px;
	width: 170px;
	min-height: 190px;
	padding: 5px;
	background: #E0E0E0;
	
}
img.upload-shop-img{
	max-width: 100%; 
	height: auto;
} 
 	</style>
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
                	<div class=" col-sm-12 nham-dropdown-wrapper" >
                		<div class="row">
                    		<input type="text" class="form-control input-lg nham-dropdown-inputbox"  placeholder="Search brand to insert shop">
                    	
                    		<div class="nham-dropdown-detail"  >
                    			<div class="nham-dropdown-result-wrapper">
	                    			<div class="nham-dropdown-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				<div class="nham-dropdown-result">
	                  					<p>sdfaaaaaaaaaaaaaaasff</p>
	                  				</div>
	                  				<div class="nham-dropdown-result">
	                  					<p>sdfddddddddddesff</p>
	                  				</div>
	                  				<div class="nham-dropdown-result">
	                  					<p>sdfeeeeeeeeeeeeeeeesff</p>
	                  				</div>
	                  				<div class="nham-dropdown-result">
	                  					<p>srrrrrrrrrrrrrrfsff</p>
	                  				</div>
	                  				<div class="nham-dropdown-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				
	                  				
                  					<div class="nham-dropdown-more" >
	                  					<p align="center">MORE</p>
                    				</div>
                  				
                  				</div>
                  				<div class="nham-dropdown-result-footer" align="center">
                  					<button class="btn nhamey-btn" id="yesbrand">Yes</button>
                  					<button class="btn nhamey-btn" id="test">No</button>
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
			                      <input type="text" class="form-control" placeholder="Shop Name in English">
			                      <input type="text" class="form-control top-gap" placeholder="Shop Name in Khmer">
		                     </div>
		                     
		                     <div class="form-group nham-dropdown-wrapper small">
			                    <label>Shop Region</label>
			                    <input type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search or Select for shop region">
                    	
	                    		<div class="nham-dropdown-detail"  >
	                    			<div class="nham-dropdown-result-wrapper">
		                    			<div class="nham-dropdown-result">
		                  					<p>sdfsff</p>
		                  				</div>
		                  				<div class="nham-dropdown-result">
		                  					<p>sdfaaaaaaaaaaaaaaasff</p>
		                  				</div>
		                  				<div class="nham-dropdown-result">
		                  					<p>sdfddddddddddesff</p>
		                  				</div>
		                  				<div class="nham-dropdown-result">
		                  					<p>sdfeeeeeeeeeeeeeeeesff</p>
		                  				</div>
		                  				<div class="nham-dropdown-result">
		                  					<p>srrrrrrrrrrrrrrfsff</p>
		                  				</div>
		                  				<div class="nham-dropdown-result">
		                  					<p>sdfsff</p>
		                  				</div>
		                  				
		                  				
	                  					<div class="nham-dropdown-more" >
		                  					<p align="center">MORE</p>
	                    				</div>
	                  				
	                  				</div>
	                  				<div class="nham-dropdown-result-footer" align="center">
	                  					<button class="btn nhamey-btn" id="yesshop">Yes</button>
	                  					<button class="btn nhamey-btn" id="test">No</button>
	                  				</div>
	                  			</div>
		                     </div>
		                     
		                     <div class="form-group nham-dropdown-wrapper small">
			                    <label>Shop Type</label>
			                    <input type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search or Select for Shop Type">
                    	
	                    		<div class="nham-dropdown-detail"  >
	                    			<div class="nham-dropdown-result-wrapper">
		                    			<div class="nham-dropdown-result">
		                  					<p>sdfsff</p>
		                  				</div>
		                  				<div class="nham-dropdown-result">
		                  					<p>sdfaaaaaaaaaaaaaaasff</p>
		                  				</div>
		                  				<div class="nham-dropdown-result">
		                  					<p>sdfddddddddddesff</p>
		                  				</div>
		                  				<div class="nham-dropdown-result">
		                  					<p>sdfeeeeeeeeeeeeeeeesff</p>
		                  				</div>
		                  				<div class="nham-dropdown-result">
		                  					<p>srrrrrrrrrrrrrrfsff</p>
		                  				</div>
		                  				<div class="nham-dropdown-result">
		                  					<p>sdfsff</p>
		                  				</div>
		                  				
		                  				
	                  					<div class="nham-dropdown-more" >
		                  					<p align="center">MORE</p>
	                    				</div>
	                  				
	                  				</div>
	                  				<div class="nham-dropdown-result-footer" align="center">
	                  					<button class="btn nhamey-btn" id="test">Yes</button>
	                  					<button class="btn nhamey-btn" id="test">No</button>
	                  				</div>
	                  			</div>
		                     </div>
		                     
		                     <div class="form-group">
			                    <label>Shop Server Type</label>
			                    <select class="form-control " style="width: 100%;">
			                      <option selected="selected">Food</option>
			                      <option>Drink</option>
			                    
			                    </select>
			                  </div><!-- /.form-group -->
			                  
			                  <div class="form-group">
			                     <label>Short Description</label>
			                     <textarea class="form-control" rows="3" placeholder="describe shortly about the shop" style="resize:none;"></textarea>
			                  </div>
			                  
			                  <div class="form-group">
			                     <label>Description</label>
			                     <textarea class="form-control" rows="3" placeholder="describe briefly about the shop"  style="resize:vertical;"></textarea>
			                  </div>
			                  
			                  <div class="form-group">
			                     <label>Shop address</label>
			                     <textarea class="form-control" rows="3" placeholder="add shop location (sergkat , khan , street ...)"  style="resize:none;"></textarea>
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
			                      <input type="text" class="form-control" placeholder="Shop Email address">			                      
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
			                      <input type="text" class="form-control timeformat" placeholder="Time to open (ex: 8:00)">			                      
		                      </div>
		                      
		                      <div class="form-group">
			                      <label>Shop Closing Time</label>
			                      <input type="text" class="form-control timeformat" placeholder="Time to close (ex: 20:30)">			                      
		                      </div>
		                      
		                      <div class="input-group top-gap">
			                    <span class="input-group-addon"><i class="fa fa-facebook-square font-size-20" aria-hidden="true"  ></i></span>
			                    <input type="text" class="form-control" placeholder="Facebook page's link (ex:https://www.facebook.com/shopname)">
			                  </div>
			                  			    		                      
		                      <div class="input-group top-gap">
			                    <span class="input-group-addon"><i class="fa fa-instagram font-size-20" aria-hidden="true"  ></i></span>
			                    <input type="text" class="form-control" placeholder="Instagram page's link (ex:https://www.instagram.com)">
			                  </div>
			                  
			                  <div class="input-group top-gap">
			                    <span class="input-group-addon"><i class="fa fa-google-plus font-size-20" aria-hidden="true"  ></i></span>
			                    <input type="text" class="form-control" placeholder="Facebook page's link (ex:https://plus.google.com)">
			                  </div>
			                  
			                  <div class="input-group top-gap">
			                    <span class="input-group-addon"><i class="fa fa-twitter font-size-20" aria-hidden="true"  ></i></span>
			                    <input type="text" class="form-control" placeholder="Facebook page's link (ex:https://twitter.com)">
			                  </div>
			                  
			                   <div class="form-group">
			                     <label>Remark</label>
			                     <textarea class="form-control" rows="3" placeholder="describe what you haven't done for saving shop" style="resize:none;"></textarea>
			                   </div>
			
			            </section><!-- /.Left col -->
			            <!-- right col (We are only adding the ID to make the widgets sortable)-->
			            <section class="col-lg-7 connectedSortable">
							<h5 class="gray-color">Informative Image</h5>
							<div  class="form-group">
								<label>Logo</label>
								<div class="col-lg-12 logo-browsing-wrapper" align="center"  style="position:relative;">											                     		                  		                    	  
			                    	<input type='file' id="logoupload" style="display: none;"/>
			                    	<div class="image-upload-wrapper" id="logo-upload-wrapper">
			                    		
			                    	</div>
   									
									<div id="cover-upload-image" style="position:absolute;width: 100%;top:0; left:0; height: 100%; z-index: 200;">
										
									</div>
												                    	  		                    	  		                    	  
								</div>
							</div>
							
							<div  class="form-group">
								<label>Cover</label>
								<div class="col-lg-12 logo-browsing-wrapper" align="center"  style="position:relative;">
												                     		                  		                    	  
			                    	<div class="fileinput fileinput-new " data-provides="fileinput">
										<div class="fileinput-preview thumbnail image-browsing" data-trigger="fileinput" style="width: 170px; height: 190px;">
											<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThQkfXNS4-nJ2yGOOalgeEmAI1sWhTOpnbiZf6BW2u3uHWxLHUdA" />								  
										
										</div>
										<div style="display:none">
										    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input id="logo-upload" onchange="readURL(this);" type="file"  name="..."></span>
										    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
										</div>
									</div>
									<div id="cover-upload-image" style="position:absolute;width: 100%;top:0; left:0; height: 100%; z-index: 200;">
										
									</div>
												                    	  		                    	  		                    	  
								</div>
							</div>
							
							<div  class="form-group">
								<label>Shop map</label>
								<div class="nham-embed-googlemap">
									
									<script type="text/javascript"
										 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSDjBA-4xhfV7TGP1jrTBcBJ4p70mmezo"></script>
									
									<div id="map_canvas" style="width: 100%; height: 300px;"></div>
									
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
									            getAddress(location);
									        }
									
									      function getAddress(latLng) {
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
									        }
									      }
									      google.maps.event.addDomListener(window, 'load', initialize)
									
									</script>
				                  </div>
			                 </div> 
			                 
			                  <div class="form-group">

                                	<label class="control-label">Select File</label>
									<input id="input-44" name="input44[]" type="file" multiple class="file-loading">
									<div id="errorBlock" class="help-block"></div>
                              </div>
                              
							
							 			      			
			            </section><!-- right col -->
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
  
//phone adding
var shopphones = [];
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
		//workingday = [1,2,3,4,5,6,7];
		$(".work-day").prop('checked', true);
	}else{
	//	workingday = [];
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

$("#saveshop").on("click",function(){

	
});


   $("#input-44").fileinput({
       uploadUrl: '/file-upload-batch/2',
       maxFilePreviewSize: 10240,
       browseClass: "btn btn-danger",
       allowedFileExtensions: ["jpg", "png", "gif"],
       showUpload: false,
            
   });
 
	   
		$("#cover-upload-image").on("click",function(){
	
			$("#logoupload").click();
		});

		        function readURL(input) {

		            if (input.files && input.files[0]) {
		                var reader = new FileReader();

		                reader.onload = function (e) {
		                	
		                	var myimg ='<img id="logoimage" class="upload-shop-img" src="'+e.target.result+'" alt="your image" />';
		                    $('#logo-upload-wrapper').html(myimg);
		                }

		                reader.readAsDataURL(input.files[0]);
		            }
		        }

		        $("#logoupload").change(function(){
		            readURL(this);
		        });
		$("#test").on("click",function(){
			alert(1);
		});
  </script>
</html>