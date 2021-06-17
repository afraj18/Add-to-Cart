
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('head.php'); ?>
    <title>Document</title>
</head>
<body>

<!-- 
<img src='images/IP8.png' alt='Phone'   width='20%' class='image-responsive' >
   
</tr>
<tr>
     <td></td>
    <td>
        <strong>Iphone</strong>
    </td>
</tr>
<tr>
<td></td>
    <td>
        Apple
    </td>
</tr>
<tr>
<td> </td>
    <td>
        Rs. 1000.00 
    </td>
</tr>
<tr>
<td> </td>
    <td>
        128 GB
    </td>
</tr>
<td> </td>
    <td>
        12 Megapixels
    </td>
</tr>
<td> </td>
    <td>
        4322mAh
    </td>
</tr>
<tr>
<td>RAM : </td>
    <td>
       4GB
    </td>
</tr>
<tr>
<td>Display Size : </td>
    <td>
      5.33
    </td>
</tr>
<tr>
    <td></td>
    <td>
    <div class='quantity'>
    <button class='btn minus-btn disabled' type='button'>-</button>
    <input type='text' name='qty' id='quantity' value='0' required>
    <button class='btn plus-btn' type='button'>+</button>

</div>
        <input type='hidden' value='Need' name='pname'>
        <input type='hidden' value='Need' name='price'>                                  
      </td>
</tr>
<tr>
<td> </td>
    <td>
       <input type='submit' value='Add to Cart' name='addCart' class='btn btn-primary m-2'>
          <br>                                 </td>
</tr>
</table>
</form> -->

<div class="row d-flex justify-content-center">
    <div class="col-md-5 mt-1">
    <img src='images/{$row['PIC']}' alt='Phone' class='image-responsive' >
    </div>
    <div class="col-md-7 mt-5">
    <form action='{$_SERVER["REQUEST_URI"]}' method='post'>
        <ul style="list-style-type: none;">
            <li class=""> <h2> <strong>{$row["PNAME"]}</strong></h2> </li>
            <li>Price : Rs. {$row["PRICE"]}.00 </li>
            <br>
            <li>Brand : {$row["BNAME"]} </li>
            <li>Camera : {$row["CAMERA"]} Megapixels</li>
            <li>Storage capacity : {$row["STORAGE"]} GB</li>
            <li>Display Size : {$row["DISPLAY"]}    </li>
            
            <li>Battery capacity : {$row["BATTERY"]}mAh </li>
            <li> RAM : {$row["RAM"]}GB</li>
            <li>Enter Qty : 
                <div class='quantity'>
                    <button class='btn minus-btn disabled' type='button'>-</button>
                    <input type='text' name='qty' id='quantity' value='0' required>
                    <button class='btn plus-btn' type='button'>+</button>
                </div>
                <input type='hidden' value='{$row["PNAME"]}' name='pname'>
                <input type='hidden' value='{$row["PRICE"]}' name='price'>    
            </li>
            <li><span class='text-danger m-5' id='stock' value='{$row["STOCK"]}'> Available Stock : {$row["STOCK"]}</span>  </li>
            <li><input type='submit' value='Add to Cart' name='addCart' class='btn btn-primary m-2'></li>
        </ul>
        </form>
    </div>
    <div class='row'>
        <div class='col-md-8 justify-content-center m-5'>
            <h3><strong>Product Description</strong></h3>
        <p class=''>{$row['DESCRIPTION']}</p>
        </div>
    </div>
</div>

