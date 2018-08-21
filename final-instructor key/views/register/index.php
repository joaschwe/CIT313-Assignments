<?php
require_once ('application/config.php');
include('views/elements/header.php');
?>

<script type="text/javascript">

function validateForm()
{

  var requiredFields = ["first_name","last_name","email", "password", "confirmpassword"];
  
  var errorFields = [];
  var errorMessages = [];
  

  for (i = 0; i < requiredFields.length; i++)
  {
    var formFieldValue = document.forms["registerform"][requiredFields[i]].value;
  
    if (checkEmpty(formFieldValue))
    {
      
      errorFields.push(requiredFields[i]);
      
      errorMessages.push(requiredFields[i] + " is a required field.");
    }
  }
  
  
  var pass1 = document.getElementById("password").value;
  var pass2 = document.getElementById("confirmpassword").value;

  if (isPasswordMatch(pass1, pass2) == false)
  {

      var ArrayLength = requiredFields.length;

      errorFields.push(requiredFields[1]);
      errorMessages.push("Password and Password Confirmation does not match");
  }


  
  if (errorFields.length > 0)
  {

    for (i = 0; i < errorFields.length; i++)
    {
      var errorElement = document.getElementById(errorFields[i]);
      errorElement.className += " hasError";
    }
    
    var allErrorMessages = "";
    
    for (i = 0; i < errorMessages.length; i++)
    {
      allErrorMessages += errorMessages[i] + "<br/>";
    }
    

    document.getElementById("errorList").innerHTML = allErrorMessages;
    
    document.getElementById("errorList").style.display = "inherit";
    
    return false; 
  }
  else 
  {
    return true; 
  }
  
  
}

function checkEmpty(incomingValue)
{
  if (incomingValue == null || incomingValue == "")
  {
    return true;
  }
  else
  {
    return false;
  }
}

function isPasswordMatch(passwordOne, passwordTwo)
{

    if (passwordOne == passwordTwo)
    {
        return true;
    }
    else
    {

        return false;
    }
}

</script>

<div class="container">
  <div class="page-header">
   <h1> Register Here </h1>
  </div>

    <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <?php echo $message?>
    </div>
  <?php }?>
    
  <div id="errorList" class="alert alert-error"></div>
<div class="row">

      <div class="span8">
        <form action="<?php echo BASE_URL;?>register/<?php echo $task?>" method="post"  id='registerform' onsubmit="return validateForm();">
          <label for='first_name'>First Name</label>
          <input type="text" id='first_name' class="register" name="first_name" value="">
          <label for='last_name'>Last Name</label>
          <input type="text" id='last_name' class="register" name="last_name" value="">
          <label for="email">Email</label>
          <input type="text" id='email' class="register" name="email" value="">
          <label for="password">Password</label>
          <input type="password" id="password" class="register" name="password" value="">
          <label for="confirmpassword">Confirm Password</label>
          <input type="password" id="confirmpassword" class="register" name="confirmpassword" >
          
          <br/>
          <input type="hidden" name="uID" value=""/>
          <button id="registersubmit" type="submit" class="btn btn-primary" >Submit</button>
        </form>

        
      </div>
    </div>
<div>
<?php 
echo '<div><a href="'.BASE_URL.'">Back to home page</a></div>';
?>
</div>
<?php include('views/elements/footer.php');
?>

