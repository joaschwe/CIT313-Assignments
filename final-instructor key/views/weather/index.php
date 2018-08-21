<?php
include('views/elements/header.php');?>

<?php if(!$result) {?>
<div class="container">
    <div class="page-header">
      <h1>Weather</h1>
    </div>

       <?php include('views/elements/weather_form.php');?>

       <?php } else { ?>

  <div class="container">
    <div class="page-header">
    <h1>Weather for zip code: <?php echo $weather->request->query;?></h1>
  </div>
  
  <h4>High Temperature: <?php echo $weather->weather->maxtempF;?></h4>
  <h4>Low Temperature: <?php echo $weather->weather->mintempF;?></h4>
</div>

<?php
    }
?>  
<?php include('views/elements/footer.php');?>
