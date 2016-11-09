

var checkHasCover = true;
var coverimage = "";
var logoimage = "";
/*var backupcoverimage;*/
var backuprealcoverimage;
var backupreallogoimage;

$(".img-cover").error(function() {
	$(".img-cover-box").css("height", 250);
});


$(window).load(function(){
	
    $(window).scrollTop(200);
    $(".menu-ul li.item").eq(0).addClass("li-click");
    $(".menu-ul li.item-small").eq(0).addClass("li-click");
    resizeOnWindow();
   
});

$(window).scroll(function() {
	var scrollHeight = $(document).scrollTop();
	if (scrollHeight >= 50) {
		$(".profilemenu-wrapper-right").addClass("top-zero");

	} else {
		$(".profilemenu-wrapper-right").removeClass("top-zero");
	}
})



$(window).on("resize", function() {

	//if (checkHasCover) {
		var imgboxheight = $(".img-cover-box").height();
		var coverboxheight = $(".cover-box").height();
		console.log($(window).width());
		if (coverboxheight > imgboxheight) {
			$(".cover-box").height($(".img-cover-box").height());
		} else {
			var newheight = $(".img-cover-box").height();
			if (newheight < 300) {
				newheight++;
			} else {
				newheight = 300;
			}
			$(".cover-box").height(newheight);
		}
	/*} else {
		$(".cover-box").css("background", "#263238").height(300);

	}*/

});

function resizeOnWindow() {
	//alert(checkHasCover);
	console.log($(".cover-box").height());
	console.log($(".img-cover-box").height());
	//if (checkHasCover) {
		var imgboxheight = $(".img-cover-box").height();
		var coverboxheight = $(".cover-box").height();

		if (coverboxheight < imgboxheight) {

			$(".cover-box").height(300);

		} else {
			console.log($(".img-cover-box").height());
			console.log($(".bar-cover-wrapper").find(".img-cover-box").html());
			$(".cover-box").height($(".img-cover-box").height());
		}
	/*} else {
		$(".cover-box").css("background", "#263238").height(300);
	}*/
}

// logo box
$(".logo-box").on("mouseover", function() {
	$(this).find(".edit-logo").slideDown(50);
	$(this).find(".edit-logo-button-wrapper").slideDown(50);
});
$(".logo-box").on("mouseleave", function() {

	$(this).find(".edit-logo").slideUp(50);
	$(this).find(".edit-logo-button-wrapper").slideUp(50);
});

/*============== set time out of open or close time ===========*/

var shop_status = $("#shop_status").val();
var time_to_close = $("#time_to_close").val();
var time_to_open = $("#time_to_open").val();

if(shop_status == "1"){
	
	setTimeout(function(){ 
		$("#shop-opening-box").fadeOut();
		$("#shop-close-box").fadeIn();		
		$("#shop-opening-box-small").fadeOut();
		$("#shop-close-box-small").fadeIn();		
	}, time_to_close);
}else{
	setTimeout(function(){ 
		$("#shop-close-box").fadeOut();
		$("#shop-opening-box").fadeIn();
		$("#shop-close-box-small").fadeOut();
		$("#shop-opening-box-small").fadeIn();
	}, time_to_open);
	
}
/*============== end set time out of open or close time ===========*/

/*============== update shop status ===============*/

$("#toggleshop, #toggleshop-small").on("click", function(){
	updateShopStatus(1 , $("#shop_id").val() , function(){
		
		$("#toggleshop").parents(".disable-shop-description").hide();
		$("#toggleshop").parents(".disable-shop-description").siblings(".enable-shop-description").show();
		$("#toggleshop-small").parents(".disable-shop-description").hide();
		$("#toggleshop-small").parents(".disable-shop-description").siblings(".enable-shop-description").show();
	});
	
});

function updateShopStatus( status , shopid , callback){
	progressbar.start();
	$.ajax({
		type : "POST",
		url : $("#base_url").val()+"API/ShopRestController/toggleShop",
		contentType : "application/json", 
		data : JSON.stringify({
			"resq_data" : {
				"shop_id" : shopid,
				"shop_status" : status
			}					
		}),
		success : function(data){
			data = JSON.parse(data);
			if(data.is_updated){
				callback();
				swal("Shop is updated!", "This shop will be visible for clients", "success"); 
			}else{
				swal("Update Error!", "Your imaginary file has been deleted.", "error");
			}
			progressbar.stop();
			
		}
	});
}
/*============== end update shop status =============*/
/*============= update logo ==============*/

