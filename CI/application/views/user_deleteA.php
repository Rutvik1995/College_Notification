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


<h1>Detele User Detail</h1>

<strong class="green">


</strong>
</div>




<form   class="form-horizontal" role="form" action="<?php $this->load->helper('url'); ?> UserEditA2?Did=<?php echo $id ?>" method="post">

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


<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">IsAdmin</label>
								
<div class="checkbox" >
<label><span class="lbl">       </span>
													
<input  type="checkbox" <?php echo $chk1;  ?> name="IsAdmin" class="ace"  class="col-xs-10 col-sm-5" >
<span class="lbl"   style=" padding-left: 20px;"> </span>
</label>
</div>
<br>								





<div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9">
									
<button class="btn btn-info" type="submit"   name="btnSubmit">
											
<i class='icon-trash bigger-120'></i>
Delete User Detail
</button>
</div>
</div>								


<?php endforeach; ?>

</form>
</body>
</html>





</body>
</html>