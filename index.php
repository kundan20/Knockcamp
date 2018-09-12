<!DOCTYPE html>
<html>
<head>
	<title>Knockcamp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="toast.css">
	<link rel="stylesheet" type="text/css" href="loader.css">
	<script src="toast.js"></script>
</head>
	
<style>
@media (min-width:572px){
.bg{ 
	background-image: url(img.jpg);
	background-position: center;
	background-size: cover;
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0;
	left: 0;
}
}
@media (max-width:571px){
.bg{ 
	background-image: url(knockcampphone.png);
	background-position: center;
	background-size: cover;
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0;
	left: 0;
}	
.loader{
	top:56%;
	left: 45%;
}
}
</style>
<body>
<div class="bg">
	<div class="loader"></div>
</div>

<script>
setTimeout(function() {
  window.location.href = "home_thapar_university.php";
}, 3000);
</script>


</body>
</html>