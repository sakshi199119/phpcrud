<?php

include 'connect.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "Updated successfully.";
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
    <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off" value=<?php echo $name;?>><br>
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off" value=<?php echo $email;?>><br>
</div>
<div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your Mobile" name="mobile" autocomplete="off" value=<?php echo $mobile;?>><br>
</div>
<div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your Password" name="password" autocomplete="off" value=<?php echo $password;?>><br>
</div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

    </div>

  </body>
</html>