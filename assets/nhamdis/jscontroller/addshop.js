/*================= google map code ================*/  
var map;
var geocoder;
var shoptimezone;
var mapOptions = { 
	center: new google.maps.LatLng(0.0, 0.0),
	zoom: 2,
	mapTypeId: google.maps.MapTypeId.ROADMAP 
};		

function initialize() {
	var mylocationmarker = {lat: 11.559844756373714, lng:  104.91085053014103};
	var myOptions = {
		center: new google.maps.LatLng(11.559844756373714, 104.91085053014103 ),
		zoom: 14,
		scrollwheel: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	geocoder = new google.maps.Geocoder();
	var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
	google.maps.event.addListener(map, 'click', function(event) {
		
		this.setOptions({scrollwheel:true});
		placeMarker(event.latLng);
	});
	google.maps.event.addListener(map, 'mouseout', function() {
		this.setOptions({scrollwheel:false});
	});	
	
	var marker = new google.maps.Marker({
		position: mylocationmarker,
		map: map,
		optimized:false
	});
	
	google.maps.event.addListener(marker, 'mouseover', function() {
        if (this.getAnimation() == null || typeof this.getAnimation() === 'undefined') {           
           // clearTimeout(bounceTimer);           
          var that = this;             
          bounceTimer = setTimeout(function(){
               that.setAnimation(google.maps.Animation.BOUNCE);
          },500); 
        }
    });
    
    google.maps.event.addListener(marker, 'mouseout', function() {
        
         if (this.getAnimation() != null) {
            this.setAnimation(null);
         }         
         clearTimeout(bounceTimer);        
    });
    
	function placeMarker(location) {
		if(marker){ 
			marker.setPosition(location); 
		}else{
			marker = new google.maps.Marker({ 
				position: location, 
				map: map
			});
		}	
		getAddress(location);	
		getShopTimeZone(location.lat(), location.lng());
		$("#lat-location").val(location.lat());
		$("#lng-location").val(location.lng());
	}

	$("#detectlocation").on("click", function(){
		var latpoint = $("#lat-location").val();
		var lngpoint = $("#lng-location").val();
		
		if( latpoint && lngpoint ){
			
			if(isNaN(latpoint)){
				
				swal("Input Error!", "Invalid lat point", "error");
				return;
			}
			if(isNaN(lngpoint)){
				
				swal("Input Error!", "Invalid lng point", "error");
				return;
			}
			
			latpoint = parseFloat(latpoint);
			lngpoint = parseFloat(lngpoint);
			
			if(latpoint > 90 || latpoint <-90){
				swal("Input Error!", "Invalid lat point", "error");
				return;
			}		
			if(lngpoint > 180 || lngpoint <-180){
				swal("Input Error!", "Invalid lng point", "error");
				return;
			}
			var delocation = {lat: latpoint , lng: lngpoint};
			getAddress(delocation);
			getShopTimeZone(latpoint, lngpoint);
			marker.setPosition(delocation);												
			map.panTo(delocation); 
			//map.setCenter(test);
			marker.setAnimation(google.maps.Animation.DROP);	
		}else{
			swal("Input Error!", "Invalid location point!", "error");
		}
		
													
	});
	
	
	
	
	function getAddress(latLng) {
		
		var address = "";
		geocoder.geocode( {'latLng': latLng}, function(results, status) {				
		
			if($("#shopstreetad").val() == ""){
				if(status == google.maps.GeocoderStatus.OK) {												  
					if(results[0]) {												              
						$("#shopstreetad").val(results[0].formatted_address);
					}
					else {
						$("#shopstreetad").val("No results");
					}
				}
				else {
					$("#shopstreetad").val(status);
				}
			}												  										        															           
		});
	}
	
	
}
google.maps.event.addDomListener(window, 'load', initialize);



function getShopTimeZone(lat, lng){	
	$.ajax({
  	   url:"https://maps.googleapis.com/maps/api/timezone/json?location="+parseFloat(lat)+","+parseFloat(lng)+"&timestamp="+(Math.round((new Date().getTime())/1000)).toString()+"&sensor=false",
  	}).done(function(response){
  		
  	   if(response.timeZoneId != null){
  		 shoptimezone = response.timeZoneId;
  	   }else{
  		 shoptimezone = "";
  	   }
  	});
}
/*=================== end google map code ===================*/									
 



$(document).ready(function(){
	
	$(".select2").select2();
	$("span.select2-selection").css({ "height":"35px","border-radius" : "0","border":"1px solid #ccc"});
	$(".timepicker").timepicker({
         showInputs: false,
         showMeridian : false,
         maxHours : 24
    });	
	$('.inputmaskphone').inputmask({
		 mask: '999-999-9999'
	});
});

var shopphones = [];
var arrnewfileimagename = [];
var logoimagename = "";
var coverimagename = "";
//var cuisineimgname = "";
var servecategory = "";
var shopfacilityicon="";


loadDefault();
function loadDefault(){
	
	progressbar.start();
	loadBranch(function(){
		loadServeCategory(function(){
			loadShopFacility(function(){
				loadCountryData(function(){
					progressbar.stop();
				});
			});
		});
	});
}
/*====================== load shop address section =======================*/


function loadCountryData( callback){
	
	$("#nham_country").prop('disabled', true);
	$("#country-img-loading").show();
	$.ajax({
		type : "GET",
		url  : $("#base_url").val()+"API/CountryRestController/getCountryCombo",
		success : function(data){
			data = JSON.parse(data);
		
			$("#nham_country").children().remove();
			
			if(data.length > 0){				
				var country = '';
				for(var i=0 ; i< data.length; i++){
					if(i==0){
						country += '<option selected="selected" value="'+data[i].country_id+'">'+data[i].country_name+'</option>';
					}else{
						country +='<option value="'+data[i].country_id+'">'+data[i].country_name+'</option>';
					}					
				}
				$("#nham_country").append(country);		
			//	$("#nham_country").select2("val", 1);
				$("#select2-nham_country-container").html($("#nham_country option:selected").text());
			}	
			if( typeof callback === "function"){
				callback();
			}
			$("#nham_country").prop('disabled', false);
			$("#country-img-loading").hide();
			loadCityData($("#nham_country option:selected").val());
		}		
	});
}

$("#nham_country").on("change", function(){
	loadCityData( $("#nham_country option:selected").val() );	
});

function loadCityData( countryid ){
	
	$("#nham_city").prop('disabled', true);
	$("#city-img-loading").show();
	$.ajax({
		type : "GET",
		url  : $("#base_url").val()+"API/CityRestController/getCityCombo/"+countryid,
		success : function(data){
			data = JSON.parse(data);
			
			$("#nham_city").children().remove();
			//$("#nham_city").select2("val", "");
			$("#select2-nham_city-container").html("");
			if(data.length > 0){
							
				var city = '';
				for(var i=0 ; i< data.length; i++){
					if(i == 0){
						city +='<option selected="selected" value="'+data[i].city_id+'">'+data[i].city_name+'</option>';
					}else{
						city +='<option value="'+data[i].city_id+'">'+data[i].city_name+'</option>';
					}						
				}
				$("#nham_city").append(city);
				$("#select2-nham_city-container").html($("#nham_city option:selected").text());
				//$("#nham_city").select2("val", 1);
			}
			$("#nham_city").prop('disabled', false);
			$("#city-img-loading").hide();
			loadDistrictData( $("#nham_city option:selected").val() );
		}		
	});	 
}

$("#nham_city").on("change", function(){
	loadDistrictData( $("#nham_city option:selected").val() );	
});

function loadDistrictData( cityid ){
	
	$("#nham_district").prop('disabled', true);
	$("#district-img-loading").show();
	$.ajax({
		type : "GET",
		url  : $("#base_url").val()+"API/DistrictRestController/getDistrictCombo/"+cityid,
		success : function(data){
			data = JSON.parse(data);
			
			$("#nham_district").children().remove();
			//$("#nham_district").select2("val", "");"
			$("#select2-nham_district-container").html("");
			
			if(data.length > 0){
					
				var district = '';
				for(var i=0 ; i< data.length; i++){
					if(i == 0){
						district +='<option selected="selected" value="'+data[i].district_id+'">'+data[i].district_name+'</option>';
					}else{
						district +='<option value="'+data[i].district_id+'">'+data[i].district_name+'</option>';
					}						
				}
				$("#nham_district").append(district);
				$("#select2-nham_district-container").html($("#nham_district option:selected").text());
			//	$("#nham_district").select2("val", 1);
				
			}
			
			$("#nham_district").prop('disabled', false);
			$("#district-img-loading").hide();
			loadCommuneData( $("#nham_district option:selected").val());
		}		
	});			
}

$("#nham_district").on("change", function(){
	loadCommuneData( $("#nham_district option:selected").val());
});

function loadCommuneData( districtid ){
		
	 $("#nham_commune").prop('disabled', true);
	 $("#commune-img-loading").show();
	 $.ajax({
		type : "GET",
		url  : $("#base_url").val()+"API/CommuneRestController/getCommuneCombo/"+districtid,
		success : function(data){
			data = JSON.parse(data);
			
		
			$("#nham_commune").children().remove();
			$("#select2-nham_commune-container").html("");
			//$("#nham_commune").select2("val", "");
			if(data.length > 0){
				
				var commune = '';
				for(var i=0 ; i< data.length; i++){
					if(i == 0){
						commune +='<option selected="selected" value="'+data[i].commune_id+'">'+data[i].commune_name+'</option>';
					}else{
						commune +='<option value="'+data[i].commune_id+'">'+data[i].commune_name+'</option>';
					}						
				}
				$("#nham_commune").append(commune);
				$("#select2-nham_commune-container").html($("#nham_commune option:selected").text());
				//$("#nham_commune").select2("val", 1);
			}
			$("#nham_commune").prop('disabled', false);
			$("#commune-img-loading").hide();
		}		
	});
}
/*====================== end load shop address section =======================*/  


 
/*=================== phone adding =================*/



$('#shop_phonenum').keypress(function (e) {
    
	if (e.which == 13) {
		$(".nham-append-data").click();
	    return false;    //<---- Add this line
	}
});

$(".nham-append-data").on("click",function(){
	var phonenum = $("#shop_phonenum").val().replace(/[_]/g,"").trim();
	if(phonenum == '' || phonenum.indexOf('--') > -1  || phonenum == null) return;
	
	shopphones.push(phonenum);
	displayPhones(shopphones);
	
	$("#shop_phonenum").val("");	
});

$(document).on("click",".close-phone",function(){
	var arrayno = parseInt($(this).siblings(".phone-wrapper").find("input").val());
	shopphones.splice(arrayno , 1);
	displayPhones(shopphones);
	
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
/*================= close phone adding ==================*/

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


/*===================== upload logo event =============================*/

var backupreallogoimage;
var img_logo_x = 0;
var img_logo_y = 0;
var img_logo_w = 0;
var img_logo_h = 0;

$("#logo-open-modal").on("click", function(){
	$("#trigger-logo-browse").click();
	$("#openLogoModel").click();
});

$("#trigger-logo-browse").on("click",function(){
	
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
	
	upoloadLogoToServer();
	$(this).hide();
	
});

$("#logo-save-btn").on("click", function(){
	
	
	$('#logoModal').modal('hide');
	$("#logo_description").show();	  
	$("#logo-upload-remove-fake").show();
	$("#logo-upload-remove").show();
	var myimg  ='<img  class="upload-shop-img"'; 
		myimg +='src="'+$("#dis_img_path").val()+'/uploadimages/real/place/logo/medium/'+logoimagename+'" alt="your image" />';
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
			    	   setSelect: [0,0,582,582],
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
		url : $("#base_url").val()+"API/UploadRestController/removeShopSingleImage",
		type: "POST",
		data : {
			"removeimagedata":{
				"image_type" : "1",
				"imagename" : logoimagename
			}			
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
			url: $("#base_url").val()+"API/UploadRestController/shopLogoUploadImage",
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
					logoimagename = "";
					$("#logo-fail-remove").show();
					//$("#cover-description-box").hide();
					$("#logo-btncrop-box").hide();
				}else{
					$("#logo-save-btn").show();
					//$("#cover-description-box").show();
					logoimagename = data.filename;
					var uploadedimg ='<img  class="photo-upload-output" ' 
						+'src="'+$("#dis_img_path").val()+'/uploadimages/real/place/logo/big/'+logoimagename+'"  '
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

/*===================== upload cover event =============================*/
var backuprealcoverimage;
var img_x = 0;
var img_y = 0;
var img_w = 0;
var img_h = 0;

$("#cover-open-modal").on("click", function(){
	$("#trigger-cover-browse").click();
	$("#openCoverModel").click();
});

$("#trigger-cover-browse").on("click",function(){
	
	$("#uploadcover").click();
});

$("#uploadcover").on("change", function(){	
	uploadCover(this);
});

$("#cover-fail-event").on("click" , function(){
	coverimagename = "";
	$("#uploadcover").val(null);
	$(this).parent().hide();
	
	var txt  = '<div class="photo-upload-info-2" >';
		txt	+= '	<i class="fa fa-picture-o" aria-hidden="true"></i>';
		txt	+= '</div>';
	$('#display-cover-upload').html(txt);
});

$("#coverformclose").on("click", function(){
	
	if(coverimagename) {
		var txt  = '<div class="photo-upload-info-2" >';
			txt	+= '	<i class="fa fa-picture-o" aria-hidden="true"></i>';
			txt	+= '</div>';
		//$("#cover-description").val("");
		$('#display-cover-upload').html(txt);
		//$("#cover-description-box").hide();
		$("#cover-btncrop-box").hide();
		removeCoverImageFromServer().success(function(data){
			coverimagename = "";
			$("#uploadcover").val(null);
		});				  
	}
	
});

$("#cover-crop-btn").on("click", function(){
	
	upoloadCoverToServer();
	$(this).hide();
	
});

$("#cover-save-btn").on("click", function(){
	
	$('#coverModal').modal('hide');
	$("#cover_description").show();	  
	$("#cover-upload-remove-fake").show();
	$("#cover-upload-remove").show();
	var myimg  ='<img  class="upload-shop-img"'; 
		myimg +='src="'+$("#dis_img_path").val()+'/uploadimages/real/place/cover/medium/'+coverimagename+'" alt="your image" />';
    $('#cover-display-wrapper').html(myimg);
    var txt  = '<div class="photo-upload-info-2" >';
		txt	+= '	<i class="fa fa-picture-o" aria-hidden="true"></i>';
		txt	+= '</div>';
	$('#display-cover-upload').html(txt);
	$("#cover-btncrop-box").hide();
   // coverimagename = "";
	//$("#uploadcover").val(null);
});

$("#cover-upload-remove-icon").on("click", function(){
	
	$(this).parent().hide();	
	 var txt  = '<label class="gray-image-plus">';
	 	 txt += '<i class="fa fa-plus"></i>';
	 	 txt += '</label>';
	 	 txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 960 x 500 </p>';
	 	 txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add cover image </p>';
	$(this).parent().siblings(".photo-display-wrapper").html(txt);
	$(this).parent().siblings(".photo-remove-loading").show();
	
	$("#cover-upload-remove-fake").hide();
	$("#cover-remove-loading").hide();
	$("#cover_description").hide();
	removeCoverImageFromServer().success(function(data){
		
		coverimagename = "";		
		$("#uploadcover").val(null);
	});	
});

function uploadCover(input) {
		
	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) { 
 			
 			if(coverimagename) {
 				removeCoverImageFromServer().success(function(data){
 					coverimagename = "";
 				});				  
 			}
 			$("#cover-crop-btn").show();
 			$("#cover-save-btn").hide();
 			//$("#cover-description-box").hide();
	 		var image = new Image();
			image.src = e.target.result;			
			image.onload = function () {
				var height = this.height;
				var width = this.width;
	 			  $("#cover-btncrop-box").show();
	 			  var myimg ='<img  class="photo-upload-output" src="'+e.target.result+'" id="cropcover" alt="your image" />';
			      $('#display-cover-upload').html(myimg);
			      $('#cropcover').Jcrop({
			    	   aspectRatio: 16 / 10,
			    	   onSelect: updateCoords,
			    	   onChange: updateCoords,
			    	   setSelect: [0,0,582,110],
			    	   trueSize: [width,height]
			   	 });			           	
			  
			     backuprealcoverimage = $("#uploadcover")[0].files[0];
			}			
		}
		reader.readAsDataURL(input.files[0]);
	}
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
				"imagename" : coverimagename
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
				
				if(data.is_upload == false){
					swal({
						 title: "Upload Error!",
					     text: data.message,
					     html: true,
					     type: "error",
					    			     
					 });
					coverimagename = "";
					$("#cover-fail-remove").show();
					//$("#cover-description-box").hide();
					$("#cover-btncrop-box").hide();
				}else{
					$("#cover-save-btn").show();
					//$("#cover-description-box").show();
					coverimagename = data.filename;
					var uploadedimg ='<img  class="photo-upload-output" ' 
						+'src="'+$("#dis_img_path").val()+'/uploadimages/real/place/cover/big/'+coverimagename+'"  '
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
						
						$("#cover-upload-progress").css({width: percentComplete+"%"});
						$("#cover-upload-percentage").html(percentComplete+"%");
					};
				}, false);
				return xhr;
			}
		});
	} 
}

