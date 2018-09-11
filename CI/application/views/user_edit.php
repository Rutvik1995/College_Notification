<?php
$id = $_GET['id'];
//echo $id;
?>


<html>
<head>
<title>Insert Division</title>
</head>


<hr>
<br>
<div class="page-header">

<h3>
<i class="icon-double-angle-right"></i>
Insert User Detail
</h3>

</div>




<form   class="form-horizontal" role="form"  action="<?php $this->load->helper('url'); ?> UserEdit2" method="post">

<?php foreach($result as $r): ?>

<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Enter Username</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtUName"  class="col-xs-10 col-sm-5"  value="" />											
</div>
</div>


									
<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Password</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtPass"  class="col-xs-10 col-sm-5"  value=""/>											
</div>
</div>
								

								
								
										




<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Enter Name </label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtName"  class="col-xs-10 col-sm-5" value="" />                      
</div>
</div>



<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Select Department</label>


<div class="col-sm-9">
<select name="streamdb">
  <option value="1">Mechanical</option>
  <option value="2">Computer</option>
  <option value="3">Information Technology</option>
  <option value="4">Electronics & Communication</option>
  <option value="5">Electrical</option>
  <option value="6">Civil</option>
</select>


</div>
</div>











<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">IsAdmin</label>
								
<div class="checkbox" >
<label><span class="lbl">       </span>
													
<input  type="checkbox" name="IsAdmin" class="ace"  class="col-xs-10 col-sm-5" >
<span class="lbl"   style=" padding-left: 20px;"> </span>
</label>
</div>
<br>								





<div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9">
									
<button class="btn btn-info" type="submit"   name="btnSubmit">
											
<i class="icon-edit bigger-120"></i>
Insert User Detail
</button>
</div>
</div>								




</form>
</body>
</html>





</body>
</html>