<!DOCTYPE html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="styleCart.css" type= "text/css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
</head>
<body>
<header> 
<div class="logo"><img src="uclan.png" alt="UCLan logo"></div>
<nav>
    <ul class="myNav">
        <ul class="myNav">
            <li class="navList"><a> Student Shop</a></li>
            <li class="navList"><a href="Main page.php"> Home</a></li>
            <li class="navList"><a href="products.php" > Products</a> </li>
            <li class="navList"><a href="cart.php" > Cart</a> </li> 
            <li class="navList"><a href="form-1.php" > Login/Register</a> </li> 
        </ul>
    </nav> 
    </header>
    <h1>
       Shopping Cart
    </h1>
    <div class="cart"> <!-- shoopingcart box -->
        <h2>Your Cart</h2>
        <table>
          <thead>
            <tr>
              <th>Product</th> <!-- values that are inside the cart -->
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            </tbody>
          <tfoot>
            <tr>
              <td colspan="3">Cart Total</td>
              <td>£0.00</td> <!-- total price -->
            </tr>
          </tfoot>
        </table>
      </div>
      <script src="productcart.js"></script> <!-- javascript file -->



    
</body>
</html>