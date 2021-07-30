<?php
    //get data from form  
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $to = "texasdeepnet@gmail.com";
    $subject = "Message from TDN website";
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: noreply@texasdeepnet.com" . "\r\n" .
        "CC: somebodyelse@example.com";

    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    header("Location:thankyou.html");
?>

<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<br>
	<a href="index.html">Home</a> 
	<a href="membership.html">Membership</a> 
			<a href="blockchain.html">Blockchain</a>
			<a href="events.html">Events</a>

<head>
	<title>Texas Deep Net</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">
	<section class="wrapper style1 align-center">
		<div class="inner">
			<div class="image">
				<img src="images/TDNLogo.png" alt="" style="width: 400px;;" />
			</div>
			<br><br><br>
			<a href="membership.html">Membership</a> 
			<a href="blockchain.html">Blockchain</a>
			<a href="events.html">Events</a>

			<p class="major">TDN strives to educate students about artificial intelligence through a hands-on approach,
				allowing members to apply their knowledge towards research and entrepreneurial opportunities to solve
				real-world problems</p>
		</div>
	</section>

	<!-- One -->
	<!-- <section class="banner style1 orient-right content-align-left image-position-center fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							
							<p class="major">TDN strives to educate students about artificial intelligence through a hands-on approach, allowing members to apply their knowledge towards research and entrepreneurial opportunities to solve real-world problems</p>
							<ul class="actions stacked">
								<li><a href="#first" class="button big wide smooth-scroll-middle">Learn More</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/TDNLogo.png" alt="" />
						</div>
					</section> -->

	<!-- Two
					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
						<div class="content">
							<h2>Magna etiam feugiat</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id ante sed ex pharetra lacinia sit amet vel massa. Donec facilisis laoreet nulla eu bibendum. Donec ut ex risus. Fusce lorem lectus, pharetra pretium massa et, hendrerit vestibulum odio lorem ipsum dolor sit amet.</p>
							<ul class="actions stacked">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/spotlight01.jpg" alt="" />
						</div>
					</section>


				 Five
					<section class="wrapper style1 align-center">
						<div class="inner">
							<h2>Blockchain</h2>
							<p>  Morbi id ante sed ex pharetra lacinia sit amet vel massa. Donec facilisis laoreet nulla eu bibendum. Donec ut ex risus. Fusce lorem lectus, pharetra pretium massa et, hendrerit vestibulum odio lorem ipsum.</p>
						</div> -->

	<!-- Six -->
	<section class="wrapper style1 align-center">
		<div class="inner">
			<h2> Pillars </h2>
			<div class="items style1 medium onscroll-fade-in">
				<section>
					<span class="icon style2 major fa-gem"></span>
					<h3>Machine Learning</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet
						aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
				</section>
				<section>
					<span class="icon solid style2 major fa-save"></span>
					<h3>Blockchain</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet
						aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
				</section>
				<section>
					<span class="icon solid style2 major fa-chart-bar"></span>
					<h3>Self Development</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet
						aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
				</section>
			</div>
		</div>
	</section>

	<section class="wrapper style1 align-center">
		<div class="inner">

			<br><br><br>
			<p class="major">Mission statement</p>
		</div>
	</section>


	<!-- Gallery -->
	<div class="gallery style2 medium lightbox onscroll-fade-in">

		<article>
			<a href="images/gallery/fulls/08.jpg" class="image">
				<img src="images/gallery/thumbs/08.jpg" alt="" />
			</a>
			<div class="caption">
				<h3>Magna Risus</h3>
				<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
				<ul class="actions fixed">
					<li><span class="button small">Details</span></li>
				</ul>
			</div>
		</article>
		<article>
			<a href="images/gallery/fulls/09.jpg" class="image">
				<img src="images/gallery/thumbs/09.jpg" alt="" />
			</a>
			<div class="caption">
				<h3>Tempus Dolor</h3>
				<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
				<ul class="actions fixed">
					<li><span class="button small">Details</span></li>
				</ul>
			</div>
		</article>
		<article>
			<a href="images/gallery/fulls/10.jpg" class="image">
				<img src="images/gallery/thumbs/10.jpg" alt="" />
			</a>
			<div class="caption">
				<h3>Sed Etiam</h3>
				<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
				<ul class="actions fixed">
					<li><span class="button small">Details</span></li>
				</ul>
			</div>
		</article>
		<article>
			<a href="images/gallery/fulls/11.jpg" class="image">
				<img src="images/gallery/thumbs/11.jpg" alt="" />
			</a>
			<div class="caption">
				<h3>Magna Lorem</h3>
				<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
				<ul class="actions fixed">
					<li><span class="button small">Details</span></li>
				</ul>
			</div>
		</article>
		<article>
			<a href="images/gallery/fulls/12.jpg" class="image">
				<img src="images/gallery/thumbs/12.jpg" alt="" />
			</a>
			<div class="caption">
				<h3>Ipsum Dolor</h3>
				<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
				<ul class="actions fixed">
					<li><span class="button small">Details</span></li>
				</ul>
			</div>
		</article>
	</div>

	</section>



	<!-- Seven -->
	<section class="wrapper style1 align-center">
		<div class="inner medium">
			<h2>Get in touch</h2>
			<form method="post" action="contact.php">
				<div class="fields">
					<div class="field half">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" value="" />
					</div>
					<div class="field half">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" value="" />
					</div>
					<div class="field">
						<label for="message">Message</label>
						<textarea name="message" id="message" rows="6"></textarea>
					</div>
				</div>
				<ul class="actions special">
					<li><input type="submit" name="submit" id="submit" value="submit" /></li>
				</ul>
			</form>

		</div>
	</section>

	<!-- Footer -->
	<footer class="wrapper style1 align-center">
		<div class="inner">
			<ul class="icons">
				<li><a href="https://twitter.com/texasdeepnet" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
				<!-- <li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li> -->
				<li><a href="https://www.instagram.com/texasdeepnet/" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="https://www.linkedin.com/in/texasdeepnet/" class="icon brands style2 fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
				<li><a href="texasdeepnet@gmail.com" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
			</ul>
			<p>&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
		</div>
	</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>