
<?php
session_start(); // Start the session

// Check if user_id and school_id are set in the session
/*
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
    <title>View Ratings</title>
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
            <div class="avgbox my-5 " id="avgbox">
                <!--<div class="logo d-block mx-auto mb-0.5" ><img src="./svg/finalLogo.png" alt="finallogo" high="72" width="72"></div>-->
                <h1><?php echo $_SESSION['school_name']; ?></h1>
                    <div class="ratings-container">
                        <?php
                        include_once './reviews_fetched_logical.php';

                        if (isset($_SESSION['school_id'])) {
                            $school_id = $_SESSION['school_id'];
                            $averages = calculateAverageRating($school_id);

                            ?>
                        <div class="row">
                            <div class="col">
                            <div class="rateavrgbox">
                            <p>Reputation: </p>
                            <input class="range" type="range" min="0" max="10" value="<?php echo $averages['reputation']; ?>" disabled>
                            <p class="ratevalue"><?php echo $averages['reputation']; ?></p>
                            </div> 


                            <div class="rateavrgbox">
                            <p>Location: </p>
                            <input class="range" type="range" min="0" max="10" value="<?php echo $averages['location']; ?>" disabled>
                            <p class="ratevalue"><?php echo $averages['location']; ?></p>
                            </div>


                            <div class="rateavrgbox">
                            <p>Opportunities: </p>
                            <input class="range" type="range" min="0" max="10" value="<?php echo $averages['opportunities']; ?>" disabled>
                            <p class="ratevalue"><?php echo $averages['opportunities']; ?></p>
                            </div>


                            <div class="rateavrgbox">
                            <p>Facilities: </p>
                            <input class="range" type="range" min="0" max="10" value="<?php echo $averages['facilities']; ?>" disabled>
                            <p class="ratevalue"><?php echo $averages['facilities']; ?></p>
                            </div> 
                            </div> 


                            <div class="col">
                            <div class="rateavrgbox">
                            <p>Internet: </p>
                            <input class="range" type="range" min="0" max="10" value="<?php echo $averages['internet']; ?>" disabled>
                            <p class="ratevalue"><?php echo $averages['internet']; ?></p>
                            </div>


                            <div class="rateavrgbox">
                            <p>Safety: </p>
                            <input class="range" type="range" min="0" max="10" value="<?php echo $averages['safety']; ?>" disabled>
                            <p class="ratevalue"><?php echo $averages['safety']; ?></p>
                            </div>
                            

                            <div class="rateavrgbox">
                            <p>Clubs: </p>
                            <input class="range" type="range" min="0" max="10" value="<?php echo $averages['clubs']; ?>" disabled>
                            <p class="ratevalue"><?php echo $averages['clubs']; ?></p>
                            </div>

                            <div class="rateavrgbox">
                            <p>Instructors: </p>
                            <input class="range" type="range" min="0" max="10" value="<?php echo $averages['instructors']; ?>" disabled>
                            <p class="ratevalue"><?php echo $averages['instructors']; ?></p>
                            </div>
                            </div>
                        </div>
                            <div>
                            <a type="button" class="btn btn-primary" href='/Rate%20My%20School/ratings.php?school_id=$school_id'>Rate Now</a>
                            <a type="button" class="btn btn-primary" href='/Rate%20My%20School/instructors_display.php?school_id=$school_id'>View all Instructors</a>
                            </div>
                            <!-- Add similar ranges and values for other rating categories -->
                            <?php
                        }else {
                            echo "University ID not found in session.";
                        }
                        ?>
                    
                </div>

            </div>

    <div class="comments-container">
        <h2>Latest Ratings</h2>
    
        <?php
        include_once './reviews_fetched_logical.php';

        // Fetch ratings from the database grouped by ID
        if (isset($_SESSION['school_id'])) {
            $school_id = $_SESSION['school_id'];
            $ratingsData = getRatingsFromDatabaseGrouped($school_id); // Modify this function accordingly

            foreach ($ratingsData as $ratingGroup) {
                // Display each group of ratings in a single comment box
                ?>
                <div class="comment-box">
                    <div class="commentsummary">
                        <div class="commentoverall">
                        <h3><?php echo $ratingGroup[0]['id']; ?></h3>
                        </div>
                        <p>Overall</p>
                    </div>
                    <hr>
                    <!-- Display summary of ratings with an option to show more details -->
                    <div class="summary">
                        <?php foreach ($ratingGroup as $rating) { ?>
                            <p><?php echo $rating['review_text']; ?></p>
                            <!-- Display other summary information here -->
                           
                        <?php } ?>
                    </div>
                    <div class="more-details">
                        <?php foreach ($ratingGroup as $rating) { ?>
                            <div class="moredetailratings" >
                                <p>Reputation:</p>
                                <input class="range" type="range" min="0" max="10" value="<?php echo $averages['reputation']; ?>" disabled>
                                <p class="ratevalue"><?php echo $averages['reputation']; ?></p>
                            </div>

                            <div class="moredetailratings">
                                <p>Location:</p>
                                <input class="range" type="range" min="0" max="10" value="<?php echo $averages['location']; ?>" disabled>
                                <p class="ratevalue"><?php echo $averages['location']; ?></p>
                            </div>

                            <div class="moredetailratings">
                                <p>Opportunities:</p>
                                <input class="range" type="range" min="0" max="10" value="<?php echo $averages['opportunities']; ?>" disabled>
                                <p class="ratevalue"><?php echo $averages['opportunities']; ?></p>
                            </div>

                            <div class="moredetailratings">
                                <p>Facilities:</p>
                                <input class="range" type="range" min="0" max="10" value="<?php echo $averages['facilities']; ?>" disabled>
                                <p class="ratevalue"><?php echo $averages['facilities']; ?></p>
                            </div>

                            <div class="moredetailratings">
                                <p>Internet:</p>
                                <input class="range" type="range" min="0" max="10" value="<?php echo $averages['internet']; ?>" disabled>
                                <p class="ratevalue"><?php echo $averages['internet']; ?></p>
                            </div>

                            <div class="moredetailratings">
                                <p>Safety:</p>
                                <input class="range" type="range" min="0" max="10" value="<?php echo $averages['safety']; ?>" disabled>
                                <p class="ratevalue"><?php echo $averages['safety']; ?></p>
                            </div>

                            <div class="moredetailratings">
                                <p>Clubs:</p>
                                <input class="range" type="range" min="0" max="10" value="<?php echo $averages['clubs']; ?>" disabled>
                                <p class="ratevalue"><?php echo $averages['clubs']; ?></p>
                            </div>

                            <div class="moredetailratings">
                                <p>Instructors:</p>
                                <input class="range" type="range" min="0" max="10" value="<?php echo $averages['instructors']; ?>" disabled>
                                <p class="ratevalue"><?php echo $averages['instructors']; ?></p>
                            </div>
                            <hr>
                            <p><?php echo $rating['review_text']; ?></p>
                            <!-- Display other details here -->
                        <?php } ?>
                    </div>
                    <p class="show-more" onclick="toggleDetails(this)">Show more</p>
                </div>
            <?php
            }
        } else {
            echo "University ID not found in session.";
        }
        ?>
    </div>
</div>

<script>
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
</body>
</html>
