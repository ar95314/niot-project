<html>
    
    <head>
    
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
</style>
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
                <li><a href="login/login.php" class=right>Logout</a></li>
            </ul>

        </div>
    </body>
</html>