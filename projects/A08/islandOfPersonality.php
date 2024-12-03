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

<!DOCTYPE html>

<head>
    <title>Island Of Personality</title>
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
        <h1 class="title text-center">ISLAND OF PERSONALITY</h1>
        <div class="row align-items-center mt-2">
            <?php foreach ($islandOfPersonalityContainers as $islandOfPersonalityContainer) { ?>
                <?php echo $islandOfPersonalityContainer->buildIslandOfPersonalityContainer(); ?>
            <?php } ?>
        </div>
    </div>
</body>

</html>