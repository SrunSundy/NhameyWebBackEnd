<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>add shop | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/Jcrop/jquery.Jcrop.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop-upload.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/addshop-validation.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/addshop-openmodal.css" />
 	
  <style>
  	.swal-style{
  		border-radius: 0;
  		
  	}
  	h4.pop-title{
  		font-weight: bold;
  		color: #9E9E9E;
  		font-size: 20px;
  	}
  	h4.pop-title i{
  		margin-right:7px;
  	}
  </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini" >
  
  	<input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
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
            <li class="active">add shop</li>
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
		                     <label>Serve Category</label>
			                     <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="selected-dropdown" id="servecategory_selected_dropdown" style="position:relative;">
			                			
				                			<div class="icon-input-wrapper" style="width:33px;height:28px;position:absolute;top:0;">
				                				<img class="icon-input" id="servecategoryicon"  src="<?php echo base_url() ?>assets/nhamdis/img/servecategory.png" class="selected_icon"/>
				                				<input type="hidden" class="default_img_src" value="<?php echo base_url() ?>assets/nhamdis/img/servecategory.png"/>				 
				                			</div>
				                			
							                <input style="padding:4px 4px 4px 28px;" id="servecategoryname" type="text" class="form-control nham-dropdown-inputbox-multi"  placeholder="Search or Select for shop type">
							                
							                <div class="error-selected-result">
							                	<p>ITEM IS SELECTED!</p>
							                </div>
							                <div class="serve-category-result" id="serve-categories">
							                	
							                	
							                </div>						                  
			                    	       <!--  <input type="hidden" class="selectedid" id="selectedservecategory"/> -->
			                    	    </div>
			                    		<div class="nham-dropdown-detail"  >
			                    			<div class="nham-dropdown-result-wrapper" id="servecate-dropdown-result-wrapper">
			                    				<input type="hidden" value="selected-category-box1"/>
			                    				<div id="display-result-servecategory" class="display-result-wrapper">
			                    					
			                    				</div>		       				
			                  				</div>
			                  				
			                  				<div id="display-searching-text_servecategory" style="display:none;">
			                  					<div  class="nham-dropdown-noresult">
													<p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>
														Searching "<span id="text-search-servecategory-dis1"></span>" has no Result!</p>
												</div>
												<div class="nham-dropdown-question">	
													<p>Do you want to register "<span id="text-search-servecategory-dis2"></span>" as a new shop type?</p>
												</div>
			                  				</div>
			                  				
			                  				<div id="nham-dropdown-footer-servecategory" class="nham-dropdown-result-footer" align="center">
			                  					<button class="btn nhamey-btn" id="yesservecategory">Yes</button>
			                  				</div>
			                  			</div>
			                    	</div>	
			                    	<button type="button" id="servecategorybtnpop" style="display:none;" data-toggle="modal" style="display:none;" data-backdrop="static" data-keyboard="false" data-target="#serveCategoryModal">Open Modal</button>		                    	
			                  	</div>
		                     </div>
		  
		                     <div class="form-group "> 
		                         <label>Shop Facility</label>
			                     <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="selected-dropdown" style="position:relative;">
			                			
				                			<div class="icon-input-wrapper" style="width:33px;height:28px;position:absolute;top:0;">
				                				<img class="icon-input" id="shopfacilityicon"  src="<?php echo base_url() ?>assets/nhamdis/img/service.png" class="selected_icon"/>
				                				<input type="hidden" class="default_img_src" value="<?php echo base_url() ?>assets/nhamdis/img/service.png"/>				 
				                			</div>
				                			
							                <input style="padding:4px 4px 4px 28px;" id="shopfacilityname" type="text" class="form-control nham-dropdown-inputbox-multi"  placeholder="Search or Select for shop type">
							                
							                <div class="error-selected-result">
							                	<p>ITEM IS SELECTED!</p>
							                </div>
							                <div class="serve-category-result" id="shop-facilities">
							                	
							                	
							                </div>						                  
			                    	       <!--  <input type="hidden" class="selectedid" id="selectedservecategory"/> -->
			                    	    </div>
			                    		<div class="nham-dropdown-detail"  >
			                    			<div class="nham-dropdown-result-wrapper">
			                    				<input type="hidden" value="selected-category-box2"/>
			                    				<div id="display-result-shopfacility" class="display-result-wrapper">
			                    					
			                    				</div>		       				
			                  				</div>
			                  				
			                  				<div id="display-searching-text_shopfacility" style="display:none;">
			                  					<div  class="nham-dropdown-noresult">
													<p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>
														Searching "<span id="text-search-shopfacility-dis1"></span>" has no Result!</p>
												</div>
												<div class="nham-dropdown-question">	
													<p>Do you want to register "<span id="text-search-shopfacility-dis2"></span>" as a new shop type?</p>
												</div>
			                  				</div>
			                  				
			                  				<div id="nham-dropdown-footer-shopfacility" class="nham-dropdown-result-footer" align="center">
			                  					<button class="btn nhamey-btn" id="yesshopfacility">Yes</button>
			                  				</div>
			                  			</div>
			                    	</div>	
			                    	<button type="button" id="shopfacilitybtnpop" style="display:none;" data-toggle="modal" style="display:none;" data-backdrop="static" data-keyboard="false" data-target="#shopFacilityModal">Open Modal</button>		                    	
			                  	</div>
		                     </div>
		                     
		                     <div class="form-group">
			                    <label>Shop Serve Type</label>
			                    <select class="form-control " style="width: 100%;" id="shopservetype">
			                      <option selected="selected" value="food">Food</option>
			                      <option value="drink">Drink</option>
			                    
			                    </select>
			                  </div><!-- /.form-group -->

		                  
		                  	  <div class="form-group">
			                     <label>Shop Capacity</label>
			                     <input id="shopcapacity" type="text"  class="form-control top-gap" placeholder="number of customer" />
			                  </div>
			                  
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
			                      <input type="text" class="form-control inputmaskphone" id="shop_phonenum" placeholder="shop phone">
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
		                      
		                      <div class="form-group" style="overflow:hidden"  >
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
					                   					                    
					                     <div class="col-lg-12 div-top-gap">
											  <label class="nham-control nham-control--checkbox">Monday
											    <input type="checkbox"  id="mon" value="1"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="col-lg-12 div-top-gap">
											  <label class="nham-control nham-control--checkbox">Tuesday
											    <input type="checkbox"  id="tue" value="2"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="col-lg-12 div-top-gap">
											  <label class="nham-control nham-control--checkbox">Wednesday
											    <input type="checkbox" id="wed" value="3"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="col-lg-12 div-top-gap">
											  <label class="nham-control nham-control--checkbox">Thursday
											    <input type="checkbox"  id="thur" value="4"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="col-lg-12 div-top-gap">
											  <label class="nham-control nham-control--checkbox">Friday
											    <input type="checkbox"  id="fri" value="5"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="col-lg-12 div-top-gap">
											  <label class="nham-control nham-control--checkbox">Saturday
											    <input type="checkbox"  id="sat" value="6"  class="work-day"/>
											    <div class="nham-control__indicator"></div>
											 </label>
										</div>	
										<div class="col-lg-12 div-top-gap">
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
                           		                 	                      
		                      <!--  <div class="form-group" >
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
		                      </div>-->
		                      
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
							
							<!--<div  class="form-group">
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
												  <img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>/assets/nhamdis/img/ringsmall.svg" />
												  <i class="fa fa-times disable-cover" id="logo-disable-cover" aria-hidden="true" title="close" ></i>
											</div>
											<div id="uploadimageremoveback" class="upload-image-remove-background" style="display:none"></div>
											<div id="removelogoimagewrapper" class="upload-image-remove" style="display:none" >
												<i id="removelogoimage" class="fa fa-trash" aria-hidden="true"></i>	
												
											</div>
											<div id="removeloadingwrapper" class="upload-image-remove" align="center" style="display:none;text-align:center">
												 <img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>/assets/nhamdis/img/reload.svg"  />										
											</div>
														                    	  		                    	  		                    	  
										</div>
										<textarea rows="" placeholder="have your word about this..." id="logo_description" class="nham_description" cols=""></textarea>
									</div>
								</div>
							</div>-->
							
							<div  class="form-group">
								<label>Logo</label>
								<div class="col-lg-12 photo-browsing-wrapper" align="center">
									<div class="row">
										<div class="col-lg-12" align="center"  style="position:relative;">												                     		                  		                    	  					                    
					                    	<div class="photo-display-wrapper" style="width:180px;min-height:180px;" id="logo-display-wrapper">
					                    		<label class="gray-image-plus"><i class="fa fa-plus"></i></label>
					                    		<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 960 x 960 </p>
					                    		<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add Logo image </p>
					                    	</div> 
											
											<!-- fake on -->
											<div class="photo-open-modal" id="logo-open-modal"></div>
											<div class="photo-upload-remove-fake" id="logo-upload-remove-fake"></div>
											<div class="photo-upload-remove" id="logo-upload-remove">
												<i id="logo-upload-remove-icon" class="fa fa-trash" aria-hidden="true"></i>	
											</div>
											<div class="photo-remove-loading" id="logo-remove-loading" align="center">
												<img class="loading-inside-box" 
													src="<?php echo base_url() ?>/assets/nhamdis/img/ringsmall.svg"  />	
											</div>
											<!-- end fake on -->														                    	  		                    	  		                    	  
										</div>
										<textarea rows="" placeholder="have your word about this..." id="logo_description"  class="nham_description"  cols=""></textarea>
									</div>
								</div>						
							</div>
							
							<!--<div  class="form-group">
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
												  <img class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>/assets/nhamdis/img/ringsmall.svg"  />
												  <i class="fa fa-times disable-cover" id="cover-disable-cover" aria-hidden="true" title="close" ></i>
											</div>
											<div id="uploadimageremoveback-cover" class="upload-image-remove-background" style="display:none"></div>
											<div id="removelogoimagewrapper-cover" class="upload-image-remove" style="display:none" >
												<i id="removelogoimage-cover" class="fa fa-trash" aria-hidden="true"></i>										
											</div>
											<div id="removeloadingwrapper-cover" class="upload-image-remove" style="display:none">
												 <img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>/assets/nhamdis/img/reload.svg"/>										
											</div>																				                    	  		                    	  		                    	  
										</div>
										<textarea rows="" placeholder="have your word about this..." id="cover_description"  class="nham_description"  cols=""></textarea>
									</div>
								</div>
						
							</div>-->
							
							<div  class="form-group">
								<label>Cover</label>
								<div class="col-lg-12 photo-browsing-wrapper" align="center">
									<div class="row">
										<div class="col-lg-12" align="center"  style="position:relative;">												                     		                  		                    	  					                    
					                    	<div class="photo-display-wrapper" style="width:67%;min-height:180px;" id="cover-display-wrapper">
					                    		<label class="gray-image-plus"><i class="fa fa-plus"></i></label>
					                    		<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 960 x 500 </p>
					                    		<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add cover image </p>
					                    	</div> 
											
											<!-- fake on -->
											<div class="photo-open-modal" id="cover-open-modal"></div>
											<div class="photo-upload-remove-fake" id="cover-upload-remove-fake"></div>
											<div class="photo-upload-remove" id="cover-upload-remove">
												<i id="cover-upload-remove-icon" class="fa fa-trash" aria-hidden="true"></i>	
											</div>
											<div class="photo-remove-loading" id="cover-remove-loading" align="center">
												<img class="loading-inside-box" 
													src="<?php echo base_url() ?>/assets/nhamdis/img/ringsmall.svg"  />	
											</div>
											<!-- end fake on -->														                    	  		                    	  		                    	  
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
										<div id="coveruploadimagewithload"   class="coveruploadimagewithload" style="display:none;width: 100%;height:100%;z-index:200;position:absolute;top:0;">
											<i class="fa fa-times disable-cover" id="delete-cover-upload" aria-hidden="true" title="close" ></i>
											<img class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>/assets/nhamdis/img/ring.svg" />
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
    
    </div><!-- ./wrapper -->

    
 <!-- modal section -->  
 <!-- servecategory modal --> 
 <div class="modal fade" id="serveCategoryModal" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                <button type="button" id="servecategoryclose" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title pop-title"><i class="fa fa-cutlery" aria-hidden="true"></i>  Serve Category</h4>
             </div>
             <div class="modal-body">
                <div class="form-group">
			        <label>Serve Category's Name</label>
			        <input type="text" id="servecategorynamepopup" class="form-control" placeholder="enter serve category name">			                      
		       </div>
		       
		       <div class="form-group">
			        <label>Serve Category's Type</label>
			        <select class="form-control " style="width: 100%;" id="serve-category-type">
			        	<option selected="selected" value="0">Nation</option>
			            <option value="1">Others</option>
			        </select>
			   </div><!-- /.form-group -->
		       
		        <div class="form-group">
			        <label>Description</label>
			        <textarea id="servecategorydescription" class="form-control" rows="3" placeholder="describe about the serve category" style="resize:vertical;"></textarea>
			   </div>
			   
               <div  class="form-group" style="overflow: hidden">
					<label>Image</label>
					<div class="col-lg-12 logo-browsing-wrapper" align="center">
						<div class="row">
							<div class="col-lg-12 " align="center"  style="position:relative;">											                     		                  		                    	  
					              <input type='file' id="servecategoryupload" style="display: none;" accept="image/*"/>
					              <div class="image-upload-wrapper" id="servecategory-upload-wrapper">
					                   <label class="gray-image-plus"><i class="fa fa-plus"></i></label>
					                   <p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 50 x 50 </p>
					                   <p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Serve Category image </p>					                    		
					              </div> 						                    										
								  <div id="servecategory-upload-image" class="upload-image-hover" ></div>
								  <div id="loading-wrapper-servecategory" class="upload-image-loading" align="center" style="display:none;text-align:center" >
										<div class="progress progress-xxs">
								            <div id="servecategoryprogressbar" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="">					                      
								            </div>
								        </div>
										<img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>/assets/nhamdis/img/ringsmall.svg" />
										<i class="fa fa-times disable-cover" id="servecategory-disable-cover" aria-hidden="true" title="close" ></i>
								  </div>
								  <div id="uploadimageremoveback-servecategory" class="upload-image-remove-background" style="display:none"></div>
								  <div id="removeservecategoryimagewrapper" class="upload-image-remove" style="display:none" >
										<i id="removeservecategoryimage" class="fa fa-trash" aria-hidden="true"></i>	
								  </div>
								  <div id="removeloadingwrapper-servecategory" class="upload-image-remove" align="center" style="display:none;text-align:center">
									    <img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>/assets/nhamdis/img/reload.svg"  />										
								  </div>														                    	  		                    	  		                    	  
							</div>
						</div>
					</div>
				</div>
             </div>
             <div class="modal-footer">
                 <button type="button" id="belowcloseservecategory" class="btn btn-default pull-left" style="display:none;" data-dismiss="modal">Close</button>
               	<button type="button" id="servecategoryesave" class="btn nham-btn btn-danger">Save</button>
             </div>
         </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
 </div><!-- /.modal --><!-- Modal -->
  <!--  end servecategory modal -->    
 
 <!-- shop facility modal --> 
 <div class="modal fade" id="shopFacilityModal" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                <button type="button" id="shopfacilityclose" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title pop-title"><i class="fa fa-th-large" aria-hidden="true"></i>  Shop Facility</h4>
             </div>
             <div class="modal-body">
                <div class="form-group">
			        <label>Shop facility's Name</label>
			        <input type="text" id="shopfacilitynamepopup" class="form-control" placeholder="enter shop facility name">			                      
		       </div>
		       
		        <div class="form-group">
			        <label>Description</label>
			        <textarea id="shopfacilitydescription" class="form-control" rows="3" placeholder="describe about the shop facility" style="resize:vertical;"></textarea>
			   </div>
			   
               <div  class="form-group" style="overflow: hidden">
					<label>Image</label>
					<div class="col-lg-12 logo-browsing-wrapper" align="center">
						<div class="row">
							<div class="col-lg-12 " align="center"  style="position:relative;">											                     		                  		                    	  
					              <input type='file' id="shopfacilityupload" style="display: none;" accept="image/*"/>
					              <div class="image-upload-wrapper" id="shopfacility-upload-wrapper">
					                   <label class="gray-image-plus"><i class="fa fa-plus"></i></label>
					                   <p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 50 x 50 </p>
					                   <p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Shop facility image </p>					                    		
					              </div> 						                    										
								  <div id="shopfacility-upload-image" class="upload-image-hover" ></div>
								  <div id="loading-wrapper-shopfacility" class="upload-image-loading" align="center" style="display:none;text-align:center" >
										<div class="progress progress-xxs">
								            <div id="shopfacilityprogressbar" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="">					                      
								            </div>
								        </div>
										<img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>/assets/nhamdis/img/ringsmall.svg" />
										<i class="fa fa-times disable-cover" id="shopfacility-disable-cover" aria-hidden="true" title="close" ></i>
								  </div>
								  <div id="uploadimageremoveback-shopfacility" class="upload-image-remove-background" style="display:none"></div>
								  <div id="removeshopfacilityimagewrapper" class="upload-image-remove" style="display:none" >
										<i id="removeshopfacilityimage" class="fa fa-trash" aria-hidden="true"></i>	
								  </div>
								  <div id="removeloadingwrapper-shopfacility" class="upload-image-remove" align="center" style="display:none;text-align:center">
									    <img  class="loading-inside-box nham-center-element" src="<?php echo base_url() ?>/assets/nhamdis/img/reload.svg"  />										
								  </div>														                    	  		                    	  		                    	  
							</div>
						</div>
					</div>
				</div>
             </div>
             <div class="modal-footer">
                 <button type="button" id="belowcloseshopfacility" class="btn btn-default pull-left" style="display:none;" data-dismiss="modal">Close</button>
               	<button type="button" id="shopfacilitysave" class="btn nham-btn btn-danger">Save changes</button>
             </div>
         </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
 </div><!-- /.modal --><!-- Modal -->
  <!--  end shop facility modal -->   
   
	 <!-- cover upload modal -->
	<div class="modal fade" id="coverModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="nham-modal-header">
					<button type="button" id="coverformclose" class="close btn-close"
						data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<p class="nham-modal-title">
						<i class="fa fa-picture-o" aria-hidden="true"></i><span>Upload Cover</span>
					</p>
				</div>
				
				<div class="nham-modal-body">
					<div class="photo-browse-box" align="center">
						<div class="photo-upload-info"  >
							<p class="text-upload-info">
							  	<span>Browse Photo </span>
							 </p>  
						</div>
						
						<!-- fake on -->	
						<div class="trigger-photo-browse" id="trigger-cover-browse"></div>
						<!-- end fake on -->
					</div>			
					<input type='file' id="uploadcover" style="display:none" accept="image/*"/>
					<div class="upload-photo-box" id="cover-upload-box">					
						<div class="photo-upload-wrapper" align="center" id="display-cover-upload" >
							<div class="photo-upload-info-2" >
							 	<i class="fa fa-picture-o" aria-hidden="true"></i>
							</div>					  	        		
				        </div>
				         				        			        
				        <!-- fake on -->			        
				        <div class="photo-upload-loading" id="cover-upload-loading" align="center">
				        	<div class="photo-upload-progress-box">
				        		<div id="cover-upload-progress" 
				        		 	class="progress-bar progress-bar-danger progress-bar-striped" 
				        		 	role="progressbar" aria-valuenow="60" 
				        		 	aria-valuemin="0" 
				        		 	aria-valuemax="100" style="height:10px;">					                      
								</div>
				        	</div>
				        	
							<div style="width: 100%;">
								<p id="cover-upload-percentage" class="photo-upload-percentage">0%</p>
								<img src="<?php echo base_url(); ?>assets/nhamdis/img/ring.svg" />
							</div>
				        	
				        </div>
				        <div class="photo-fail-remove" id="cover-fail-remove">
				        	<i class="fa fa-times" id="cover-fail-event" aria-hidden="true"></i>
				        </div>			      
				        <!-- end fake on -->
					</div>
					<!-- <div class="photo-description-box" id="cover-description-box">
						<textarea rows="" id="cover_description" placeholder="have your word about this..."   class="photo-description"  cols=""></textarea>
					</div> -->
					
					<div class="photo-btncrop-box" id="cover-btncrop-box">
						<button type="button" id="cover-crop-btn" class="btn btn-crop">Crop image</button>
						<button type="button" id="cover-save-btn" class="btn photo-save-btn btn-danger">Save</button>
					</div>
				</div>
				
				<div class="nham-modal-footer">
					
				</div>			
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<button type="button" id="openCoverModel" style="display:none;" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#coverModal">Open Modal</button>		                    	
	<!-- cover upload modal -->
	
	 <!-- logo upload modal -->
	<div class="modal fade" id="logoModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="nham-modal-header">
					<button type="button" id="logoformclose" class="close btn-close"
						data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<p class="nham-modal-title">
						<i class="fa fa-picture-o" aria-hidden="true"></i><span>Upload logo</span>
					</p>
				</div>
				
				<div class="nham-modal-body">
					<div class="photo-browse-box" align="center">
						<div class="photo-upload-info"  >
							<p class="text-upload-info">
							  	<span>Browse Photo </span>
							 </p>  
						</div>
						
						<!-- fake on -->	
						<div class="trigger-photo-browse" id="trigger-logo-browse"></div>
						<!-- end fake on -->
					</div>			
					<input type='file' id="uploadlogo" style="display:none" accept="image/*"/>
					<div class="upload-photo-box" id="logo-upload-box">					
						<div class="photo-upload-wrapper" align="center" id="display-logo-upload" >
							<div class="photo-upload-info-2" >
							 	<i class="fa fa-picture-o" aria-hidden="true"></i>
							</div>					  	        		
				        </div>
				         				        			        
				        <!-- fake on -->			        
				        <div class="photo-upload-loading" id="logo-upload-loading" align="center">
				        	<div class="photo-upload-progress-box">
				        		<div id="logo-upload-progress" 
				        		 	class="progress-bar progress-bar-danger progress-bar-striped" 
				        		 	role="progressbar" aria-valuenow="60" 
				        		 	aria-valuemin="0" 
				        		 	aria-valuemax="100" style="height:10px;">					                      
								</div>
				        	</div>
				        	
							<div style="width: 100%;">
								<p id="logo-upload-percentage" class="photo-upload-percentage">0%</p>
								<img src="<?php echo base_url(); ?>assets/nhamdis/img/ring.svg" />
							</div>
				        	
				        </div>
				        <div class="photo-fail-remove" id="logo-fail-remove">
				        	<i class="fa fa-times" id="logo-fail-event" aria-hidden="true"></i>
				        </div>			      
				        <!-- end fake on -->
					</div>
					<!-- <div class="photo-description-box" id="logo-description-box">
						<textarea rows="" id="logo_description" placeholder="have your word about this..."   class="photo-description"  cols=""></textarea>
					</div> -->
					
					<div class="photo-btncrop-box" id="logo-btncrop-box">
						<button type="button" id="logo-crop-btn" class="btn btn-crop">Crop image</button>
						<button type="button" id="logo-save-btn" class="btn photo-save-btn btn-danger">Save</button>
					</div>
				</div>
				
				<div class="nham-modal-footer">
					
				</div>			
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<button type="button" id="openLogoModel" style="display:none;" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#logoModal">Open Modal</button>		                    	
	<!-- logo upload modal -->
	 
	<!-- close upload section -->
            
            
    <?php include 'imports/scriptimport.php'; ?>
    <script type="text/javascript">
	    jQuery.browser = {};
	    (function () {
	        jQuery.browser.msie = false;
	        jQuery.browser.version = 0;
	        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
	            jQuery.browser.msie = true;
	            jQuery.browser.version = RegExp.$1;
	        }
	    })();
	</script>
    <script src="<?php echo base_url(); ?>assets/plugins/Jcrop/jquery.Jcrop.js"></script>
	<script src="<?php echo base_url() ?>assets/nhamdis/jscontroller/addshop.js"></script>

  </body>   
</html>