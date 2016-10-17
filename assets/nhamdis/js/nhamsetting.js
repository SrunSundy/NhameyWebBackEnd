function cutString( str , len ){
	var strm = "";
	if(str.length >= len){
		strm = str.substring(0, len)+".....";
	}else{
		strm = str; 
	}
	return strm;
}
$.fn.textWidth = function(text, font) {
    if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
    $.fn.textWidth.fakeEl.text(text || this.val() || this.text()).css('font', font || this.css('font'));
    return $.fn.textWidth.fakeEl.width();
};