<?php 
include("client.php");
auth();
if($auth==1){
    include("dashboard.php");
}
else if($auth==0){
    include("signup.php");
}
echo $auth;
?>
