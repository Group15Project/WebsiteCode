<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport content=" width="device-width, initial-scale=1.0">
	<title> Contact Us </title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
	integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="style.css">
	
	
</head>
<body>
 <!--navigation-->
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
				<a href="ContactUs.php" class="nav-link active">Contact Us</a>
			</li>
		</ul>	
    </div>
  </div>
</nav>
 
<section id="contact-Us" class="pt-5 mt-5">
    <div class="contactUs">
        <div class="title">
            <h1 class="text-center font-weight-normal">Get in Touch</h1>
        </div>
        <div class=" box mt-2 px-2">
            <div class="contact form">
                <h3>Send a Message</h3>
                <form action="post">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input  id="fName" type="text" placeholder="Lihle">
                            </div>

                            <div class="inputBox">
                                <span>Last Name</span>
                                <input id="lName" type="text" placeholder="Ngcwembe">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input  id="EName" type="text" placeholder="ngcwembelihle@gmail.com">
                            </div>

                            <div class="inputBox">
                                <span>Mobile Number</span>
                                <input id="mNumber" type="text" placeholder="+279 656 2253">
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea id="message" placeholder="write your message...."></textarea>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <?php
            if(isset($_POST['submit'])){
                $url = "https://script.google.com/macros/s/AKfycbz-ctWXWPjdv5zqlP5y9ZD11KCOElCeGbk406HsVU0VA_JiZKllEnHjCX_I8Ndj4YuIWg/exec";
                $ch = curl_init($url);
                curl_setopt_array($ch, [
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POSTFIELDS => http_build_query([
                        "First Name" => $_POST['fName'],
                        "Last Name" => $_POST['lName'],
                        "email" => $_POST['EName'],
                        "number" => $_POST['mNumber'],
                        "message" => $_POST['message'],
                    ])
                ]);
                $result = curl_exec($ch);
                echo $result;
            }
            ?>
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <p>LAB LANE,ATBEDEEN, FREETOWM, SIERRA LEON</p>
                    </div>  
                    <div>
                        <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <a href="mailto:ang.ubuntu@gmail.com">ang.ubuntu@gmail.com</a>
                    </div>
                    <div>
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        Angie: <a href="tel:+23279221010"> +232 79 22 1010</a>
                        <p><br></p>
                        Alusine: <a href="tel:+23275709609"> +232 79 14 5995</a>
                    </div>
                </div>
            </div>
            <div class="contact map pb-0 pt-0 pl-0 pr-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4692.
                868414595421!2d-13.270326091701032!3d8.
                478344212047045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                1!3m3!1m2!1s0xf04c47eee7dc9ed%3A0xdff66571eea8b51c!2s12%20Smart
                %20Farm%20Rd%2C%20Freetown%2C%20Sierra%20Leone!5e0!3m2!1sen!2sza!
                4v1667340165518!5m2!1sen!2sza" width="100%" height="100%" style="border:0;"
                 allowfullscreen="" loading="lazy" 
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
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
