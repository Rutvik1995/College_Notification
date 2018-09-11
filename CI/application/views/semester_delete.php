<?php
$id = $_GET['id'];
//echo $id;
?>

<html>
<head>
<title>Delete Semester</title>
</head>
<body>


<br>
<br>


<h1>Delete Semester</h1>

<br><br><hr><br>
<form action="<?php $this->load->helper('url'); ?> SemesterDelete2?Did=<?php echo $id ?>" class="form-horizontal" role="form" method="post">


<?php foreach($result as $r): ?>


<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Semester Name</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" value="<?php echo $r->SemName; ?>" name ="txtName"  class="col-xs-10 col-sm-5" />											
</div>
</div>

<?php
if($r->IsDisplay==1)
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




<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Want to Display</label>
								
<div class="checkbox" >
<label><span class="lbl">       </span>
													
<input  type="checkbox" <?php echo $chk1;?> name="IsDisplay" class="ace"  class="col-xs-10 col-sm-5" >
<span class="lbl"   style=" padding-left: 20px;"> </span>
</label>
</div>
<br>
<div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9">
									
<button class="btn btn-info" type="submit"   name="btnSubmit">
											
<i class="icon-edit bigger-120"></i>
Delete Semester
</button>
</div>
</div>								
<?php endforeach; ?>







</form>
</body>
</html>