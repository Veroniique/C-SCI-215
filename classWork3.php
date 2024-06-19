<?php
    //connecting database
    include 'db.php';

//Number 1:
$sql = "SELECT sid, first, last, birthdate FROM student";
$answer = mysqli_query($sql, $link);

echo "<h1>Number 1</h1>";
echo $answer->num_rows();
if ($answer->num_rows() > 0) {
    echo "The results are: ";
    while($row = $answer->fetch_assoc()) {
        echo "SID: " . $row["sid"]. " FirstName: " . $row["first"]. ", LastName: " . $row["last"]. ", BirthDate: " . $row["birthdate"]."<br>";
        }
    } else {
            echo "0 results";
}

//Number 2:
$sql = "SELECT * FROM student where sid= 818347712";
$answer2 = mysqli_query($sql, $link);

echo "<h1>Number 2</h1>";

if($answer2->num_rows > 0)
{
    echo "The results are: ";
    while($row = $answer2->fetch_assoc())
{
    echo "SID: " . $row["sid"]. " FirstName: " . $row["first"]. ", LastName: " . $row["last"]. ", BirthDate: " . $row["birthdate"]. ", GPA: ". $row["gpa"]. ", Advisor: " . $row["advisor"]. "<br>";
}
} else {
    echo "0 results";
}

//Number 3:
$sql = "SELECT first, last, advisor FROM student WHERE advisor = 1";
$answer3 = mysqli_query($sql, $link);

echo "<h1>Number 3</h1>";

if ($answer3->num_rows > 0) 
{
    echo "The results are: ";
    while($row = $answer3->fetch_assoc())
{
 echo "First Name: " . $row["first"]. ", Last Name: " . $row["last"]. ", Advisor: " . $row["advisor"]. "<br>";
}
} else { 
    echo "0 results";
}

//Number 4:
$sql = "SELECT first, last, advisor FROM student WHERE advisor=1 OR advisor=2";
$answer4 = mysqli_query($sql, $link); 

echo "<h1>Number 4</h1>";

if ($answer4->num_rows > 0)
{
    echo "The results are: ";
    while($row = $answer4->fetch_assoc())
{ 
    echo "First Name: " . $row['first']. ", Last Name: " . $row['last']. ", Advisor: " . $row['advisor']. "<br>";
}} 
    else {
        echo "0 results";
    }

//Number 5:
$sql = "SELECT first, last, birthdate FROM student WHERE birthdate > 1960-01-01 ORDER BY DOB|first|last";
$answer5 = mysqli_query($sql, $link);

echo "<h1>Number 5</h1>";

if ($answer5->num_rows > 0)
{
    echo "The results are: ";
    while($row = $answer5->fetch_assoc())
    {
        echo "Birthdate: " . $row['birthdate']. ", Last Name: " . $row['last']. ", First Name: " . $row['first'] . "<br>";
        }
} else {
    echo "0 results";
}

//Number 6:
$sql = "SELECT first, last, gpa FROM student WHERE gpa=3.0 OR gpa=4.0";
$answer6 = mysqli_query($sql, $link);

echo "<h1>Number 6</h1>";

if ($answer6->num_rows > 0)
{
    echo "The results are: ";
    while($row = $answer6->fetch_assoc())
    {
        echo "GPA: " . $row['gpa']. ", First Name: " . $row['first']. ", Last Name: " . $row['last'] . "<br>";
    }
}else {
    echo "0 results";
}
?> 


