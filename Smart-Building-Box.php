<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./assets/style/main.css" />
    <link rel="stylesheet" href="./assets/style/detail-product.css" />

</head>

<body>
    <?php include 'main-menu.php'; ?>
    <main>
        <section class="detail-product" id="detail-product">
            <div class="container">
            <div class="bread-crumb-ctm py-1">
                    <a href="product-child.php" class="each-tab-bc mt-3 mb-4">
                        <span>AI Camera</span>
                    </a>
                </div>
                <div class="row">
                    <div class="detail-product-items col-md-6 col-12">
                        <h1 class="detail-product-items-name text-blue-color text-uppercase fw-800">Smart BUILDING Box
                        </h1>
                        <p class="detail-product-items-subname font-size-18">Business intelligent in an AI Box</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="./assets/images/Smart-BUILDING-Box.svg" alt="">
                    </div>
                </div>

                <div class="models-in-product">
                    <h2 class="fw-700">Models in Smart Building Box</h2>
                    <div class="row">
                        <div class="mr-4">
                            <div class="card border-grey-color">
                                <img src="./assets/images/model-1-of-Smart-BUILDING-Box.svg" class="card-img-top bg-light-grey" alt="">
                                <div class="card-body text-center py-3 px-4">
                                    <h5 class="card-title fw-700 mb-2">SBB-8CH</h5>
                                    <p class="card-text">8 Channel video Analytics box for Smart building survaillance</p>
                                </div>

                            </div>
                        </div>
                        <div class="mr-4">
                            <div class="card border-grey-color">
                                <img src="./assets/images/model-2-of-Smart-BUILDING-Box.svg" class="card-img-top bg-light-grey" alt="">
                                <div class="card-body text-center py-3 px-4">
                                    <h5 class="card-title fw-700 mb-2">SBB-8CH-FR</h5>
                                    <p class="card-text">8 Channel video analytics box for smart Building Surveillance with build - in Face recognition</p>
                                </div>

                            </div>
                        </div>
                        <div class="">
                            <div class="card border-grey-color">
                                <img src="./assets/images/model-3-of-Smart-BUILDING-Box.svg" class="card-img-top bg-light-grey" alt="">
                                <div class="card-body text-center py-3 px-4">
                                    <h5 class="card-title fw-700 mb-2">SBB-16CH</h5>
                                    <p class="card-text">16 Channel video analytics box for smart retail </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>


    <!-- SCRIPT -->
    <!-- CDN -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./assets/js/home.js"></script>
    <script>
    $('#product').addClass('border-text-color')
  </script>
</body>

</html>