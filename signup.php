<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
</head>
<body>
    <form method="POST" onsubmit="myaction.collect_data(event, 'signup')">
        <div class="col-md-8 col-lg-4 border rounded mx-auto mt-5 p-4 shadow">
            <div class="h2" >Signup</div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                <input name="firstname" type="text" class="form-control p-3"  placeholder="First Name">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-square"></i></span>
                <input name="lastname" type="text" class="form-control p-3"  placeholder="Last Name">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-gender-ambiguous"></i></span>
                <select class="form-select" name="gender">
                    <option selected>--Select Gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                <input name="email" type="email" class="form-control p-3"  placeholder="Email">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
                <input name="password" type="password" class="form-control p-3" placeholder="Password">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                <input name="retype_password" type="password" class="form-control p-3" placeholder="Retype Password">
            </div>
            <div class="progress mb-3 d-none">
                <div class="progress-bar" role="progressbar"  style="width: 25%;">25%</div>
            </div>
            <button type="submit" class="btn btn-primary col-12" >Signup</button>

            <div class="m-2">
                Already have an account? <a href="login.php">login here</a>
            </div>
        </div>
    </form>
</body>
</html>

<script>

    const myaction = 
    {
        collect_data: function(e, data_type){

            e.preventDefault();
            e.stopPropagation();
             
            var inputs = document.querySelectorAll("form input, form select");
            

            let myform = new FormData();
            myform.append('data_type', data_type);
            for (var i = 0; i < inputs.length; i++) {
                myform.append(inputs[i].name, inputs[i].value);
                
            }
            myaction.send_data(myform);
        },

        send_data: function(form){
            var ajax = new XMLHttpRequest();

            document.querySelector('.progress').classList.remove("d-none");

            ajax.addEventListener('readystatechange', function(){
                if(ajax.readystate == 4){
                    if(ajax.status == 200){
                        //all good
                        alert(ajax.responseText);
                    }else{
                        alert("An error occured");
                    }
                }
            });

            ajax.upload.addEventListener('progress', function(e){
                let percent = Math.round((e.loaded / e.total) * 100);
                document.querySelector('.progress-bar').style.width = percent + "%";
                document.querySelector('.progress-bar').innerHTML ="Working..." + percent + "%";
            });

            ajax.open('post', 'ajax.php', true);
            ajax.send(form);
        },
    };
    
    
</script>