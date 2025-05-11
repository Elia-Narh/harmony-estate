<?php
require_once 'includes/config.php';

$sql = "SELECT * FROM properties ORDER BY created_at DESC";
$result = $conn->query($sql);

$properties = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $properties[] = $row;
    }
}

echo json_encode($properties);
?> 