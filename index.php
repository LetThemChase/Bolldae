<?php 
#session here
session_start();
//$_SESSIONS['name']=2;//check
//header('Location: user');

require_once("fb_config.php")

?>

<?php include('config/setup.php'); ?>
<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en" >
 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo $siteTitle ?></title>

<?php include('config/css.php'); ?>

<?php include('config/js.php'); ?>    

  </head>
  <body>
    <div >
      
<?php include(D_TEMPLATE.'/loginheader.php'); ?>

      <div class="container" style="min-width:630px;" >
        <div class="col-xs-6 " >
          <br><br>
          <p class="bigp alg">Tell your heart desire without the fear of geting rejected.</p>
          <br><br>
<?php   if(isset($_SESSIONS['username'])){ ?>
  <div class="container-fluid ">                    
            <center> 
            <a href="user">
              <button class="btn btn-lg btn-primary btn-block" style="max-width:240px;min-width:240px;">GO to your Profile</button>
            </a>
            </center>
          </div>
      </div>
    <?php
}
      else{
?>
        
          <div class="container-fluid ">                    
            <center> 
            <a href="<?php echo htmlspecialchars($loginUrl); ?>">
             <button class="btn btn-lg btn-primary btn-block" style="max-width:240px;min-width:240px;">Log In Using Facebook</button>
             </a>
            </center>
          </div>
          <br>
          <p>By clicking register you agree to our  
            <a href="<?php echo WD_SITE ?>home/privacy" target=_blank>Privacy Policies</a> and <a href="<?php echo WD_SITE ?>home/terms" target=_blank>Terms and conditions</a>.
          </p>
        </div>
<?php } ?>
        <div class="col-xs-6 container" >
          <img src="images/index.png" class="img-responsive" width="auto" style="min-height:300px;max-width:100%;"/>
        </div>        
      </div>
  
  

<?php include(D_TEMPLATE.'/footer.php'); ?>
        
      
    </div>
  </body>
</html>