<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <h3 class=" text-center mt-3 mb-3" style="color: white ;">
        <!-- <img  alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light text-center">لوحة التحكم</span>
    </h3>

    <!-- Sidebar -->
    <div class="sidebar">




        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href='dashbord.php' class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            لوحة التحكم
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>

                </li>





                <li class="nav-item">
                    <a href='dashbord.php' class="nav-link">
                        <i class="fas fa-store-alt"></i>
                        <p>
                            الفائات
                            <i class="fas fa-angle-left right"></i>
                            <!-- <span class="badge badge-info right">2</span> -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href='categories_add.php' class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>اضافة فئات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href='categories_manage.php' class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ادارة الفئات</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a href='dashbord.php' class="nav-link">
                        <i class="fas fa-store"></i>
                        <p>
                            المقالات
                            <i class="fas fa-angle-left right"></i>
                            <!-- <span class="badge badge-info right">2</span> -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href='products_add.php' class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>اضافة مقال جديد</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href='products_manage.php' class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ادارة المقالات</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="latest_manage.php" class="nav-link">
                        <i class="fas fa-star"></i>
                        <p>
                            المقالات المهمة
                            <!-- <i class="right fas fa-angle-left"></i> -->

                        </p>
                    </a>

                </li>





                <?php
                $query = mysqli_query($con, "SELECT * FROM  contact");
                $count = 0;
                while ($row = mysqli_fetch_assoc($query)) {

                ?>
                    <?php

                    $count++;
                    ?>
                <?php

                }
                ?>

                <li class="nav-item ">
                    <a href="contact.php" class="nav-link">
                        <i class="fab fa-facebook-messenger"></i>
                        <p>
                            الرسائل
                            <!-- <i class="right fas fa-angle-left"></i> -->
                            <span class="badge badge-info right">
                                <?php echo $count;
                                ?>
                            </span>
                        </p>
                    </a>

                </li>



                <li class="nav-item">
                    <a href='../index.php' class="nav-link" target="_blank">
                        <i class="fas fa-browser "></i>
                        <p>
                            عرض الموقع
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href='logout.php' class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>
                            تسجيل الخروج
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>

                </li>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>