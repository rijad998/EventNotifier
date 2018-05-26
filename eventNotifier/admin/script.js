function insertToDb(){
	var varCoffeeName = document.getElementById("coffeeName").value;
	var varCoffeeAddress = document.getElementById("coffeeAddress").value;
	var varCoffeeEmail = document.getElementById("coffeeEmail").value;
	var varCoffeePhone = document.getElementById("coffeePhone").value;
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var id = this.responseText;
			var updateButton ='<button type="button" class="updateShop" data-toggle="modal" data-target="#'+ id +'"><i class="fas fa-edit"></i></button>';
			var deleteButton ='<button class="deleteShop" onclick="deleteShop('+ id +')"> <i class="fas fa-trash-alt"></i></button>';
			var result = `
			<tr class="coffeeTableRow" id="`+id+`">
				<td>` + varCoffeeName + `</td>
				<td>` + varCoffeeAddress + `</td>
				<td>` + varCoffeePhone + `</td>
				<td>` + varCoffeeEmail + `</td>
				<td>` + updateButton + `</td>
				<td>` + deleteButton + `</td>
			</tr>`;
			jQuery("#coffeeShopsTable").find("tbody").append(result);

		}
	};
	xmlhttp.open("GET", "insertNewCoffeShop.php?coffeeName="+ varCoffeeName + 
												"&coffeeAddress=" + varCoffeeAddress + 
												"&coffeePhone=" + varCoffeePhone + 
												"&coffeeEmail=" + varCoffeeEmail , true);
	xmlhttp.send();

	/*$.ajax({
	    url: "insertNewCoffeShop.php",
	    method:'POST',
	    data:{
	        coffeeName : varCoffeeName,
	        coffeeAddress : varCoffeeAddress,
	        coffeePhone : varCoffeePhone,
	        coffeeEmail : varCoffeeEmail
	    },
	   success:function(data){
		   jQuery(".ajax-response").text("Coffee shop added successfuly");
	   }
	});*/
}
function updateShop(id){
	console.log(id);
	var name = document.getElementById("updateCoffeeShopName-" + id).value;
	var address = document.getElementById("updateCoffeeShopAddress-" + id).value;
	var phone = document.getElementById("updateCoffeeShopPhone-" + id).value;
	var email = document.getElementById("updateCoffeeShopEmail-" + id).value;
	
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                jQuery(".updateName-"+id).text(name);
                jQuery(".updateAddress-"+id).text(address);
                jQuery(".updatePhone-"+id).text(phone);
                jQuery(".updateEmail-"+id).text(email);
            }
        };
        xmlhttp.open("GET", "updateCoffeShop.php?id="+ id + "&name=" + name + "&address=" + address + "&phone=" + phone + "&email=" + email , true);
	xmlhttp.send();
	/*$.ajax({
	    url: "updateCoffeShop.php",
	    method:'POST',
	    data:{
	        coffeeId : id,
	        coffeeName : name,
	        coffeeAddress : address,
	        coffeePhone : phone,
	        coffeeEmail : email
	    },
	   success:function(data){
	       console.log("APDEJTOVANO DEDEEEEEEEEEEEEE MIIIII");
	   }
	});*/
}

function deleteShop(id){
	$.ajax({
	    url: "deleteShop.php",
	    method:'POST',
	    data:{
	        idValue : id
	    },
	   success:function(data){
			jQuery("#"+id).css("opacity","0");
			setTimeout(function(){
				jQuery("#"+id).css("display","none");
			},250)
			console.log("DELETED: " + id);
	   }
	});
}





















