var checkHasCover = true;
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

/*$(".menu-ul li.item").on("click", function(){	
	
	$(this).find("form").submit();	
});*/
