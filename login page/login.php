<html>
<head>
<title>User login and registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="login-box"> 
    <div class="row">
    <div class="col-md-6 login-left">
        <h1> Login here <h1>
        <form action="validation.php" method="post">
        <div class="form-group">
            <label>Username</label>  
            <input type="text" name="user" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Password</label>  
            <input type="password" name="password" class="form-control" required>
        </div>    
        <button type="submit" class="btn btn-primary">login</button>
        </form>
    </div>
    <div class="col-md-6 login-right">
        <h1> Register here <h1>
        <form action="registration.php" method="post">
        <div class="form-group">
            <label>Username</label>  
            <input type="text" name="user" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Password</label>  
            <input type="password" name="password" class="form-control" required>
        </div>    
        <button type="submit" class="btn btn-primary">register</button>
        </form>
    </div>

    </div> 
    

    
</div>


</body>






</html>