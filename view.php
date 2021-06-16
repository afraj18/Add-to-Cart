<?php 
session_start();
include('dbh/config.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('head.php');?>
    
</head>
<body>
<!-- navBar Start -->
<div class="text-white py-3 row" style="background-color: #0A2558;">
        <div class="col-md-6">
            <h1>&nbsp;&nbsp;View Product Details</h1>
        </div>        
        <div class="col-md-6 ">
            <a href="index.php" class="btn btn-dark btn-md m-2 float-right"><i class='bx bx-home' style='color:#ffffff'  ></i> Go Back To Front Page</a> 
            <a href="viewcart.php" class="btn btn-dark btn-md m-2 float-right"><i class='bx bx-cart' ></i>  Shopping Cart</a> 
        </div>
    </div>
       
        <!-- navBar End -->


<!-- <h1 class="text-center">Add to cart</h1> <hr>  -->

    
    
    <!-- <a href="index.php">Home</a> -->
    <?php 
    if(isset($_POST["addCart"])){
        if(isset($_SESSION["cart"])){
            $pid_array = array_column($_SESSION["cart"],'pid');
            if(!in_array($_GET['id'],$pid_array)){
                $index = count($_SESSION["cart"]);
                $item = array(
                    'pid' => $_GET['id'],
                    'pname' => $_POST['pname'],
                    'price' => $_POST['price'],
                    'qty' => $_POST['qty']
                );
    
                $_SESSION["cart"][$index] = $item; 
                echo "<script>alert('Product Added');</script>";
                header("location: viewcart.php");

            }
            else{
                    echo "<script>alert('Already Added');</script>";
            }

        }
        
    
        else{
            $item = array(
                'pid' => $_GET['id'],
                'pname' => $_POST['pname'],
                'price' => $_POST['price'],
                'qty' => $_POST['qty']
            );

            $_SESSION["cart"][0] = $item; 
            echo "<script>alert('Product Added');</script>";
            header("location: viewcart.php");

        }
    }

    if(isset($_GET['id'])){
        $sql = "SELECT * FROM product where ID='{$_GET["id"]}'";
        $res = $conn->query($sql);

        if($res -> num_rows > 0){
                $row = $res->fetch_assoc();
               echo "<form action='{$_SERVER["REQUEST_URI"]}' method='post'>
               <table class='table table-bordered text-center'>
                              <tr>
                                  <td colspan ='2'><img src='images/{$row['PIC']}' alt='Phone'   width='20%' class='image-responsive' >
                                  </td>
                              </tr>
                              <tr>
                                   <td>Product Name : </td>
                                  <td>
                                      <strong>{$row["PNAME"]}</strong>
                                  </td>
                              </tr>
                              <tr>
                              <td>Brand : </td>
                                  <td>
                                      {$row["BNAME"]}
                                  </td>
                              </tr>
                              <tr>
                              <td>Price : </td>
                                  <td>
                                      Rs. {$row["PRICE"]}.00 
                                  </td>
                              </tr>
                              <tr>
                              <td>Battery capacity : </td>
                                  <td>
                                      {$row["BATTERY"]}mAh
                                  </td>
                              </tr>
                              <tr>
                              <td>RAM : </td>
                                  <td>
                                      {$row["RAM"]}GB
                                  </td>
                              </tr>
                              <tr>
                              <td>Display Size : </td>
                                  <td>
                                      USD.{$row["DISPLAY"]}
                                  </td>
                              </tr>
                              <tr>
                                  <td>Enter Qty : </td>
                                  <td>
                                      <input type='text' name='qty' required>
                                      <input type='hidden' value='{$row["PNAME"]}' name='pname'>
                                      <input type='hidden' value='{$row["PRICE"]}' name='price'>                                  
                                    </td>
                              </tr>
                              <tr>
                              <td> </td>
                                  <td>
                                     <input type='submit' value='Add to Cart' name='addCart' class='btn btn-primary m-2'>
                                        <br> <span class='text-danger m-5'> Available Stock : {$row["STOCK"]}</span>                                  </td>
                              </tr>
                          </table>
               </form>";
               
        }
        else{
            header("location: index.php");
        }
    }
    else{
        header("location: index.php");
    }
    
    
    ?>



</body>
</html>

