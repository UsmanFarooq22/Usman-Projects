<?php
session_start();
include 'server.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect post data
  $user_full_name = $_POST['username'];
  $user_email = $_POST['email'];
  $user_pass = $_POST['password'];

  // Check if passwords match
  if ($user_pass == $user_pass) {
      // Prepare an insert statement
      $sql = "INSERT INTO tbl_users (user_full_name, user_email, user_pass, user_address) VALUES (?, ?, ?,'')";

      if ($stmt = $conn->prepare($sql)) {
          // Bind variables to the prepared statement as parameters
          $stmt->bind_param("sss", $user_full_name, $user_email, $user_pass);

          // Attempt to execute the prepared statement
          if ($stmt->execute()) {
              echo "Account created successfully.";
          } else {
              echo "Error: " . $stmt->error;
          }

          // Close statement
          $stmt->close();
      }
  } else {
      echo "Passwords do not match.";
  }


  // Close connection
  $conn->close();
}

?>
<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="style.css" type= "text/css">
    <!-- linked to the stylesheet style.css-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<style>
.error {color: #FF0000;}
</style>
</head>
<header> 
<div class="logo"><img src="uclan.png" alt="UCLan logo"></div>
<!-- uclan logo goes to the header top left corner -->
<nav>
    <ul class="myNav"> <!-- navigation top with main pages -->
        <ul class="myNav">
            <li class="navList"><a> Student Shop</a></li>
            <li class="navList"><a href="Main page.php"> Home</a></li>
            <li class="navList"><a href="products.php" > Products</a> </li>
            <li class="navList"><a href="cart.php" > Cart</a> </li> 
            <li class="navList"><a href="login.php" > Login/Register</a> </li> 
            
        </ul>
    </nav>
</header>
<body>

 <h1>Register</h1>

<form action="form-1.php" method="post" id="signup" novalidate>
  <div>
  <label>  Username:
        <input type="text" name="username">
        <br><br>
  </label>
  </div>
  
  <div>
  <label> Email Address:
        <input type="text" name="email">
        <br><br>
</label>
  </div>
  
  <div>
  <label>Password:
    <input type="text" name="password" >
    <br><br>
  </label>
  </div>
  <div>
      <label for="password_confirmation">Repeat password</label>
      <input type="password" id="password_confirmation" name="password_confirmation">
      <br><br>
  </div>
  <p>Account type:</p>
<label>
    <input type="radio" name="role" value="student" checked>
</label>student
<label>
<input type="radio" name="role" value="staff">
</label>staff
<label>
<input type="radio" name="role" value="guest">
</label>guest
  <p></p>
  <button type="submit" class="btn" name="reg_user">Register</button>
  <p>Already have an account? Please <a href="formlogin.php">Sign in</a></p>
</form>

</body>
</html>