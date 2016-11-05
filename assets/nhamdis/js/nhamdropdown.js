	//add event handler to hide the `txtAddGenreContainer` element when the document is clicked
	 /*  $(document).on('click', function () {
	      var $tar = $(".nham-dropdown-detail");//UPDATE
	    	  $tar.hide();
	      
	  }); */
	
	  //add event handler to the `addGenreFinal` and `newGenreTxt` elements to stop the click event from bubbling up the document
	  /* $('.nham-dropdown-detail , .nham-dropdown-inputbox').on('click', function (event) {
	      event.stopPropagation();
	  });
 */
/*$(".nham-dropdown-inputbox").on("focus keyup",function(){
	 //  $(".nham-dropdown-detail").css("max-height", $(".nham-dropdown-detail").height());
		//console.log($(this).siblings(".nham-dropdown-detail").find(".nham-dropdown-result").length);
		var row = $(this).siblings(".nham-dropdown-detail").find(".nham-dropdown-result").length		
		if(row <= 0){
			$(this).siblings(".nham-dropdown-detail").find(".display-result-wrapper").html("<h5>No Data to display!</h5>");
			$(this).siblings(".nham-dropdown-detail").find(".nham-dropdown-result-footer").show();
		}
		if( row > 7){
			$(this).siblings(".nham-dropdown-detail").find(".nham-dropdown-result-wrapper").addClass("nham-dynamic-height");
			$(this).siblings(".nham-dropdown-detail").find(".nham-dropdown-result-footer").hide();
		}else{
			$(this).siblings(".nham-dropdown-detail").find(".nham-dropdown-result-wrapper").removeClass("nham-dynamic-height");
			
		}
	 	var trigger = false;
		$(this).siblings(".nham-dropdown-detail").show();
		 $(".nham-dropdown-result").on("mousedown",function(){		
			 trigger = true;
			  $(this).siblings().removeClass("add-background");
			  $(this).addClass("add-background");
			  $(this).parents(".nham-dropdown-detail").siblings(".nham-dropdown-inputbox").val($(this).text().trim());
			  $(this).parents(".nham-dropdown-detail").hide();
			 
		});
		 $(".nham-dropdown-inputbox").on("blur",function(){
	 		 if(!trigger){
	 			$(".nham-dropdown-detail").hide();	
	 		 }		
		}); 

 });*/
/*$(".nham-dropdown-inputbox").on("focus keyup",function(){
	 	var trigger = false;
		$(this).parent().siblings(".nham-dropdown-detail").show();
		 $(document).on("mousedown",".nham-dropdown-result",function(){		
			 trigger = true;
			 console.log("No icon");
			  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".nham-dropdown-inputbox").val($(this).find("p").text().trim());
			  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".selectedid").val($(this).find("input").val());			  
			  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".nham-dropdown-inputbox").attr('disabled','disabled');
			  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".font-icon-cross").remove();
			  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").append("<i class='fa fa-times font-icon-cross'  aria-hidden='true'></i>");
			  $(this).parents(".nham-dropdown-detail").hide();
			  $(document).off("mousedown");			 
		});
		 $(document).on("click",".font-icon-cross", function(){		
			 $(this).siblings(".nham-dropdown-inputbox").removeAttr('disabled');
			 $(this).siblings(".selectedid").val("");
			 $(this).siblings(".nham-dropdown-inputbox").val("");
			 $(this).remove();
		 });
		 $(".nham-dropdown-inputbox").on("blur",function(){
	 		 if(!trigger){
	 			$(".nham-dropdown-detail").hide();	
	 		 }		
		}); 

});*/

$(".nham-dropdown-inputbox").on("focus",function(){
 	var trigger = false;
	$(this).parent().siblings(".nham-dropdown-detail").show();
	 $(document).on("mousedown",".nham-dropdown-result",function(){		
		 trigger = true;	
		 console.log("icon");
		  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".nham-dropdown-inputbox").val($(this).find("p").text().trim());
		  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".selectedid").val($(this).find("input").val());	
		  
		  if($(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".icon-input").length > 0){
			  console.log("there is");
			  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".icon-input").attr("src",$(this).find("img").attr("src").trim());
		  }
		  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".nham-dropdown-inputbox").attr('disabled','disabled');
		  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".font-icon-cross").remove();
		  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").append("<i class='fa fa-times font-icon-cross'  aria-hidden='true'></i>");
		 
		  $(this).parents(".nham-dropdown-detail").hide();
		  $(document).off("mousedown");	
		 			 
	});
	 $(document).on("click",".font-icon-cross", function(){		
		 $(this).siblings(".nham-dropdown-inputbox").removeAttr('disabled');
		 $(this).siblings(".selectedid").val("");
		 $(this).siblings(".nham-dropdown-inputbox").val("");
		 if( $(this).siblings(".icon-input-wrapper").length > 0){
			  console.log("there is in crossing click");
			 $(this).siblings(".icon-input-wrapper").find("img").attr("src",$(this).siblings(".icon-input-wrapper").find("input").val());
		 }	
		 $(this).remove();
		 
	 });
	 $(".nham-dropdown-inputbox").on("blur",function(){
 		 if(!trigger){
 			$(".nham-dropdown-detail").hide();	
 		 }		
	}); 

});