<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Interface</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <button><a href="index.php">Add User</a></button>
    <table border="1px solid black">
        <tr>
            <th>Serial Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Operation</th>
        </tr>
        <?php
        $con = mysqli_connect("localhost", "root", "", "diu");
        $sql = "select * from cse";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $pass = $row['password'];
                echo ' 
                <tr>
                <td>' . $id . '</td>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $pass . '</td>
                <td>
                     <button><a href="update.php?updateid='.$id.'">Update</a></button>
                    <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                </td>
                </tr>';
            }
        }
        ?>

    </table>
</body>

</html>