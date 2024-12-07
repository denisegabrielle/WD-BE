<?php include "assets/shared/islandOfPersonalityProcess.php" ?>

<!DOCTYPE html>

<?php include "assets/shared/head.php" ?>

<body>
    <canvas id="snowCanvas"></canvas>
    <div class="bgimg">
        <h1 class="title text-center mb-5">ISLAND OF PERSONALITY</h1>
        <section>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($islandOfPersonalityContainers as $islandOfPersonalityContainer) { ?>
                        <?php echo $islandOfPersonalityContainer->buildIslandOfPersonalityContainer(); ?>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>

    <?php include "assets/shared/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>