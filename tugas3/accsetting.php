<?php
session_start();
require 'konek.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>account settings - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            color: #8e9194;
            background-color: #f4f6f9;
        }

        .avatar-xl img {
            width: 110px;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        .text-muted {
            color: #aeb0b4 !important;
        }

        .text-muted {
            font-weight: 300;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5;
            color: #4d5154;
            background-color: #ffffff;
            background-clip: padding-box;
            border: 1px solid #eef0f3;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
    </style>
</head>

<body>
    <header>

        <?php include('navbar.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!--navbar-->
    </header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                <h2 class="h3 mb-4 page-title">Settings</h2>
                <div class="my-4">
                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
                        </li>
                    </ul>
                    <form action="" method="POST">
                        <div class="row mt-5 align-items-center">
                            <div class="col-md-3 text-center mb-5">
                                <div class="avatar avatar-xl">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="avatar-img rounded-circle" />
                                </div>
                            </div>
                            <hr class="my-4" />
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPassword4">Old Password</label>
                                        <input type="password" class="form-control" id="inputPassword5" name="logpass" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword5">New Password</label>
                                        <input type="password" class="form-control" id="inputPassword5" name="lognewpass" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword6">Confirm Password</label>
                                        <input type="password" class="form-control" id="inputPassword6" name="logconfnewpass" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-2">Password requirements</p>
                                    <p class="small text-muted mb-2">To create a new password, you have to meet all of the following requirements:</p>
                                    <ul class="small text-muted pl-4 mb-0">
                                        <li>Make sure you remember you rpassword</li>
                                        <li>At Least easy to remember for you</li>
                                        <li>Cant be the same as a previous password</li>
                                    </ul>
                                </div>
                            </div>
                            <button type="submit" name="change" class="btn btn-primary">Save Change</button>
                            <?php
                            if (isset($_POST["change"])) {
                                if (gantipass($_POST) > 0) {
                                    echo "<script> alert('password berhasil diganti!'); </script>";
                                    
                                } else {
                                    echo mysqli_error($conn);
                                }
                            }
                            ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </script>
</body>

</html>