<?php include 'function/config.php' ?>
<?php include 'inc/header.php' ?>


<?php
global $con;
$sql = "SELECT * FROM posts  where type = '0'  ORDER BY id DESC";
$res = mysqli_query($con, $sql);



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
            <h3 class="card-title">ادارة المقالات</h3>

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
                  <th scope="col">عنوان الخبر</th>
                  <th scope="col"> التصنيف </th>

                  <th scope="col">كاتب المقال</th>
                  <th scope="col">الصور</th>


                  <!-- <th scope="col">الوصف</th> -->

                  <th scope="col">التاريخ</th>

                  <th scope="col">الحالة</th>

                  <th scope="col">تعديل</th>
                  <th scope="col">حذف</th>
                  <th scope="col">الغاء وتفعيل</th>
                  <th scope="col">اضافة للاخبار المهمة</th>
                  <!-- <th scope="col">اضافة للمنتجات الاكثر طلبا</th> -->

                </tr>
              </thead>
              <tbody>
                <?php


                $num = 1; //Count
                while ($row = mysqli_fetch_assoc($res)) {
                  $cate_name = mysqli_query($con, "SELECT * FROM catigories where id = $row[postCat]");
                  $row_cat = mysqli_fetch_assoc($cate_name);
                ?>
                  <tr>

                    <td><?php echo $num; ?></td>
                    <td><?php echo $row['postTitle'] ?></td>
                    <td><?php echo $row_cat['catigoryName'] ?></td>
                    <td><?php echo $row['postAuthor'] ?></td>
                    <td><img src="img/<?php echo $row['postImage']; ?>" height="50px" width="50px" class="img-circle"></td>
                    <td><?php echo $row['postDate'] ?></td>
                    <!-- <td>
                      <?php
                      // if (strlen($row['description']) > 150) {
                      //   $row['description'] = substr($row['description'], 0, 100) . ".....";
                      // }
                      // echo $row['description']
                      ?>
                    </td> -->






                    <td>
                      <?php

                      if ($row['status'] == 1) {
                        echo "مفعل";
                      } else {
                        echo "غير مفعل";
                      }

                      ?></td>



                    <td class="pt-3">
                      <a class="btn btn-info btn-md" href="products_edit.php?id=<?php echo $row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                    <td class="pt-3">
                      <a class="btn btn-danger btn-md" href="products_del.php?id=<?php echo $row['id'] ?>"><i class="fas fa-trash"></i></a>
                    </td>

                    <td class="pt-3">
                      <?php
                      active_status();

                      if ($row['status'] == '1') {
                        echo " <a href='products_manage.php?opr=deactive&id=" . $row['id'] . "' class='btn btn-danger '><i class='fas fa-times-circle'></i></a>";
                      } else {
                        echo " <a href='products_manage.php?opr=active&id=" . $row['id'] . "' class='btn btn-success '><i class='fas fa-check-circle'></i></a>";
                      }

                      ?>
                    </td>
                    <td>
                      <?php
                      active_type();
                      if ($row['type'] == '0') {
                        echo " <a href='products_manage.php?opr_trans=activee&id=" . $row['id'] . "' class='btn btn-success mt-2'> <i class='fas fa-plus'></i></a>";
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

    <?php

function active_type()
        {
            global $con;

            if (isset($_GET['opr_trans']) && $_GET['opr_trans'] != "") {
                $operation_transfer = $_GET['opr_trans'];
                $id = $_GET['id'];

                if ($operation_transfer == 'activee') {
                    $type = 1;
                } else {
                    $type = 0;
                }

                $query = "UPDATE posts SET type = '$type' WHERE id='$id'";
                $result = mysqli_query($con, $query);

                if ($result) {
                    header("location:products_manage.php");
                }
            }
        }
    // active_status
    function active_status()
    {
      global $con;

      if (isset($_GET['opr']) && $_GET['opr'] != "") {
        $operation = $_GET['opr'];
        $id = $_GET['id'];

        if ($operation == 'active') {
          $status = 1;
        } else {
          $status = 0;
        }

        $query = "UPDATE posts SET status = '$status' WHERE id='$id'";
        $result = mysqli_query($con, $query);

        if ($result) {
          header("location:products_manage.php");
        }
      }
    }


    ?>