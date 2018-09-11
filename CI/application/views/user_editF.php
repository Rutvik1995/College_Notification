<?php
$id = $_GET['id'];
//echo $id;
?>



<html>
<body>

<br>
<br>


<div class="alert alert-block alert-success">
<button type="button" class="close" data-dismiss="alert">
</button>


<h1>Edit User Detail</h1>

<strong class="green">


</strong>
</div>




<form   class="form-horizontal" role="form" action="<?php $this->load->helper('url'); ?> UserEditF2?Did=<?php echo $id ?>" method="post">

<?php foreach($result as $r): ?>



<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Name</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtName"  class="col-xs-10 col-sm-5"  value="<?php echo $r->FirstName; ?>"  />											
</div>
</div>

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Username</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtUName"  class="col-xs-10 col-sm-5"  value="<?php echo $r->Username; ?>"  />                     
</div>
</div>



<?php
if($r->IsAdmin==1)
{
//echo "yes"; 
$chk1="checked";
//echo $chk1;
}
else
{
  $chk1="unchecked";
}
?>


<?php
$x= $r->StName;


$i="Information Technology";
$e="Electronics & Communication";
$m="Mechanical";
$c="Computer";
$c2="Civil Engineering";
$e2="Electrical";
$y="selected";


//<?php if(strcmp($m,$x) ) echo $y;
?>




<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Select Stream</label>


<div class="col-sm-9">
<select name="streamdb">
   
<option value="2" <?php if($x==$m) echo $y;?>>Mechanical</option>

  <option value="2" <?php if($x==$c) echo $y;?>>Computer</option>

  <option value="3" <?php if($x==$i) echo$y;?>>Information Technology</option>

  <option value="4" <?php if($x==$e) echo$y;?>>Electronics & Communication</option>


  <option value="5" <?php if($x==$e2) echo$y;?>>Electrical</option>


  <option value="6" <?php if($x==$c2) echo$y;?>>Civil Engineering</option>

</select>


</div>
</div>



<div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9">
									
<button class="btn btn-info" type="submit"   name="btnSubmit">
											
<i class="icon-edit bigger-120"></i>
Edit User Detail
</button>
</div>
</div>								


<?php endforeach; ?>

</form>
</body>
</html>




