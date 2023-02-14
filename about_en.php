<?php include "function/config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstarp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FontAwosam -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- owl -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- wow js -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- =========== sweet alert =========== -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>IT.Live</title>
</head>
<style>
    body {
        background-color: #eeeeee !important;
    }

    .content {
        height: 100vh;
        background-color: #fcfcfc;
        padding-top: 71px;

    }
</style>

<body>

    <!-- Start Navbar -->
    <?php include 'inc/nav_en.php' ?>





    <div class="content " id="about">
        <div class="container">

            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <div class="row">

                        <!-- 0 <div class="col-md-1"></div> -->
                        <div class="col-md-7">
                            <h3 class="about-title"> About us</h3>
                            <div class="postContent p-3">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste commodi eveniet dolorum nobis ut
                                    reprehenderit exercitationem dolore delectus. Obcaecati non nisi unde numquam quaerat voluptatem sint voluptates placeat corrupti maiores.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo amet pariatur,
                                    fugiat deleniti inventore quidem magnam? Dolorum aliquid nihil cum nulla odio voluptate minus incidunt ea? Ipsa facilis obcaecati ea?
                                </p>

                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste commodi eveniet dolorum nobis ut
                                    reprehenderit exercitationem dolore delectus. Obcaecati non nisi unde numquam quaerat voluptatem sint voluptates placeat corrupti maiores.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo amet pariatur,
                                    fugiat deleniti inventore quidem magnam? Dolorum aliquid nihil cum nulla odio voluptate minus incidunt ea? Ipsa facilis obcaecati ea?
                                </p>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="post-image">
                                <a href="">
                                    <img src="img/landin.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-1"></div>

            </div>
        </div>
    </div>
    <div class="contact" id="contact">
        <div class="container">
            <div class="">
                <h1 class="text-center p-4">
                    Contact Us
                </h1>
                <div class="row">
                    <div class="col-lg-2"></div>


                    <div class="col-lg-5" dir="ltr">
                        <form action="" method="POST">
                            <div class="form">
                                <input class="form-control mt-2" placeholder="Name" required="" name="username" type="text">
                                <span class="input-border"></span>
                            </div>
                            <div class="form">
                                <input class=" form-control mt-2" placeholder="Email" name="email" required type="email">
                                <span class="input-border"></span>
                            </div>
                            <textarea class="form-control  mt-2" placeholder="Message" cols="30" rows="5" name="message"></textarea>

                            <button class="btn-drop  nav-link m-3" name="btn_cont">Send</button>
                        </form>

                    </div>
                    <div class="col-lg-5">
                        <div class="text-contact-en">
                            <p>Title : Iraq - Baghada</p>
                            <p>Email : Union@gmail.com</p>
                            <p>Phone : 07725933735</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include 'inc/footer.php' ?>

    <?php

    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_cont'])) {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = "INSERT INTO  contact (username , email , text) VALUES ('$name' , '$email' , '$message')";
        $res = mysqli_query($con, $query);
        if ($res) {
            header('location:about_en.php');
        }
    }

    ?>