<?php
// add your name + password for chelan below. This will connect you to my db (CsclubNik) 
$servername = "localhost";
$username = "ADD YOUR NAME HERE";
$password = "ADD YOUR PASSWORD HERE";
$dbname = "CsclubNik";


// DONT make changes to the echo's below -- otherwise it shows message for when you connect, which is fine but for the final you dont want
//messages to show up
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch(PDOException $e) {
    echo "" . $e->getMessage();
}
?>