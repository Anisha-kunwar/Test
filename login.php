<?php

$userid = $_POST['userid'] ?? '';
$password = $_POST['password'] ?? '';

if ($userid === "admin" && $password === "12345") {
    echo "success";
} else {
    echo "failed";
}

?>