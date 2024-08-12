<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Users List</h2>
        <a class="btn btn-primary" href="add.php" role="button" >Add</a>
        <br>
        <table class="table" >
            <thead>
               <tr>
                <th>ID</th>
                <th>username</th>
                <th>email</th>
                <th>Action</th>
               </tr> 
            </thead>
            <tbody>
                <!--start db and its conection-->
                <?php
                // Establish database connection
                $servername = "localhost";
                $username = "root"; // Your MySQL username
                $password = ""; // Your MySQL password
                $dbname = "users"; // Your database name

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //read all rows from db table
                $sql = "SELECT * FROM login";
                $result = $conn->query($sql);

                // Check connection
                if (!$result) {
                    die("Invalid Query: " . $conn->connect_error);
                }

                //read data of each row
                ////id=$row[id] allows specify which user to edit
                while($row = $result->fetch_assoc() )
                {
                    echo "
                        <tr>
                        <td>$row[id]</td>
                        <td>$row[username]</td>
                        <td>$row[email]</td>
                        <td>
                        <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]' role='button' >Delete</a>
        
                        </td>
                        </tr>
                        ";

                }
            

                ?>

            </tbody>
        </table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>