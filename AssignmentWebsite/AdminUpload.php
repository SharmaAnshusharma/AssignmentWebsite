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
				<a class="nav-link" href="AdminHome.php" style="color:white;font-weight: bold;">Home</a>
			</li>
            <li class="nav-item">
				<a class="nav-link" href="UploadAccess.php" style="color:white;font-weight: bold;">Contact</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="AssignmentAccess.php" style="color:white;font-weight: bold;">Assignments</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link " href="AdminUpload.php" style="color:white;font-weight: bold;">Upload</a>
			</li>
			
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp &nbsp  
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
      <li class="nav-item ">
        <a class="nav-link "  href="index.php" style="color:white;font-weight: bold;">Logout</a>
      </li>
			
		</ul>
	</div>
</nav>
<hr>
 <br/>
<div class="container col-sm-6 ">
	<center><h1 style="color:black;">Upload Assignment</h1>
	<hr>

	</center>
	<form method="post" enctype="multipart/form-data">
		<input type="text" name="name" class="form-control" placeholder="Full Name..."required><br/>
		<input type="email" name="email" class="form-control" placeholder="Email..."required><br/>
		<input type="tel" name="contact" class="form-control" placeholder="+91 **********..."required><br/>
		<input type="file" name="myfile">
		<br><br>
		<input type="submit" name="submit" class="btn btn-primary col-sm-12" value="Submit"><br/>
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
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$myfile = $_FILES['myfile']['name'];
	$myfile_tmp_name = $_FILES['myfile']['tmp_name'];
	$store = "Upload/".$myfile;
	if(move_Uploaded_file($myfile_tmp_name,$store))
	{
		echo "";
	}
	else
	{
		echo "<script>alert('Problem in Uploading File Please Try Again!')</script>";
	}

	$con = mysqli_connect("localhost","root","","assignment");
	$ins = mysqli_query($con,"INSERT INTO `adminupload`(`Name`, `Email`, `Mobile`, `File`) VALUES ('$name','$email','$contact','$store')");
	if($ins == true)
	{
		echo "<script>alert('Document Uploaded  Successfully!')</script>";
	}
	else
	{
		echo "<script>alert('Problem in Uploading Your Document')</script>";
	}
}
?>