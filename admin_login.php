
<?php
	include ("connect.php");
	session_start();
	if(isset($_SESSION['loggedin'])&&  $_SESSION['loggedin']==true){
	header('location:admin_main.php');
	exit;
	
	}
	$error="";
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$email = $_POST["email"];
	$password = $_POST["password"];
	// if(isset($_POST["username"] && isset($_POST["password"]))){
	$sql = "select email,password from admin where email='$email' and password='$password' ";
	$result = mysqli_query($link,$sql);
	
	if(mysqli_num_rows($result)>0){
	session_start();
	$_SESSION['loggedin']=true;
	header("location:admin_main.php");
	}
	else
	{
	echo '<script type="text/javascript"> alert("Invalid credentials")</script>';
	}
	
	}
	
	
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link href="css/style.css" rel="stylesheet">
	
	

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin !</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#CCCCCC">

    <div class="container" >
        <div class="row" style="margin-top:20px">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" autofocus required placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                
                                
								<div class="form-group">
                                    <input name="login" type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                                </div>
								
								<div class="form-group">
                                    <label>
                                                                            </label>
                                </div>
								
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="css/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="css/sb-admin-2.js"></script>

</body>

</html>
