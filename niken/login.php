<?php 

@include 'config.php';

if (isset($_SESSION['id'])) {
   header('location: products.php');
}

if(isset($_POST['login'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   $get_user = mysqli_query($conn, "SELECT * FROM `user` WHERE username = '$username' LIMIT 1");

   if (mysqli_num_rows($get_user) > 0) {
      $data = mysqli_fetch_assoc($get_user);

      $verify_password = password_verify($password, $data['password']);

      if ($verify_password) {
         $_SESSION['id'] = $data['id'];
         $_SESSION['role'] = $data['role'];
         header('location: products.php');
      } else {
         $message[] = 'wrong username or password';
      }
   } else {
      $message[] = 'wrong username or password';
   }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header.php'; ?>

<div class="container">

<section>

<form action="" method="post" class="form" enctype="multipart/form-data">
   <h3>Login</h3>
   <input type="text" name="username" placeholder="enter username" class="box" required>
   <input type="password" name="password" placeholder="enter password" class="box" required>
   <input type="submit" value="Login" name="login" class="btn">
</form>

</section>

</div>