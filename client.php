<?php 
include("auth.php");
if(isset($_POST["name"])&&!empty($_POST["name"])&&isset($_POST["phone"])&&!empty($_POST["phone"])&&isset($_POST["password"])&&!empty($_POST["password"])){
$name=$_POST["name"];
$phone=$_POST["phone"];
$password=$_POST["password"];
auth($action=1,$name,$phone,$password);
}
else if(isset($_POST["phone"])&&!empty($_POST["phone"])&&isset($_POST["password"])&&!empty($_POST["password"])){
    $phone=$_POST["phone"];
    $password=$_POST["password"];
    // echo $phone."__".$password;
    auth($action=2,$name=false,$phone,$password);
    }
else if(isset($_POST["action"])&&!empty($_POST["action"])){
    auth($_POST["action"]);
}
?>
