<?php
    //Connecting to database server
    $link = mysqli_connect("localhost","Veronique","Frikkie17");

    if($link)
        print "Successfully connected to the database server!";
        else
            die("Connection to the database server failed");

    //Selecting database
    mysqli_select_db($link, "student")
        OR die("Error accessing database.");
        print "Successfully selected the database.";
?>