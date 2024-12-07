<?php
include("connect.php");
include("classes.php");

$islandHeaderContainer = array();
$islandContentContainer = array();

$islandOfPersonalityID = $_GET['id'];

$islandHeaderQuery = "SELECT name, longDescription, color FROM `islandsofpersonality` WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
$islandHeaderResults = executeQuery($islandHeaderQuery);

while ($islandHeader = mysqli_fetch_assoc($islandHeaderResults)) {
    $ih = new contentHeader(
        $islandHeader['name'],
        $islandHeader['color'],
        $islandHeader['longDescription'],
    );
    array_push($islandHeaderContainer, $ih);
}

$islandContentQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
$islandContentResults = executeQuery($islandContentQuery);

while ($islandContent = mysqli_fetch_assoc($islandContentResults)) {
    $ic = new islandContent(
        $islandContent['islandContentID'],
        $islandContent['islandOfPersonalityID'],
        $islandContent['image'],
        $islandContent['content'],
        $islandContent['color'],
    );
    array_push($islandContentContainer, $ic);
}
?>