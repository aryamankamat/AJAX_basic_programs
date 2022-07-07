<?php

$con = mysqli_connect('localhost','root','','college',3307);

if(!$con)
{
    echo "Failed to establish the connection";
    die("Terminate the script");
}

$course = $_GET['courseName'];

$query = "SELECT * FROM student  WHERE stud_course = '$course'";

$records = mysqli_query($con, $query);
#var_dump($records);
if(mysqli_num_rows($records)>0)
{
    echo "<table border=1><tr><th>Roll</th><th>Name</th><th>Course</th></tr>";
    while($row = mysqli_fetch_array($records))
    {
        echo "<tr><td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[3] . "</td></tr>";
    }
}
else
    echo "NO RECORDS FOUND";

echo "</table>";

?>