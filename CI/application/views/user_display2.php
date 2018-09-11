<?php
include_once("user_display1.php");
?>



<html>
<head>
<title>Display User Detail</title>
</head>
<body>

<br>
<br>
			
<h2 class="pink">
<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
<a href="<?=base_url()?>index.php/user_control/UserInsertA1" class="green">Insert User Detail</a>

</h2>




<br>
<br>
<hr>
<div class="page-header">

<h3>
<i class="icon-double-angle-right"></i>
Display User Detail
</h3>

</div>



<br>
<br>


<table border=1 class='table table-striped table-bordered 
table-hover'>
<tr>
<td>Edit</td>
<td>Delete</td>

<td>UserID</td>
<td>Username</td>
<td>First Name</td>


<td>IsAdmin</td>

</tr>


<?php foreach($result as $r): ?>
<tr>
<td><a href="<?php echo site_url('index.php/user_control/UserEditA1');?>?id=<?php echo $r->UserId
;?>" class ="btn btn-xs btn-info"><i class='icon-edit bigger-120'></i></a>  </td>

<td><a href="<?php echo site_url('index.php/user_control/UserDeleteA1');?>?id=<?php echo $r->UserId
;?>" class='btn btn-xs btn-danger'><i class='icon-trash bigger-120'></i></a></td>


<td><?php echo $r->UserId; ?></td>
<td><?php echo $r->Username; ?></td>
<td><?php echo $r->FirstName; ?></td>




<?php

if($r->IsAdmin==1)
{
	$y="yes";
}
else
{
	$y="no";
}
?>
<td><?php echo $y; ?></td>


</tr>
<?php endforeach; ?> 

</table>
</body> 
</html> 