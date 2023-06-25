<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
</head>
<body>
    <div class="row col-lg-8 border rounded mx-auto mt-5 p-2 ">
        <div class="col-md-4 text-center">
            <img src="./images/istockphoto-1300972574-170667a.jpg" class="js-image img-fluid rounded" style="width: 180px; height: 180px; object-fit: cover;">
            <div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Change profile image</label>
                    <input onchange="display_image(this.files[0])" class="form-control" type="file" id="formFile">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="h2">Edit Profile</div>
            <form action="" method="POST">
                <table class="table table-striped">
                    <tr><th colspan="2" >User Details:</th></tr>
                    <tr><th><i class="bi bi-envelope"></i>  Email</th>
                        <td>
                            <input type="email" class="form-control" name="email" placeholder="email@gmail.com">
                        </td>
                        
                    </tr>
                    <tr><th><i class="bi bi-person-circle"></i> First Name</th>
                        <td>
                            <input type="text" class="form-control" name="firstname" placeholder="John">
                        </td>
                    </tr>
                    <tr><th><i class="bi bi-person-square"></i> Last Name</th>
                        <td>
                            <input type="text" class="form-control" name="lastname" placeholder="Doe">
                        </td>
                    </tr>
                    <tr><th><i class="bi bi-gender-ambiguous"></i> Gender</th>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>--Select Gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div class="p-2">
                    <button class="btn btn-primary float-end">Save</button>
                    <a href="index.php">
                        <label  class="btn btn-secondary">Back</label>
                    </a>
                </div>
            </form>
            
        </div>
    </div>
</body>
</html>

<script>
    function display_image(file)
    {
        var img = document.querySelector(".js-image");
        img.src = URL.createObjectURL(file);
    }

</script>