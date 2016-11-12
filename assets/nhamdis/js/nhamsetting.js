function cutString(str, len) {
	var strm = "";
	if (str.length >= len) {
		strm = str.substring(0, len) + ".....";
	} else {
		strm = str;
	}
	return strm;
}
$.fn.textWidth = function(text, font) {
	if (!$.fn.textWidth.fakeEl)
		$.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
	$.fn.textWidth.fakeEl.text(text || this.val() || this.text()).css('font',
			font || this.css('font'));
	return $.fn.textWidth.fakeEl.width();
};

var ENUM_DAY = {
	1 : {
		full : "MONDAY",
		cut : "MON"
	},
	2 : {
		full : "TUESDAY",
		cut : "TUE"
	},
	3 : {
		full : "WEDNESDAY",
		cut : "WED"
	},
	4 : {
		full : "THURSDAY",
		cut : "THU"
	},
	5 : {
		full : "FRIDAY",
		cut : "FRI"
	},
	6 : {
		full : "SATURDAY",
		cut : "SAT"
	},
	7 : {
		full : "SUNDAY",
		cut : "SUN"
	}
};