
<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
      <meta charset = "utf-8"> 
      <title>CodeIgniter View Example</title> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   </head>
	
   <body> 
     sssssssssssssssssssssss
     <div id="div1">
     
     </div>
     <script>
     $.ajax({
       	  url: "/NhameyWebBackEnd/API/UserRestController/theSecond",
       	  type : "GET", 
       	  
          success: function(result){
        	  var json = JSON.stringify(result);
				var test = $.parseJSON(json);
              
          	 $("#div1").html(test);
     	  }
     }); 
     </script>
     
   </body>
	
</html>