

<?php
if (isset($_POST[''])) {
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



