<?php 
        $sql = "SELECT * FROM product where BNAME = 'Apple' LIMIT 4";
        $res = $conn->query($sql);

        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<div class="col-md-3  text-center">
                <img src="images/'.$row['PIC'].'" alt="" class="image-responsive" height="60%" width="75%"> <br><br>
                <p><strong>'.$row['PNAME'].'</strong></p>
                <h5>USD . '.$row['PRICE'].'</h5>
                <p><a href="view.php?id='.$row['ID'].'" class="btn btn-dark">View Item</a></p>
            </div>';
        }
    }
    ?>