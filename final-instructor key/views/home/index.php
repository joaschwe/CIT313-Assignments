<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>IUPUI CIT313 Final Project</h1>
  </div>
</div>

<div class="container">

<div id="image">
<img src="bacon.png" width="100%" class="img  no-repeat center top" />
</div>


<div id="text">
<h2>This is an example of how your final project should function.</h2>
<h4>Your final project should have its own look and feel</h4>
<p>Bacon ipsum dolor amet sausage beef ribs jowl hamburger meatloaf chicken. Pork loin cupim turducken boudin short ribs frankfurter filet mignon pancetta short loin shoulder swine chicken. Corned beef cow kielbasa bacon, short loin meatloaf pork belly leberkas tongue. Leberkas frankfurter pig shank beef chicken porchetta boudin pork chop chuck fatback tongue.</p>

<p>Shankle sausage andouille tri-tip. Shoulder porchetta beef ribs brisket, andouille strip steak jerky kevin. Chicken ham hock tail bacon kevin salami beef ribs prosciutto picanha. Chuck biltong sausage meatball capicola brisket pig, alcatra beef ribs pork chop strip steak pork loin tri-tip short ribs tail.</p>

<p>Frankfurter hamburger chicken ball tip salami, tri-tip cupim meatball spare ribs. Picanha chuck cupim capicola short loin. Capicola beef short loin ball tip. Bacon tri-tip turducken swine meatball landjaeger rump turkey pork belly sausage boudin hamburger shankle spare ribs. Frankfurter turducken bacon shankle, pork shank meatloaf tongue. Cupim boudin short ribs ham capicola porchetta strip steak brisket, jerky bresaola shoulder jowl. Filet mignon short ribs shank, tail brisket beef ribs chuck.</p>

<p>Flank fatback filet mignon jowl, salami spare ribs shank chicken kevin pork. Doner turducken ham flank filet mignon tenderloin jerky biltong pork prosciutto. Ball tip tri-tip pig drumstick, beef shankle short ribs turducken. Sirloin ham turkey, venison jerky fatback pork. Pork spare ribs t-bone brisket cow kevin cupim ball tip shank tri-tip.</p>

<p>Turducken pig leberkas porchetta ball tip tri-tip, bacon landjaeger pork belly. Swine ground round kielbasa meatball pork belly shankle. Chicken pork chop pancetta shankle. Meatball flank shoulder tongue jerky kevin.</p>

<div>
	
</div>
             <?php 
              if (!$u->isRegistered()) {
             ?>
	<h5>Register Now!</h5>
	<button><a href="<?php echo BASE_URL?>register/">Register</a></button>
	<?php
}
	?>

</div>

<div id="weather">
	<h4>Get your local weather</h4>
	<h6>Enter your zip code below</h6>
	<?php include('views/elements/weather_form.php');?>
</div>


</div>

<?php include('views/elements/footer.php');?>
