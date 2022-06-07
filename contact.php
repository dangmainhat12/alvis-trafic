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
    <link rel="stylesheet" href="./assets/style/contact.css" />

</head>

<body>
    <?php include 'main-menu.php'; ?>
    <main>
        <section class="contact-us" id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="fw-700 mb-4">Contact Us</h1>
                        <div class="company-name font-size-24 fw-700 mb-2">
                            ERABYTE INC
                        </div>
                        <div class="company-info font-size-20 mb-2">
                        122 CITYSQUARE IRVINE, California, 92614 United States of America                        </div>

                    </div>
                    <div class="col-md-7">
                        <h4 class="fw-700">Leave information for advice</h4>
                        <form>
                            <div class="form-group mb-0">
                                <input type="text" class="form-control btn-no-outline" placeholder="Name">
                            </div>
                            <div class="form-group mb-0">
                                <input type="email" class="form-control btn-no-outline" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group mb-0">
                                <input type="text" class="form-control btn-no-outline" placeholder="Phone">
                            </div>
                            <div class="form-group mb-0">
                                <textarea class="form-control btn-no-outline" rows="3" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-submit btn-no-outline bg-light-blue text-white fw-500 font-size-18">Submit</button>
                        </form>
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
    <script>
        $('#contact').addClass('border-text-color')
    </script>
</body>

</html>