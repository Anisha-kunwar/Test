<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "locationdb"
);

$country = $_GET['country'] ?? '';

$stmt = $conn->prepare(
    "SELECT city FROM cities WHERE country = ?"
);

$stmt->bind_param("s", $country);

$stmt->execute();

$result = $stmt->get_result();

echo "<option value=''>Select City</option>";

while ($row = $result->fetch_assoc()) {

    echo "<option value='" .
         htmlspecialchars($row['city']) .
         "'>" .
         htmlspecialchars($row['city']) .
         "</option>";

}

?>