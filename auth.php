<?php 
$con=mysqli_connect("127.0.0.1","root","","keerthana");
$auth=0;
function auth($action=false,$name=false,$phone=false,$password=false){
  global $con,$auth;
  if($action==1){
    $sql="INSERT INTO users(`name`,`phone`,`password`) VALUES('$name','$phone','$password')";
   if(mysqli_query($con,$sql)){
    setcookie("phone",$phone,time()+10000,"/");
    setcookie("password",$password,time()+10000,"/");
    $auth=1;
    header("Location:Index.php");
   }
  }
  else if($action==2){
    $sql= "SELECT * FROM users WHERE phone='$phone' AND password='$password'";
    $query=mysqli_query($con,$sql);
    if(mysqli_num_rows($query)> 0){
      setcookie("phone",$phone,time()+10000,"/");
      setcookie("password",$password,time()+10000,"/");
        $auth=1;
        // echo "edfghjkml";
        header("Location:Index.php");
    }
  }
  else if($action==3){
    setcookie("phone",$phone,time()-10000,"/");
    setcookie("password",$password,time()-10000,"/"); 
    header("Location:Index.php");
  }
  else {
    if(isset($_COOKIE["phone"]) && isset($_COOKIE["password"]) ){
        $phone=$_COOKIE["phone"];
        $password=$_COOKIE["password"];
        $sql= "SELECT * FROM users WHERE phone='$phone' AND password='$password'";
        $query=mysqli_query($con,$sql);
        if(mysqli_num_rows($query)> 0){
            $auth=1;
        }
    }
  }
}
?>