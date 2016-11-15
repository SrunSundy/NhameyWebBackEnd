<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/Jcrop/jquery.Jcrop.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop-upload.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/addshop-validation.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/addshop-openmodal.css" />

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
            Products Management
            <small>manage all inserted shop</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Products Managementt</li>
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
                    		   <input id="shopname" type="text" class="form-control input-lg nham-dropdown-inputbox "  placeholder="Search branch to insert shop">
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
                  					<button class="btn nhamey-btn" id="yesshop">Yes</button>
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
		                     
		                     <div class="form-group nham-dropdown-wrapper">
			                  
			                    <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="form-group">
			                			    <div class="form-group">
							                      <label>Product Name</label>
							                      <input type="text" id="product_engname" class="form-control" placeholder="Product Name in English">
							                      <input type="text" id="product_khname" class="form-control top-gap" placeholder="Product Name in Khmer">
		                     				</div>
			                    	    </div>
                  			        </div>			                    	
			                  	</div>
		                     </div>
		                     <div class="form-group ">
			                    <label>Product Taste</label>
			                     <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="selected-dropdown">
			                    		   <input id="tastname" type="text" class="form-control nham-dropdown-inputbox "  placeholder="Search branch to insert shop">
			                    	       <input type="hidden" class="selectedid" id="selectedtast"/>
			                    	    </div>
			                    		<div class="nham-dropdown-detail"  >
			                    			<div class="nham-dropdown-result-wrapper">
			                    				<div id="display-result-tast" class="display-result-wrapper" style="min-height:35px;">                  					
			                    				</div>   								
			                  				</div>
			                  				<div id="display-searching-text-tast" style="display:none;">
			                  					<div  class="nham-dropdown-noresult">
													<p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>
														Searching "<span id="text-search-dis1-tast"></span>" has no Result!</p>
												</div>
												<div class="nham-dropdown-question">	
													<p>Do you want to register "<span id="text-search-dis2-tast"></span>" as a new branch?</p>
												</div>
			                  				</div>
			                  				
			                  				<div id="nham-dropdown-footer-tast" class="nham-dropdown-result-footer" align="center">
			                  					<button class="btn nhamey-btn" id="yestast">Yes</button>
			                  				</div>
			                  			</div>
                    				</div>
                    			                    	
			                  	</div>
		                     </div>
		          
		                     <div class="form-group">
			                    <label>Product Server Type</label>
			                    <select class="form-control " style="width: 100%;" id="pro_servertype">
			                      <option selected="selected" value="food">Food</option>
			                      <option value="drink">Drink</option>
			                    
			                    </select>
			                 </div><!-- /.form-group -->
						     <div class="form-group "> 
			                     <label>Product Serve Category</label>
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
				                    			<div class="nham-dropdown-result-wrapper">
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
		  
						       <div class="form-group nham-dropdown-wrapper">
			                  
			                    <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="form-group">
			                			    <div class="form-group">
							                      <label>Product Price</label>
							                      <input type="text" id="price" class="form-control" placeholder="Product Price ">
							                      <input type="text" id="promote_price" class="form-control top-gap" placeholder="Product Promote Price">
		                     				</div>
			                    	    </div>
                  			        </div>			                    	
			                  	</div>
		                     </div>
			                  <div class="form-group">
			                     <label>Short Description</label>
			                     <textarea id="productshortdes" class="form-control" rows="3" placeholder="describe shortly about the shop" style="resize:none;"></textarea>
			                  </div>
			                  
			                  <div class="form-group">
			                     <label>Description</label>
			                     <textarea id="productdes" class="form-control" rows="3" placeholder="describe briefly about the shop"  style="resize:vertical;"></textarea>
			                  </div>   
			                   <div class="form-group">
			                     <label>Remark</label>
			                     <textarea id="proremark" class="form-control" rows="3" placeholder="describe what you haven't done for saving shop" style="resize:none;"></textarea>
			                   </div>
			                   	 <div class="form-group "> 
			                     <label>Tags</label>
				                     <div class=" col-sm-12 nham-dropdown-wrapper">
				                		<div class="row">
				                			<div class="selected-dropdown" id="tag_selected_dropdown" style="position:relative;">
				                			
					                			<div class="icon-input-wrapper" style="width:33px;height:28px;position:absolute;top:0;">
					                				
					               
					                			</div>
					                			
								                <input style="padding:4px 4px 4px 28px;" id="tagname" type="text" class="form-control nham-dropdown-inputbox-multi-tags"  placeholder="Search or Select for tag">
								                
								                <div class="error-selected-result">
								                	<p>ITEM IS SELECTED!</p>
								                </div>
								                <div class="serve-category-result" id="tags">
								                	
								                	
								                </div>						                  
				                    	       <!--  <input type="hidden" class="selectedid" id="selectedtag"/> -->
				                    	    </div>
				                    		<div class="nham-dropdown-detail"  >
				                    			<div class="nham-dropdown-result-wrapper">
				                    				<input type="hidden" value="selected-category-box2"/>
				                    				<div id="display-result-tag" class="display-result-wrapper">
				                    					
				                    				</div>		       				
				                  				</div>
				                  				
				                  				<div id="display-searching-text_tag" style="display:none;">
				                  					<div  class="nham-dropdown-noresult">
														<p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>
															Searching "<span id="text-search-tag-dis1"></span>" has no Result!</p>
													</div>
													<div class="nham-dropdown-question">	
														<p>Do you want to register "<span id="text-search-tag-dis2"></span>" as a new shop type?</p>
													</div>
				                  				</div>
				                  				
				                  				<div id="nham-dropdown-footer-tag" class="nham-dropdown-result-footer" align="center">
				                  					<button class="btn nhamey-btn" id="yestag">Yes</button>
				                  				</div>
				                  			</div>
				                    	</div>	
				             
                    	
				                  	</div>
			  			  </div>
			
			            </section><!-- /.Left col -->
			            <!-- right col (We are only adding the ID to make the widgets sortable)-->
			            <section class="col-lg-7 connectedSortable">
							<h5 class="gray-color">Informative Image</h5>
							
							
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
							
							 			      			
			            </section><!-- right col -->
			            <section class="col-lg-7 connectedSortable">
			               
			               		
			            </section>
			            <section class="col-lg-7 connectedSortable">
						
			            </section><!-- right col -->
			          </div><!-- /.row (main row) -->
                </div>
                <div class="box-footer">
                 	<button type="button" class="btn btn-danger shop-save"  id="saveproduct"> Save </button>
                </div>
              </div><!-- /.box (chat box) -->
       	
        </section><!-- /.content -->
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
  </body>

 
