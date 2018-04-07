@extends('adminlte::layouts.app')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="{{ asset('/js/jquery.tabledit.min.js') }}"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <h3 align="center">Update Page</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>Car Photo</th>
       <th>Car Details</th>
	    <th>Price</th>
		<th>Action</th>
      </tr>
     </thead>
     <tbody>
    
   
 <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td><img src="'.$row["carphoto"].'"></td>
       <td>'.$row["cardetails"].'</td>
	   <td>'.$row["price"].'</td>
<td><form action="cdetails.php" >
	  <input type="hidden" name="viewid" value="'.$row["id"].'">
	   <button type="submit" name="view" ><i class="fa fa-eye" aria-hidden="true"></i></button></form></td>
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
<script>  
( function($) {
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'carphoto'], [2, 'cardetails'], [3, 'price']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
		location.reload();
       }
      }
     });
	 
 
});  
} ) ( jQuery );
 </script>