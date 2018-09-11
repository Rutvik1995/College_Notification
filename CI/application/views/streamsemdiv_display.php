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
<a href="<?=base_url()?>index.php/streamsemdiv_control/StreamSemDivInsert1" class="green">Insert SemStreamDiv</a>
</h2>



<br>
<br>
<hr>

<div class="page-header">

<h3>
<i class="icon-double-angle-right"></i>
Display StreamSem
</h3>

</div>



<br>
<br>


<table border=1  class='table table-striped table-bordered 
table-hover'>
<tr>


<td>Edit</td>
<td>Delete</td>

<td>StreamSemDiv Id</td>
<td>Stream Name</td>
<td>Semester</td>
<td>Division</td>
<td>Is Display</td>

<?php foreach($result as $r): ?>
<tr>

<td><a href="<?php echo site_url('index.php/streamsemdiv_control/StreamSemDivEdit1');?>?id=<?php echo $r->Ssdid
;?>" class ="btn btn-xs btn-info"><i class='icon-edit bigger-120'></i></a>  </td>

<td><a href="<?php echo site_url('index.php/streamsemdiv_control/StreamSemDivDelete1');?>?id=<?php echo $r->Ssdid
;?>" class='btn btn-xs btn-danger'><i class='icon-trash bigger-120'></i></a></td>



<td><?php echo $r->Ssdid; ?></td>
<td><?php echo $r->StName; ?></td>
<td><?php echo $r->SemName; ?></td>
<td><?php echo $r->DivName; ?></td>
<?php

if($r->IsDisplay==1)
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