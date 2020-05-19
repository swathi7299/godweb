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
 $email=$_POST['email'];
 $password=$_POST['password'];
 if($email!=" "&&$password!="")
 {
   $sql="SELECT email,password FROM loginadmin WHERE email='$email' AND password='$password' ";
   $result=$con->query($sql);
   if($result->num_rows==1)
  {  
   header("location:admindetails.html");
  }

 else
{ 
  echo '<script>alert("Invalid email or password")</script>';
}
 }
else
 {
 
 echo '<script>alert("Enter all the feilds")</script>';


 }


?>


