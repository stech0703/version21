<?php

session_start();


$conn = mysqli_connect('localhost','root','Shiv@0703','userregistration');

mysqli_select_db($conn , 'userregistration');
$name = $_POST['user'];
$pass= $_POST['password'];
$s = " select * from usertable where name = '$name'";

$result = mysqli_query($conn , $s);

$num = mysqli_num_rows($result);

if(num == 1){
    echo" username already exists !!! ";
}else{
    $reg = "insert into usertable( name , password ) values( '$name','$pass')";
    mysqli_query($conn , $reg);
    echo" Registration successful";
}
?>