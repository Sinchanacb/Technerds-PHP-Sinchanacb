<?php
$sn="localhost";
$un="root";
$pass="";
$dn="technerds";
$conn= new mysqli($sn,$un,$pass,$dn);
if($conn){
    echo"succesfull";
}
else{
    echo"not succesfull";
}
mysqli_query($conn,"insert into `user`(name,class,age,gender) values ('sanu','2nd BCA','20','female')");
?>