<?php
include("connect.php");
include("classes.php");

$islandHeaderContainers = array();
$islandContentContainers = array();

$islandOfPersonalityID = $_GET['id'];

$islandHeaderQuery = "SELECT name, longDescription, color FROM `islandsofpersonality` WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
$islandHeaderResults = executeQuery($islandHeaderQuery);


while ($islandHeader = mysqli_fetch_assoc($islandHeaderResults)) {
    $ih = new contentHeader(
        $islandHeader['name'],
        $islandHeader['color'],
        $islandHeader['longDescription'],
    );
    array_push($islandHeaderContainers, $ih);
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

    array_push($islandContentContainers, $ic);
}
?>
<!DOCTYPE html>

<head>
    <title>Content</title>
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

    <div class="container">
        <div class="row">
            <?php foreach ($islandHeaderContainers as $islandHeaderContainer) { ?>
                <?php echo $islandHeaderContainer->buildHeader(); ?>
            <?php } ?>
        </div>
                
         <div class="row align-items-center mt-5">
            <?php foreach ($islandContentContainers as $islandContentContainer) { ?>
                <?php echo $islandContentContainer->buildContentContainer(); ?>
            <?php } ?>
        </div> 

    </div>

</body>

</html>