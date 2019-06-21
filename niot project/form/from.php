<?php
session_start();
?>
<html>
<head>
	<title>leave application</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<img src="niot.jpg" id="logo" >
    <style>
            
           
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
</style>
</head>
<body>
    
    
		
	
 		<!--<form action="../login.php" method="post">
		<fieldset>
					<input type="submit" id="log" name="submit" value="logout">
				</fieldset>
		</form>-->
		<div id="container" >
			<form id="contact"  action="submit.php" method="post">
                <div>
            <ul>
                <li><a ><?php echo $_SESSION["Emp_name"];?></a></li>
                <li><a class="active" href="from.php">Home</a></li>
                <li><a href="../leave_history.php">Leave History</a></li>
                <li><a href="../leave_cancled.php">Leave Rejected</a></li>
                <!--<li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>-->
                <li><a href="../login.php" class=right>Logout</a></li>
            </ul>

        </div>
                <div >
	            	<h2><strong>name:</strong></h2>	
	              	<h1><?php
	                 	echo $_SESSION["Emp_name"];
                  ?></h1>
	         </div>
				<h3>YOUR DETAILS</h3>
				<table style="width:100%">
				<fieldset>
					<tr>
						<th><label>from date:</label></th>
						<td><input type="date" id="d1" name="from_date"/><br>
						<!--<input type="submit" value="submit">--></td>
					</tr>
				</fieldset>
				<fieldset>
					<tr>
					<th>
					<label>to date:</label></th>
					<td><input type="date" id="d2" name="to_date"/><br>
					<!--<input type="submit" value="submit">--></td>
					</tr>
				</fieldset>
				<fieldset>
					<tr>
					<th>
					<label>leave type</label></th>
					<td><select id="type" name="type" size="3">
						<option value="casual leave">casual leave</option>
						<option value="restricted leave">restricted leave</option>
						<option value="earned leave">earned leave</option>
						<option value="half pay leave">half pay leave</option>
					</select>
                        </td>
					</tr>
				</fieldset>
				<fieldset>
					<tr>
					<th><label>reason:</label></th>
					<td>
					<textarea type="text" name="reason" placeholder="place your leave reason" ></textarea></td>
				</tr>
				</fieldset>	
				<fieldset>
					<tr>
						<th>
					<label>NO.s of days:</label></th>
					<td>
					<input type="text" name="total_days" ></td>
				</tr>
				</fieldset>
				<fieldset>
					<tr>
                        <th>
                            
                        </th>
						<td>
					<input type="submit" id="submit" name="submit" value="submit"></td>
				</tr>
				</fieldset>
				
			</form>
		</div>
</body>
</html>