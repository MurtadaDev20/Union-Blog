<?php include 'inc/header.php' ?>

<!-- Start Navbar -->
<?php include 'inc/nav.php' ?>
<?php
if (isset($_GET['categories']) && !empty($_GET['categories'])) {
    $count = 0;
    global $con;
    $categories = $_GET['categories'];
    $query = "SELECT * FROM catigories where catigoryName = '$categories'";
    $res = mysqli_query($con, $query);



    $row_cat = mysqli_fetch_assoc($res);
} else {
    header("location:index.php");
}
?>
<div class="content mt-5">
    <div class="container">

        <div class="row ">
            <?php include 'inc/title_news.php' ?>
            <div class="col-md-1"></div>
            <?php include 'inc/asid.php' ?>
            <div class="col-md-7">
                <?php
                $query = "SELECT * FROM posts where status ='1' and postCat = '$row_cat[id]' ORDER BY id DESC ";
                $sql_post = mysqli_query($con, $query);
                while ($row_post = mysqli_fetch_assoc($sql_post)) {

                ?>
                    <div class="post text-center" dir="rtl">
                        <div class="post-image">
                            <a href="details_post.php?id=<?php echo $row_post['id'] ?>">
                                <img class="lazy-load" data-src="./admin/img/<?php echo $row_post['postImage']; ?>" alt="">
                            </a>
                        </div>
                        <div class="post-title mt-4 mb-4">
                            <h4>
                                <a href="details_post.php?id=<?php echo $row_post['id'] ?>"><?php echo $row_post['postTitle']; ?></a>
                            </h4>
                        </div>
                        <div class="post-details">
                            <div class="post-info">
                                <span><i class="fas fa-user"></i> <?php echo $row_post['postAuthor']; ?></span>
                                <span><i class="far fa-calendar-alt"></i> <?php echo $row_post['postDate']; ?></span>
                                <span><i class="fas fa-tags"></i>
                                    <?php
                                    echo $row_cat['catigoryName'];
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="postContent p-3">
                            <?php
                            if (strlen($row_post['postContent']) > 150) {
                                $row_post['postContent'] = substr($row_post['postContent'], 0, 300) . "..... <a href='details_post.php?id=$row_post[id]'>اقراء المزيد</a> ";
                            }
				echo strip_tags( $row_post['postContent'] , "<a>");
                            ?>

                        </div>
                    </div>
                <?php

                }



                ?>


            </div>
            <div class="col-md-1"></div>

        </div>
    </div>
</div>
<?php include 'inc/footer.php' ?>