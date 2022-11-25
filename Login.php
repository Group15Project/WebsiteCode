<?php  
include('config.php'); 
include('registration-login.php');
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport content=" width="device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
	integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
  <div class="container">
    <span>UBUN2 AFRICA DEVELOPMENT</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i  id="bar" class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
		
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
		
		
			<li class="nav-item">
				<a class="nav-link" href="blog.php">Blog</a>
			</li>
		
			<li class="nav-item">
				<a class="nav-link" href="About-us.php">About Us</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="About-us.php">Donate</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="About-us.php">Subscribe</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="Registaration.php">Register</a>
			</li>
			
			<li class="nav-item">
				<a href="ContactUs.php" class="nav-link">Contact Us</a>
			</li>
		</ul>	
    </div>
  </div>
</nav>
    <div class="container pt-5 mt-2">
     <form action="Login.php" method="post">

        <h2>LOGIN</h2>
        <?php include('error.php') ?>
        <label>User Name</label>

        <input type="text" name="username" placeholder="User Name" value="<?php echo $username; ?>"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit" name="login_btn">Login</button>
   
     </form>
    </div>

 <footer class="mt-5 py-5">
	<div class="row container mx-auto pt-5"> 
		
		<div class="footer-three col-lg-3 col-mg-6 col-12 mb-3">
			<h5  class="pb-2">Contact Us</h5>
			<div>
				<h6 class="text-uppercase">Address</h6>
				<p>12 SMART FARM, OFF WILKINSON ROAD, FREETOWM, SIERRA LEON</p>
			</div>
			
			<div>
				<h6 class="text-uppercase">Phone</h6>
				<p>
					Angie||+232 79 22 1010 <br>
					Arthur||+232 75 70 9609
				</p>
			</div>
			
			<div>
				<h6 class="text-uppercase">Email</h6>
				<p>123@Kweshi@gmail.com</p>
			</div>
		</div>
		
		<div class="footer-four col-lg-3 col-md-6 col-12">
			<h5  class="pb-2">pics</h5>
				<div class="row">
					<img class="img-fluid w-25 h-100 m-2" src="pic/1.jpg" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="pic/background.png" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="pic/claudio-schwarz-L8iPDE99z9c-unsplash.jpg" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="pic/hanna-morris-3EkT6xb4K9w-unsplash.jpg" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="pic/hanna-morris-6BhCI5uWiFQ-unsplash.jpg" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="pic/markus-winkler-wLBVAF-kMR0-unsplash.jpg" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="img/(4).JPG" alt="">
				</div>
		</div>
	
		<div>
			<h6>Business hours</h6>
			<p>
				Monday: 08:00 AM - 05:00PM<br>
				Tuesday: 08:00 AM - 05:00PM<br>
				Wednesday: 08:00 AM - 05:00PM<br>
				Thursday: 08:00 AM - 05:00PM<br>
				Friday: 08:00 AM - 05:00PM<br>
				Saterday: Closed<br>
				Sunday: CLosed

			</p>
		</div>

		<div class="copyright mt-5">
			<div class="row container mx-auto">
				<div class="col-lg-4 col-md-6 col-12 text-nowrap mb-4" >
					<p> Lihle eCommerce © 2022. All Rights Reserved</p>
				</div>
				
		</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 

integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
