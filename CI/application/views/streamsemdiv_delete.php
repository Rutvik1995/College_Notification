<?php
$id = $_GET['id'];
//echo $id;
?>

<html>
<head>
<title>Delete StreamSemDiv</title>
</head>
<body>
<br>
<br>


<h1>Delete StreamSemDiv</h1>

<br><br><hr><br>
<form action="<?php $this->load->helper('url'); ?> StreamSemDivDelete2?Did=<?php echo $id ?>" method="post">

<table>






<?php foreach($result as $r): ?>
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
<tr>
<td> Stream Name</td>
<td>
<select name="streamdb">
   
<option value="2" <?php if($x==$m) echo $y;?>>Mechanical</option>

  <option value="2" <?php if($x==$c) echo $y;?>>Computer</option>

  <option value="3" <?php if($x==$i) echo$y;?>>Information Technology</option>

  <option value="4" <?php if($x==$e) echo$y;?>>Electronics & Communication</option>


  <option value="5" <?php if($x==$e2) echo$y;?>>Electrical</option>


  <option value="6" <?php if($x==$c2) echo$y;?>>Civil Engineering</option>

</select>
  

</td>
</tr>

<?php
$x= $r->DivName;


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

<tr>
<td>Select Semester</td>
<td>
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


</td>
</tr>



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

<tr>
<td>Select Semester</td>
<td>
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


</td>
</tr>






<tr>
<td>Want to Display</td>
<?php //echo $r->IsDisplay; ?>
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
<td><input type='checkbox' name='IsDisplay' <?php echo $chk1;  ?> ></td>
</tr>

<tr>
<td><input type="submit" name="btnSubmit" value="Update StreamSemDiv" ></td>
</tr>


<?php endforeach; ?> 







</table>
</form>

</body>
</html>