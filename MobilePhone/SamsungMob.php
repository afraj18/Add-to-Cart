
<?php 
        $sql = "SELECT * FROM product where BNAME = 'Samsung'";
        $res = $conn->query($sql);

        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<div class="col-md-3 text-center">
                <img src="images/'.$row['PIC'].'" alt="" class="image-responsive" height="40%" width="65%"> <br><br>
                <p><strong>'.$row['PNAME'].'</strong></p>
                <h6>USD . '.$row['PRICE'].'</h6>
                <p><a href="view.php?id='.$row['ID'].'" class="btn  btn-dark form-control">View Item</a></p> 
            </div>';
        }
    }
    ?>