<?php include('views/elements/header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h1>Weather for <?php echo $weather->request->query; ?></h1>
        </div>

        <h4>Today's High: <?php echo $weather->weather->maxtempF; ?></h4>
        <h4>Today's Low: <?php echo $weather->weather->mintempF; ?></h4>
    </div>

<?php include('views/elements/footer.php'); ?>