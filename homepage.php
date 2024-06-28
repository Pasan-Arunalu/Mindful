<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Carousal links -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"
      rel="stylesheet"
    />
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    ></script>
    
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.6.8/build/spline-viewer.js"></script>
    
    <title>MINDFULL</title>
    <link href="css/index1.css" type="text/css" rel="stylesheet" />

  </head>

  <body>

    <?php
      include 'navbar.php';
    ?>

    <div class="pagetop">
      <h2 class="Pictag">Your Mental Wellbeing Matters!</h2>
      <h2 class="Pictag1">Welcome to 'Mindful', where mental health matters.</h2>
      <div class="buttons">
          <button type="button" class="btn btn-info">Get Started</button>
          <button type="button" class="btn btn-info">About Us</button>
      </div>
  </div>


  <div class="spline-background">
  <spline-viewer url="https://prod.spline.design/KdkbKgF6XVXoQrgf/scene.splinecode"></spline-viewer>
  </div>

    <!-- Stories of Inspiration Area -->

    <div class="divider reveal">
      <br>
      <br>

      <h2 class="card_text">Stories of Inspiration</h2>

      <div class="cards">
        <div class="card" style="width: 18rem">
          <div class="card-wrapper" style="background-color: #f0f0f0">
            <div class="card-body">
              <img
                src="images/png.png"
                class="profile-icon"
                alt="Profile Icon"
              />
              <h5 class="card-title">Dhane Manorathne</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-read-blog">Read Blog</a>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <div class="card-wrapper" style="background-color: #f0f0f0">
            <div class="card-body">
              <img
                src="images/png.png"
                class="profile-icon"
                alt="Profile Icon"
              />
              <h5 class="card-title">Madushika Lakmini</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-read-blog">Read Blog</a>
            </div>
          </div>
        </div>

        <div class="card" style="width: 18rem">
          <div class="card-wrapper" style="background-color: #f0f0f0">
            <div class="card-body">
              <img
                src="images/png.png"
                class="profile-icon"
                alt="Profile Icon"
              />
              <h5 class="card-title">Thesera</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-read-blog">Read Blog</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousal Area -->

    <div class="divider2 reveal">
      <br />
      <br />

      <h2 class="card_text">How you feeling today?</h2>
      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="Pictag3">
            Our fun quizzes can help you to identify problems you have and to
            take necessary steps toward your Mental Wellbeing
          </h3>
        </div>
      </div>
      <div class="cards">
        <div class="container">
          <div class="row">
            <div class="col-6"></div>
            <div class="col-6 text-right">
              <a
                class="btn btn-primary mb-3 mr-1"
                href="#carouselExampleIndicators2"
                role="button"
                data-slide="prev"
              >
                <i class="fa fa-arrow-left"></i>
              </a>
              <a
                class="btn btn-primary mb-3"
                href="#carouselExampleIndicators2"
                role="button"
                data-slide="next"
              >
                <i class="fa fa-arrow-right"></i>
              </a>
            </div>
            <div class="col-12">
              <div
                id="carouselExampleIndicators2"
                class="carousel slide"
                data-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 15px">
                          <img
                            class="img-fluid rounded-circle mx-auto d-block mt-3"
                            alt="100%x280"
                            src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
                            style="width: 180px; height: 180px"
                          />
                          <div class="card-body">
                            <h4 class="card-title ml-5">What is Stress?</h4>
                            <!-- <p class="card-text">
                            With supporting text below as a natural lead-in to
                            additional content.
                          </p> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 15px">
                          <img
                            class="img-fluid rounded-circle mx-auto d-block mt-3"
                            alt="100%x280"
                            src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
                            style="width: 180px; height: 180px"
                          />
                          <div class="card-body">
                            <h4 class="card-title ml-4">What is Dippresion?</h4>
                            <!-- <p class="card-text">
                            With supporting text below as a natural lead-in to
                            additional content.
                          </p> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 15px">
                          <img
                            class="img-fluid rounded-circle mx-auto d-block mt-3"
                            alt="100%x280"
                            src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
                            style="width: 180px; height: 180px"
                          />
                          <div class="card-body">
                            <h4 class="card-title ml-5">What is Track1?</h4>
                            <!-- <p class="card-text">
                            With supporting text below as a natural lead-in to
                            additional content.
                          </p> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 15px">
                          <img
                            class="img-fluid rounded-circle mx-auto d-block mt-3"
                            alt="100%x280"
                            src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
                            style="width: 180px; height: 180px"
                          />
                          <div class="card-body">
                            <h4 class="card-title ml-5">What is Track2?</h4>
                            <!-- <p class="card-text">
                            With supporting text below as a natural lead-in to
                            additional content.
                          </p> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 15px">
                          <img
                            class="img-fluid rounded-circle mx-auto d-block mt-3"
                            alt="100%x280"
                            src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
                            style="width: 180px; height: 180px"
                          />
                          <div class="card-body">
                            <h4 class="card-title ml-5">What is Track3?</h4>
                            <!-- <p class="card-text">
                            With supporting text below as a natural lead-in to
                            additional content.
                          </p> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 15px">
                          <img
                            class="img-fluid rounded-circle mx-auto d-block mt-3"
                            alt="100%x280"
                            src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
                            style="width: 180px; height: 180px"
                          />
                          <div class="card-body">
                            <h4 class="card-title ml-5">What is Track4?</h4>
                            <!-- <p class="card-text">
                            With supporting text below as a natural lead-in to
                            additional content.
                          </p> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 15px">
                          <img
                            class="img-fluid rounded-circle mx-auto d-block mt-3"
                            alt="100%x280"
                            src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
                            style="width: 180px; height: 180px"
                          />
                          <div class="card-body">
                            <h4 class="card-title ml-5">What is Track5?</h4>
                            <!-- <p class="card-text">
                            With supporting text below as a natural lead-in to
                            additional content.
                          </p> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 15px">
                          <img
                            class="img-fluid rounded-circle mx-auto d-block mt-3"
                            alt="100%x280"
                            src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
                            style="width: 180px; height: 180px"
                          />
                          <div class="card-body">
                            <h4 class="card-title ml-5">What is Track6?</h4>
                            <!-- <p class="card-text">
                            With supporting text below as a natural lead-in to
                            additional content.
                          </p> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 15px">
                          <img
                            class="img-fluid rounded-circle mx-auto d-block mt-3"
                            alt="100%x280"
                            src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
                            style="width: 180px; height: 180px"
                          />
                          <div class="card-body">
                            <h4 class="card-title ml-5">What is Track7?</h4>
                            <!-- <p class="card-text">
                            With supporting text below as a natural lead-in to
                            additional content.
                          </p> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Get the full Experience -->
    <div class="divider3 reveal">
      <br />
      <br />
      <h2 class="card_text">Get The Full Experience</h2>
      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="Pictag3">
            Create an account to get the full features including,
          </h3>
        </div>
      </div>
      <div class="image-container">
        <div class="image-card">
          <a href="https://example.com/link1" target="_blank">
            <img
              src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
              alt="Description 1"
            />
            <p>Digital Diary</p>
          </a>
        </div>
        <div class="image-card">
          <a href="https://example.com/link2" target="_blank">
            <img
              src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
              alt="Description 2"
            />
            <p>Explore Communities</p>
          </a>
        </div>
        <div class="image-card">
          <a href="https://example.com/link3" target="_blank">
            <img
              src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
              alt="Description 3"
            />
            <p>Psychiatrist Channeling</p>
          </a>
        </div>
      </div>
      <div class="button-container">
        <button class="custom-button">Sing In Now</button>
      </div>
    </div>



    <!-- Resources for u -->
    <div class="divider4 reveal">
      <br />
      <br />
      <h2 class="card_text">Resources for You</h2>
      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="Pictag4">
            Check out our articles and blogs about mental wellbeing
          </h3>
        </div>
      </div>
    </div>

    <br />
    <br />

    <div id="customContainer" class="container reveal">
      <div class="row">
        <div class="col-md-6">
          <div class="card-custom">
            <div class="card-text">
              <h5>Stress Management Techniques</h5>
              <p>
                Exploring strategies to cope with and reduce stress in
                dai...Read Blog
              </p>
            </div>
            <img
              src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
              alt="Card image 1"
            />
          </div>
          <div class="card-custom">
            <div class="card-text">
              <h5>Stress Management Techniques</h5>
              <p>
                Exploring strategies to cope with and reduce stress in
                dai...Read Blog
              </p>
            </div>
            <img
              src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
              alt="Card image 2"
            />
          </div>
          <div class="card-custom">
            <div class="card-text">
              <h5>Stress Management Techniques</h5>
              <p>
                Exploring strategies to cope with and reduce stress in
                dai...Read Blog
              </p>
            </div>
            <img
              src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
              alt="Card image 3"
            />
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-custom">
            <div class="card-text">
              <h5>Stress Management Techniques</h5>
              <p>
                Exploring strategies to cope with and reduce stress in
                dai...Read Blog
              </p>
            </div>
            <img
              src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
              alt="Card image 4"
            />
          </div>
          <div class="card-custom">
            <div class="card-text">
              <h5>Stress Management Techniques</h5>
              <p>
                Exploring strategies to cope with and reduce stress in
                dai...Read Blog
              </p>
            </div>
            <img
              src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
              alt="Card image 5"
            />
          </div>
          <div class="card-custom">
            <div class="card-text">
              <h5>Stress Management Techniques</h5>
              <p>
                Exploring strategies to cope with and reduce stress in
                dai...Read Blog
              </p>
            </div>
            <img
              src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
              alt="Card image 6"
            />
          </div>
        </div>
      </div>
    </div>

    <br />
    <br />

    <div class="bottom_of_the_page reveal">
      <div class="text-center">
        <button class="rounded-button">View More</button>
      </div>
      <br />
      <br />
      <hr />
      <div class="bottom_texts reveal">
        <h2 class="card_text">MINDFUL for you</h2>
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="pictag_position">
              <h3 class="Pictag3">
                Join us on the path to mental wellness and embark on a journey
                of self-discovery, empowerment, and inner peace. Together, let's
                create a brighter, healthier future for ourselves and our
                communities. Welcome to ‘Mindful’, where mental health matters.
              </h3>
            </div>
            <div class="text-center reveal">
              <button class="rounded-button">Learn More.....</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br />
    <br />



    <!-- Footer  -->


    <footer class="footer reveal">
      <div id="footer-container" class="container">
        <div class="row">
          <!-- Left Column -->
          <div class="col-md-4 footer-left">
            <p><a href="#" class="text-black">About Us</a></p>
            <p><a href="#" class="text-black">Stories</a></p>
            <p><a href="#" class="text-black">Contact Us</a></p>
          </div>
          <!-- Middle Column -->
          <div class="col-md-4 footer-middle text-center">
            <img
              src="images/60e38c5b-ba25-4e09-922c-fb39d88e568d.jpeg"
              alt="Logo"
            />
            <h4>Mindful</h4>
            <p>Where mental health matters</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <!-- Right Column -->
          <div class="col-md-4 footer-right">
            <h5>Subscribe to our newsletter</h5>
            <form class="subscribe-form">
              <input type="email" placeholder="Enter your email address" />
              <button type="submit">Subscribe</button>
            </form>
          </div>
        </div>
        <hr />
        <div class="footer_text text-center">
          <h2>Copyright © 2024 mindful.com All rights reserved.</h2>
        </div>

        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="Pictag5">
              Disclaimer: Our site dedicated to mental well-being serves
              informational purposes only. It is not intended to replace
              professional medical advice, diagnosis, or treatment. Always seek
              the guidance of qualified healthcare professionals regarding any
              mental health concerns or conditions.
            </h3>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>

    <script src="navbar.js"></script>
    <script src="js/homepage.js"></script>

  </body>
</html>
