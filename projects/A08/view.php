<?php include "assets/shared/viewProcess.php" ?>

<!DOCTYPE html>

<?php include "assets/shared/head.php" ?>

<body>
    <canvas id="snowCanvas"></canvas>
    <div class="container-elements fluid">
        <img src="assets/imgs/img1.png" class="elements" id="img1">
        <img src="assets/imgs/img2.png" class="elements" id="img2">
        <img src="assets/imgs/img1.png" class="elements" id="img3">
    </div>

    <div class="container">
        <div class="row m-5">
            <?php foreach ($islandHeaderContainer as $islandHeader) { ?>
                <?php echo $islandHeader->buildHeader(); ?>
            <?php } ?>
        </div>
        <div class="row mt-5">
            <img src="assets/imgs/img3.png">
        </div>

        <div class="row align-items-center mt-5 m-5">
            <?php foreach ($islandContentContainer as $islandContent) { ?>
                <?php echo $islandContent->buildContentContainer(); ?>
            <?php } ?>
        </div>
    </div>

    <?php include "assets/shared/footer.php" ?>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>