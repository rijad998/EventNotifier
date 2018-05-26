function insertToDb(){
	var varCoffeeName = document.getElementById("coffeeName").value;
	var varCoffeeAddress = document.getElementById("coffeeAddress").value;
	var varCoffeeEmail = document.getElementById("coffeeEmail").value;
	var varCoffeePhone = document.getElementById("coffeePhone").value;
	$.ajax({
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
	});
}
