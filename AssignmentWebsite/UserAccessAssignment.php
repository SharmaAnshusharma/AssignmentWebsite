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
			<li class="nav-item active">
				<a class="nav-link" href="AdminHome.php" style="color:white;font-weight: bold;">Home</a>
			</li>
	   <li class="nav-item  ">
				<a class="nav-link" href="UploadAccess.php" style="color:white;font-weight: bold;">Contact</a>
			</li>
		<li class="nav-item">
        <a class="nav-link" href="AssignmentAccess.php" style="color:white;font-weight: bold;">Assignment</a>
      </li>
      <li class="nav-item">
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
<div class="container">
  <h1>Your Assignment</h1>
<?php
$email = $_SESSION['email'];
$con=mysqli_connect("localhost","root","","assignment");
$res=mysqli_query($con,"SELECT * FROM `adminupload` WHERE `Email` = '$email'");
echo "<div class='table-responsive'>";
echo "<table class='table table-striped'>";
echo "<tr>";
echo "<th>"; echo "Name"; echo "</th>";
echo "<th>"; echo "Email"; echo "</th>";
echo "<th>"; echo "Contact"; echo "</th>";
echo "<th>"; echo "file"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["Name"]; echo "</td>";
echo "<td>"; echo $row["Email"]; echo "</td>";
echo "<td>"; echo $row["Mobile"]; echo "</td>";
echo "<td><a href='".$row["File"]." '>";echo "Download</a></td>";

echo "</tr>";
}
echo "</table>";
echo "</div>";
?>
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



