<?php
$id = $_GET['id'];
//echo $id;
?>

<html>
<head>
<title>Edit Division</title>
</head>
<body>

<br>
<br>

<div class="page-header">

<h3>
<i class="icon-double-angle-right"></i>
Edit Division
</h3>

</div>









<hr><br>
<form action="<?php $this->load->helper('url'); ?> DivisionEdit2?Did=<?php echo $id ?>" method="post"  class="form-horizontal" type="button" role="form">


<?php foreach($result as $r): ?>




<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Division Name</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2"  value="<?php echo $r->DivName; ?>" name="txtName"  class="col-xs-10 col-sm-5" />											
</div>
</div>

<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Division Reference</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" value="<?php echo $r->DivRefer; ?>"  name="txtName"  class="col-xs-10 col-sm-5" />											
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
													
<input  type="checkbox" name="IsDisplay" <?php echo $chk1;?> class="ace"  class="col-xs-10 col-sm-5" >
<span class="lbl"   style=" padding-left: 20px;"> </span>
</label>
</div>
<br>								




<div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9">
									
<button class="btn btn-info" type="submit"   name="btnSubmit">
											
<i class="icon-edit bigger-120"></i>
Update Division
</button>
</div>
</div>								


<?php endforeach; ?>



 

</form>
</body>
</html>