var img_x_logo = 0;
var img_y_logo = 0;
var img_w_logo = 0;
var img_h_logo = 0;

$("#edit-logo-button-wrapper, #edit-logo-pop-up, #edit-logo--pop-up").on("click", function(){
	$("#openLogoModel").click();
});

$("#trigger-logo-browse").on("click",function(){
	$("#uploadlogo").click();
});

$("#uploadlogo").on("change", function(){	
	uploadLogo(this);
});

$("#logo-fail-event").on("click" , function(){
	logoimage = "";
	$("#uploadlogo").val(null);
	$(this).parent().hide();
	
	var txt  = '<div class="photo-upload-info-2" >';
		txt	+= '	<i class="fa fa-picture-o" aria-hidden="true"></i>';
		txt	+= '</div>';
	$('#display-logo-upload').html(txt);
});

$("#logoformclose").on("click", function(){
	
	if(logoimage) {
		var txt  = '<div class="photo-upload-info-2" >';
			txt	+= '	<i class="fa fa-picture-o" aria-hidden="true"></i>';
			txt	+= '</div>';
		$("#logo-description").val("");
		$('#display-logo-upload').html(txt);
		$("#logo-description-box").hide();
		$("#logo-btncrop-box").hide();
		removeLogoImageFromServer().success(function(data){
			logoimage = "";
			$("#uploadlogo").val(null);
		});				  
	}
	
});

$("#logo-crop-btn").on("click", function(){
	alert(img_x_logo+" "+img_y_logo+" "+img_w_logo+" "+img_h_logo);
	upoloadLogoToServer();
	$(this).hide();
	
});

$("#logo-save-btn").on("click", function(){
	
	alert(logoimage);
	$('#logoModal').modal('hide');
	
	if(logoimage){
		$(".img-logo-box").css("height", "auto");
	}

	updateShopField(logoimage,$("#logo-description").val() , 1 ,"shop_logo", function(){
		$("#logo-image-display").attr("src",$("#base_url").val()+"uploadimages/logo/medium/"+logoimage);
		$("#small-logo-img").attr("src",$("#base_url").val()+"uploadimages/logo/medium/"+logoimage);
		var txt  = '<div class="photo-upload-info-2" >';
			txt	+= '	<i class="fa fa-picture-o" aria-hidden="true"></i>';
			txt	+= '</div>';
		$("#logo-description").val("");
		$('#display-logo-upload').html(txt);
		$("#logo-description-box").hide();
		$("#logo-btncrop-box").hide();
		logoimage = "";
		$("#uploadlogo").val(null);
	});
	

});

function uploadLogo(input) {
		
	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) { 
 			
 			if(logoimage) {
 				removeLogoImageFromServer().success(function(data){
 					logoimage = "";
 				});				  
 			}
 			$("#logo-crop-btn").show();
 			$("#logo-save-btn").hide();
 			$("#logo-description-box").hide();
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
			    	   onSelect: updateCoordsLogo,
			    	   onChange: updateCoordsLogo,
			    	   setSelect: [0,0,110,110],
			    	   trueSize: [width,height]
			   	 });			           	
			     backupreallogoimage = $("#uploadlogo")[0].files[0];
			}			
		}
		reader.readAsDataURL(input.files[0]);
	}
	
}

function updateCoordsLogo(c){
	img_x_logo = c.x;
	img_y_logo = c.y;
	img_w_logo = c.w;
	img_h_logo = c.h;
}

function getCropImgDataLogo(){
	var crop_img_data = {		
		"img_x" : img_x_logo,
		"img_y" : img_y_logo,
		"img_w" : img_w_logo,
		"img_h" : img_h_logo						
	};
	return crop_img_data;	
}

function removeLogoImageFromServer(){

	return $.ajax({
		url : $("#base_url").val()+"API/UploadRestController/removeShopSingleImage",
		type: "POST",
		data : {
			"removeimagedata":{
				"image_type" : "2",
				"imagename" : logoimage
			}			
		}
	});	
}

