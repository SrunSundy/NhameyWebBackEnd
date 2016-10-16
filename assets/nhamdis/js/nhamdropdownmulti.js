$(".nham-dropdown-inputbox-multi").on("focus keyup",function(){
 	var trigger = false;
 	$(this).parent().siblings(".nham-dropdown-detail").css("top", 34);
	$(this).parent().siblings(".nham-dropdown-detail").show();
	
	 $(document).on("mousedown",".nham-dropdown-multi-result",function(){	
		 console.log($(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".error-selected-result"));
		 $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".error-selected-result").css({
			 "height" : "0px !important",
		 	 "visibility" : "hidden"
		 });
		
		 trigger = true;	
		 var textlng = $(this).find("span.title").width()+50;
		 var selectedcls =  $(this).parent().siblings("input").val();
		 var boxlng = $("."+selectedcls).length;
		 var selectedval = $(this).find("input").val();
		 console.log(textlng);
		 var errormsg = ' <div class="error-selected-result"><p>ITEM IS SELECTED!</p></div>';
		 console.log($("."+selectedcls).length);
		 for(var i=0; i<boxlng; i++){
			 
			var val = $("."+selectedcls).eq(i).find("input").val();
			console.log(val);
			if(val == selectedval){
				trigger = false;
				 $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".error-selected-result").css({
					 "height" : "20px",
				 	 "visibility" : "visible"
				 });
				 
				
				return;
			}
		 }
		 var box = "<div class='selected-category-box "+selectedcls+" pull-left' style='width:"+textlng+"px'>";
		 box += "<input type='hidden' value='"+selectedval+"' />";
		 box += "<img class='pull-left icon-after-select' src='"+$(this).find("img").attr("src").trim()+"' />";
		 box += "<p class='text-serve-category-selected'>";
		 box += "<span>"+$(this).find("p").text().trim()+"</span>";
 		 box += "<i class='fa fa-times close-item' style='margin-left:10px;'  aria-hidden='true'></i></p></div>";
 		
 		 $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".serve-category-result").append(box);
		 $(this).parents(".nham-dropdown-detail").hide();
		 $(document).off("mousedown");	
		 			 
	});
	
	 $(document).on("click" , "i.close-item", function(){
		 
		 $(this).parents(".selected-category-box").remove();
	 });
	 $(".nham-dropdown-inputbox-multi").on("blur",function(){
 		 if(!trigger){
 			$(".nham-dropdown-detail").hide();	
 		 }		
	}); 

});