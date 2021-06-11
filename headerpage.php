<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php //include('head.php');?>

<style>

/* .heading{
    font-size: 750%;
    text-shadow:5px -1px 42px #e7f137;
} */
/* .heading {
  font-family : courier,arial,helvetica;
  font-size: 1rem;
  color:black;
} */

@include media-breakpoint-up(sm) {
  .heading {
    font-size: 1.2rem;
  }
}

@include media-breakpoint-up(md) {
    .heading {
    font-size: 1.4rem;
  }
}

@include media-breakpoint-up(lg) {
    .heading {
    font-size: 1.6rem;
  }
}
.header{
    background-color : white;
    top: 48px; /* shadow is at bottom of element, so at 48 + 16 = 64px */
    box-shadow: 0px 1px 2px rgba(0,0,0,0.5);
}
hr{
    background-color:black;
}
.img-fluid{
    /* text-align : center; */
    
}
.btn-info{
  background-color: blue;
}
</style>
</head>
<body>
  
  <!-- MainSticky-->
  <div class="row header">
    <div class="col-md-2">
    <br>
        <img src="images/logo.jpg" alt="MOBiCO" class = "img-fluid img-responsive center-block">
    </div> 
    <div class="col-md-8">
        <p>
            <h1 class="heading" style="font-family: 'Limelight', cursive; font-weight:900px">MOBiCO</h1> 
            <span style="font-size : 170%; font-family: 'Limelight', cursive;" class="">Dealers in Mobile and Accessories
            </span>
            <hr>
            <h5 style="font-family: 'Limelight', cursive;" >Ruwanwella,Sri Lanka</h5>
        </p>
    </div>
    <div class="col-md-2 btn-group-vertical" role="group" aria-label="...">
          <form action="">
            <fieldset>
              <div class="form-group"> 
                <a href="login.php" class="btn btn-sm btn-dark mt-2 img-fluid form-control"> Log In</a> 
              </div>
              <div class="form-group">
                <a href="signup.php" class="btn btn-sm btn-dark img-fluid form-control " > Sign Up</a> <br>
              </div>

              <div class="form-group">
                <a href="logout.php" class="btn btn-sm btn-dark img-fluid form-control" > Log Out</a> <br>
              </div>
         
          
            </fieldset>
          </form>
    </div>
    
</div>
 
