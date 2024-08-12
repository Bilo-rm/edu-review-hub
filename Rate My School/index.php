
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduReviewHub</title>
    <link href="style.css" rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="login.js" defer></script>
</head>
<body>
<header>    
    <nav class="navbar navbar-expand-lg  navbar-light" >
        <div class="container" id="navi">
            <!--logo-->
            <a class="navbar-brand" href="index.php" ><img  id="logoimg" src="./svg/logo.png" alt="rate logo" width="40" height="40" fill="currentColor"  viewBox="0 0 16 16">  <!--<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-clipboard2-pulse-fill" viewBox="0 0 16 16">
                <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z"/>
              </svg>--><h id="logoname">EduReview Hub</h> </a>

            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown" >
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item " > 
                        <a class="nav-link" href="#Aboutus" >About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contactus">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <div class="dropdown">

                        <a class="btn btn-light ms-3" id="loginbtn" data-bs-toggle="modal" href="./login1.php" role="button">Login</a>

                        <a class="btn btn-light ms-3" id="loginbtn" data-bs-toggle="modal" href="./signup.php" role="button">Register</a>



                        <!--
                        <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
                          <div class="modal-dialog ">
                            <div class="modal-content">
                              <!--login header-
                                  <div class="modal-header p-5 pb-4 border-bottom-0">
                                    <h1 class="fw-bold mb-0 fs-2">Login</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="tygkxk"></button>
                                  </div>
                                    <!--login body--
                                      <div class="modal-body p-5 pt-0">
                                        <form class="">
                                          <div class="form-floating mb-3">
                                            <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" fdprocessedid="15qjq">
                                            <label for="floatingInput">Email address</label>
                                          </div>
                                          <div class="form-floating mb-3">
                                            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" fdprocessedid="lwoeq">
                                            <label for="floatingPassword">Password</label>
                                          </div>
                                          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="zzb3ew" onclick="goToAnotherPage()" >Login</button>
                                          <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                                          <hr class="my-4">
                                          <h2 class="fs-5 fw-bold mb-3">Login By</h2>
                                          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit" fdprocessedid="f9g4fo">
                                            <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
                                            Sign up with Google acount
                                          </button>
                                          <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit" fdprocessedid="4lz3gl">
                                            <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
                                            Sign up with Facebook
                                          </button>
                                        </form>
                                      </div>
                              </div>
                          </div>
                      </div>

                    </div> -->
                    
<!----
                    <button class="btn btn-light ms-3" data-bs-toggle="modal" href="register.php" data-bs-target="./register.php" type="button">Register</button>

                    <div class="modal fade" id="ModalFormsingup" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
                      <div class="modal-dialog ">
                        <div class="modal-content">
                          <!--login header--
                              <div class="modal-header p-5 pb-4 border-bottom-0">
                                <h1 class="fw-bold mb-0 fs-2">Sign up With Us</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="tygkxk"></button>
                              </div>
                                <!--login body--
                                  <div class="modal-body p-5 pt-0">
                                    <form class="">
                                      <div class="form-floating mb-3">
                                        <input type="Firstname" class="form-control rounded-3" id="floatingInput" placeholder="name" fdprocessedid="15qjq">
                                        <label for="floatingInput">First Name</label>
                                      </div>
                                      <div class="form-floating mb-3">
                                        <input type="Surename" class="form-control rounded-3" id="floatingInput" placeholder="name" fdprocessedid="15qjq">
                                        <label for="floatingInput">Sure Name</label>
                                      </div>
                                      <div class="form-floating mb-3">
                                        <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" fdprocessedid="15qjq">
                                        <label for="floatingInput">Email address</label>
                                      </div>
                                      <div class="form-floating mb-3">
                                        <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" fdprocessedid="lwoeq">
                                        <label for="floatingPassword">Password</label>
                                      </div>
                                      <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="zzb3ew">SingUp</button>
                                      <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                                      <hr class="my-4">
                                      <h2 class="fs-5 fw-bold mb-3">Login By</h2>
                                      <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit" fdprocessedid="f9g4fo">
                                        <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
                                        Sign up with Google acount
                                      </button>
                                      <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit" fdprocessedid="4lz3gl">
                                        <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
                                        Sign up with Facebook
                                      </button>
                                    </form>
                                  </div>
                          </div>
                      </div>
                  </div>
                -->

                    
                </div>
            </div>
        </div>
    </nav>
