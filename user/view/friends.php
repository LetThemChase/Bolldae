friends
<br>
<br>

<?php 

$q = "SELECT name from friends";
$re = mysqli_query($dbc,$q);
$r  = mysqli_fetch_assoc($re);
foreach ($r as $key => $value) {
    # code...
}


?>