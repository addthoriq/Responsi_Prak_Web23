<!DOCTYPE html>
<html>
<head>
    <title>E-commerce - Checkout</title>
    <style>
        *,
        *::before,
        *::after {
            box-sizing:border-box;
        }

        body{
            margin: 0;
            padding: 0;
            background-color: #F0F5F0;
            font-family: 'Ubuntu',sans-serif;
        }
        
        a{
            text-decoration: none;
        }

        button{
            border: 0;
            outline: none;
            font-family: inherit;
            font-size: inherit;
            cursor: pointer;
        }

        .navbar {
            height: 90px;
            background-color: #1a1a1a;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar  .logo i{
            font-size: 22px;
            color: #0aa5ff;
        }

        .navbar  .logo a{
            color: white;
            font-size: 24px;
            font-weight: 700;
            margin: 12px;
        }

        .menu{
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .menu-links{
            display: flex;
            gap: 24px;
            border-right: 1px solid #999999;
            padding-inline: 24px;
        }

        .menu-links a{
            font-weight: 500;
            color: #999999;
            padding: 8px 16px;
        }

        .menu-links a:hover{
            color: white;
        }

        .login{
            font-weight: 500;
            padding: 12px 22px;
            background-color: transparent;
            color: #999999;
            border-radius: 10px;
            border: 2px solid #0aa5ff;
            transition: 0.2s;
        }

        .login:hover{
            background-color: #0aa5ff;
            color: white;
        }

        .menu-btn{
            font-size: 32px;
            color: white;
            display: none;
            cursor: pointer;
        }

        @media (max-width: 53rem) {
            .menu{
                display:none;
            }

            .menu-btn{
                display: block;
            }
        }
        
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .checkout-form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            margin-top: 0;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
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
<nav class="navbar">
        <div class="logo">
            <i class="fa-solid fa-font-awesome"></i>
            <a href="#">MyPlants</a>
        </div>
        <div class="menu">
            <div class="menu-links">
                <a href="index.php">Home</a>
                <a href="produk.php">Product</a>
                <a href="cart.php">Cart</a>
                <a href="profil.php">Profile</a>
        </div>
        <button class="login"><a href='logout.php'>Logout</a></button>
        </div>
        <div class="menu-btn">
            <i class="fa-solid fa-bars"></i> 
        </div>
    </nav>
    <div class="container">
        <div class="checkout-form">
            <h1>Checkout</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" required>
                </div>
                <div class="form-group">
                    <label for="zip">ZIP Code</label>
                    <input type="text" id="zip" name="zip" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select id="country" name="country" required>
                        <option value="">Select Country</option>
                        <option value="USA">USA</option>
                        <option value="Canada">Canada</option>
                        <option value="UK">UK</option>
                        <option value="Australia">Australia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="payment">Payment Method</label>
                    <select id="payment" name="payment" required>
                        <option value="">Select Payment Method</option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="PayPal">PayPal</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                    </select>
                </div>
                
                <button type="submit" class="button"><a href='place_order.php'>Place Order</a></button>
            </form>
        </div>
    </div>
</body>
</html>
