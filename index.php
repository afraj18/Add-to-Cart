<?php include('dbh/config.php');
 ?>
 
<!DOCTYPE html>
<html>
    <head>
    <?php include('head.php');?>
    <link rel="stylesheet" href="css/main.css">
        <style>
            .mainNav {
                /* background-color: #0A2558; */
                margin-top:24px;
                
            }
            body{
                background-color:#f5f5f5 !important;
            }
           
        </style>
    </head>
<body> 
    <!-- Header Section -->
<?php include('headerpage.php');?>
<?php include('navbar.php');?>
    <!-- Body Section   -->
    <div class="row ">
        <div class="col-md-3 mainNav rounded ">
        <?php include('sideBar.php');?>
        </div>  <!-- //Column One End -->
        <div class="col-md-9 salePanel">
                <?php include('MobilePhone/mobile.php')?>
        </div>
        
    </div>

<!-- <h1 class="text-center">Add to cart in PHP</h1>  <hr> -->
<!-- Body Section -->

</body>
</html>


