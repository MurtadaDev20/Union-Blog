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
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600&display=swap" rel="stylesheet">

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
    <title>عن الاتحاد</title>
</head>
<style>
    body {
        background-color: #eeeeee !important;
    }

    .content {
        /* height: 100vh; */
        background-color: #fcfcfc;
        padding-top: 71px;

    }

    img.mainImg {
        height: 400px;
    }
</style>

<body>

    <!-- Start Navbar -->
    <?php include 'inc/nav.php' ?>





    <div class="content " id="about">
        <div class="container">

            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Container for the image gallery -->
                    <!-- <div class="container"> -->

                    <!-- Full-width images with number text -->
                    <div class="mySlides">
                        <div class="numbertext">1 / 6</div>
                        <img class="mainImg" src="./img/about.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 6</div>
                        <img class="mainImg" src="img/photo_2023-02-11_15-23-25.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 6</div>
                        <img class="mainImg" src="img/photo_2023-02-11_15-28-55.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 6</div>
                        <img class="mainImg" src="img/about.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">5 / 6</div>
                        <img class="mainImg" src="img/photo_2023-02-11_15-23-25.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">6 / 6</div>
                        <img class="mainImg" src="img/about.jpg" style="width:100%">
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <!-- Image text -->
                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>

                    <!-- Thumbnail images -->
                    <div class="row mb-5">
                        <div class="column">
                            <img class="demo cursor" src="./img/about.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="img/photo_2023-02-11_15-23-25.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="img/photo_2023-02-11_15-28-55.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="img/about.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="img/photo_2023-02-11_15-23-25.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="img/about.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <!-- <div class="post-image-about mb-3">
                                
                                <img class="lazy-load" data-src="img/aboutim.jpg" alt="">

                            </div> -->
                    </div>
                    <!-- 0 <div class="col-md-1"></div> -->
                    <div class="col-md-7" dir="rtl">
                        <!-- <h3 class="about-title">عن الاتحاد</h3> -->
                        <h4 class="about-title">دعني افوز فان لم استطع ....</h4>
                        <h4 class="about-title">فدعني اكون شجاعا بالمحاولة</h4>
                        <div class="postContent p-3">
                            تأسس الاولمبياد العراقي سنة 2001 في بغداد وهو واحد من الاتحادات الرياضية التي تهتم بشريحة مهمة من المجتمع
                            (الاعاقة الذهنية)
                            من خلال وضع برنامج علمي رياضي صحيح فضلا عن تقديم المشورة التي تعزز وتطور القدرات البدنية والذهنية
                        </div>
                        <h5 class="about-title mt-5">اهداف الاولمبياد الخاص العراقي</h5>
                        <div class="postContent p-3 mb-5">
                            <ol type="1">
                                <li>تهيئة المدربين الاكفاء للعمل التطوعي في المعاهد والمنتخبات الوطنية</li>
                                <li>المشاركة في الدورات التدريبية الخاصة بالفعاليات</li>
                                <li>توفير التجهيزات التدريبية والمستلزمات للفرق المشاركة في التدريبات</li>
                                <li>اجراء الفحوصات الدورية للاعبين</li>
                                <li>تطوير قابلية المعاق ذهنيا</li>
                                <li>تقوية العلاقات بين اللاعبين وعوائلهم في المجتمع</li>
                            </ol>
                        </div>
                        <h5 class="about-title mt-5">الالعاب التي تمارس في الاولمبياد الخاص العراقي</h5>
                        <div class="postContent p-3 mb-5">
                            <ol type="5">
                                <li>كرة القدم</li>
                                <li>العاب القوى</li>
                                <li>رفع الاثقال</li>
                                <li>السباحة</li>
                                <li>تنس الطاولة</li>
                                <li>كرة السلة</li>
                                <li>الدراجات</li>
                                <li>البوتشي</li>
                                <li>كرة اليد</li>
                                <li>البولينغ</li>
                                <li>الريشة الطائرة</li>
                                <li>التنس الارضي</li>
                                <li>الطائرة الشاطئية</li>
                                <li>الفلور بول</li>
                            </ol>
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
                    تواصل معنا
                </h1>
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5">
                        <div class="text-contact">
                            <p>العنوان :- العراق - بغداد - وزارة الشباب والرياضة</p>
                            <p>البريد الالكتروني :- So_iraq@yahoo.com</p>
                            <!-- <p>رقم الهاتف : 07738499559</p> -->
                        </div>

                    </div>

                    <div class="col-lg-5" dir="rtl">
                        <form action="" method="POST">
                            <div class="form">
                                <input class="form-control mt-2" placeholder="الاسم" required="" name="username" type="text">
                                <span class="input-border"></span>
                            </div>
                            <div class="form">
                                <input class=" form-control mt-2" placeholder="عنوان البريد الالكتروني" name="email" required type="email">
                                <span class="input-border"></span>
                            </div>
                            <textarea class="form-control  mt-2" placeholder="الرسالة" cols="30" rows="5" name="message"></textarea>

                            <button class="btn-drop  nav-link m-3" name="btn_cont">ارسال</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
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
            header('location:about.php');
        }
    }

    ?>