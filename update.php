<?php

include_once('config.php');

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
}

$prep = $conn->prepare($sql);

$prep->bindParam('id:',$id);
$prep->bindParam('surname:',$surname);
$prep->bindParam('username:',$username);
$prep->bindParam('name:',$name);
$prep->bindParam('email:',$email);

$prep->execute();

header














?>