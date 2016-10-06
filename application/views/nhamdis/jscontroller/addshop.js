/*google map code*/  
var map;
var geocoder;
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
		placeMarker(event.latLng);
	});
																						
	var marker = new google.maps.Marker({
		position: mylocationmarker,
		map: map,
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
		$("#lat-location").val(location.lat());
		$("#lng-location").val(location.lng());
	}

	$("#detectlocation").on("click", function(){
		
		var delocation = {lat: parseFloat($("#lat-location").val()) , lng: parseFloat($("#lng-location").val())};
		getAddress(delocation);
		marker.setPosition(delocation);												
		map.panTo(delocation); 
		//map.setCenter(test);
		marker.setAnimation(google.maps.Animation.DROP);												
	});
									      
	function getAddress(latLng) {
		var address = "";
		geocoder.geocode( {'latLng': latLng}, function(results, status) {				
			console.log(results);	
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
google.maps.event.addDomListener(window, 'load', initialize)
/*end google map code*/									
 
	

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

/*load shop address section*/
loadCountryData();
function loadCountryData(){
	 $.ajax({
		type : "GET",
		url  : "/NhameyWebBackEnd/API/CountryRestController/getCountryCombo",
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.length > 0){
				$("#nham_country").children().remove();
				var country = '';
				for(var i=0 ; i< data.length; i++){
					if(i==0){
						country += '<option selected="selected" value="'+data[i].country_id+'">'+data[i].country_name+'</option>';
					}else{
						country +='<option value="'+data[i].country_id+'">'+data[i].country_name+'</option>';
					}
					
				}
				$("#nham_country").append(country);
				alert($("#nham_country option:selected").val());
				loadCityData($("#nham_country option:selected").val());
			}			
		}		
	 });
}

function loadCityData( countryid ){
	 $.ajax({
		type : "GET",
		url  : "/NhameyWebBackEnd/API/CityRestController/getCityCombo/"+countryid,
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.length > 0){
				$("#nham_city").children().remove();
				var city = '';
				for(var i=0 ; i< data.length; i++){
					if(i == 0){
						city +='<option selected="selected" value="'+data[i].city_id+'">'+data[i].city_name+'</option>';
					}else{
						city +='<option value="'+data[i].city_id+'">'+data[i].city_name+'</option>';
					}						
				}
				$("#nham_city").append(city);
				alert(city);
				alert($("#nham_city option:selected").val());
				loadDistrictData( $("#nham_city option:selected").val() );
			}				
		}		
	});
}

function loadDistrictData( cityid ){
	$.ajax({
		type : "GET",
		url  : "/NhameyWebBackEnd/API/DistrictRestController/getDistrictCombo/"+cityid,
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.length > 0){
				$("#nham_district").children().remove();
				var district = '';
				for(var i=0 ; i< data.length; i++){
					if(i == 0){
						district +='<option selected="selected" value="'+data[i].district_id+'">'+data[i].district_name+'</option>';
					}else{
						district +='<option value="'+data[i].district_id+'">'+data[i].district_name+'</option>';
					}						
				}
				$("#nham_district").append(district);
				loadCommuneData( $("#nham_district option:selected").val() );
			}			
		}		
	 });
}

function loadCommuneData( districtid ){
	 $.ajax({
		type : "GET",
		url  : "/NhameyWebBackEnd/API/CommuneRestController/getCommuneCombo/"+districtid,
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.length > 0){
				$("#nham_commune").children().remove();
				var commune = '';
				for(var i=0 ; i< data.length; i++){
					if(i == 0){
						commune +='<option selected="selected" value="'+data[i].commune_id+'">'+data[i].commune_name+'</option>';
					}else{
						commune +='<option value="'+data[i].commune_id+'">'+data[i].commune_name+'</option>';
					}						
				}
				$("#nham_commune").append(commune);
			}				
		}		
	});
}
/*end load shop address section*/  
$('#lat-location').keyup(function() {
	  //code to not allow any changes to be made to input field
	 // var boo = $(this).val().match(/[\d]/g,'');
	  //var filter = /[^\d\.]/g;
	 //$(this).val($(this).val().replace(/[^\d\.\-]/g,''));
	 $(this).val($(this).val().replace(/\d\-\d/,''));
	 // console.log(filter.test($(this).val()));
	 
});
 

/*phone adding*/
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
/*close phone adding*/

/*working day section*/
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
/*end working day section*/

/*facility section*/
$("#allfacilities").on("change", function(){
	if($(this).is(":checked")){		
		$(".shop-facility").prop('checked', true);
	}else{
		$(".shop-facility").prop('checked', false);
	}
});
$(".shop-facility").on("change", function(){
	
	if($(this).is(":checked")){
		var len = $("input.shop-facility:checked").length;
		if(len >= 5){
			$("#allfacilities").prop('checked', true);
		}
	}else{
		$("#allfacilities").prop('checked', false);
	}
});
function isCheckFacility( radioid ){
	var check = 0;
	if($("#"+radioid).is(":checked")){
		check = 1;
	}
	return check;
}
/*end facility section*/

 	   
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





