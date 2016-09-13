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
$(".nham-dropdown-inputbox").on("focus keyup",function(){
	 
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

 });