<script>
var base_url="<?php echo base_url();?>";
var logoimagename = "";
var servecategory = "";
//start upload logo 
var arrnewfileimagename = [];
$("#saveproduct").on("click",function(){
		 progressbar.start();
		 $.ajax({
			 type: "POST",
			 url: base_url+"API/ProductRestController/insertProduct", 
			 data: {
				 	"shop_id" : $("#selectedshop").val(),
					"product_engname" : $("#product_engname").val(),
					"product_khname" : $("#product_khname").val(),
					"tast_id" : $("#selectedtast").val(),
					"pro_servertype" : $("#pro_servertype").val(),
					"serve_categories" : getServeCategories(),
					"price" : $("#price").val(),
					"promote_price" : $("#promote_price").val(),
					"productshortdes" : $("#productshortdes").val(),
					"productdes" : $("#productdes").val(),
					"proremark" : $("#proremark").val(),
					"tags" : gettags(),
					"pro_logo" : logoimagename
				
				 },
			 success: function(data){
				// data = JSON.parse(data);
				console.log(data);
               // alert(JSON.stringify(data));
			
				 data = JSON.parse(data);
				 console.log(data);  
				 progressbar.stop();
				 if(data.is_insert){
					// alert(data.message);
					 swal({
						 title: data.message,
					     text: "A shop has been added!",
					     html: true,
					     type: "success",
					    			     
					 });
					 
				 }else{
					 swal({
						 title: data.message,
					     text: "Fail to add new shop!",
					     html: true,
					     type: "error",
					    			     
					 });
					// alert(data.message);
				 }
				
	     	 }
	     });  

}); 
function getDataToInsert(){
	
	var prodata = {
		"proData":{
			"prodata":{
				
			}
						
		}	
	};
	return prodata;

}
$("#input-44").fileinput({
    uploadUrl: '/file-upload-batch/2',
    maxFilePreviewSize: 10240,
    browseClass: "btn btn-danger",
    allowedFileExtensions: ["jpg", "png", "gif"],
    showUpload: false,
});
$("#input-44").on("change", function(){
	
	uploadShopImageDetailToServer();
});