$("#cover-upload-image").on("click",function(){	
	$("#coverupload").click();
});
$("#removelogoimage-cover").on("click",function(){
	removeCoverImageFromServer();
}); 
$("#cover-disable-cover").on("click", function(){
	$("#coverupload").val(null);
	$("#loading-wrapper-cover").hide();
	$("#cover-upload-image").removeClass("loading-box");
	var txt = '<label class="gray-image-plus">';
	txt += '  <i class="fa fa-plus"></i>';
	txt += '</label>';
	txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 700 x 500 </p>';            	
	txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add cover image </p>';
	$('#cover-upload-wrapper').html(txt);	
});
$("#coverupload").change(function(){
	uploadCover(this);
});
function uploadCover(input){
	if (input.files && input.files[0]) {
		var reader = new FileReader();
 		reader.onload = function (e) {
 			 upoloadCoverToServer();
		      var myimg ='<img  class="upload-shop-img" src="'+e.target.result+'" alt="your image" />';
		              $('#cover-upload-wrapper').html(myimg);
		}
		reader.readAsDataURL(input.files[0]);
	}else{
		 var txt  = '<label class="gray-image-plus">';
			 txt += '<i class="fa fa-plus"></i>';
			 txt += '</label>';
			 txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 700 x 500 </p>';
			 txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add cover image </p>';
		 $('#cover-upload-wrapper').html(txt);
	}
	
}
function removeCoverImageFromServer(){
	$("#removeloadingwrapper-cover").show();
	$.ajax({
		url : "/NhameyWebBackEnd/API/UploadRestController/removeShopSingleImage",
		type: "POST",
		data : {
			"removeimagedata":{
				"image_type" : "1",
				"imagename" : coverimagename
			}			
		},
		success: function(data){
			
			coverimagename="";
			$("#coverupload").val(null);
			$("#uploadimageremoveback-cover").hide();
			$("#removelogoimagewrapper-cover").hide();
			var txt = '<label class="gray-image-plus">';
				txt += '  <i class="fa fa-plus"></i>';
				txt += '</label>';
				txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> 500 x 500 </p>';            	
				txt += '<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add logo image </p>';
			$('#cover-upload-wrapper').html(txt);
			$("#removeloadingwrapper-cover").hide();
			$("#cover_description").hide();
		}
	});	
}
function upoloadCoverToServer(){
	var inputFile = $("#coverupload");
	$("#cover-upload-image").addClass("loading-box");
	$("#loading-wrapper-cover").show();
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
					coverimagename = data.filename;
					$("#loading-wrapper-cover").hide();
					$("#cover-upload-image").removeClass("loading-box");
					$("#uploadimageremoveback-cover").show();
					$("#removelogoimagewrapper-cover").show();
					$("#cover_description").show();
				}
				
			},
			xhr: function() {
				var xhr = new XMLHttpRequest();
				xhr.upload.addEventListener("progress", function(event) {
					if (event.lengthComputable) {
						var percentComplete = Math.round( (event.loaded / event.total) * 100 );
						 //console.log(percentComplete);
						
						$("#logoprogressbar-cover").css({width: percentComplete+"%"});
					};
				}, false);

				return xhr;
			}
		});
	} 
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
	removeShopImageDetailFromServer(imagename).success(function (data) {	
		
	});
	for(var i=0; i<arrnewfileimagename.length; i++){ 
		if(imagename == arrnewfileimagename[i]){
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
				    if(data.fileupload[i].is_upload == true){
				    	
				    		arrnewfileimagename.push( data.fileupload[i].filename);
				    		  
					}else{
						alert(data.fileupload[i].filename+" :: "+data.fileupload[i].message);
					}	
					console.log(data.fileupload[i].filename);

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
		  $(".file-preview-frame").eq(i).find("input.img-new-name").val(arrnewfileimagename[i]);
	 }	
	 setTimeout(function(){checkIfSetimgNameFail();} , 300);
}
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





function getAddress(){//name of country, city........

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
        	"is_validate" : validateNull("selectedshoptype", 0 , "shoptypename"),
        	"message" : "Shop Type" 
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
	for(var i=0; i<validate.length; i++){
		if(validate[i].is_validate == false){
			alert(validate[i].message+" is Invalid!");
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
		validateLeaveNull("selectedbranch"),
		validateLeaveNull("selectedshoptype"),
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
				"cuisine_id" : $("#selectedcuisine").val(),
				"shop_type_id" : $("#selectedshoptype").val(),
				"shop_serve_type" : $("#shopservertype").val(),
				"shop_short_description": $("#shopshortdes").val() ,
				"shop_description" : $("#shopdes").val(),
				"shop_address": getAddress(),	
				"shop_phone": shopphones.toString().replace(/[,]/g,"|").trim(),
				"shop_email":$("#shopemail").val(),
				"shop_working_day": countWorkingday().toString().replace(/[,]/g,"|").trim(),
				"shop_opening_time": $("#shopopentime").val(),
				"shop_close_time": $("#shopclosetime").val(),
				"shop_has_wifi" : isCheckFacility("wifi"),
				"shop_has_aircon" : isCheckFacility("aircon"),
				"shop_has_reservation" : isCheckFacility("reserve"),
				"shop_has_bikepark" : isCheckFacility("parking"),								
				"shop_has_tax": isCheckFacility("taxinvoice"),
				"shop_map_address": {
					"lat" : $("#lat-location").val(),
					"lng" : $("#lng-location").val()
				},				
				"shop_social_media": {
					"facebook" : $("#shopfb").val(),
					"instagram" : $("#shopinstagram").val(),
					"googleplus" : $("#shopgoogleplus").val(),
					"twitter": $("#shoptwitter").val()
				},
				"shop_remark": $("#shopremark").val(),
			},
			"shop_image_detail": getImageNameAndDetail()
						
		}	
	};
	return shopdata;
}

