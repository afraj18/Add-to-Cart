<?php include('dbh/config.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('head.php');?>
<style>
.mainNav {
  background-color: #0A2558;
  margin-top:20px;
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
           <form>
                <fieldset>
                    <div class="form-group">
                        <a href="MobilePhone/ProductCat.php">
                        <button type="button" class="btn btn-outline-light ml-2 mt-4 form-control text-left "><i class='bx bxs-tag-alt' style='color:#fff'  ></i> Product Categories</button>
                        </a>
                    </div>
                    <div class="form-group">
                        <a href="viewcart.php">
                        <button type="button" class="btn btn-outline-light ml-2 form-control text-left"><i class='bx bxs-tag-alt' style='color:#fff'  ></i> Shopping Cart</button>
                        </a>
                    </div>
                    <div class="form-group">
                        <a href="wishList.php">
                        <button type="button" class="btn btn-outline-light ml-2  form-control text-left"><i class='bx bxs-tag-alt' style='color:#fff'  ></i> Wish List</button>
                        </a>
                    </div>
                    <div class="form-group">
                        <a href="#">
                        <button type="button" class="btn btn-outline-light ml-2 form-control text-left"><i class='bx bxs-tag-alt' style='color:#fff'  ></i> Latest Product Blogs and Reviews</button>
                        </a>
                    </div>
                    <div class="form-group">
                        <a href="#">
                        <button type="button" class="btn btn-outline-light ml-2 form-control text-left"><i class='bx bxs-tag-alt' style='color:#fff'  ></i> </button>
                        </a>
                    </div>
                </fieldset>
           </form>
        </div>
        <div class="col-md-9 ">
            <div class="container">
                <?php include_once('MobilePhone/mobile.php')?>
            </div>
        </div>
        
    </div>

<!-- <h1 class="text-center">Add to cart in PHP</h1>  <hr> -->
<!-- Body Section -->

</body>
</html>