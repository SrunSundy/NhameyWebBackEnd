<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
 	
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

     <link rel="stylesheet" href="<?php echo base_url() ?>css/tokenize2.css"> 
     <script src="<?php echo base_url() ?>js/tokenize2.js"></script>
     
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
                    		   <input id="shopname" type="text" class="form-control input-lg nham-dropdown-inputbox"  placeholder="Search Shop to insert Product">
                    	       <input type="hidden" class="selectedbrandid" id="selectedbrand"/>
                    	    </div>
                    		<div class="nham-dropdown-detail"  >
                    			<div class="nham-dropdown-result-wrapper">
                    				<div id="display-result" class="display-result-wrapper">
                    					
                    				</div>
       				
                  				</div>
                  				<div id="nham-dropdown-footer" class="nham-dropdown-result-footer" align="center">
                  					<button class="btn nhamey-btn" id="yeshop">Yes</button>
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
			                    		    <input id="productaste" type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search or Select for product taste">
			                    	        <input type="hidden" class="selectedbrandid" id="selectedtaste"/>
			                    	    </div>
			                    		<div class="nham-dropdown-detail"  >
			                    			<div class="nham-dropdown-result-wrapper">
			                    				<div id="display-result-taste" class="display-result-wrapper">
			                    					
			                    				</div>
			       				
			                  				</div>
			                  				<div id="nham-dropdown-footer-taste" class="nham-dropdown-result-footer" align="center">
			                  					<button class="btn nhamey-btn" id="yesproductaste">Yes</button>
			                  				</div>
			                  			</div>
			                    	</div>			                    	
			                  	</div>
		                     </div>
		                    <div class="form-group ">
			                    <label>Types of Cuisine</label>
			                     <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="selected-dropdown">
			                    		    <input id="pro_cuisine" type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search or Select for product Region">
			                    	        <input type="hidden" class="selectedbrandid" id="selectedprocuisine"/>
			                    	    </div>
			                    		<div class="nham-dropdown-detail"  >
			                    			<div class="nham-dropdown-result-wrapper">
			                    				<div id="display-result-procuisine" class="display-result-wrapper">
			                    					
			                    				</div>
			       				
			                  				</div>
			                  				<div id="nham-dropdown-footer-procuisine" class="nham-dropdown-result-footer" align="center">
			                  					<button class="btn nhamey-btn" id="yesprocuisine">Yes</button>
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
							  <div class="form-group">
			                    <label>Product Type</label>
			                         <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="selected-dropdown">
			                    		    <input id="productype" type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search or Select for product taste">
			                    	        <input type="hidden" class="selectedbrandid" id="selectedtype"/>
			                    	    </div>
			                    		<div class="nham-dropdown-detail"  >
			                    			<div class="nham-dropdown-result-wrapper">
			                    				<div id="display-result-type" class="display-result-wrapper">
			                    					
			                    				</div>
			       				
			                  				</div>
			                  				<div id="nham-dropdown-footer-type" class="nham-dropdown-result-footer" align="center">
			                  					<button class="btn nhamey-btn" id="yesproductype">Yes</button>
			                  				</div>
			                  			</div>
			                    	</div>			                    	
			                  		</div>
			                  </div><!-- /.form-group -->
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
			           
							
							 			      			
			            </section><!-- right col -->
			            <section class="col-lg-7 connectedSortable">
			               
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
			            </section>
			            <section class="col-lg-7 connectedSortable">
							
							<div  class="form-group">
								<label>Tags</label>
								 <div class="panel">
			                        <select class="tokenize-custom-demo1" multiple>
			                            <?php echo $tags; ?>
			                        </select>
                    			 </div>
                    			 <script>
                    			  $('.tokenize-custom-demo1').tokenize2({
                    			      tokensAllowCustom: true,
                    					
                    			  });
                    			 </script>
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
var logoimagename = "";
//start upload logo 
var arrnewfileimagename = [];
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
//END upload logo
//start Image detail

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
})

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
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result").html("<img src='"+loadingimgsrc+"'  style='padding:20px;'/> "); 
	
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/ShopRestController/getShopByNameCombo", 
		 data : {			 
				"srchname" : srchshopname,
				"limit" : 10		 	
		 },
		 success: function(data){
			data = JSON.parse(data);
			console.log(data);
			 var shopdis = '';
			if(data.length <= 0){
				shopdis +='<div  class="nham-dropdown-noresult">';
				shopdis +=' <p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>';
				shopdis +='  Searching "'+cutString(srchshopname , 35)+'" has no Result!</p>';
				shopdis +='</div>';
				shopdis +='<div class="nham-dropdown-question">';
				shopdis +='<p>Do you want to register "'+cutString(srchshopname , 20)+'" as a new brand? (Yes to accept) or (NO to deny)</p>';
				shopdis +='</div>';
				$("#nham-dropdown-footer").show();
			}else{	
		
				$("#nham-dropdown-footer").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 shopdis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].shop_id+'" /><p><span class="title">'+data[i].shop_name_en+'</span></p></div>';
				 }				
				
			}
			$("#display-result").html(shopdis); 					 
   	 	 }
   });
});
$("#yeshop").on("mousedown",function(){
	var branddata = {
		"BrandData" : {
			"brand_name" : $("#shopname").val(),
			"brand_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/BrandRestController/insertBrand",
		data : branddata,
		success : function(data){
			 data = JSON.parse(data);
			//console.log(data);
			if(data.is_insert == false){
				alert("error");
			}else{
				$("#selectedbrand").val(data.brand_id);
			}
			//alert(data);
			
		}
	});
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
////////////////search and save product type
$("#shopname").on("focus keyup",function(){
	
	var srchshopname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result").html("<img src='"+loadingimgsrc+"'  style='padding:20px;'/> "); 
	
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/ShopRestController/getShopByNameCombo", 
		 data : {			 
				"srchname" : srchshopname,
				"limit" : 10		 	
		 },
		 success: function(data){
			data = JSON.parse(data);
			console.log(data);
			 var shopdis = '';
			if(data.length <= 0){
				shopdis +='<div  class="nham-dropdown-noresult">';
				shopdis +=' <p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>';
				shopdis +='  Searching "'+cutString(srchshopname , 35)+'" has no Result!</p>';
				shopdis +='</div>';
				shopdis +='<div class="nham-dropdown-question">';
				shopdis +='<p>Do you want to register "'+cutString(srchshopname , 20)+'" as a new brand? (Yes to accept) or (NO to deny)</p>';
				shopdis +='</div>';
				$("#nham-dropdown-footer").show();
			}else{	
		
				$("#nham-dropdown-footer").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 shopdis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].shop_id+'" /><p><span class="title">'+data[i].shop_name_en+'</span></p></div>';
				 }				
				
			}
			$("#display-result").html(shopdis); 					 
   	 	 }
   });
});
$("#yeshop").on("mousedown",function(){
	var branddata = {
		"BrandData" : {
			"brand_name" : $("#shopname").val(),
			"brand_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/BrandRestController/insertBrand",
		data : branddata,
		success : function(data){
			 data = JSON.parse(data);
			//console.log(data);
			if(data.is_insert == false){
				alert("error");
			}else{
				$("#selectedbrand").val(data.brand_id);
			}
			//alert(data);
			
		}
	});
});
////////////////// search and save productaste

