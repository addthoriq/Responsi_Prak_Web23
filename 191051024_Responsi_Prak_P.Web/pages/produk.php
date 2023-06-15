<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil data produk dari database

?>

<!DOCTYPE html>
<html>
<head>
    <title>E-commerce - Products</title>
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
        
        .product-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }
        
        .product {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .product-image {
            width: 100%;
            height: 200px;
            margin-bottom: 10px;
        }
        
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .product-name {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .product-price {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
        }
        
        .product-description {
            margin-bottom: 10px;
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

        .footer {
  margin-top: 80px;
}
.footer__hr {
  border-top: 1px solid var(--color-akana-green);
  opacity: 0.3;
}

.container__footer {
  padding-top: 60px;
  margin-left: 167px;
  margin-right: 167px;
}

.footer__inner {
  display: flex;
  justify-content: space-between;
}

.footer__company {
  max-width: 282px;
}

.company__title {
  text-transform: uppercase;
  font-family: var(--font-family-p);
  font-size: 24px;
  line-height: 24px;
  color: var(--color-akana-green);
  margin-bottom: 24px;
}

.company_sub-title {
  font-family: var(--font-family-wm);
  font-size: 16px;
  line-height: 18px;
  color: var(--color-gray);
  margin-bottom: 10px;
}

.company__address {
  font-family: var(--font-family-wr);
  font-size: 13px;
  line-height: 20px;
  color: #4f4f4f;
}

.footer__title {
  font-family: var(--font-family-wr);
  font-size: 16px;
  line-height: 16px;
  color: var(--color-black);
  margin-bottom: 20px;
}

.per__link {
  display: block;
  font-family: var(--font-family-wr);
  font-size: 14px;
  color: var(--color-black);
}

.per__link {
  margin-bottom: 14px;
}

.footer__input {
  display: block;
  margin-bottom: 14px;
  min-height: 32px;
  min-width: 234px;
  border: 1px solid #f2f2f2;
  border-radius: 2px;
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
        <div class="product-list">
            <div class="product">
                <div class="product-image">
                    <img src="https://plus.unsplash.com/premium_photo-1675783105468-7fb8e0a3e7e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80">
                </div>
                <div class="product-name">Product 1</div>
                <div class="product-price">$19.99</div>
                <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at felis mauris.</div>
                <a href="#" class="button">Add to Cart</a>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1612363148951-15f16817648f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80">
                </div>
                <div class="product-name">Product 2</div>
                <div class="product-price">$24.99</div>
                <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at felis mauris.</div>
                <a href="#" class="button">Add to Cart</a>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1603436326446-74e2d65f3168?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1071&q=80">
                </div>
                <div class="product-name">Product 3</div>
                <div class="product-price">$14.99</div>
                <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at felis mauris.</div>
                <a href="#" class="button">Add to Cart</a>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="https://plus.unsplash.com/premium_photo-1675783105468-7fb8e0a3e7e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80">
                </div>
                <div class="product-name">Product 1</div>
                <div class="product-price">$19.99</div>
                <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at felis mauris.</div>
                <a href="#" class="button">Add to Cart</a>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1612363148951-15f16817648f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80">
                </div>
                <div class="product-name">Product 2</div>
                <div class="product-price">$24.99</div>
                <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at felis mauris.</div>
                <a href="#" class="button">Add to Cart</a>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1603436326446-74e2d65f3168?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1071&q=80">
                </div>
                <div class="product-name">Product 3</div>
                <div class="product-price">$14.99</div>
                <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at felis mauris.</div>
                <a href="#" class="button">Add to Cart</a>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="https://plus.unsplash.com/premium_photo-1675783105468-7fb8e0a3e7e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80">
                </div>
                <div class="product-name">Product 1</div>
                <div class="product-price">$19.99</div>
                <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at felis mauris.</div>
                <a href="#" class="button">Add to Cart</a>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1612363148951-15f16817648f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80">
                </div>
                <div class="product-name">Product 2</div>
                <div class="product-price">$24.99</div>
                <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at felis mauris.</div>
                <a href="#" class="button">Add to Cart</a>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1603436326446-74e2d65f3168?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1071&q=80">
                </div>
                <div class="product-name">Product 3</div>
                <div class="product-price">$14.99</div>
                <div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at felis mauris.</div>
                <a href="#" class="button">Add to Cart</a>
            </div>
        </div>
    </div>
    <footer class="footer">
        <hr class="footer__hr" />
        <div class="container__footer">
          <div class="footer__inner">
            <div class="footer__company">
              <h3 class="company__title">plantku</h3>
              <p class="company_sub-title">Plantku House</p>
              <address class="company__address">
                Jl. Laksda Adisucipto No.51, Demangan, Kec. Depok, Kota
                Yogyakarta, Daerah Istimewa Yogyakarta 55282
              </address>
            </div>
            <div class="footer__perusahaan">
              <h4 class="footer__title">Perusahaan</h4>
              <a class="per__link" href="#">Tentang Kami</a>
              <a class="per__link" href="#">Tentang Kami</a>
            </div>

            <div class="footer__produk">
              <h4 class="footer__title">Produk</h4>
              <a class="per__link" href="#">Tanaman</a>
              <a class="per__link" href="#">Tanaman Lain</a>
            </div>

            <div class="footer__email">
              <h4 class="footer__title">Berlangganan Email Kami</h4>
              <input
                class="footer__input"
                type="text"
                placeholder="Masukan Alamat Email"
              />
              <button class="default-button button-active footer__btn">
                Submit
              </button>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>

