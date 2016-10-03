<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
<style>
span.select2-selection{
		height: 40px;
		border-radius: 0;
}
textarea:focus{
    outline: none;
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
                	<div class=" col-sm-12 nham-dropdown-wrapper">
                		<div class="row">
                			<div class="selected-dropdown">
                    		   <input id="branchname" type="text" class="form-control input-lg nham-dropdown-inputbox"  placeholder="Search branch to insert shop">
                    	       <input type="hidden" class="selectedbranchid" id="selectedbranch"/>
                    	    </div>
                    		<div class="nham-dropdown-detail"  >
                    			<div class="nham-dropdown-result-wrapper">
                    				<div id="display-result" class="display-result-wrapper" style="min-height:35px;">                  					
                    				</div>   								
                  				</div>
                  				<div id="display-searching-text" style="display:none;">
                  					<div  class="nham-dropdown-noresult">
										<p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>
											Searching "<span id="text-search-dis1"></span>" has no Result!</p>
									</div>
									<div class="nham-dropdown-question">	
										<p>Do you want to register "<span id="text-search-dis2"></span>" as a new branch?</p>
									</div>
                  				</div>
                  				
                  				<div id="nham-dropdown-footer" class="nham-dropdown-result-footer" align="center">
                  					<button class="btn nhamey-btn" id="yesbranch">Yes</button>
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
			                    <label>Shop Cuisine</label>
			                    <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="selected-dropdown">
			                    		    <input id="cuisinename" type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search or Select for shop cuisine">
			                    	       <input type="hidden" class="selectedbranchid" id="selectedcuisine"/>
			                    	    </div>
			                    		<div class="nham-dropdown-detail"  >
			                    			<div class="nham-dropdown-result-wrapper">
			                    				<div id="display-result-cuisine" class="display-result-wrapper">
			                    					
			                    				</div>
			       				
			                  				</div>
			                  				<div id="display-searching-text_cuisine" style="display:none;">
			                  					<div  class="nham-dropdown-noresult">
													<p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>
														Searching "<span id="text-search-cuisine-dis1"></span>" has no Result!</p>
												</div>
												<div class="nham-dropdown-question">	
													<p>Do you want to register "<span id="text-search-cuisine-dis2"></span>" as a new cuisine?</p>
												</div>
			                  				</div>
			                  				<div id="nham-dropdown-footer-cuisine" class="nham-dropdown-result-footer" align="center">
			                  					<button class="btn nhamey-btn" id="yescuisine">Yes</button>
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
			                    		    <input id="shoptypename" type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search or Select for shop type">
			                    	        <input type="hidden" class="selectedbranchid" id="selectedshoptype"/>
			                    	    </div>
			                    		<div class="nham-dropdown-detail"  >
			                    			<div class="nham-dropdown-result-wrapper">
			                    				<div id="display-result-shoptype" class="display-result-wrapper">
			                    					
			                    				</div>
			       				
			                  				</div>
			                  				
			                  				<div id="display-searching-text_shoptype" style="display:none;">
			                  					<div  class="nham-dropdown-noresult">
													<p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>
														Searching "<span id="text-search-shoptype-dis1"></span>" has no Result!</p>
												</div>
												<div class="nham-dropdown-question">	
													<p>Do you want to register "<span id="text-search-shoptype-dis2"></span>" as a new cuisine?</p>
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
		                      
		                      <div class="form-group" style="min-height:100px;"  >
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
				                  <div class="col-lg-12" style="margin-bottom:20px;;margin-top:-10px;">
				                  	<div class="row">
					                   					                    
					                     <div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Monday
											    <input type="checkbox"  id="mon" value="1"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Tuesday
											    <input type="checkbox"  id="tue" value="2"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Wednesday
											    <input type="checkbox" id="wed" value="3"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Thursday
											    <input type="checkbox"  id="thur" value="4"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Friday
											    <input type="checkbox"  id="fri" value="5"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Saturday
											    <input type="checkbox"  id="sat" value="6"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="nham-control-group div-top-gap">
											  <label class="nham-control nham-control--checkbox">Sunday
											    <input type="checkbox"  id="sun" value="7"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
					                    					                    
				                    </div>
			                  	  </div>	                      
		                      </div>
			                 			               
			                  <div class="bootstrap-timepicker form-group">
			                    <div class="form-group">
			                      <label>Shop Opening Time</label>
			                      <input id="shopopentime" type="text" class="form-control timepicker" value="9:00">			                      
			                    </div><!-- /.form group -->
			                  </div>
			                  
			                  <div class="bootstrap-timepicker">
			                    <div class="form-group">
			                      <label>Shop Closing Time</label>
			                      <input id="shopclosetime" type="text" class="form-control timepicker" value="21:00">			                      
			                    </div><!-- /.form group -->
			                  </div>
                           		                 	                      
		                      <div class="form-group" >
		                      	<div class="col-lg-12">
		                      		<div class="row">
				                      <div style="float: left;">
				                      	<label>Shop Facilities</label>
				                      </div>
					                  <div style="float:left;margin-left: 20px;">
						                  <div class="form-group">
						                    	  <div class="">
												    <label class="nham-control nham-control--checkbox">All
												      <input type="checkbox"  value="0" id="allfacilities"/>
												      <div class="nham-control__indicator"></div>
												    </label>
												  </div>			                   
						                  </div>
					                  </div>
					                  
					                  <div style="clear:both;"></div>
					                 </div>
				                  </div>
				                  <div class="col-lg-12" style="margin-bottom:20px;margin-top:-10px;">
				                  	<div class="row">
					                   					                    
					                     <div class=" col-lg-12 div-top-gap" >
											  <label class="nham-control nham-control--checkbox">WiFi
											    <input type="checkbox"  id="wifi" value="1"  class="shop-facility"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class=" col-lg-12 div-top-gap" >
											  <label class="nham-control nham-control--checkbox" >Parking lot
											    <input type="checkbox"  id="parking" value="2"  class="shop-facility"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class=" col-lg-12 div-top-gap">
											  <label class="nham-control nham-control--checkbox">Air Conditioner
											    <input type="checkbox" id="aircon" value="3"  class="shop-facility"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class=" col-lg-12 div-top-gap">
											  <label class="nham-control nham-control--checkbox">Reservation
											    <input type="checkbox"  id="reserve" value="4"  class="shop-facility"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class=" col-lg-12 div-top-gap">
											  <label class="nham-control nham-control--checkbox">Tax Invoice
											    <input type="checkbox"  id="taxinvoice" value="5"  class="shop-facility"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
									
					                    					                    
				                    </div>
			                  	  </div>	                      
		                      </div>
		                      
		                      <div class="input-group top-gap">
			                    <span class="input-group-addon "><i class="fa fa-facebook-square font-size-20" aria-hidden="true"  ></i></span>
			                    <input id="shopfb" type="text" class="form-control" placeholder="Facebook page's link (ex:https://www.facebook.com/shopname)">
			                  </div>
			                  			    		                      
		                      <div class="input-group top-gap">
			                    <span class="input-group-addon"><i class="fa fa-instagram font-size-20" aria-hidden="true"  ></i></span>
			                    <input id="shopinstagram" type="text" class="form-control" placeholder="Instagram page's link (ex:https://www.instagram.com)">
			                  </div>
			                  
			                  <div class="input-group top-gap">
			                    <span class="input-group-addon"><i class="fa fa-twitter font-size-20" aria-hidden="true"  ></i></span>
			                    <input id="shoptwitter" type="text" class="form-control" placeholder="Twitter page's link (ex:https://twitter.com)">
			                  </div>
			                  
			                  <div class="input-group top-gap">
			                    <span class="input-group-addon"><i class="fa fa-google-plus font-size-20" aria-hidden="true"  ></i></span>
			                    <input id="shopgoogleplus"  type="text" class="form-control" placeholder="Googleplus page's link (ex:https://plus.google.com)">
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
								<div class="col-lg-12 logo-browsing-wrapper" align="center">
									<div class="row">
										<div class="col-lg-12 " align="center"  style="position:relative;">											                     		                  		                    	  
					                    	<input type='file' id="logoupload" style="display: none;" accept="image/*"/>
					                    	<div class="image-upload-wrapper" id="logo-upload-wrapper">
					                    		<label class="gray-image-plus"><i class="fa fa-plus"></i></label>
					                    		<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 500 x 500 </p>
					                    		<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add logo image </p>
					                    		
					                    	</div> 	
					                    										
											<div id="logo-upload-image" class="upload-image-hover" ></div>
											<div id="loading-wrapper" class="upload-image-loading" style="display:none" >
												 <div class="progress progress-xxs">
								                    <div id="logoprogressbar" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="">					                      
								                    </div>
								                  </div>
												  <img class="loading-inside-box" src="<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif" style="height:15px;width:23px;" />
												  <i class="fa fa-times disable-cover" id="logo-disable-cover" aria-hidden="true" title="close" ></i>
											</div>
											<div id="uploadimageremoveback" class="upload-image-remove-background" style="display:none"></div>
											<div id="removelogoimagewrapper" class="upload-image-remove" style="display:none" >
												<i id="removelogoimage" class="fa fa-trash" aria-hidden="true"></i>	
												
											</div>
											<div id="removeloadingwrapper" class="upload-image-remove" style="display:none">
												 <img  class="loading-inside-box" src="<?php echo base_url() ?>application/views/nhamdis/img/removeload.gif" style="height:23px;width:23px;" />										
											</div>
														                    	  		                    	  		                    	  
										</div>
										<textarea rows="" placeholder="add description..." id="logo_description" style="width:98%;border:0;bottom:0px;display:none;resize:none;" cols=""></textarea>
									</div>
								</div>
							</div>
							
							<div  class="form-group">
								<label>Cover</label>
								<div class="col-lg-12 logo-browsing-wrapper" align="center">
									<div class="row">
										<div class="col-lg-12" align="center"  style="position:relative;">												                     		                  		                    	  
					                    	<input type='file' id="coverupload" style="display: none;" accept="image/*"/>
					                    	<div class="image-upload-wrapper-cover" id="cover-upload-wrapper">
					                    		<label class="gray-image-plus"><i class="fa fa-plus"></i></label>
					                    		<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 700 x 500 </p>
					                    		<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add cover image </p>
					                    	</div> 
											<div id="cover-upload-image" class="upload-image-hover"></div>
											<div id="loading-wrapper-cover" class="upload-image-loading" style="display:none" >
												 <div class="progress progress-xxs">
								                    <div id="logoprogressbar-cover" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="">					                      
								                    </div>
								                  </div>
												  <img class="loading-inside-box" src="<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif" style="height:15px;width:23px;" />
												  <i class="fa fa-times disable-cover" id="cover-disable-cover" aria-hidden="true" title="close" ></i>
											</div>
											<div id="uploadimageremoveback-cover" class="upload-image-remove-background" style="display:none"></div>
											<div id="removelogoimagewrapper-cover" class="upload-image-remove" style="display:none" >
												<i id="removelogoimage-cover" class="fa fa-trash" aria-hidden="true"></i>										
											</div>
											<div id="removeloadingwrapper-cover" class="upload-image-remove" style="display:none">
												 <img  class="loading-inside-box" src="<?php echo base_url() ?>application/views/nhamdis/img/removeload.gif" style="height:23px;width:23px;" />										
											</div>																				                    	  		                    	  		                    	  
										</div>
										<textarea rows="" placeholder="  add description..." id="cover_description" style="width:98%;bottom:0px;margin-top:5px;display:none;" cols=""></textarea>
									</div>
								</div>
						
							</div>
							
							
			                <div class="form-group ">
			                    <label>Shop Address</label>
			                	<div class="col-lg-12 top-gap">
			                		<div class="row">
						                 <div class="input-group top-gap">
						                    <span class="input-group-addon"><i class="fa fa-globe font-size-20" aria-hidden="true"></i></span>
						                     <select class="form-control nham-control  select2" id="nham_country" style="width: 100%; border-radius: 0!important;">
						                      	
						                    </select>
						                  </div>
						                
					                 </div>
				                 </div>
				                  
				                 <div class="col-lg-12 ">
			                		<div class="row">
						                 <div class="input-group top-gap">
						                    <span class="input-group-addon"><i class="fa fa-map " aria-hidden="true"  ></i></span>
						                     <select class="form-control nham-control  select2" id="nham_city"  style="width: 100%; border-radius: 0!important;">
						                     	
						                    </select>
						                  </div>
						                
					                 </div>
				                 </div>
				                 
				                 <div class="col-lg-12 ">
			                		<div class="row">
						                 <div class="input-group top-gap">
						                    <span class="input-group-addon"><i class="fa fa-map-signs " aria-hidden="true"  ></i></span>
						                     <select class="form-control nham-control  select2" id="nham_district"  style="width: 100%; border-radius: 0!important;">
						                    	
						                    </select>
						                  </div>
						                
					                 </div>
				                 </div>
				                 
				                  <div class="col-lg-12 ">
			                		<div class="row">
						                 <div class="input-group top-gap">
						                    <span class="input-group-addon"><i class="fa fa-map-signs " aria-hidden="true"  ></i></span>
						                     <select class="form-control nham-control select2" id="nham_commune"  style="width: 100%; border-radius: 0!important;">
						                     	
						                    </select>
						                  </div>
						                
					                 </div>
				                 </div>
				                 
				                 <div class="col-lg-12 ">
			                		<div class="row">
						                 <div class="input-group top-gap">
						                    <span class="input-group-addon"><i class="fa fa-map-marker font-size-20" aria-hidden="true"  ></i></span>
						                    <input id="shopstreetad" type="text" class="form-control" placeholder="Street Address">
						                  </div>
					                 </div>
				                 </div>
				                 
				                 
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
								<div class="nham-embed-googlemap col-lg-12">
									<div class="row">
										<script type="text/javascript"
											 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSDjBA-4xhfV7TGP1jrTBcBJ4p70mmezo"></script>
										
										<div id="map_canvas" style="width: 100%; height: 610px;"></div>
									</div>
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
									
</script>
 
 <script>

//phone adding
$(document).ready(function(){

	$(".select2").select2();
	$("span.select2-selection").css({ "height":"35px","border-radius" : "0","border":"1px solid #ccc"});
	
	 $(".timepicker").timepicker({
         showInputs: false,
         showMeridian : false,
         maxHours : 24
      });
	
});
  var shopphones = [];
  var arrnewfileimagename = [];
  var logoimagename = "";
  var coverimagename = "";

  loadCountryData();

  function loadCountryData(){

	 $.ajax({
		type : "GET",
		url  : "/NhameyWebBackEnd/API/CountryRestController/getCountryCombo",
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.length > 0){
				$("#nham_country").children().remove();
				var country = '';
				for(var i=0 ; i< data.length; i++){
					if(i==0){
						country += '<option selected="selected" value="'+data[i].country_id+'">'+data[i].country_name+'</option>';
					}else{
						country +='<option value="'+data[i].country_id+'">'+data[i].country_name+'</option>';
					}
					
				}
				$("#nham_country").append(country);
				alert($("#nham_country option:selected").val());
				loadCityData($("#nham_country option:selected").val());
			}
			
		}		
	 });
  }

  function loadCityData( countryid ){

	  $.ajax({
			type : "GET",
			url  : "/NhameyWebBackEnd/API/CityRestController/getCityCombo/"+countryid,
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
				if(data.length > 0){
					$("#nham_city").children().remove();
					var city = '';
					for(var i=0 ; i< data.length; i++){
						if(i == 0){
							city +='<option selected="selected" value="'+data[i].city_id+'">'+data[i].city_name+'</option>';
						}else{
							city +='<option value="'+data[i].city_id+'">'+data[i].city_name+'</option>';
						}
						
					}
					$("#nham_city").append(city);
					alert(city);
					alert($("#nham_city option:selected").val());
					loadDistrictData( $("#nham_city option:selected").val() );
				}
				
			}		
	  });
  }

  function loadDistrictData( cityid ){

	  $.ajax({
			type : "GET",
			url  : "/NhameyWebBackEnd/API/DistrictRestController/getDistrictCombo/"+cityid,
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
				if(data.length > 0){
					$("#nham_district").children().remove();
					var district = '';
					for(var i=0 ; i< data.length; i++){
						if(i == 0){
							district +='<option selected="selected" value="'+data[i].district_id+'">'+data[i].district_name+'</option>';
						}else{
							district +='<option value="'+data[i].district_id+'">'+data[i].district_name+'</option>';
						}
						
					}
					$("#nham_district").append(district);
					loadCommuneData( $("#nham_district option:selected").val() );
				}			
			}		
	  });
  }

  function loadCommuneData( districtid ){

	  $.ajax({
			type : "GET",
			url  : "/NhameyWebBackEnd/API/CommuneRestController/getCommuneCombo/"+districtid,
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
				if(data.length > 0){
					$("#nham_commune").children().remove();
					var commune = '';
					for(var i=0 ; i< data.length; i++){
						if(i == 0){
							commune +='<option selected="selected" value="'+data[i].commune_id+'">'+data[i].commune_name+'</option>';
						}else{
							commune +='<option value="'+data[i].commune_id+'">'+data[i].commune_name+'</option>';
						}
						
					}
					$("#nham_commune").append(commune);
				}
				
			}		
	  });
  }
  
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
/*   //Flat red color scheme for iCheck
  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    checkboxClass: 'icheckbox_flat-red',
    radioClass: 'iradio_flat-red'
  });
   */

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


