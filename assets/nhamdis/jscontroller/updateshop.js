

var checkHasCover = true;
var coverimage = "";
/*var backupcoverimage;*/
var backuprealcoverimage;

$(".img-cover").error(function() {
	checkHasCover = false;
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

	if (checkHasCover) {
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
	} else {
		$(".cover-box").css("background", "#263238").height(250);

	}

});

function resizeOnWindow() {
	console.log($(".cover-box").height());
	console.log($(".img-cover-box").height());
	if (checkHasCover) {
		var imgboxheight = $(".img-cover-box").height();
		var coverboxheight = $(".cover-box").height();

		if (coverboxheight < imgboxheight) {

			$(".cover-box").height(300);

		} else {
			console.log($(".img-cover-box").height());
			console.log($(".bar-cover-wrapper").find(".img-cover-box").html());
			$(".cover-box").height($(".img-cover-box").height());
		}
	} else {
		$(".cover-box").css("background", "#263238").height(250);
	}
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

$("#photo-crop-btn").on("click", function(){
	alert(img_x+" "+img_y+" "+img_w+" "+img_h);
	upoloadCoverToServer();
	$(this).hide();
	
});

$("#photo-save-btn").on("click", function(){
	
	alert(coverimage);
	$('#coverModal').modal('hide');
	$("#cover-image-display").attr("src","/NhameyWebBackEnd/uploadimages/cover/big/"+coverimage);
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

function uploadCover(input) {
		
	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) { 
 			
 			if(coverimage) {
 				removeCoverImageFromServer().success(function(data){
 					coverimage = "";
 				});				  
 			}
 			$("#photo-crop-btn").show();
 			$("#photo-save-btn").hide();
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
		url : "/NhameyWebBackEnd/API/UploadRestController/removeShopSingleImage",
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
					coverimage = "";
					$("#cover-fail-remove").show();
					$("#cover-description-box").hide();
					$("#cover-btncrop-box").hide();
				}else{
					$("#photo-save-btn").show();
					$("#cover-description-box").show();
					coverimage = data.filename;
					var uploadedimg ='<img  class="photo-upload-output" ' 
						+'src="/NhameyWebBackEnd/uploadimages/cover/big/'+coverimage+'"  '
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