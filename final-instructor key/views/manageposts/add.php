<?php include('views/elements/header.php');?>

<script type="text/javascript">
function validateForm()
{

  var requiredFields = ["title","category","date","tinyeditor"];
    
  
  var errorFields = [];
  var errorMessages = [];
  

  for (i = 0; i < requiredFields.length; i++)
  {
    
    
    var formFieldValue = document.forms["addpostform"][requiredFields[i]].value;
    
  
    if (checkEmpty(formFieldValue))
    {
    
      errorFields.push(requiredFields[i]);
      
      errorMessages.push(requiredFields[i] + " is a required field.");

    }
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

</script>


<div class="container">

  <div class="page-header">
    <h1> Add a Post </h1>
  </div>

    <?php if($message){?>

    <div class="alert alert-success">

      <button type="button" class="close" data-dismiss="alert">×</button>

      <?php echo $message?>

    </div>


  <?php }?>

  <div id="errorList"></div>

  <div class="row">

      <div>

          <form id="addpostform" action="<?php echo BASE_URL?>manageposts/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label for="title">Title</label>
          <input type="text" class="input-sm" id="title" name="title" value="<?php echo $title?>">
          <label for="date">Date</label>
          <?php // set timezone
date_default_timezone_set('America/Indiana/Indianapolis');?>
          <input name="date" id="date" size="16" type="date" value="<?php echo $date = date('Y-m-d H:i:s'); ?>">
          <label for="category">Category</label>
          <select class="input-sm" name="category" id="category" >
          <option value="">-- Select Category --</option>
          
          <?php
            foreach($categories as $key => $value){
              if($category == $key){
          echo "<option selected value='".$key."'>".$value."</option>" . "\n";
              }
              else {
          echo "<option value='".$key."'>".$value."</option>" . "\n";
              }
       
      }
          ?>
          
          </select>


          <label for="content">Content</label>
          <textarea id="tinyeditor"  name="content"><?php echo $content?></textarea>
          <br/>
          <input type="hidden" name="pID" value="<?php echo $pID?>"/>
          <button id="submit" type="submit" class="btn btn-primary" onclick="return validateForm();">Submit</button>
        </form>


      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>

