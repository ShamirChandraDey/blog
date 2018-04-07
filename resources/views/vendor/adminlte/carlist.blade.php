@extends('adminlte::layouts.app')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="{{ asset('/js/jquery.tabledit.min.js') }}"></script>
@section('main-content')
	

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
                   
<form action="events.php" method="post">
     <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><label for="text">Car Photo</label></span>
<input type="text" class="form-control" id="pic" name="pic" required="">
</div>  
<div style="margin-bottom: 25px" class="input-group"> 
<span class="input-group-addon"><label for="text">Car Details</label></span>
<input type="text"  class="form-control" id="drop" name="drop" required="">
</div> 
<div style="margin-bottom: 25px" class="input-group"> 
<span class="input-group-addon"><label for="text">Price</label></span>
<input type="text"  class="form-control" id="time" name="time" required="">
</div> 
<button type="submit" name="car_btn" >Add Car</button>
</form>     
                                     
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
    <h3 align="center">Car List</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>Car Photo</th>
       <th>Car Details</th>
	    <th>Price</th>
      </tr>
     </thead>
     <tbody>
    
   
 <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td><img style="width:250px; height:200px;" src="'.$row["carphoto"].'"></td>
       <td>'.$row["cardetails"].'</td>
	   <td>'.$row["price"].'</td>
	   	        </tr>
			
      ';
     }
     ?>
     </tbody>
    </table>
	
   </div>  
  </div>   
  

	</div>



@endsection
