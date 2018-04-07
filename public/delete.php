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
<br><br><br><br>
</head>
<body>
<h2>Delete Successfully</h2>
<a href="delete">go back</a>
 
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>

var myCenter=new google.maps.LatLng(41.567197,14.681526);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:16,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}



</script>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>

<script>
	$(window).resize(function(){
		var new_height = $("#image_border").height();
		console.log(new_height);
		$("#googleMap").height(new_height);
	});

	$(window).load(function(){
		var new_height = $("#image_border").height();
		console.log(new_height);
		$("#googleMap").height(new_height);
		google.maps.event.addDomListener(window, 'load', initialize());
	});
	
</script>
<script type="text/javascript" src="source/js/myscript.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
</body>
</html>