

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    </style>    
    <body background="p1.jpeg">
        <?php
        if (isset($_POST['b1'])) {

            // Create connection
            $conn = new mysqli("localhost", "root", "", "feedback");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $a1 = $_POST['f1'];

            if ($a1 == "f11") {
                $a1 = 5;
            } else if ($a1 == "f12") {
                $a1 = 4;
            } else if ($a1 == "f13") {
                $a1 = 3;
            } else if ($a1 == "f14") {
                $a1 = 2;
            } else if ($a1 == "f15") {
                $a1 = 1;
            }


            $a2 = $_POST['f2'];

            if ($a2 == "f21") {
                $a2 = 5;
            } else if ($a2 == "f22") {
                $a2 = 4;
            } else if ($a2 == "f23") {
                $a2 = 3;
            } else if ($a2 == "f24") {
                $a2 = 2;
            } else if ($a2 == "f25") {
                $a2 = 1;
            }


            $a3 = $_POST['f3'];

            if ($a3 == "f31") {
                $a3 = 5;
            } else if ($a3 == "f32") {
                $a3 = 4;
            } else if ($a3 == "f33") {
                $a3 = 3;
            } else if ($a3 == "f34") {
                $a3 = 2;
            } else if ($a3 == "f35") {
                $a3 = 1;
            }



            $a4 = $_POST['f4'];

            if ($a4 == "f41") {
                $a4 = 5;
            } else if ($a4 == "f42") {
                $a4 = 4;
            } else if ($a4 == "f43") {
                $a4 = 3;
            } else if ($a4 == "f44") {
                $a4 = 2;
            } else if ($a4 == "f45") {
                $a4 = 1;
            }



            $a5 = $_POST['f5'];

            if ($a5 == "f51") {
                $a5 = 5;
            } else if ($a5 == "f52") {
                $a5 = 4;
            } else if ($a5 == "f53") {
                $f = 3;
            } else if ($a5 == "f54") {
                $a5 = 2;
            } else if ($a5 == "f55") {
                $a5 = 1;
            }


            $a6 = $_POST['f6'];

            if ($a6 == "f61") {
                $a6 = 5;
            } else if ($a6 == "f62") {
                $a6 = 4;
            } else if ($a6 == "f63") {
                $a6 = 3;
            } else if ($a6 == "f64") {
                $a6 = 2;
            } else if ($a6 == "f65") {
                $a6 = 1;
            }
           
             
            $sql1="SELECT * FROM faculty where fusername='smm'";
            $result = $conn->query($sql1);
            $row = $result->fetch_assoc();
            $b1=$row['teaching_skill'];
            $b2=$row['knowledge'];
            $b3=$row['communication_skill'];
            $b4=$row['integrate_with_other_courses'];
            $b5=$row['intrest_generate_by_teacher'];
            $b6=$row['other_activity'];
            
            if($b1==0 && $b2==0 && $b3==0 && $b4==0 && $b5==0 && $b6==0 )
            {
                
             $sql = "UPDATE faculty SET teaching_skill='$a1',knowledge='$a2',communication_skill='$a3',"
                    . "integrate_with_other_courses='$a4',intrest_generate_by_teacher='$a5',"
                    . "other_activity='$a6' WHERE fusername='smm'";
            }
            else
            {
               $a1=($a1+$b1)/2;
               $a2=($a1+$b2)/2;
               $a3=($a3+$b3)/2;
               $a4=($a4+$b4)/2;
               $a5=($a5+$b5)/2;
               $a6=($a6+$b6)/2;
               
               $sql = "UPDATE faculty SET teaching_skill='$a1',knowledge='$a2',communication_skill='$a3',"
                    . "integrate_with_other_courses='$a4',intrest_generate_by_teacher='$a5',"
                    . "other_activity='$a6' WHERE fusername='smm'";
            }
            if ($conn->query($sql) === TRUE) {
                // echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }    
            ?>

        <br><br><br>
       
        
        <br><br>
        <form action="f1.php" method="post">

            <table class="rcorners2" border="2" width="50%" align="center">
                <center>



                    <th colspan="2"><h1 style="color:white;">
                                Discrete Mathematics (SMM)
                                <h1></th>


                                
                                    <tr><td>
                                            <h3> Teaching Skill of the teacher</h3></td>
                                        <td>
                                            <input type="radio" name="f1" value="f11" required>5
                                            <input type="radio" name="f1" value="f12" >4
                                            <input type="radio" name="f1" value="f13" >3
                                            <input type="radio" name="f1" value="f14" >2
                                            <input type="radio" name="f1" value="f15" >1
                                        </td></tr>

                                    <tr><td>
                                            <h3> Knowledge base of the teacher</h3></td>
                                        <td>
                                            <input type="radio" name="f2" value="f21" required>5
                                            <input type="radio" name="f2" value="f22">4
                                            <input type="radio" name="f2" value="f23">3
                                            <input type="radio" name="f2" value="f24">2
                                            <input type="radio" name="f2" value="f25">1
                                        </td></tr>


                                    <tr><td>
                                            <h3> Communication Skill of the teacher </td><td>
                                            <input type="radio" name="f3" value="f31" required>5
                                            <input type="radio" name="f3" value="f32">4
                                            <input type="radio" name="f3" value="f33">3
                                            <input type="radio" name="f3" value="f34">2
                                            <input type="radio" name="f3" value="f35">1
                                        </td></tr>


                                    <tr><td>
                                            <h3> Ability to integrate content with other courses</td><td>
                                            <input type="radio" name="f4" value="f41" required>5
                                            <input type="radio" name="f4" value="f42">4
                                            <input type="radio" name="f4" value="f43">3
                                            <input type="radio" name="f4" value="f44">2
                                            <input type="radio" name="f4" value="f45">1
                                        </td></tr>


                                    <tr><td>
                                            <h3> Interest generated by teacher</td><td>
                                            <input type="radio" name="f5" value="f51" required >5
                                            <input type="radio" name="f5" value="f52">4
                                            <input type="radio" name="f5" value="f53">3
                                            <input type="radio" name="f5" value="f54">2
                                            <input type="radio" name="f5" value="f55">1
                                        </td></tr>


                                    <tr><td>
                                            <h3> Other Activity</td><td>
                                            <input type="radio" name="f6" value="f61" required>5
                                            <input type="radio" name="f6" value="f62">4
                                            <input type="radio" name="f6" value="f63">3
                                            <input type="radio" name="f6" value="f64">2
                                            <input type="radio" name="f6" value="f65">1</td>
                                    </tr>




                                  
                                    <tr><td colspan="2" align="center">
                                                <button type="submit" name="b1" class="button button5">Submit</button>
                                                <a href="f2.php" class="button button5" ><font size="4">Next</font></a></td></tr>



                                    

                            </center>
                      </table>
                 </form>
           </body>           
      </html>
