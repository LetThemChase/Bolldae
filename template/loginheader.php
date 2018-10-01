<?php
//header with login  template

?>

<div class="container-fluid topheader" >
        <div>
          <header>
            <div class="col-xs-10">
             <br>    <h1 style="color:white">BollDae</h1>
              <!--<img src="images/icon.png" height="30px"/>-->
            </div>
            <br><br>
<?php if(isset($_SESSION['username'])){ ?>
            <div class="col-xs-2">
            <button class="btn btn-lg btn-primary btn-block" style="max-width:150px;"
            onclick="window.location.href='user/logout.php'">
            Log Out
          </button>
            
            </div>
<?php } ?>
          </header>
        </div>
</div>
