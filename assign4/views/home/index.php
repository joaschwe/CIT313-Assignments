<?php include('views/elements/header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h1>Hello From the View</h1>

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
            $rss = simplexml_load_file('http://www.fox59.com/feed');
//            var_dump($rss);
            foreach ($rss->channel->item as $item) {
                echo $item->title.'<br/>'.$item->link.'<hr>';
            }

            ?>

        </p>

    </div>

<?php include('views/elements/footer.php'); ?>