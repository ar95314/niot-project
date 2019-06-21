<?php
$y=$_GET["w2"];
$today = date("Y-m-d");
$con=mysqli_connect("localhost","admin","pass","login_detail"); //The Blank string is the password

    if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{    
        $query1 = "update  leave_apply set status='Accepted' , approved_date='".$today."' where leave_apply_id='".$y."' "; //You don't need a ; like you do in SQL
                $result = mysqli_query($con,$query1);
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