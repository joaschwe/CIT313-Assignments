<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1> Edit Post </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>manageposts/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>Title</label>
          <input type="text" class="input-sm"  name="title" value="<?php echo $title?>">
          <label for="date">Date</label>
          <input  name="date" id="date" size="16" type="date" value="<?php echo date('Y-m-d H:i:s'); ?>">
          <label for="category">Category</label>
          <select name="category" class='input-sm' id="category">
          <?php
            foreach($categories as $key => $value) {
              if($category == $key){
                  echo "<option selected value ='".$key."'>".$value."</option>";
              }
              else {
                echo "<option value ='".$key."'>".$value."</option>";
              }

            }

          ?>

          </select>


     			<label>Content</label>
          <textarea id="tinyeditor" name="content" style="width:556px;height: 200px"><?php echo $content?></textarea>
    			<br/>
          <input type="hidden" name="pID" value="<?php echo $pID?>"/>
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>


      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>

