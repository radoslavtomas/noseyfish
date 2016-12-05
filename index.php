<?php include 'assets/emailhandler.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nosey Fish</title>
	<meta name="description" content="Nosey Fish - Creative CV by Radoslav Tomas">
	<meta name="keywords" content="CV, nosey fish, radoslav tomas">
	<meta name="author" content="Radoslav Tomas">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/font-awesome.min.css" >
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Julius+Sans+One|Ubuntu:300,300i,400,400i,700,700i" rel="stylesheet"> 
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/general-settings.css">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" >

	<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
	<![endif]-->

</head>

<body>
	<header>
		<!-- MAIN NAV START -->
		<nav class="main-nav clearfix">
			<div class="wrap">
				<a class="logo float-left" href="index.php"><img src="img/nosey-fish-logo-60_50.png" alt="Nosey Fish Logo"></a>
				<span class="btn-menu float-right"><i class="fa fa-bars"></i></span>
				<ul class="nav-links float-right text-center">
					<li><a href="#about">about me</a></li>
					<li><a href="#skills">skills</a></li>
					<li><a href="#experience">experience</a></li>
					<li><a href="#education">education</a></li>
					<li><a href="#portfolio">portfolio</a></li>	
					<li><a href="#contact">contact</a></li>
				</ul>
			</div>
		</nav>
		<!-- MAIN NAV END -->
		
		<!-- FRONT SCREEN WITH COVER IMAGES START-->
		<div class="covers">
			<div class="cover cover1"></div>
			<div class="cover cover2"></div>
			<div class="cover cover3"></div>
			<div class="cover cover4"></div>
		</div>

		<section class="intro">
				<h1>Nosey Fish</h1>
				<h4>creative cv by radoslav tomas</h4>
		</section>
		<!-- FRONT SCREEN WITH IMAGES END -->
	</header>

	<main>
		<!-- ABOUT ME SECTION -->
		<section id="about">
			<div class="wrap text-center">
				<h1>About me</h1>
				<div class="profilePic">
					<img src="img/profile-pic.png" alt="Profile picture of Radoslav Tomas">
				</div>
				<p class="text-left">
					My name is <strong>Radoslav Tomas</strong> and I’m a web developer and data analyst. Originally from Slovakia, I currently live in Liverpool, UK. For almost eight years, I have been working with as an analyst for a company that monitors and analyses data from different media resources. In 2011 my colleagues and I started <a href="http://www.medan.sk" target="_blank">medan.sk</a> where we promote our work and write short analyses about the latest topics. This WordPress project kindled my passion to become a web developer and I have since learned and used HTML5, CSS, jQuery and Angular JS to build my first <a href="http://www.radoslavtomas.com" target="_blank">web applications</a>. Recently I’ve started with PHP and Python where I see a great opportunity for me to build applications that connect my two main interests – data and web developing. This creative on-line CV serves as my portfolio, it’s fully <a href="https://github.com/radoslavtomas/noseyfish">open source</a>, so feel free to use it. If you have any questions or would like to contact me, please do it <a href="#contact">here</a>.
				</p>
				<a class="cv" href="assets/Radoslav_Tomas_CV.pdf"><h5>Download printable resume</h5></a>
			</div>
		</section>

		<!-- SKILLS SECTION -->
		<section id="skills">
			<div class="wrap">
				<h1 class="text-center">My skills</h1>
				<div class="skills">
					<div class="skill">
						<h4>html</h4>
						<p>HTML is a core of every web site. It’s a skeleton that holds everything together. A good understanding of DOM is the first step to a great web application that serves the user. As an analyst and journalist I see the importance of DOM really from inside and can understand it from a user’s point of view.</p>
					</div>
					<div class="skill">
						<h4>css</h4>
						<p>CSS is not just playing with colours and paddings. Cascades are about focusing on details and building bridges between elements, rather than just creating borders that divide them. I dare to say this is one of my strengths.</p>
					</div>
					<div class="skill">
						<h4>jquery</h4>
						<p>jQuery is an amazing tool that has enabled me to extend CSS to interactive level. I like its simplicity and the fact, it works across all browsers. I can really appreciate the power of jQuery now as I’m discovering its potential with AJAX…</p>
					</div>
					<div class="skill">
						<h4>php</h4>
						<p>I have started with PHP only recently and now I am discovering this powerful tool for making dynamic and interactive web applications.</p>
					</div>
					<div class="skill">
						<h4>Angular</h4>
						<p>Angular JS is a relatively recent addition to my skills. I really enjoy how this framework lets me use HTML as my template language and extend HTML's syntax to express my application's components much more clearly.</p>
					</div>
					<div class="skill">
						<h4>python</h4>
						<p>My experience with Python primarily revolves around data analysis. I have recently written a program which my current employer uses on daily basis. My aim for the future is to learn Python for web applications and server side programing.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- EXPERIENCE SECTION -->
		<section id="experience">
			<div class="wrap">
				<h1 class="text-center">Experience</h1>
				<div class="jobs">
					<article class="job">
						<header class="clearfix">
							<h5 class="position float-left">Data Analyst<small>Newton Media</small></h5>
							<div class="timeline float-right">
								<div class="from">February 2009</div>
								<div class="to">Now</div>
							</div>
						</header>
						<div class="jobDescription">
							<p>
								I <i>analyse data</i> from different media sources (including social media) for a range of companies (banks, car makers, pharmaceutical companies, council departments etc.). My work is to search for the data, collect, clean and filter it out. I produce analyses in a forom of <i>media coverage reports</i> (positive or negative articles, main topics, top media etc.) and inputs for marketers (advertising value equivalent, most influential authors etc.). 
							</p>
							<p>
								In 2011 my colleagues and I started <a href="http://www.medan.sk" target="_blank">medan.sk</a> site where we promote our work and write short analyses about the latest topics.
							</p>
						</div>
					</article>
					<article class="job">
						<header class="clearfix">
							<h5 class="position float-left">Carer<small>L'Arche Liverpool</small></h5>
							<div class="timeline float-right">
								<div class="from">March 2013</div>
								<div class="to">Now</div>
							</div>
						</header>
						<div class="jobDescription">
							<p>
								I support people with learning disabilities in order to assist them in the development of their independent living skills.
							</p>
						</div>
					</article>
					<article class="job">
						<header class="clearfix">
							<h5 class="position float-left">Editor<small>Jaga Group Publishing House</small></h5>
							<div class="timeline float-right">
								<div class="from">April 2008</div>
								<div class="to">February 2009</div>
							</div>
						</header>
						<div class="jobDescription">
							<p>
								Writing and editing on-line contents for company's site.
							</p>
						</div>
					</article>
				</div>
			</div>
		</section>

		<!-- EDUCATION SECTION -->
		<section id="education">
			<div class="wrap">
				<h1 class="text-center">Education</h1>
				<div class="schools text-center clearfix">

					<div class="school">
						<div class="schoolName">
							<h2>web</h2>
							<h6>design</h6>
							<h5>professional</h5>
							<h5>development</h5>					
						</div>
						<div class="courses text-center">
							<h5>WebRebel - HTML, CSS and JavaScript</h5>
							<a href="https://www.learn2code.sk/kurzy"><h6>learn2code</h6></a>
							<p>Certified by the Ministry of Education of Slovak Republic</p>

							<h5>Further courses</h5>
							<h6>Coursera</h6>
							<ul>
								<li>Webdesign For Everybody (5-part)</li>
								<li>Programming For Everybody (Starting With Python)</li>
								<li>Python Data Structures</li>
								<li>Using Databases With Python</li>
								<li>Using Python To Access Web Data</li>
							</ul>

							<h6>Udemy</h6>
							<ul>
								<li>The Complete Webdeveloper Course</li>
								<li>SQL For Newbs Mastercalss</li>
								<li>Python Programming</li>
							</ul>
						</div>
					</div>

					<div class="school">
						<div class="schoolName">
							<h2>MA</h2>
							<h6>Journalism</h6>
							<h5>Commenius</h5>
							<h5>University</h5>								
						</div>
						<div class="courses text-center">
							<h5>2006 - 2008</h5>
							<h6>Modules included:</h6>
							<ul>
								<li>Digital skills for journalists</li>
								<li>Web design in on-line journalism</li>
								<li>Data processing</li>
							</ul>
						</div>
					</div>

					<div class="school">
						<div class="schoolName">
							<h2>B<small>c.</small></h2>
							<h6>Marketing/PR</h6>
							<h5>Commenius</h5>
							<h5>University</h5>							
						</div>
						<div class="courses text-center">
							<h5>2003 - 2006</h5>
							<h6>Modules included:</h6>
							<ul>
								<li>Digital marketing strategies</li>
								<li>Marketing and PR in the creative industries</li>
								<li>Research methods</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- PORTFOLIO SECTION -->
		<section id="portfolio">
			<div class="wrap">
				<h1 class="text-center">Portfolio</h1>
				<!-- SUB MENU START-->
				<div class="sub-menu text-center">
					<ul>
						<li class="selected"><a href="assets/portfolios/portfolio1.htm">#</a></li>
						<li><a href="assets/portfolios/portfolio2.htm">#</a></li>
						<li><a href="assets/portfolios/portfolio3.htm">#</a></li>
						<li><a href="assets/portfolios/portfolio4.htm">#</a></li>
						<li><a href="assets/portfolios/portfolio5.htm">#</a></li>
					</ul>
				</div>
				<!-- SUB MENU END -->

				<div class="slideHolder"> <!-- div for palcing the sliding content from other site -->
					<div class="toSlide text-center"> <!-- div that slides from other site -->
						<div class="portfolioName">
							<h3>Portfolio 1</h3>
							<a href="#" class="angle-left"><i class="fa fa-angle-left"></i></a>
							<a href="#" class="angle-right"><i class="fa fa-angle-right"></i></a>
						</div>
						<div class="portfolioImages">
							<div class="portfolioImage">
								<img src="img/tiles/1a_thumb.jpg" alt="portfolio 1a">
								<div class="overlay">
									<a href="#portfolio" title="More Information"><i class="fa fa-info faSide"></i></a>
									<a class="spock" href="img/tiles/1a.jpg" title="Spock says Hi!"><i class="fa fa-hand-spock-o faMiddle"></i></a>
									<a href="#portfolio" title="Share project"><i class="fa fa-link faSide"></i></a>
								</div>
							</div>
							<div class="portfolioImage">
								<img src="img/tiles/1b_thumb.jpg" alt="portfolio 1b">
								<div class="overlay">
									<a href="#portfolio" title="More Information"><i class="fa fa-info faSide"></i></a>
									<a class="spock" href="img/tiles/1b.jpg" title="Spock says Hi!"><i class="fa fa-hand-spock-o faMiddle"></i></a>
									<a href="#portfolio" title="Share project"><i class="fa fa-link faSide"></i></a>
								</div>
							</div>
							<div class="portfolioImage">
								<img src="img/tiles/1c_thumb.jpg" alt="portfolio 1c">
								<div class="overlay">
									<a href="#portfolio" title="More Information"><i class="fa fa-info faSide"></i></a>
									<a class="spock" href="img/tiles/1c.jpg" title="Spock says Hi!"><i class="fa fa-hand-spock-o faMiddle"></i></a>
									<a href="#portfolio" title="Share project"><i class="fa fa-link faSide"></i></a>
								</div>
							</div>
						</div>
						<p>
							This portfolio section serves primarily as a demonstration of technical skills. 
						</p>
					</div>
				</div>
				<!-- BOX GRID START-->
				<div class="box-grid">
					<div class="box box1">
						<h3>Focus on details</h3>
						<p>
							I am highly motivated and have developed a mature and responsible approach to address tasks. I enjoy working in an organized, methodical way and follow complicated instructions to achieve objectives.
						</p>
						<a href="#contact">Try me!</a>
					</div>

					<div class="box box2">
						<h3>Responsive design</h3>
						<p>
							These days, responsiveness is a must. Good quality web sites can be easily displayed on PCs and laptops, as well as on mobiles and tablets. According to statistics more than half of the people on the internet visit sites from their phones. Moreover, Google in its algorithm prefers web applications that are optimized for mobile devices. 
						</p>
						<a href="#contact">Try me!</a>
					</div>

					<div class="box box3">
						<h3>Inetractivity</h3>
						<p>
							It’s hard to imagine modern web sites without dynamic animations. JavaScript and jQuery are great tools to broaden user’s experience and extend usability.
						</p>
						<a href="#contact">Try me!</a>
					</div>
				</div>
				<!-- BOX GRID END -->
			</div>
		</section>
		
		<!-- CONTACT SECTION -->
		<section id="contact">
			<div class="wrap">
				<h1 class="text-center">Contact me</h1>
				<h5 class="text-center">Feel free to send me a message <span>or contact me on social media.</span></h5> 
				<h5 class="text-center">I will get back to you <span>as fast as I can.</span></h5>

				<span class="response"><?php echo $result; ?></span>
				
				<div class="contactMe clearfix">
					<form class="contactForm float-left" action="index.php#contact" method="POST">
						<div class="conName">
							<input type="text" name="name" id="name" value="<?php echo $_POST['name']; ?>" />
							<label for="name">Your Name</label>
						</div>
						<div class="conEmail">
							<input type="text" name="email" id="email" value="<?php echo $_POST['email']; ?>" />
							<label for="email">Email</label>
						</div>
						<div class="conMessage">
							<textarea id="comment" name="comment"><?php echo $_POST['comment']; ?></textarea>
							<label for="comment">Write me a message</label>

							<input id="submit" class="conSubmit" type="submit" name="submit" value="Submit" />
						</div>
					</form>

					<div class="contactIcons float-right">
						<ul>
							<li class="email">
								<a href="mailto:radoslav.tomas@noseyfish.co.uk"><span class="contactSpan">radoslav.tomas@noseyfish.co.uk</span><i class="fa fa-at"></i></a>
							</li>
							<li class="skype">
								<a href="skype:radoslav.tomas?userinfo"><span class="contactSpan">radoslav.tomas</span><i class="fa fa-skype"></i></a>
							</li>
							<li class="twitter">
								<a href="https://twitter.com/radoslavtomas"><span class="contactSpan">@RadoslavTomas</span><i class="fa fa-twitter"></i></a>
							</li>
							<li class="linkedin">
								<a href="https://uk.linkedin.com/in/radoslavtomas"><span class="contactSpan">Radoslav Tomas</span><i class="fa fa-linkedin"></i></a>
							</li>
							<li class="github">
								<a href="https://github.com/radoslavtomas"><span class="contactSpan">radoslavtomas</span><i class="fa fa-github"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main>
	
	<!-- FOOTER -->
	<footer>
		<div class="details text-center">
			<h3>Contact details</h3>
			<div class="finLogo">
				<img src="img/nosey-fish-logo-150_126.png" alt="">
			</div>
			<h2>Nosey fish</h2>
			<p>Creative CV by Radoslav Tomas</p>
			<div class="footerInfo">
				<ul class="text-left">
					<li><i class="fa fa-map-marker"></i>Liverpool</li>
					<li><i class="fa fa-mobile"></i><a href="tel:+447514443025">+44 751 444 3025</a></li>
					<li><i class="fa fa-envelope-o"></i><a href="mailto:radoslav.tomas@noseyfish.co.uk">radoslav.tomas@noesyfish.co.uk</a></li>
					<li><i class="fa fa-link"></i><a href="http://www.noseyfish.co.uk">www.noseyfish.co.uk</a></li>
				</ul>
			</div>
			<div class="footerBtn">
				<a href="assets/Radoslav_Tomas_CV.pdf">Download printable resume</a>
			</div>
			<h5>&copy; 2016 Radoslav Tomas</h5>
			<h6>This site is <a href="https://github.com/radoslavtomas/noseyfish">open source</a></h6>
		</div>

		<aside class="mapArea">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d38048.73355534868!2d-2.9650587831053286!3d53.41400620584168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1474484961771" allowfullscreen></iframe>
		</aside>
	</footer>
	
	<!-- SCIPTS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
</body>
</html>