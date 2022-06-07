<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./assets/style/main.css" />
    <link rel="stylesheet" href="./assets/style/detail-product.css" />

</head>

<body>
<?php include 'main-menu.php';?>
    <main>
        <section class="detail-product" id="detail-product">
            <div class="container">
                <div class="bread-crumb-ctm py-1">
                    <a href="#" class="each-tab-bc mt-3 mb-4">
                        <span>AI Camera</span>
                    </a>
                </div>
                <div class="row">
                    <div class="detail-product-items col-md-6 col-12">
                        <h1 class="detail-product-items-name text-blue-color text-uppercase fw-800">ALVIS PTZ AI HORIZON CAMERA
                        </h1>
                        <p class="detail-product-items-subname font-size-18">Long range smary monitoring with pan, tilt, zoom capabilites</p>
                        <ul>
                            <li class="detail-product-items-primary"><h4 class="fw-500">Traffic surveillance</h4>
                                <ul class="list-unstyled font-size-18">
                                    <li class="ml-1">- Vehicle detection
                                    </li>
                                    <li class="ml-1">- Vehicle classification (color, brand, type)
                                    </li>
                                    <li class="ml-1">- Pedestrian detection
                                    </li>
                                    <li class="ml-1">- License plate recognition
                                    </li>
                                    <li class="ml-1">- Traffic measurement
                                    </li>
                                </ul>
                            </li>

                            <li class="detail-product-items-primary"><h4 class="fw-500">Unusual event detection</h4>
                                <ul class="list-unstyled">
                                    <li class="ml-1">- Falling object detection
                                    </li>
                                    <li class="ml-1">- Fire/smoke detection
                                    </li>
                                    <li class="ml-1">- Illegally parking detection
                                    </li>
                                    <li class="ml-1">- License plate recognition
                                    </li>
                                    <li class="ml-1">- Wrong lane detection </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-6 col-12">
                        <img src="./assets/images/ALVIS-PTZ-AI-HORIZON-CAMERA.svg" alt="">
                    </div>
                </div>

                <div class="models-in-product">
                    <h2 class="fw-700">Models in ALVIS Traffic Camera</h2>
                <div class="row">
                    <div class="mr-4">
                        <div class="card border-grey-color">
                            <img src="./assets/images/model-0-of-ALVIS-PTZ-AI-HORIZON.svg" class="card-img-top bg-light-grey" alt="">
                            <div class="card-body text-center py-3 px-4">
                                <h5 class="card-title fw-700 mb-2">ALVP - Hon - 2M36</h5>
                                <p class="card-text">ALVIS PTZ 2MP 36x AI Horizon camera</p>
                            </div>

                        </div>
                    </div>
                    <div class="mr-4">
                        <div class="card border-grey-color">
                            <img src="./assets/images/model-1-of-ALVIS-PTZ-AI-HORIZON.svg" class="card-img-top bg-light-grey" alt="...">
                            <div class="card-body text-center py-3 px-4">
                                <h5 class="card-title fw-700 mb-2">ALVP - Hon - 4M25</h5>
                                <p class="card-text">ALVIS PTZ 4MP 25x AI Horizon camera</p>
                            </div>

                        </div>
                    </div>
                    <div class="">
                        <div class="card border-grey-color">
                            <img src="./assets/images/model-2-of-ALVIS-PTZ-AI-HORIZON.svg" class="card-img-top bg-light-grey" alt="">
                            <div class="card-body text-center py-3 px-4">
                                <h5 class="card-title fw-700 mb-2">ALVP - Hon - 8M20</h5>
                                <p class="card-text">ALVIS PTZ 8MP 20x AI Horizon camera</p>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php';?>

    <!-- SCRIPT -->
    <!-- CDN -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script>
    $('#product').addClass('border-text-color')
  </script>

</body>

</html>