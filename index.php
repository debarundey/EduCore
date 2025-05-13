<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="\EduCore\images\icon\logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>EduCore</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="..\EduCore\style.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
</head>
<body>
<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="images\icon\brand.png" alt="logo"></div>
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="resources.php" target="_blank">Resource and Materials</a></li> 
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
			<a class="get-started" href="chatbot/index.html" target="_blank">Chat</a>
		</nav>
		<div class="head-container">
			<div class="quote">
				<h3><p align="justify">Education is the passport to the future, for tomorrow belongs to those who prepare for it today.</p></h3>
				<h5 align="justify">Education is the process of acquiring knowledge, skills, values, and competencies through formal instruction, 
					learning experiences, or self-discovery. It equips individuals with the tools to understand the world, make informed decisions, 
					and contribute meaningfully to society. Education encompasses academic learning, personal development, and the cultivation of 
					critical thinking, creativity, and social awareness. It plays a pivotal role in shaping individuals, fostering lifelong learning, 
					and promoting societal progress and cohesion. Ultimately, education is a dynamic and transformative journey that empowers individuals to adapt, 
					innovate, and thrive in an ever-changing world.</h5>
			</div>
			<div class="svg-image">
				<img src="images/extra/svg2.jpg" alt="svg">
			</div>
		</div>
	</header>


<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="images/extra/e3.jpg">
				</div>
				<div class="side-text">
					<h2>What you think about us ?</h2>
					<p><b> Welcome to BeWise</b><br> <br>Your trusted destination for educational excellence. Our mission is to empower learners of all ages with the knowledge and tools they need to succeed in their educational endeavors.<br><br> At BeWise, we curate and create high-quality, accessible content, including articles, videos, tutorials, and resources, covering a wide range of subjects and topics. Whether you're a student seeking study strategies, a teacher looking for innovative teaching methods, or a parent wanting to support your child's education, we're here to assist you every step of the way.<br><br>Our dedicated team of educators and experts is passionate about fostering a love for learning. Join us on your educational journey, and let's explore the world of knowledge together. Thank you for choosing BeWise as your educational partner.</p>
				</div>
		</div>
	</div>


<!-- SERVICES -->
<div class="service-swipe">
	<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Services</p></center>
	</div>
	<a href="onlinecourses.php" target="_blank"><div class="s-card"><img src="images/icon/computer-courses.png"><p>Online Courses</p></div></a>
	<a href="subjects/jee.php" target="_blank"><div class="s-card"><img src="images/icon/papers.jpg"><p>Sample Question Papers</p></div></a>
	<a href="#contactus_section"><div class="s-card"><img src="images/icon/brainbooster.png"><p>Career Services</p></div></a>
	<a href="#contactus_section"><div class="s-card"><img src="images/icon/help.png"><p>24x7 Online Support</p></div></a>
</div>



<!-- Reviews by Students -->
<div id="makeitfull">
	<a href="#review_section"><img src="images/icon/makeitfull.jfif"></a>
</div>
<div class="review">
	<div class="diffSection" id="review_section">
		<center><p style="font-size: 40px; padding: 100px; padding-bottom: 40px; color: #2E3D49;">What the Students Say About Us?</p></center>
	</div>
	<div class="rev-container">
		<div class="rev-card">
			<div class="identity">
				<img src="images\creator\human 1.jfif"><p>Rajesh Mehta</p>
				<h6>Java</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					I did Java Fundamenetal course with Rishab Sir. It was a great experience. The brain teasers and assignments, actually the whole lot of content was really good. Some problems were challenging yet interesting. Was explained very well where ever I stuck...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/human 2.jfif"><p>Priya Kapoor</p>
				<h6>C/C++</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					When I was watching "Dear Zindagi", I could relate Sharukh Khan to Arnav Bhaiya. The way Sharukh Khan was giving life lessons to Alia Bhatt, in the same way Arnav Bhaiya will give coding life lessons which will guide you throughout your code life...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/human 3.jfif"><p>Arjun Sharma</p>
				<h6>JEE</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					BeWise was an amazing experience for me. I belong to electronics department and had a little experience in coding but I think it has helped me think things through in a much more analytical manner. Coding is important no matter which branch you are in. It gives you a better understanding about how to approach a problem...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="images/creator/human 4.jfif"><p>Neha Patel</p>
				<h6>Python</h6>
				<div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					This was my first complete course at coding blocks. I attended the Python course in Winter 2020 and loved it which made me join the full course. Shubham bhaiya and Ayush Bhaiya(TA) have good knowledge about the field and were very helpful in making us understand the concepts. I would certainly recommend this to anyone...
				</p>
			</div>
		</div>
	</div>
</div>


<!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center><p style="font-size: 50px; padding: 100px">Contact Us</p></center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
			<form action="mailto:bewise2024@gmail.com" method="post" enctype="text/plain">
				<label>First Name <span class="imp">*</span></label><label style="margin-left: 185px">Last Name <span class="imp">*</span></label><br>
				<center>
				<input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input type="text" name="lname" style="width: 175px" required="required"><br>
				</center>
				<label>Email <span class="imp">*</span></label><br>
				<input type="email" name="mail" style="width: 100%" required="required"><br>
				<label>Message <span class="imp">*</span></label><br>
				<input type="text" name="message" style="width: 100%" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
			</div>
		</div>
	</div>


<!-- FEEDBACK -->
	<div class="title2" id="feedBACK">
		<span>Give Feedback</span>
		<div class="shortdesc2">
			<p>Please share your valuable feedback to us</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:bewise2024@gmail.com" method="post" enctype="text/plain">
				<label>Your Name</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>



			<div id="confirmationMessage"></div>

			<script src="feedback.js"></script>
		</div>
	</div>

<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right, #37fac3, #dfdf27); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">“"Education is the key to a better future, and your attitude defines your success."”</div></marquee>

<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<div class="logo">
				<img src="images/icon/brand.png" style="width: 120px;">
				</div><br>

				<div class="social-media">
					<a href="#" target="_blank"><img src="images/icon/facebook (1).png"></a>
					<a href="#" target="_blank"><img src="images/icon/instagram (2).png"></a>
					<a href="#" target="_blank"><img src="images/icon/youtube.png"></a>
					<a href="#" target="_blank"><img src="images/icon/twitter.png"></a>		
                </div>

				<br><br>
				<p class="rights-text">Copyright ©2024 Created By Swarnali Saha, Debarun Dey, Shreyasree Bhattacharya.<br>All Rights Reserved.</p>
				<br><p><img src="images/icon/google-maps.png"><span>EduCore Learning Campus<br>Kolkata, West Bengal-700054</span></p><br>
				<p><img src="images/icon/telephone.png"><span> +91-33-4602XXXX</span><br><br><img src="images/icon/email.png"><span>&nbsp;
					educore2024@gmail.com</span></p>
            </div>


			<div class="right-col">
				<h1 style="color: black">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>

</body>
</html>
