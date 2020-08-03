<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .product_wrapper {
 float:left;
 padding: 10px;
 text-align: center;
 }
.product_wrapper:hover {
 box-shadow: 0 0 0 2px #e5e5e5;
 cursor:pointer;
 }
.product_wrapper .name {
 font-weight:bold;
 }
.product_wrapper .buy {
 text-transform: uppercase;
 background: #F68B1E;
 border: 1px solid #F68B1E;
 cursor: pointer;
 color: #fff;
 padding: 8px 40px;
 margin-top: 10px;
}
.product_wrapper .buy:hover {
 background: #f17e0a;
 border-color: #f17e0a;
}
.message_box .box{
 margin: 10px 0px;
 border: 1px solid #2b772e;
 text-align: center;
 font-weight: bold;
 color: #2b772e;
 }
.table td {
 border-bottom: #F0F0F0 1px solid;
 padding: 10px;
 }
.cart_div {
 float:right;
 font-weight:bold;
 position:relative;
 }
.cart_div a {
 color:#000;
 } 
.cart_div span {
 font-size: 12px;
 line-height: 14px;
 background: #F68B1E;
 padding: 2px;
 border: 2px solid #fff;
 border-radius: 50%;
 position: absolute;
 top: -1px;
 left: 13px;
 color: #fff;
 width: 20px;
 height: 20px;
 text-align: center;
 }
.cart .remove {
 background: none;
 border: none;
 color: #0067ab;
 cursor: pointer;
 padding: 0px;
 }
.cart .remove:hover {
 text-decoration:underline;
 }
    </style>
</head>
<body>

</body>
</html>




<?php
session_start();
include('daa.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$con,
"SELECT * FROM `products` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];
 
$cartArray = array(
 $code=>array(
 'name'=>$name,
 'code'=>$code,
 'price'=>$price,
 'quantity'=>1,
 'image'=>$image)
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
 $status = "<div class='box' style='color:red;'>
 Product is already added to your cart!</div>"; 
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
 }
 
 }
}
?>






<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="https://png.pngtree.com/png-clipart/20190904/original/pngtree-red-shopping-cart-icon-png-free-illustration-png-image_4480557.jpg" width="50px;" /> Cart<span>
<?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>





<?php
$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='code' value=".$row['code']." />
    <div class='image'><img src='".$row['image']."' /></div>
    <div class='name'>".$row['name']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }
mysqli_close($con);
?>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; 
echo "<pre>";
// unset($_SESSION['shopping_cart']);
?>
</div>