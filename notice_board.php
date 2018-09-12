
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>

    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

	<title>Notice Board</title>

<style type="text/css">
 .bg-light-gray {
    background-color: #f7f7f7;
  }
  .h1 {
    text-shadow:5px 5px 10px white;
  }

  .footer-social { float: center; margin-top:5px;}
  .footer-social li {  display: inline;float:center;}
  .footer-social span {margin-left: 2 40px; }
.read-more-state {
  display: none;
}




 ul.nav li.dropdown:hover > ul.dropdown-menu{
    display: block;
    visibility:visible;  
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}

  @media (max-width: 767px) {
    /* CSS goes here */
}
</style>
</head>
<?php 
  include 'navigation.php';
  ?>

<?php
include 'Include/dbconnect.php';
$query = "select * from notice_board ORDER BY id desc";
$res = mysqli_query($con_ser,$query);
?>

<body class="bg-light-gray">

	<div class="container">
          <form action="notice_board.php" method = "GET">
<input class="btn btn-primary btn-sm" type="submit" value="Submit" style="float:right;margin-top: 6px; ">

<input type="text" style="float:right;margin-top: 6px; width: 240px;height: 30px " class="form" placeholder="Search (year/branch)..." name="search" id="search" >


    </form>
<br><br>
</div>
<div class="container">
<div class="row">
<?php 
  require_once 'Include/dbconnect.php';
  if(isset($_GET['search']))
  {   
  $search=mysqli_real_escape_string($con_ser,$_GET['search']);
  $searched =$con_ser->query(" SELECT * FROM notice_board WHERE yr LIKE'%{$search}%' OR branch LIKE'%{$search}%' ORDER BY id desc"); 
  
  while($row = mysqli_fetch_assoc($searched))
    {
      $path=$row['filepath'];
        
        $filename=$row['filename'];
        $yr=$row['yr'];
        $branch=$row['branch'];
      ?>
      <div class="col-md-6 " align="center" style="margin-top:10px; margin-right:10px; margin-left:10px;">
         <div class="card card-info">
      <div class="card-header bg-info">
        <span style=" color:black;text-align: left" ><font size="3px" text-align="left" face="arial roman" font-style ="bold" ><strong>          <?php echo  $yr.', '.$branch ?></strong> </font>
          <a style="height: 45px;width: 200px" href="web/<?php echo $row['filename'] ?>"  aria-pressed="true"><font color="black">Download</font></a>
         </span></div>
      <div class="card-body"><?php $des=$row['description'];      echo $des; ?> </div>
    </div>
    </div>
<?php
}
}
else

{   

  while($row=mysqli_fetch_array($res))
  
	{
       $path=$row['filepath'];
        
        $filename=$row['filename'];
        $yr=$row['yr'];
        $branch=$row['branch'];
    ?>   
     <div class="col-md-5" align="center" style="margin-top:10px; margin-right:10px; margin-left:10px; margin-bottom:10px;">
         <div class="card card-info">
      <div class="card-header bg-info">
      	<span style=" color:black;text-align: left" ><font size="3px" text-align="left" face="arial roman" font-style ="bold" ><strong><?php echo  $yr.', '.$branch ?></strong> </font>
          <a style="height: 45px;width: 200px" href="web/<?php echo $row['filename'] ?>"  aria-pressed="true"><font color="black">Download</font></a>
         </span></div>
      <div class="card-body"><?php $des=$row['description'];      echo $des; ?> </div>
    </div>
    </div>
		    <?php
        
	
	}
}
	?>
    </div>

    </div>
    <?php include("footer.php"); ?>
    <script>


$('ul.nav li.dropdown').hover(function() {
  if(window.width > 767) {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  }   
});
   </script>

 <script type='text/javascript'
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/popper/popper.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
