<?php

$db=mysqli_connect("localhost","root","","admin");

if(isset($_POST['event_btn']))
{   $pic=mysqli_real_escape_string($db,$_POST['pic']);
    $drop=mysqli_real_escape_string($db,$_POST['drop']);
       $time=mysqli_real_escape_string($db,$_POST['time']);
            $sql="INSERT INTO rentcar(pic,dro,time) VALUES('$pic','$drop','$time')";
              mysqli_query($db,$sql);  
          header("Location: http://127.0.0.1:8000/carlist");
}
if(isset($_POST['cart_btn']))
{   $pic=mysqli_real_escape_string($db,$_POST['pic']);
    $drop=mysqli_real_escape_string($db,$_POST['drop']);
       $time=mysqli_real_escape_string($db,$_POST['time']);
            $sql="INSERT INTO rentcar(pic,dro,time) VALUES('$pic','$drop','$time')";
              mysqli_query($db,$sql);  
          header("Location: http://127.0.0.1:8000/carlistsd");
}

if(isset($_POST['car_btn']))
{   $pic=mysqli_real_escape_string($db,$_POST['pic']);
    $drop=mysqli_real_escape_string($db,$_POST['drop']);
       $time=mysqli_real_escape_string($db,$_POST['time']);
            $sql="INSERT INTO carlist(carphoto,cardetails,price) VALUES('$pic','$drop','$time')";
              mysqli_query($db,$sql);  
          header("Location: http://127.0.0.1:8000/carlist");
}

if(isset($_POST['contact']))
{   $name=mysqli_real_escape_string($db,$_POST['name']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
       $body=mysqli_real_escape_string($db,$_POST['subject']);
            $sql="INSERT INTO contact(title,email,body) VALUES('$name','$email','$body')";
              mysqli_query($db,$sql);  
          header("Location: http://127.0.0.1:8000/contact.php");
}


die();

?>
<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'admin');

$input = filter_input_array(INPUT_POST);

$title = mysqli_real_escape_string($connect, $input["title"]);
$body = mysqli_real_escape_string($connect, $input["body"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE news 
 SET title = '".$title."', 
 body = '".$body."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM news 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>

    