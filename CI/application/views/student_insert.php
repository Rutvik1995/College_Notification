

<html>
<head>
<title>Insert Student Detail</title>
</head>
<style type="text/css">
  


</style>
<body>

<br>
<br>
<h1><a href="<?php echo site_url('index.php/student_control/DisplayStudent'); ?>">Display Student Detail</a></h1>

<br>
<br>


 <h1 align=center>Insert Student Detail</h1>

<br><br><hr><br>
<form action="<?php $this->load->helper('url'); ?> StudentInsert" method="post" class="form-horizontal" role="form">

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter First Name</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtFName"  class="col-xs-10 col-sm-5" />                      
</div>
</div>

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Last Name</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtLName"  class="col-xs-10 col-sm-5" />                      
</div>
</div>


<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Gender</label>


<div class="col-sm-9">
 <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="female">Femal
</div>
</div>


<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Mobile Number</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name ="txtNumber"  class="col-xs-10 col-sm-5" />                      

</div>
</div>

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Email Id</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name ="txtEmail"  class="col-xs-10 col-sm-5" />                      

</div>
</div>

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
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Select Semester</label>


<div class="col-sm-9">
<select name="divdb">
  <option value="1">A</option>
  <option value="2">B</option>
  <option value="3">C</option>
  <option value="4">D</option>
  <option value="5">E</option>
  <option value="6">F</option>
  <option value="7">G</option>
  <option value="8">H</option>
  <option value="9">I</option>
  <option value="10">J</option>

</select>
</div>
</div>

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter ID Number</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name ="txtID"  class="col-xs-10 col-sm-5" />                      

</div>
</div>

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Enrollment Number</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name ="txtEnrollment"  class="col-xs-10 col-sm-5" />                      

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
Insert Student
</button>
</div>
</div>                



</form>
</body>
</html>