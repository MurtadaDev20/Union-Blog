<?php include 'inc/header.php' ?>

<!-- Start Navbar -->
<?php include 'inc/nav_en.php' ?>
<?php



?>
<div class="content mt-5">
    <div class="container">

        <div class="row">
            <?php include 'inc/title_news_en.php' ?>
            <div class="col-md-1"></div>
            <?php include 'inc/asid_en.php' ?>

            <div class="col-md-7">
                <?php
                $query = "SELECT * FROM posts where status ='1' and type = '0' ORDER BY id DESC ";
                $sql_post = mysqli_query($con, $query);
                while ($row_post = mysqli_fetch_assoc($sql_post)) {

                ?>
                    <div class="post text-center" dir="ltr">
                        <div class="post-image">
                            <a href="details_post_en.php?id=<?php echo $row_post['id'] ?>">
                                <img class="lazy-load" data-src="./admin/img/<?php echo $row_post['postImage']; ?>" alt="">
                            </a>
                        </div>
                        <div class="post-title mt-4 mb-4">
                            <h4>
                                <a href="details_post_en.php?id=<?php echo $row_post['id'] ?>"><?php echo $row_post['postTitle_en']; ?></a>
                            </h4>
                        </div>
                        <div class="post-details">
                            <div class="post-info" dir="ltr">
                                <span><?php echo $row_post['postAuthor_en']; ?> <i class="fas fa-user"></i> </span>
                                <span> <?php echo $row_post['postDate']; ?> <i class="far fa-calendar-alt"></i></span>
                                <span><i class="fas fa-tags"></i>
                                    <?php

                                    $query_catigories = "SELECT * FROM  catigories where id = '$row_post[postCat]' ORDER BY id DESC";
                                    $sql_catigories = mysqli_query($con, $query_catigories);
                                    $row_catigories = mysqli_fetch_assoc($sql_catigories);
                                    echo $row_catigories['catigoryName_en'];
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="postContent p-3">
                            <?php
                            if (strlen($row_post['postContent_en']) > 150) {
                                $row_post['postContent_en'] = substr($row_post['postContent_en'], 0, 300) . "..... <a href='details_post_en.php?id=$row_post[id]'>More</a> ";
                            }
                            echo strip_tags( $row_post['postContent_en'] , "<a>");
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