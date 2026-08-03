<?php
$host = "sql301.infinityfree.com";
$user = "if0_42562550";
$pass = "ahmdWaleed21322";
$dbname = "if0_42562550_robot_control";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die(json_encode([
        "status" => "error",
        "message" => "Connection failed: " . $conn->connect_error
    ]));
}
?>