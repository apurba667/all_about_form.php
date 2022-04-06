<?php
if (isset($_POST['regist'])) {
    $name = $_POST["f_name"];
    $email = $_POST["f_email"];
    $pass = $_POST["f_pass"];
    $error = array();
    
    if ($name == null) {
        $error['name'] = "Name can't be empty";
        echo $error["name"];
        echo "<br>";
    }
    if ($email == null) {
        $error['email'] = "Email can't be empty";
        echo $error["email"];
        echo "<br>";
    }
    if ($pass == null) {
        $error['pass'] = "Password can't be empty";
        echo $error["pass"];
        echo "<br>";
    }

    if (count($error) == 0) {
        $con = mysqli_connect("localhost","root","","diu");
        $result =mysqli_query($con, "insert into cse (name,email,password) values('$name','$email','$pass')");
        if($result){
            header("location:display.php");
        }
    }
    if(count($error)>=1){
        echo "Insert Failed";
    }
}
?>

<html>

<head>
    <title>Sign Up form</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="f_name" placeholder="Enter Your Name"><br><br>
        <input type="gmail" name="f_email" placeholder="Enter Your Email"><br><br>
        <input type="password" name="f_pass" placeholder="Enter Your Password"><br><br>
        <input type="submit" name="regist" value="Sign up">
    </form>
</body>

</html>