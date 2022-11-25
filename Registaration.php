<?php

include('config.php');
include('registration-login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport content=" width="device-width, initial-scale=1.0">
    <title>Blog registration</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
	integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="style.css">
   
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
				<a class="nav-link" href="get-involves.php">Get involved</a>
			</li>
			
			<li class="nav-item">
				<a href="ContactUs.php" class="nav-link">Contact Us</a>
			</li>
		</ul>	
    </div>
  </div>
</nav>

<section id="Registration"  class="my-5 py-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <img src="pic/tim-marshall-cAtzHUz7Z8g-unsplash.jpg" alt="" class="img-fluid h-100">
            </div>
            <div class="col-lg-7">
                <form action="Registaration.php" method="post">
                    <h2>Sign Up</h2>
                    <p>Please fill this form to create an account.</p>
                    <?php include('error.php') ?>
                    <div class="form-group">
                            <div class="col-lg-7">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" >
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-7">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email ?>">
                            
                            </div>
                        </div>    
                        <div class="form-group">
                            <div class="col-lg-7">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-7">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-7">
                            <input type="submit" class="btn btn-primary" value="Submit" name="reg_user">
                            
                            </div>
                        </div>
                    <p>Already have an account? <a href="blog.php">Login here</a>.</p>
                </form>
            </div>  
        </div>
    </div>
</section>   

<footer class="mt-5 py-5">
	<div class="row container mx-auto pt-5"> 
		
		<div class="footer-three col-lg-3 col-mg-6 col-12 mb-3">
			<h5  class="pb-2">Contact Us</h5>
			<div>
				<h6 class="text-uppercase">Address</h6>
				<p>LAB LANE,ATBEDEEN, FREETOWM, SIERRA LEON</p>
			</div>
			
			<div>
				<h6 class="text-uppercase">Phone</h6>
				<p>
					Angie ||+232 79 22 1010 <br>
					Alusine||+232 79 14 5995
				</p>
			</div>
			
			<div>
				<h6 class="text-uppercase">Email</h6>
				<p>ang.ubuntu@gmail.com</p>
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
					<img class="img-fluid w-25 h-100 m-2" src="pic/amir-hanna-sweUF7FcyP4-unsplash.jpg" alt="">
				</div>
		</div>
		<div>
			<h6>Business hours</h6>
			<p>
			Open from Monday to Friday

			</p>
		</div>
	
		<div class="copyright mt-5">
			<div class="row container mx-auto">
				<div class="col-lg-4 col-md-6 col-12 text-nowrap mb-4" >
					<p> Ubun2 Abfrica Development © 2022. All Rights Reserved</p>
				</div>
				
		</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 

integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