function getImageNameAndDetail(){

	var arrshopimagedetail = [];
	
	var imglng = $(".file-preview-frame").length;
	for(var i=0; i<imglng ; i++){		
		arrshopimagedetail.push({
			"sh_img_name" : $(".file-preview-frame").eq(i).find("input.img-new-name").val(),
			"sh_img_remark" : $(".file-preview-frame").eq(i).find("textarea").val()
		});		
	} 	
	return arrshopimagedetail;
	
}
$(document).on("mousedown","button.kv-file-remove",function(){
	var imagename = $(this).parents(".file-thumbnail-footer").find("input.img-new-name").val();
	console.log(imagename);
	removeShopImageDetailFromServer(imagename).success(function (data) {	
		
	});
	for(var i=0; i<arrnewfileimagename.length; i++){ 
		if(imagename == arrnewfileimagename[i].filename){
			arrnewfileimagename.splice(i , 1);
		}
	}
	
	console.log(arrnewfileimagename);
});

$(document).on("mousedown", "button.fileinput-remove-button, .fileinput-remove", function(){
	
	removeShopImageDetailFromServerMulti(arrnewfileimagename).success(function(data){
		arrnewfileimagename = [];
		console.log(arrnewfileimagename);
	});
});

function removeShopImageDetailFromServerMulti(imagestoremove){
	return $.ajax({
		url  : base_url+"API/UploadRestController/removeShopMultipleImage",
		type : "POST",
		data : {
			"removeimagedata": imagestoremove		
		}
	});
}

function removeShopImageDetailFromServer(imagetoremove){
	return $.ajax({
		url : base_url+"API/UploadRestController/removeShopSingleImage",
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
	var inputFile = $("#input-44");
	var filesToUpload = inputFile[0].files;
	console.log(filesToUpload);
	if (filesToUpload.length > 0) {
		$("#coveruploadimage").show();
		$("#coveruploadimagewithload").show();
		var formData = new FormData();
		for (var i = 0; i < filesToUpload.length; i++) {
			var file = filesToUpload[i];
			formData.append("file[]", file, file.name);				
		}
		$.ajax({
			url: base_url+"API/UploadRestController/shopImageDetailUpload",
			type: 'POST',
			data: formData,
			processData: false,
			contentType: false,
			success: function(data) {
				data = JSON.parse(data);
			    console.log(data);
			    var filelen = data.fileupload.length;			 
			    for(var i=0 ;i< filelen; i++){
				   // alert(i);
			    	arrnewfileimagename.push({
			    		"isupload" : data.fileupload[i].is_upload,
			    		"filename" : data.fileupload[i].filename
			    	});
			    	
				    if(data.fileupload[i].is_upload == true){
				    	
				    		
				    		  
					}else{
						alert(data.fileupload[i].filename+" :: "+data.fileupload[i].message);
					}	
					console.log(arrnewfileimagename);

				}						
			    setTimeout(function(){ 			    	
			    	setNewimgName();
	    		  }, 1000);							
			}
		});
	}	
}

function setNewimgName(){
	 for(var i=0 ;i< arrnewfileimagename.length; i++){
		 if(arrnewfileimagename[i].isupload){
			 $(".file-preview-frame").eq(i).find("input.img-new-name").val(arrnewfileimagename[i].filename);
		 }else{
			 $(".file-preview-frame").eq(i).removeClass("relative-div");
			 $(".file-preview-frame").eq(i).find(".opacity-on-file").remove();
			 $(".file-preview-frame").eq(i).find(".file-input-err-message").remove();
			 
			 $(".file-preview-frame").eq(i).addClass("relative-div");
			 $(".file-preview-frame").eq(i).find("input.img-new-name").val(arrnewfileimagename[i].filename);			 
			 var opacityDiv = '<div class="opacity-on-file" style="width:100%;height:100%;position:absolute;top:0;left:0;background:#fff;opacity:0.6;z-index:90;"></div>';
			 var messageDiv = '<div class="file-input-err-message" style="width:100%;height:100%;position:absolute;top:0;left:0;z-index:100;" align="center">';
				 messageDiv +='  <h4 style="color:#EF5350;font-weight:bold;">ERROR</h4>';
				 messageDiv +='  <i style="font-size:40px; color:#EF5350;cursor:pointer;" class="fa fa-trash closeimgdetail" ></i>';
				 messageDiv +='</div>';
			 $(".file-preview-frame").eq(i).append(opacityDiv);
			 $(".file-preview-frame").eq(i).append(messageDiv);
			
		 }
		 
	 }	
	 setTimeout(function(){checkIfSetimgNameFail();} , 300);
}

$(document).on("click",".closeimgdetail",function(){
	
	$(this).parent().siblings(".file-thumbnail-footer").find(".file-actions").find(".kv-file-remove").click();
	var imagename = $(this).parent().siblings(".file-thumbnail-footer").find("input.img-new-name").val().trim();
	for(var i=0; i<arrnewfileimagename.length; i++){ 
		
		if(imagename == arrnewfileimagename[i].filename.trim()){
			arrnewfileimagename.splice(i , 1);
		}
	}
	console.log(arrnewfileimagename.length);
	console.log(arrnewfileimagename);
});
function checkIfSetimgNameFail(){
	var lngcheck = 0;
	var imglng = $(".file-preview-frame").length;
	for(var i=0; i<imglng ; i++){
		var newnameimg = $(".file-preview-frame").eq(i).find("input.img-new-name").val();
		if(newnameimg != "") lngcheck++;
	} 
	//alert(lngcheck);
	//alert("arrnew"+arrnewfileimagename.length);
	if(arrnewfileimagename.length > lngcheck) {
		setNewimgName();
	}else{
		$("#coveruploadimage").hide();
		$("#coveruploadimagewithload").hide();	
	}
}
/////////////// search and save shopname

$("#shopname").on("focus keyup",function(){
	
	var srchshopname = $(this).val();
	var loadingimgsrc = base_url+"assets/nhamdis/img/nhamloading.gif";
	$("#display-result").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: base_url+"API/ShopRestController/getShopByNameCombo", 
		 data : {			 
			"srchname" : srchshopname,
			"limit" : 10		 	
		 },
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
			 var branchdis = '';
			if(data.length <= 0){
				$("#text-search-dis1").html(cutString(srchshopname , 35));
				$("#text-search-dis2").html(cutString(srchshopname , 20));
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
					 branchdis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].shop_id+'" /><p><span class="title">'+data[i].shop_name_en+'</span></p></div>';
				 }				
				
			}
			$("#display-result").html(branchdis); 					 
   	 	 }
   });
});
$("#yesshop").on("mousedown",function(){
	window.location.href = base_url+"MainController/addshop";
});

