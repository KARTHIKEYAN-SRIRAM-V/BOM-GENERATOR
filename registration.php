<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregis');

$name=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['password'];

$s= " select * from usert where name='$name'";

$result= mysqli_query($con, $s);


$num =mysqli_num_rows($result);

if ($num==1){

    echo"Username already in use";

}else{

    $reg= "insert into usert(name, email, password) values('$name','$email','$pass')";
    mysqli_query($con,$reg);
    echo"Successfully Registered";    
}

?>