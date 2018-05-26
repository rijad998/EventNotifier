<div class="sidebar-navigation">
	<div class="logo">
		<img src="<?php echo baseUrl() . "assets/eventNotifierLogo.png"?>">
	</div>
	<ul>
		<a href="<?php echo baseUrl();?>">
			<li>Dashboard</li>
		</a>
		<li data-toggle="modal" data-target="#inserCoffeShop">
			Insert coffe shop
		</li>
	</ul>	
</div>



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="inserCoffeShop" tabindex="-1" role="dialog" aria-labelledby="inserCoffeShopLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="inserCoffeShopLabel">Insert new coffe shop</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>

	      <div class="modal-body">
			  <form action="<?php echo baseUrl() . "/insertNewCoffeShop.php"; ?>" type="post">
		      	<div class="col-lg-4 col-xs-4 aq1">
			        <label> Coffe shop name: </label>
		        </div>
		      	<div class="col-lg-8 col-xs-8 aq1">
		        	<input type="text" id="coffeeName" name="coffeshopname">
			    </div>
		        <div class="clearfix"></div>

		      	<div class="col-lg-4 col-xs-4 aq1">
			        <label> Coffe shop address: </label>
		        </div>
		      	<div class="col-lg-8 col-xs-8 aq1">
		        	<input type="text"  id="coffeeAddress" name="coffeshopaddress">
			    </div>
		        <div class="clearfix"></div>

		      	<div class="col-lg-4 col-xs-4 aq1">
			        <label> Coffe shop phone: </label>
		        </div>
		      	<div class="col-lg-8 col-xs-8 aq1">
		        	<input type="text"  id="coffeePhone" name="coffeshopphone">
			    </div>
		        <div class="clearfix"></div>

		      	<div class="col-lg-4 col-xs-4 aq1">
			        <label> Coffe shop email: </label>
		        </div>
		      	<div class="col-lg-8 col-xs-8 aq1">
		        	<input type="text"  id="coffeeEmail" name="coffeshopemail">
			    </div>
		        <div class="clearfix"></div>
			  </form>
	      </div>
	      <label class="ajax-response"></label>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
	        <button onclick="insertToDb()" class="btn btn-primary">Add new</button>
	      </div>
	    </div>
	  </div>
</div>