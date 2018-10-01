<?php 
#session here
if(!session_id()){
  session_start();
}

if(isset($_SESSIONS['username'])){ 
//correction here isset(!$_SESSIONS['username'])){
          header('Location: ../');
        }
if(!isset($_GET['show'])){$_GET['show']='profile';}
?>

<?php include('../config/connection.php'); ?>
<?php include('../config/constants.php'); ?>

<?php

$q = "SELECT * FROM users WHERE user_id ='admin'";
$r = mysqli_query($dbc,$q);
$data = mysqli_fetch_assoc($r);

?>

<!DOCTYPE html>
<html lang="en" >
 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>User</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/jquery-ui.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">

    <script src="../js/jquery-3.2.1.min.js"></script>
    <!--<script src="../js/jquery-ui.min.js"></script>-->
    <script src="../js/bootstrap.min.js"></script>

  </head>
  <body>
    <div >
    
<!--header-->
<?php include('../'.D_TEMPLATE.'/header.php'); ?>

<!--navbar-->
<nav class="navbar navbar-default ">
  <div class="container-fluid">

<!--bug here, get show if some other value. active?-->
      <ul class="nav navbar-nav">
          <li<?php if($_GET['show']=='profile'){echo ' class="active"';} ?>><a href="?show=profile">Profile</a></li>
          <li<?php if($_GET['show']=='messages'){echo ' class="active"';} ?>><a href="?show=messages">Messages</a></li>
          <li<?php if($_GET['show']=='friends'){echo ' class="active"';} ?>><a href="?show=friends">Friends</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <button class="btn btn-lg btn-primary btn-block" onclick="window.location.href='logout.php'"" style="max-width:100px;">Log out</button>
        <!--<li style="background:rgba(17, 175, 17, 0.753);color:red;font-size:20px;"><a href="#">Log Out</a></li>-->    
       </ul>

  </div>
</nav>

<?php //check
 //echo $_SESSIONS['name']; ?> 

<!--profile-->
<!--messages-->
<!--friends-->
<?php if($_GET['show']=='profile'){
  include('view/profile.php');}
  elseif ($_GET['show']=='messages') {
    include('view/messages.php');
  }
  elseif ($_GET['show']=='friends') {
    include('view/friends.php');
  }
 ?>

<!--footer-->
<?php include('../'.D_TEMPLATE.'/footer.php'); ?>
        
      
    </div>
  </body>
</html>