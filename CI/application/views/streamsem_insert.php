<html>
<head>
<title>Insert StreamSem</title>
</head>
<body>

<br>
<br>

<h2 class="pink">
<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
<a href="<?=base_url()?>index.php/streamsem_control/DisplayStreamSem" class="green">Display StreamSem</a>

</h2>



<hr>
<div class="page-header">

<h3>
<i class="icon-double-angle-right"></i>
Insert  Semester
</h3>

</div>

<br><br><hr><br>
<form action="<?php $this->load->helper('url'); ?> StreamSemInsert" method="post" class="form-horizontal" role="form">

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Select Stream</label>


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
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Select Semester</label>


<div class="col-sm-9">
<select name="semesterdb">
  <option value="1">First</option>
  <option value="2">Second</option>
  <option value="3">Third</option>
  <option value="4">Fourth</option>
  <option value="5">Fifth</option>
  <option value="6">Sixth</option>
  <option value="7">Seventh</option>
  <option value="8">Eighth</option>
</select> 

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
Insert Semester
</button>
</div>
</div>                


</form>
</body>
</html>