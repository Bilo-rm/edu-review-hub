<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<body>

<nav>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-Dashboard" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Dashboard</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-users" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Users</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-Schools" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Schools</button>
  </li>
</ul>
</nav>




<!--contennt-->
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-Dashboard" role="tabpanel" aria-labelledby="pills-Dashboard-tab">Dashboard..</div>
  <div class="tab-pane fade" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">Users...</div>
  <div class="tab-pane fade" id="pills-Schools" role="tabpanel" aria-labelledby="pills-Schools-tab">Schools...</div>
</div>

</body>
</html>