/*===================== end upload cover event =========================*/

$("#input-44").fileinput({
    uploadUrl: '/file-upload-batch/2',
    maxFilePreviewSize: 10240,
    browseClass: "btn btn-danger",
    allowedFileExtensions: ["jpg", "png", "gif"]
});

$(document).on("click" ,".fileinput-upload-button",function(e){
	
	var inputFile = $("#input-44");
	var filesToUpload = inputFile[0].files;
	
	console.log(filesToUpload);
});

$("#input-44").on("change", function(){
	
	//console.log($(".file-drop-zone").find(".file-preview-frame").length);
	uploadShopImageDetailToServer();
});

$(".file-drop-zone").on("drop", function(e) {	
	console.log(e.originalEvent.dataTransfer.files);
	$("#input-44").prop("files", e.originalEvent.dataTransfer.files);
});

function getImageNameAndDetail(){

	var arrshopimagedetail = [];
	
	var imglng = $(".file-preview-frame").length;
	for(var i=0; i<imglng ; i++){		
		if($(".file-preview-frame").eq(i).find("div.file-input-err-message").length <= 0 && $(".file-preview-frame").eq(i).find("input.img-new-name").val()){
			arrshopimagedetail.push({
				"sh_img_name" : $(".file-preview-frame").eq(i).find("input.img-new-name").val(),
				"sh_img_remark" : $(".file-preview-frame").eq(i).find("textarea").val()
			});		
		}	
	} 	
	return arrshopimagedetail;
	
}
$(document).on("mousedown","button.kv-file-remove",function(){
	var imagename = $(this).parents(".file-thumbnail-footer").find("input.img-new-name").val();
	
	removeShopImageDetailFromServer(imagename).success(function (data) {	
		
	});
	for(var i=0; i<arrnewfileimagename.length; i++){ 
		if(imagename == arrnewfileimagename[i].filename){
			arrnewfileimagename.splice(i , 1);
		}
	}
	
});

