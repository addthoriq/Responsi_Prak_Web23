<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- css style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header section start -->
    <section class="header">
        <nav class="navbar">
            <a href="home.php" class="logo title">
                <img src="images/logo.png" alt="" width="40" height="40">
            </a>
            <div class="nav-item">
                <a href="home.php">home</a>
                <a href="about.php">about</a>
                <a href="item.php">item</a>
                <a href="preorder.php">preorder</a>
            </div>
            <div class="actions-avatar">
                <div id="menu-btn" class="fas fa-bars hamburger"></div>
                <a href="myAccount.php" class="avatar"><img src="images/person2.jpg" alt="" width="30" height="30"></a>
            </div>
        </nav>
    </section>
    <!-- header section end -->

    <!-- home section start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/hero-1.jpg) no-repeat">
                    <div class="content">
                        <!-- <span>Pre-order, Pay, Regret</span> -->
                        <h3>Pay now think later</h3>
                        <a href="item.php" class="btn">Discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/hero-2.jpg) no-repeat">
                    <div class="content">
                        <!-- <span>Pre-order, Pay, Regret</span> -->
                        <h3>Pay now think later</h3>
                        <a href="item.php" class="btn">Discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/hero-4.jpg) no-repeat">
                    <div class="content">
                        <!-- <span>Pre-order, Pay, Regret</span> -->
                        <h3>Pay now think later</h3>
                        <a href="item.php" class="btn">Discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section end -->

    <!-- home about section start -->
    <section class="home-about">
        <div class="image">
            <img src="images/out.png" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ut. Placeat quisquam quaerat sed
                assumenda, excepturi, rerum porro magni consequatur laboriosam doloribus ducimus repudiandae natus
                suscipit in exercitationem accusamus nesciunt.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home about section end -->

    <!-- home item section start -->
    <section class="home-item">
        <h1 class="heading-title">our item</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/item-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>cute & stylish</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <a href="preorder.php" class="btn">Pre-order now!</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/item-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>cute & stylish</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <a href="preorder.php" class="btn">Pre-order now!</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/item-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>cute & stylish</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <a href="preorder.php" class="btn">Pre-order now!</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="item.php" class="btn">load more</a></div>
    </section>
    <!-- home item section end -->

    <!-- home new item start -->
    <section class="home-new-item">
        <div class="content">
            <h3>new item are waiting!</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa corporis reiciendis illo accusamus saepe
                quidem, sapiente provident voluptatibus aut totam quisquam praesentium tenetur exercitationem a eveniet
                ex nisi eum nostrum?</p>
            <a href="preorder.php" class="btn">pre-order now!</a>
        </div>
    </section>
    <!-- home new item end -->

    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
                <a href="item.php"> <i class="fas fa-angle-right"></i>item</a>
                <a href="preorder.php"> <i class="fas fa-angle-right"></i>preorder</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask question</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +62-888-888</a>
                <a href="#"> <i class="fas fa-phone"></i> +62-888-888</a>
                <a href="#"> <i class="fas fa-envelope"></i> bobi@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> Kampus 1 AKPRIND</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-github"></i>github</a>
            </div>
        </div>

        <div class="credit">created by <span>Fx. Guntur Putra Susanto</span></div>

    </section>
    <!-- footer section end -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- js link -->
    <script src="js/script.js"></script>
</body>

</html>