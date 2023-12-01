<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="card" style="margin-left: 4rem; margin-top:4rem; width:30rem; height:17rem;">
        <div class="container">
            <h1 class="text-center"></h1>
            <form class="form-signin" action="loginprocessor.php"  method="post">
                <div class="form-group" style="width:17rem;">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group" style="width:17rem;>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" style="margin-top: 3px;">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
