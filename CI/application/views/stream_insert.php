<html>
<head>
<title>Insert data</title>
</head>
<body>


<h2 class="pink">
<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
<a href="<?=base_url()?>index.php/display/DisplayStream" class="green">Display Stream</a>

</h2>




 <hr>
<div class="page-header">

<h3>
<i class="icon-double-angle-right"></i>
Insert  Stream
</h3>

</div>




<form action="<?php $this->load->helper('url'); ?> StreamInsert2" method="post"   class="form-horizontal" role="form"   >


<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Stream Name</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtName"  class="col-xs-10 col-sm-5" />											
</div>
</div>



<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Want to Display</label>
								
<div class="checkbox" >
<label><span class="lbl">       </span>
													
<input  type="checkbox" name="IsDisplay" class="ace"  class="col-xs-10 col-sm-5" >
<span class="lbl"   style=" padding-left: 20px;"> </span>
</label>
</div>
<br>								


<div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9">
									
<button class="btn btn-info" type="submit"   name="btnSubmit">
											
<i class="icon-edit bigger-120"></i>
Insert Stream
</button>
</div>
</div>								





</form>
</body>
</html>