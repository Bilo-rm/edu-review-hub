

<?php


function getRatingsFromDatabase($school_id) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM school_ratings WHERE school_id = $school_id"; // Use university ID from session

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


function calculateAverageRating($school_id) {
    $ratingsData = getRatingsFromDatabase($school_id);

    $totalRecords = count($ratingsData);

    // Initialize variables to store total ratings for each category
    $totalReputation = 0;
    $totalLocation = 0;
    $totalOpportunities = 0;
    $totalFacilities = 0;
    $totalInternet = 0;
    $totalSafety = 0;
    $totalClubs = 0;
    $totalInstructors = 0;

    // ... Add variables for other categories similarly

    foreach ($ratingsData as $row) {
        // Sum up ratings for each category
        $totalReputation += $row['reputation'];
        $totalLocation += $row['location'];
        $totalOpportunities += $row['opportunities'];
        $totalFacilities += $row['facilities'];
        $totalInternet += $row['internet'];
        $totalSafety += $row['safety'];
        $totalClubs += $row['clubs'];
        $totalInstructors += $row['instructors'];
        // ... Add summation for other categories similarly
    }

    // Calculate average ratings for each category
    $averageReputation = intval(($totalRecords > 0) ? $totalReputation / $totalRecords : 0);
    $averageLocation = intval(($totalRecords > 0) ? $totalLocation / $totalRecords : 0);
    $averageOpportunities =intval (($totalRecords > 0) ? $totalOpportunities / $totalRecords : 0);
    $averageFacilities = intval(($totalRecords > 0) ? $totalFacilities / $totalRecords : 0);
    $averageInternet =intval(($totalRecords > 0) ? $totalInternet / $totalRecords : 0);
    $averageSafety =intval(($totalRecords > 0) ? $totalSafety / $totalRecords : 0);
    $averageClubs =intval(($totalRecords > 0) ? $totalClubs / $totalRecords : 0);
    $averageInstructors =intval(($totalRecords > 0) ? $totalInstructors / $totalRecords : 0);
    // ... Calculate averages for other categories similarly

    $averages = array(
        'reputation' => $averageReputation,
        'location' => $averageLocation,
        'opportunities' => $averageOpportunities,
        'facilities' => $averageFacilities,
        'internet' => $averageInternet,
        'safety' => $averageSafety,
        'clubs' => $averageClubs,
        'instructors' => $averageInstructors,
        // ... Add other category averages to the array
    );

    return $averages;
}

// Sample function to retrieve ratings grouped by school ID (Mock Implementation)
function getRatingsFromDatabaseGrouped($school_id) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Assuming 'school_ratings' is your ratings table with a 'school_id' column
    $sql = "SELECT * FROM school_ratings WHERE school_id = $school_id ORDER BY id DESC"; // Modify the query based on your schema

    $result = $conn->query($sql);

    $ratingsData = array();

    if ($result->num_rows > 0) {
        $currentReviewId = null;
        $currentGroup = array();

        while ($row = $result->fetch_assoc()) {
            if ($currentReviewId !== $row['id']) {
                if ($currentReviewId !== null) {
                    $ratingsData[] = $currentGroup;
                }
                $currentReviewId = $row['id'];
                $currentGroup = array();
            }
            $currentGroup[] = $row;
        }
        if (!empty($currentGroup)) {
            $ratingsData[] = $currentGroup;
        }
    }

    $conn->close();

    return $ratingsData;
}


?>

