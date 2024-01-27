<?php 
$connect = mysqli_connect(
    'mysql', # service name
    'root', # username
    'root', # password
    'student' # db table
);

$table_name = "students";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['FirstName']."</p>";
    echo "<p>".$i['LastName']."</p>";
    echo "<hr>";
}