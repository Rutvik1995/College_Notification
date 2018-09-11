<html>
<head>
<title>Display Division</title>
</head>
<body>

<br>
<br>
<h1>
<h2 class="pink">
<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
<a href="<?=base_url()?>index.php/division_control/DivisionInsert1" class="green">Insert Division</a></h1>

</h2>



<br>
<br>
<hr>

<div class="page-header">

<h3>
<i class="icon-double-angle-right"></i>
Display Division
</h3>

</div>

<br>
<br>


<table border=1 class='table table-striped table-bordered 
table-hover'>
<tr>
<td>Edit</td>
<td>Delete</td>

<td>Division Name</td>
<td>Division Reference</td>
<td>Is Display</td>


</tr>


<?php foreach($result as $r): ?>
<tr>
<td><a href="<?php echo site_url('index.php/division_control/DivisionEdit1');?>?id=<?php echo $r->DivId; ?> "  class ="btn btn-xs btn-info" ><i class='icon-edit bigger-120'></i></a></td>

<td><a href="   <?php echo site_url('index.php/division_control/DivisionDelete1');?>?id=<?php echo $r->DivId
;?>" class='btn btn-xs btn-danger'><i class='icon-trash bigger-120'></i></a></td>


<td><?php echo $r->DivName; ?></td>
<td><?php echo $r->DivRefer; ?></td>
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