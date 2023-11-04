<?php

include 'connect.php';

?>



<!DOCTYPE HTML>  
<html>
<head>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>  

<?php
$emailErr = $passwordErr = "";
$email = $password = "";

if (empty($_POST["Email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["Email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["Password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["Password"]);

    if (!filter_var($password)) {
      $passwordErr = "Invalid password format";
    }
  }
    


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<!-- <p><span class="error">* required field</span></p> -->
<form method="post" action="login.php">  
<h2>Login form</h2>
  <?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?> </p>
    <?php
  } ?>
  <div class="email"> <label> E-mail: </label><input type="email" name="Email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br></div>
 
 <div class="password"><label> Password: </label> <input type="password" name="Password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br></div>
  <button class="btn btn-outline-primary"> Login</button>  
  
  <br>
<button class="btn btn-outline-info" ><a href="reg.php">Register Here</a> </button>

</form>


</body>
</html>







<!-- into form -->

<!-- <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> -->