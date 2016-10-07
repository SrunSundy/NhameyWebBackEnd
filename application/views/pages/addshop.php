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
.invalid-input{
	border: 1px solid #dd4b39;
}
.relative-div{
	position: relative;
}
.nham-btn{
	border-radius: 0;
}

</style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini" >
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
                    		   <input id="branchname" type="text" class="form-control input-lg nham-dropdown-inputbox "  placeholder="Search branch to insert shop">
                    	       <input type="hidden" class="selectedid" id="selectedbranch"/>
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
		                     
		                     <div class="form-group ">
			                    <label>Shop Type</label>
			                     <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="selected-dropdown">
			                    		    <input id="shoptypename" type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search or Select for shop type">
			                    	        <input type="hidden" class="selectedid" id="selectedshoptype"/>
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
													<p>Do you want to register "<span id="text-search-shoptype-dis2"></span>" as a new shop type?</p>
												</div>
			                  				</div>
			                  				
			                  				<div id="nham-dropdown-footer-shoptype" class="nham-dropdown-result-footer" align="center">
			                  					<button class="btn nhamey-btn" id="yesshoptype">Yes</button>
			                  				</div>
			                  			</div>
			                    	</div>	
			                    	<button type="button" id="shoptypebtnpop" style="display:none;" data-toggle="modal" data-target="#shoptypeModal">Open Modal</button>		                    	
			                  	</div>
		                     </div>
		                     
		                     <div class="form-group ">
			                    <label>Cuisine</label>
			                    <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="selected-dropdown">
			                    		    <input id="cuisinename" type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search or Select for shop cuisine">
			                    	       <input type="hidden" class="selectedid" id="selectedcuisine"/>
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
			                    	<button type="button" id="cuisinebtnpop" style="display:none;" data-toggle="modal" data-target="#cuisineModal">Open Modal</button>		                    	
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
											<div id="loading-wrapper" class="upload-image-loading" align="center" style="display:none;text-align:center" >
												 <div class="progress progress-xxs">
								                    <div id="logoprogressbar" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="">					                      
								                    </div>
								                  </div>
												  <img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif" style="height:15px;width:23px;" />
												  <i class="fa fa-times disable-cover" id="logo-disable-cover" aria-hidden="true" title="close" ></i>
											</div>
											<div id="uploadimageremoveback" class="upload-image-remove-background" style="display:none"></div>
											<div id="removelogoimagewrapper" class="upload-image-remove" style="display:none" >
												<i id="removelogoimage" class="fa fa-trash" aria-hidden="true"></i>	
												
											</div>
											<div id="removeloadingwrapper" class="upload-image-remove" align="center" style="display:none;text-align:center">
												 <img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>application/views/nhamdis/img/removeload.gif" style="height:23px;width:23px;" />										
											</div>
														                    	  		                    	  		                    	  
										</div>
										<textarea rows="" placeholder="have your word about this..." id="logo_description" class="nham_description" cols=""></textarea>
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
												  <img class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif" style="height:15px;width:23px;" />
												  <i class="fa fa-times disable-cover" id="cover-disable-cover" aria-hidden="true" title="close" ></i>
											</div>
											<div id="uploadimageremoveback-cover" class="upload-image-remove-background" style="display:none"></div>
											<div id="removelogoimagewrapper-cover" class="upload-image-remove" style="display:none" >
												<i id="removelogoimage-cover" class="fa fa-trash" aria-hidden="true"></i>										
											</div>
											<div id="removeloadingwrapper-cover" class="upload-image-remove" style="display:none">
												 <img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>application/views/nhamdis/img/removeload.gif" style="height:23px;width:23px;" />										
											</div>																				                    	  		                    	  		                    	  
										</div>
										<textarea rows="" placeholder="have your word about this..." id="cover_description"  class="nham_description"  cols=""></textarea>
									</div>
								</div>
						
							</div>
							
							
			                <div class="form-group ">
			                    <label>Shop Address</label>
			                	<div class="col-lg-12 top-gap">
			                		<div class="row">
			                			<label>Country </label>						                						                    
						                <select class="form-control nham-control  select2" id="nham_country" style="width: 100%; border-radius: 0!important;">
						                      	
						                </select>						                					                
					                 </div>
				                 </div>
				                  
				                 <div class="col-lg-12 ">
			                		<div class="row">
						                 <label>City </label>	
						                  <select class="form-control nham-control  select2" id="nham_city"  style="width: 100%; border-radius: 0!important;">
						                     	
						                  </select>						                  						                
					                 </div>
				                 </div>
				                 
				                 <div class="col-lg-12 ">
			                		<div class="row">
						                 <label>District </label>
						                 <select class="form-control nham-control  select2" id="nham_district"  style="width: 100%; border-radius: 0!important;">
						                    	
						                 </select>						                 
					                 </div>
				                 </div>
				                 
				                  <div class="col-lg-12 ">
			                		<div class="row">
						                  <label>Commune </label>
						                  <select class="form-control nham-control select2" id="nham_commune"  style="width: 100%; border-radius: 0!important;">
						                     	
						                   </select>						                
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
										
										<div id="map_canvas" style="width: 100%; height: 580px;"></div>
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
											<img class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif" style="height:23px;width:30px;" />
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

    
 <!-- modal section -->  
 <!-- shop type modal --> 
 <div class="modal fade" id="shoptypeModal" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-home" aria-hidden="true"></i>  Shop Type</h4>
             </div>
             <div class="modal-body">
                <div class="form-group">
			        <label>Type's Name</label>
			        <input type="text" id="typename" class="form-control" placeholder="Enter Type Name">			                      
		       </div>
               <div  class="form-group">
					<label>Image</label>
					<div class="col-lg-12 logo-browsing-wrapper" align="center">
						<div class="row">
							<div class="col-lg-12 " align="center"  style="position:relative;">											                     		                  		                    	  
					              <input type='file' id="typeupload" style="display: none;" accept="image/*"/>
					              <div class="image-upload-wrapper" id="type-upload-wrapper">
					                   <label class="gray-image-plus"><i class="fa fa-plus"></i></label>
					                   <p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 300 x 300 </p>
					                   <p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add Type image </p>					                    		
					              </div> 						                    										
								  <div id="logo-upload-image" class="upload-image-hover" ></div>
								  <div id="loading-wrapper" class="upload-image-loading" align="center" style="display:none;text-align:center" >
										<div class="progress progress-xxs">
								            <div id="logoprogressbar" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="">					                      
								            </div>
								        </div>
										<img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif" style="height:15px;width:23px;" />
										<i class="fa fa-times disable-cover" id="logo-disable-cover" aria-hidden="true" title="close" ></i>
								  </div>
								  <div id="uploadimageremoveback" class="upload-image-remove-background" style="display:none"></div>
								  <div id="removelogoimagewrapper" class="upload-image-remove" style="display:none" >
										<i id="removelogoimage" class="fa fa-trash" aria-hidden="true"></i>	
								  </div>
								  <div id="removeloadingwrapper" class="upload-image-remove" align="center" style="display:none;text-align:center">
									    <img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>application/views/nhamdis/img/removeload.gif" style="height:23px;width:23px;" />										
								  </div>														                    	  		                    	  		                    	  
							</div>
							<textarea rows="" placeholder="have your word about this..." id="logo_description" class="nham_description" cols=""></textarea>
						</div>
					</div>
				</div>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-danger">Save changes</button>
             </div>
         </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
 </div><!-- /.modal --><!-- Modal -->
  <!--  end shop type modal -->    
  
  <!-- cuisine modal -->
 <div class="modal fade" id="cuisineModal" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                <button type="button" id="cuisineformclose" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-home" aria-hidden="true"></i> Cuisine</h4>
             </div>
             <div class="modal-body">
                <div class="form-group">
			        <label>Cuisine's Name</label>
			        <input type="text" id="cuisinenamepopup" class="form-control" placeholder="Cuisine Name">			                      
		       </div>
		       <div class="form-group">
			        <label>Description</label>
			        <textarea id="cuisinedescription" class="form-control" rows="3" placeholder="describe about the cuisine" style="resize:vertical;"></textarea>
			   </div>
               <div  class="form-group" style="overflow: hidden">
					<label>Image</label>
					<div class="col-lg-12 logo-browsing-wrapper" align="center" >
						<div class="row">
							<div class="col-lg-12 " align="center"  style="position:relative;">											                     		                  		                    	  
					              <input type='file' id="cuisineupload" style="display: none;" accept="image/*"/>
					              <div class="image-upload-wrapper" id="cuisine-upload-wrapper">
					                   <label class="gray-image-plus"><i class="fa fa-plus"></i></label>
					                   <p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 50 x 50 </p>
					                   <p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Cuisine image </p>					                    		
					              </div> 						                    										
								  <div id="cuisine-upload-image" class="upload-image-hover" ></div>
								  <div id="loading-wrapper-cuisine" class="upload-image-loading" align="center" style="display:none;text-align:center" >
										<div class="progress progress-xxs">
								            <div id="cuisineprogressbar" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="">					                      
								            </div>
								        </div>
										<img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif" style="height:15px;width:23px;" />
										<i class="fa fa-times disable-cover" id="cuisine-disable-cover" aria-hidden="true" title="close" ></i>
								  </div>
								  <div id="uploadimageremoveback-cuisine" class="upload-image-remove-background" style="display:none"></div>
								  <div id="removecuisineimagewrapper" class="upload-image-remove" style="display:none" >
										<i id="removecuisineimage" class="fa fa-trash" aria-hidden="true"></i>	
								  </div>
								  <div id="removeloadingwrapper-cuisine" class="upload-image-remove" align="center" style="display:none;text-align:center">
									    <img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>application/views/nhamdis/img/removeload.gif" style="height:23px;width:23px;" />										
								  </div>														                    	  		                    	  		                    	  
							</div>
						</div>
					</div>
				</div>
             </div>
             <div class="modal-footer">
               <button type="button" id="belowclosecuisine" class="btn btn-default pull-left" style="display:none;" data-dismiss="modal">Close</button>
                <button type="button" id="cuisinesave" class="btn nham-btn btn-danger">Save changes</button>
                
             </div>
         </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
 </div><!-- /.modal --><!-- Modal -->  
  <!-- end cuisine modal -->
