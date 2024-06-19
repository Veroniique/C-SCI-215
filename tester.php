<?php
//includes the connection file
require_once 'db_connect.php';


// Execute a query and fetches the results from the "test" table in the "CsclubNik" database
$stmt = $conn->query("SELECT test1 FROM test");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display the results
foreach ($results as $row) {
    echo "test1: " . $row['test1'] . "<br>";
}
?>