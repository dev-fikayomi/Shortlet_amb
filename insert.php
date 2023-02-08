<?php include 'base.php'?>
<!-- <pre><?php print_r($_POST)?></pre> -->
<?php 
$mysqli=new mysqli ('localhost','root','','shortlet_amb');
if($mysqli->connect_error){

    printf("can not connect databse %s\n",$mysqli->connect_error);
    exit();
}
?>
<?php
if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$monthly=$_POST['monthly'];
	$address=$_POST['address'];
	$access=$_POST['access'];
	$floor=$_POST['floor'];
	$utility=$_POST['utility'];
  $descrip=$_POST['descrip'];
    $target_dir = "uploads/";

    $target_file= $target_dir . basename($_FILES["images"]["name"]);
    $temp_file=$_FILES["images"]["name"];
	move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);
    $query="INSERT INTO shortlet_amb (name,monthly,address,access,floor,utility,descrip,images) VALUES ('$name','$monthly','$address','$access','$floor','$utility','$descrip','$temp_file')";
	$insert=$mysqli->query($query);
}

?>
<div class="container mt-5 "> 

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Add a Property </legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name Of Property</label>
      <div class="col-lg-10">
        <input type="text" name="name" class="form-control"  placeholder="Name Of Property">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Monthly Charge</label>
      <div class="col-lg-10">
        <input type="text" name="monthly" class="form-control"  placeholder="Monthly Charge">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="address" rows="3" id="textArea"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Access</label>
      <div class="col-lg-10">
        <input type="text" name="access" class="form-control"  placeholder="Access">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Floor Space</label>
      <div class="col-lg-10">
        <input type="text" name="floor" class="form-control"  placeholder="Floor Space">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Utility</label>
      <div class="col-lg-10">
        <input type="text" name="utility" class="form-control"  placeholder="Utility">
      </div>
    </div>

    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="descrip" rows="3" id="textArea"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Featured Image</label>
      <div class="col-lg-10">
        <input type="file" name="images">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Rooms Images</label>
      <div class="col-lg-10">
        <input type="file" name="img[]" multiple>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-danger">Cancel</button>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

</div>
<?php include 'footer.php'?>