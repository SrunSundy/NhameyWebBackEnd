<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>update shop | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/Jcrop/jquery.Jcrop.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop-upload.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/css/nhamslider.css">
 
 	<style>
 		.iframe_hover{
 			width: 100%;
 			height: 100%;
 			position: absolute;
 			top:0px;
 			left: 0;
 			background: #fff;
 			z-index:900;
 			
 		}
 		img.iframe-load-img{
 			position: absolute;
 			left: 50%;
 			top:48%;
 		}
 	</style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    
    <input type="hidden" id="shop_id" value="<?php echo $shop_id ?>"/>
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
      <div class="content-wrapper" >
      	 <!-- wrapper of both profile and cover -->  
       	 <div class="content-nham-wrapper">
       	 	<!-- wrapper of cover -->
       	 	<div class="col-lg-9 cover-wrapper-left" >
       	 		<div class="row">
	       	 		<!-- wrapper of info and cover -->
	       	 		<div class="bar-cover-wrapper">
	       	 			<?php include 'elements/updateshop/cover.php';?>
	       	 		</div>
	       	 		<div class="fake-info-wrapper">
	       	 			
	       	 			<div class="col-lg-12 small-detail-description"  style="display:none;">
	       	 				<div class="row">
	       	 				
	       	 					<div class="menu-arrow">
	       	 						<div class="menu-arrow-inside">
	       	 					 		<div class="dropdown">
										    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Menu
										    <span class="caret"></span></button>
										    <ul class="dropdown-menu menu-ul">
										     <li class="item-small">
												<input type="hidden" value="updateshop_overview" />
												<a href="javascript:;">Overview</a>
											</li>
											<li class="item-small">
												<input type="hidden" value="updateshop_information" />
												<a href="javascript:;">Inforamtion</a>
											</li>
											<li class="item-small">
												<input type="hidden" value="updateshop_photo" />
												<a href="javascript:;">Photo</a>
											</li>
											<li class="item-small">
												<input type="hidden" value="updateshop_product" />
												<a href="javascript:;">Product</a>
											</li>
											<li class="item-small">
												<input type="hidden" value="updateshop_location" />
												<a href="javascript:;">Location</a>
											</li>
										    </ul>
										  </div>
	       	 						</div>
	       	 					</div>
	       	 					
	       	 					<div class="shop-detail-status">
	       	 						<div class="shop-detail-status-inside">
		       	 						<div class="enable-shop-description " style="<?php if($shop_status == "0" || $shop_status == 0) echo "display:none"?>">
											<div class="shop-status-wrapper">
												<div id="shop-opening-box-small" class="shop-opening-box pull-right" style="<?php if($is_shop_open == "0" || $is_shop_open == 0) echo "display:none"?>">
													<p class="shop-toggle-time opening-time" title="shop working time">
														<i class="fa fa-circle" aria-hidden="true"></i> Opening						
													</p>
													
												</div>
												<div id="shop-close-box-small" class="shop-close-box pull-right" style="<?php if($is_shop_open == "1" || $is_shop_open == 1) echo "display:none"?>">
													<p class="shop-toggle-time close-time">
														<i class="fa fa-circle" aria-hidden="true"></i> Closed 
													</p>
												</div>
												<div style="clear:both;"></div>
											</div>
											<div style="clear:both;"></div>
											
											<p class="working-time pull-right">
												<i class="fa fa-clock-o" aria-hidden="true"></i><?php echo substr($shop_opening_time,0,5)?> ~ <?php echo substr($shop_close_time,0,5)?>
											</p>																				
										</div>
										
										<div class="disable-shop-description pull-right" style="<?php if($shop_status == "1" || $shop_status == 1) echo "display:none"?>">
											<p class="disable-shop-text right-div" title="client is not able to view this shop!"><i class="fa fa-ban" aria-hidden="true"></i>Disabled</p>
											<label class="switch left-div">
								  				<input class="toggleshop" type="checkbox" id="toggleshop-small" >
								  				<div class="slider"></div>
											</label>										
										</div>
	       	 						</div>
	       	 					</div>
	       	 				
	       	 				</div>
	       	 			</div>
	       	 			<div class="col-lg-12" style="height: 20px;"></div>
	       	 			<div class="col-lg-12 shop-edit-form-wrapper" style="padding-bottom:50px;position:relative;">
	       	 				<div class="row" >	       	 						       	 						       	 					
	       	 					<iframe style="width:100%;height:auto;display:none;" id="updateShopframe" 
          							  scrolling="no" frameborder="0" marginheight="0" marginwidth="0" src="<?php echo base_url(); ?>MainController/updateshop_overview">
								 
								</iframe>	
								<div class="iframe_hover">
									
									<img class="iframe-load-img" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
								</div>       	 						       	 					
	       	 				</div>
	       	 			</div>
	       	 			<div style="clear:both;"></div>
	       	 		</div>
	       	 		<!-- end wrapper of info and cover -->
       	 		</div>
       	 	</div>
       	 	<!-- end wrapper of cover -->
       	 	<!-- wrapper of profile -->
		    <div class="col-lg-3 profilemenu-wrapper-right">
		    	<?php include 'elements/updateshop/logomenu.php';?>
		    </div>
		    <div style="clear:both;"></div>
		    <!-- end wrapper of profile -->
         </div>
         
         <!--end wrapper of both profile and cover -->        
      </div><!-- /.content-wrapper -->
      <footer class="main-footer" >
      	
      </footer>

      <!-- Control Sidebar -->
    
    </div><!-- ./wrapper -->

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
	 <button type="button" id="servecategorybtnpop" style="display:none;" data-toggle="modal" style="display:none;" data-backdrop="static" data-keyboard="false" data-target="#serveCategoryModal">Open Modal</button>	
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
	 <button type="button" id="shopfacilitybtnpop" style="display:none;" data-toggle="modal" style="display:none;" data-backdrop="static" data-keyboard="false" data-target="#shopFacilityModal">Open Modal</button>
	  <!--  end shop facility modal -->
   
   
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
    <script src="<?php echo base_url(); ?>assets/nhamdis/jscontroller/updateshop.js"></script>
    
    <script>
   
    function resizeIframe(){
      
   	 	$("#updateShopframe").css("height", $("#updateShopframe").contents().find(".shop-event-wrapper").height() + "px");
   	}

	$("li.item, li.item-small").on("click", function(){
		if($(this).hasClass("li-click")){
			return;
		}

		$("#updateShopframe").hide();
		$(".iframe_hover").show();
		$("li.item").removeClass("li-click");
		$("li.item-small").removeClass("li-click");
		
		$("li.item").eq($(this).index()).addClass("li-click");
		$("li.item-small").eq($(this).index()).addClass("li-click");
		var tabid = $(this).find("input").val();
		
		$("#updateShopframe").attr("src","<?php echo base_url(); ?>MainController/"+tabid+"/"+$("#shop_id").val());
	});

	
	/*========== serve category ============*/
	
	var servecategory = "";
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
		
		$.ajax({
			url :  $("#base_url").val()+"API/UploadRestController/removeIcon",
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
			
			}
		});
	}
	function upoloadServeCategoryToServer(){
		var inputFile = $("#servecategoryupload");
		$("#servecategory-upload-image").addClass("loading-box");
		$("#loading-wrapper-servecategory").show();
		var fileToUpload = inputFile[0].files[0];
		
		if(fileToUpload != 'undefined'){

			var formData = new FormData();
			formData.append("file",  fileToUpload);
			
			$.ajax({
				url: $("#base_url").val()+"API/UploadRestController/uploadIconImage",
				type: "POST",
				data : formData,
				processData : false,
				contentType : false,
				success: function(data){
					data = JSON.parse(data);
					
					if(data.is_upload == false){
						
						swal({
							 title: "Upload Error!",
						     text: data.message,
						     html: true,
						     type: "error",
						    			     
						 });
					}else{
						servecategory = data.filename;
						$("#loading-wrapper-servecategory").hide();
						$("#servecategory-upload-image").removeClass("loading-box");
						$("#uploadimageremoveback-servecategory").show();
						$("#removeservecategoryimagewrapper").show();
						
					}
					
				},
				xhr: function() {
					var xhr = new XMLHttpRequest();
					xhr.upload.addEventListener("progress", function(event) {
						if (event.lengthComputable) {
							var percentComplete = Math.round( (event.loaded / event.total) * 100 );
							
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
	
			swal({
				 title: "Input Error!",
			     text: "Serve-Category name Invalid",
			     html: true,
			     type: "error",
			    			     
			 });
			return false;
		}
		return true;
	}
	$("#servecategoryesave").on("click", function(){
		if(validateServeCategory()){
			
			progressbar.start();
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
					url : $("#base_url").val()+"API/ServeCategoryRestController/insertServeCategory",
					contentType : "application/json",
					data :  JSON.stringify(servecategorydata),
					success : function(data){
						data = JSON.parse(data);
						
						if(data.is_insert == false){
						
							swal({
								 title: "Insert Error!",
							     text: "",
							     html: true,
							     type: "error",
							    			     
							});
						}else{

							var txtwidth = $("#servecategorynamepopup").textWidth()+55;
							var checkcls = $("#display-result-servecategory").siblings("input").val();
							 var box = "<div class='selected-category-box "+checkcls+" pull-left' style='width:"+txtwidth+"px'>";
							 box += "<input type='hidden' value='"+data.serve_category_id+"' />";
							 box += "<img class='pull-left icon-after-select' src='"+$("#base_url").val()+"uploadimages/icon/"+servecategory+"' />";
							 box += "<p class='text-serve-category-selected'>";
							 box += "<span>"+$("#servecategorynamepopup").val()+"</span>";
					 		 box += "<i class='fa fa-times close-item' style='margin-left:10px;'  aria-hidden='true'></i></p></div>";
					 					
					 		$('#updateShopframe').contents().find("#serve-categories").append(box);
					 						 
					 		$('#serveCategoryModal').modal('hide');
							clearServeCategorySaveform();
							document.getElementById('updateShopframe').contentWindow.loadServeCategory();
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
	/*========== end serve category ===========*/
	
	/*=========== facility ==============*/
	var shopfacilityicon="";
	$("#shopfacility-upload-image").on("click",function(){	
		$("#shopfacilityupload").click();	
	});
	$("#removeshopfacilityimage").on("click",function(){
		removeShopFacilityImageFromServer();
	});
	$("#shopfacility-disable-cover").on("click", function(){
		$("#shopfacilityupload").val(null);
		$("#loading-wrapper-shopfacility").hide();
		$("#shopfacility-upload-image").removeClass("loading-box");
		var txt = '<label class="gray-image-plus">';
		txt += '  <i class="fa fa-plus"></i>';
		txt += '</label>';
		txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 50 x 50 </p>';            	
		txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Cuisine image </p>';
		$('#shopfacility-upload-wrapper').html(txt);	
	});
	$("#shopfacilityupload").change(function(){
		uploadShopFacility(this);
	});
	
	function uploadShopFacility(input) {
	
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				upoloadShopFacilityToServer();
			    var myimg ='<img  class="upload-shop-img" src="'+e.target.result+'" alt="your image" />';
			    $('#shopfacility-upload-wrapper').html(myimg);
			}
			reader.readAsDataURL(input.files[0]);
		}else{
			 var txt = '<label class="gray-image-plus"><i class="fa fa-plus"></i></label><p style="font-weight:bold;color:#9E9E9E"> Add Logo image </p>';
			$('#shopfacility-upload-wrapper').html(txt);
		}
	}
	
	function removeShopFacilityImageFromServer(){
		$("#removeloadingwrapper-shopfacility").show();
		
		$.ajax({
			url : "/NhameyWebBackEnd/API/UploadRestController/removeIcon",
			type: "POST",
			data : {
				"iconname": shopfacilityicon	
			},
			success: function(data){
				
				shopfacilityicon="";
				$("#shopfacilityupload").val(null);
				$("#uploadimageremoveback-shopfacility").hide();
				$("#removeshopfacilityimagewrapper").hide();
				var txt = '<label class="gray-image-plus">';
					txt += '  <i class="fa fa-plus"></i>';
					txt += '</label>';
					txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 50 x 50 </p>';            	
					txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Cuisine image </p>';
				$('#shopfacility-upload-wrapper').html(txt);
				$("#removeloadingwrapper-shopfacility").hide();
				
			}
		});
	}
	function upoloadShopFacilityToServer(){
		var inputFile = $("#shopfacilityupload");
		$("#shopfacility-upload-image").addClass("loading-box");
		$("#loading-wrapper-shopfacility").show();
		var fileToUpload = inputFile[0].files[0];
		
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
					if(data.is_upload == false){
						
						swal({
							 title: "Upload Error!",
						     text: data.message,
						     html: true,
						     type: "error",
						    			     
						 });
					}else{
						shopfacilityicon = data.filename;
						$("#loading-wrapper-shopfacility").hide();
						$("#shopfacility-upload-image").removeClass("loading-box");
						$("#uploadimageremoveback-shopfacility").show();
						$("#removeshopfacilityimagewrapper").show();
						
					}
					
				},
				xhr: function() {
					var xhr = new XMLHttpRequest();
					xhr.upload.addEventListener("progress", function(event) {
						if (event.lengthComputable) {
							var percentComplete = Math.round( (event.loaded / event.total) * 100 );
							
							$("#shopfacilityprogressbar").css({width: percentComplete+"%"});
						};
					}, false);
	
					return xhr;
				}
			});
		} 
	}
	
	function validateShopFacility(){
		if(!validateNull("shopfacilitynamepopup", 0)){
		
			swal({
				 title: "Input Error!",
			     text: "Shop Facility name Invalid",
			     html: true,
			     type: "error",
			    			     
			 });
			return false;
		}
		return true;
	}
	$("#shopfacilitysave").on("click", function(){
		if(validateShopFacility()){
			
			progressbar.start();
			var shopfacilitydata = {
					"ShopFacilityData" : {
						"sh_facility_name" : $("#shopfacilitynamepopup").val(),
						"sh_facility_icon" :  shopfacilityicon,
						"sh_facility_remark": $("#shopfacilitydescription").val()
					}
				};
				$.ajax({
					type : "POST",
					url : "/NhameyWebBackEnd/API/ShopFacilityRestController/insertShopFacility",
					contentType : "application/json",
					data :  JSON.stringify(shopfacilitydata),
					success : function(data){
						data = JSON.parse(data);
						
						if(data.is_insert == false){
							
							swal({
								 title: "Insert Error!",
							     text: "",
							     html: true,
							     type: "error",
							    			     
							 });
						}else{
												
							var txtwidth = $("#shopfacilitynamepopup").textWidth()+55;
							var checkcls = $("#display-result-shopfacility").siblings("input").val();
							 var box = "<div class='selected-category-box "+checkcls+" pull-left' style='width:"+txtwidth+"px'>";
							 box += "<input type='hidden' value='"+data.sh_facility_id+"' />";
							 box += "<img class='pull-left icon-after-select' src='"+$("#base_url").val()+"uploadimages/icon/"+shopfacilityicon+"' />";
							 box += "<p class='text-serve-category-selected'>";
							 box += "<span>"+$("#shopfacilitynamepopup").val()+"</span>";
					 		 box += "<i class='fa fa-times close-item' style='margin-left:10px;'  aria-hidden='true'></i></p></div>";
					 		
					 		$('#updateShopframe').contents().find("#shop-facilities").append(box);
												 
					 		$('#shopFacilityModal').modal('hide');
							clearShopFacilitySaveform();
							document.getElementById('updateShopframe').contentWindow.loadShopFacility();
							
						}
						
					}
				});
		}
	});
	
	$("#shopfacilityclose").on("click",function(){
		$("#shopfacilitynamepopup").val("");
		$("#shopfacilitydescription").val("");
		if(shopfacilityicon != "") 
			removeShopFacilityImageFromServer();
	});
	function clearShopFacilitySaveform(){
		$("#shopfacilitynamepopup").val("");
		$("#shopfacilitydescription").val("");
		shopfacilityicon ="";
		$("#shopfacilityupload").val(null);
		$("#uploadimageremoveback-shopfacility").hide();
		$("#removeshopfacilityimagewrapper").hide();
		var txt = '<label class="gray-image-plus">';
			txt += '  <i class="fa fa-plus"></i>';
			txt += '</label>';
			txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 50 x 50 </p>';            	
			txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Cuisine image </p>';
		$('#shopfacility-upload-wrapper').html(txt);
		$("#removeloadingwrapper-shopfacility").hide();
	}
	/*=========== end facility ============*/
	
	

	
	
   
    </script>
  </body>
</html>
