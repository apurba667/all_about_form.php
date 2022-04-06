<?php
$id=$_GET['updateid'];
if (isset($_POST['update'])) {
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
        $sql = "update cse set id=$id,name='$name',email='$email',password='$pass' where id=$id";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "updated successfully";
            header("location:display.php");
        }
    }
    if(count($error)>=1){
        echo "Update Failed!";
    }
}
?>

<html>

<head>
    <title>Update</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="f_name" placeholder="Enter Your Name"><br><br>
        <input type="gmail" name="f_email" placeholder="Enter Your Email"><br><br>
        <input type="password" name="f_pass" placeholder="Enter Your Password"><br><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>

</html>