function upoloadLogoToServer(){
	//var inputFile = $("#uploadlogo");
	$("#logo-upload-progress").css({width:"0%"});
	$("#logo-upload-percentage").html(0);
	$("#logo-upload-loading").show();
	var fileToUpload = backupreallogoimage;
	console.log(fileToUpload);
	if(fileToUpload != 'undefined'){

		var formData = new FormData();
		formData.append("file",  fileToUpload);
		formData.append("json", JSON.stringify(getCropImgDataLogo()));
		
		$.ajax({
			url: $("#base_url").val()+"API/UploadRestController/shopLogoUploadImage",
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
					logoimage = "";
					$("#logo-fail-remove").show();
					$("#logo-description-box").hide();
					$("#logo-btncrop-box").hide();
				}else{
					$("#logo-save-btn").show();
					$("#logo-description-box").show();
					logoimage = data.filename;
					
					var uploadedimg ='<img  class="photo-upload-output" ' 
						+'src="'+$("#base_url").val()+'uploadimages/logo/big/'+logoimage+'"'
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
						console.log(percentComplete);
						$("#logo-upload-progress").css({width: percentComplete+"%"});
						$("#logo-upload-percentage").html(percentComplete+"%");
					};
				}, false);
				return xhr;
			}
		});
	} 
}



/*============= end update logo ============*/
/*============== update cover ==============*/
var img_x = 0;
var img_y = 0;
var img_w = 0;
var img_h = 0;



$("#btn-cover").on("click", function(){
	$("#openCoverModel").click();
});

$("#trigger-cover-browse").on("click",function(){
	$("#uploadcover").click();
});

$("#uploadcover").on("change", function(){	
	uploadCover(this);
});

$("#cover-fail-event").on("click" , function(){
	coverimage = "";
	$("#uploadcover").val(null);
	$(this).parent().hide();
	
	var txt  = '<div class="photo-upload-info-2" >';
		txt	+= '	<i class="fa fa-picture-o" aria-hidden="true"></i>';
		txt	+= '</div>';
	$('#display-cover-upload').html(txt);
});

$("#coverformclose").on("click", function(){
	
	if(coverimage) {
		var txt  = '<div class="photo-upload-info-2" >';
			txt	+= '	<i class="fa fa-picture-o" aria-hidden="true"></i>';
			txt	+= '</div>';
		$("#cover-description").val("");
		$('#display-cover-upload').html(txt);
		$("#cover-description-box").hide();
		$("#cover-btncrop-box").hide();
		removeCoverImageFromServer().success(function(data){
			coverimage = "";
			$("#uploadcover").val(null);
		});				  
	}
	
});

$("#cover-crop-btn").on("click", function(){
	alert(img_x+" "+img_y+" "+img_w+" "+img_h);
	upoloadCoverToServer();
	$(this).hide();
	
});

$("#cover-save-btn").on("click", function(){
	
	alert(coverimage);
	$('#coverModal').modal('hide');
	
	if(coverimage){
		$(".img-cover-box").css("height", "auto");
	}
	updateShopField(coverimage, $("#cover-description").val() , 2 ,"shop_cover", function(){
		$("#cover-image-display").attr("src",$("#base_url").val()+"uploadimages/cover/big/"+coverimage);
		resizeOnWindow();
		var txt  = '<div class="photo-upload-info-2" >';
			txt	+= '	<i class="fa fa-picture-o" aria-hidden="true"></i>';
			txt	+= '</div>';
		$("#cover-description").val("");
		$('#display-cover-upload').html(txt);
		$("#cover-description-box").hide();
		$("#cover-btncrop-box").hide();
		coverimage = "";
		$("#uploadcover").val(null);
	});
	
});

function uploadCover(input) {
		
	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) { 
 			
 			if(coverimage) {
 				removeCoverImageFromServer().success(function(data){
 					coverimage = "";
 				});				  
 			}
 			$("#cover-crop-btn").show();
 			$("#cover-save-btn").hide();
 			$("#cover-description-box").hide();
	 		var image = new Image();
			image.src = e.target.result;			
			image.onload = function () {
				var height = this.height;
				var width = this.width;
	 			  $("#cover-btncrop-box").show();
	 			  var myimg ='<img  class="photo-upload-output" src="'+e.target.result+'" id="cropcover" alt="your image" />';
			      $('#display-cover-upload').html(myimg);
			      $('#cropcover').Jcrop({
			    	   aspectRatio: 16 / 7,
			    	   onSelect: updateCoords,
			    	   onChange: updateCoords,
			    	   setSelect: [0,0,110,110],
			    	   trueSize: [width,height]
			   	 });			           	
			     //backupcoverimage = e;
			     backuprealcoverimage = $("#uploadcover")[0].files[0];
			}			
		}
		reader.readAsDataURL(input.files[0]);
	}/*else{
		if(!coverimage) {
			var myimg ='<img  class="photo-upload-output" src="'+backupcoverimage.target.result+'" id="cropcover" alt="your image" />';
		    $('#display-cover-upload').html(myimg);
		    $('#cropcover').Jcrop({
		  	   aspectRatio: 16 / 9,
		  	   setSelect:   [50,0, 100,100],
		  	   onSelect: updateCoords
		 	});
		}		
	}*/
	
}