$(document).on("mousedown", "button.fileinput-remove-button, .fileinput-remove", function(){
	
	removeShopImageDetailFromServerMulti(arrnewfileimagename).success(function(data){
		arrnewfileimagename = [];
		
	});
});

$(document).on("click", "#delete-cover-upload", function(){
	arrnewfileimagename = [];
	$(this).parent().hide();
	$(this).parent().siblings("#coveruploadimage").hide();
	$("button.fileinput-remove-button").click();
});

function removeShopImageDetailFromServerMulti(imagestoremove){
	return $.ajax({
		url  : $("#base_url").val()+"API/UploadRestController/removeShopMultipleImage",
		type : "POST",
		data : {
			"removeimagedata": imagestoremove		
		}
	});
}

function removeShopImageDetailFromServer(imagetoremove){
	return $.ajax({
		url : $("#base_url").val()+"API/UploadRestController/removeShopSingleImage",
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
	
    
	console.log(222222222223333333);
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
			url: $("#base_url").val()+"API/UploadRestController/shopImageDetailUpload",
			type: 'POST',
			data: formData,
			processData: false,
			contentType: false,
			success: function(data) {
				data = JSON.parse(data);
			   
			    if(data.is_upload){
			    	 var filelen = data.fileupload.length;			 
					 for(var i=0 ;i< filelen; i++){
						   
					    arrnewfileimagename.push({
					    	"isupload" : data.fileupload[i].is_upload,
					    	"filename" : data.fileupload[i].filename
					    });
					    	
						if(data.fileupload[i].is_upload == true){
	  
						}else{
							alert(data.fileupload[i].filename+" :: "+data.fileupload[i].message);
						}	
					
					  }						
					  setTimeout(function(){ 			    	
					    setNewimgName();
			    	  }, 1000);	
			    }else{
			    	swal({
						 title: "Upload Error!",
					     text: data.message,
					     html: true,
					     type: "error",
					    			     
					 });
			    }
			   						
			}
		});
	}	
}

