<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['Id'])&& isset($_SESSION['Email'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<div class="jack"> <marquee width="95%" direction="right" height="100px"><h1>Hello!, <?php echo $_SESSION['Name'] ;  ?> Youre logged In!!!</h1> </marquee>
    <button class="btn btn-danger"><a href="index.php">Logout</a></button>
    </div>
</body>
</html>


<?php
}else{
header("Location: index.php");
exit();


}

?>
</body>
</html>