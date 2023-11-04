<?php
include "connect.php";
if (isset($_POST["submit"])) {
  $name = $_POST["Name"];
  $email = $_POST["Email"];
  $number = $_POST["Number"];
  $password = $_POST["Password"];

  $epassword = md5($password);

  $sql = "insert into `reg` (Name,Email,Number,Password)
      
      values('$name','$email','$number','$epassword')";

  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Data inserted successfully";
  } else {
    die(mysqli_error($con));
  }
}

?>






<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Register here</title>
</head>

<body class="background">

  <div class="container my-5">
    <div class="justify-content-center d-flex">
    <form method="post" autocomplete="false">
          <!-- <div class="form-group">
        <label>ID</label>
        <input type="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
      </div> -->
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="Text" class="form-control" placeholder="Enter Your Name" name="Name" autocomplete=>
      </div>
      <div class="form-group" autocomplete='false'>
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" placeholder="Enter Your Email" name="Email" autocomplete="__away">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Number</label>
        <input type="Text" class="form-control" placeholder="Enter Mobile Number" name="Number" autocomplete="false">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" placeholder="Enter Your Password" name="Password" autocomplete="false">
      </div>
      <div class="subbtn"><button type="submit" name="submit" class="btn btn-outline-primary">Submit <br></button></div> <br>
      <button class="btn btn-outline-success"><a href="Index.php">Done</a></button>

    </form>
    </div>
  </div>


</body>

</html>