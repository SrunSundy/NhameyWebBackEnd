<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>

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
			                  					<button class="btn nhamey-btn" id="yesproductaste">Yes</button>
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
			                    <select class="form-control " style="width: 100%;" id="pro_servertype">
			                      <option selected="selected" value="fast_food">Fast-food</option>
			                      <option value="junk-food">junk-food</option>
			                    
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
			                   <div class="form-group">
			                     <label>Remark</label>
			                     <textarea id="shopremark" class="form-control" rows="3" placeholder="describe what you haven't done for saving shop" style="resize:none;"></textarea>
			                   </div>
			
			            </section><!-- /.Left col -->
			            <!-- right col (We are only adding the ID to make the widgets sortable)-->
			            <section class="col-lg-7 connectedSortable">
							<h5 class="gray-color">Informative Image</h5>
							
							<div  class="form-group">
								<label>Images</label>
								<div class="col-lg-12 logo-browsing-wrapper" align="center"  style="position:relative;">												                     		                  		                    	  
			                    	<input type='file' id="coverupload" style="display: none;" accept="image/*"/>
			                    	<div class="image-upload-wrapper" id="cover-upload-wrapper">
			                    		<label class="gray-image-plus"><i class="fa fa-plus"></i></label>
			                    		<p style="font-weight:bold;color:#9E9E9E"> Add Product image </p>
			                    	</div> 
									<div id="cover-upload-image" class="upload-image-hover"></div>
												                    	  		                    	  		                    	  
								</div>
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
//phone adding
  var shopphones = [];
  var logoimagename = "";
  
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
		url : "/NhameyWebBackEnd/API/UploadRestController/removeShopLogoImage",
		type: "POST",
		data : {
			"logoimagename" : logoimagename
		},
		success: function(data){
			
			logoimagename="";
			$("#logoupload").val(null);
			$("#uploadimageremoveback").hide();
			$("#removelogoimagewrapper").hide();
			var txt = '<label class="gray-image-plus"><i class="fa fa-plus"></i></label><p style="font-weight:bold;color:#9E9E9E"> Add Logo image </p>';
			$('#logo-upload-wrapper').html(txt);
			$("#removeloadingwrapper").hide();
		}
	});
}
function upoloadLogoToServer(){
	var inputFile = $("#logoupload");
	$("#logo-upload-image").addClass("loading-box");
	$("#loading-wrapper").show();
	var fileToUpload = inputFile[0].files[0];
	//console.log(fileToUpload);
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
				//alert(data.filename);
				if(data.is_upload == false){
					alert("error uploading!");
				}else{
					logoimagename = data.filename;
					$("#loading-wrapper").hide();
					$("#logo-upload-image").removeClass("loading-box");
					$("#uploadimageremoveback").show();
					$("#removelogoimagewrapper").show();
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
$("#coverupload").change(function(){
	uploadCover(this);
});
function uploadCover(input){
	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) {
		      var myimg ='<img  class="upload-shop-img" src="'+e.target.result+'" alt="your image" />';
		              $('#cover-upload-wrapper').html(myimg);
		}
		reader.readAsDataURL(input.files[0]);
	}else{
		 var txt = '<label class="gray-image-plus"><i class="fa fa-plus"></i></label><p style="font-weight:bold;color:#9E9E9E"> Add Cover image </p>';
		 $('#cover-upload-wrapper').html(txt);
	}
	
}
function getDataToInsert(){
	var shopdata = {
		"ShopData":{
			"brand_id" : $("#selectedbrand").val(),
			"shop_name_en" : $("#shopengname").val() ,
			"shop_name_kh" : $("#shopkhname").val(),
			"shop_logo" : "123",
			"shop_cover" : "34343",
			"region_id" : 3,
			"shop_type_id" : 2,
			"shop_serve_type" : $("#shopservertype").val(),
			"shop_short_description": $("#shopshortdes").val() ,
			"shop_description" : $("#shopdes").val(),
			"shop_address": $("#shopaddress").val(),
			"shop_phone": shopphones.toString().replace(/[,]/g,"|").trim(),
			"shop_email":$("#shopemail").val(),
			"shop_working_day": countWorkingday().toString().replace(/[,]/g,"|").trim(),
			"shop_opening_time": $("#shopopentime").val(),
			"shop_close_time": $("#shopclosetime").val(),
			"shop_map_address": "32424",
			"shop_social_media": {
				"facebook" : $("#shopfb").val(),
				"instagram" : $("#shopinstagram").val(),
				"googleplus" : $("#shopgoogleplus").val(),
				"twitter": $("#shoptwitter").val()
			} ,
			"shop_remark": $("#shopremark").val(),
			"shop_image_detail": "2343333333333333333333333"
		}	
	};
	return shopdata;
}
$("#saveshop").on("click",function(){
	// console.log(getDataToInsert());
	 /* alert(0);
	 $.ajax({
		 type: "POST",
		 url: "/NhameyWebBackEnd/API/ShopRestController/insertShop", 
		 data: getDataToInsert(),
		 success: function(data){
         	alert(data);    
     	 }
     }); */
    alert($("#logoupload").val());
    alert(logoimagename);
});

$("#shopname").on("focus keyup",function(){
	
	var srchshopname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result").html("<img src='"+loadingimgsrc+"'  style='padding:20px;'/> "); 
	
	if(srchshopname == '' || srchshopname == null) srchshopname = "all";
	
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/ShopRestController/getShopByNameCombo/"+srchshopname+"/10", 
		
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
			console.log(data);
			if(data.is_insert == false){
				alert("error");
			}else{
				$("#selectedbrand").val(data.brand_id);
			}
			//alert(data);
			
		}
	});
});
$("#yesregion").on("mousedown",function(){
	var regiondata = {
		"RegionData" : {
			"region_name" : $("#regionid").val(),
			"region_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/RegionRestController/insertRegion",
		data : regiondata,
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.is_insert == false){
				alert("Insert error!");
			}else{
				//alert(data);
				$("#selectedregion").val(data.region_id);
			}
			
		}
	});
});
$("#productaste").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result-taste").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	if(srchname == '' || srchname == null) srchname = "all";
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/ProductTasteRestController/getTasteByNameCombo/"+srchname+"/10", 
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
$("#pro_cuisine").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result-taste").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	if(srchname == '' || srchname == null) srchname = "all";
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/ShopTypeRestController/getShopTypeByNameCombo/"+srchname+"/10", 
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
				$("#nham-dropdown-footer-procuisinee").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 dis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].shop_type_id+'" /><p><span class="title">'+data[i].shop_type_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result-procuisine").html(dis); 					 
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
	
  </script>
</html>