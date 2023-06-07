<?php
@include 'config.php';
?>

<header class="header">

   <div class="flex">

      <a href="#" class="logo">foodies</a>

      <?php
      
      if (isset($_SESSION['id'])) {
         $select_rows = mysqli_query($conn, "SELECT * FROM `cart` WHERE user = '$idUser'") or die('query failed');
         $row_count = mysqli_num_rows($select_rows);
      ?>
         <nav class="navbar">
            <?php if($_SESSION['role'] == 'admin') { ?>
               <a href="admin.php">add products</a> 
            <?php } ?>
            <a href="products.php">view products</a>
            <a href="history.php">history order</a>
         </nav>
         <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>
         <a href="logout.php" class="link_navbar">Logout</a>
      <?php } else { ?>
         <a href="login.php" class="link_navbar">Login</a>
         <a href="register.php" class="link_navbar">Register</a>
      <?php } ?>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>