<?php
session_start();
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Project1</title>
    <script src="https://kit.fontawesome.com/eb8e784c45.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="userhome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background:linear-gradient(orange,white,green)">
  <h1 id="heading" style="margin-top:30px;color:white;height:100px">Online Store management</h1>
  <div class="input-group">
    <div class="form-outline">
    <input type="search" id="form1" class="form-control" placeholder="Search For Items" autocomplete="off"/>
      <label class="form-label" for="form1"><button type="button" class="btn btn-primary" name="submit">Search</button></label>
    </div>
  </div>
   <p id="bgc">.</p>

<div class="products">

 <div class="wrapper-h2">
  <h2 margin=2rem >SHIRTS</h2>
 </div>
 <?php
      
$shirt = "select * from shirts";
$reshirt = mysqli_query($conn,$shirt);
$norows1 = mysqli_num_rows($reshirt);

  echo "<div class='container'>";
for($i = 0;$i<$norows1;$i++){
  $rowshirt = mysqli_fetch_assoc($reshirt);
    echo "<div class='card'>
    <div class='container-image shirt-".($i+1)."'></div>
    <h4>".$rowshirt['name']."</h4>
    <button id='buy".($i+1)."' onclick='myFunction(),buy".($i+1)."()'>Buy</button><br>
    <button id='more".($i+1)."' onclick='more".($i+1)."'>Details</button>
    </div>
  
    ";
}
echo "
</div>";

echo "<h2 class ='space'>JEANS</h2>";

$jean = "select * from jeans";
$rejean = mysqli_query($conn,$jean);
$norows2 = mysqli_num_rows($rejean);

  echo "<div class='container'>";
for($i = 0;$i<$norows2;$i++){
  $rowjean = mysqli_fetch_assoc($rejean);
    echo "<div class='card'>
    <div class='container-image jean-".($i+1)."'></div>
    <h4>".$rowjean['name']."</h4>
    <button id='buy".($i+$norows1+1)."' onclick='myFunction(),buy".($i+$norows1+1)."()'>Buy</button><br>
    <button id='more".($i+$norows1+1)."' onclick='more".($i+$norows1+1)."()'>Details</button>
    </div>";
}
echo "
</div>";


echo "<h2 class ='space'>T_SHIRTS</h2>";

$t_shirt = "select * from t_shirts";
$ret_shirt = mysqli_query($conn,$t_shirt);
$norows3 = mysqli_num_rows($ret_shirt);

  echo "<div class='container'>";
for($i = 0;$i<$norows3;$i++){
  $rowt_shirt = mysqli_fetch_assoc($ret_shirt);
    echo "<div class='card'>
    <div class='container-image tshirt-".($i+1)."'></div>
    <h4>".$rowt_shirt['name']."</h4>
    <button id='buy".($i+$norows2+$norows1+1)."' onclick='myFunction(),buy".($i+$norows2+$norows1+1)."()'>Buy</button><br>
    <button id='more".($i+$norows2+$norows1+1)."' onclick='more".($i+$norows2+$norows1+1)."()'>Details</button>
    </div>";
}
echo "
</div>";

echo "<h2 class ='space'>SHOES</h2>";

$shoes = "select * from shoes";
$reshoes = mysqli_query($conn,$shoes);
$norows4 = mysqli_num_rows($reshoes);

  echo "<div class='container'>";
for($i = 0;$i<$norows4;$i++){
  $rowshoes = mysqli_fetch_assoc($reshoes);
    echo "<div class='card'>
    <div class='container-image shoes-".($i+1)."'></div>
    <h4>".$rowshoes['name']."</h4>
    <button id='buy".($i+$norows3+$norows2+$norows1+1)."' onclick='myFunction(),buy".($i+$norows3+$norows2+$norows1+1)."()'>Buy</button><br>
    <button id='more".($i+$norows3+$norows2+$norows1+1)."' onclick='more".($i+$norows3+$norows2+$norows1+1)."()'>Details</button>
    </div>";
}
echo "
</div>";

