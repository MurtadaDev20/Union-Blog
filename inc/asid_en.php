<div class="col-md-3 ">
    <div class="catagories mb-5">
        <h4>Categories</h4>
        <ul dir="ltr">
            <?php
            $query_catigories = "SELECT * FROM  catigories  ORDER BY id DESC";
            $sql_catigories = mysqli_query($con, $query_catigories);
            while ($row_catigories = mysqli_fetch_assoc($sql_catigories)) {
            ?>
                <li>
                    <a href="categories_post_en.php?categories=<?php echo $row_catigories['catigoryName_en']; ?>">
                        <span><i class="fas fa-tags"></i></span>
                        <span><?php echo $row_catigories['catigoryName_en']; ?></span>
                    </a>
                </li>
            <?php
            }

            ?>




        </ul>
    </div>
    <div class="last-posts" dir="ltr">
        <h4 class="text-center">Latest Posts</h4>
        <div class="posts">
            <div class="row">
                <?php
                $query = "SELECT * FROM posts where status ='1'  ORDER BY id DESC LIMIT 3";
                $sql_post = mysqli_query($con, $query);
                while ($row_post = mysqli_fetch_assoc($sql_post)) {
                ?>
                    <div class=" col-md-5 ">
                        <a href="details_post_en.php?id=<?php echo $row_post['id'] ?>">
                            <img src="./admin/img/<?php echo $row_post['postImage'] ?>" alt="">
                        </a>

                    </div>
                    <div class="col-md-7 ">
                        <a href="details_post_en.php?id=<?php echo $row_post['id'] ?>">
                            <p> <?php echo $row_post['postTitle_en'] ?></p>
                        </a>
                    </div>

                <?php
                }
                ?>

            </div>

        </div>

    </div>
</div>