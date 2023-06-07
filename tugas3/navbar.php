<?php
    // session_start();
    // require 'konek.php';
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Hoyoverse</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="homepage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Tugas2.html">Genshin Impact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Honkai Impact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="hsrtier.html">Honkai Star-Rail</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="genshindown.html">Download Genshin Impact</a></li>
                                <li><a class="dropdown-item" href="#">Download Honkai Impact</a></li>
                                <li><a class="dropdown-item" href="hsrdown.html">Download Honkai Star-Rail</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" style="margin-left: 34rem;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               <?php
                               if (!isset($_SESSION["login"])) {
                                echo ("Your Account");
                               }
                               else{
                               $id=$_SESSION["id"];
                             //verify
                                $result = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
                                 $row = mysqli_fetch_assoc($result);
                                 echo($row["username"]);
                               }
                               ?>
                            </a>
                            <ul class="dropdown-menu"style="margin-left:31rem;">
                                <li><a class="dropdown-item" href="accsetting.php">Change Password</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Your Account</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    </div>
                </div>
            </div>
        </nav>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>