////////////////search and save shopname
$("#productype").on("focus keyup",function(){
	
	var srchtypename = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result-type").html("<img src='"+loadingimgsrc+"'  style='padding:20px;'/> "); 
	
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/ProductTypeRestController/getTypeByNameCombo", 
		 data : {			 
				"srchname" : srchtypename,
				"limit" : 10		 	
		 },
		 success: function(data){
			data = JSON.parse(data);
			console.log(data);
			 var typedis = '';
			if(data.length <= 0){
				typedis +='<div  class="nham-dropdown-noresult">';
				typedis +=' <p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>';
				typedis +='  Searching "'+cutString(srchtypename , 35)+'" has no Result!</p>';
				typedis +='</div>';
				typedis +='<div class="nham-dropdown-question">';
				typedis +='<p>Do you want to register "'+cutString(srchtypename , 20)+'" as a new brand? (Yes to accept) or (NO to deny)</p>';
				typedis +='</div>';
				$("#nham-dropdown-footer-type").show();
			}else{	
		
				$("#nham-dropdown-footer-type").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 typedis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].product_type_id+'" /><p><span class="title">'+data[i].product_type_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result-type").html(typedis); 					 
   	 	 }
   });
});
$("#yesproductype").on("mousedown",function(){
	var tastedata = {
		"tastedata" : {
			"type_name" : $("#productype").val(),
			"type_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/ProductTypeRestController/insertType",
		data : tastedata,
		success : function(data){
			 data = JSON.parse(data);
			//console.log(data);
			if(data.is_insert == false){
				alert("error");
			}else{
				$("#selectedtype").val(data.product_type_id);
			}
			//alert(data);
			
		}
	});
});


////////////////// search and save product Tast
$("#tastname").on("focus keyup",function(){
	
	var srchtastname = $(this).val();
	var loadingimgsrc = base_url+"assets/nhamdis/img/nhamloading.gif";
	$("#display-result-tast").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: base_url+"API/ProductTasteRestController/getTasteByNameCombo", 
		 data : {			 
			"srchname" : srchtastname,
			"limit" : 10		 	
		 },
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
			 var tastdis = '';
			if(data.length <= 0){
				$("#text-search-dis1-tast").html(cutString(srchtastname , 35));
				$("#text-search-dis2-tast").html(cutString(srchtastname , 20));
				tastdis +="<div class='no-data-wrapper' align='center'>";
				tastdis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
				tastdis +="  <span class='no-data-text'>No Record Found!</span>";
				tastdis +="</div>";
				$("#display-searching-text-tast").show();
				$("#nham-dropdown-footer-tast").show();
				
			}else{	
				
				$("#display-searching-text-tast").hide();
				$("#nham-dropdown-footer-tast").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 tastdis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].taste_id+'" /><p><span class="title">'+data[i].taste_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result-tast").html(tastdis); 					 
   	 	 }
   });
});
$("#yestast").on("mousedown",function(){
	  var tastdata = {
			"tastdata" : {
				"tast_name" : $("#tastname").val(),
				"tast_remark": ""
			}
		};
		$.ajax({
			type : "POST",
			url : base_url+"API/ProductTasteRestController/insertTaste", 
			data : tastdata,
			success : function(data){
				 data = JSON.parse(data);
				console.log(data);
				if(data.is_insert == false){
					alert("error");
				}else{
					$("#selectedtast").val(data.tast_id);
				}
			}
		});
});
/*======================= Tags event =============================*/

