<?php

// Establish database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "users"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$username="";
$email="";
$password="";
$errorMessage="";
$successsMesage="";

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    do
    {
      if(empty($username) ||empty($email) ||empty($password))  {
        $errorMessage = "All the fields are required";
        break;
      }

      //Add New user to db

      $sql= "INSERT INTO login (username, email, password)".
        "VALUES('$username','$email','$password')";
      $result= $conn->query($sql);

      if(!$result){
        $errorMessage= "Invalid Query: ". $conn->error;
        break;
      }

      $username="";
      $email="";
      $password="";


    $successsMesage = "user added sucssesfuly";
    header("location: /Rate%20My%20School/user/users.php");
    exit;




    }
    while(false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container my-5">  
        <h2>Add User</h2>

        <!-- Display error message -->
        <?php if (!empty($errorMessage)) : ?>
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong><?php echo $errorMessage; ?></strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
        <?php endif; ?>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">User Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="passowrd" class="form-control" name="password" value="<?php echo $password; ?>">
                </div>
            </div>

            <!-- Display success message -->
            <?php if (!empty($successsMesage)) : ?>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong><?php echo $successsMesage; ?></strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            <?php endif; ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a type="submit" class="btn btn-outline-primary" href="users.php" role="button">Cancel</a>
                </div>
            </div> 
            
        </form>

    </div>

</body>
</html>