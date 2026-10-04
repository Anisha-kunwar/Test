<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "ajaxdb"
);

$username = $_GET['username'] ?? '';

if ($username == "") {
    exit;2
}

$stmt = $conn->prepare(
    "SELECT id FROM users WHERE username = ?"
);

$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<span style='color:red'>Username is not available.</span>";
} else {
    echo "<span style='color:green'>Username is available.</span>";
}

?>