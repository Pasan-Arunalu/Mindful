<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>navbar</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/navbar.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <img
          src="css/img/_60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
          alt=""
          style="height: 50px; width: 50px; border-radius: 50%"
        />
        <a class="navbar-brand me-auto" href="about.php">MINDFUL</a>
        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MINDFUL</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="homepage.php"
                  >HOME</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="movies.php">BLOGS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="deals.php">COMMUNITY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">ABOUT US</a>
              </li>
            </ul>
            <ul class="navbar-nav flex-grow-2 pe-3">
              <li class="nav-item">
                <a class="nav-link" id="login" href="login.php">LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

    <div class="watermark">

    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script src="js/navbar.js"></script>
  </body>
</html>
