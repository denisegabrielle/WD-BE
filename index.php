<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denise Gabrielle</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/media/DG.png">
</head>

<body>
    <nav class="navbar">
        <div class="container d-flex justify-content-center align-items-center ">
            <a class="navbar-brand" href="index.html">Home</a>
            <a class="navbar-brand" href="#section-about">About</a>

            <a class="navbar-brand">
                <img src="assets/media/DG.png" alt="Logo" width="30" class="d-inline-block align-text-top">
            </a>

            <a class="navbar-brand" href="#section-projects">Projects</a>
            <a class="navbar-brand" href="#section-contacts">Contacts</a>
        </div>
    </nav>

    <section class="section-intro container-fluid" id="home">
        <img src=".//assets/media/img1.png" id="img1" class="elements">
        <img src=".//assets/media/img2.png" id="img2" class="elements">
        <img src=".//assets/media/img3.png" id="img3" class="elements">
        <img src=".//assets/media/img4.png" id="img4" class="elements">

        <div class="row">
            <div class="col-12">
                <h1 class="text">Where Imagination
                    Thrives and Technology
                    Empowers</h1>
            </div>
            <a class="gotToProjects" href="#section-projects">
                <button type="button" class="btn btn-secondary mt-3">
                    Projects
                </button>
            </a>
        </div>
    </section>

    <section id="section-contacts">
        <div class="d-flex justify-content-center  align-items-center">
            <a class="icons mx-5" href="https://www.instagram.com/denisegbx/">
                <i class="bi bi-instagram"></i>
            </a>
            <a class="icons" href="mailto:dnsgbrllsuarez@gmail.com">
                <i class="bi bi-envelope mx-5"></i>
            </a>
            <a class="icons" href="https://x.com/ei_eaiee">
                <i class="bi bi-twitter-x  mx-5"></i>
            </a>
        </div>
    </section>

    <section id="section-about">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 d-flex justify-content-center align-items-center mt-5">
                    <h1><b>A Glimpse of Me</b></h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-about">
        <div class="container mt-3 pt-5 text-center">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <img src=".//assets/media/myPic.png" class="myPic" width="40%">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mt-3">I am<b> Denise Gabrielle M. Suarez,</b></h1>
                    <p class="container-text-info custom-bg mt-3 text-start"><b>an Information Technology student at
                            the Polytechnic University of the Philippines, Sto. Tomas Campus</b>, currently exploring
                        the
                        world of code and creativity. I am a highly motivated student with a deep curiosity about how
                        technology shapes our world. My journey into programming began with a fascination for
                        understanding the inner workings of technology, which quickly evolved into a passion. As I
                        continue to expand my skills and knowledge, my appreciation for the tech industry continues
                        to grow. I am excited about the endless possibilities and eager to contribute to innovations
                        that make our daily lives easier and more efficient.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="section-projects">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h1><b>Projects</b></h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-projects">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#" target="_blank">
                        <img src=".//assets/media/p1.png" />
                    </a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src=".//assets/js/script.js"></script>

    <footer class="container text-center mt-5">
        <p>&copy; 2024 | dg</p>
        <p>For educational purposes only.</p>
    </footer>
</body>

</html>