$("#saveshop").on("click",function(){
	 console.log(getDataToInsert());
	 if(!inputValidation()){
		 $.ajax({
			 type: "POST",
			 url: "/NhameyWebBackEnd/API/ShopRestController/insertShop", 
			 data: getDataToInsert(),
			 success: function(data){
				 data = JSON.parse(data);
				 console.log(data);   
				 if(data.is_insert){
					 alert(data.message);
				 }else{
					 alert(data.message);
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


$("#branchname").on("focus keyup",function(){
	
	var srchbranchname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/BranchRestController/getBranchByNameCombo", 
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
});
$("#yesbranch").on("mousedown",function(){
	var branchdata = {
		"BranchData" : {
			"branch_name" : $("#branchname").val(),
			"branch_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/BranchRestController/insertBranch",
		data : branchdata,
		success : function(data){
			 data = JSON.parse(data);
			console.log(data);
			if(data.is_insert == false){
				alert("error");
			}else{
				$("#selectedbranch").val(data.branch_id);
			}
		}
	});
});



$("#cuisinename").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
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
					 dis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].cuisine_id+'" /><p><span class="title">'+data[i].cuisine_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result-cuisine").html(dis); 					 
   	 	 }
   });
});
$("#yescuisine").on("mousedown",function(){
	
	$("#cuisinebtnpop").click();
	$("#cuisinenamepopup").val($("#cuisinename").val());
	var cuisinedata = {
		"CuisineData" : {
			"cuisine_name" : $("#cuisinename").val(),
			"cuisine_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/CuisineRestController/insertCuisine",
		data : cuisinedata,
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.is_insert == false){
				alert("Insert error!");
			}else{
				//alert(data);
				$("#selectedcuisine").val(data.cuisine_id);
			}
			
		}
	});
});



$("#shoptypename").on("focus keyup",function(){
	var srchname = $(this).val();
	var loadingimgsrc = "<?php echo base_url() ?>application/views/nhamdis/img/nhamloading.gif";
	$("#display-result-shoptype").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> "); 
	$.ajax({
		 type: "GET",
		 url: "/NhameyWebBackEnd/API/ShopTypeRestController/getShopTypeByNameCombo", 
		 data : {
			"srchname" : srchname,
			"limit" : 10
		 },
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);
			 var dis = '';
			if(data.length <= 0){
				/* dis +='<div  class="nham-dropdown-noresult">';
				dis +=' <p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>';
				dis +='  Searching "'+cutString(srchname , 15)+'" has no Result!</p>';
				dis +='</div>';
				dis +='<div class="nham-dropdown-question">';
				dis +='<p>Do you want to register "'+cutString(srchname , 20)+'" as a new branch?</p>';
				dis +='</div>'; */
				$("#text-search-shoptype-dis1").html(cutString(srchname , 35));
				$("#text-search-shoptype-dis2").html(cutString(srchname , 20));
				dis +="<div class='no-data-wrapper' align='center' style='padding-bottom:4px;'>";
				dis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
				dis +="  <span class='no-data-text'>No Record Found!</span>";
				dis +="</div>";
				$("#display-searching-text_shoptype").show();
				$("#nham-dropdown-footer-shoptype").show();
			}else{	
				$("#display-searching-text_shoptype").hide();
				$("#nham-dropdown-footer-shoptype").hide();		
				 for(var i=0 ; i<data.length ; i++){			
					 dis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].shop_type_id+'" /><p><span class="title">'+data[i].shop_type_name+'</span></p></div>';
				 }				
				
			}
			$("#display-result-shoptype").html(dis); 					 
   	 	 }
   });
});
$("#yesshoptype").on("mousedown",function(){

	$("#shoptypebtnpop").click();
	var shoptypedata = {
		"ShoptypeData" : {
			"shop_type_name" : $("#shoptypename").val(),
			"shop_type_remark": ""
		}
	};
	$.ajax({
		type : "POST",
		url : "/NhameyWebBackEnd/API/ShopTypeRestController/insertShopType",
		data : shoptypedata,
		success : function(data){
			data = JSON.parse(data);
			console.log(data);
			if(data.is_insert == false){
				alert("Insert error!");
			}else{
				//alert(data);
				$("#selectedshoptype").val(data.shop_type_id);
			}
			
		}
	});
});


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
}

