

<html>
<head>
<title>Insert StreamSemDiv</title>
</head>
<body>

<br>
<br>
<h1><a href="<?php echo site_url('index.php/streamsemdiv_control/DisplayStreamSemDiv'); ?>">Display StreamSem</a></h1>

<br>
<br>


 <h1 align=center>Insert StreamSemdDiv</h1>

<br><br><hr><br>
<form action="<?php $this->load->helper('url'); ?> StreamSemDivInsert2" method="post">


<table >



<tr>
<td>Select Stream </td>
<td>
<select name="streamdb">
  <option value="1">Mechanical</option>
  <option value="2">Computer</option>
  <option value="3">Information Technology</option>
  <option value="4">Electronics & Communication</option>
  <option value="5">Electrical</option>
  <option value="6">Civil</option>

</select>

</td>
</tr>

<tr>
<td>Select Semester</td>
<td>
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


</td>
</tr>

<tr>
<td>Select Division</td>
<td>
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

</tr>





<tr>
<td>Is Display</td>
<td><input type="checkbox" name="IsDisplay"></td>
</tr>


<tr>

<td><input type="submit" name="btnSubmit" value="Insert StreamSem " ></td>
</tr>




</table>
</form>
</body>
</html>