$("#allfacilities").on("change", function(){
	if($(this).is(":checked")){		
		$(".shop-facility").prop('checked', true);
	}else{
		$(".shop-facility").prop('checked', false);
	}
});
$(".shop-facility").on("change", function(){
	
	if($(this).is(":checked")){
		var len = $("input.shop-facility:checked").length;
		if(len >= 5){
			$("#allfacilities").prop('checked', true);
		}
	}else{
		$("#allfacilities").prop('checked', false);
	}
});
/* function getShopFacilityData(){
	var shopfacilities = {
		"wifi" : isCheckFacility("wifi"),
		"parking-lot" : isCheckFacility("parking"),
		"air-conditioner" : isCheckFacility("aircon"),
		"reservation" : isCheckFacility("reserve"),
		"tax-invoice": isCheckFacility("taxinvoice")
	};
	return shopfacilities;
} */
function isCheckFacility( radioid ){
	var check = 0;
	if($("#"+radioid).is(":checked")){
		check = 1;
	}
	return check;
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
$("#logo-disable-cover").on("click", function(){
	$("#logoupload").val(null);
	$("#loading-wrapper").hide();
	$("#logo-upload-image").removeClass("loading-box");
	var txt = '<label class="gray-image-plus">';
	txt += '  <i class="fa fa-plus"></i>';
	txt += '</label>';
	txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 500 x 500 </p>';            	
	txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add logo image </p>';
	$('#logo-upload-wrapper').html(txt);	
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
				"imagename" : logoimagename
			}			
		},
		success: function(data){
			
			logoimagename="";
			$("#logoupload").val(null);
			$("#uploadimageremoveback").hide();
			$("#removelogoimagewrapper").hide();
			var txt = '<label class="gray-image-plus">';
				txt += '  <i class="fa fa-plus"></i>';
				txt += '</label>';
				txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 500 x 500 </p>';            	
				txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add logo image </p>';
			$('#logo-upload-wrapper').html(txt);
			$("#removeloadingwrapper").hide();
			$("#logo_description").hide();
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
				console.log(data);
				if(data.is_upload == false){
					alert("error uploading!");
					alert(data.message);
				}else{
					logoimagename = data.filename;
					$("#loading-wrapper").hide();
					$("#logo-upload-image").removeClass("loading-box");
					$("#uploadimageremoveback").show();
					$("#removelogoimagewrapper").show();
					$("#logo_description").show();
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
$("#removelogoimage-cover").on("click",function(){
	removeCoverImageFromServer();
}); 
$("#cover-disable-cover").on("click", function(){
	$("#coverupload").val(null);
	$("#loading-wrapper-cover").hide();
	$("#cover-upload-image").removeClass("loading-box");
	var txt = '<label class="gray-image-plus">';
	txt += '  <i class="fa fa-plus"></i>';
	txt += '</label>';
	txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 700 x 500 </p>';            	
	txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add cover image </p>';
	$('#cover-upload-wrapper').html(txt);	
});
$("#coverupload").change(function(){
	uploadCover(this);
});
function uploadCover(input){
	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) {
 			 upoloadCoverToServer();
		      var myimg ='<img  class="upload-shop-img" src="'+e.target.result+'" alt="your image" />';
		              $('#cover-upload-wrapper').html(myimg);
		}
		reader.readAsDataURL(input.files[0]);
	}else{
		 var txt  = '<label class="gray-image-plus">';
			 txt += '<i class="fa fa-plus"></i>';
			 txt += '</label>';
			 txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 700 x 500 </p>';
			 txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add cover image </p>';
		 $('#cover-upload-wrapper').html(txt);
	}
	
}
function removeCoverImageFromServer(){
	$("#removeloadingwrapper-cover").show();
	$.ajax({
		url : "/NhameyWebBackEnd/API/UploadRestController/removeShopSingleImage",
		type: "POST",
		data : {
			"removeimagedata":{
				"image_type" : "1",
				"imagename" : coverimagename
			}			
		},
		success: function(data){
			
			coverimagename="";
			$("#coverupload").val(null);
			$("#uploadimageremoveback-cover").hide();
			$("#removelogoimagewrapper-cover").hide();
			var txt = '<label class="gray-image-plus">';
				txt += '  <i class="fa fa-plus"></i>';
				txt += '</label>';
				txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 500 x 500 </p>';            	
				txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add logo image </p>';
			$('#cover-upload-wrapper').html(txt);
			$("#removeloadingwrapper-cover").hide();
			$("#cover_description").hide();
		}
	});	
}
function upoloadCoverToServer(){
	var inputFile = $("#coverupload");
	$("#cover-upload-image").addClass("loading-box");
	$("#loading-wrapper-cover").show();
	var fileToUpload = inputFile[0].files[0];
	console.log(fileToUpload);
	if(fileToUpload != 'undefined'){

		var formData = new FormData();
		formData.append("file",  fileToUpload);
		
		$.ajax({
			url: "/NhameyWebBackEnd/API/UploadRestController/shopCoverUploadImage",
			type: "POST",
			data : formData,
			processData : false,
			contentType : false,
			success: function(data){
				data = JSON.parse(data);
				console.log(data);
				if(data.is_upload == false){
					alert("error uploading!");
					alert(data.message);
				}else{
					coverimagename = data.filename;
					$("#loading-wrapper-cover").hide();
					$("#cover-upload-image").removeClass("loading-box");
					$("#uploadimageremoveback-cover").show();
					$("#removelogoimagewrapper-cover").show();
					$("#cover_description").show();
				}
				
			},
			xhr: function() {
				var xhr = new XMLHttpRequest();
				xhr.upload.addEventListener("progress", function(event) {
					if (event.lengthComputable) {
						var percentComplete = Math.round( (event.loaded / event.total) * 100 );
						 //console.log(percentComplete);
						
						$("#logoprogressbar-cover").css({width: percentComplete+"%"});
					};
				}, false);

				return xhr;
			}
		});
	} 
}



$("#input-44").on("change", function(){
	
	uploadShopImageDetailToServer();
});

function splitNewShopImageAndDetail(){
	
	var arrshopimagedetail = [];
	
	var imglng = $(".file-preview-frame").length;
	for(var i=0; i<imglng ; i++){
		var clientimgname = $(".file-preview-frame").eq(i).find(".file-footer-caption").attr("title").trim();
		for(var j=0; j<arrnewfileimagename.length; j++){
			var serverimgname = arrnewfileimagename[j].split("|");
			
			if(clientimgname == serverimgname[1].trim()){
				arrshopimagedetail.push({
					"sh_img_name" : serverimgname[0],
					"sh_img_remark" : $(".file-preview-frame").eq(i).find("textarea").val()
				});
			}
		}
	} 
	return arrshopimagedetail;
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

function splitNewShopImage(){
	var shopimagetoinsert = [];
	for(var i=0; i<arrnewfileimagename.length; i++){
		var newimagetoinsert = arrnewfileimagename[i].split("|")[0];
		shopimagetoinsert.push(newimagetoinsert);
	}
	return shopimagetoinsert;
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
				"imagename" : imagetoremove
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


function getAddress(){//name of country, city........

	var streetad = $("#shopstreetad").val().split(",");
	var country = $("#nham_country option:selected").text();
	var city = $("#nham_city option:selected").text();
	var district = $("#nham_district option:selected").text();
	var commune = $("#nham_commune option:selected").text();

	streetad = streetad[0];

	return streetad +", "+commune+", "+district+", "+city+", "+country;
}

function getDataToInsert(){
	
	var shopdata = {
		"ShopData":{
			"datashop":{
				"branch_id" : $("#selectedbranch").val(),
				"country_id" : $("#nham_country").val(),
				"city_id" : $("#nham_city").val(),
				"district_id" : $("#nham_district").val(),
				"commune_id" : $("#nham_commune").val(),
				"shop_name_en" : $("#shopengname").val() ,
				"shop_name_kh" : $("#shopkhname").val(),
				"shop_logo" : logoimagename,
				"shop_cover" : coverimagename,
				"cuisine_id" : $("#selectedcuisine").val(),
				"shop_type_id" : $("#selectedshoptype").val(),
				"shop_serve_type" : $("#shopservertype").val(),
				"shop_short_description": $("#shopshortdes").val() ,
				"shop_description" : $("#shopdes").val(),
				"shop_address": getAddress(),	
				"shop_phone": shopphones.toString().replace(/[,]/g,"|").trim(),
				"shop_email":$("#shopemail").val(),
				"shop_working_day": countWorkingday().toString().replace(/[,]/g,"|").trim(),
				"shop_opening_time": $("#shopopentime").val(),
				"shop_close_time": $("#shopclosetime").val(),
				"shop_has_wifi" : isCheckFacility("wifi"),
				"shop_has_aircon" : isCheckFacility("aircon"),
				"shop_has_reservation" : isCheckFacility("reserve"),
				"shop_has_bikepark" : isCheckFacility("parking"),								
				"shop_has_tax": isCheckFacility("taxinvoice"),
				"shop_map_address": {
					"lat" : $("#lat-location").val(),
					"lng" : $("#lng-location").val()
				},				
				"shop_social_media": {
					"facebook" : $("#shopfb").val(),
					"instagram" : $("#shopinstagram").val(),
					"googleplus" : $("#shopgoogleplus").val(),
					"twitter": $("#shoptwitter").val()
				},
				"shop_remark": $("#shopremark").val(),
			},
			"shop_image_detail": splitNewShopImageAndDetail()
						
		}	
	};
	return shopdata;
}

$("#saveshop").on("click",function(){
	 console.log(getDataToInsert());
	 // alert(0);
	  $.ajax({
		 type: "POST",
		 url: "/NhameyWebBackEnd/API/ShopRestController/insertShop", 
		 data: getDataToInsert(),
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);    
     	 }
     });  
	// console.log(test());
   /*  alert($("#logoupload").val());
    alert(logoimagename); */
  //  uploadShopImageDetailToServer();
	//  console.log(getDataToInsert());
});

/* function test(){
	alert($(".file-preview-frame").length);
	alert(arrnewfileimagename.length);
	var arrshopimagedetail = [];
	
	var imglng = $(".file-preview-frame").length;
	for(var i=0; i<imglng ; i++){
		var clientimgname = $(".file-preview-frame").eq(i).find(".file-footer-caption").attr("title").trim();
		//console.log(clientimgname);
		//alert($(".file-preview-frame").eq(i).find("textarea").val());
		for(var j=0; j<arrnewfileimagename.length; j++){
			var serverimgname = arrnewfileimagename[j].split("|");
			console.log(clientimgname);
			console.log(serverimgname[1]);
			
			if(clientimgname == serverimgname[1]){
				alert(clientimgname);
				arrshopimagedetail.push({
					"sh_img_name" : serverimgname[0],
					"sh_img_remark" : $(".file-preview-frame").eq(i).find("textarea").val()
				});
			}
		}
	} 
	return arrshopimagedetail;
} */


$("#branchname").on("focus keyup",function(){
	
	var srchbranchname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/BranchRestController/getBranchByNameCombo", 
		 data : {			 
			"srchname" : srchbranchname,
			"limit" : 10		 	
		 },
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
			 var branchdis = '';
			if(data.length <= 0){
				$("#text-search-dis1").html(cutString(srchbranchname , 35));
				$("#text-search-dis2").html(cutString(srchbranchname , 20));
				branchdis +="<div class='no-data-wrapper' align='center'>";
				branchdis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
				branchdis +="  <span class='no-data-text'>No Record Found!</span>";
				branchdis +="</div>";
				$("#display-searching-text").show();
				$("#nham-dropdown-footer").show();
				
			}else{	
				
				$("#display-searching-text").hide();
				$("#nham-dropdown-footer").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 branchdis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].branch_id+'" /><p><span class="title">'+data[i].branch_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result").html(branchdis); 					 
   	 	 }
   });
});
$("#yesbranch").on("mousedown",function(){
	var branchdata = {
		"BranchData" : {
			"branch_name" : $("#branchname").val(),
			"branch_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/BranchRestController/insertBranch",
		data : branchdata,
		success : function(data){
			 data = JSON.parse(data);
			console.log(data);
			if(data.is_insert == false){
				alert("error");
			}else{
				$("#selectedbranch").val(data.branch_id);
			}
			//alert(data);
			
		}
	});
});



