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
			</ul>
			<ul class="logreg">
				<li><a href="/login">Login </a> </li>
				<li><a href="/register"><span class="register">Register</span></a></li>
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="#"><img src="image/logo1.png" alt="logo"></a>
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="http://127.0.0.1:8000">HOME</a> </li>
				<li>
					<a href="Carlist.php">Car List</a>
 
				</li>
					
					<li>
					<a href="notice.php">Rent Car</a>
 
				</li>
				<li>
					<a href="Dealers.php">DEALERS</a>
 
				</li>
				<li>
					<a href="contact.php">CONTACT</a>
 
				</li>
				<li>
					<a href="About.php">About Us</a>
				
					
					</li>
				
				
			</ul>
		</div>
	</nav>
</div>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="jquery.tabledit.min.js"></script>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
<?php
$connect = mysqli_connect("localhost", "root", "", "admin");
$query = "SELECT * FROM carlist ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>						

			
<!------ Include the above in your HEAD tag ---------->

 <div class="container">    
 <div id="loginbox" style="margin-top:50px;margin-right:35%;" >                    
 <div class="panel panel-info" >
 <div class="panel-heading">
  <div class="panel-title">RentCar</div>
     </div>     

<div style="padding-top:30px" class="panel-body" >

<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            

<form action="events.php" method="post">
     <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><label for="text">Car</label></span>
<input type="text" class="form-control"  id="title" name="title" required="">
</div>  
<div style="margin-bottom: 25px" class="input-group"> 
<span class="input-group-addon"><label for="text">Car Details</label></span>
<textarea type="text" id="body" class="form-control"  name="body" required=""></textarea>
</div> 
<button type="submit" name="register_btn" class="btn btn-success">Add Car</button>
</form>    



    </div>                     
 </div>  
        </div>
       </div>
		
		</div>
</div>
			<div class="container">  
   <br />  
   <br />  
   <br />  
                        <div class="table-responsive">  
    <h3 align="center">Update/Delete</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>Carname</th>
       <th>Modelnumber</th>
	    <th>Price</th>
		<th>Condition</th>
      </tr>
     </thead>
     <tbody>
    
   
 <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td><img style="width:250px; height:200px;" src="'.$row["Carname"].'"></td>
       <td>'.$row["Modelnumber"].'</td>
	   <td>'.$row["Price"].'</td>
	    <td>'.$row["Condition"].'</td>
	   	        </tr>
			
      ';
     }
     ?>
     </tbody>
    </table>
	
   </div>  
  </div>   
  

	</div>
  
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'events.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'title'], [2, 'body']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>
	</div>