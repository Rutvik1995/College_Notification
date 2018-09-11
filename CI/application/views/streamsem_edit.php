<?php
$id = $_GET['id'];
//echo $id;
?>

<html>
<head>
<title>Edit StreamSem</title>
</head>
<body>
<br>
<br>


<hr>
<div class="page-header">

<h3>
<i class="icon-double-angle-right"></i>
Edit StreamSem
</h3>

</div>





<br><br>
<form action="<?php $this->load->helper('url'); ?> StreamSemEdit2?Did=<?php echo $id ?>" method="post"  class="form-horizontal" role="form">


<?php
 foreach($result as $r): 
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
   
<option value="1" <?php if($x==$m) echo $y;?>>Mechanical</option>

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
Edit StreamSem
</button>
</div>
</div>                






<?php endforeach; ?>



</form>

</body>
</html>