<?php
function getInstructorRatingsFromDatabase($instructor_id) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM instructor_ratings WHERE instructor_id = '$instructor_id' ORDER BY id DESC";
    $result = $conn->query($sql);

    $ratingsData = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $ratingsData[] = $row;
        }
    }

    $conn->close();

    return $ratingsData;
}

function calculateAverageRatings($ratingsData) {
    $totalKnowledge = 0;
    $totalCommunication = 0;
    $totalEngagement = 0;
    $totalOverall = 0;
    $numRows = count($ratingsData);

    foreach ($ratingsData as $row) {
        $totalKnowledge += $row['knowledge'];
        $totalCommunication += $row['communication'];
        $totalEngagement += $row['engagement'];
        $totalOverall += $row['overall'];
    }

    $averageKnowledge = intval(($numRows > 0) ? $totalKnowledge / $numRows : 0);
    $averageCommunication = intval(($numRows > 0) ? $totalCommunication / $numRows : 0);
    $averageEngagement = intval(($numRows > 0) ? $totalEngagement / $numRows : 0);
    $averageOverall =intval (($numRows > 0) ? $totalOverall / $numRows : 0);

    $averages = array(
        'averageKnowledge' => $averageKnowledge,
        'averageCommunication' => $averageCommunication,
        'averageEngagement' => $averageEngagement,
        'averageOverall' => $averageOverall,
    );

    return $averages;
}
function getOverallRating($instructor_id) {
    $averages = getAverageRatings($instructor_id);

    // Calculate a weighted average based on your preferences
    $overallRating = ($averages['averageKnowledge'] + $averages['averageCommunication'] + $averages['averageEngagement'] + $averages['averageOverall']) / 4;

    // Return the overall rating
    return round($overallRating, 2);
}

function getInstructorRatings($instructor_id) {
    $ratingsData = getInstructorRatingsFromDatabase($instructor_id);

    return $ratingsData;
}

function getAverageRatings($instructor_id) {
    $ratingsData = getInstructorRatingsFromDatabase($instructor_id);
    $averages = calculateAverageRatings($ratingsData);

    return $averages;
}
?>
