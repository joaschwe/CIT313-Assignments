<?php
	include("_includes/config.php");
	include(ABSOLUTE_PATH . "/_includes/header.inc.php");
?>

<body>
<div class="container">
    <div class="content">
	<div class="main">

        <?php

        $favorites = array ('My Name'=> 'Joanna', 'Favorite color'=>'Blue', 'Favorite Book'=>'Eclipse', 'Favorite Movie'=>'Thinner', 'Favorite Website'=>'boredpanda.com');

        $firstKey = $favorites[key($favorites)];

        print "<h1>$firstKey</h1><hr>";

        function shift ($favs){
            $favorites = array_shift($favs);
            print "<ul>";
            foreach ($favs as $key=>$value){
                print "<li>$key: $value</li>";
            }
            print "</ul>";
        }

        shift($favorites, 0);

        ?>

	</div>
</div>




<?php
	include(ABSOLUTE_PATH . "/_includes/footer.inc.php");
?>
