<?php
//session_start();
include 'Include/dbconnect.php';

       
        if(isset($_POST['option']))
          {
            $option = $_POST['option'];
            if($option == "General Admin")
            {
            header("location:forget_pwd_gp.php");             }
            elseif($option == "Society Admin")
            {
            header("location:forget_pwd_sp.php");  
            }
             elseif($option == "Student Admin")
            {
            header("location:forget_pwd_stp.php");              }
            else
            {
            header("location:forget_pwd_tp.php");  
            }

}
?>

<!DOCTYPE>
<html>
<head>

  <title>Forget Password</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/dashboard.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  

  <style>
  body{
    background-color: #ffffff;
  }
  .navbar-brand{
    font-size: 1.5em;
    color: blue;
  }

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
</style>
</head>
<body>
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
      <div class="navbar-header">

        <a href="home_thapar_university.php" class="navbar-brand">KNOCKCAMP</a></div>
        <div class="collapse navbar-collapse" id="collapse">
        </div> 
      </div>
    </nav>
    <div class="container">
      <div class="row">

       <div class="col-md-6 col-md-offset-3" style="margin-top: 80px">
          <h4 style="border-bottom: 1px solid #c5c5c5;">
            <i class="glyphicon glyphicon-user text-primary">
            </i>
            Forget Password?
          </h4>
          <div style="padding: 20px;" id="form-olvidado">
            <form action="forget_pwd.php" accept-charset="UTF-8" role="form" id="login-form" method="post" >
              <fieldset>
                <label>You are</label>
                <div class="form-group input-group">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-user text-primary"></span>
                  </span>

                  <select class="form-control" name="option">
                    <option>Teacher Admin</option>
                    <option>Society Admin</option>
                    <option>General Admin</option>
                    <option>Student Admin</option>

                  </select>
                </div>

                <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-primary btn-block">
                    Access
                  </button>
                </div>
              </fieldset>
              </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
 

  
