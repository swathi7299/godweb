<?php
$con= new mysqli('localhost','root','swathi','shopping');
if($con->connect_errno)
{
// echo "$con->connect_error";
 die();
}
else
{
 //echo "Database connected";
}
 
$dress=$_POST['dress'];
$sql="UPDATE stock SET stockavail=(stockavail-1) where stockname='$dress' ";
if ($con->query($sql) == TRUE) {
     header("location:order.html");
} else {
    echo "Error updating record: " . $con->error;
}
?>