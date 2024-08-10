<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `crud` (name, email, mobile, password)
            VALUES ('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        //echo "Data inserted successfully.";
        header('location:display.php');
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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post" >
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off"><br>
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off"><br>
</div>
<div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your Mobile" name="mobile" autocomplete="off"><br>
</div>
<div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your Password" name="password" autocomplete="off"><br>
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>

  </body>
</html>