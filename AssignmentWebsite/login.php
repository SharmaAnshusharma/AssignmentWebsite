<?php
session_start();
?>
<html>
<head>
	<title>Assignment Website</title>
	<?php
		include("BootstrapFile.php");
	?>
</head>
<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Details</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#My">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="My">
	    <ul class="navbar-nav">
	    	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	    	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	    	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	      <li class="nav-item" style="color:white;font-weight: bold;">7007976332</li>&nbsp &nbsp &nbsp
	      <li class="nav-item" style="color:white;font-weight: bold;">8604939407</li>&nbsp &nbsp &nbsp
	      <li class="nav-item" style="color:white;font-weight: bold;">anshusharma1298@gmail.com</li>&nbsp &nbsp &nbsp
    	</ul>
	</div>
</nav>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<a class="navbar-brand"  href="index.php"><img src="Images\Logo.png" width="50px" height="30px"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MyNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="MyNavbar">
		<ul class="navbar-nav">
			<li class="nav-item ">
				<a class="nav-link" href="index.php" style="color:white;font-weight: bold;">Home</a>
			</li>
	  
            <li class="nav-item">
				<a class="nav-link" href="Services.php" style="color:white;font-weight: bold;">Services</a>
			</li>
	        <li class="nav-item">
				<a class="nav-link" href="Upload.php" style="color:white;font-weight: bold;">Upload</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link " href="contactus.php" style="color:white;font-weight: bold;">Contact US</a>
			</li>
			
		</ul>
		
	</div>
</nav>
<hr>
 <br/>
<div class="container col-sm-6">
	<form method="post">
		<h1>Login Form<img src="Images\admin.png" width="50px" height="50px"></h1>
		<hr>
		<div class="input-group mb-3">
    		<div class="input-group-prepend">
      			<span class="input-group-text">Email</span>
    		</div>
    		<input type="email" name="email" class="form-control" placeholder="Email..."required>
  		</div>
		<div class="input-group mb-3">
    		<div class="input-group-prepend">
      			<span class="input-group-text">Password</span>
    		</div>
    		<input type="password" name="pass" class="form-control" placeholder="Password..."required>
  		</div>
		<input type="submit" name="login" value="Login" class="btn btn-outline-primary col-sm-12">
		<br><br>
		<input type="submit" name="Reset" value="Reset" class="btn btn-outline-danger col-sm-12">
	</form>
</div>
<div class="content">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 myCols">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="Upload.php">Upload</a></li>
						<li><a href="Services.php">Services</a></li>
                        <li ><a href="login.php">Login</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>We Work for You</h5>
                    <ul>
                        <li><img src="Images\img21.jpg" height="150px" width="100%" class="rounded" class="responsive"></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Always ready to do Your work</h5>
                    <ul>
                        <li><img src="Images\img19.png" height="170px" width="100%" class="rounded" class="responsive"></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Give Our Best to make you feel proud</h5>
                    <ul>
                        <li><img src="Images\img20.jpg" height="200px" width="300px" class="rounded" class="responsive"></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="social-networks">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook-official"></i></a>
            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
        </div>
        <div class="footer-copyright">
            <p>© 2019 assignment4you@gmail.com </p>
        </div>
    </footer>
 
</body>

</body>
</html>

<?php
if(isset($_POST['login']))
{
  extract($_POST);
  $_SESSION['email'] = $email;
  $con = mysqli_connect("localhost","root","","assignment");
  $result = mysqli_query($con,"SELECT * FROM `signup` WHERE `Email` = '$email' AND `Password` = '$pass'");
  $row = mysqli_fetch_array($result);
  if($result == true)
  {
    if($row['User_role'] == 'Admin')
    {
      echo "<script>alert('Login Successfully!!!');window.location='AdminHome.php'</script>";
    }
    else
    {
    echo "<script>alert('Login Successfully!!!');window.location='UserAccessAssignment.php'</script>";
    }
  }
  else
  {
    echo "<script>alert('Your email or password is incorrect!!!');window.location='Login.php'</script>";
    echo "<script>alert('Login Successfully!!!');window.location='login.php'</script>";
  }
}

?>
