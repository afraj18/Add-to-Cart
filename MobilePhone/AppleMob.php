<!DOCTYPE html>
<html>
<head>
    <?php include('../head.php');?>

<!-- navbarStart -->
<div class="text-white py-3" style="background-color: #0A2558;">
        <h1>&nbsp;&nbsp;Product Categories</h1>
    </div>
        <a href="../index.php" class="btn btn-dark btn-md m-2"><i class='bx bx-home' style='color:#ffffff'  ></i> Go Back To Front Page</a> 
<!-- navBar End -->


<?php include('../head.php');?>
<div class="row"> 
<?php include('../dbh/config.php');
        $sql = "SELECT * FROM product where BNAME = 'Apple'";
        $res = $conn->query($sql);

        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<div class="col-md-3   text-center">
                <img src="../images/'.$row['PIC'].'" alt="" class="image-responsive " height="55%" width="65%"> <br><br>
                <p><strong>'.$row['PNAME'].'</strong></p>
                <h5>USD . '.$row['PRICE'].'</h5>
                <p><a href="view.php?id='.$row['ID'].'" class="btn btn-dark form-control">View Item</a></p>
            </div>';
        }
    }
    ?>
</div>