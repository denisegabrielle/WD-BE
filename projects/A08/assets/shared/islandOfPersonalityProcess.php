<?php
include("connect.php");
include("classes.php");

$islandOfPersonalityContainers = array();

$islandOfPersonalityQuery = "SELECT * FROM islandsofpersonality";
$islandOfPersonalityResults = executeQuery($islandOfPersonalityQuery);

while ($islandOfPersonality = mysqli_fetch_assoc($islandOfPersonalityResults)) {
    $ip = new islandOfPersonality(
        $islandOfPersonality['islandOfPersonalityID'],
        $islandOfPersonality['image'],
        $islandOfPersonality['name'],
        $islandOfPersonality['color'],
        $islandOfPersonality['shortDescription']
    );

    array_push($islandOfPersonalityContainers, $ip);
}
?>