$("#tagname").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = base_url+"assets/nhamdis/img/nhamloading.gif";
	$("#display-result-tag").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: base_url+"API/TagRestController/getTagByNameCombo", 
		 data : {
			"srchname" : srchname,
			"limit" : 10
		 },
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
			 var dis = '';
			if(data.length <= 0){
				$("#text-search-tag-dis1").html(cutString(srchname , 35));
				$("#text-search-tag-dis2").html(cutString(srchname , 20));
				dis +="<div class='no-data-wrapper' align='center' style='padding-bottom:4px;'>";
				dis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
				dis +="  <span class='no-data-text'>No Record Found!</span>";
				dis +="</div>";
				$("#display-searching-text_tag").show();
				$("#nham-dropdown-footer-tag").show();
			}else{	
				$("#display-searching-text_tag").hide();
				$("#nham-dropdown-footer-tag").hide();		
				 for(var i=0 ; i<data.length ; i++){			
				
					 dis += '<div  class="nham-dropdown-multi-result">';
					 dis += ' <input type="hidden" value="'+data[i].tag_id+'" />';
					 dis += ' <p><span class="title">'+data[i].tag_name+'</span></p></div>';
					 
				 }			
				 dis+="<div style='clear:both'></div>";
				
			}
			$("#display-result-tag").html(dis); 					 
   	 	 }
   });
});
$("#yestag").on("mousedown",function(){

     var tagname = $("#tagname").val();
     alert(tagname);
 	$.ajax({
		type : "POST",
		url : base_url+"API/TagRestController/insertTag",
		data : {'tagname':tagname},
		success : function(data){
			data = JSON.parse(data);
			alert(data);
			console.log(data);
			if(data.is_insert == false){
				alert("Insert error!");
			}else{
	
				console.log($("#tagname").textWidth());
				var txtwidth = $("#tagname").textWidth()+55;
				var checkcls = $("#display-result-tag").siblings("input").val();
				 var box = "<div class='selected-category-box "+checkcls+" pull-left' style='width:"+txtwidth+"px'>";
				 box += "<input type='hidden' value='"+data.tag_id+"' />";
				 box += "<span class='pull-left icon-after-select'></span>";
				 box += "<p class='text-serve-category-selected'>";
				 box += "<span>"+$("#tagname").val()+"</span>";
		 		 box += "<i class='fa fa-times close-item' style='margin-left:10px;'  aria-hidden='true'></i></p></div>";
		 		
		 		$("#tags").append(box);
	   
				
			}
			
		}
	});
			
	
});

function gettags(){

	var tagsource = $("#tags").find(".selected-category-box");
	console.log(tagsource.length);
	var tags = [];
	for(var i=0 ; i<tagsource.length; i++){
		var cateval =tagsource.eq(i).find("input").val();
		tags.push(cateval);
	}
	return tags;
}


$("#tagupload").change(function(){
	uploadtag(this);
});


/*======================= Tags event =============================*/
/*======================= serve category event =============================*/

