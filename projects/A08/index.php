<?php

if (isset($_POST['btnGoToPi'])) {
  header("Location: islandOfPersonality.php");
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Core Memories</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link href="https://fonts.cdnfonts.com/css/carton-six" rel="stylesheet">
                
  <style>
    h1 {
      font-family: 'Carton Six', sans-serif;
      text-align: center;   
    }

    body{
      font-family: "Raleway", sans-serif
    }

    body,
    html {
      height: 100%
    }

    .bgimg {
      background-image: url('shared/assets/imgs/bg1.png');
      min-height: 100%;
      background-position: center;
      background-size: cover;
    }

    .w3-btn {
      background-color: #04073D;
      border-radius: 50px;
    }
  </style>
</head>

<body>

  <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
    <div class="w3-display-topleft w3-padding-large w3-xlarge">
      <img src="shared/assets/imgs/logo.png">
    </div>
    <div class="w3-display-middle">
      <h1 class="w3-jumbo w3-animate-top">CORE MEMORIES</h1>
      <hr class="w3-border-grey" style="margin:auto;width:40%">
      <p class="w3-large w3-center">The threads of time weave the islands that define my soul.</p>

      <form method="POST">
        <div style="text-align: center;">
          <button type="submit" id="btnGoToPi" name="btnGoToPi" class="w3-btn"> Unveil </button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>