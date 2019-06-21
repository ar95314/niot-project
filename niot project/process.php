<?php
$username=$_POST['user'];
$password=$_POST['pass'];
echo $username;


		
		//echo $_SESSION['name'];
		
 



/*
mysql_connect("localhost","root","");
mysql_select_db("login_detail");
$query="Select * from user_detail where user='".$username."' and pass='".$password."'";
$rs = mysql_query($query);

$raarray = mysql_fetch_array($rs);
echo $raarray["user"];
exit;
*/
/*$username=stripcslashes($username);
$password=stripcslashes($password);
*/
$con=mysqli_connect("localhost","admin","pass","login_detail");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{

//$username=mysqli_real_escape_string($con,$username);
//$password=mysqli_real_escape_string($con,$password);


$result=mysqli_query($con,"select * from user_detail where user='".$username."' and pass='".$password."'");


$row=mysqli_fetch_array($result);
echo $row['user'];
    
if($row['user']==$username && $row['pass']==$password && $row['isgrp_head']=="1")
{
    session_start();
        $_SESSION ["s_1"]=$username;
   $_SESSION ["userid"] =  $row['user_id'];
    $_SESSION ["Emp_name"] =  $row['Emp_name'];
    $_SESSION ["Designation"] =  $row['designation'];
    
    //echo $username;
    header('Location:leave_approve.php');   
}
    elseif($row['user']==$username && $row['pass']==$password)
{
    session_start();
    $_SESSION ["s_1"]=$username;
    $_SESSION ["userid"] =  $row['user_id'];
    $_SESSION ["Emp_name"] =  $row['Emp_name'];
    $_SESSION ["Designation"] =  $row['designation'];
    
    //echo $username;
        
    header('Location:form/from.php');   
}
else{
    //echo 
    //'<script type="text/javascript">alert( "Login Failed please try again ");</script>';
    
    
    header('Location:login.php'); 
	echo "failed to connect";
}
}
?>