<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login V4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===;[=7============================================================================================-->
    </head>
    <style>
        .a{
            background-color:red;
        }

    </style>

    <body>
       <?php
       if(isset($_POST['b1']))
       {
     
                // Create connection
                $conn = new mysqli("localhost", "root","","feedback");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                
                 $username=$_POST['fusername'];
                 
                  $sql = "DELETE FROM student WHERE username='$username'";


                if ($conn->query($sql) === TRUE) {
                   
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
       }            
?>


        <div class="limiter">

            <div class="container-login100" style="background-image: url('images/p1.jpeg');">

                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <center>
                        <div class="r">
                            <span class="login100-form-title p-b-49">

                                <font color="purple">Feedback System</font>

                            </span>
                        </div>           
                    </center>


                    <span class="login100-form-title p-b-49">
                        <h1>Delete Student</h1>

                    </span> 	 
                    <form action="deletestudent.php" method="POST" class="login100-form validate-form">

                        

                        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                            <span class="label-input100">Username</span>
                            <input class="input100" type="text" name="fusername" placeholder="Type your username">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>
                       
                        
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" name="b1" class="login100-form-btn">
                                    Delete
                                </button>
                            </div>
                        </div>
                        
                        <br>
                         <span class="login100-form-title p-b-49">
                            <a href="faculty1.php"><font size="6">Back</font></a>
                      

                        </span> 
                       
                </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>


