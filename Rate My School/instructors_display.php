
<?php

session_start(); // Start the session
/*
// Check if user_id and school_id are set in the session
if (!isset($_SESSION['school_id'])) {
    echo "User or School ID not found in session.";
    header("Location: ./login1.php");

    exit;
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instructors</title>
    <link href="./userPage/userstyle.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!--logo-->
            <a class="navbar-brand" href="index.html">
                <img id="logoimg" src="./svg/logo.png" alt="rate logo" width="40" height="50" fill="currentColor" viewBox="0 0 16 16">
                <h id="logoname">EduReview Hub</h>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav me-5" role="tablist">
                    <!-- Navbar links -->
                    <!-- Adjust the links and dropdown items as needed -->
                    <li class="nav-item" role="presentation">
                    <a class="nav-link active me-2" href="./userPage/Home.php">Home</a>
                </li>
                    <!-- Add 'dropdown' class to the parent li -->
                    <li class="nav-item dropdown" role="presentation">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            <img src="./svg/userIcon.png" alt="User" width="32" height="32" class="rounded-circle">
                        </a>
                        <!-- Add 'dropdown-menu' class to the ul -->
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <!--
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">software_eng</a></li>-->
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="./logout.php">Sign out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="wrapper">

<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="./svg/instructor.png" alt="" width="82" height="67">
    <h1 class="display-5 fw-bold text-body-emphasis"><?php echo $_SESSION['school_name'];?> Instructors</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">check and rate your instructors</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center " id="pills-tab" role="tablist">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3 nav-link active" fdprocessedid="cqzs1s"  id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Show all instructors</button>
        <div class="dropdown">
            <button class="btn btn-outline-secondary btn-lg px-4 dropdown-toggle mx-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Department
            </button>
            <ul class="dropdown-menu" role="presentation" >
                <li><a class="dropdown-item" href="#" id="pills-software_eng-tab" data-bs-toggle="pill" data-bs-target="#pills-software_eng" type="button" role="tab" aria-controls="pills-software_eng" aria-selected="false">Software Enfineering</a></li>
                <li><a class="dropdown-item" href="#" id="pills-math-tab" data-bs-toggle="pill" data-bs-target="#pills-math" type="button" role="tab" aria-controls="pills-math" aria-selected="false">Math</a></li>

            </ul>
        </div>
      </div>
    </div>
  </div>
    <!--Place holder-->
    <div class="tab-content" id="pills-tabContent">
        <!--Dispaly all instructors-->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">


            <?php
         /*   $school_id = $_SESSION['school_id'];*/

            // Include the file containing the logic to fetch data and pass the school ID
            $instructors = include_once('instructors_fetched.php');

            // Check if there is any data to display
            if (!empty($instructors)) {
                echo '<div class="container marketing">';
                echo '<div class="row">';
                // Loop through the fetched data and display each instructor in a column
                foreach ($instructors as $instructor) {
                    echo '<div class="col-lg-3 col-md-4 col-sm-6 column" id="#">';
                    echo '<img src="./svg/teachericon.png" alt="Instructor Image" class="bd-placeholder-img " width="60" height="60">';
                    echo '<p><strong> </strong> ' . $instructor['instructor_name'] . '</p>';
                    echo '<p><strong></strong> ' . $instructor['instructor_email'] . '</p>';
                    // Add more fields as needed
                    echo '<p><a class="btn btn-secondary" href="instructor_details.php?instructor_id=' . $instructor['instructor_id'] . '&set_session=true">View details »</a></p>';

                    echo '</div>';
                }

                echo '</div>'; // Close the row
                echo '</div>'; // Close the container
            } else {
                echo "No results to display.";
            }

            ?>

        </div>
        <div class="tab-pane fade" id="pills-software_eng" role="tabpanel" aria-labelledby="pills-software_eng-tab" tabindex="0" >
        <?php
            $mathInstructors = include_once('instructors_fetched.php');
            if (!empty($mathInstructors)) {
                echo '<div class="container marketing">';
                echo '<div class="row">';
                foreach ($mathInstructors as $instructor) {
                    echo '<div class="col-lg-3 col-md-4 col-sm-6 column" id="#">';
                    echo '<img src="./svg/teachericon.png" alt="Instructor Image" class="bd-placeholder-img " width="60" height="60">';
                    echo '<p><strong> </strong> ' . $instructor['instructor_name'] . '</p>';
                    echo '<p><strong></strong> ' . $instructor['instructor_email'] . '</p>';
                    echo '<p><a class="btn btn-secondary" href="instructor_details.php?instructor_id=' . $instructor['instructor_id'] . '">View details »</a></p>';


                    echo '</div>';
                }
                echo '</div>'; // Close the row
                echo '</div>'; // Close the container
            } else {
                echo "No results to display.";
            }
            ?>
        </div>
        <div class="tab-pane fade" id="pills-math" role="tabpanel" aria-labelledby="pills-math-tab" tabindex="0">.math.</div>
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>