</header>
<section class="body-section">
<!--The Heroes-->
<section>
  <div class="container col-xxl-8 px-4 py-5 ">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./svg/heroes.png.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="400" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Discover, Rate, and Share Your School Experiences</h1>
        <p class="lead">At EduReview Hub, we believe that every student and parent deserves access to honest and valuable insights about schools and it’s Instructors. Our platform is designed to empower the education community by providing a space to share, discover, and rate schools it’s Instructors.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <form class="d-flex" id="searchForm" action="./search.php" method="$_GET">
                            <input class="form-control me-2" type="text" name="query" placeholder="Search..." aria-label="Search" id="searchInput">
                            <button class="btn btn-outline-primary" id="searchBtn" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section>

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img class="bd-placeholder-img" src="./svg/facerate.png" width="160" height="160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h2 class="fw-normal">Make Informed Decisions:</h2>
        <p>Get insights into the school's environment, teaching quality, extracurricular activities, and more.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img" src="./svg/Stars.png" width="160" height="160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h2 class="fw-normal">Read and Write Reviews:</h2>
        <p>Share your own experiences by leaving a review for your school.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img" src="./svg/Comment.png" width="160" height="160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h2 class="fw-normal">Join the Conversation:</h2>
        <p>Ask questions, share advice, and stay informed about education matters.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


  </div>

  <hr class="featurette-divider" id="Aboutus">
  <div class="row featurette my-5 ">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading fw-normal lh-1">About Us</h2>
      <p class="lead">EduReviewingHub.com (ERH) is a review site founded in October 2023 by BRM Company, a software engineering from Cyprus, Girne, which allows students to assign ratings to professors and Schools Cyprus institutions. RMP is the largest online destination for professor ratings. The site includes 20+ schools, 1.7k professors, and over 10k ratings. </p>
      <p class="lead">On ERH, Student may post a rating and review of any professor that is already listed on the site. Furthermore, users may create a listing for any individual not already listed. To be posted, a rater must rate the course and/or professor on a 1-10 scale in the following categories: "overall quality" and "level of difficulty". The rater may also share if he or she would take the professor again, if the class was taken for credit, if attendance was mandatory, if the textbook was used, and what grade he or she received in the course; additionally, the rater may include comments of up to 340 characters in length.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="./svg/Aboutus.png" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 400x400" preserveAspectRatio="xMidYMid slice" focusable="false">
    </div>
  </div>
</section>



<!--Section: Contact v.2-->
<section class="mb-4" id="Contactus">
<div class="container">
  <!--Section heading-->
  <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
  <!--Section description-->
  <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
      a matter of hours to help you.</p>

  <div class="row">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control">
                          <label for="name" class="">Your name</label>
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control">
                          <label for="email" class="">Your email</label>
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                          <input type="text" id="subject" name="subject" class="form-control">
                          <label for="subject" class="">Subject</label>
                      </div>
                  </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                      <div class="md-form">
                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                          <label for="message">Your message</label>
                      </div>

                  </div>
              </div>
              <!--Grid row-->

          </form>

          <div class="text-center text-md-left">
              <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
          </div>
          <div class="status"></div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
              <li><i class="fa-2x"><img src="./svg/location.png" height="30" width="30"></i>
                  <p>Girne, 99300, Cyprus</p>
              </li>

              <li><i class=" mt-4 fa-2x"><img src="./svg/phone.png" height="30" width="30"></i>
                  <p>+90 533 8759 687</p>
              </li>

              <li><i class=" mt-4 fa-2x"><img src="./svg/email.png" height="40" width="40"></i>
                  <p>BRM@gmail.com</p>
              </li>
          </ul>
      </div>
      <!--Grid column-->

  </div>
</div>

</section>
<!--Section: Contact v.2-->
<!--Footer-->
<section class="footer">
    <footer class="py-5 my-0.001 mx-0">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="navf-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="navf-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
        <li class="navf-item"><a href="#Aboutus" class="nav-link px-2 text-body-secondary">About Us</a></li>
      </ul>
      <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
    </footer>
</section>


<!-- Remove the container if you want to extend the Footer to full width. -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>