function updateCoords(c){
	img_x = c.x;
	img_y = c.y;
	img_w = c.w;
	img_h = c.h;
}

function getCropImgData(){
	var crop_img_data = {		
		"img_x" : img_x,
		"img_y" : img_y,
		"img_w" : img_w,
		"img_h" : img_h						
	};
	return crop_img_data;	
}

function removeCoverImageFromServer(){

	return $.ajax({
		url : $("#base_url").val()+"API/UploadRestController/removeShopSingleImage",
		type: "POST",
		data : {
			"removeimagedata":{
				"image_type" : "2",
				"imagename" : coverimage
			}			
		}
	});	
}

function upoloadCoverToServer(){
	//var inputFile = $("#uploadcover");
	$("#cover-upload-progress").css({width:"0%"});
	$("#cover-upload-percentage").html(0);
	$("#cover-upload-loading").show();
	var fileToUpload = backuprealcoverimage;
	console.log(fileToUpload);
	if(fileToUpload != 'undefined'){

		var formData = new FormData();
		formData.append("file",  fileToUpload);
		formData.append("json", JSON.stringify(getCropImgData()));
		
		$.ajax({
			url: $("#base_url").val()+"API/UploadRestController/shopCoverUploadImage",
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
					coverimage = "";
					$("#cover-fail-remove").show();
					$("#cover-description-box").hide();
					$("#cover-btncrop-box").hide();
				}else{
					$("#cover-save-btn").show();
					$("#cover-description-box").show();
					coverimage = data.filename;
					var uploadedimg ='<img  class="photo-upload-output" ' 
						+'src="'+$("#base_url").val()+'uploadimages/cover/big/'+coverimage+'"  '
						+'alt="your image" />';
					$('#display-cover-upload').html(uploadedimg);
					
				}
				$("#cover-upload-loading").hide();				
			},
			xhr: function() {
				var xhr = new XMLHttpRequest();
				xhr.upload.addEventListener("progress", function(event) {
					if (event.lengthComputable) {
						var percentComplete = Math.round( (event.loaded / event.total) * 100 );
						console.log(percentComplete);
						$("#cover-upload-progress").css({width: percentComplete+"%"});
						$("#cover-upload-percentage").html(percentComplete+"%");
					};
				}, false);
				return xhr;
			}
		});
	} 
}

/*============ end update cover ============*/

/*============ update shop data function ============*/
function updateShopField(value, desvalue, image_type , param, callback){
	
	progressbar.start();
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/ShopRestController/updateShopField",
		contentType : "application/json",
		data : JSON.stringify({
			"shopdata" : {
				"type" : 2,
				"image_type" : image_type,
				"image_descriptoin" : desvalue,
				"updated_value" : value,
				"shop_id" : $("#shop_id").val(),				
				"param" : param
			}
		}),
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.is_updated == true){
				if( typeof callback === "function"){
					callback();
				}				
			}else{
				swal("Update Error!", data.message, "error");
			}
			progressbar.stop();
				
		}
	});
}
/*============ end update shop data function ============*/
/*============ Leave page event ============*/

function goodbye(e) {
	if(coverimage){
		if(navigator.appName == 'Microsoft Internet Explorer' ||  !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv 11/))){
			removeImageOnCondition();
		}else{
			if(!e) e = window.event;
			  	//e.cancelBubble is supported by IE - this will kill the bubbling process.
			  	e.cancelBubble = true;
			  	e.returnValue = 'You sure you want to leave?'; //This is displayed on the dialog
			  	//e.stopPropagation works in Firefox.
			if (e.stopPropagation){
			  	e.stopPropagation();
			  	e.preventDefault();
			}
		}
	}	
}

window.onbeforeunload=goodbye;
$( window ).unload(function() { 
	removeImageOnCondition();
}); 

window.onunload = unloadPage;
function unloadPage()
{
	removeImageOnCondition();
} 

function removeImageOnCondition(){
	if(coverimage){
		removeCoverImageFromServer();
	}	
	if(logoimage){
		removeLogoImageFromServer();
	}
}
/*============ End leave page event =============*/