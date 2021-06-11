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


<div class="container">
<h1 class="text-center">Add to cart in PHP</h1> <hr> 
    <div class="row">
    
    <div class="col-md-3 col-sm-4 col-lg-3">
    <a href="index.php">Home</a>
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
                                  <td colspan ='2'><img src='images/{$row['PIC']}' alt='Phone'   width='75%' class='image-responsive' >
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
                                      USD.{$row["PRICE"]}
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
                                     <input type='submit' value='add to Cart' name='addCart' class='btn btn-success'>
                                  </td>
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
    </div>
    </div>
</div>



</body>
</html>

