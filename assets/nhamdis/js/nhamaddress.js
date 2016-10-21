	function addMultiListers(param) {
			for(var i=0;i<param["events"].length;i++){
				param["element"].addEventListener(param["events"][i],function(){
						listAddress({"me": param["element"], 
									"name": param["name"], 
									"parent_id": param["parent_id"],
									"isList": param["isList"]});
				},false);
			}
	}
	
	function listAddress(param){
		var tb_data='<col width="5%"><col width="30%"><col width="25%"><col width="5%">';
		tb_data+='<tr><th>no</th><th>'+param["name"]+'</th><th>last updated</th><th>status</th><th>action</th></tr>';
		var value = document.getElementById("shop_"+param["name"]).value;
		var loadingimgsrc = "";
		$("#display_result_shop_"+param["name"]).html("<img src='"+loadingimgsrc+"'  style='padding:20px;'/> "); 
		
		$.ajax({
			 type: "GET",
			 url: "/NhameyWebBackEnd/API/ShopAddressRestController/getListShopAddressByNameCombo", 
			 data : {			 
					"address_type" : param["name"],
					"srchname" : value,
					"parent_id" : param["parent_id"],
					"limit" : 10		 	
			 },
			 success: function(data){
				data = JSON.parse(data);
				console.log(data);
				var typedis = '';
				if(data.length <= 0){
					typedis +='<div  class="nham-dropdown-noresult">';
					typedis +=' <p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>';
					typedis +='  Searching "'+cutString(value , 35)+'" has no Result!</p>';
					typedis +='</div>';
					typedis +='<div class="nham-dropdown-question">';
					typedis +='<p>Do you want to add "'+cutString(value , 20)+'" ?</p>';
					typedis +='</div>';
					$("#nham_dropdown_footer_shop_"+param["name"]).show();
				}else{								
					$("#nham_dropdown_footer_shop_"+param["name"]).hide();		
					for(var i=0 ; i<data.length ; i++){	
						var id= data[i][param["name"]+"_id"];
						var name=data[i][param["name"]+"_name"]; 
						var status= data[i][param["name"]+"_status"];
						var last_updated= data[i][param["name"]+"_last_update"];
						
						typedis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+ id +
						'" /><p><span class="title">'+ name +'</span></p></div>';
						if(param["isList"]){
							tb_data+='<tr id="row'+id+'"><th>'+ (i+1) +'</th><th><input id="txtname'+id+'" type="text" value="'+ name +
							'"></th><th>'+ last_updated + '</th>'+
							'</th><th><input id="txtstatus'+id+'" type="text" value="'+ status + 
							'"></th><th><input type="button" onclick="updateAddress(this,'+id+','+param["parent_id"]+')" class="'+param["name"]+'" value="save">'+
							'&nbsp;<input type="button" onclick="deleteAddress(this,'+id+')" class="'+param["name"]+'" value="delete"></th></tr>';
						}
					}
				}
				if(param["isList"])
					document.getElementById("tb_list").innerHTML=tb_data;
				document.getElementById("display_result_shop_"+param["name"]).innerHTML=typedis;
	   	 	 }
	   });
	}
	
	//=================
	function deleteAddress(me,id){
		
		var req_data = {
				"req_data" : {
					"address_type": me.className,
					"id": id
				}
			};
		
			$.ajax({
				type : "POST",
				url : "/NhameyWebBackEnd/API/ShopAddressRestController/deleteShopAddress",
				data : req_data,
				success : function(data){
					data = JSON.parse(data);
					console.log(data);
					if(data.is_insert == false){
						alert("error");
					}else{
						 document.getElementById("row"+id).style.backgroundColor="#f9112c";
						 location.reload();
					}					
				}
			});		
	}
	
	
	//==================
	 
	 function updateAddress(me,id,parent_id){
			var data_name = document.getElementById("txtname"+id).value;
			var status = document.getElementById("txtstatus"+id).value;
			var req_data = {
					"req_data" : {
						"address_type": me.className,
						"id": id,
						"data_name" : data_name,
						"parent_id" : parent_id,
						"status" : status,
						"admin_id" : 1,
					}
				};
			
				$.ajax({
					type : "POST",
					url : "/NhameyWebBackEnd/API/ShopAddressRestController/updateShopAddress",
					data : req_data,
					success : function(data){
						data = JSON.parse(data);
						console.log(data);
						if(data.is_insert == false){
							alert("error");
						}else{
							 document.getElementById("row"+id).style.backgroundColor="#5def34";
							 location.reload();
						}					
					}
				});		
	}

	//==========================
	function addAddress(param){
		var tastedata = {
				"req_data" : {
					"address_type" : param["name"] ,
					"data_name" : document.getElementById("shop_"+param["name"]).value,
					"parent_id" : param["parent_id"],
					"admin_id" : 1 
				}
		};
		
		$.ajax({
			type : "POST",
			url : "/NhameyWebBackEnd/API/ShopAddressRestController/insertShopAddress",
			data : tastedata,
			success : function(data){
				data = JSON.parse(data);
				console.log("return:"+data);
				if(data.is_insert == false){
					alert("error");
				}else{
					document.getElementById("selected_shop_"+param["name"]).value=data;
				}				
			}
		});
	}
	