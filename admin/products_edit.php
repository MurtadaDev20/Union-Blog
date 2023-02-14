<?php
include 'function/config.php'; ?>
<?php include 'inc/header.php'; ?>


<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $count = 0;
    global $con;
    $id = $_GET['id'];
    $query = "SELECT * FROM posts where id = '$id'";
    $res = mysqli_query($con, $query);
    $count = mysqli_num_rows($res);

    if ($count > 0) {
        $row = mysqli_fetch_assoc($res);
        $postTitle = $row['postTitle'];
        $postTitle_en = $row['postTitle_en'];
        $postImage = $row['postImage'];
        $postContent = $row['postContent'];
        $postContent_en = $row['postContent_en'];
        $postAuthor = $row['postAuthor'];
        $postAuthor_en = $row['postAuthor_en'];
    } else {
        header("location:products_manage.php");
    }
} else {
    header("location:products_manage.php");
}
?>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include 'inc/nav.php' ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include 'inc/aside.php' ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">


                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">تعديل مقال</h3>
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">

                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label"> عنوان المقال بالعربي</label>
                                        <input type="text" class="form-control" id="exampleInputText1" name="title" value="<?php echo $postTitle ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label"> عنوان المقال بالانكليزي</label>
                                        <input type="text" class="form-control" id="exampleInputText1" name="title_en" value="<?php echo $postTitle_en ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">التصنيف بالعربي</label>
                                        <select name="cat_name" class="form-control" id="">
                                            <?php
                                            global $con;
                                            $query = mysqli_query($con, "SELECT * FROM catigories");

                                            while ($row = mysqli_fetch_assoc($query)) {
                                            ?>
                                                <option value="<?php echo $row['id'] ?>"><?php echo $row['catigoryName'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">التصنيف بالانكليزي</label>
                                        <select name="cat_name_en" class="form-control" id="">
                                            <?php
                                            global $con;
                                            $query = mysqli_query($con, "SELECT * FROM catigories");

                                            while ($row = mysqli_fetch_assoc($query)) {
                                            ?>
                                                <option value="<?php echo $row['id'] ?>"><?php echo $row['catigoryName_en'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">اختر صورة </label>
                                        <input type="file" class="form-control" id="exampleInputText1" name="img" required>
                                    </div>
                                    <div>
                                        <img src="img/<?php echo $postImage ?>" alt="" width="200px">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">المحتوى</label>
                                        <textarea type="text" class="form-control" cols="30" rows="10" id="summernote" name="desc" required><?php echo $postContent ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">المحتوى بالانكليزي</label>
                                        <textarea type="text" class="form-control" cols="30" rows="10" id="summernote_en" name="desc_en" required><?php echo $postContent_en ?></textarea>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label"> كاتب المقال </label>
                                        <input type="text" class="form-control" id="exampleInputText1" name="postAuthor" value="<?php echo $postAuthor ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label"> كاتب المقال بالانكليزي</label>
                                        <input type="text" class="form-control" id="exampleInputText1" name="postAuthor_en" value="<?php echo $postAuthor_en ?>" required>
                                    </div>








                                    <button type="submit" class="btn btn-primary" name="post_add_btn">تعديل</button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
                <!-- /.card -->
        </div> -->
    </div>

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include 'inc/footer.php' ?>


    <?php

    global $con;

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['post_add_btn'])) {

        $title = $_POST['title'];
        $title_en = $_POST['title_en'];
        $cat_name = $_POST['cat_name'];
        $desc = $_POST['desc'];
        $desc_en = $_POST['desc_en'];
        $postAuthor = $_POST['postAuthor'];
        $postAuthor_en = $_POST['postAuthor_en'];


        $img = $_FILES['img']['name'];
        $type = $_FILES['img']['type'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $size = $_FILES['img']['size'];

        $img_ext = explode('.', $img);
        $img_correct_ext = strtolower(end($img_ext));
        $allow = array('jpg', 'png', 'jpeg');
        $path = "img/" . $img;

        $msg = "";
        if (empty($title)) {
    ?>
            <script>
                $(function() {
                    Swal.fire('حدث خطا', 'الرجاء ادخل  العنوان', 'error')
                })
            </script>
        <?php
        } elseif (empty($title_en)) {
        ?>
            <script>
                $(function() {
                    Swal.fire('حدث خطا', 'الرجاء ادخل العنوان بالانكليزي ', 'error')
                })
            </script>
        <?php
        } elseif (empty($postAuthor)) {
        ?>
            <script>
                $(function() {
                    Swal.fire('حدث خطا', 'الرجاء قم بادخال كاتب المقال ', 'error')
                })
            </script>
        <?php
        } elseif (empty($postAuthor_en)) {
        ?>
            <script>
                $(function() {
                    Swal.fire('حدث خطا', 'الرجاء قم بادخال كاتب المقال ', 'error')
                })
            </script>
        <?php
        } elseif (empty($desc)) {
        ?>
            <script>
                $(function() {
                    Swal.fire('حدث خطا', 'الرجاء قم بادخال المحتوى ', 'error')
                })
            </script>
        <?php
        } elseif (empty($desc_en)) {
        ?>
            <script>
                $(function() {
                    Swal.fire('حدث خطا', 'الرجاء قم بادخال المحتوى ', 'error')
                })
            </script>
            <?php
        } elseif (in_array($img_correct_ext, $allow)) {
            if ($size < 5000000) {

                $query = "UPDATE posts SET postTitle = '$title',postTitle_en = '$title_en', postCat ='$cat_name'	 , postImage ='$img' , postContent='$desc',postContent_en='$desc_en', postAuthor = '$postAuthor' ,postAuthor_en = '$postAuthor_en' WHERE id = '$id'";
                $result = mysqli_query($con, $query);

                if ($result) {

            ?>
                    <script>
                        $(function() {
                            Swal.fire(' تمت تعديل الخبر', '  ', 'success')
                        })
                    </script>
                <?php
                    header("location:products_manage.php");
                    move_uploaded_file($tmp_name, $path);
                }
            } else {
                ?>
                <script>
                    $(function() {
                        Swal.fire('حجم الصورة كبير', '  ', 'error')
                    })
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                $(function() {
                    Swal.fire('لايمكنك اضافة هذا النوع من الامتداد في الصور', '  ', 'error')
                })
            </script>
    <?php
        }
    }




    ?>