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


<h1>Edit Message</h1>

<strong class="green">


</strong>
</div>




<form   class="form-horizontal" role="form" action="<?php $this->load->helper('url'); ?> MsgEdit2?Did=<?php echo $id ?>" method="post">

<?php foreach($result as $r): ?>


<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Enter Message Title</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtTitle"  class="col-xs-10 col-sm-5"    value="<?php echo $r->MsgTitle; ?>"    />											
</div>
</div>


									
<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Reason Of Message</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtReason"  class="col-xs-10 col-sm-5" value="<?php echo $r->ReasonMessage; ?>"    />											
</div>
</div>
								

								
								
										

<?php
$ta= $r->ReasonMessage; 
?>
<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Enter Message </label>


<div class="col-sm-9">
<textarea rows="7" cols="50" name="txtMessage"   >
<?php echo $r->Message; ?>
</textarea>
</div>
</div>



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



</div>
</div>

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




<div class="form-group">
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Select Division</label>


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
							
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Send By</label>


<div class="col-sm-9">
<input type="Text" id="form-field-2" name="txtSend"  class="col-xs-10 col-sm-5"  value="<?php echo $r->FirstName; ?>"  />											
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
													
<input  type="checkbox" <?php echo $chk1;  ?> name="IsDisplay" class="ace"  class="col-xs-10 col-sm-5" >
<span class="lbl"   style=" padding-left: 20px;"> </span>
</label>
</div>
<br>								





<div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9">
									
<button class="btn btn-info" type="submit"   name="btnSubmit">
											
<i class="icon-edit bigger-120"></i>
Post Message
</button>
</div>
</div>								


<?php endforeach; ?>

</form>
</body>
</html>





</body>
</html>