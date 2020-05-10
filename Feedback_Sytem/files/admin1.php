<?php
session_start();
?>
<html>
    <head>
        <title>Loginpage</title>
        <style>
            h1 {
                color: black;
                text-align: left;
                font-family: "Times New Roman", Times, serif;
                font-style: italic;
            }
            h2 {
                color: black;
                text-align: left;
                font-family: "Times New Roman", Times, serif;
                font-style: inherit;
            }
            body{
                background-size: 2000px 1000px ;
            }
            .r
            {
                background-color: white;
            }
            bg{
                background-color: white;
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
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
          
            .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 13px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 3px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button5 {
  background-color: white;
  color: black;
  border: 2px solid black;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
          

        </style>
    </head>
    <body background="p1.jpeg">
        <div class="r">
            <center>

                    <b><font size="20"> Feedback System</font></b>
            </center>
        </div>
        <ul>
             <center>
                 <li> <a href="addfaculty.php" class="button button5"><font size="5">Add Faculty</font></a></li>
                <li><a href="deletefaculty.php" class="button button5"><font size="5">Delete Faculty</font></a></li>
                <li><a href="admin2.php" class="button button5"><font size="5">View Feedback</font></a></li>
                <li><a href="admin.php" class="button button5"><font size="5">Logout</font></a></li>
            </center>
        </ul>
        
         <br><br><br><br><br><br><br><br>
    
            <center>

                <b><I><font size="20"> Welcome To Feedback System!!</font></I></b>
            </center>

</body>
</html>