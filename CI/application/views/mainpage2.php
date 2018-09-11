<table>
<?php foreach($result as $r): ?>
<tr>

<td><?php echo $r->Ssid; ?></td>
<td><?php echo $r->StName; ?></td>
<td><?php echo $r->SemName; ?></td>
</tr>
<?php endforeach; ?> 

</table>


<html>
<head>
<title>Main Page</title>
</head>
<body>

<br>
<br>
<h1><a href="<?=base_url()?>index.php/display/DisplayStream">Diplay Stream</a></h1>
<br>
<br>
<h1><a href="<?=base_url()?>index.php/Semester_control" target="_blank">Diplay Semester</a></h1>

<br>
<br>
<h1>-</h1>


<br>
<br>
<h1><a href="<?=base_url()?>index.php/streamsem_control">Diplay StreamSem</a></h1>

<br>
<br>
<h1><a href="<?=base_url()?>index.php/streamsemdiv_control">Display StreamSemDiv</a></h1>

<br>
<br>
<h1><a href="<?=base_url()?>index.php/student_control">Diplay Student </a></h1>


<br>
<br>
<h1><a href="<?=base_url()?>index.php/user_control">Diplay User</a></h1>



<table border=1>

<tr>
<td><h5><a href="<?=base_url()?>index.php/display/DisplayStream">Diplay Stream</a></h5>
</td>
</tr>

<tr>
<td><h5><a href="<?=base_url()?>index.php/Semester_control" target="_blank">Diplay Semester</a></h5>
</td>
</tr>


<tr>
<td><h5><a href="<?=base_url()?>index.php/division_control">Diplay Division</a></h5>
</td>
</tr>


<tr>
<td><h5><a href="<?=base_url()?>index.php/streamsem_control">Diplay StreamSem</a></h5>
</td>
</tr>

<tr>
<td><h5><a href="<?=base_url()?>index.php/streamsemdiv_control">Display StreamSemDiv</a></h5>
</td>
</tr>

<tr>
<td><h5><a href="<?=base_url()?>index.php/student_control">Diplay Student </a></h5>
</td>
</tr>

<tr>
<td><h5></h5>
</td>
</tr>

<table  class='table table-striped table-bordered 
table-hover'>



<tr>
<td><b>2</b></td>
<th><b><button class="btn btn-warning btn-lg">Large Size</button></b></th>
<th><b></b></th>
<th><b></b></th>
</tr>

<tr>
<th><b>3</b></th>
<th><b><button class="btn btn-warning btn-lg">Large Size</button></b></th>
<th><b></b></th>
<th><b></b></th>
</tr>

<tr>
<th><b>4</b></th>
<th><b><button class="btn btn-warning btn-lg">Large Size</button></b></th>
<th><b></b></th>
<th><b></b></th>
</tr>





<div class="row">
<div class="space-6"></div>
<div class="col-sm-7 infobox-container">
<div class="infobox infobox-green  ">
<div class="infobox-icon">
<i class="icon-comments"></i>
</div>

<div class="infobox-data">
				<span class="infobox-data-number">32</span>
												<div class="infobox-content">comments + 2 reviews</div>
											</div>
											<div class="stat stat-success">8%</div>
										</div>

										<div class="infobox infobox-blue  ">
											<div class="infobox-icon">
												<i class="icon-twitter"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">11</span>
												<div class="infobox-content">new followers</div>
											</div>

											<div class="badge badge-success">
												+32%
												<i class="icon-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-pink  ">
											<div class="infobox-icon">
												<i class="icon-shopping-cart"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">8</span>
												<div class="infobox-content">new orders</div>
											</div>
											<div class="stat stat-important">4%</div>
										</div>

										<div class="infobox infobox-red  ">
											<div class="infobox-icon">
												<i class="icon-beaker"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">7</span>
												<div class="infobox-content">experiments</div>
											</div>
										</div>
<div class="infobox infobox-orange2  ">
											<div class="infobox-chart">
												<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">6,251</span>
												<div class="infobox-content">pageviews</div>
											</div>

											<div class="badge badge-success">
												7.2%
												<i class="icon-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-blue2  ">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="42" data-size="46">
													<span class="percent">42</span>%
												</div>
											</div>

											<div class="infobox-data">
												<span class="infobox-text">traffic used</span>

												<div class="infobox-content">
													<span class="bigger-110">~</span>
													58GB remaining
												</div>
											</div>
										</div>

										<div class="space-6"></div>

										<div class="infobox infobox-green infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="61" data-size="39">
													<span class="percent">61</span>%
												</div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Task</div>
												<div class="infobox-content">Completion</div>
											</div>
										</div>




<p>
											<button class="btn">Default </button>
											<button class="btn btn-primary">Primary</button>
											<button class="btn btn-info">Info</button>
											<button class="btn btn-success">Success</button>
										</p>



</body>
</html>





