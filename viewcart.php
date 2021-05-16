
<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <?php include('head.php');?>
</head>
<body>
<h1>Cart</h1>
    <div class="container">
        <div class="row">
            <a href="index.php">Home</a> <br> 
          
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
                foreach($_SESSION['cart'] as $keys=>$values){
                    $amount = $values["qty"] * $values['price'] ;
                    $total  += $amount;
                    echo "
                    <tr>
                    <td>{$values["pname"]}</td>
                    <td>USD. {$values['price']}</td>
                    <td>{$values["qty"]}</td>
                    <td>USD. {$amount}</td>
                    <td><a href='viewcart.php?del={$values["pid"]}'>Remove</a></td>
                    
                    </tr>";
                }
                echo "<tr>
                <td colspan='3'><strong>Grand Total</strong></td>
                
                <td>{$total}</td>
                </tr>";
            }
            else{
                echo "<script>alert('Please select a product');</script>";
                header("location: index.php");
            }
            ?>
            </table>
        </div>
    </div>
</body>
</html>

