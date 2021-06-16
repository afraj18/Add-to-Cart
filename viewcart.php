
<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <?php include('head.php');?>
</head>

<style>
  
</style>
<body>
<!-- navbarStart -->
    <div class="text-white py-3" style="background-color: #0A2558;">
        <h1>&nbsp;&nbsp;Manage Your Cart</h1>
    </div>
        <a href="index.php" class="btn btn-dark btn-md m-2"><i class='bx bx-home' style='color:#ffffff'  ></i> Go Back To Front Page</a> 
        
<!-- navBar End -->

    <div class="container">
        <div class="row mt-2">
           
          
            <table class="table table-bordered">
            <tr>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Remove</th>
            </tr>
            <?php 
            if(isset($_GET['del'])){
                foreach($_SESSION['cart'] as $keys => $values ){
                    if($values['pid']==$_GET['del']){
                        unset($_SESSION['cart'][$keys]);
                    }
                }
            }
            ?>
            <?php 
            if(!empty($_SESSION['cart'])){
                $total = 0;
                $qty = 0;
               
                foreach($_SESSION['cart'] as $keys=>$values){
                    $amount = $values["qty"] * $values['price'] ;
                    $total  += $amount;
                    $qty +=1;
                    
                    echo "
                    <tr>
                    <td>{$values["pname"]}</td>
                    <td>USD. {$values['price']}</td>
                    <td>{$values["qty"]}</td>
                    <td>Rs.{$amount}.00</td>
                    <td><a href='viewcart.php?del={$values["pid"]}' class='btn btn-danger btn-sm'>Remove</a></td>
                    
                    </tr>";
                }
                echo "<span class='m-3 text-dark'>Total number items you added : <button class='btn btn-secondary btn-sm'>{$qty}</btn></span>";
                echo "<tr>
                
                <td colspan='3'><strong>Grand Total</strong></td>
                <td>Rs.{$total}.00</td>

                </tr>";
            }
            else{
                echo "<script>alert('Please select a product');</script>";
                //header("location: index.php");
            }
            ?>
            </table>
        </div>
    </div>
</body>
</html>

