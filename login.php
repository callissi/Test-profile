<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
</head>
<body>
    <form action="" method="POST">
        <div class="col-md-4 border rounded mx-auto mt-5 p-4 shadow">
            <div class="h2" >Login</div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                <input name="email" type="text" class="form-control p-3"  placeholder="Email">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
                <input name="password" type="password" class="form-control p-3" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary col-12" >Login</button>

            <div class="m-2">
                Dont have an account? <a href="signup.php">signup here</a>
            </div>
        </div>
    </form>
</body>
</html>