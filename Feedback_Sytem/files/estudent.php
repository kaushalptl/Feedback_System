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
        
        session_start();
    if (isset($_POST['bn'])) 
    {
        $dbhandler = mysqli_connect("localhost", "root", "", "feedback");
      if (!$dbhandler)
        {
           die("Connection failed: " . mysqli_connect_error());
        }
        $username = $_POST['susername'];
        $password = $_POST['spwd'];
        $result = mysqli_query($dbhandler, "select * from student where username='$username' and password='$password'");
        $count = mysqli_num_rows($result);
        if ($count == 1)
            {
              $_SESSION['user'] = $_POST['susername'];
              if ($_POST['vercode1'] != $_SESSION['vercode'] OR $_SESSION['vercode']=='')
              {
                  header("Location:cestudent.php");
              }
              else
              {
              header("Location:f1.php");
              } 
            
            }
            else
              {
                header("Location:estudent.php");
              }
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



                    <form action="student.php" method="POST" class="login100-form validate-form">
                        <span class="login100-form-title p-b-49">
                            <font size="7">Login</font>

                        </span> 

                        <span class="login100-form-title p-b-49">
                            <a href="admin.php"><font size="5">Admin</font></a>
                            <a href="faculty.php"><font size="5">Faculty</font></a>
                            <a href="student.php"><font size="5">Student</font></a>

                        </span> 
                         <center>
                            <font size="4" color="red">Invalid Username Or Password??</font>
                            
                         </center>  
                        <br>


                        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                            <span class="label-input100">Username</span>
                            <input class="input100" type="text" name="susername" placeholder="Type your username">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">Password</span>
                            <input class="input100" type="password" name="spwd" placeholder="Type your password">
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                        </div>
                        <br>
                         <div class="captcha"><img src="captchafont.php" width="150px" height="60px"></div><br>
                         <div class="wrap-input100 validate-input m-b-23" data-validate = "Captcha is reauired">
                            
                            <input class="input100" type="text" name="vercode1" placeholder="Enter Your Captch Here">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                         </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" name="bn" class="login100-form-btn">
                                    Login
                                </button>
                            </div>
                        </div>

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


    