<?php
$sn="localhost";
$un="root";
$pass="";
$dn="fgc";
$conn= mysqli_connect($sn,$un,$pass,$dn);
if($conn){
    echo"Success";
}
else{
    echo"Not success";
}
mysqli_query($conn,"insert into `dd`(name) values ('naveen')");
?>