$("#servecategoryname").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = base_url+"assets/nhamdis/img/nhamloading.gif";
	$("#display-result-servecategory").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: base_url+"API/ServeCategoryRestController/getServeCategoryByNameCombo", 
		 data : {
			"srchname" : srchname,
			"limit" : 10
		 },
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
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
				 for(var i=0 ; i<data.length ; i++){			
				
					 dis += '<div  class="nham-dropdown-multi-result">';
					 dis += ' <input type="hidden" value="'+data[i].serve_category_id+'" />';
					 dis += ' <img class="pull-left icon" src="'+base_url+'uploadimages/icon/'+data[i].serve_category_icon+'"/>';
					 dis += ' <p><span class="title">'+data[i].serve_category_name+'</span></p></div>';
					 
				 }			
				 dis+="<div style='clear:both'></div>";
				
			}
			$("#display-result-servecategory").html(dis); 					 
   	 	 }
   });
});
$("#yesservecategory").on("mousedown",function(){

	$("#servecategorybtnpop").click();
	$("#servecategorynamepopup").val($("#servecategoryname").val());
	
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
$("#servecategory-upload-image").on("click",function(){	
	$("#servecategoryupload").click();	
});
$("#removeservecategoryimage").on("click",function(){
	removeServeCategoryImageFromServer();
});
$("#servecategory-disable-cover").on("click", function(){
	$("#servecategoryupload").val(null);
	$("#loading-wrapper-servecategory").hide();
	$("#servecategory-upload-image").removeClass("loading-box");
	var txt = '<label class="gray-image-plus">';
	txt += '  <i class="fa fa-plus"></i>';
	txt += '</label>';
	txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 50 x 50 </p>';            	
	txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Cuisine image </p>';
	$('#servecategory-upload-wrapper').html(txt);	
});
$("#servecategoryupload").change(function(){
	uploadServeCategory(this);
});

function uploadServeCategory(input) {

	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) {
 			upoloadServeCategoryToServer();
		    var myimg ='<img  class="upload-shop-img" src="'+e.target.result+'" alt="your image" />';
		    $('#servecategory-upload-wrapper').html(myimg);
		}
		reader.readAsDataURL(input.files[0]);
	}else{
		 var txt = '<label class="gray-image-plus"><i class="fa fa-plus"></i></label><p style="font-weight:bold;color:#9E9E9E"> Add Logo image </p>';
		$('#servecategory-upload-wrapper').html(txt);
	}
}

function removeServeCategoryImageFromServer(){
	$("#removeloadingwrapper-servecategory").show();
	console.log(servecategory);
	$.ajax({
		url :  base_url+"API/UploadRestController/removeIcon",
		type: "POST",
		data : {
			"iconname": servecategory	
		},
		success: function(data){
			
			servecategory="";
			$("#servecategoryupload").val(null);
			$("#uploadimageremoveback-servecategory").hide();
			$("#removeservecategoryimagewrapper").hide();
			var txt = '<label class="gray-image-plus">';
				txt += '  <i class="fa fa-plus"></i>';
				txt += '</label>';
				txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 50 x 50 </p>';            	
				txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Cuisine image </p>';
			$('#servecategory-upload-wrapper').html(txt);
			$("#removeloadingwrapper-servecategory").hide();
			console.log(servecategory);
		}
	});
}
function upoloadServeCategoryToServer(){
	var inputFile = $("#servecategoryupload");
	$("#servecategory-upload-image").addClass("loading-box");
	$("#loading-wrapper-servecategory").show();
	var fileToUpload = inputFile[0].files[0];
	console.log(fileToUpload);
	if(fileToUpload != 'undefined'){

		var formData = new FormData();
		formData.append("file",  fileToUpload);
		
		$.ajax({
			url: base_url+"API/UploadRestController/uploadIconImage",
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
					servecategory = data.filename;
					$("#loading-wrapper-servecategory").hide();
					$("#servecategory-upload-image").removeClass("loading-box");
					$("#uploadimageremoveback-servecategory").show();
					$("#removeservecategoryimagewrapper").show();
					console.log(servecategory);
				}
				
			},
			xhr: function() {
				var xhr = new XMLHttpRequest();
				xhr.upload.addEventListener("progress", function(event) {
					if (event.lengthComputable) {
						var percentComplete = Math.round( (event.loaded / event.total) * 100 );
						 //console.log(percentComplete);
						
						$("#servecategoryprogressbar").css({width: percentComplete+"%"});
					};
				}, false);

				return xhr;
			}
		});
	} 
}

function validateServeCategory(){
	if(!validateNull("servecategorynamepopup", 0)){
		alert("Serve-Category name Invalid");
		return false;
	}
	return true;
}
$("#servecategoryesave").on("click", function(){
	if(validateServeCategory()){
		
		//progressbar.start();
		var servecategorydata = {
				"ServeCategoryData" : {
					"serve_category_name" : $("#servecategorynamepopup").val(),
					"serve_category_type" : $("#serve-category-type").val(),
 					"serve_category_icon" :  servecategory,
					"serve_category_remark": $("#servecategorydescription").val()
				}
			};
			$.ajax({
				type : "POST",
				url : base_url+"API/ServeCategoryRestController/insertServeCategory",
				contentType : "application/json",
				data :  JSON.stringify(servecategorydata),
				success : function(data){
					data = JSON.parse(data);
					console.log(data);
					if(data.is_insert == false){
						alert("Insert error!");
					}else{
						
						console.log($("#servecategorynamepopup").textWidth());
						var txtwidth = $("#servecategorynamepopup").textWidth()+55;
						var checkcls = $("#display-result-servecategory").siblings("input").val();
						 var box = "<div class='selected-category-box "+checkcls+" pull-left' style='width:"+txtwidth+"px'>";
						 box += "<input type='hidden' value='"+data.serve_category_id+"' />";
						
						 box += "<p class='text-serve-category-selected'>";
						 box += "<span>"+$("#servecategorynamepopup").val()+"</span>";
				 		 box += "<i class='fa fa-times close-item' style='margin-left:10px;'  aria-hidden='true'></i></p></div>";
				 		
				 		$("#serve-categories").append(box);
											 
				 		$('#serveCategoryModal').modal('hide');
						clearServeCategorySaveform();
						//loadServeCategory();
					}
					
				}
			});
	}
});