<!-- close modal section -->
            
            
    <?php include 'imports/scriptimport.php'; ?>
	<script src="<?php echo base_url() ?>application/views/nhamdis/jscontroller/addshop.js"></script>
	<script>

$("#cuisine-upload-image").on("click",function(){	
	$("#cuisineupload").click();	
});
$("#removecuisineimage").on("click",function(){
	removeCuisineImageFromServer();
});
$("#cuisine-disable-cover").on("click", function(){
	$("#cuisineupload").val(null);
	$("#loading-wrapper-cuisine").hide();
	$("#cuisine-upload-image").removeClass("loading-box");
	var txt = '<label class="gray-image-plus">';
	txt += '  <i class="fa fa-plus"></i>';
	txt += '</label>';
	txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 50 x 50 </p>';            	
	txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Cuisine image </p>';
	$('#cuisine-upload-wrapper').html(txt);	
});
$("#cuisineupload").change(function(){
	uploadCuisine(this);
});
function uploadCuisine(input) {

	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) {
 			upoloadCuisineToServer();
		    var myimg ='<img  class="upload-shop-img" src="'+e.target.result+'" alt="your image" />';
		    $('#cuisine-upload-wrapper').html(myimg);
		}
		reader.readAsDataURL(input.files[0]);
	}else{
		 var txt = '<label class="gray-image-plus"><i class="fa fa-plus"></i></label><p style="font-weight:bold;color:#9E9E9E"> Add Logo image </p>';
		$('#cuisine-upload-wrapper').html(txt);
	}
}

