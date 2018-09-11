<html>
<head>
<title>Display stream</title>
</head>
<body>


<h1></h1>

<h2 class="pink">
<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
<a href="<?=base_url()?>index.php/display/StreamInsert1" class="green">Insert Stream</a>
</h2>




<hr>

<div class="page-header">

<h3>
<i class="icon-double-angle-right"></i>
Display Stream
</h3>

</div>



<br>
<br>


<table border=1  class='table table-striped table-bordered 
table-hover'>
<tr>
<td>Edit</td>
<td>Delete</td>

<td>Stream Name</td>
<td>Is Display</td>


</tr>


<?php foreach($result as $r): ?>
<tr>
<td><a href="<?php echo site_url('index.php/display/StreamEdit1');?>?id=<?php echo $r->Stid;?>" class ="btn btn-xs btn-info"><i class='icon-edit bigger-120'></i></a>  </td>
<td><a href="<?php echo site_url('index.php/display/StreamDelete1');?>?id=<?php echo $r->Stid;?>"  class='btn btn-xs btn-danger'><i class='icon-trash bigger-120'></i></a></td>


<td><?php echo $r->StName; ?></td>
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
<br>
<br>
</body> 
</html> 