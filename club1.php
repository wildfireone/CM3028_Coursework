<?php
include("dbconnect.php");

$sql = "SELECT * FROM club";
$result = $db->query($sql);
while($row = $result->fetch_array())
{
    $clubID = $row['clubID'];
    $clubName = $row['clubName'];
    $description = $row['description'];

    echo "<li><a href='club/{$clubID}'>{$clubName}</a>{$description}</li>";
}

?>