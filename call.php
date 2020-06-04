<?php
$first=$_POST['fname'];
$last=$_POST['lname'];
$age=$_POST['age'];

$con = new mysqli("localhost", "root", "", "ajaxtest");
$sql = "INSERT INTO `names` (`first`, `last`, `age`) VALUES ('.$first.', '$.last.', '$.age.');";

if($con->ping()){
    // echo "connected";
}

if($con->query($sql) === TRUE){
    echo "Creacted entry";
}
else{
    echo "Connection Error: ".$sql."<br>".$con->error;
}

echo 'First = '.$first;
?>