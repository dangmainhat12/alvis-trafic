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
  <link rel="stylesheet" href="./assets/style/news-detail.css" />

</head>

<body>
<?php include 'main-menu.php';?>
  <main>
    <section class="all-products news-detail">
        <div class="container">
            <div class="maint-content row align-items-center">
                <div class="col-md-6">
                    <div class="" style="color: #09BDF8; font-size: 16px;">27/05/2022</div>
                    <div class="title">
                        Lorem Ipsum is simply dummy text of the printing.
                    </div>
                    <div class="des">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the .
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <img class="w-100" src="./assets/images/news_maint_content.png">
                </div>
            </div>
            <div class="content">
                <div class="des">
                    Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. Pellentesque facilisis condimentum nunc, nec placerat eros aliquam lobortis. Nullam non bibendum neque, nec sagittis risus. Proin est metus, bibendum at maximus quis, placerat id sapien. Fusce ipsum quam, placerat sit amet mauris vitae, suscipit ultrices turpis. Etiam ac eros est. Quisque id rhoncus dolor, eget gravida ante. Integer commodo id lacus at fringilla.
                </div>
                <div class="des mt-3" style="font-weight: 500; color: #000000;">
                    “Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. Pellentesque facilisis”
                </div>
                <div class="des mt-2">
                    <ul class="pl-3">
                        <li>Vestibulum ante ipsum primis in faucibus orci</li>
                        <li>Vestibulum ante ipsum primis in fausdacibus orci</li>
                        <li>Vestibulum antjidf rimis in faucibus orci</li>
                    </ul>
                </div>
                <div class="des mt-3">
                    Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. Pellentesque facilisis condimentum nunc, nec placerat eros aliquam lobortis. Nullam non bibendum neque, nec sagittis risus. Proin est metus, bibendum at maximus quis, placerat id sapien. Fusce ipsum quam, placerat sit amet mauris vitae, suscipit ultrices turpis. Etiam ac eros est. Quisque id rhoncus dolor, eget gravida ante. Integer commodo id lacus at fringilla.
                </div>
                <div class="des mt-3">
                    Phasellus scelerisque eros felis, ut lobortis ipsum mattis ullamcorper. Morbi magna orci, ornare vel auctor non, malesuada sed dolor. Pellentesque facilisis condimentum nunc, nec placerat eros aliquam lobortis. Nullam non bibendum neque, nec sagittis risus. Proin est metus, bibendum at maximus quis, placerat id sapien. Fusce ipsum quam, placerat sit amet mauris vitae, suscipit ultrices turpis. Etiam ac eros est. Quisque id rhoncus dolor, eget gravida ante. Integer commodo id lacus at fringilla.
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
    $('#news').addClass('border-text-color')
  </script>
</body>

</html>