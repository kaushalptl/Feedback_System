<html>
    
    <head>
        
    </head>
    <style>
    table {
  border-collapse: collapse;
  width: 50%;
  
    border: 2px solid black;
    border-radius: 50px 20px 50px 20px
}

th, td {
  
  padding: 20px;
  
}


tr:nth-child(even){background-color: white}
tr:nth-child(odd){background-color: #f2f2f2}

th {
  background-color: #3c334c;
  color: black;
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

.rcorners2 {
  border-radius: 50 px;
  border: 2px solid ;
 
}
 .r
            {
                background-color: white;
            }

    </style> 
    <body background="p1.jpeg">
        
         <div class="r">
            <center>

                    <b><font size="20"> Average Feedback Of Lab</font></b>
            </center>
        </div>
        
<?php






// Create connection
$conn = new mysqli("localhost", "root", "","feedback");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

            $sql = "SELECT * FROM feedback where username='smm123'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $b1=$row['teaching_skill'];
            $b2=$row['knowledge'];
            $b3=$row['communication_skill'];
            $b4=$row['integrate_with_other_courses'];
            $b5=$row['intrest_generate_by_teacher'];
            $b6=$row['other_activity'];
            
            
           $sql1 = "SELECT * FROM feedback where username='sps123'";
            $result1 = $conn->query($sql1);
            $row1 = $result1->fetch_assoc();
            $v1=$row1['teaching_skill'];
            $v2=$row1['knowledge'];
            $v3=$row1['communication_skill'];
            $v4=$row1['integrate_with_other_courses'];
            $v5=$row1['intrest_generate_by_teacher'];
            $v6=$row1['other_activity'];
            
     
            
            
            echo ' 
                
              <br><br><br>
            <table class="rcorners2" border="2" width="50%" align="center">
            
               
                 <th> <font color="white">First_Name</font></th>
                  <th> <font color="white">Last_Name</font></th>
                 <th> <font color="white">Teaching_Skill</font></th>
                 <th> <font color="white">Knowledge</font></th>
                 <th> <font color="white">Communication_Skill</font></th>
                 <th><font color="white">Integrate_with_other_courses</font></th>
                 <th> <font color="white">Intrest_generate_by_teacher</font></th>
                 <th> <font color="white">Other_activity</font></th>
                 

                  <tr>
                  
                  <td> Shailja</td>
                  <td> Maniya </td>
                  <td>'.$b1.'</td>
                  <td>'.$b2.'</td>
                  <td>'.$b3.'</td>
                  <td>'.$b4.'</td>
                   <td>'.$b5.'</td>
                   <td>'.$b6.'</td>
                   </tr>
                       

                    
                  <tr>
                  
                  <td> Vanraj</td>
                  <td> Dangar </td>
                  <td>'.$v1.'</td>
                  <td>'.$v2.'</td>
                  <td>'.$v3.'</td>
                  <td>'.$v4.'</td>
                   <td>'.$v5.'</td>
                   <td>'.$v6.'</td>
                   </tr>
                   
                   <br><br>
                                              <tr><td colspan="8" align="center">
                                                
                                                <a href="admin2.php" class="button button5" ><font size="4">Back</font></a></td></tr>

                    ';






            
            
            
$conn->close();
?>

        
        
        
    </body>
</html>