function removeCuisineImageFromServer(){
	$("#removeloadingwrapper-cuisine").show();
	console.log(cuisineimgname);
	$.ajax({
		url : "/NhameyWebBackEnd/API/UploadRestController/removeIcon",
		type: "POST",
		data : {
			"iconname": cuisineimgname	
		},
		success: function(data){
			
			cuisineimgname="";
			$("#cuisineupload").val(null);
			$("#uploadimageremoveback-cuisine").hide();
			$("#removecuisineimagewrapper").hide();
			var txt = '<label class="gray-image-plus">';
				txt += '  <i class="fa fa-plus"></i>';
				txt += '</label>';
				txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 50 x 50 </p>';            	
				txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Cuisine image </p>';
			$('#cuisine-upload-wrapper').html(txt);
			$("#removeloadingwrapper-cuisine").hide();
			console.log(cuisineimgname);
		}
	});
}
function upoloadCuisineToServer(){
	var inputFile = $("#cuisineupload");
	$("#cuisine-upload-image").addClass("loading-box");
	$("#loading-wrapper-cuisine").show();
	var fileToUpload = inputFile[0].files[0];
	console.log(fileToUpload);
	if(fileToUpload != 'undefined'){

		var formData = new FormData();
		formData.append("file",  fileToUpload);
		
		$.ajax({
			url: "/NhameyWebBackEnd/API/UploadRestController/uploadIconImage",
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
					cuisineimgname = data.filename;
					$("#loading-wrapper-cuisine").hide();
					$("#cuisine-upload-image").removeClass("loading-box");
					$("#uploadimageremoveback-cuisine").show();
					$("#removecuisineimagewrapper").show();
					console.log(cuisineimgname);
				}
				
			},
			xhr: function() {
				var xhr = new XMLHttpRequest();
				xhr.upload.addEventListener("progress", function(event) {
					if (event.lengthComputable) {
						var percentComplete = Math.round( (event.loaded / event.total) * 100 );
						 //console.log(percentComplete);
						
						$("#cuisineprogressbar").css({width: percentComplete+"%"});
					};
				}, false);

				return xhr;
			}
		});
	} 
}
function validateCuisine(){
	if(!validateNull("cuisinenamepopup", 0)){
		alert("Cuisine name Invalid");
		return false;
	}
	return true;
}
$("#cuisinesave").on("click", function(){
	if(validateCuisine()){
		var cuisinedata = {
				"CuisineData" : {
					"cuisine_name" : $("#cuisinenamepopup").val(),
					"cuisine_icon" : cuisineimgname,
					"cuisine_remark": $("#cuisinedescription").val()
				}
		};
		console.log(cuisinedata);
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
					$("#cuisinename").val($("#cuisinenamepopup").val());
					$("#belowclosecuisine").click();
					clearCuisineSaveform();
					
				}
					
			}
		});
	}
});
$("#cuisineformclose").on("click",function(){
	$("#cuisinenamepopup").val("");
	$("#cuisinedescription").val("");
	if(cuisineimgname != "") 
		 removeCuisineImageFromServer();
});
function clearCuisineSaveform(){
	$("#cuisinenamepopup").val("");
	$("#cuisinedescription").val("");
	cuisineimgname="";
	$("#cuisineupload").val(null);
	$("#uploadimageremoveback-cuisine").hide();
	$("#removecuisineimagewrapper").hide();
	var txt = '<label class="gray-image-plus">';
		txt += '  <i class="fa fa-plus"></i>';
		txt += '</label>';
		txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 50 x 50 </p>';            	
		txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Cuisine image </p>';
	$('#cuisine-upload-wrapper').html(txt);
	$("#removeloadingwrapper-cuisine").hide();
}

	</script>
  </body>   
</html>