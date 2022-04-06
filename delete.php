<?php
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $con = mysqli_connect("localhost", "root", "", "diu");
    $sql="delete from cse where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:display.php");
    }
}
?>