$("#productaste").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result-taste").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 

	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/ProductTasteRestController/getTasteByNameCombo", 
		 data : {			 
				"srchname" : srchname,
				"limit" : 10		 	
		 },
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
				$("#nham-dropdown-footer-taste").show();
			}else{	
				$("#nham-dropdown-footer-taste").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 dis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].taste_id+'" /><p><span class="title">'+data[i].taste_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result-taste").html(dis); 					 
   	 	 }
   });
});
$("#yesproductaste").on("mousedown",function(){
	var tastedata = {
		"tastedata" : {
			"taste_name" : $("#productaste").val(),
			"taste_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/ProductTasteRestController/insertTaste",
		data : tastedata,
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.is_insert == false){
				alert("Insert error!");
			}else{
				//alert(data);
				$("#selectedtaste").val(data.taste_id);
			}
			
		}
	});
});
///////////////////////////////////////////// Searcg and Save pro_cuisine
$("#pro_cuisine").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result-taste").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/CuisineRestController/getCuisineByNameCombo/", 
		 data:{
			 "srchname" : srchname,
			 "limit"    : 10
		 },
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
				$("#nham-dropdown-footer-procuisine").show();
			}else{	
				$("#nham-dropdown-footer-procuisine").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 dis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].cuisine_id+'" /><p><span class="title">'+data[i].cuisine_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result-procuisine").html(dis); 					 
   	 	 }
   });
});
$("#yesprocuisine").on("mousedown",function(){
	var regiondata = {
		"CuisineData" : {
			"cuisine_name" : $("#pro_cuisine").val(),
			"cuisine_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/CuisineRestController/insertCuisine",
		data : regiondata,
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.is_insert == false){
				alert("Insert error!");
			}else{
				//alert(data);
				$("#selectedprocuisine").val(data.cuisine_id);
			}
			
		}
	});
});

	
  </script>
</html>