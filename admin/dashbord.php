<?php include 'function/config.php' ?>
<?php include 'inc/header.php' ?>



<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php include 'inc/nav.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include 'inc/aside.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">الواجهة الرئيسية</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                <li class="breadcrumb-item active">لوحة التحكم </li>
              </ol> -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <?php
                  $query = mysqli_query($con, "SELECT * FROM  catigories");
                  $count = 0;
                  while ($row = mysqli_fetch_assoc($query)) {
                  ?>
                    <?php $count;
                    $count++;
                    ?>
                  <?php

                  }
                  ?>

                  <h3><?php echo $count  ?><sup style="font-size: 20px"></sup></h3>

                  <p> الفئات</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>

                </div>
                <!-- <a href="news_manage.php" class="small-box-footer"> معلومات اكثر<i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <?php
                  $query = mysqli_query($con, "SELECT * FROM  posts");
                  $count = 0;
                  while ($row_pro = mysqli_fetch_assoc($query)) {
                  ?>
                    <?php
                    $count;
                    $count++;
                    ?>
                  <?php

                  }
                  ?>


                  <h3><?php echo $count ?><sup style="font-size: 20px"></sup></h3>

                  <p>المقالات</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <!-- <a href="news_latest.php" class="small-box-footer">معلومات اكثر<i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <?php
                  $query = mysqli_query($con, "SELECT * FROM  contact");
                  $count = 0;
                  while ($row_pro = mysqli_fetch_assoc($query)) {

                  ?>
                    <?php
                    $count;
                    $count++;
                    ?>
                  <?php

                  }
                  ?>

                  <h3><?php echo $count ?><sup style="font-size: 20px"></sup></h3>



                  <p>الرسائل</p>
                </div>
                <div class="icon">
                  <i class="fab fa-facebook-messenger"></i>
                </div>
                <!-- <a href="news_contact.php" class="small-box-footer">معلومات اكثر<i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <?php
                  $query = mysqli_query($con, "SELECT * FROM  visitor");
                  $count = 0;
                  while ($row_pro = mysqli_fetch_assoc($query)) {

                  ?>
                    <?php
                    $count;
                    $count++;
                    ?>
                  <?php

                  }
                  ?>

                  <h3><?php echo $count ?><sup style="font-size: 20px"></sup></h3>



                  <p>عدد زوار الموقع</p>
                </div>
                <div class="icon">
                  <i class="fas fa-eye"></i>
                </div>
                <!-- <a href="news_contact.php" class="small-box-footer">معلومات اكثر<i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>



            <!-- ./col -->
          </div>
          <!-- /.row -->

          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'inc/footer.php' ?>