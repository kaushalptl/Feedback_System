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
                background-color: cyan;
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

            .btn {
                width: auto;
                padding: 0px 25px;
                background-color: #00f7ff;
                border-radius: 10%;
                border-color: red;
            }

        </style>
    </head>
    <body>
        <div class="r">
            <table>
                <tr>

                    <td align="center"><h1> Feedback System</h1></td>
                <tr>    
            </table>
        </div>
        <ul>
            <center>
                <li> <a href="admin.php">Admin</a></li>
                <li><a href="faculty.php">Faculty</a></li>
                <li><a href="student.php">Student</a></li>
            </center>
        </ul>

    <center>
        <h2><center>Login Page</center></h2>
        <form method="POST">
            <table>
                <tr> 
                    <td colspan="2" align="center"> <?php
                        if (isset($_GET['msg']))
                            echo $_GET['msg'];
                        ?> 
                    </td></tr>
                <tr><td><h2>Username :</h2> </td><td><input type="text" name="username" placeholder="username"/></td></tr>
                <tr><td><h2>Password : </h2></td><td><input type="password" name="password" placeholder="password"/></td></tr>
            </table>
            <button type="submit" class="btn" name="bn"><h3>Login</h3></button>
            <button type="reset" class="btn" name="rs"><h3>Reset</h3></button>
        </form>
    </center>
</body>
</html>
<?php
if (isset($_POST['bn'])) {
    $dbhandler = mysqli_connect("localhost", "root", "", "feedback");
    if (!$dbhandler) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($dbhandler, "select * from student where username='$username' and password='$password'");
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['user'] = $_POST['username'];
        $m = "<center><font color=red><h2>Welcome $_SESSION[user]</h2></font></center>";
        header("Location:f1.html?msg=$m");
    } else {
        $m = "Sorry Username Or Password Incorrect";
        header("Location:student1.php?msg=$m");
    }
}
?>

