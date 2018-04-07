                      <?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'admin');

$input = filter_input_array(INPUT_POST);

$carphoto = mysqli_real_escape_string($connect, $input["carphoto"]);
$cardetails = mysqli_real_escape_string($connect, $input["cardetails"]);
$price = mysqli_real_escape_string($connect, $input["price"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE carlist 
 SET carphoto = '".$carphoto."', 
 cardetails = '".$cardetails."' ,
 price = '".$price."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM carlist 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>

    