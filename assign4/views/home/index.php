<?php include('views/elements/header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h1>Latest News from <?php echo $rss_title ?></h1>
        </div>

        <p>
            <?php
            $rss = simplexml_load_file('http://feeds.reuters.com/reuters/technologyNews');

            $link = $rss->channel->item->link;

            $num_items = 8;

            foreach ($rss->channel->item as $item) {
                echo '<h4>
                        <a href="' . $link . '">' . $item->title . '</a> (' . $item->pubDate . ')</h4>
                        ' . $item->description . '<hr>';
            } ?>
        </p>

    </div>

<?php include('views/elements/footer.php'); ?>