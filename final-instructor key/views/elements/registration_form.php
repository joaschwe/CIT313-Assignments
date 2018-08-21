<form id="registration_form" action="<?php echo BASE_URL;?>register/<?php echo $task?>" method="post">

<fieldset>
<legend>Register Today!</legend>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" maxlength="20"  />
<br />
            
<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" maxlength="20"  />
<br />
 
<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" maxlength="100"  />
<br />

<label for="password">Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password" name="password" value="<?php echo $password;?>" maxlength="100"  />

<label for="confirmpassword">Confirm Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="confirmpassword" name="confirmpassword" value="<?php echo $password;?>" maxlength="100"  />

<br />

<input type="hidden" name="uID" value="<?php echo $uID ?>"/>
 
<button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
</fieldset>
</form>

<script type="text/javascript">

function validateForm()
{

  var requiredFields = ["first_name","last_name","email", "password", "confirmpassword"];
  
  var errorFields = [];
  var errorMessages = [];
  

  for (i = 0; i < requiredFields.length; i++)
  {
    var formFieldValue = document.forms["registration_form"][requiredFields[i]].value;
  
    if (checkEmpty(formFieldValue))
    {
      
      //This field generated an error, so we will "push" it onto our errorArray
      errorFields.push(requiredFields[i]);
      
      // And add a message to our errorMessages array
      errorMessages.push(requiredFields[i] + " is a required field.");
    }
  }
  
  
  // WRITE CODE HERE TO CHECK IF THE PASSWORD FIELDS MATCH.  IF THEY DO NOT, YOU NEED TO ADD ELEMENT(S) TO THE errorFields AND errorMessages ARRAYS
  

  var pass1 = document.getElementById("password").value;
  var pass2 = document.getElementById("confirmpassword").value;

  if (isPasswordMatch(pass1, pass2) == false)
  {

      var ArrayLength = requiredFields.length;

      errorFields.push(requiredFields[1]);
      errorMessages.push("Password and Password Confirmation does not match");
  }


  
  
  //Now we have to see if our errorArray has any items in it
  
  if (errorFields.length > 0)
  {
    // LOOP THROUGH THE ERROR FIELDS
    for (i = 0; i < errorFields.length; i++)
    {
      // For each element in the array, highlight the field that has the error
      var errorElement = document.getElementById(errorFields[i]);
      errorElement.className += " hasError";
    }
    
    // NOW CREATE A STRING THAT INCLUDES ALL OF OUR ERROR MESSAGES
    var allErrorMessages = "";
    
    for (i = 0; i < errorMessages.length; i++)
    {
      allErrorMessages += errorMessages[i] + "<br/>";
    }
    
    // ADD THE ERROR MESSAGES STRING TO THE errorList DIV
    document.getElementById("errorList").innerHTML = allErrorMessages;
    
    // AND SHOW THE errorList DIV, which is hidden by default
    document.getElementById("errorList").style.display = "inherit";
    
    return false; // Prevent submission of the form
  }
  else // There are no errors
  {
    return true; // Submit the form
  }
  
  
}

