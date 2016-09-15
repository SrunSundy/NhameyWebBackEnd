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
$(".nham-dropdown-inputbox").on("focus keyup",function(){
	 	var trigger = false;
		$(this).parent().siblings(".nham-dropdown-detail").show();
		 $(document).on("mousedown",".nham-dropdown-result",function(){		
			 trigger = true;			 
			  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".nham-dropdown-inputbox").val($(this).find("p").text().trim());
			  $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".selectedbrandid").val($(this).find("input").val());
			  $(this).parents(".nham-dropdown-detail").hide();
			 			 
		});
		 $(".nham-dropdown-inputbox").on("blur",function(){
	 		 if(!trigger){
	 			$(".nham-dropdown-detail").hide();	
	 		 }		
		}); 

});