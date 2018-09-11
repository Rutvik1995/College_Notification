

<html>
<head>
<title>Insert Division</title>
</head>

<body>

<br>
<br>



<table border=1 class="table table-striped table-bordered table-hover">

<tr>
<td><center><h4>IsAdmin</h4></center></td>
<td><center><h4>IsFaculty</h4></center></td>
</tr>


<tr>
<td><a href="<?=base_url()?>index.php/user_control/DisplayUser2" class="btn btn-danger btn-block"><i class="icon-user"></i>
Admin</a></center></td>

<td><a href="<?=base_url()?>index.php/user_control/DisplayUser" class="btn btn-danger btn-block"><i class="icon-user"></i>
Faculty</a></center></td>




</table>

<hr>
<br>
<div class="page-header">

<h3>
<i class="icon-double-angle-right"></i>
Insert User Detail
</h3>

</div>




<form   class="form-horizontal" role="form"  action="<?php $this->load->helper('url'); ?> UserInsertF2" method="post">


<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Enter Username</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtUName"  class="col-xs-10 col-sm-5" />											
</div>
</div>


									
<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Password</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtPass"  class="col-xs-10 col-sm-5" />											
</div>
</div>
								

								
								
										




<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Enter Name </label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtName"  class="col-xs-10 col-sm-5" />                      
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