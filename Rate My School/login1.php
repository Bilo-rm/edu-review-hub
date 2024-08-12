
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="login.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <img src="./svg/logo.png" alt="Your Logo" class="logo img-fluid">
            <h4 class="text-center">Login</h4>
          </div> 
          <div class="card-body">
            <form action="login.php" method="post">
              <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter your email" required name="username">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required name="password">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              <button type="button" onclick="location.href='signup.php'" class="btn btn-secondary btn-block mt-2">Register</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
