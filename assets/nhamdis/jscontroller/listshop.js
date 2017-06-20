		var input = {
    		"row" : $("#shop-row-num").val(),
			"page" : 1,
			"whole_search" : $("#whole-search").val()
	    };	
	    				
	    loadShopDataToTable();
	   
	    $(document).ready(function(){
	    	
	    	$(".category-option").select2({ placeholder: "Select a serve category"});
			$(".country-option").select2({ placeholder: "Select a country" });
			$(".city-option").select2({ placeholder: "Select a city" });
	    	$(".district-option").select2({ placeholder: "Select a district" });
	    	$(".commune-option").select2({ placeholder: "Select a commune" });
			
	    	$("span.select2-selection").css({ "height":"34px","border-radius" : "0","border":"1px solid #ccc"});
		    
	    });

	    $('#whole-search').keypress(function (e) {
		    
	    	if (e.which == 13) {
	    		$("#btn-whole-search").click();
	    	    return false;    //<---- Add this line
	    	}
	    });

	    function loadShopDataToTable(){

	    	progressbar.start();
	    	$.ajax({
	    		type : "POST",
	    		url : $("#base_url").val()+"API/ShopRestController/listShop",
	    		contentType : "application/json",
				data : JSON.stringify({
		    		"display-setting" : input
			    }),
	    		success : function(data){

	    			data = JSON.parse(data);
	    			
	    			var total_page = data.total_page;
	    			var showvisible = 5;
	    			$("#display-shop-result").children().remove();
	    			$("#shop-total-record").html(data.total_record);
	    			if( data.response_data.length > 0){	    				
		    			$("#display-shop-table").tmpl(data.response_data).appendTo("#display-shop-result");
							    					    			
		    		}else{
						
						total_page = 1;
						
			    	}
										 
	    			$('#pagi-display').bootpag({
		    			total : total_page, 
		    			maxVisible: showvisible, 
		    			leaps: true,
	    		        firstLastUse: true,
	    		        first: '&#8592;',
	    		        last: '&#8594;',
	    		        wrapClass: 'pagination',
	    		        activeClass: 'active',
	    		        disabledClass: 'disabled',
	    		        nextClass: 'next',
	    		        prevClass: 'prev',
	    		        lastClass: 'last',
	    		        firstClass: 'first'
		    		});
	    			progressbar.stop();	
	    			   			    			
	    		},
				xhr: function() {
					var xhr = new XMLHttpRequest();
					xhr.upload.addEventListener("progress", function(event) {
						if (event.lengthComputable) {
							var percentComplete = Math.round( (event.loaded / event.total) * 100 );
							 //console.log(percentComplete);
							
							$("#start_progress_bar").css({width: percentComplete+"%"});
								
						};
					}, false);

					return xhr;
					
				}
	    	});

		}

	    function updateShopStatus( status , shopid , callback){

		   	progressbar.start();   	
	    	$.ajax({
				type : "POST",
				url : $("#base_url").val()+"API/ShopRestController/toggleShop",
				contentType : "application/json",
				data :  JSON.stringify({
					"resq_data" : {
						"shop_id" : shopid,
						"shop_status" : status
					}					
				}),
				success : function(data){
					data = JSON.parse(data);
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


		function generateIdWithShopId(text,shopid){
			
			return text+shopid;
		}
		
		function dynamicColor(isopen, obj, delayclose, delayopen ){
			if(isopen == "1") {
				setTimeout(function(){ 
					$("#"+obj).css("color","#F44336"); 
				}, delayclose);
				return "color:#4CAF50";
			}
			else{
				setTimeout(function(){ 
					$("#"+obj).css("color","#4CAF50"); 
				}, delayopen);
				return "color:#F44336";
			} 
		}

		function checkShopStatus(status){

			if(status == "1"){
				return "checked";
			}else{
				return "";
			}
		}
		
		function addSrcLogoimg( image ){
			return $("#base_url").val()+"uploadimages/logo/small/"+image;
		}

		function trimString( string, startindex , endindex ){	
			if(!string) return string;
			return string.substring(startindex , endindex);
		}

		$(document).on("click", ".toggleshop", function(){

			var shopid = $(this).parents("tr").children("td").eq(0).find("input").val();
			
			if($(this).is(":checked")){
				$(this).prop('checked', false);
				updateShopStatus( 1 ,shopid , function(){
					$("#toggleshop"+shopid).prop('checked', true);
					swal("Shop is updated!", "This shop will be visible for clients", "success"); 
				});
				/* $(this).prop('checked', false);				
				
				swal({
					  title: "Are you sure?",
					  text: "This shop will be seen by the clients",
					  type: "warning",
					  showCancelButton: true,
					  confirmButtonColor: "#DD6B55",
					  confirmButtonText: "Yes, delete it!",
					  closeOnConfirm: false
				},
				function(isConfirm){
					if (isConfirm) {	 */											
						
				/* 	}
					
				}); */
			}else{
				$(this).prop('checked', true);
								
				swal({
					  title: "Are you sure?",
					  text: "The client will not be able to see this shop",
					  type: "warning",
					  showCancelButton: true,
					  confirmButtonColor: "#DD6B55",
					  confirmButtonText: "Yes",
					  closeOnConfirm: false
				},
				 function(isConfirm) {
			        if (isConfirm) {				       			        	
			        	updateShopStatus( 0 ,shopid , function(){
			        		$("#toggleshop"+shopid).prop('checked', false);								
				        	swal("Shop is updated!", "The client will not be able to view this shop", "success"); 
				        });					 
			        } else {
			            
			        }
			    });
			}
			
			
		});

		function formBaseUrl(){
			return $("#base_url").val()+"MainController/updateshop";
		}
		
		$(document).on("click", ".shop-edit", function(){

			var shopid = $(this).parents("tr").children("td").eq(0).find("input").val();
			location.href= $("#base_url").val()+"MainController/updateshop/"+shopid;	
		});
		
		$('#pagi-display').bootpag().on("page", function(event, /* page number here */ num){
		    input["page"] = num;	    	
		    loadShopDataToTable();
		});
		    
		$("#btn-whole-search").on("click", function(){

			$('#pagi-display').bootpag({page : '1' });
			
			input["whole_search"] = $("#whole-search").val();
			input["page"] = 1;			
			loadShopDataToTable();
		});
		
		$("#shop-row-num").on("change", function(){

			$('#pagi-display').bootpag({page : '1' });

			input["page"] = 1;
			input["row"] = $(this).val();
						
			loadShopDataToTable();
		});
		
    	$('#reservationtime').daterangepicker({
    		
             
             timePicker: false,
             buttonClasses: ['btn btn-default'],
             applyClass: 'btn-small btn-danger',
             cancelClass: 'btn-small',
             format: 'DD/MM/YYYY',
             
        });
		$("#advance-search-btn-down").on("click", function(){
			
			$(this).hide();
			$("#advance-search-btn-up").show();
			$("#advance-search-box").slideDown();
			$("#normal-search-box").slideUp();
			$("#shop-data-detail").slideUp();
			
		});

		$("#advance-search-btn-up").on("click", function(){
			
			$(this).hide();
			$("#advance-search-btn-down").show();
			$("#advance-search-box").slideUp();
			$("#normal-search-box").slideDown();
			$("#shop-data-detail").slideDown();
			
		});