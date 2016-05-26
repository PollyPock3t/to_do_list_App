<?php

include("obj/dbCon.php");

echo "hello";

$taskName = $_POST['taskInput'];

echo $taskName;

$sql = "INSERT INTO to_do_Tasks(taskName) VALUES ('".$taskName."')";

echo $sql;

$rec = $conn->query($sql);

header("Location:index.php");

?>