echo "<h2 class ='space'>WRIST_WATCHES</h2>";

$watches = "select * from watches";
$rewatches = mysqli_query($conn,$watches);
$norows5 = mysqli_num_rows($rewatches);

  echo "<div class='container'>";
for($i = 0;$i<$norows5;$i++){
  $rowwatches = mysqli_fetch_assoc($rewatches);
    echo "<div class='card'>
    <div class='container-image ww-".($i+1)."'></div>
    <h4>".$rowwatches['name']."</h4>
    <button id='buy".($i+$norows4+$norows3+$norows2+$norows1+1)."' onclick='myFunction(),buy".($i+$norows4+$norows3+$norows2+$norows1+1)."()'>Buy</button><br>
    <button id='more".($i+$norows4+$norows3+$norows2+$norows1+1)."' onclick='more".($i+$norows4+$norows3+$norows2+$norows1+1)."()'>Details</button>
    </div>";
}
echo "
</div>";

?>
</div>


<div class="adcart">
   <label>Added to Cart</label>
   <p  id="a1" onclick="myFunc2()">&times;</p>
</div>



<div>
<p class="cart0"><i class="fa-solid fa-user"></i></p>
  <p class="cart" onclick="myFunction3()"><i class="fa-solid fa-cart-shopping">My Cart</i></p>
</div>


<div class="Mycart">
<label id="quant">Quantity</label>
<input for="quant" type="number" id="quantvalue" name="quant"><br>
<label id="size">Size:</label><br>
<label id="small">Small</label>
<input type="radio" id="small1" name="radio"><br>
<label id="normal">Normal</label>
<input type="radio" id="normal1" name="radio"><br>
<label id="large">Large</label>
<input type="radio" id="large1" name="radio"><br>

<p class="cls" onclick="myFunc()">&times;</p>
<button type="submit" name="submit" id="submit" onclick="myFunction2(),myfoot()">Submit</button>
<!--<label id="price" style="margin-right:20px">Price</label><label id="amount">500</label>-->
</div>


<div class="mycart">
  <p class="clsbtn" onclick="myFunc3()">&times;</p>
  <label>My Cart</label>
  <hr>
  <table>
  <thead id="head">
    <tr>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Total Price</th>
      <th>size</th>
    </tr>
  </thead>
  <tbody id="mycartbody">
 <tr>
  <td id="n1">-</td>
  <td id="q1">-</td>
  <td id="p1">-</td>
  <td id="t1">-</td>
  <td id="s1">-</td>
 </tr>
  </tbody>  
  </table>
  <button id="ok">OK</button>
</div>

<div class="leftarrow">
<i class="fa-solid fa-arrow-left"></i>
</div>

<div>
  <p class="replacecard">hello</p>
</div>

<div id="class">
  <div id="deco">
    <p> PROFILE </p>
      <button id="lgt">Logout</button>
    <p id="clspbtn">&times;</p>
  </div>
     <hr>
     <div id="prof">
       <!--<i class="fa-solid fa-user" id="fuu"><img src="fa-solid fa-user"></i>-->
       <div id="x">
       <p id="user">User</p>
       <p id="output">Admin</p>
       </div>
       <div id="x">
        <p id="user"><?php echo $_SESSION['email']?></p>
        <p id="output">Admin_sdf20@gmail.com</p><br>
        </div>
     </div>
</div>
<script src="userhome.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>







<!--
 
<tr>
      <td>Name</td>
      <td id="n1">Name</td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td id="q1">none</td>
    </tr>
    <tr>
      <td>Price</td>
      <td id="p1">none</td>
    </tr>
    <tr>
      <td>Total Price</td>
      <td id="t1">none</td>
    </tr>
    <tr>
      <td>Size</td>
      <td id="s1">none</td>
    </tr>

-->