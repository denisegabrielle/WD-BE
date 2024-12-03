<?php
include("connect.php");
include("classes.php");

$islandContentContainers = array();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize input
    $contentQuery = "SELECT islandcontents.*, islandsofpersonality.name AS ip_name, islandsofpersonality.longDescription AS ip_longDescription 
    FROM islandsofpersonality 
    JOIN islandcontents 
    ON islandsofpersonality.islandOfPersonalityID = islandcontents.islandOfPersonalityID 
    WHERE islandsofpersonality.islandOfPersonalityID = $id";

    $contentResults = executeQuery($contentQuery);

    while ($islandContents = mysqli_fetch_assoc($contentResults)) {
        $ic = new islandContent(
            $islandContents['islandContentID'],
            $islandContents['islandOfPersonalityID'],
            $islandContents['ip_name'],
            $islandContents['ip_longDescription'],
            $islandContents['image'],
            $islandContents['content'],
            $islandContents['color']
        );

        array_push($islandContentContainers, $ic);
    }
}


?>

<!DOCTYPE html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="shared/assets/css/style.css">
    <link href="https://fonts.cdnfonts.com/css/carton-six" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/raleway-5" rel="stylesheet">
</head>

<body>
    <div class="container-elements fluid">
        <img src="shared/assets/imgs/img1.png" class="elements" id="img1">
        <img src="shared/assets/imgs/img2.png" class="elements" id="img2">
        <img src="shared/assets/imgs/img1.png" class="elements" id="img3">
    </div>

    

</body>

</html>