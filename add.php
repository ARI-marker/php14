<?php
include_once('config.php')

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];

    $sql="INSERT INTO users(name.surname.email) VALUES (:name,:surname,:email)";
    $sqlQuery = $conn->prepare($sql);

    $sqlQuery->bindParam(':name',$name);
    $sqlQuery->bindParam(':username',$username);
    $sqlQuery->bindParam(':email',$email);
    $sqlQuery->bindParam(':password',$password);


    $sqlQuery->execute();

    echo"Data saved successfully";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a user</title>
</head>
<body>
    <form action ="add.php" method = "POST">
        <input type = "text" name = "name" placeholder = "Name"><br>
        <input type = "text" name = "surname" placeholder = "Surname"><br>
        <input type = "email" name = "email" placeholder = "Email"><br>
        <button type = "submit" name = "submit">Add</button>
    </form>    

</body>
</html>