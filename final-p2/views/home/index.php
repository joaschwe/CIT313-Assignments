<?php include('views/elements/header.php'); ?>

<div class="container" style="margin: 0 auto;">
    <div class="container pull-left" style="width: 70%;">
        <div class="page-header">
            <h1>Latest Trends in Technology</h1>
        </div>

        <div style="width: 50%;">
            <img style="width: 100%;" src="<?php echo BASE_URL?>views/img/techtrends_v1.png" alt="tech trends banner">
        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in aliquam est, id cursus diam. In molestie sollicitudin lectus, quis convallis est hendrerit nec. Nam ut enim quis ex rutrum elementum at eu enim. Curabitur rutrum magna quis feugiat tempus. Nunc sit amet mauris a lectus ullamcorper scelerisque. Cras non eros ut sapien facilisis faucibus. Mauris scelerisque et tellus eget semper. Donec accumsan libero vitae justo ultricies, vel lacinia elit tincidunt. Vivamus mattis ullamcorper efficitur. Duis tempor, ligula nec mollis dictum, neque urna vehicula risus, vel tempor tortor nibh sit amet purus. Nunc scelerisque massa nec orci cursus commodo. Vivamus aliquet nisi at elit porttitor gravida. In hac habitasse platea dictumst. Ut vitae leo commodo, scelerisque magna dignissim, sodales diam. Aliquam sed purus imperdiet, ornare ante tincidunt, posuere magna. Aliquam volutpat lectus eu ipsum pharetra volutpat.
        </p>


    </div>

    <div class="container pull-right" style="width: 20%;">
        <!--WEATHER SIDEBAR-->
        <?php
        if(!$result) { ?>

            <div class="container" id="wx">
            <div class="page-header">
                <h1>Weather</h1>
            </div>

            <form method="post" action="<?php echo BASE_URL; ?>weather/getResults">
                <label for="zip">Enter Your Zipcode</label>
                <input type="text" name="zip" id="zip" required="zip" />
                <br/>
                <button type="submit" class="btn btn-primary">Get Weather</button>
            </form>
            <?php
        }
        else {  ?>
            </div>

            <div class="container">
                <div class="page-header">
                    <h1>Weather for <?php echo $weather->current_observation->display_location->full; ?></h1>
                </div>

                <h4><?php echo $weather->current_observation->weather; ?>&nbsp;<img src="<?php echo $weather->current_observation->icon_url; ?>" /></h4>
                <h4>Temperature: <?php echo $weather->current_observation->temperature_string; ?></h4>
                <h4>Wind: <?php echo $weather->current_observation->wind_string; ?></h4>
                <h4>Humidity: <?php echo $weather->current_observation->pressure_in . ' (' . $weather->current_observation->pressure_trend . ')'; ?></h4>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php include('views/elements/footer.php'); ?>