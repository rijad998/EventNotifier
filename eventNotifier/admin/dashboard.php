<div class"container">
    <table id="coffeeShopsTable" class="display text-center">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Address</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phone</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "eventnotifier";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }        $sql = "SELECT * FROM coffeshops";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
                    <tr class="coffeeTableRow" id="<?php echo $row['id']?>">
                        <td class="updateName-<?php echo $row['id'];?>"> 
                            <?php echo $row['coffe_shop_name']; ?>
                        </td>
                        <td class="updateAddress-<?php echo $row['id'];?>">
                            <?php echo $row['coffe_shop_address']; ?>
                        </td>   
                        <td class="updatePhone-<?php echo $row['id'];?>">
                            <?php echo $row['coffe_shop_phone']; ?>
                        </td>
                        <td class="updateEmail-<?php echo $row['id'];?>">
                            <?php echo $row['coffe_shop_email']; ?>
                        </td>
                        
                        <td class="text-center">
                            <button type="button" class="updateShop" data-toggle="modal" data-target="#coffeShop<?php echo $row['id'];?>">
                                <i class="fas fa-edit"></i>
                            </button>                        
                            <div class="modal fade" id="coffeShop<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center" id="exampleModalLabel"><?php echo $row['coffe_shop_name'];?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label class="updateShopLabel">Name</label>
                                        <input type="text" class="updateCoffeShopInput" id="updateCoffeeShopName-<?php echo $row['id']; ?>" value="<?php echo $row['coffe_shop_name']?>">
                                        <div class="clearfix"></div>

                                        <label class="updateShopLabel">Address</label>
                                        <input type="text" class="updateCoffeShopInput" id="updateCoffeeShopAddress-<?php echo $row['id']; ?>" value="<?php echo $row['coffe_shop_address']?>">
                                        <div class="clearfix"></div>
                                        
                                        <label class="updateShopLabel">Phone</label>
                                        <input type="text" class="updateCoffeShopInput" id="updateCoffeeShopPhone-<?php echo $row['id']; ?>" value="<?php echo $row['coffe_shop_phone']?>">
                                        <div class="clearfix"></div>

                                        <label class="updateShopLabel">Email</label>
                                        <input type="text" class="updateCoffeShopInput" id="updateCoffeeShopEmail-<?php echo $row['id']; ?>" value="<?php echo $row['coffe_shop_email']?>">
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="updateShop(<?php echo $row['id']?>)" >Save changes</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        
                        <td class="text-center">
                            <button class="deleteShop" onclick="deleteShop(<?php echo $row['id']?>)"> 
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                <?php }
            } else {
                echo "0 results";
            }
        ?>
        </tbody>
    </table>
</div>
<script>
    jQuery(document).ready( function () {
        jQuery('#coffeeShopsTable').DataTable();
    } );
</script>