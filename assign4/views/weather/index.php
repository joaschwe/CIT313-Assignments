<?php include('views/elements/header.php'); ?>

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

<?php include('views/elements/footer.php'); ?>