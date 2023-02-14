<div class="col-md-1"></div>
<div class="col-md-10">

    <div class="hwrap">

        <div class="news">
            <p>الاخبار المهمة</p>
        </div>
        <marquee behavior="" direction="right">
            <div class="hmove" dir="rtl">
                <?php
                $query = "SELECT * FROM posts where status ='1' and type ='1' ORDER BY id DESC ";
                $sql_post = mysqli_query($con, $query);
                while ($row_post = mysqli_fetch_assoc($sql_post)) {
                ?>
                    <div class="hitem"><a href="details_post.php?id=<?php echo $row_post['id'] ?>"><?php echo $row_post['postTitle'] ?></a></div>
                <?php
                }
                ?>

            </div>
        </marquee>
    </div>
</div>
<div class="col-md-1"></div>