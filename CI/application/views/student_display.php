<html>
<head>
<title>Display Semester</title>
</head>
<body>
<br>
<br>
<h1></h1>

<h2 class="pink">
<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
<a href="<?=base_url()?>index.php/student_control/StudentInsert1" class="green">Insert Student Detail</a>
</h2>



<br>
<br>
<hr>

<div class="page-header">

<h3>
<i class="icon-double-angle-right"></i>
Display Student Detail
</h3>

</div>




<br>
<br>





<table border=1 id='sample-table-1' class='table table-striped table-bordered 
table-hover'>
<tr>

<td>Edit</td>
<td>Delete</td>
<td>StudentID</td>
<td>First Name</td>
<td>Last Name</td>
<td>Gender</td>
<td>Mobile Number</td>
<td>Email Id</td>
<td>Stream</td>
<td>Semester</td>
<td>Division</td>
<td>ID Number</td>
<td>Enrollment Number</td>
<td>IsAdmin</td>



</tr>
<?php foreach($result as $r): ?>
<tr>


<td><a href="<?php echo site_url('index.php/student_control/StudentEdit1');?>?id=<?php echo $r->StudentId
;?>" class ="btn btn-xs btn-info"><i class='icon-edit bigger-120'></i></a>  </td>

<td><a href="<?php echo site_url('index.php/student_control/StudentDelete1');?>?id=<?php echo $r->StudentId
;?>" class='btn btn-xs btn-danger'><i class='icon-trash bigger-120'></i></a></td>

<td><?php echo $r->StudentId; ?></td>
<td><?php echo $r->FirstName; ?></td>
<td><?php echo $r->LastName; ?></td>
<td><?php echo $r->Gender; ?></td>
<td><?php echo $r->MobileNo; ?></td>
<td><?php echo $r->EmailId; ?></td>
<td><?php echo $r->StName; ?></td>
<td><?php echo $r->SemName; ?></td>
<td><?php echo $r->DivName; ?></td>
<td><?php echo $r->IdNo; ?></td>
<td><?php echo $r->EnrollNo; ?></td>
<td><?php echo $r->IsDisplay; ?></td>



</tr>
<?php endforeach; ?> 

</table>
<br>
<br>
<br>
</body> 
</html> 