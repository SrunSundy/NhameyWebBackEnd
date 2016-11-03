
var progressbar = {
		
	start : function(){
		var load_wrapper = '<div class="custom_nham_loading"style="width: 100%;height:100%;position:fixed;top:0;left:0;background:black;opacity:0.3;z-index:999999"></div>';
		
		var load_img = '<div class="custom_nham_loading_img" style="width: 100%;height:100%;position:fixed;top:0;left:0;z-index:9999999">'
			+ '<div id="start_progress_bar" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height:5px;" > </div>'
			+ '<img src="/NhameyWebBackEnd/assets/nhamdis/img/ring.svg" style="position:absolute;left:47%;top:40%;"/>'
			+ '</div>';
					
		$("body").append(load_wrapper);
		$("body").append(load_img);
	},
	stop : function(callback){
		$("body").find(".custom_nham_loading").remove();
		$("body").find(".custom_nham_loading_img").remove();
		if (typeof callback === "function") {
			 // Call it, since we have confirmed it is callable​
			callback();
		}
		
	} 
};