$("#servecategoryclose").on("click",function(){
	$("#servecategorynamepopup").val("");
	$("#servecategorydescription").val("");
	if(servecategory != "") 
		removeServeCategoryImageFromServer();
});
function clearServeCategorySaveform(){
	$("#servecategorynamepopup").val("");
	$("#servecategorydescription").val("");
	servecategory="";
	$("#servecategoryupload").val(null);
	$("#uploadimageremoveback-servecategory").hide();
	$("#removeservecategoryimagewrapper").hide();
	var txt = '<label class="gray-image-plus">';
		txt += '  <i class="fa fa-plus"></i>';
		txt += '</label>';
		txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 50 x 50 </p>';            	
		txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Cuisine image </p>';
	$('#servecategory-upload-wrapper').html(txt);
	$("#removeloadingwrapper-servecategory").hide();
}
/*======================= End serve category event =============================*/
/* validate ----------- */
function validateNull( selector , isselect ,selectorreal){
	if($("#"+selector).val() == "" || $("#"+selector).val() == null){
		if(!selectorreal){			
			if(isselect == 1){
				$("#"+selector).siblings(".select2-container").addClass("invalid-input");
			}else{
				$("#"+selector).addClass("invalid-input");
			}			
		}else{
			$("#"+selectorreal).addClass("invalid-input");
		}
		
		return false;
	}else{
		if(!selectorreal){
			if(isselect == 1){
				$("#"+selector).siblings(".select2-container").removeClass("invalid-input");
			}else{
				$("#"+selector).removeClass("invalid-input");
			}	
		}else{
			$("#"+selectorreal).removeClass("invalid-input");
		}
		return true;
	}
}



/*===================== upload logo event =============================*/

var backupreallogoimage;
var img_logo_x = 0;
var img_logo_y = 0;
var img_logo_w = 0;
var img_logo_h = 0;

$("#logo-open-modal").on("click", function(){
	$("#openLogoModel").click();
});

$("#trigger-logo-browse").on("click",function(){
	alert(logoimagename);
	$("#uploadlogo").click();
});

$("#uploadlogo").on("change", function(){	
	uploadLogo(this);
});

$("#logo-fail-event").on("click" , function(){
	logoimagename = "";
	$("#uploadlogo").val(null);
	$(this).parent().hide();
	
	var txt  = '<div class="photo-upload-info-2" >';
		txt	+= '	<i class="fa fa-picture-o" aria-hidden="true"></i>';
		txt	+= '</div>';
	$('#display-logo-upload').html(txt);
});

$("#logoformclose").on("click", function(){
	
	if(logoimagename) {
		var txt  = '<div class="photo-upload-info-2" >';
			txt	+= '	<i class="fa fa-picture-o" aria-hidden="true"></i>';
			txt	+= '</div>';
		
		$('#display-logo-upload').html(txt);
		$("#logo-btncrop-box").hide();
		removeLogoImageFromServer().success(function(data){
			logoimagename = "";
			$("#uploadlogo").val(null);
		});				  
	}
	
});

$("#logo-crop-btn").on("click", function(){
	alert(img_logo_x+" "+img_logo_y+" "+img_logo_w+" "+img_logo_h);
	upoloadLogoToServer();
	$(this).hide();
	
});

$("#logo-save-btn").on("click", function(){
	
	alert(logoimagename);
	$('#logoModal').modal('hide');
	$("#logo_description").show();	  
	$("#logo-upload-remove-fake").show();
	$("#logo-upload-remove").show();
	var myimg  ='<img  class="upload-shop-img"'; 
		myimg +='src="'+base_url+'uploadimages/product/small/'+logoimagename+'" alt="your image" />';
    $('#logo-display-wrapper').html(myimg);
    var txt  = '<div class="photo-upload-info-2" >';
		txt	+= '	<i class="fa fa-picture-o" aria-hidden="true"></i>';
		txt	+= '</div>';
	$('#display-logo-upload').html(txt);
	$("#logo-btncrop-box").hide();
   
});

