<?php
include('../dbcon.php');
$rno=$_GET['rno'];
if(mysqli_query($sql,"UPDATE `nonac` SET `status`='un book' WHERE `roomno`='$rno' "))
{
    header('location:roomdetails.php');
}
?>