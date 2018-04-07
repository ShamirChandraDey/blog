@extends('adminlte::layouts.appp')
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
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
			
												
<!------ Include the above in your HEAD tag ---------->

    <div class="table-responsive">  
    <h3 align="center">Car List</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>Car Photo</th>
       <th>Car Details</th>
	    <th>Price</th>
		<th></th>
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
	   <td><button type="submit" name="confirm_btn"><a href="confirm.php">Confirm</a></button></td>
	   	        </tr>
			
      ';
     }
     ?>
     </tbody>
    </table>
	
   </div>  
		
		
				
			</div>
		</div>
			<div class="container">  
   <br />  
   <br />  
   <br />  
           
  </div>   
  

	</div>



@endsection
