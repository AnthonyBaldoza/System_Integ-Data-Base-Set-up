<?php

include "connection.php";

$sql = "select * from student";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$row = $result->fetch_assoc();
$student = [
    "S_id" => htmlspecialchars($row['id']),
    "F_name" => htmlspecialchars($row['first_name']),
    "gender" => htmlspecialchars($row['gender'])

];

header("Content-Type: application/json");

echo json_encode($student);

?>