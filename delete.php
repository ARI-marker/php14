<?php

include_once('config.php');

$id = $_GET['id'];

$sql = "DELETE FROM users where id=:id";

$getUsers = $coon->prepare($sql);

$getUsers->bindParam(':id',$id);

$getUsers-> execute();

















?>