function setNewimgName(){
	 for(var i=0 ;i< arrnewfileimagename.length; i++){
		 if(arrnewfileimagename[i].isupload){
			 if(arrnewfileimagename[i].filename){
    			 $(".file-preview-frame").eq(i).find("input.img-new-name").val(arrnewfileimagename[i].filename);
             }else{
            	 $(".file-preview-frame").eq(i).find("input.img-new-name").val("noname");
             }
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





function getAddress_add(){//name of country, city........

	var streetad = $("#shopstreetad").val().split(",");
	var country = $("#nham_country option:selected").text();
	var city = $("#nham_city option:selected").text();
	var district = $("#nham_district option:selected").text();
	var commune = $("#nham_commune option:selected").text();

	streetad = streetad[0];

	return streetad +", "+commune+", "+district+", "+city+", "+country;
}

function inputValidation(){
    var validate = [
        {
        	"is_validate" : validateNull("selectedbranch", 0 , "branchname"),
        	"message" : "Branch Name" 
        },
        {
        	"is_validate" : validateNull("shopengname" , 0),
        	"message" : "Shop Name In English" 
        },
        {
        	"is_validate" : validateNull("nham_country" , 1),
        	"message" : "Country" 
        },
        {
        	"is_validate" : validateNull("nham_city" , 1),
        	"message" : "City" 
        },
        {
        	"is_validate" : validateNull("nham_district" , 1),
        	"message" : "District" 
        },
        {
        	"is_validate" : validateNull("nham_commune" , 1),
        	"message" : "Commune" 
        },
        {
        	"is_validate" : validateNull("shopstreetad" , 0),
        	"message" : "Street Address" 
        },
        {
        	"is_validate" : validateNull("lat-location" , 0),
        	"message" : "Latitude" 
        },
        {
        	"is_validate" : validateNull("lng-location" , 0),
        	"message" : "Longitude" 
        }
			
	];
	var iserror = false;
	if(getServeCategories().length <= 0){
		iserror = true;
		$("#servecategoryname").addClass("invalid-input");
		swal("Input Error", "ServeCategory is Invalid!", "error");
		return iserror;
	}else{
		$("#servecategoryname").removeClass("invalid-input");
	}
	for(var i=0; i<validate.length; i++){
		if(validate[i].is_validate == false){
			swal("Input Error", validate[i].message+" is Invalid!", "error");
			iserror = true;
			break;
		}
	}
	
	return iserror;
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
function validateLeaveNull( selector ){
	if($("#"+selector).val() == "" || $("#"+selector).val() == null){		
		return false;
	}else{		
		return true;
	}	
}

function validateLeavePage(){

	var isleave = true;
	var validate = [
		
		validateLeaveNull("shopshortdes"),
		validateLeaveNull("shopdes"),
	];
	var isnull = true;
	for(var i=0 ; i<validate.length; i++){
		if(validate[i]){
			isnull = false;
			break;
		}
	}
	if(isnull == false || arrnewfileimagename.length>0 || logoimagename != "" || coverimagename != ""){		
		isleave = false;
	}
	return isleave;
}
function getDataToInsert(){
	
	
	var shopdata = {
		"ShopData":{
			"datashop":{
				"branch_id" : $("#selectedbranch").val(),
				"country_id" : $("#nham_country").val(),
				"city_id" : $("#nham_city").val(),
				"district_id" : $("#nham_district").val(),
				"commune_id" : $("#nham_commune").val(),
				"shop_name_en" : $("#shopengname").val() ,
				"shop_name_kh" : $("#shopkhname").val(),
				"shop_logo" : logoimagename,
				"logo_description" : $("#logo_description").val(),
				"cover_description" : $("#cover_description").val(),
				"shop_cover" : coverimagename,
				/*"cuisine_id" : $("#selectedcuisine").val(),*/
				/*"serve_category_id" : $("#selectedservecategory").val(),*/
				"shop_serve_type" : $("#shopservetype").val(),
				"shop_short_description": $("#shopshortdes").val() ,
				"shop_description" : $("#shopdes").val(),
				"shop_address": getAddress_add(),	
				"shop_phone": shopphones.toString().replace(/[,]/g,"|").trim(),
				"shop_email":$("#shopemail").val(),
				"shop_working_day": countWorkingday().toString().replace(/[,]/g,"|").trim(),
				"shop_opening_time": $("#shopopentime").val(),
				"shop_close_time": $("#shopclosetime").val(),
				"shop_capacity" : $("#shopcapacity").val(),
				/*"shop_has_wifi" : isCheckFacility("wifi"),
				"shop_has_aircon" : isCheckFacility("aircon"),
				"shop_has_reservation" : isCheckFacility("reserve"),
				"shop_has_bikepark" : isCheckFacility("parking"),								
				"shop_has_tax": isCheckFacility("taxinvoice"),*/
				"shop_lat_point": $("#lat-location").val(),
				"shop_lng_point": $("#lng-location").val(),
				"shop_social_media": {
					"facebook" : $("#shopfb").val(),
					"instagram" : $("#shopinstagram").val(),
					"googleplus" : $("#shopgoogleplus").val(),
					"twitter": $("#shoptwitter").val()
				},
				"shop_remark": $("#shopremark").val(),
				"shop_time_zone" : shoptimezone,
				"is_delivery" : $("#nham24delivery").is(':checked') ? '1' : '0'
			},
			"serve_categories" : getServeCategories(),
			"shop_facilities" : getShopFacilities(),
			"shop_image_detail": getImageNameAndDetail()
						
		}	
	};
	return shopdata;
}


$("#saveshop").on("click",function(){
	
	console.log(getDataToInsert());
	
	 if(!inputValidation()){
		 progressbar.start();
		 $.ajax({
			 type: "POST",
			 url: $("#base_url").val()+"API/ShopRestController/insertShop", 
			 contentType : "application/json",
			 data : JSON.stringify( getDataToInsert()),
			 success: function(data){
				 data = JSON.parse(data);
				
				 progressbar.stop();
				 if(data.is_insert){
					// alert(data.message);
					 clearShopForm();
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
	 }
	 
	 // alert(0);
	 
	// console.log(test());
   /*  alert($("#logoupload").val());
    alert(logoimagename); */
  //  uploadShopImageDetailToServer();
	//  console.log(getDataToInsert());
});


/*$("#branchname").on("focus keyup",function(){
	
	var srchbranchname = $(this).val();
	var loadingimgsrc = $("#base_url").val()+"assets/nhamdis/img/nhamloading.gif";
	$("#display-result").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: $("#base_url").val()+"API/BranchRestController/getBranchByNameCombo", 
		 data : {			 
			"srchname" : srchbranchname,
			"limit" : 10		 	
		 },
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
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
   });
});*/

var myBranch = [];

function loadBranch(callback){
    $.ajax({
		type: "GET",
		url: $("#base_url").val()+"API/BranchRestController/getAllBranch", 
		success: function(data){
			data = JSON.parse(data);
			myBranch = data;
			displaySearchBranch(myBranch, $("#branchname").val());
			
			if( typeof callback === "function"){
				callback();
			}
			
			
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
	progressbar.start();
	$.ajax({
		type : "POST",
		url : $("#base_url").val()+"API/BranchRestController/insertBranch",
		contentType : "application/json",
		data :  JSON.stringify(branchdata),
		success : function(data){
			data = JSON.parse(data);
			
			if(data.is_insert == false){
				
				swal("Insert Error", "", "error");
			}else{
				$("#selectedbranch").val(data.branch_id);
				$("#branchname").attr('disabled','disabled');
				$("#branchname").siblings(".font-icon-cross").remove();
				$("#branchname").parent().append("<i class='fa fa-times font-icon-cross'  aria-hidden='true'></i>");
				loadBranch(function(){
					progressbar.stop();
				});
			}
		}
	});
});



/*$("#cuisinename").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = "../assets/nhamdis/img/nhamloading.gif";
	$("#display-result-cuisine").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/CuisineRestController/getCuisineByNameCombo",
		 data:{
			"srchname" : srchname,
			"limit" : 10
		 }, 
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
			 var dis = '';
			if(data.length <= 0){
				$("#text-search-cuisine-dis1").html(cutString(srchname , 35));
				$("#text-search-cuisine-dis2").html(cutString(srchname , 20));
				dis +="<div class='no-data-wrapper' align='center' style='padding-bottom:4px;'>";
				dis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
				dis +="  <span class='no-data-text'>No Record Found!</span>";
				dis +="</div>";
				$("#display-searching-text_cuisine").show();
				$("#nham-dropdown-footer-cuisine").show();
			}else{	
				$("#display-searching-text_cuisine").hide();
				$("#nham-dropdown-footer-cuisine").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 dis += '<div  class="nham-dropdown-result">';
					 dis += ' <input type="hidden" value="'+data[i].cuisine_id+'" />';
					 dis += ' <img class="pull-left icon" src="../uploadimages/icon/'+data[i].cuisine_icon+'"/>';
					 dis += ' <p><span class="title">'+data[i].cuisine_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result-cuisine").html(dis); 					 
   	 	 }
   });
});
$("#yescuisine").on("mousedown",function(){
	
	$("#cuisinebtnpop").click();
	$("#cuisinenamepopup").val($("#cuisinename").val());
	
});
*/



/*======================= Shop facility event =============================*/


/*$("#shopfacilityname").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = $("#base_url").val()+"assets/nhamdis/img/nhamloading.gif";
	$("#display-result-shopfacility").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: $("#base_url").val()+"API/ShopFacilityRestController/getShopFacilityByNameCombo", 
		 data : {
			"srchname" : srchname,
			"limit" : 10
		 },
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
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
  });
});*/


var myShopFacility = [];

function loadShopFacility(callback){
    $.ajax({
		type: "GET",
		url: $("#base_url").val()+"API/ShopFacilityRestController/getAllShopFacility", 
		success: function(data){
			data = JSON.parse(data);
			myShopFacility = data;
			displaySearchShopFacility(myShopFacility, $("#shopfacilityname").val());
			
			if( typeof callback === "function"){
				callback();
			}
			
			
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
			 dis += ' <img class="pull-left icon" src="'+$("#dis_img_path").val()+'/uploadimages/real/icon/'+data[i].sh_facility_icon+'"/>';
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
		
		displaySearchShopFacility(srchresult,  srchname);
		
    }else{
    	displaySearchShopFacility(myShopFacility, srchname);
    }	
});

$("#yesshopfacility").on("mousedown",function(){

	$("#shopfacilitybtnpop").click();
	$("#shopfacilitynamepopup").val($("#shopfacilityname").val());
	
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
					
					swal("Upload Error!", data.message, "error");
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
						 //console.log(percentComplete);
						
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
	
		swal("Input Error!", "Shop Facility name Invalid", "error");
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
						swal("Insert Error!", "", "error");
					}else{
					
						
						var txtwidth = $("#shopfacilitynamepopup").textWidth()+55;
						var checkcls = $("#display-result-shopfacility").siblings("input").val();
						 var box = "<div class='selected-category-box "+checkcls+" pull-left' style='width:"+txtwidth+"px'>";
						 box += "<input type='hidden' value='"+data.sh_facility_id+"' />";
						 box += "<img class='pull-left icon-after-select' src='"+$("#dis_img_path").val()+"/uploadimages/real/icon/"+shopfacilityicon+"' />";
						 box += "<p class='text-serve-category-selected'>";
						 box += "<span>"+$("#shopfacilitynamepopup").val()+"</span>";
				 		 box += "<i class='fa fa-times close-item' style='margin-left:10px;'  aria-hidden='true'></i></p></div>";
				 		
				 		$("#shop-facilities").append(box);
											 
				 		$('#shopFacilityModal').modal('hide');
						clearShopFacilitySaveform();
						loadShopFacility(function(){
							
							progressbar.stop();
						});
						
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
/*=======================End shop facility event =============================*/


/*======================= serve category event =============================*/

/*$("#servecategoryname").on("keyup",function(){
	
	var srchname = $(this).val();
	var loadingimgsrc = $("#base_url").val()+"assets/nhamdis/img/nhamloading.gif";
	$("#display-result-servecategory").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: $("#base_url").val()+"API/ServeCategoryRestController/getServeCategoryByNameCombo", 
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
					 dis += ' <img class="pull-left icon" src="'+$("#base_url").val()+'uploadimages/icon/'+data[i].serve_category_icon+'"/>';
					 dis += ' <p><span class="title">'+data[i].serve_category_name+'</span></p></div>';
					 
				 }			
				 dis+="<div style='clear:both'></div>";
				
			}
			$("#display-result-servecategory").html(dis); 					 
   	 	 }
   });
});*/

var myServeCategory = [];

function loadServeCategory(callback){
    $.ajax({
		type: "GET",
		url: $("#base_url").val()+"API/ServeCategoryRestController/getAllServeCategory", 
		success: function(data){
			data = JSON.parse(data);
			myServeCategory = data;
			displaySearchServeCategory(myServeCategory, $("#servecategoryname").val());
			
			if( typeof callback === "function"){
				callback();
			}
			
			
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
		 for(var i=0 ; i<data.length ; i++){			
		
			 dis += '<div  class="nham-dropdown-multi-result">';
			 dis += ' <input type="hidden" value="'+data[i].serve_category_id+'" />';
			 dis += ' <img class="pull-left icon" src="'+$("#dis_img_path").val()+'/uploadimages/real/icon/'+data[i].serve_category_icon+'"/>';
			 dis += ' <p><span class="title">'+data[i].serve_category_name+'</span></p></div>';
			 
		 }			
		 dis+="<div style='clear:both'></div>";	
	}
	$("#display-result-servecategory").html(dis); 
	
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

	$("#servecategorybtnpop").click();
	$("#servecategorynamepopup").val($("#servecategoryname").val());
	
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
					swal("Upload Error!", data.message, "error");
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
		
		swal("Input Error!", "Serve-Category name Invalid", "error");
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
						alert("Insert error!");
						swal("Insert Error!", "", "error");
					}else{
						
						
						var txtwidth = $("#servecategorynamepopup").textWidth()+55;
						var checkcls = $("#display-result-servecategory").siblings("input").val();
						 var box = "<div class='selected-category-box "+checkcls+" pull-left' style='width:"+txtwidth+"px'>";
						 box += "<input type='hidden' value='"+data.serve_category_id+"' />";
						 box += "<img class='pull-left icon-after-select' src='"+$("#dis_img_path").val()+"/uploadimages/real/icon/"+servecategory+"' />";
						 box += "<p class='text-serve-category-selected'>";
						 box += "<span>"+$("#servecategorynamepopup").val()+"</span>";
				 		 box += "<i class='fa fa-times close-item' style='margin-left:10px;'  aria-hidden='true'></i></p></div>";
				 		
				 		$("#serve-categories").append(box);
											 
				 		$('#serveCategoryModal').modal('hide');
						clearServeCategorySaveform();
						loadServeCategory(function(){
							progressbar.stop();
						});
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
/*================ clear form after save ===================*/

function clearShopForm(){
	
	/*--- cover ---*/
	coverimagename = "";		
	$("#uploadcover").val(null);
	
	/*--- logo ---*/
	logoimagename = "";		
	$("#uploadlogo").val(null);
	
	/*--- shop image detail ---*/
	arrnewfileimagename = [];
	shopphones = [];
	
	$(".error-selected-result").hide();
	$("#shopshortdes").val("");
	$("#shopdes").val("");
	$("#shopengname").val("");
	$("#shopkhname").val("");
	$("#logo_description").val("");
	$("#cover_description").val("");
	$("#shopshortdes").val("");
	$("#shopdes").val("");
	$("#shopemail").val("");
	$("#shopfb").val("");
	$("#shopinstagram").val("");
	$("#shopgoogleplus").val("");
	$("#shoptwitter").val("");
	$("#shopremark").val("");
	$("#shopstreetad").val("");
	$("#shopcapacity").val("");
	$("#lat-location").val("");
	$("#lng-location").val("");
	shoptimezone= "";
	
	$(".work-day").prop('checked', false);
	$("#allday").prop('checked', false);
	
	$("#phone-add-result").children().remove();
	$("#serve-categories").children().remove();
	$("#shop-facilities").children().remove();
	
	 var txt  = '<label class="gray-image-plus">';
	 	 txt += '<i class="fa fa-plus"></i>';
	 	 txt += '</label>';
	 	 txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 960 x 960 </p>';
	 	 txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add logo image </p>';
	$("#logo-upload-remove-icon").parent().hide();	
	$("#logo-upload-remove-icon").parent().siblings(".photo-display-wrapper").html(txt);
	$("#logo-upload-remove-icon").parent().siblings(".photo-remove-loading").show();
	$("#logo-upload-remove-fake").hide();
	$("#logo-remove-loading").hide();
	$("#logo_description").hide();
	
	$("#cover-upload-remove-icon").parent().hide();	
	 var txt1  = '<label class="gray-image-plus">';
	 	 txt1 += '<i class="fa fa-plus"></i>';
	 	 txt1 += '</label>';
	 	 txt1 += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 960 x 500 </p>';
	 	 txt1 += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add cover image </p>';
	$("#cover-upload-remove-icon").parent().siblings(".photo-display-wrapper").html(txt1);
	$("#cover-upload-remove-icon").parent().siblings(".photo-remove-loading").show();	
	$("#cover-upload-remove-fake").hide();
	$("#cover-remove-loading").hide();
	$("#cover_description").hide();	
}
/*================ end clear form after save ===================*/

function goodbye(e) {
	if (!validateLeavePage()) {
		if(navigator.appName == 'Microsoft Internet Explorer' ||  !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv 11/))){
			removeShopImageOnCondition();
		}else{
			if(!e) e = window.event;
		  	   //e.cancelBubble is supported by IE - this will kill the bubbling process.
		  	    e.cancelBubble = true;
		  	    e.returnValue = 'You sure you want to leave?'; //This is displayed on the dialog
		  	    //e.stopPropagation works in Firefox.
		  	 if (e.stopPropagation) {
		  	    e.stopPropagation();
		  	    e.preventDefault();
		  	 }
		}
		
		
	}
}
window.onbeforeunload=goodbye;
$( window ).unload(function() {     
    //--> Here
    removeShopImageOnCondition(); 
}); 

window.onunload = unloadPage;
function unloadPage()
{
	 removeShopImageOnCondition();
	 
} 
function removeShopImageOnCondition(){	
	if (arrnewfileimagename.length > 0) {		
		removeShopImageDetailFromServerMulti(arrnewfileimagename).success(function(data){
			arrnewfileimagename = [];
		});
	}
	if(logoimagename != "") 
		removeLogoImageFromServer();
	if(coverimagename != "") 
		removeCoverImageFromServer();	
	/*if(cuisineimgname != "") 
		removeCuisineImageFromServer();*/
	if(shopfacilityicon !="" )
		removeShopFacilityImageFromServer();
	if(servecategory != "") 
		removeServeCategoryImageFromServer();
}

