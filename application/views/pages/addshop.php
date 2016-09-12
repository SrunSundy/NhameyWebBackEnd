<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<style>
 		
 	div.nham-dropdown-detail{
 					
 		background:#fff;
 		display:none; 
 		border: 1px solid #BDBDBD;
 		position: absolute;
 		width:100%;
 		z-index:99999;
 	}
 	div.nham-dropdown-result-wrapper{
 		height:210px;
 		overflow-y: auto;	
 	}
 	
 	.small div.nham-dropdown-result-wrapper{
 		height:180px;
 		overflow-y: auto;	
 	}
 	div.nham-dropdown-result,div.nham-dropdown-more{
 		width: 100%;
 		height: 35px;
 		line-height: 30px;
 		border-top: 1px solid #E0E0E0;
 		cursor: pointer;
 	}
 	
 	.small div.nham-dropdown-result,.small div.nham-dropdown-more{
 		width: 100%;
 		height: 30px;
 		line-height: 30px;
 		border-top: 1px solid #E0E0E0;
 		cursor: pointer;
 	}
 	
 	div.nham-dropdown-result p{
 		margin-left: 8px;
 	}
 	
 	div.nham-dropdown-result-footer{
 		border-top:  1px solid #E0E0E0;
 		padding: 10px;
 		height: 60px;
 		
 	}
 	.small div.nham-dropdown-result-footer{
 		border-top:  1px solid #E0E0E0;
 		padding: 10px;
 		height: 50px;
 		
 	}
 	div.nham-dropdown-result:hover{
 	
 		background: #E0E0E0;
 	}
 	.nham-dropdown-wrapper{
 		position:relative;
 	}
 	button.nhamey-btn{
 		 
 		 width: 130px;
 		 height: 40px;
 		 border-radius: 0;
 	
 	}
 	.small button.nhamey-btn{
 		 
 		 width: 130px;
 		 height: 30px;
 		 border-radius: 0;
 	
 	}
 	
 	
 	
 	
 
 	
 	
 	div.add-background{
 	
 		background: #E0E0E0;
 	}
 	
 
 	div.div-top-gap{
 	
 		margin-top: 10px;
 	}
 	.gray-color{
 		color: #9E9E9E;
 		font-style: italic;
 		font-size: 16px;
 	}
 	.gray-color-noitalic{
 		color: #9E9E9E;
 		font-size: 16px;
 	}
 	span.red-background{
 		background: #dd4b39 !important;
 		color: #fff;
 	}
 	div.image-browsing{
 		width: 170px;
 		height: 190px;
 		border-radius: 0;
 		background: #E0E0E0;
 		cursor: pointer;
 		margin-top:12px;
 	}
 	
 	
 	div.logo-browsing-wrapper{
 		cursor: pointer;
 		border: 1px solid #E0E0E0; 
 		
 	}
 	p.tagp-of-i{
 		
 		font-size: 80px;
 		color: #9E9E9E;
 	}
 	.top-gap{
 		margin-top: 6px;
 	}
 	
 	span.nham-box-wrap{
 		background: #BDBDBD;
 		margin-right:2px;
 		padding: 3px;
 		border-radius: 2px;
 	}
 	
 	span.nham-box-wrap > i:hover{
 		cursor: pointer;
 	}
 	
 	span.nham-box-wrap:hover{
 		background: #9E9E9E;
 	}
 	
 	div.phone-add-result{
 		margin-top: 6px;
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
			                      <input type="text" class="form-control inputmaskphone">
			                      <div class="input-group-addon">
			                        <i class="fa fa-plus"></i>
			                      </div>
			                    </div><!-- /.input group -->
			                  	 <div class="phone-add-result" >
			                    	<span class="nham-box-wrap">		                    		
			                    		<span>014255545</span>
			                    		<i class="fa fa-close" style="margin-left:5px;"></i>
			                    	</span>
			                    	<span class="nham-box-wrap">		                    		
			                    		<span>014255545</span>
			                    		<i class="fa fa-close" style="margin-left:5px;"></i>
			                    	</span>
			                    	<span class="nham-box-wrap">		                    		
			                    		<span>014255545</span>
			                    		<i class="fa fa-close" style="margin-left:5px;"></i>
			                    	</span>
			                    	
			                    </div>
			                  </div><!-- /.form group -->
			                  
			                  
			
			            </section><!-- /.Left col -->
			            <!-- right col (We are only adding the ID to make the widgets sortable)-->
			            <section class="col-lg-7 connectedSortable">
							<h5 class="gray-color">Informative Image</h5>
							<div  class="form-group">
								<label>Logo</label>
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
									            alert(location);
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
							
							 			      			
			            </section><!-- right col -->
			          </div><!-- /.row (main row) -->
                </div>
                <div class="box-footer">
                 
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
	  mask: '(999)-999-9999'
	});
	//add event handler to hide the `txtAddGenreContainer` element when the document is clicked
	 /*  $(document).on('click', function () {
	      var $tar = $(".nham-dropdown-detail");//UPDATE
	    	  $tar.hide();
	      
	  }); */
	
	  //add event handler to the `addGenreFinal` and `newGenreTxt` elements to stop the click event from bubbling up the document
	  /* $('.nham-dropdown-detail , .nham-dropdown-inputbox').on('click', function (event) {
	      event.stopPropagation();
	  });
 */
 $(".nham-dropdown-inputbox").on("focus keyup",function(){
	 
	 	var trigger = false;
		$(this).siblings(".nham-dropdown-detail").show();
		 $(".nham-dropdown-result").on("mousedown",function(){		
			 trigger = true;
			  $(this).siblings().removeClass("add-background");
			  $(this).addClass("add-background");
			  $(this).parents(".nham-dropdown-detail").siblings(".nham-dropdown-inputbox").val($(this).text().trim());
			  $(this).parents(".nham-dropdown-detail").hide();
			 
		});
		 $(".nham-dropdown-inputbox").on("blur",function(){
	 		 if(!trigger){
	 			$(".nham-dropdown-detail").hide();	
	 		 }		
		}); 

 });
	   

	


		
		$("#cover-upload-image").on("click",function(){
	
			$("#logo-upload").click();
		});

		function readURL() {
			/* alert(input.files.length);
		            // if (input.files && input.files[0]) {
		                var reader = new FileReader();

		                reader.onload = function (e) {
						alert(e.target.result);
						alert($("#yyy").val());
						console.log(e.target.result);
							var test = '<img src="'+e.target.result+'" />';
		                    $('#imagewrapper').append(test);
		               
		                };

		                reader.readAsDataURL(input.files[0]);
		          //  }
		        } */
		   }
		$("#test").on("click",function(){
			alert(1);
		});
  </script>
</html>
