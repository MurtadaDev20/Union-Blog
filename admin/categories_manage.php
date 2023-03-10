<?php include 'inc/header.php' ?>
<?php include 'function/config.php' ?>

<?php
global $con;
$query =  "SELECT * FROM catigories ORDER BY id DESC ";
$res = mysqli_query($con, $query);

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


                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ادارة الفئات</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered  text-center">
                            <thead>
                                <tr>
                                    <th scope="col">العدد</th>
                                    <th scope="col"> اسم التصنيف بالعربي</th>
                                    <th scope="col"> اسم التصنيف بالانكليزي</th>
                                    <th scope="col">العمليات</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 0;
                                $num = 1; //Count
                                while ($row = mysqli_fetch_assoc($res)) {

                                    $query_posts = ("SELECT * FROM posts where postCat = '$row[id]'");
                                    $res_posts = mysqli_query($con , $query_posts);
                                    $count = mysqli_num_rows($res_posts);
                                ?>
                                    <tr>

                                        <td><?php echo $num; ?></td>
                                        <td><?php echo $row['catigoryName'] ?></td>
                                        <td><?php echo $row['catigoryName_en'] ?></td>

                                        <td>
                                            <a class="btn btn-info btn-md" href="categories_edit.php?id=<?php echo $row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                                            <?php
                                            if($count > 0)
                                            {
                                                echo " ";
                                            }
                                            else
                                                {
                                                        ?>

                                                            <a class="btn btn-danger btn-md" href="categories_del.php?id=<?php echo $row['id'] ?>"><i class="fas fa-trash"></i></a>

                                                        <?php
                                                }
                                            
                                                
                                            

                                            ?>
                                        </td>


                                    <?php
                                    $num++;
                                }
                                    ?>

                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">

                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include 'inc/footer.php' ?>