<?php
session_start();
$type=$from_date=$to_date=$total_days=$reason="";  
$today = date("Y-m-d");

   if (isset($_POST['submit'])) {
      $type = $_POST['type'];
      $from_date = $_POST['from_date']; //this is line 32 and so on...
      $to_date = $_POST['to_date'];
      $total_days = $_POST['total_days'];
      $reason = $_POST['reason'];
   }

/*$type = $_POST['type'];
$from_date = $_POST['d1'];
$to_date = $_POST['d2'];
$total_days = $_POST['total_days'];
$reason = $_POST['reason'];
*/
echo $type;

$con=mysqli_connect("localhost","admin","pass","login_detail");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{

//$username=mysqli_real_escape_string($con,$username);
//$password=mysqli_real_escape_string($con,$password);


//$result=mysqli_query($con,"select * from user_detail where user='".$username."' and pass='".$password."'");

 /*$order = "INSERT INTO leave_apply

        (leave_id, from_date,to_date,total_days,reason)

        VALUES

        ('".$type."',

        '".$from_date."',

        '".$to_date."',

        '".$total_days."',

        '".$reason."')";
    $result = mysqli_query($con,$order);
    */
    //echo $_SESSION["Emp_name"];
    //exit;
    $result = mysqli_query($con, "INSERT INTO leave_apply

        (leave_type, from_date,to_date,total_days,reason,user_id,status,applied_date,approv_id,user_name)

        VALUES

        ('".$type."',

        '".$from_date."',

        '".$to_date."',

        '".$total_days."',

        '".$reason."','".(int)$_SESSION["userid"]."','submitted','".$today."',2,'".$_SESSION["Emp_name"]."')");

if($result){

    echo("<br>Input data is succeed");
    header('Location:../leave_history.php');

} 
    else{

    echo("<br>Input data is fail");
        echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";

}
}
?>