$("#logo-upload-remove-icon").on("click", function(){
	
	$(this).parent().hide();	
	 var txt  = '<label class="gray-image-plus">';
	 	 txt += '<i class="fa fa-plus"></i>';
	 	 txt += '</label>';
	 	 txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 960 x 960 </p>';
	 	 txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add logo image </p>';
	$(this).parent().siblings(".photo-display-wrapper").html(txt);
	$(this).parent().siblings(".photo-remove-loading").show();
	
	alert(logoimagename);
	$("#logo-upload-remove-fake").hide();
	$("#logo-remove-loading").hide();
	$("#logo_description").hide();
	removeLogoImageFromServer().success(function(data){
		logoimagename = "";		
		$("#uploadlogo").val(null);
	});	
});

function uploadLogo(input) {
		
	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) { 
 			
 			if(logoimagename) {
 				removeLogoImageFromServer().success(function(data){
 					logoimagename = "";
 				});				  
 			}
 			$("#logo-crop-btn").show();
 			$("#logo-save-btn").hide();
 			//$("#logo-description-box").hide();
	 		var image = new Image();
			image.src = e.target.result;			
			image.onload = function () {
				var height = this.height;
				var width = this.width;
	 			  $("#logo-btncrop-box").show();
	 			  var myimg ='<img  class="photo-upload-output" src="'+e.target.result+'" id="croplogo" alt="your image" />';
			      $('#display-logo-upload').html(myimg);
			      $('#croplogo').Jcrop({
			    	   aspectRatio: 16 / 16,
			    	   onSelect: updateLogoCoords,
			    	   onChange: updateLogoCoords,
			    	   setSelect: [0,0,110,110],
			    	   trueSize: [width,height]
			   	 });			           	
			  
			      backupreallogoimage = $("#uploadlogo")[0].files[0];
			}			
		}
		reader.readAsDataURL(input.files[0]);
	}
}

function updateLogoCoords(c){
	img_logo_x = c.x;
	img_logo_y = c.y;
	img_logo_w = c.w;
	img_logo_h = c.h;
}

function getCropLogoImgData(){
	var crop_img_data = {		
		"img_x" : img_logo_x,
		"img_y" : img_logo_y,
		"img_w" : img_logo_w,
		"img_h" : img_logo_h						
	};
	return crop_img_data;	
}

function removeLogoImageFromServer(){

	return $.ajax({
		url : base_url+"API/UploadRestController/removeProductImage",
		type: "POST",
		data : {
			"productimage": logoimagename
				
		}
	});	
}

function upoloadLogoToServer(){
	//var inputFile = $("#uploadcover");
	$("#logo-upload-progress").css({width:"0%"});
	$("#logo-upload-percentage").html(0);
	$("#logo-upload-loading").show();
	var fileToUpload = backupreallogoimage;
	
	if(fileToUpload != 'undefined'){

		var formData = new FormData();
		formData.append("file",  fileToUpload);
		formData.append("json", JSON.stringify(getCropLogoImgData()));
		
		$.ajax({
			url: base_url+"API/UploadRestController/productUploadImage",
			type: "POST",
			data : formData,
			processData : false,
			contentType : false,
			success: function(data){
				
				data = JSON.parse(data);
				
				if(data.is_upload == false){
					alert("error uploading!");
					alert(data.message);
					logoimagename = "";
					$("#logo-fail-remove").show();
					//$("#cover-description-box").hide();
					$("#logo-btncrop-box").hide();
				}else{
					$("#logo-save-btn").show();
					//$("#cover-description-box").show();
					logoimagename = data.filename;
					var uploadedimg ='<img  class="photo-upload-output" ' 
						+'src="'+base_url+'uploadimages/product/big/'+logoimagename+'"  '
						+'alt="your image" />';
					$('#display-logo-upload').html(uploadedimg);
					
				}
				$("#logo-upload-loading").hide();				
			},
			xhr: function() {
				var xhr = new XMLHttpRequest();
				xhr.upload.addEventListener("progress", function(event) {
					if (event.lengthComputable) {
						var percentComplete = Math.round( (event.loaded / event.total) * 100 );
						
						$("#logo-upload-progress").css({width: percentComplete+"%"});
						$("#logo-upload-percentage").html(percentComplete+"%");
					};
				}, false);
				return xhr;
			}
		});
	} 
}

/*===================== end upload logo event =========================*/

  </script>
</html>