<div class="col-md-1"></div>
<div class="col-md-10">
    <div class="hwrap-en">
        <div class="news">
            Latest News
        </div>
        <marquee behavior="" direction="left">
            <div class="hmove">
                <?php
                $query = "SELECT * FROM posts where status ='1' and type ='1' ORDER BY id DESC ";
                $sql_post = mysqli_query($con, $query);
                while ($row_post = mysqli_fetch_assoc($sql_post)) {
                ?>
                    <div class="hitem"><a href="details_post_en.php?id=<?php echo $row_post['id'] ?>"><?php echo $row_post['postTitle_en'] ?></a></div>
                <?php
                }
                ?>

            </div>
        </marquee>

    </div>
</div>
<div class="col-md-1"></div>