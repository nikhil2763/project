<?php

$nm=$_POST['name'];
$em=$_POST['email'];
$fb=$_POST['feed'];
$con1=mysqli_connect("localhost","root");
// print_r($con1);
if(!$con1){
    die("sorry:we can't connect with server ".mysqli_connect_error());

}
else{
    echo "successfull";
}
$db=mysqli_select_db($con1,"nikhil");
$sql="INSERT INTO nikhil_table(Name,email,comments)values('nikhil','nikhil@gmail.com','excellent'),('vivek','vivek@gmail.com','excellent')";

$result=mysqli_query($con1,$sql);
if($result){
    echo "the database created successfully";

}
else{
    echo "the database is not created".mysqli_error($con1);
}
?>
