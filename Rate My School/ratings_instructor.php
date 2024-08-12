<?php
session_start(); // Start the session at the beginning of the file

// Check session variables
if (!isset($_SESSION['username']) || !isset($_SESSION['user_id']) || !isset($_SESSION['school_id'])) {
    echo "Debug: Session variables are not set or have incorrect values.";
    var_dump($_SESSION); // Print the session variables for debugging
    header("Location: ./login1.php");
    exit;}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate Instructor</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="./rate_instructor.css" rel="stylesheet">
</head>
<body>
<form action="./add_instructor_ratings.php" method="post">

    <div class="wrapper">
        <div class="ratingBox">

            <h3 class="mb-3">Lets Rate Instructor</h3>
                <div class="grid-container">
                
                    <div class="ratebox">
                        <label  class="label-text">Course Code:</label>
                        <textarea name="course_Code" cols="2" rows="2" placeholder="Write the taken course Code"></textarea>
                    </div>
                    <hr>
                    <div class="ratebox">
                        <label  class="label-text">Knowledge about the course</label>
                        <input name="Knowledge" type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value, 'ratevalue2')">
                        <span class="ratevalue" id="ratevalue2">5</span>
                    </div>
                    <hr>
                    <div class="ratebox">
                        <label  class="label-text">communicates concepts to the students</label>
                        <input name="communication" type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value, 'ratevalue3')">
                        <span class="ratevalue" id="ratevalue3">5</span>
                    </div>
                    <hr>
                    <div class="ratebox">
                        <label  class="label-text">Engagement </label>
                        <input name="Engagement" type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value, 'ratevalue4')">
                        <span class="ratevalue" id="ratevalue4" >5</span>
                    </div>
                    <hr>
                    <div class="ratebox">
                        <label  class="label-text">Overall </label>
                        <input name="Overall" type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value, 'ratevalue5')">
                        <span class="ratevalue" id="ratevalue5" >5</span>
                    </div>
                    <hr>

                </div>
                <label  class="label-text" id="write">Write a Review: </label>
            <div class="comment">
                <textarea name="review_text" cols="30" rows="5" placeholder="Discuss your personal experience on this school. What’s great about it? What could use improvement?"></textarea>
                <div class="btn-group">
                    <button name="submit" class="btn submit" >Submit</button>
                    <a name="cancel" class="btn cancel" href="./instructor_details.php">Cancel</a>
                </div>
            </div>
        </div> 
    </div>
</form>



    <script>
        function rangeSlider(value, spanId ){
        document.getElementById(spanId).innerHTML =value;
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>