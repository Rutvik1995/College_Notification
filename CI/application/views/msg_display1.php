

<html>
<head>
<title>Display User Detail</title>
</head>
<body>

<br>
<br>
			
<h2 class="pink">
<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
<a href="<?=base_url()?>index.php/msg_controll/MsgInsert1" class="green">Post Message</a>

</h2>




<br>
<br>
<hr>
<div class="page-header">

<h3>
<i class="icon-double-angle-right"></i>
Display Message
</h3>

</div>



<br>
<br>


<table border=1 class='table table-striped table-bordered 
table-hover'>
<tr>
<td>Edit</td>
<td>Delete</td>

<td>MsgId</td>
<td>Message Title</td>
<td>Message Reason</td>
<td>Message</td>
<td>Date of message </td>
<td>Stream</td>
<td>Semester</td>
<td>Division</td>

<td>Sender Name</td>
<td>Is Display</td>
</tr>


<?php foreach($result as $r): ?>
<tr>
<td><a href="<?php echo site_url('index.php/msg_controll/MsgEdit1');?>?id=<?php echo $r->MsgId
;?>" class ="btn btn-xs btn-info"><i class='icon-edit bigger-120'></i></a>  </td>

<td><a href="<?php echo site_url('index.php/msg_controll/MsgDelete1');?>?id=<?php echo $r->MsgId
;?>" class='btn btn-xs btn-danger'><i class='icon-trash bigger-120'></i></a></td>


<td><?php echo $r->MsgId; ?></td>
<td><?php echo $r->MsgTitle; ?></td>
<td><?php echo $r->ReasonMessage; ?></td>
<td><?php echo $r->Message; ?></td>
<td><?php echo $r->DOM; ?></td>
<td><?php echo $r->StName; ?></td>
<td><?php echo $r->SemName; ?></td>
<td><?php echo $r->DivName; ?></td>

<td><?php echo $r->FirstName; ?></td>

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