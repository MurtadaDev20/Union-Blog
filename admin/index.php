<?php
    ob_start();
    session_start();
include 'function/db.php';
include 'inc/header.php';
?>



<style>
    body {
        background-color: #f3f3f3 !important;
    }

    .login {
        width: 350px;
        margin: 80px auto;
        background-color: white;
        padding: 20px 40px;
        border-radius: 10px;
    }

    .login h5 {
        color: #555;
        margin-bottom: 20px;
        text-align: center;

    }

    /* .login button {
        margin-right: 80px;
    } */
</style>
</head>

<body>

    <div class="login" dir="rtl">

        <form method="POST">

            <h5>تسجيل الدخول</h5>
            <?php


            ?>
            <div class="form-group text-right">
                <label for="mail" class="text-right"> الايميل</label>
                <input type="text" class="form-control mt-3 mb-3" id="email" name="email" />
            </div>
            <div class="form-group text-right">
                <label for="pass" class="text-right"> الرمز السري</label>
                <input type="password" class="form-control mt-3" id="pass" name="password" />
            </div>
            <div class="form-group text-right">

                <input type="checkbox" class="form-check-inpu" id="flexCheckDefault" name="remamber" /> 
                <label class="form-check-label" for="flexCheckDefault">تذكرني</label>
            </div>
            <button class="btn btn-primary detils-btn " name="btn_login"> تسجيل الدخول</button>

        </form>
    </div>

    <?php
    //Login Checking 


    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];



        if (empty($email) || empty($password)) {
            //set_message(display_error("please Fill in the Blanks "));
    ?>
            <script>
                $(function() {
                    Swal.fire('الحقول فارغة', 'املا الحقول اولا', 'question')
                })
            </script>
            <?php
        } else {

            // query
            $count = 0;
            $user = "SELECT * FROM admin where email ='$email' AND password = '$password'";
            $result = mysqli_query($con, $user);
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            if ($count > 0) {

                
                    if ($row) {
                        // $_SESSION['email'] = $email;
                        //Set Cookies
                        if(isset($_POST['remamber']))
                        {
                            setcookie("auth",json_encode($user[0]),time()+(86400*30),"/");
                        }
                        else
                        {
                            $_SESSION['auth']=$user[0];
                        }
                        ?>
                        <script>
                            $(function() {
                                Swal.fire('تم تسجيل الدخول', '  ', 'success')
                            })
                        </script>
                    <?php
                        // $_SESSION['id']=$row['id'];
                        header("REFRESH:1;URL=dashbord.php");
            
                        
                    } else {
                        echo "Not Work";
                    }
                
            } else {
                ?>
                <script>
                    $(function() {
                        Swal.fire('خطا في البريد الاكتروني او كلمة المرور', '  ', 'error')
                    })
                </script>
    <?php
            }
        }
    }





    ?>