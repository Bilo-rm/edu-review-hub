<?php
session_start(); // Start the session at the beginning of the file

if (!isset($_SESSION['username']) || !isset($_SESSION['user_id']) || !isset($_SESSION['school_id'])) {
    header("Location:./login1.php"); // Redirect to login page if session doesn't exist
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="rating.css" rel="stylesheet">
</head>
<body>
<form action="./add_ratings.php" method="post">

    <div class="wrapper">
        <div class="ratingBox">

            <h3>Let us rate</h3>
                <div class="grid-container">
                
                    <div class="ratebox">
                        <label  class="label-text">Reputation</label>
                        <input name="reputation" type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value,'ratevalue1')">
                        <span class="ratevalue" id="ratevalue1">5</span>
                    </div>
                    <div class="ratebox">
                        <label  class="label-text">Location</label>
                        <input name="location" type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value, 'ratevalue2')">
                        <span class="ratevalue" id="ratevalue2">5</span>
                    </div>
                    <div class="ratebox">
                        <label  class="label-text">Opportunities</label>
                        <input name="opportunities" type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value, 'ratevalue3')">
                        <span class="ratevalue" id="ratevalue3">5</span>
                    </div>
                    
                    <div class="ratebox">
                        <label  class="label-text">Facilities </label>
                        <input name="facilities" type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value, 'ratevalue4')">
                        <span class="ratevalue" id="ratevalue4" >5</span>
                    </div>
                    <div class="ratebox">
                        <label  class="label-text">Food </label>
                        <input name="food" type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value, 'ratevalue5')">
                        <span class="ratevalue" id="ratevalue5" >5</span>
                    </div>
                    <div class="ratebox">
                        <label  class="label-text">Internet </label>
                        <input name="internet" type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value, 'ratevalue6')">
                        <span class="ratevalue" id="ratevalue6" >5</span>
                    </div>
                    <div class="ratebox">
                        <label  class="label-text">Safety </label>
                        <input name="safety" type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value, 'ratevalue7')">
                        <span class="ratevalue" id="ratevalue7" >5</span>
                    </div>
                    <div class="ratebox">
                        <label class="label-text">Clubs </label>
                        <input name="clubs" type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value, 'ratevalue8')">
                        <span class="ratevalue" id="ratevalue8" >5</span>
                    </div>
                    <div class="ratebox">
                        <label  class="label-text">Instructors </label>
                        <input name="instructors"  type="range"  class="range" value="5" min="0" max="10" onmousemove="rangeSlider(this.value, 'ratevalue9')">
                        <span class="ratevalue" id="ratevalue9" >5</span>
                    </div>
                 
                </div>
                <label  class="label-text">Write a Review: </label>
            <div class="comment">
                <textarea name="review_text" cols="30" rows="5" placeholder="Discuss your personal experience on this school. What’s great about it? What could use improvement?"></textarea>
                <div class="btn-group">
                    <button name="submit" class="btn submit" >Submit</button>
                    <a name="cancel" class="btn cancel" href="./reviews_display.php">Cancel</a>
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