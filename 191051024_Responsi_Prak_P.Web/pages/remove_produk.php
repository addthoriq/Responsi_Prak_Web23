<!DOCTYPE html>
<html>
<head>
    <title>E-commerce - Remove Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        
        .navbar ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
            overflow: hidden;
        }
        
        .navbar li {
            display: inline-block;
            margin-right: 10px;
        }
        
        .navbar li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }
        
        .navbar li a:hover {
            background-color: #555;
        }
        
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .message {
            background-color: #f2f2f2;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .message h2 {
            margin-top: 0;
        }
        
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="message">
            <h2>Product Removed</h2>
            <p>The selected product has been successfully removed.</p>
            <a href="cart.php" class="button">View Cart</a>
        </div>
    </div>
</body>
</html>
