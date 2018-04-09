<?php include('views/elements/header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h1><?php echo $rss_title ?></h1>
        </div>

        <p>
            <?php
            $rss = simplexml_load_file('http://www.fox59.com/feed');
//            var_dump($rss);

            foreach ($rss->channel->item as $item) {
                echo $item->title.'<br/>'.$item->link.'<br/>'.$item->pubDate.'<hr>';
            }

            ?>

        </p>

    </div>

<?php include('views/elements/footer.php'); ?>