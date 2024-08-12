
<?php
session_start(); // Start the session

// Check if instructor_id is set in the URL
if (isset($_GET['instructor_id'])) {
    $instructorId = $_GET['instructor_id'];

    // Store the instructor ID in the session
    $_SESSION['instructor_id'] = $instructorId;
} 


$instructors = include('instructors_fetched.php');

// Check if instructor_id is set in the session
if (isset($_SESSION['instructor_id'])) {
    $instructorId = $_SESSION['instructor_id'];

    // Find the selected instructor in the $instructors array
    $selectedInstructor = null;
    foreach ($instructors as $instructor) {
        if ($instructor['instructor_id'] == $instructorId) {
            $selectedInstructor = $instructor;
            break; // Stop the loop once the instructor is found
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instructors details</title>
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
                    <!-- Navbar links -- ks and dropdown items as needed -->
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

    <?php
// Display the details of the selected instructor
if ($selectedInstructor) {
    echo '<h1>' . $selectedInstructor['instructor_name'] . '</h1>';
    echo '<h2 class="display-5 fw-bold text-body-emphasis">'.$_SESSION['school_name'].'</h2>';
    echo '<p><strong>Department:</strong> ' . $selectedInstructor['department'] . '</p>';
    echo '<p><strong>Email:</strong> ' . $selectedInstructor['instructor_email'] . '</p>';
    include('instructor_ratings_fetchlog.php');
    if (isset($_SESSION['instructor_id'])) {
        $instructor_id = $_SESSION['instructor_id'];
        $overallRating = getOverallRating($instructor_id);  
    }    // Add more details as needed
} else {
    echo 'Instructor not found.';
}

// Move this else statement outside the if-else block
} else {
    echo 'Instructor ID not provided.';
}
?>
        <div class="col-lg-1 mx-auto">
            <div class="lead mb-4">
            <?php
        echo '<h3 class="overall">' . $overallRating . '</h3>';
        ?>
        </div>
        </div>
<!--show more-->
<div class="avgratings-container col-lg-4 mx-auto ">
    <a id="showMoreBtn">more details</a>

    <div class="ratings-details my-4 " style="display: none;">
        <?php
        include_once './instructor_ratings_fetchlog.php';

        if (isset($_SESSION['instructor_id'])) {
            $instructor_id = $_SESSION['instructor_id'];
            $averages = getAverageRatings($instructor_id);
        ?>
                <div class="rateavrgbox">
                    <p>Knowledge: </p>
                    <input class="range" type="range" min="0" max="10" value="<?php echo $averages['averageKnowledge']; ?>" disabled>
                    <p class="ratevalue"><?php echo $averages['averageKnowledge']; ?></p>
                </div> 

                <div class="rateavrgbox">
                    <p>Communication: </p>
                    <input class="range" type="range" min="0" max="10" value="<?php echo $averages['averageCommunication']; ?>" disabled>
                    <p class="ratevalue"><?php echo $averages['averageCommunication']; ?></p>
                </div>
                <div class="rateavrgbox">
                    <p>Engagement: </p>
                    <input class="range" type="range" min="0" max="10" value="<?php echo $averages['averageEngagement']; ?>" disabled>
                    <p class="ratevalue"><?php echo $averages['averageEngagement']; ?></p>
                </div>

                <div class="rateavrgbox">
                    <p>Overall: </p>
                    <input class="range" type="range" min="0" max="10" value="<?php echo $averages['averageOverall']; ?>" disabled>
                    <p class="ratevalue"><?php echo $averages['averageOverall']; ?></p>
                </div>
                <!-- Add more summary ratings here if needed -->
         
        
                <?php
        } else {
            echo "Instructor ID not found in session.";
        }
        ?>
    </div>
</div>


    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">check and rate your instructors</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center " id="pills-tab" role="tablist">
        <a type="button" href="./ratings_instructor.php" class="btn btn-primary btn-lg px-4 gap-3 nav-link active" fdprocessedid="cqzs1s">Rate Now</a>
        </div>
      </div>
    </div>

    <!--comments-->
    <div class="comments-container">
    <h2>Latest Ratings</h2>
    
    <?php
    include_once './instructor_ratings_fetchlog.php';

    // Fetch ratings from the database
    if (isset($_SESSION['instructor_id'])) {
        $instructor_id = $_SESSION['instructor_id'];
        $ratingsData = getInstructorRatingsFromDatabase($instructor_id);

        foreach ($ratingsData as $rating) {
            // Display each rating
    ?>
            <div class="comment-box">
                <div class="commentsummary">
                    <div class="commentoverall">
                        <h3><?php echo $rating['overall']; ?></h3>
                    </div>
                    <p>Overall</p>
                </div>
                <hr>
                <!-- Display summary of ratings with an option to show more details -->
                <div class="summary">
                    <p>Course: <?php echo $rating['course']; ?></p>
                    <p><?php echo $rating['reviewText']; ?></p>
                    <!-- Display other summary information here -->
                </div>
                <div class="more-details">
                    <div class="moredetailratings">
                        <p>Knowledge:</p>
                        <input class="range" type="range" min="0" max="10" value="<?php echo $rating['knowledge']; ?>" disabled>
                        <p class="ratevalue"><?php echo $rating['knowledge']; ?></p>
                    </div>

                    <div class="moredetailratings">
                        <p>Communication:</p>
                        <input class="range" type="range" min="0" max="10" value="<?php echo $rating['communication']; ?>" disabled>
                        <p class="ratevalue"><?php echo $rating['communication']; ?></p>
                    </div>

                    <div class="moredetailratings">
                        <p>Engagement:</p>
                        <input class="range" type="range" min="0" max="10" value="<?php echo $rating['engagement']; ?>" disabled>
                        <p class="ratevalue"><?php echo $rating['engagement']; ?></p>
                    </div>

                    <hr>
                    <p><?php echo $rating['reviewText']; ?></p>
                    <!-- Display other details here -->
                </div>
                <p class="show-more" onclick="toggleDetails(this)">Show more</p>
            </div>
    <?php
        }
    } else {
        echo "Instructor ID not found in session.";
    }
    ?>
</div>


</div>



<script>
        // JavaScript to handle "Show More" functionality
        document.getElementById('showMoreBtn').addEventListener('click', function () {
            var detailsContainer = document.querySelector('.ratings-details');
            var button = document.getElementById('showMoreBtn');

            if (detailsContainer.style.display === 'none') {
                detailsContainer.style.display = 'block';
                button.innerHTML = 'Show Less';
            } else {
                detailsContainer.style.display = 'none';
                button.innerHTML = 'Show More';
            }
        });
        
    function toggleDetails(element) {
        var moreDetails = element.parentElement.querySelector('.more-details');
        var summary = element.parentElement.querySelector('.summary');

        if (moreDetails.style.display === 'none') {
            moreDetails.style.display = 'block';
            summary.style.display = 'none';
            element.textContent = 'Show less';
        } else {
            moreDetails.style.display = 'none';
            summary.style.display = 'block';
            element.textContent = 'Show more';
        }
    }

    </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>