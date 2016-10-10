function cutString( str , len ){
	var strm = "";
	if(str.length >= len){
		strm = str.substring(0, len)+".....";
	}else{
		strm = str; 
	}
	return strm;
}