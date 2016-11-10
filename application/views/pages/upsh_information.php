<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop.css" />
 
	 <style>
	 	.shop-event-wrapper{
	 		min-height:600px;
	 		background: #fff;
	 		
	 	}
	 	
	 	p.update-title{
	 		
	 		font-size: 15px;
	 		font-weight: bold;
	 		padding-bottom: 4px;
	 		color: #90949c;
	 		border-bottom: 1px solid #EEEEEE;
	 		
	 	}
	 	
	 	.update-info-box{
	 		padding-top: 15px;
	 	}
	 	
	 	p.shop-info{
	 		font-size: 14px;
	 		padding-left:10px;
	 		color: #616161; 	
	 	}
	 	
	 	.wordwrap { 
		   white-space: pre-wrap;      /* CSS3 */   
		   white-space: -moz-pre-wrap; /* Firefox */    
		   white-space: -pre-wrap;     /* Opera <7 */   
		   white-space: -o-pre-wrap;   /* Opera 7 */    
		   word-wrap: break-word;      /* IE */
		}
	 	
	 	div.shop-info-edit-btn{
	 		width: 30px;
	 		height: 30px;
	 		line-height: 30px;
	 		border: 1px dashed #eb5c4a;
	 		text-align:center;
	 		cursor: pointer;
	 	}
	 	
	 	div.shop-info-edit-btn:hover{
	 		background:#EEEEEE;
	 	}
	 	
	 	div.shop-info-edit-btn i{
	 		color: #eb5c4a;
	 		
	 	}
	 	
	 	div.shop-info-wrapper{
	 		
	 	}
	 	
	 	div.div-left{
	 		float:left;
	 		width: 82%;
	 		
	 	}
	 	div.div-right{
	 		float:left;
	 		width: 18%;
	 		position:absolute; 
	 		right:0;
	 		bottom: 0;
	 	}
	 	
	 	div.save-shop-info-box{
	 		padding-top: 6px;
	 		display:none;
	 	}
	 	
	 	div.save-btn-wrapper{
	 		padding-top: 6px;
	 	}
	 	
	 	.edit-active{
	 		border: 1px dashed #9E9E9E !important;
	 	}
	 	.edit-active i{
	 		color :  #9E9E9E !important;
	 	}
	 	
	 	button.nham-btn{
	 		border-radius: 0;	 		
	 	}
	 	
	 	div.info-edit-wrapper{
	 		position:relative;
	 		min-height: 30px;
	 	}
	 	
	 	.head-text{
	 		font-size: 14px;
	 		color: #BDBDBD;
	 		font-weight: bold;
	 	}
	 	
	 	img.update-loading{
	 		display: none;
	 		padding-right: 8px;
	 	}
	 	
	 	img.update-loading-data{
	 		width: 16px;
	 		height: 16px;
	 		
	 	}
	 	div.shop-update-loading{
	 		
	 		padding-top: 15px;
	 		padding-right: 8px;
	 		display:none;
	 	}
	 	
	 	div.chosen-record {
	 		background: #EEEEEE;
	 		position:relative;
	 		cursor: not-allowed !important;
	 	}
	 	
	 	i.chosen-icon{
	 		position:absolute;
	 		top:6px;
	 		right:10px;
	 		color: #eb5c4a;
	 	}
	 </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
  
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
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
			       	 			<p class="update-title">BRANCH</p>
			       	 			<div class="shop-info-wrapper">			       	 				
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<p class="shop-info wordwrap">Khmer nham bay sdfs sdfsdfdddddddddddddddddddddsdfsfsfddddddddddddddddddddddddddddd</p>
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
					                    		   <input id="branchname" type="text" class="form-control input nham-dropdown-inputbox "  placeholder="Search branch ">
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
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">	                  		
					                  		<div class="row pull-right">
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			</div>
			       	 		</div>
			       	 		
			       	 		<div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">SHOP'S NAME</p>
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text">(ENG)</span><p class="shop-info wordwrap">THE FASHION</p>
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
			       	 						   <input type="text" id="shopengname" class="form-control" placeholder="shop name in english">
			       	 						</div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
					                  		<div class="row pull-right">
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			</div>
			       	 			
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text">(KHM)</span><p class="shop-info wordwrap">THE FASHION</p>
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
			       	 						   <input type="text" id="shopkhname" class="form-control" placeholder="shop name in khmer">
			       	 					    </div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">					                 		
					                  		<div class="row pull-right">
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			 </div>
			       	 		  </div>
			       	 		  
			       	 		  <div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">SHOP'S SERVE-CATEGORY</p>
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
						                  			<button type="button" class="btn btn-default nham-btn">save</button>
						                  		</div>
						                  	</div>
					                  		<div style="clear:both;"></div>
			       	 					   </div>		       	 							       	 				
			       	 					</div>			       	 			
			       	 		  		</div>
			       	 		  		
			       	 		  		<div class="col-lg-12 col-sm-12 update-info-box">
					       	 			<p class="update-title">SHOP'S FACILITY</p>
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
									                  	</div>
								                   </div>						       	 						
								                </div>		       	 										                							                    	
							                 </div>
								             <div class="col-lg-12 col-sm-12 save-btn-wrapper">	                  		
								                 <div class="row pull-right">
								                  	<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
								                  	<button type="button" class="btn btn-default nham-btn">save</button>
								                  </div>
								             </div>
							                 <div style="clear:both;"></div>
					       	 			</div>		       	 							       	 				
					       	 		</div>			       	 			
					       	 	</div>
					       	 	
					       	 	<div class="col-lg-12 col-sm-12 update-info-box">
				       	 			<p class="update-title">SHOP'S SERVE-TYPE</p>
				       	 			<div class="shop-info-wrapper">			       	 			
				       	 				<div class="info-edit-wrapper">
					       	 				<div class="div-left">
					       	 					<p class="shop-info wordwrap">Food</p>
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
				       	 						    <select class="form-control " style="width: 100%;" id="shopservetype">
								                      <option selected="selected" value="food">Food</option>
								                      <option value="drink">Drink</option>
								                    
								                    </select>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default nham-btn">save</button>
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
					       	 					<p class="shop-info wordwrap">Food</p>
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
				       	 						    <textarea id="shopshortdes" class="form-control" rows="3" placeholder="describe shortly about the shop" style="resize:none;"></textarea>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default nham-btn">save</button>
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
					       	 					<p class="shop-info wordwrap">Food</p>
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
				       	 						    <textarea id="shopdes" class="form-control" rows="3" placeholder="describe briefly about the shop"  style="resize:vertical;"></textarea>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default nham-btn">save</button>
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
					       	 					<p class="shop-info wordwrap">Food</p>
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
				       	 						     <textarea id="shopremark" class="form-control" rows="3" placeholder="describe what you haven't done for saving shop" style="resize:none;"></textarea>
				       	 						</div>				                							                    	
						                  	</div>
						                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                  		<div class="row pull-right">
						                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                  			<button type="button" class="btn btn-default nham-btn">save</button>
						                  		</div>
						                  	</div>
						                  	<div style="clear:both;"></div>
				       	 				</div>		       	 							       	 				
				       	 			</div>				       	 							       	 			
			       	 		    </div>
			       	 		  			       	 		  			       	 		  			       	 					       	 		
		       	 		</div>
		       	 		
		       	 	</div>
		       	 	
		       	 	
		       	 	<div class="col-lg-5 col-sm-5" >
		       	 	
		       	 		 <div class="col-lg-12 col-sm-12 update-info-box">
				       	 	<p class="update-title">WORKING TIME</p>
				       	 	<div class="shop-info-wrapper">			       	 			
				       	 		<div class="info-edit-wrapper">
					       	 		<div class="div-left">
					       	 			<p class="shop-info wordwrap">8:30 AM - 9:00 PM</p>
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
				       	 					<textarea id="shopremark" class="form-control" rows="3" placeholder="describe what you haven't done for saving shop" style="resize:none;"></textarea>
				       	 				</div>				                							                    	
						            </div>
						            <div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                <div class="row pull-right">
						                   <img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                   <button type="button" class="btn btn-default nham-btn">save</button>
						                </div>
						            </div>
						            <div style="clear:both;"></div>
				       	 		</div>		       	 							       	 				
				       	 	</div>				       	 				       	 		       	 							       	 			
			       	 	</div>
			       	 	
			       	 	<div class="col-lg-12 col-sm-12 update-info-box">
				       	 	<p class="update-title">WORKING DAY</p>
				       	 	<div class="shop-info-wrapper">			       	 			
				       	 		<div class="info-edit-wrapper">
					       	 		<div class="div-left">
					       	 			<p class="shop-info wordwrap">MONDAY</p>
					       	 			<p class="shop-info wordwrap">TUESDAY</p>
					       	 			<p class="shop-info wordwrap">WEDNESDAY</p>
					       	 			<p class="shop-info wordwrap">THURSDAY</p>
					       	 			<p class="shop-info wordwrap">FRIDAY</p>
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
				       	 					<textarea id="shopremark" class="form-control" rows="3" placeholder="describe what you haven't done for saving shop" style="resize:none;"></textarea>
				       	 				</div>				                							                    	
						            </div>
						            <div class="col-lg-12 col-sm-12 save-btn-wrapper">
						                <div class="row pull-right">
						                   <img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
						                   <button type="button" class="btn btn-default nham-btn">save</button>
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
    
    

    <?php include 'imports/scriptimport.php'; ?>
    
    <script>

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
        	
        }else{
        	if($(this).hasClass("branch")){
        		
            	if(!isclickbranch){
            		$(this).siblings(".shop-update-loading").show();
            		loadBranch(this, function(obj){ 
            			$(obj).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);
                		$(obj).addClass("edit-active");           			
                		isclickbranch = true;
                		setTimeout(function(){top.resizeIframe();},150);
                	});
             
                }          	    		
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
					$(".close-default-item").show();
				}	
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
					$(".close-default-facility-item").show();
				}
            }
           	   
            $(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);       	
        	$(this).addClass("edit-active");
                      		        	
        }       
      	setTimeout(function(){top.resizeIframe();},150);
				
    });
    
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

	/*================ load branch ==================*/
		
	var myBranch = [];
	function loadBranch( obj, callback ){
	    $.ajax({
			type: "GET",
			url: $("#base_url").val()+"API/BranchRestController/getAllBranch", 
			success: function(data){
				data = JSON.parse(data);
				myBranch = data;
				if( typeof callback === "function"){
					callback(obj);
				}
				$(obj).siblings(".shop-update-loading").hide();
				displaySearchBranch(myBranch, $("#branchname").val());
				
				top.progressbar.stop();
				
			 }
		});
	}
	
	function displaySearchBranch( data , srchbranchname){
	
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
	
	$("#branchname").on("keyup",function(){
		
		var srchresult = [];
		var srchname = $(this).val().replace(/\s/g,'');
	
		if(srchname){
			for(var i = 0; i < myBranch.length; i++)
	    	{
	    	  if(myBranch[i].branch_name.toLowerCase().indexOf(srchname.toLowerCase()) !== -1 )
	    	  {
	    	     srchresult.push(myBranch[i]);
	    	  }
	    	}
			console.log(srchresult);
			displaySearchBranch(srchresult,  srchname);
			
	    }else{
	    	displaySearchBranch(myBranch, srchname);
	    }	
	});
	
	$("#yesbranch").on("mousedown",function(){
		var branchdata = {
			"BranchData" : {
				"branch_name" : $("#branchname").val(),
				"branch_remark": ""
			}
		};
		top.progressbar.start();
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/BranchRestController/insertBranch",
			contentType : "application/json",
			data :  JSON.stringify(branchdata),
			success : function(data){
				 data = JSON.parse(data);
				console.log(data);
				if(data.is_insert == false){
					alert("error");
				}else{
					$("#selectedbranch").val(data.branch_id);
					$("#branchname").attr('disabled','disabled');
					$("#branchname").siblings(".font-icon-cross").remove();
					$("#branchname").parent().append("<i class='fa fa-times font-icon-cross'  aria-hidden='true'></i>");
					loadBranch();
				}
			}
		});
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
	
			$("#display-result-servecategory").html(dis); 
			$("#display-searching-text_servecategory").hide();
			$("#nham-dropdown-footer-servecategory").hide();
			var test= [1,5,2,3];

			var diffarr = getArrdiff(data,test);
			 for(var i=0 ; i<diffarr.length ; i++){
				 if(diffarr[i] == undefined ) continue; 
				 dis += '<div  class=" nham-dropdown-multi-result">';
				 dis += ' <input type="hidden" value="'+diffarr[i].serve_category_id+'" />';
				 dis += ' <img class="pull-left icon" src="'+$("#base_url").val()+'uploadimages/icon/'+diffarr[i].serve_category_icon+'"/>';
				 dis += ' <p><span class="title">'+diffarr[i].serve_category_name+'</span></p></div>';
			 }		
			 			 			
			console.log(data);	
			 for(var i=0 ; i<data.length ; i++){			
				for(var j=0; j<test.length; j++){
					if(test[j] == data[i].serve_category_id){
						dis += '<div  class="chosen-record nham-dropdown-multi-result-disable">';
						dis += ' <input type="hidden" value="'+data[i].serve_category_id+'" />';
						dis += ' <img class="pull-left icon" src="'+$("#base_url").val()+'uploadimages/icon/'+data[i].serve_category_icon+'"/>';
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
			console.log(srchresult);
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
		console.log(catesource.length);
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
			 for(var i=0 ; i<data.length ; i++){			
				
				 dis += '<div  class="nham-dropdown-multi-result">';
				 dis += ' <input type="hidden" value="'+data[i].sh_facility_id+'" />';
				 dis += ' <img class="pull-left icon" src="'+$("#base_url").val()+'uploadimages/icon/'+data[i].sh_facility_icon+'"/>';
				 dis += ' <p><span class="title">'+data[i].sh_facility_name+'</span></p></div>';
				 
			 }			
			 dis+="<div style='clear:both'></div>";
			
		}
		$("#display-result-shopfacility").html(dis); 	
		
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
			console.log(srchresult);
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
		console.log(facilitysource.length);
		var shopfacilities = [];
		for(var i=0 ; i<facilitysource.length; i++){
			var facility = facilitysource.eq(i).find("input").val();
			shopfacilities.push(facility);
		}
		return shopfacilities;
	}
	
	/*================== end load facility ==================*/
	
	/*================== display shop data =================*/
	
	loadServeCategoryDis();
	function loadServeCategoryDis(){
		 $("#serve-category-wrapper").children().remove();
		 for(var i=0; i<5;i++){
			 var box = "<div class='selected-category-box pull-left' style='width:"+120+"px'>";
			 box += "<input type='hidden' value='"+"2"+"' />";
			 box += "<img class='pull-left icon-after-select' src='"+"test"+"' />";
			 box += "<p class='text-serve-category-selected'>";
			 box += "<span>"+"Fast Food"+"</span>";
	 		 box += "<i class='fa fa-times close-default-item close-item' style='margin-left:10px;display:none;'  aria-hidden='true'></i></p></div>";
	 		
	 		 $("#serve-category-wrapper").append(box);
		 }	 			
	}

	loadFacilityDis();
	function loadFacilityDis(){
		 $("#facility-wrapper").children().remove();
		 for(var i=0; i<5;i++){
			 var box = "<div class='selected-category-box pull-left' style='width:"+120+"px'>";
			 box += "<input type='hidden' value='"+"2"+"' />";
			 box += "<img class='pull-left icon-after-select' src='"+"test"+"' />";
			 box += "<p class='text-serve-category-selected'>";
			 box += "<span>"+"Fast Food"+"</span>";
	 		 box += "<i class='fa fa-times close-default-facility-item close-item' style='margin-left:10px;display:none;'  aria-hidden='true'></i></p></div>";
	 		
	 		 $("#facility-wrapper").append(box);
		 }	 			
	}
	/*================== end display shop data =================*/
    </script>
  </body>
</html>
