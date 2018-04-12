<?php include('views/elements/header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h1>Latest News from <?php echo $rss_title ?></h1>
            <h1><?php echo $rss_channel ?></h1>
        </div>

        <p><?php
             ?>
        </p>

        <p>
            <?php
            $channel_info = $rss_channel;
            foreach($channel_info->children() as $child)
            {
                echo $child->getName() . ": " . $child . "<br>";
            }



            $items = $rss_channel_items;
            $link = $items->link;

            $x = 0;
            $num_items = 8;

            foreach ($items as $item) {
                echo '<h4>
                        <a href="' . $link . '">' . $item->title . '</a> (' . $item->pubDate . ')</h4>
                        ' . $item->description . '<hr>';
                if (++$x == $num_items) break;
            } ?>
        </p>



    </div>

<?php include('views/elements/footer.php'); ?>