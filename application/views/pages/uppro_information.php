<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base target="_blank" />
    <title>update shop info | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop-input.css" />
 
	 
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
  
    <input type="hidden" id="product_id" value="<?php echo $product_id ?>"/>
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
    <input type="hidden" id="dis_img_path" value="<?php echo DIS_IMAGE_PATH ?>"/>
    <div class="shop-event-wrapper" >	
		
     	<div  class="tab-wrapper">	 
		
	       	 <div class="tab-header col-lg-12">
	       	 	<p class="tab-intro-text"><i class="fa fa-book" aria-hidden="true"></i><span>Information</span></p>
	       	 </div>
	       	 <div class="tab-body col-lg-12">
	       	 	<div class="row">
		       	 	<div class="col-lg-7 col-sm-7">
		       	 		<div class="row">
		       	 		
			       	 		<div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">SHOP</p>
			       	 			<div class="shop-info-wrapper">			       	 				
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<p class="shop-info wordwrap" id="dis-product_id"></p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 						
				       	 					<div class="shop-info-edit-btn branch pull-right">
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
			       	 					<div class="col-lg-12 col-sm-12 nham-dropdown-wrapper">
					                		<div class="row">
					                			<div class="selected-dropdown">
					                    		   <input id="shopname_eng" type="text" class="form-control input nham-dropdown-inputbox "  placeholder="Search branch ">
					                    	       <input type="hidden" class="selectedid" id="selectedshop"/>
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
					                  					<a href="<?php echo base_url();?>MainController/addshop" target="_top">Yes</a>
					                  				</div>
					                  			</div>
					                    	</div>					                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">	                  		
					                  		<div class="row pull-right">
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default nham-btn " id="save-branch">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			</div>
			       	 		</div>
			       	 		
			       	 		<div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">PRODUCT'S NAME</p>
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text">(ENG)</span><p class="shop-info wordwrap" id="dis-eng-name"></p>
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
			       	 						   <input type="text" id="productengname" class="form-control insert-value" placeholder="Product name in english">
			       	 						</div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
					                  		<div class="row pull-right">
					                  			<input type="hidden" class="update-param" value="pro_name_en"/>
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			</div>
			       	 			
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text">(KHM)</span><p class="shop-info wordwrap" id="dis-kh-name"></p>
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
			       	 						   <input type="text" id="productkhname" class="form-control insert-value" placeholder="Product name in khmer">
			       	 					    </div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">					                 		
					                  		<div class="row pull-right">
					                  			<input type="hidden" class="update-param" value="pro_name_kh"/>
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			 </div>
			       	 		  </div>
			       	 		  
			       	 		  <div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">PRODUCT'S SERVE-CATEGORY</p>
			       	 			<div class="shop-info-wrapper">			       	 				
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<div class="serve-category-wrapper" id="serve-category-wrapper">
				       	 					
				       	 					</div>				       	 				
				       	 				</div>
				       	 				<div class="div-right" >
				       	 						
				       	 					<div class="shop-info-edit-btn serve-category pull-right">
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
				       	 						<div class="form-group "> 							                     
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
								                    		                    	
								                  		 </div>
							                         </div>
						                         </div>		       	 										                							                    	
					                  	    </div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">	                  		
						                  		<div class="row pull-right">
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-serve-category nham-btn">save</button>
						                  		</div>
						                  	</div>
					                  		<div style="clear:both;"></div>
			       	 					   </div>		       	 							       	 				
			       	 					</div>			       	 			
			       	 		  		</div>
			       	 		  		<!--
			       	 		  		<div class="col-lg-12 col-sm-12 update-info-box">
					       	 			<p class="update-title">TAG</p>
					       	 			<div class="shop-info-wrapper">			       	 				
					       	 				<div class="info-edit-wrapper">
						       	 				<div class="div-left">
						       	 					<div class="facility-wrapper" id="facility-wrapper">
						       	 					
						       	 					</div>				       	 				
						       	 				</div>
						       	 				<div class="div-right" >
						       	 						
						       	 					<div class="shop-info-edit-btn facility pull-right">
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
						       	 					   <div class="form-group "> 
								                        
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
									                    	       <!--  <input type="hidden" class="selectedid" id="selectedservecategory"/>
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
									                  	</div>
								                   </div>						       	 						
								                </div>		       	 										                							                    	
							                 </div>
								             <div class="col-lg-12 col-sm-12 save-btn-wrapper">	                  		
								                 <div class="row pull-right">
								                  	<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
								                  	<button type="button" class="btn btn-default update-facility nham-btn">save</button>
								                  </div>
								             </div>
							                 <div style="clear:both;"></div>
					       	 			</div>		       	 							       	 				
					       	 		</div>			       	 			
					       	 	</div>-->
					       	 	
					       	 	<div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">MAKE DURATION</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap " style="display: inline;" id="make-duration"></p> 
					       	 					<span class="wordwrap" id="make-duration-num" style="display: inline;font-style: italic;font-size: 12px;color: #BDBDBD;"></span>
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
				       	 						     <input type="text" id="makeduration" class="form-control insert-value" placeholder="eg. 00:15">
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="pro_made_duration"/>
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		    </div>
					       	 	
					       	 	<div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">PRODUCT'S SERVE-TYPE</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap" id="pro_serve_type"></p>
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
				       	 						    <select class="form-control insert-value" style="width: 100%;" id="proservetype">
								                      <option selected="selected" value="FOOD">Food</option>
								                      <option value="DRINK">Drink</option>
								                    
								                    </select>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="pro_serve_type"/>
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		    </div>
			       	 		    
			       	 		    <div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">SHORT DESCRIPTION</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap " id="pro-short-description"></p>
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
				       	 						    <textarea id="shopshortdes" class="form-control insert-value" rows="3" placeholder="describe shortly about the shop" style="resize:none;"></textarea>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="pro_short_description"/>
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		    </div>
			       	 		  
			       	 		    <div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">DESCRIPTION</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap " id="pro-description"></p>
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
				       	 						    <textarea id="shopdes" class="form-control insert-value" rows="3" placeholder="describe briefly about the shop"  style="resize:vertical;"></textarea>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="pro_description"/>
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default update-shop-save nham-btn">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		    </div>
			       	 		   
			       	 		    <div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">REMARK</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap " id="pro-remark"></p>
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
				       	 						     <textarea id="shopremark" class="form-control insert-value" rows="3" placeholder="describe what you haven't done for saving shop" style="resize:none;"></textarea>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<input type="hidden" class="update-param" value="pro_remark"/>
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
		       	 	
		       	 	
		       	 	<div class="col-lg-5 col-sm-5" >
		       	 	   <div class="row">
		       	 		 <div class="col-lg-12 col-sm-12 update-info-box">
				       	 	<p class="update-title">PRICE</p>
				       	 	<div class="shop-info-wrapper">			       	 			
				       	 		<div class="info-edit-wrapper">
					       	 		<div class="div-left">
					       	 			<p class="shop-info wordwrap"><span id="price"></span> - <strike><span id="promote-price"></span></strike></p>
					       	 		</div>
					       	 		<div class="div-right" >
					       	 			<div class="shop-info-edit-btn product-price pull-right">
					       	 				<i class="fa fa-pencil" aria-hidden="true"></i>
					       	 			</div>
					       	 		</div>
					       	 		<div style="clear:both;"></div>	
				       	 		</div>			       	 				
				       	 		<div style="clear:both;"></div>				       	 				
				       	 		<div class="save-shop-info-box">			       	 				
				       	 			<div class="col-lg-12 col-sm-12 input-wrapper">	
				       	 				<div class="row">
				       	 					  <div class="bootstrap-timepicker form-group">
							                    <div class="form-group">
							                     
							                      <input id="nomalprice" placeholder="Price" type="text" class="form-control " >			                      
							                    </div><!-- /.form group -->
							                  </div>
							                  
							                  <div class="bootstrap-timepicker">
							                    <div class="form-group">
							                    
							                      <input id="promoteprice" placeholder="Promote Price" type="text" class="form-control ">			                      
							                    </div><!-- /.form group -->
							                  </div>
				       	 				</div>				                							                    	
						            </div>
						            <div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                <div class="row pull-right">
						                   <img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                   <button type="button" class="btn btn-default update-product-price nham-btn">save</button>
						                </div>
						            </div>
						            <div style="clear:both;"></div>
				       	 		</div>		       	 							       	 				
				       	 	</div>				       	 				       	 		       	 							       	 			
			       	 	</div>
			       	 	
			       	 	<div class="col-lg-12 col-sm-12 update-info-box">
				       	 	<p class="update-title">POPULAR PRODUCT </p>
				       	 	<div class="shop-info-wrapper">			       	 			
				       	 		<div class="info-edit-wrapper">
					       	 		<div class="div-left">
					       	 			<div id="dis-popular-pro">
					       	 				
					       	 			</div>
					       	 			
					       	 		</div>
					       	 		<div class="div-right" >
					       	 			<div class="shop-info-edit-btn  pull-right">
					       	 				<i class="fa fa-pencil" aria-hidden="true"></i>
					       	 			</div>
					       	 		</div>
					       	 		<div style="clear:both;"></div>	
				       	 		</div>			       	 				
				       	 		<div style="clear:both;"></div>				       	 				
				       	 		<div class="save-shop-info-box">			       	 				
				       	 			<div class="col-lg-12 col-sm-12 input-wrapper">	
				       	 				<div class="row">
				       	 					<div class="form-group" style="overflow:hidden"  >
						                      	<div class="col-lg-12">
						                      		<div class="row">
								                     
									      
									                  
									                  <div style="clear:both;"></div>
									                 </div>
								                  </div>
								                  <div class="col-lg-12" style="margin-bottom:20px;;margin-top:-10px;">
								                  	<div class="row">
									                   					                    
									                     <div class="col-lg-12 div-top-gap">
															  <label class="nham-control nham-control--checkbox">Popular
															    <input type="checkbox"  id="mon" onclick="$(this).val(this.checked ? 1 : 0)"  class="work-day"/>
															    <div class="nham-control__indicator"></div>
															 </label>
														</div>	
													
									                    					                    
								                    </div>
							                  	  </div>	                      
						                      </div>
				       	 				</div>				                							                    	
						            </div>
						            <div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                <div class="row pull-right">
						                   <input type="hidden" class="update-param" value="pro_local_popularity"/>
						                   <img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                   <button type="button" class="btn btn-default popular-pro update-shop-save nham-btn">save</button>
						                </div>
						            </div>
						            <div style="clear:both;"></div>
				       	 		</div>		       	 							       	 				
				       	 	</div>				       	 				       	 		       	 							       	 			
			       	 	</div>
			       	 	
			   
			       	 	</div>
		       	 	</div>	
		       	 						
	       	 	</div>
	       	 </div>
	    </div>
	       	 				
    </div>
    
    
     
    
    

    <?php include 'imports/scriptimport.php'; ?>
    
    <script>

	var servecatearr = [];
	var servecatearrdelete = [];

	var tagarr = [];
	var tagarrdelete = [];

	var g_pro_price = "";
	var g_pro_proprice = "";

	
    
	var isclickbranch = false;
	var isclickservecategory = false;
	var isclickfacility = false;
    $(document).on("click",".shop-info-edit-btn", function(){
    	
		$(this).focus();
        if($(this).hasClass("edit-active")){
        	$(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideUp(100);
        	$(this).removeClass("edit-active");

        	if($(this).hasClass("serve-category")){
        		$(".close-default-item").hide();
        	}

        	if($(this).hasClass("facility")){
        		$(".close-default-facility-item").hide();
        	}

        	if($(this).hasClass("phone")){
				$("i.delete-phone").hide();
            }
        	
        }else{
            if($(this).hasClass("product-price")){
                
            	$("#nomalprice").val(g_pro_price);
            	$("#promoteprice").val(g_pro_proprice);
            }

            if($(this).hasClass("phone")){
				$("i.delete-phone").show();
            }
            
        	if($(this).hasClass("branch")){
        		
            	if(!isclickbranch){
            		$(this).siblings(".shop-update-loading").show();
            		loadShop(this, function(obj){ 
            			$(obj).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);
                		$(obj).addClass("edit-active");           			
                		isclickbranch = true;
                		setTimeout(function(){top.resizeIframe();},150);
                	});
             
                }else{
                	$(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
                 	$(this).addClass("edit-active");
                }
                return;        	    		
            }
        	else if($(this).hasClass("serve-category")){

				if(!isclickservecategory){
					$(this).siblings(".shop-update-loading").show();
					loadServeCategory(this, function(obj){
						$(obj).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);
                		$(obj).addClass("edit-active");           			
                		isclickservecategory = true;
                		$(".close-default-item").show();
                		setTimeout(function(){top.resizeIframe();},150);
					});
				}else{
					$(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
			        $(this).addClass("edit-active");
					$(".close-default-item").show();
				}	
				return;
            }
        	else if($(this).hasClass("facility")){

        		if(!isclickfacility){
					$(this).siblings(".shop-update-loading").show();
					loadShopFacility(this, function(obj){
						$(obj).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);
                		$(obj).addClass("edit-active");           			
                		isclickfacility = true;
                		$(".close-default-facility-item").show();
                		setTimeout(function(){top.resizeIframe();},150);
					});
				}else{
					$(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
			        $(this).addClass("edit-active");
					$(".close-default-facility-item").show();
				}
				return;
            }
        	
            $(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
        	$(this).addClass("edit-active");
                      		        	
        }       
      	setTimeout(function(){top.resizeIframe();},150);
				
    });
    
    $(window).load(function(){
   		top.resizeIframe();
    });

    $(window).on("resize", function() {
    	top.resizeIframe();
    });

    $(document).ready(function(){
    	
    	$(".timepicker").timepicker({
             showInputs: false,
             showMeridian : false,
             maxHours : 24
        });	
    	$('.inputmaskphone').inputmask({
   		 	mask: '999-999-9999'
   		});
    });
       

	/*================ load branch ==================*/
		
	var myShop = [];
	function loadShop( obj, callback ){
	    $.ajax({
			type: "GET",
			url: $("#base_url").val()+"API/ShopRestController/getAllShop", 
			success: function(data){
				data = JSON.parse(data);
				myShop = data;
				if( typeof callback === "function"){
					callback(obj);
				}
				$(obj).siblings(".shop-update-loading").hide();
				displaySearchBranch(myShop, $("#shopname_eng").val());
				
				top.progressbar.stop();
				
			 }
		});
	}
	
	function displaySearchBranch( data , srchshopname_eng){
	
		var shopnamedis = '';
		if(data.length <= 0){
			$("#text-search-dis1").html(cutString(srchshopname_eng , 35));
			$("#text-search-dis2").html(cutString(srchshopname_eng , 20));
			shopnamedis +="<div class='no-data-wrapper' align='center'>";
			shopnamedis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
			shopnamedis +="  <span class='no-data-text'>No Record Found!</span>";
			shopnamedis +="</div>";
			$("#display-searching-text").show();
			$("#nham-dropdown-footer").show();
			
		}else{	
			
			$("#display-searching-text").hide();
			$("#nham-dropdown-footer").hide();		
			 for(var i=0 ; i<data.length ; i++){			
				 shopnamedis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].shop_id+'" /><p><span class="title">'+data[i].shop_name_en+'</span></p></div>';
			 }				
			
		}
		$("#display-result").html(shopnamedis); 	
		
	}
	
	$("#shopname_eng").on("keyup",function(){
		
		var srchresult = [];
		var srchname = $(this).val().replace(/\s/g,'');
		if(srchname){
			for(var i = 0; i < myShop.length; i++)
	    	{
	    	  if(myShop[i].shop_name_en.toLowerCase().indexOf(srchname.toLowerCase()) !== -1 )
	    	  {
	    	     srchresult.push(myShop[i]);
	    	  }
	    	}
	
			displaySearchBranch(srchresult,  srchname);
			
	    }else{
	    	displaySearchBranch(myShop, srchname);
	    }	
	});

	/*================== end load branch ===================*/
	/*================== load serve category =================*/
	
	var myServeCategory = [];
	
	function loadServeCategory(obj, callback){
	    $.ajax({
			type: "GET",
			url: $("#base_url").val()+"API/ServeCategoryRestController/getAllServeCategory", 
			success: function(data){
				data = JSON.parse(data);
				myServeCategory = data;
				if( typeof callback === "function"){
					callback(obj);
				}
				$(obj).siblings(".shop-update-loading").hide();
				displaySearchServeCategory(myServeCategory, $("#servecategoryname").val());
				
				top.progressbar.stop();
				
			 }
		});
	}
	
	function displaySearchServeCategory( data , srchname){
	
		var dis = '';	
		if(data.length <= 0){
			$("#text-search-servecategory-dis1").html(cutString(srchname , 35));
			$("#text-search-servecategory-dis2").html(cutString(srchname , 20));
			dis +="<div class='no-data-wrapper' align='center' style='padding-bottom:4px;'>";
			dis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
			dis +="  <span class='no-data-text'>No Record Found!</span>";
			dis +="</div>";
			$("#display-searching-text_servecategory").show();
			$("#nham-dropdown-footer-servecategory").show();
		}else{
	
			$("#display-searching-text_servecategory").hide();
			$("#nham-dropdown-footer-servecategory").hide();
			
			var diffarr = getArrdiff(data,servecatearr);
			 for(var i=0 ; i<diffarr.length ; i++){
				 if(diffarr[i] == undefined ) continue; 
				 dis += '<div  class=" nham-dropdown-multi-result">';
				 dis += ' <input type="hidden" value="'+diffarr[i].serve_category_id+'" />';
				 dis += ' <img class="pull-left icon" src="'+$("#dis_img_path").val()+'/uploadimages/real/icon/'+diffarr[i].serve_category_icon+'"/>';
				 dis += ' <p><span class="title">'+diffarr[i].serve_category_name+'</span></p></div>';
			 }		
			 			 			
			 for(var i=0 ; i<data.length ; i++){			
				for(var j=0; j<servecatearr.length; j++){
					if(servecatearr[j] == data[i].serve_category_id){
						dis += '<div  class="chosen-record nham-dropdown-multi-result-disable">';
						dis += ' <input type="hidden" value="'+data[i].serve_category_id+'" />';
						dis += ' <img class="pull-left icon" src="'+$("#dis_img_path").val()+'/uploadimages/real/icon/'+data[i].serve_category_icon+'"/>';
						dis += ' <p><span class="title">'+data[i].serve_category_name+'</span></p>';	
						dis += ' <i class="fa fa-check chosen-icon" aria-hidden="true"></i>';
						dis += '</div>';
					}
				}								 
			 }
			 
			 dis+="<div style='clear:both'></div>";
		}
		$("#display-result-servecategory").html(dis); 
		
		
	}

	function getArrdiff(a1, a2){

		var a = [];
	    for (var i = 0; i < a1.length; i++) {
	        a[a1[i].serve_category_id] = a1[i];
	    }
	    for (var i = 0; i < a2.length; i++) {
	        if (a[a2[i]]) {
	            delete a[a2[i]];
	        }else{
				
		    }
	    }
	    var diff = [];
	    for(var i=0; i<a.length;i++){
			diff.push(a[i]);
		}
	    return diff;
	}

	
	$("#servecategoryname").on("keyup",function(){
		
		var srchresult = [];
		var srchname = $(this).val().replace(/\s/g,'');
	
		if(srchname){
			for(var i = 0; i < myServeCategory.length; i++)
	    	{
	    	  if(myServeCategory[i].serve_category_name.toLowerCase().indexOf(srchname.toLowerCase()) !== -1 )
	    	  {
	    	     srchresult.push(myServeCategory[i]);
	    	  }
	    	}
			
			displaySearchServeCategory(srchresult, srchname);
			
	    }else{
	    	displaySearchServeCategory(myServeCategory, srchname);
	    }	
	});

	$("#yesservecategory").on("mousedown",function(){

		window.parent.$("#servecategorybtnpop").click();
		window.parent.$("#servecategorynamepopup").val($("#servecategoryname").val());
		
	});

	function getServeCategories(){

		var catesource = $("#serve-categories").find(".selected-category-box");
		var servecategories = [];
		for(var i=0 ; i<catesource.length; i++){
			var cateval = catesource.eq(i).find("input").val();
			servecategories.push(cateval);
		}
		return servecategories;
	}
	
	/*================== end load serve category ================*/
	
	/*================== load facility ==================*/
	
	
	var myShopFacility = [];
	
	function loadShopFacility(obj, callback){
	    $.ajax({
			type: "GET",
			url: $("#base_url").val()+"API/ShopFacilityRestController/getAllShopFacility", 
			success: function(data){
				data = JSON.parse(data);
				myShopFacility = data;
				if( typeof callback === "function"){
					callback(obj);
				}
				$(obj).siblings(".shop-update-loading").hide();
				displaySearchShopFacility(myShopFacility, $("#shopfacilityname").val());
				
				top.progressbar.stop();
				
			 }
		});
	}
	
	function displaySearchShopFacility( data , srchname){
	
		var dis = '';
		if(data.length <= 0){
			$("#text-search-shopfacility-dis1").html(cutString(srchname , 35));
			$("#text-search-shopfacility-dis2").html(cutString(srchname , 20));
			dis +="<div class='no-data-wrapper' align='center' style='padding-bottom:4px;'>";
			dis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
			dis +="  <span class='no-data-text'>No Record Found!</span>";
			dis +="</div>";
			$("#display-searching-text_shopfacility").show();
			$("#nham-dropdown-footer-shopfacility").show();
		}else{	
			$("#display-searching-text_shopfacility").hide();
			$("#nham-dropdown-footer-shopfacility").hide();
			
			 var diffarr = getArrdiffFacility(data,tagarr);
			 for(var i=0 ; i<diffarr.length ; i++){
				 if(diffarr[i] == undefined ) continue; 
				 dis += '<div  class="nham-dropdown-multi-result">';
				 dis += ' <input type="hidden" value="'+diffarr[i].sh_facility_id+'" />';
				 dis += ' <img class="pull-left icon" src="'+$("#dis_img_path").val()+'/uploadimages/real/icon/'+diffarr[i].sh_facility_icon+'"/>';
				 dis += ' <p><span class="title">'+diffarr[i].sh_facility_name+'</span></p></div>';
			 }		
			 			 			
		    for(var i=0 ; i<data.length ; i++){			
				for(var j=0; j<tagarr.length; j++){
					if(tagarr[j] == data[i].sh_facility_id){				
						 dis += '<div  class="chosen-record nham-dropdown-multi-result-disable">';
						 dis += ' <input type="hidden" value="'+data[i].sh_facility_id+'" />';
						 dis += ' <img class="pull-left icon" src="'+$("#dis_img_path").val()+'/uploadimages/real/icon/'+data[i].sh_facility_icon+'"/>';
						 dis += ' <p><span class="title">'+data[i].sh_facility_name+'</span></p>';
						 dis += ' <i class="fa fa-check chosen-icon" aria-hidden="true"></i>';
						 dis += '</div>';
					}
				}								 
			 }		 
			 dis+="<div style='clear:both'></div>";
			
		}
		$("#display-result-shopfacility").html(dis); 	
		
	}

	function getArrdiffFacility(a1, a2){

		var a = [];
	    for (var i = 0; i < a1.length; i++) {
	        a[a1[i].sh_facility_id] = a1[i];
	    }
	    for (var i = 0; i < a2.length; i++) {
	        if (a[a2[i]]) {
	            delete a[a2[i]];
	        }else{
				
		    }
	    }
	  
	    var diff = [];
	    for(var i=0; i<a.length;i++){
			diff.push(a[i]);
		}
	    return diff;
	}
	
	$("#shopfacilityname").on("keyup",function(){
		
		var srchresult = [];
		var srchname = $(this).val().replace(/\s/g,'');
	
		if(srchname){
			for(var i = 0; i < myShopFacility.length; i++)
	    	{
	    	  if(myShopFacility[i].sh_facility_name.toLowerCase().indexOf(srchname.toLowerCase()) !== -1 )
	    	  {
	    	     srchresult.push(myShopFacility[i]);
	    	  }
	    	}
			
			displaySearchShopFacility(srchresult,  srchname);
			
	    }else{
	    	displaySearchShopFacility(myShopFacility, srchname);
	    }	
	});

	$("#yesshopfacility").on("mousedown",function(){

		window.parent.$("#shopfacilitybtnpop").click();
		window.parent.$("#shopfacilitynamepopup").val($("#shopfacilityname").val());
		
	});

	function getShopFacilities(){

		var facilitysource = $("#shop-facilities").find(".selected-category-box");
		
		var shopfacilities = [];
		for(var i=0 ; i<facilitysource.length; i++){
			var facility = facilitysource.eq(i).find("input").val();
			shopfacilities.push(facility);
		}
		return shopfacilities;
	}
	
	/*================== end load facility ==================*/
	/*================= working day section ==================*/

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
	/*================= end working day section =================*/
	/*=================== phone adding =================*/

	
	$(".nham-append-data").on("click",function(){
		var phonenum = $("#shop_phonenum").val().replace(/[_]/g,"").trim();
		if(phonenum == '' || phonenum.indexOf('--') > -1  || phonenum == null) return;		
		displayPhones(phonenum);
		
		$("#shop_phonenum").val("");	
	});
	
	 $(document).on("click",".close-phone",function(){	
		$(this).parents(".nham-box-wrap").remove();
	}) ;
	
	function displayPhones( data ){
		var dis =""; 
			dis += '<span class="nham-box-wrap">';
			dis += '<span class="phone-wrapper">'+data+'</span>';
			dis += '<i class="fa fa-close close-phone" style="margin-left:5px;margin-top:5px;" ></i>';
			dis += '</span>';
		$("#phone-add-result").append(dis);
	}

	$(document).on("click","i.delete-phone", function(){
		$(this).parent().remove();
	});

	function getAllPhone(){
		var shopphone = [];

		var addlng = $("#phone-add-result").find("span.nham-box-wrap").length;
		for(var i=0; i<addlng; i++){
			var addphone = $("#phone-add-result").children().eq(i).find("span.phone-wrapper").text();
			shopphone.push(addphone);
		}

		var remainlng = $("#shop-phone").find("p.shop-info").length;
		for(var i=0; i<remainlng; i++){
			var remainphone = $("#shop-phone").children().eq(i).find("span.phone-dis").text();
			shopphone.push(remainphone);
		}
		
		return shopphone;
	}
	/*================= close phone adding ==================*/
	
	$(document).on("click", ".close-default-item", function(){
		var removeservecate = $(this).parents(".selected-category-box").find("input").val();
		
		servecatearrdelete.push(removeservecate);
			
		$(this).parents(".selected-category-box").remove();
		top.resizeIframe();		 
	});	

	$(document).on("click", ".close-default-facility-item", function(){	

		var removefacility = $(this).parents(".selected-category-box").find("input").val();
			
		tagarrdelete.push(removefacility);		
		$(this).parents(".selected-category-box").remove();
		
		 top.resizeIframe();		 
	});	
	/*================== display shop data =================*/
	
	/* function getRemainingServeCategory(){

		var remainservecate = [];
		var serveobj= $("#serve-category-wrapper").children(".selected-category-box");
		var serveobj_add = $("#serve-categories").find(".selected-category-box");

		for(var i =0; i<serveobj.length; i++){
			remainservecate.push({"serve_category_name" : serveobj.eq(i).find("span.serve_cate").text()});
		}

		for(var i=0; i<serveobj_add.length; i++){
			remainservecate.push({"serve_category_name" : serveobj_add.eq(i).find("span").text()});
		}
		console.log(remainservecate);
		return remainservecate;
	} */
	
	function loadServeCategoryDis( data ){
		 $("#serve-category-wrapper").children().remove();
		
		 if(data.length <= 0) return;
		 for(var i=0; i<data.length ;i++){

			 var textlng = $("<p></p>").append(data[i].serve_category_name.replace(/\s+/g, '')).textWidth()+55;
			 var box = "<div class='selected-category-box pull-left' style='min-width:"+textlng+"px'>";
			 box += "<input style='margin-top:10px' type='hidden' value='"+data[i].serve_category_id+"' />";
			 box += "<img class='pull-left icon-after-select' src='"+$("#dis_img_path").val()+"/uploadimages/real/icon/"+data[i].serve_category_icon+"' />";
			 box += "<p class='text-serve-category-selected'>";
			 box += "<span class='serve_cate'>"+data[i].serve_category_name+"</span>";
	 		 box += "<i class='fa fa-times close-default-item' style='margin-left:10px;cursor:pointer;display:none;'  aria-hidden='true'></i></p></div>";
	 		
	 		 $("#serve-category-wrapper").append(box);
	 		 
		 }	 
		 top.resizeIframe();	
	}

	
	function loadTags( data ){
		 $("#facility-wrapper").children().remove();
		
		 var box ="";
		 if(data.length <= 0){
			box +="<span class='no-information'>NO INFORMATION!<span>";
		 }else{
			 for(var i=0; i<data.length  ;i++){

				 var textlng = $("<p></p>").append(data[i].tag_name.replace(/\s+/g, '')).textWidth()+55;
				 box += "<div class='selected-category-box pull-left' style='width:"+textlng+"px'>";
				 box += "<input type='hidden' value='"+data[i].tag_id+"' />";
				 box += "<p class='text-serve-category-selected'>";
				 box += "<span>&nbsp;&nbsp;&nbsp;"+data[i].tag_name+"</span>";
		 		 box += "<i class='fa fa-times close-default-facility-item' style='margin-left:10px;cursor:pointer;display:none;'  aria-hidden='true'></i></p></div>";		 				 		
			 }	 
		 }
		 $("#facility-wrapper").append(box);
		 	
		 top.resizeIframe();		
	}

	var social_media;
	loadDefaultUpdateInfo();
	function loadDefaultUpdateInfo(){

		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ProductRestController/getDefaultUpdateInfo",
			contentType : "application/json", 
			data : JSON.stringify({
				"resq_data" : {
					"product_id" :$("#product_id").val()
				}					
			}),
			success : function(data){
				data = JSON.parse(data);
				
				product_data = data.default_data.product_data;
				$("#dis-product_id").html(product_data.shop_name_en);
				$("#dis-eng-name").html(product_data.pro_name_en);
				
				$("#dis-kh-name").html(defaultNull(product_data.pro_name_kh));
				$("#make-duration").html(defaultNum(product_data.pro_made_duration));
				if(product_data.pro_made_duration <= 0 || product_data.pro_made_duration =="0" ){
					$("#make-duration-num").hide();
				}

				if(product_data.pro_serve_type){
					$("#pro_serve_type").html(defaultNull(product_data.pro_serve_type.toUpperCase()));	
				}							
						
				$("#pro-short-description").html(defaultNull(product_data.pro_short_description));		
				$("#pro-description").html(defaultNull(product_data.pro_description));
				$("#pro-remark").html(defaultNull(product_data.pro_remark));

				g_pro_price = defaultNull(product_data.pro_price, 5);
				g_pro_proprice = defaultNull(product_data.pro_promote_price, 5);
				
				$("#price").html(defaultNull(product_data.pro_price, 5));
				$("#promote-price").html(defaultNull(product_data.pro_promote_price, 5));
				
				$("#dis-popular-pro").html(convertToText(product_data.pro_local_popularity));
				
					
				/*	    	 		     	 		    	 		    
				for(var i=0; i<data.default_data.tags.length; i++){
					tagarr.push(data.default_data.tags[i].tag_id);
				}
				*/
				for(var i=0; i<data.default_data.shop_servecate.length; i++){
					servecatearr.push(data.default_data.shop_servecate[i].serve_category_id);
				}
				//loadTags(data.default_data.tags);
				loadServeCategoryDis(data.default_data.shop_servecate);

				window.parent.$(".iframe_hover").hide();
				window.parent.$("#updateShopframe").show();
							
			}
		});

	}

	function defaultNum( num ){
		if(num !="00:00"){
			return num;
		}else{
			return "<span class='no-information'>NO INFORMATION!<span>";
		}
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

	function getSocialLink(link, shopname , type){

		if(!link){
			return "<span class='no-information'>NO INFORMATION!<span>";
		}else{
			var dis='';
			dis += '<a title="'+link+'" href="'+link+'">'+shopname+'/'+type+'</a>';
			return dis;
		}
	}

	function format24hour(time) {
		 // Check correct time format and split into components
		  //time = time.substring(0, 5);
		  time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];
		  
		  if (time.length > 1) { // If time format correct
		    time = time.slice (1);  // Remove full string match value
		    time[5] = +time[0] < 12 ? '  AM' : '  PM'; // Set AM/PM
		    time[0] = +time[0] % 12 || 12; // Adjust hours
		  }
		  return time.join (''); // return adjusted time or original string
	}

	function getPhoneNumber(data){
		
		if(!data) return data;

		console.log(data);
		var dis = '';
		var phone = data.split("|");
		for(var i=0; i<phone.length; i++){
			dis += '<p class="shop-info wordwrap"><i class="fa fa-phone" aria-hidden="true"></i><span class="phone-dis">'+phone[i]+'</span><i class="fa delete-phone fa-times" aria-hidden="true"></i></p>';
		}
		return dis;
	}
	function convertToText( data ){
		
		if(data==0) return "<span class='no-information'>Normal!<span>";;
		if(data==1) return "<span class='no-information'>POPULAR!<span>";;

	}

	/*================== end display shop data =================*/
	
	/*================= save update =================*/
	
	$("#save-branch").on("click", function(){

		$(this).siblings(".update-loading").show();
		updateProductField($("#selectedshop").val(), "shop_id", this, function(obj){
			$("#dis-product_id").html($("#shopname_eng").val());
			$(obj).parents(".save-shop-info-box").slideUp(100);
			$(obj).parents(".shop-info-wrapper").find(".shop-info-edit-btn").removeClass("edit-active");
			$(obj).parents(".shop-info-wrapper").find(".font-icon-cross").click();
			setTimeout(function(){top.resizeIframe()}, 120);
		});
					
	});

	$(".update-shop-save").on("click", function(){
		
		var value = "";

		if($(this).hasClass("popular-pro")){
			value = countWorkingday().toString().replace(/[,]/g,"|").trim();
		}
		else if($(this).hasClass("phone")){		
			value = getAllPhone().toString().replace(/[,]/g,"|").trim();
		}
		else{
			value = $(this).parents(".save-btn-wrapper").siblings(".input-wrapper").find(".insert-value").eq(0).val();
		}
		var param = $(this).siblings("input.update-param").val();
		if(!value){
			top.swal("Update Error!", param+" is invalid", "error");
			return;
		}
		$(this).siblings(".update-loading").show();
		updateProductField(value, param, this , function(obj){
			
			if($(obj).hasClass("popular-pro")){
				$("#dis-popular-pro").html(convertToText(defaultNull(555555)));
			}
			else if($(obj).hasClass("phone")){
				$(obj).parents(".shop-info-wrapper").children(".info-edit-wrapper").find(".shop-info").html(getPhoneNumber(value));
				$("#phone-add-result").children().remove();
			}
			else{
				$(obj).parents(".shop-info-wrapper").children(".info-edit-wrapper").find(".shop-info").html(value);
			}			
			$(obj).parents(".save-shop-info-box").slideUp(100);
			$(obj).parents(".shop-info-wrapper").find(".shop-info-edit-btn").removeClass("edit-active");
			$(obj).parents(".save-btn-wrapper").siblings(".input-wrapper").find("input").eq(0).val("");
			$(obj).parents(".save-btn-wrapper").siblings(".input-wrapper").find("textarea").eq(0).val("");
			setTimeout(function(){top.resizeIframe()}, 120);
			
		});
	});


	$(".update-product-price").on("click",function(){
		
		var nomalprice = $("#nomalprice").val();
		var promoteprice = $("#promoteprice").val();
		if(!nomalprice) {
			top.swal("Update Error!", "shop_opening_time is invalid", "error");
			return;
		}
		if(!promoteprice) {
			top.swal("Update Error!", "shop_close_time is invalid", "error");
			return;
		}
		var obj = this;
		$(this).siblings(".update-loading").show();
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ProductRestController/updateProductPrice",
			contentType : "application/json",
			data : JSON.stringify({
				"product_data" : {
					"nomalprice" : nomalprice,
					"promoteprice" : promoteprice,
					"product_id" : $("#product_id").val()
				}
			}),
			success : function(data){
				data = JSON.parse(data);
				if(data.is_updated == true){

					//top.loadNotCompletedInfo();
					g_pro_price = nomalprice;
					g_pro_proprice = promoteprice;
					
					$("#price").html(defaultNull(nomalprice, 5));
					$("#promote-price").html(defaultNull(promoteprice, 5));	
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

	function loadUpdatedServeCategory(obj ,callback){
		$.ajax({
			type : "GET",
			url : $("#base_url").val()+"API/ServeCategoryRestController/getServeCategoryByProId/"+$("#product_id").val(),
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
				$("#serve-categories").children().remove();
				servecatearr = [];
				
				for(var i=0; i<data.length; i++){
					servecatearr.push(data[i].serve_category_id);
				}
				loadServeCategoryDis(data);
				displaySearchServeCategory(myServeCategory, $("#servecategoryname").val());

				if( typeof callback === "function"){
					callback(obj);
				}	
				
			}
		}); 
	}

	
	$("button.update-serve-category").on("click", function(){
		
		$(this).siblings(".update-loading").show();
		var obj = this;
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ProductRestController/updateProductServeCateogry",
			contentType : "application/json",
			data : JSON.stringify({
					"product_data" : {
						"product_id" : $("#product_id").val(),
						"removeditem" : servecatearrdelete,
						"addeditem" : getServeCategories()
					}
				}
			),
			success : function(data){
				data = JSON.parse(data);
				if(data.is_updated == true){			
					loadUpdatedServeCategory(obj ,function(obj){
						$(obj).parents(".save-shop-info-box").slideUp(100);
						$(obj).parents(".shop-info-wrapper").find(".shop-info-edit-btn").removeClass("edit-active");
						setTimeout(function(){top.resizeIframe()}, 120); 
					});
							
				}else{
					console.log(data.message);
					top.swal("Update Error!", data.message, "error");
				}
				$(obj).siblings(".update-loading").hide();
				servecatearrdelete = [];
					
			}
		}); 
	});

	function loadUpdatedShopFacility(obj ,callback){
		$.ajax({
			type : "GET",
			url : $("#base_url").val()+"API/ProductRestController/getTageByProId/"+$("#product_id").val(),
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
				$("#shop-facilities").children().remove();
				tagarr = [];
				
				for(var i=0; i<data.length; i++){
					tagarr.push(data[i].sh_facility_id);
				}
				loadTags(data);
				displaySearchShopFacility(myShopFacility, $("#servecategoryname").val());
				if( typeof callback === "function"){
					callback(obj);
				}	
				
			}
		}); 
	}

	$("button.update-facility").on("click", function(){
		
		$(this).siblings(".update-loading").show();
		var obj = this;
		console.log(getShopFacilities());
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ShopRestController/updateProductTage",
			contentType : "application/json",
			data : JSON.stringify({
					"product_data" : {
						"product_id" : $("#product_id").val(),
						"removeditem" : tagarrdelete,
						"addeditem" : getShopFacilities()
					}
				}
			),
			success : function(data){
				data = JSON.parse(data);
				if(data.is_updated == true){			
					loadUpdatedShopFacility(obj ,function(obj){
						$(obj).parents(".save-shop-info-box").slideUp(100);
						$(obj).parents(".shop-info-wrapper").find(".shop-info-edit-btn").removeClass("edit-active");
						setTimeout(function(){top.resizeIframe()}, 120); 
					}); 
							
				}else{
					console.log(data.message);
					top.swal("Update Error!", data.message, "error");
				}
				$(obj).siblings(".update-loading").hide();
				tagarrdelete = [];
					
			}
		}); 
	});

	function updateProductField(value, param,obj ,callback){

		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ProductRestController/updateProductField",
			contentType : "application/json",
			data : JSON.stringify({
				"product_data" : {
					"type" : 1,
					"updated_value" : value,
					"pro_id" : $("#product_id").val(),				
					"param" : param
				}
			}),
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
				if(data.is_updated == true){
					//top.loadNotCompletedInfo();
					if( typeof callback === "function"){
						callback(obj);
					}				
				}else{
					top.swal("Update Error!", data.message, "error");
				}
				$(obj).siblings(".update-loading").hide();
					
			}
		});
	}
	/*================ end save update ===============*/
    </script>
  </body>
</html>
