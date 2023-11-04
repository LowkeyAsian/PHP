<?php
session_start();
include "connect.php";
if (isset($_POST['Email']) && isset($_POST['Password']) ) {
    function validate($data){

        $data = trim ($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
         return $data;
    }
    

    $email = validate($_POST['Email']);
    $password = validate($_POST['Password']);
       
    if (empty($email)) {
        header("Location: index.php?error=Email is required");
        exit();
    }else if(empty($password)) {
        header("Location: index.php?error=Password is required");
        exit();
    }else{
       $sql = "select * from `reg` where Email= '$email'";

       $result = mysqli_query($con, $sql);
       $row = mysqli_fetch_assoc($result);
      

          if (mysqli_num_rows($result)>0){
            if(md5($password)===$row['Password']){

           
              $_SESSION['Email'] = $row['Email']; 
              $_SESSION['Name'] = $row['Name'];
              $_SESSION['Id'] = $row['Id'];
              
          header("Location: home.php");
        exit();
         } else{
            header("Location: index.php?error=Incorrecct Email or password");
        exit();
          }
        
          }else{
            header("Location: index.php?error=Incorrecct Email or password");
        exit();
          }
        }

    }else{
        header("Location: index.php");
        exit();
    }
?>