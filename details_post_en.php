<?php include 'inc/header.php' ?>

<!-- Start Navbar -->
<?php include 'inc/nav_en.php' ?>
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
    } else {
        header("location:index.php");
    }
} else {
    header("location:index.php");
}
?>

<div class="content mt-5">
    <div class="container">

        <div class="row ">
            <?php include 'inc/title_news_en.php' ?>

            <div class="col-md-1"></div>
            <?php include 'inc/asid_en.php' ?>


            <div class="col-md-7">
                <div class="post text-center" dir="ltr">
                    <div class="post-image">
                        <a href="">
                            <img class="lazy-load" data-src="./admin/img/<?php echo $row['postImage']; ?>" alt="">
                        </a>
                    </div>
                    <div class="post-title mt-4 mb-4">
                        <h4>
                            <a> <?php echo $row['postTitle_en'] ?></a>
                        </h4>
                    </div>
                    <div class="post-details">
                        <div class="post-info">
                            <span> <?php echo $row['postAuthor_en'] ?> <i class="fas fa-user"></i></span>
                            <span><?php echo $row['postDate'] ?> <i class="far fa-calendar-alt"></i></span>
                            <span>
                                <span><i class="fas fa-tags"></i>

                                    <?php
                                    $query_catigories = "SELECT * FROM catigories where id = '$row[postCat]' ORDER BY id DESC";
                                    $sql_catigories = mysqli_query($con, $query_catigories);
                                    $row_catigories = mysqli_fetch_assoc($sql_catigories);
                                    echo $row_catigories['catigoryName_en'];
                                    ?>
                                </span>
                        </div>
                    </div>
                    <div class="postContent p-3">
                        <?php echo $row['postContent_en'] ?>
                    </div>
                </div>


            </div>


        </div>
    </div>
</div>
<?php include 'inc/footer.php' ?>