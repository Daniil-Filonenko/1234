<?php
require "dbconnect.php";
$result = $conn->query("SELECT *  FROM subj") ;
echo "<h2>Названия предметов</h2>";
while ($row = $result->fetch()) {
    echo $row['name']."<br>";

}