$("#cuisinename").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result-cuisine").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/CuisineRestController/getCuisineByNameCombo",
		 data:{
			"srchname" : srchname,
			"limit" : 10
		 }, 
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
			 var dis = '';
			if(data.length <= 0){
				$("#text-search-cuisine-dis1").html(cutString(srchname , 35));
				$("#text-search-cuisine-dis2").html(cutString(srchname , 20));
				dis +="<div class='no-data-wrapper' align='center' style='padding-bottom:4px;'>";
				dis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
				dis +="  <span class='no-data-text'>No Record Found!</span>";
				dis +="</div>";
				$("#display-searching-text_cuisine").show();
				$("#nham-dropdown-footer-cuisine").show();
			}else{	
				$("#display-searching-text_cuisine").hide();
				$("#nham-dropdown-footer-cuisine").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 dis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].cuisine_id+'" /><p><span class="title">'+data[i].cuisine_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result-cuisine").html(dis); 					 
   	 	 }
   });
});
$("#yescuisine").on("mousedown",function(){
	var cuisinedata = {
		"CuisineData" : {
			"cuisine_name" : $("#cuisinename").val(),
			"cuisine_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/CuisineRestController/insertCuisine",
		data : cuisinedata,
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.is_insert == false){
				alert("Insert error!");
			}else{
				//alert(data);
				$("#selectedcuisine").val(data.cuisine_id);
			}
			
		}
	});
});



$("#shoptypename").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result-shoptype").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/ShopTypeRestController/getShopTypeByNameCombo", 
		 data : {
			"srchname" : srchname,
			"limit" : 10
		 },
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
			 var dis = '';
			if(data.length <= 0){
				/* dis +='<div  class="nham-dropdown-noresult">';
				dis +=' <p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>';
				dis +='  Searching "'+cutString(srchname , 15)+'" has no Result!</p>';
				dis +='</div>';
				dis +='<div class="nham-dropdown-question">';
				dis +='<p>Do you want to register "'+cutString(srchname , 20)+'" as a new branch?</p>';
				dis +='</div>'; */
				$("#text-search-shoptype-dis1").html(cutString(srchname , 35));
				$("#text-search-shoptype-dis2").html(cutString(srchname , 20));
				dis +="<div class='no-data-wrapper' align='center' style='padding-bottom:4px;'>";
				dis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
				dis +="  <span class='no-data-text'>No Record Found!</span>";
				dis +="</div>";
				$("#display-searching-text_shoptype").show();
				$("#nham-dropdown-footer-shoptype").show();
			}else{	
				$("#display-searching-text_shoptype").hide();
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