<?php
session_start(); // Start the session at the beginning of the file

if (!isset($_SESSION['username']) || !isset($_SESSION['user_id'])) {
    header("Location: ../login1.php"); // Redirect to login page if session doesn't exist
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="userstyle.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
    
<!-- Navigation Bar -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!--logo-->
            <a class="navbar-brand" href="index.html">
                <img id="logoimg" src="../svg/logo.png" alt="rate logo" width="40" height="50" fill="currentColor" viewBox="0 0 16 16">
                <h id="logoname">EduReview Hub</h>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav me-5" role="tablist">
                    <!-- Navbar links -->
                    <!-- Adjust the links and dropdown items as needed -->
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active me-2 " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <!--
                    <li class="nav-item" role="presentation">
                        <a class="nav-link me-2 " id="rateschool-tab" data-bs-toggle="tab" data-bs-target="#rateschool" type="button" role="tab" aria-controls="rateschool" aria-selected="false">Rate School</a>
                    </li> --><!--
                    <li class="nav-item" role="presentation">
                        <a class="nav-link me-5 "id="RateInst-tab" data-bs-toggle="tab" data-bs-target="#RateInst" type="button" role="tab" aria-controls="RateInst" aria-selected="false">Rate Instructor</a>
                    </li>-->
                    <li class="nav-item dropdown" role="presentation">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../svg/userIcon.png" alt="User" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<div class="wrapper">
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="container col-xxl-8 px-4 py-5 ">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="../svg/heroes.png.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="400" loading="lazy">
              </div>
              <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Discover, Rate, and Share Your School Experiences</h1>
                <p class="lead">Choose your school and start reviewing</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <form class="d-flex" id="searchForm" action="../search.php" method="$_GET">
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
            <!-- Three columns of text below the carousel -->
            <div class="row">
              <div class="col-lg-4">
              <img class="bd-placeholder-img" src="../svg/facerate.png" width="160" height="160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <h2 class="fw-normal">Make Informed Decisions:</h2>
                <p>Get insights into the school's environment, teaching quality, extracurricular activities, and more.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="bd-placeholder-img" src="../svg/Stars.png" width="160" height="160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <h2 class="fw-normal">Read and Write Reviews:</h2>
                <p>Share your own experiences by leaving a review for your school.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="bd-placeholder-img" src="../svg/Comment.png" width="160" height="160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <h2 class="fw-normal">Join the Conversation:</h2>
                <p>Ask questions, share advice, and stay informed about education matters.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->        
          </div>
    </div>
    <!--rating form-->
    <div class="tab-pane fade" id="rateschool" role="tabpanel" aria-labelledby="rateschool-tab">
    <?php
    include '../ratings.php';
    ?>
    </div>
    <div class="tab-pane fade" id="RateInst" role="tabpanel" aria-labelledby="RateInst-tab">instructor...</div>
    </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>