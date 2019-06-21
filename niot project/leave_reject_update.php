<?php
$x=$_GET["w1"];
$con=mysqli_connect("localhost","admin","pass","login_detail"); //The Blank string is the password

    if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{    
        $query = "update  leave_apply set status='Rejected' where leave_apply_id='".$x."' "; //You don't need a ; like you do in SQL
                $result = mysqli_query($con,$query);
}
if($result){

    echo("<br>Leave approved success");
    
         
    header('Location:leave_approve.php');

} 
    else{

    echo("<br>Input data is fail");
        echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";

}
?>