<?php
include("connect.php");
$sql = "SELECT `categoryname` FROM `category`";
$result = mysqli_query($link,$sql);
$num = mysqli_num_rows($result);
$sql2 = "SELECT `categoryname` FROM `category`";
$result2 = mysqli_query($link,$sql2);
$num2 = mysqli_num_rows($result2);

?>
<!doctype html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">
	

	    <title>Bookalicious</title>
	

	    <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.css" rel="stylesheet">
	

	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	

	    <!-- Custom styles for this template -->
	    <link href="css/style.css" rel="stylesheet">
	

	    
	  </head>
	

	  <body>
	<!--/.navigation bar  -->
	    <nav class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand  em-text" href="#">Bookalicious</a>
	        </div>
	        <div id="navbar" class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="index.php">Home</a></li>
	            <li><a href="about.php">About</a></li>
	<!--/.drop down  -->
	<li>
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
	            <ul class="dropdown-menu">
	            <?php
	          if($num>0){
	            while($category= mysqli_fetch_array($result))
	            {
	            ?> 
	            <li class="list-group-item"><a href="#">
	              <?php echo $category['categoryname']; ?>
	            </a> 
	            </li>
	            <?php
	            }
	          }
	          ?>
	            </ul>
	          </li>
	

	            <li><a href="contact.php">Contact</a></li>
	            </ul>
	          <!--/.search  -->
	            <form class="navbar-form navbar-left" role="search">
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Search">
	              </div>
	              <button type="submit" class="btn btn-default">
	                <span class="glyphicon glyphicon-search"></span>
	              </button>
	            </form>
	            <!--/.nav to right  -->
	            <ul class="nav navbar-nav navbar-right">
	               <!--/. drop down with icon  -->
	         
	

	              <!--/. drop down with icon  -->
	

	              <?php
	          
	                if(isset($_SESSION["loggedin"]))
	                {
	                  $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
	                  ?>
	                       <li><a class="glyphicon glyphicon-shopping-cart" title="cart" href="cart.php">
	              <span class="badge abc"><?php echo"$num_items_in_cart"?></span></a></li><!--/.badge   -->
	                  <!-- Dropdown after logging in-->
	              <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	                  <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
	                    <ul class="dropdown-menu">
	                      <li><a href="upload_book.php">Sell a book</a></li>
	                      <li><a href="feedback.php">Feedback</a></li>
	                      <li role="separator" class="divider"></li>
	                      <li><a href="contact.php">Help</a></li>
	                      <li><a href="user_logout.php">Logout</a></li>
	                    </ul>
	              </li>
	

	                <?php }
	                 else { ?> 
	                 <li><a class="glyphicon glyphicon-shopping-cart" title="cart" href="">
	              <span class="badge abc"></span></a></li><!--/.badge   -->
	                 <!-- Dropdown before logging in-->
	                  <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	                  <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
	                    <ul class="dropdown-menu">
	                      <li><a href="signup.php">Signup</a></li>
						  <li><a href="user_login.php">Login</a></li>
						  <li><a href="admin_login.php">Admin</a></li>
	                    </ul>
	              </li>
	                <?php } ?>
	

	            </ul>
	        
	        </div><!--/.nav-collapse -->
	      </div>
        </nav>

        <div class="jumbotron">
      <div class="container">
        
      
        <h1 style="color:#582273;">Welcome to the world of books!</h1><br>
        <p >For any clarifications and queries, you can contact us at:</p><br>
        <p class="contact">Mobile number: 9911677</p><br>
        <p class="contact">Email id: bookalious@dontmail.com</p><br>
       

    </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
       
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>