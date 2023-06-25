<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
</head>
<body>
    <div class="row col-lg-8 border rounded mx-auto mt-5 p-2 ">
        <div class="col-md-4 text-center">
            <img src="images/istockphoto-1300972574-170667a.jpg" class="img-fluid rounded" style="width: 180px; height: 180px; object-fit: cover;">
            <div>
                <a href="profile-edit.php">
                    <button class="mx-auto m-1 btn-sm btn btn-primary">Edit</button>
                </a>
                <a href="profile-delete.php">
                    <button class="mx-auto m-1 btn-sm btn btn-danger">Delete</button>
                </a>
                <a href="logout.php">
                    <button class="mx-auto m-1 btn-sm btn btn-info text-white">Logout</button>
                </a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="h2">User Profile</div>
            <table class="table table-striped">
                <tr><th colspan="2" >User Details:</th></tr>
                <tr><th><i class="bi bi-envelope"></i>  Email</th><td>email@gmail.com</td></tr>
                <tr><th><i class="bi bi-person-circle"></i> First Name</th><td>John</td></tr>
                <tr><th><i class="bi bi-person-square"></i> Last Name</th><td>Doe</td></tr>
                <tr><th><i class="bi bi-gender-ambiguous"></i> Gender</th><td>Male</td></tr>
                
            </table>
        </div>
    </div>
</body>
</html>