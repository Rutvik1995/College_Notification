



<html>
<head>
	<title></title>
</head>
<body>

<style>
td 
{
    text-align:center; 
    vertical-align:middle;
}

table
{
	text-align:center; 
    vertical-align:middle;
}	


</style>

<div class="alert alert-block alert-success">
<button type="button" class="close" data-dismiss="alert">
<br>
</button>


<h4><center>Welcome to LDRP  college Admin</center></h4>
<strong class="green">


</strong>
</div>
<br>
<br>



<table align="center"   class='table table-striped table-bordered 
table-hover' >
	
<tr>
<td><img src="http://localhost/CI/assets/avatars/stream.png" width="60" height="60" ></td>
<td><img src="http://localhost/CI/assets/avatars/semester.png" width="60" height="60" ></td>
<td><img src="http://localhost/CI/assets/avatars/division.png" width="60" height="60" ></td>
</tr>

<tr>

<td><a href="<?=base_url()?>index.php/display/DisplayStream"  style = "width:100%"  class="btn" >Diplay Stream</a>
</td>

<td><a href="<?=base_url()?>index.php/Semester_control" style = "width:100%" class="btn">Display Semester </a></td>
</td>



<td><a href="<?=base_url()?>index.php/division_control" style = "width:100%" class="btn" >Diplay Division</a></td>
</tr>

</tr>


	
<tr>
<td><img src="http://localhost/CI/assets/avatars/r.png" width="60" height="60" ></td>
<td><img src="http://localhost/CI/assets/avatars/streamsemdiv.png" width="60" height="60" ></td>
<td><img src="http://localhost/CI/assets/avatars/graduated.png" width="60" height="60" ></td>
</tr>

<tr>

<td><a href="<?=base_url()?>index.php/streamsem_control"  style = "width:100%"  class="btn" >Diplay StreamSem</a>
</td>

<td><a href="<?=base_url()?>index.php/streamsemdiv_control" style = "width:100%" class="btn">Display StreamSemDiv </a></td>
</td>



<td><a href="<?=base_url()?>index.php/student_control" style = "width:100%" class="btn" >Diplay Student Detail</a></td>
</tr>

</tr>


	
<tr>
<td><img src="http://localhost/CI/assets/avatars/teacher.png" width="60" height="60" ></td>
<td><img src="http://localhost/CI/assets/avatars/message.png" width="60" height="60" ></td>
<td><img src="http://localhost/CI/assets/avatars/st.png" width="60" height="60" ></td>
</tr>

<tr>

<td><a href="<?=base_url()?>index.php/user_control"  style = "width:100%"  class="btn" >Diplay User Detail</a>
</td>

<td><a href="<?=base_url()?>index.php/msg_controll" style = "width:100%" class="btn">Display Message </a></td>
</td>



<td><a href="<?=base_url()?>index.php/student_control" style = "width:100%" class="btn" >Diplay Student</a></td>
</tr>

</tr>



</table>



</body>
</html>