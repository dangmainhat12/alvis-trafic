<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALVIS</title>
  <!-- CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="./assets/style/main.css" />
  <link rel="stylesheet" href="./assets/style/main-menu.css" />

</head>

<body>
  <main>
    <section id="menu-heading">
      <div class="container">
        <div class="">
          <div class="">
            <nav class="navbar navbar-expand-xl p-0">
              <a href="home.php" class="navbar-brand p-0">
                <div class="logo-brand">
                  <img src="./assets/images/logo_brand.svg" alt="">
                </div>
              </a>
              <button class="btn navbar-toggler" type="button" data-toggle='collapse' data-target='#main-nav'>
                <span class="navbar-toggler-icon dark-grey-color"><img src="./assets/images/icon/navbar.svg" alt=""></span>
              </button>
              <div class="collapse navbar-collapse" id="main-nav">
                <ul class="header-menu navbar-nav no-gutters d-flex fw-600 font-size-18 list-unstyled ml-auto">
                  <li class="nav-item">
                    <a class="nav-link d-block dark-grey-color" id="home" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-block dark-grey-color" id="about" href="about-us.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-block dark-grey-color" id="product" href="product.php">Products
                    </a>
                  </li>
                  <li class="nav-item d-none">
                    <a class="nav-link d-block dark-grey-color" id="news" href="#">News</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-block dark-grey-color" id="contact" href="contact.php">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>

            <!-- End-nav -->
            <table id="hoverProduct" class="table table-bordered p-2 position-absoluted bg-white" style="width: 872px; top: 79px; left: 40%; position: absolute; z-index: 1000; display: none;">
              <thead>
                <tr class="border-table-grey">
                  <th class="fw-700 font-size-18 dark-black-color2"><a href="product-child.php" class="dark-black-color2">AI Camera</a></th>
                  <th class="fw-700 font-size-18 dark-black-color2"><a href="AI-box.php" class="dark-black-color2">AI Box</a></th>
                  <th class="fw-700 font-size-18 dark-black-color2"><a href="Video-Analytics-Platform.php" class="dark-black-color2">Video Analytics Platform</a></th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-table-grey">
                  <td>
                    <ul class="list-unstyled">Fix Camera
                      <li class="pl-4">
                        <ul class="">
                          <li>
                            <a href="ALVIS-traffic-camera.php" class="dark-grey-color">ALVIS Traffic camera</a>
                          </li>
                          <li>
                            <a href="alvis-speed-cam.php" class="dark-grey-color">ALVIS Speed camera</a>
                          </li>
                          <li>
                            <a href="alvis-enforce-cam.php" class="dark-grey-color">ALVIS Enforcement camera</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="list-unstyled">PTZ Camera
                      <li class="pl-4">
                        <ul>
                          <li>
                            <a href="ALVIS-PTZ-AI-starlight-cam.php" class="dark-grey-color">ALVIS PTZ AI Starlight camera</a>
                          </li>
                          <li>
                            <a href="alvis-PTZ-AI-HORIZON-cam.php" class="dark-grey-color">ALVIS PTZ AI Hoziron camera</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <ul>
                      <li class="list-unstyled fw-500"><a href="Smart-Retail-Box.php" class="dark-grey-color">Smart Retail Box</a></li>
                      <li class="list-unstyled fw-500"><a href="Smart-Building-Box.php" class="dark-grey-color">Smart Home Box</a></li>
                    </ul>
                  </td>
                  <td><a href="Video-Analytics-Platform.php" class="fw-500 dark-grey-color">Eravision</a></td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- SCRIPT -->
  <!-- CDN -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    document.getElementById("product").addEventListener("mouseover", mouseOver);
    document.getElementById("product").addEventListener("mouseout", mouseOut);
    function mouseOver() {
      $('#hoverProduct').show();
    }
    function mouseOut() {
      $('#hoverProduct').hide();
    }

    document.getElementById("hoverProduct").addEventListener("mouseover", mouseOver2);
    document.getElementById("hoverProduct").addEventListener("mouseout", mouseOut2);
    function mouseOver2() {
      $('#hoverProduct').show();
    }
    function mouseOut2() {
      $('#hoverProduct').hide();
    }

  </script>
</body>

</html>