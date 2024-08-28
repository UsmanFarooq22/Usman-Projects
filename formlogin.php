<?php
session_start();
include 'server.php'; 
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect login data
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    // Prepare a select statement
    $sql = "SELECT user_full_name, user_pass FROM tbl_users WHERE user_full_name = ?";
  
    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $username);
  
        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Store result
            $stmt->store_result();
  
            // Check if username exists, if yes then verify password
            if ($stmt->num_rows == 1) {
                // Bind result variables
                $stmt->bind_result($username, $hashed_password);
                if ($stmt->fetch()) {
                    // Verify the password (assuming you have hashed the password while registering the user)
                    if (password_verify($password, $hashed_password)) {
                        // Password is correct, start a new session
                        
                        
                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["username"] = $username;
                        
                        // Redirect user to welcome page
                        header("location: Main page.php");
                    } else {
                        // Password is not valid, display an error message
                        echo "The password you entered was not valid.";
                    }
                }
            } else {
                // Username doesn't exist, display an error message
                echo "No account found with that username.";
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
  
        // Close statement
        $stmt->close();
    }
  
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
            <li class="navList"><a href="form-1.php" > Login/Register</a> </li> 
            
        </ul>
    </nav>
</header>
<body>

 <h1>Login</h1>

<form action="formlogin.php" method="post" id="signup" novalidate>
  <div>
  <label>  Username:
        <input type="text" name="username" >
  <br><br>
</label>
  
  <div>
  <label>Password:
    <input type="text" name="password" >
</label>
  </div>
  <p></p>
  <button>Sign in</button>
  <p>Don't have an account? Please <a href="form-1.php">Register</a></p>
</form>

</body>
</html>
<?php
mysqli_close($conn);
?>