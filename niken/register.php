<?php 

@include 'config.php';

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    
    if ($password != $password_confirm) {
        $message[] = 'Password not match';
    } else {  
        $encrpyt_password = password_hash($password, PASSWORD_BCRYPT);
        $insert_query = mysqli_query($conn, "INSERT INTO `user`(name, username, password) VALUES('$name', '$username', '$encrpyt_password')") or die('query failed');
     
        if($insert_query){
           $message[] = 'succesfully register';
        }else{
           $message[] = 'could not register';
        }
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
   <h3>Register</h3>
   <input type="text" name="name" placeholder="enter name" class="box" required>
   <input type="text" name="username" placeholder="enter username" class="box" required>
   <input type="password" name="password" placeholder="enter password" class="box" required>
   <input type="password" name="password_confirm" placeholder="enter password confirm" class="box" required>
   <input type="submit" value="Register" name="register" class="btn">
</form>

</section>

</div>