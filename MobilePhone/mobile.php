<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container m-4 p-4 border rounded">
    <h1 class="font-weight-bold"> <i class="fab fa-apple m-1 fa-1x"> </i> Apple Phones</h1> <br>    
    <div class="row ">
        <?php include('AppleMob.php')?>
    </div> <br> <br>
    <h1 class="">Samsung Phones</h1> 
    <div class="row">
        
        <?php include('SamsungMob.php')?> <br><br>
    </div> <br> <br>
    <h1 class=""> Mobile Accessories </h1>
    <div class="row">
        <?php include('Redmi.php')?>
    </div>

</div>