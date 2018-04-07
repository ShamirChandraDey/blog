<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>AUTO RENT A CAR </title>
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="https://www.fb.com/shamir.dey.3"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>Give us a call : +8801855395623 </li>
			
	</div>
	<!-- Navbar Up -->
	
</div>
		
	<div class="heading">
	
	<marquee>
	<h1 align="center">BEST RENT CAR DEAL</h1>
	</marquee>
	

</div>
    <h3 align="center">View List</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped"style=" margin-left:10%;width:80%;"> 
     <thead>
      <tr>
       <th>Car Photo</th>
       <th>Car Details</th>
	    <th>Price</th>
      </tr>
     </thead>
     <tbody>
	<?php
$connect = mysqli_connect("localhost", "root", "", "admin");
echo'<a style="color:white;">'.$viewid=$_GET['viewid'].'</a>';
$query = "SELECT * FROM carlist WHERE id='$viewid'";
$result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td><img style="width:20%; height:20%;" src="'.$row["carphoto"].'"></td>
       <td>'.$row["cardetails"].'</td>
	   <td>'.$row["price"].'</td>
	   	   	        </tr>
			
      ';
}

?>	

<?php

 ?>



<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>


<script type="text/javascript" src="source/js/myscript.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
</body>
</html>