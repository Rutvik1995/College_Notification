<?php
$id = $_GET['id'];
//echo $id;
?>

<html>
<head>
<title>Edit StreamSemDiv</title>
</head>
<body>
<br>
<br>


<h1>Edit StreamSemDiv</h1>

<br><br><hr><br>
<form action="<?php $this->load->helper('url'); ?> StreamSemDivEdit2?Did=<?php echo $id ?>" method="post" class="form-horizontal" role="form">

<div class="form-group">

<?php foreach($result as $r): ?>
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter First Name</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" value="<?php echo $r->FirstName ?>" name="txtFName"  class="col-xs-10 col-sm-5" />                      
</div>
</div>

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Last Name</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtLName" value="<?php echo $r->LastName;?>" class="col-xs-10 col-sm-5" />                      
</div>
</div>

<?php
$x=$r->Gender;
$m="male";
$f="female";

$chk1="checked";
?>

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Gender</label>


<div class="col-sm-9">
 <input type="radio" name="gender" value="male" <?php if($x==$m) echo 
  $chk1?>>Male
  <input type="radio" name="gender" value="female" <?php if($x==$f) echo $chk1;  ?>>Femal
</div>
</div>


<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Mobile Number</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name ="txtNumber"  class="col-xs-10 col-sm-5" value="<?php echo $r->MobileNo; ?>" />                      

</div>
</div>

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Email Id</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name ="txtEmail" value="<?php echo $r->EmailId; ?>" class="col-xs-10 col-sm-5" />                      

</div>
</div>

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Select Stream</label>

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




<div class="col-sm-9">
<select name="streamdb">
<option value="1" <?php if($x==$m) echo $y;?>>Mechanical</option>

  <option value="2" <?php if($x==$c) echo $y;?>>Computer</option>

  <option value="3" <?php if($x==$i) echo$y;?>>Information Technology</option>

  <option value="4" <?php if($x==$e) echo$y;?>>Electronics & Communication</option>


  <option value="5" <?php if($x==$e2) echo$y;?>>Electrical</option>


  <option value="6" <?php if($x==$c2) echo$y;?>>Civil Engineering</option>


</select>


</div>
</div>


<?php
$x= $r->SemName;


$a="First";
$b="Second";
$c="Third";
$d="Fourth";
$e="Fifth";
$f="Sixth";
$g="Seventh";
$h="Eighth";

$y="selected";

?>



<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Select Semester</label>


<div class="col-sm-9">
<select name="semesterdb">
<option value="1" <?php if($x==$a) echo$y;?>>First</option>
  <option value="2" <?php if($x==$b) echo$y;?>>Second</option>
  <option value="3" <?php if($x==$c) echo$y;?>>Third</option>
  <option value="4" <?php if($x==$d) echo$y;?>>Fourth</option>
  <option value="5" <?php if($x==$e) echo$y;?>>Fifth</option>
  <option value="6" <?php if($x==$f) echo$y;?>>Sixth</option>
  <option value="7" <?php if($x==$g) echo$y;?>>Seventh</option>
  <option value="8" <?php if($x==$h) echo$y;?>>Eighth</option>
</select> 

</div>
</div>


<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Select Division</label>
<?php
$x= $r->DivName;


$a="A";
$b="B";
$c="C";
$d="D";
$e="E";
$f="F";
$g="G";
$h="H";
$i="I";
$j="J";

$y="selected";

?>


<div class="col-sm-9">
<select name="divdb">
<option value="1" <?php if($x==$a) echo$y;?>>A</option>
  <option value="2" <?php if($x==$b) echo$y;?>>B</option>
  <option value="3" <?php if($x==$c) echo$y;?>>C</option>
  <option value="4" <?php if($x==$d) echo$y;?>>D</option>
  <option value="5" <?php if($x==$e) echo$y;?>>E</option>
  <option value="6" <?php if($x==$f) echo$y;?>>F</option>
  <option value="7" <?php if($x==$g) echo$y;?>>G</option>
  <option value="8" <?php if($x==$h) echo$y;?>>H</option>
  <option value="9" <?php if($x==$h) echo$y;?>>I</option>
  <option value="10" <?php if($x==$h) echo$y;?>>J</option>
</select>
</div>
</div>

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter ID Number</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name ="txtID" value="<?php echo $r->IdNo; ?>" class="col-xs-10 col-sm-5" />                      

</div>
</div>

<div class="form-group">
              
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Enter Enrollment Number</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name ="txtEnrollment"  class="col-xs-10 col-sm-5" value="<?php echo $r->EnrollNo; ?>" />                      

</div>
</div>



<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Want to Display</label>
                
<div class="checkbox" >
<label><span class="lbl">       </span>
                          
<input  type="checkbox" <?php echo $chk1;  ?> name="IsDisplay" class="ace"  class="col-xs-10 col-sm-5" >
<span class="lbl"   style=" padding-left: 20px;"> </span>
</label>
</div>
<br>                

<div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9">
                  
<button class="btn btn-info" type="submit"   name="btnSubmit">
                      
<i class="icon-edit bigger-120"></i>
Edit Student Detail
</button>
</div>
</div>                



<?php endforeach; ?>

</form>

</body>
</html>