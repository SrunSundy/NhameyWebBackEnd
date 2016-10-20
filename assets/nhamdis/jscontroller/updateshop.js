

var checkHasCover = true;
var coverimage = "";

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
$("#btn-cover").on("click", function(){
	$("#openCoverModel").click();
});
$("#trigger-cover-browse").on("click",function(){
	$("#uploadcover").click();
});
$("#uploadcover").on("change", function(){	
	uploadCover(this);
});
var backupcoverimage;
function uploadCover(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) { 
 			
 			  if(coverimage) {
 				 removeCoverImageFromServer().success(function(data){
 					upoloadCoverToServer();
 				 });				  
 			  }else{
 				 upoloadCoverToServer();
 			  }
 			  
 			  var myimg ='<img  class="photo-upload-output" src="'+e.target.result+'" alt="your image" />';
		      $('#display-photo-upload').html(myimg);
		      backupcoverimage = e;
		}
		reader.readAsDataURL(input.files[0]);
	}else{
		/*var txt  = '<div class="photo-upload-info" >';
			txt += '   <p class="text-upload-info">';
			txt += '      <i class="fa fa-plus"></i> ';
			txt += '      <span>Browse Photo ( 700 x 500 )</span>';
			txt += '   </p>';
			txt += '</div>';
		$('#display-photo-upload').html(txt);
		*/
		var myimg ='<img  class="photo-upload-output" src="'+backupcoverimage.target.result+'" alt="your image" />';
	    $('#display-photo-upload').html(myimg);
	}
}
function removeCoverImageFromServer(){
	alert(coverimage);
	return $.ajax({
		url : "/NhameyWebBackEnd/API/UploadRestController/removeShopSingleImage",
		type: "POST",
		data : {
			"removeimagedata":{
				"image_type" : "2",
				"imagename" : coverimage.trim()
			}			
		}
	});	
}
function upoloadCoverToServer(){
	var inputFile = $("#uploadcover");
	
	$("#cover-upload-loading").show();
	var fileToUpload = inputFile[0].files[0];
	console.log(fileToUpload);
	if(fileToUpload != 'undefined'){

		var formData = new FormData();
		formData.append("file",  fileToUpload);
		
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
				}else{
					coverimage = data.filename;
				}
				$("#cover-upload-loading").hide();
				
			}			
		});
	} 
}
/*============ end update cover ============*/