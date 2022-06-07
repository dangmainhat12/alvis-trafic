<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./assets/style/main.css" />
    <link rel="stylesheet" href="./assets/style/product-child.css" />

</head>

<body>
    <?php include 'main-menu.php'; ?>
    <section id="header" class="heading-box">
        <div class="container">
            <div class="row">
                <div class="col-md-8 heading-main-box">
                    <h1 class="title-heading fw-700 text-white-color mb-4">
                        AI Box
                    </h1>
                    <p class="descript-heading fw-400 font-size-18 text-white mb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

                </div>

            </div>
        </div>
    </section>
    <main>
        <section class="category-child-products child-products-AI-box" id="category-child-products">
            <div class="container">
                <div class="category-child-products-list">
                    <div class="row flex-column align-content-center">
                        <a href="Smart-Retail-Box.php" class="dark-grey-color">
                            <div class="category-child-products-items d-flex">
                                <div class="card mb-3 cursor-pointer" href="" height="149">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light-grey">
                                            <img src="./assets/images/Smart-retail-box-1.svg" alt="ALVIS Traffic Camera" class="card-img img-left">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-title category-child-products-title fw-500 font-size-18 pl-1">
                                                Smart retail box</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="Smart-Building-Box.php" class="dark-grey-color">
                            <div class="category-child-products-items d-flex">
                                <div class="card mb-3 cursor-pointer" href="" height="149">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light-grey">
                                            <img src="./assets/images/Smart-building-Box-1.svg" alt="ALVIS Traffic Camera" class="card-img img-left">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-title category-child-products-title fw-500 font-size-18 pl-1">
                                                Smart building box</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

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