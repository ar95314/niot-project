<html>
<?php
    session_start();
    ?>
    <head>
        
        <title>
            Leave Approval
        </title> 
        <style>
            
            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
             }

             #customers td, #customers th {
                 border: 1px solid #ddd;
                 padding: 8px;
             }

             #customers tr:nth-child(even){background-color: #f2f2f2;}

             #customers tr:hover {background-color: #ddd;}

             #customers th {
                 padding-top: 12px;
                 padding-bottom: 12px;
                 text-align: center;
                 background-color: #4CAF50;
                 color: white;
             }
            ul {
                 list-style-type: none;
                 margin: 0;
                 padding: 0;
                 overflow: hidden;
                 background-color: #333;
            }

            li {
                 float: left;
            }

            li a {
                 display: block;
                 color: white;
                 text-align: center;
                 padding: 14px 16px;
                 text-decoration: none;
            }

            li a:hover {
                 background-color: #111;
            }
            .right {
                 position: absolute;
                 right: 50px;
                 width: 100px;
                 
            }
             #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
</style>
        <script type='text/javascript'>
            
        function Reject(oButton) {
            
                   var oRow = oButton.parentNode;
                  while (oRow && oRow.tagName.toLowerCase() !== "tr")
                            oRow = oRow.parentNode;
                        var arrDivs = oRow.getElementsByTagName("div");
                  var orderDiv = null;
                for (var i = 0; i < arrDivs.length; i++) {
                         if (arrDivs[i].className === "orderID") {
                        orderDiv = arrDivs[i];
                           break;
               }
          }
            
            if (orderDiv != null) {
              var orderNumber = orderDiv.innerHTML;
                alert( "rejecting leave for leave_apply_id- "+orderNumber);
                var oid=orderNumber;
                window.location.href = "leave_reject_update.php?w1=" + oid;
                
        } else {
        alert("leave_apply_id not found");
       }
        }
            
            
            function Accept(oButton) {
            
                   var oRow1 = oButton.parentNode;
                  while (oRow1 && oRow1.tagName.toLowerCase() !== "tr")
                            oRow1 = oRow1.parentNode;
                        var arrDivs1 = oRow1.getElementsByTagName("div");
                  var orderDiv1 = null;
                for (var i = 0; i < arrDivs1.length; i++) {
                         if (arrDivs1[i].className === "orderID") {
                        orderDiv1 = arrDivs1[i];
                           break;
               }
          }
            
            if (orderDiv1 != null) {
              var orderNumber1 = orderDiv1.innerHTML;
                alert( "accepting leave for leave_apply_id- "+orderNumber1);
                var oid1=orderNumber1;
                window.location.href = "leave_approve_update.php?w2=" + oid1;
                
        } else {
        alert("leave_apply_id not found");
       }
     
        }
        </script>
    </head>
    <body>
        <div>
            <ul>
                
                <li><a ><?php echo $_SESSION["Emp_name"];?></a></li>
                <li><a class="active" href="form/from.php">Home</a></li>
                <li><a href="leave_history.php">Leave History</a></li>
                <li><a href="leave_cancled.php">Leave Rejected</a></li>
           <!-- <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>-->
                <li><a href="login.php" class=right>Logout</a></li>
            </ul>

        </div>
        <div>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
             </div>
        <div>
        <?php
            
           $con=mysqli_connect("localhost","admin","pass","login_detail"); //The Blank string is the password

    

           $query = "SELECT * FROM leave_apply where status='submitted'"; //You don't need a ; like you do in SQL
           $result = mysqli_query($con,$query);

           echo "<table id=customers>"; // start a table tag in the HTML
           echo "<tr><th>Leave_Apply_ID</th><th>User_Name</th><th>Leave_Name</th><th>From_Date</th><th>To_Date</th><th>Total_Days</th><th>Reason</th><th>Status</th><th>Applied_Date</th> <th colspan='2''>Approve/Reject</th></tr>";
           while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
           echo "<tr><td><div class='orderID'>" . $row['leave_apply_id'] . "</div></td><td>" . $row['user_name'] . "</td><td>" . $row['leave_type'] . "</td><td>" . $row['from_date'] . "</td><td>" . $row['to_date'] . "</td><td>" . $row['total_days'] . "</td><td>" . $row['reason'] . "</td><td>" . $row['status'] . "</td><td>" . $row['applied_date'] . "</td><td align=center><input  type='submit' value='Accept' id='b1' onclick='Accept(this);' /></td><td align=center ><input  type='submit' value='Reject' id='b2' onclick='Reject(this);' /></td></tr>";  //$row['index'] the index here is a field name
           }
            
            

           //echo "</table>"; //Close the table in HTML
            
            /*function Reject()
            {
                
                //echo "<script>document.writeln(oid);</script>";
                //$x="<script>document.writeln(oid);</script>";
                $query = "update FROM leave_apply set status='r' where leave_apply_id=5 "; //You don't need a ; like you do in SQL
                $result = mysqli_query($con,$query);
                    
            }
            
            //UPDATE `leave_apply` SET `status` = 'r' WHERE `leave_apply`.`leave_apply_id` = 5 
            */

           mysqli_close($con); //Make sure to close out the database connection
        ?>
            <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("customers");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
            
        </div>
    </body>
</html>