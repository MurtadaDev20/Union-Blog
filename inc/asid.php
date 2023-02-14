<div class="col-md-3 ">
    <div class="catagories mb-5">
        <h4>الفئات</h4>
        <ul dir="rtl">
            <?php
            $query_catigories = "SELECT * FROM  catigories  ORDER BY id DESC";
            $sql_catigories = mysqli_query($con, $query_catigories);
            while ($row_catigories = mysqli_fetch_assoc($sql_catigories)) {
            ?>
                <li>
                    <a href="categories_post.php?categories=<?php echo $row_catigories['catigoryName'];?>">
                        <span><i class="fas fa-tags"></i></span>
                        <span><?php echo $row_catigories['catigoryName']; ?></span>
                    </a>
                </li>
            <?php
            }

            ?>




        </ul>
    </div>
    <div class="last-posts" dir="rtl">
        <h4 class="text-center">احدث المنشورات</h4>
        <div class="posts">
            <div class="row">
                <?php
                $query = "SELECT * FROM posts where status ='1'  ORDER BY id DESC LIMIT 3";
                $sql_post = mysqli_query($con, $query);
                while ($row_post = mysqli_fetch_assoc($sql_post)) {
                ?>
                    <div class=" col-md-5 ">
                        <a href="details_post.php?id=<?php echo $row_post['id']?>">
                            <img src="./admin/img/<?php echo $row_post['postImage'] ?>" alt="">
                        </a>

                    </div>
                    <div class="col-md-7 ">
                        <a href="details_post.php?id=<?php echo $row_post['id']?>">
                            <p> <?php echo $row_post['postTitle'] ?></p>
                        </a>
                    </div>

                <?php
                }
                ?>

            </div>

        </div>

    </div>
</div>