<?php include('views/elements/header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h1>Latest News from <?php echo $rss_title; ?></h1>

            <p>
                <?php
                if (isset($_SESSION['uID'])) {
                    echo '<p>User ID number ' . $_SESSION['uID'] . ', ' . $_SESSION['last_name'] . ', is logged in.</p>';
                } else {
                    echo '<p>No one is logged in.</p>';
                }
                ?>
            </p>
        </div>



        <p>
            <?php
            if( is_array($items) ) {

                foreach ($items as $item) {
                    echo $item->title . '<br/>' . $item->link . '<hr>';
                }
            }

                echo $rss_article_descrip;
            ?>
        </p>

    </div>

<?php include('views/elements/footer.php'); ?>