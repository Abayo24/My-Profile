<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="signup-form">
        <form action="register.php" method = "post" enctype="multipart/form-data">
            <h2>Register</h2>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
            </div>

            <div class="form-group">
                <input type="file" class="form-control" name="file"  required="required">
            </div>

            <div class="form-group">
                <label class="form-check-label">
                    <input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a>
                </label>
            </div>

            <div class="form-group">
                <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
            </div>

            <div class="text-center">Already have an account? <a href="log_in.php">Sign in</a></div>
       </form>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>