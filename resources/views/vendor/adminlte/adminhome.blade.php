@extends('adminlte::layouts.appp')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="{{ asset('/js/jquery.tabledit.min.js') }}"></script>
@section('main-content')
	

		<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
	<?php
$connect = mysqli_connect("localhost", "root", "", "admin");
$query = "SELECT * FROM rentcar ORDER BY id DESC";
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

    <div class="container">    
<div style="color: Yellow; background:Gray; margin-right:40%;"><br><br> <h1 style="text-align: center;" >Welcome User<br><br></h1>
</div>
        <div id="loginbox" style="margin-top:50px;margin-right:35%;" >                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                                            </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
<form action="events.php" method="post">
     <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><label for="text">Pick Location</label></span>
<input type="text" class="form-control" id="pic" name="pic" required="">
</div>  
<div style="margin-bottom: 25px" class="input-group"> 
<span class="input-group-addon"><label for="text">Drop Location</label></span>
<input type="text"  class="form-control" id="drop" name="drop" required="">
</div> 
<div style="margin-bottom: 25px" class="input-group"> 
<span class="input-group-addon"><label for="text">Time</label></span>
<input type="text"  class="form-control" id="time" name="time" required="">
</div> 
<button type="submit" name="cart_btn"  >Booking</button>
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
           
  </div>   
  

	</div>



@endsection
