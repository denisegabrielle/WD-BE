<?php
include("connect.php");

$personalityIslandQuery = "SELECT * FROM `islandsofpersonality`";
$personalityIslandResult = executeQuery($personalityIslandQuery);

?>

<!DOCTYPE html>

<head>
  <title>Personality Island</title>
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
    <h1 class="title text-center">PERSONALITY ISLAND</h1>
    <div class="row align-items-center mt-5 p-3">

      <?php
      if (mysqli_num_rows($personalityIslandResult) > 0) {
        while ($personalityIsland = mysqli_fetch_assoc($personalityIslandResult)) {
          ?>

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 my-3">
            <form method="POST">
              <button type="submit" id="btnLoveband" name="btnLoveband" style="background-color:transparent; border:none;">
                <img src="<?php echo $personalityIsland['image']; ?>" class="img-fluid">
              </button>
            </form>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-bg">
            <h1 class="islandName" style="color:<?php echo $personalityIsland['color']; ?>;"><?php echo $personalityIsland['name']; ?></h1>
            <h5 class="islandShortDesc" style="color:<?php echo $personalityIsland['color']; ?>;"><?php echo $personalityIsland['shortDescription']; ?></h5>
          </div>

          <?php
        }
      }
      ?>
    </div>
  </div>
</body>

</html>