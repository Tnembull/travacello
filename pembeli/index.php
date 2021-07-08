<?php
session_start();

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}

$level=$_SESSION["level"];

if ($level!=1) {
    echo "Anda tidak punya akses pada halaman admin";
    exit;
}

$id_user=$_SESSION["id_user"];
$username=$_SESSION["username"];
$gambar=$_SESSION["picture"];
$nama=$_SESSION["nama"];
$email=$_SESSION["email"];

?>
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travacello</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,900italic,900,700italic,700,600italic,600,400italic,300italic,300,200italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="../assets/css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="../assets/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="../assets/css/cs-select.css">
	<link rel="stylesheet" href="../assets/css/cs-skin-border.css">
	
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<!-- Modernizr JS -->
	<script src="../assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../assets/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
  <a href="https://api.whatsapp.com/send?phone=6287793419149">
  <img src="../assets/images/wa.png" class="wabutton" alt="Whatsapp-Button" />
  </a>
  <style>
  .wabutton{
    width:50px;
    height:50px;
    position:fixed;
    bottom:20px;
    left:20px;
    z-index:100;
  }

  .star-rating {
  border:solid 1px #ccc;
  display:flex;
  flex-direction: row-reverse;
  font-size:1.5em;
  justify-content:space-around;
  padding:0 .2em;
  text-align:center;
  width:5em;
}

.star-rating input {
  display:none;
}

.star-rating label {
  color:#ccc;
  cursor:pointer;
}

.star-rating :checked ~ label {
  color:#f90;
}

.star-rating label:hover,
.star-rating label:hover ~ label {
  color:#fc0;
}
  </style>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="index.php" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<a href="index.php"><img src="../assets/images/logo.png" sytle="width:100%" alt="Logo Tavacello" /></a>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="../logout.php"><i class="fas fa-user"><?php echo $nama; ?></i></a></li>
                            <li><a href="../logout.php"><i class="fas fa-sign-out-alt">logout</a></i></li>
						</ul>
					</nav>
				</div>
			</div>
			<marquee direction="left" scrollamount="3" align="center" bgcolor="#e5594f"style='color:white; font-weight:bold;'>WELCOME TO TRAVACELLO ♡ </marquee>
		</header>

		<!-- end:header-top -->
	<div id="head">
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(../assets/images/home.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
								<div class="col-sm-12 text-center">
									<h2>TRAVACELLO</h2>
									<h3>making travel easy</h3>
								</div>
							</div>
						<!-- <div class="row">
                <div class="col-sm-2"></div>
                <form class="example" action="action_page.php">
								<div class="col-sm-3">
                <input type="text" placeholder="Search.." name="search">
								</div>
								<div class="col-sm-3">
                <input data-provide="datepicker">
								</div>
								<div class="col-sm-2">
                <button type="submit"><i class="fa fa-search"></i></button>
								</div>
                </form>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="fh5co-tours" class="fh5co-section-gray">
		<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<a href="index.php"><img src="../assets/images/logo.png" sytle="width:100%" alt="Logo Tavacello" /></a>
						<video loop autoplay muted width="100%" height="100%" >
							<source src="../travacello.mp4" type="video/mp4">
							<source src="../travacello.ogg" type="video/ogg">
						</video>
						<p>TRAVACELLO is an online based DMC (Destination Management Company) that strives for clients satisfaction, with extensive knowledge of indonesia archipelago. 
							TRAVACELLO offers memorable journeys that combine that combine the most enchanting landscape, fascinating cultural experiences, and sense of adventure, with a team of dedicated experts and a nationwide network. 
							TRAVACELLO is well equipped to answer all possible travel needs of travellers, TRAVACELLO proudly empowering local people to take part on every journey we offer. We believe, from any types of travellers you are, travelling should be beneficial for the locals.</p>
					</div>
				</div>
			</div>
		</div>

    <div id="tour">
    <div id="fh5co-destination">
    <div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3></h3>
						<p></p>
					</div>
				</div>
			</div>
			<div class="tour-fluid">
				<div class="row">
						<ul id="fh5co-destination-list" class="animate-box">
						<?php
                            include "../config/koneksi.php";
                            $data = mysqli_query($kon,"select * from gambar order by diupload desc");
                            if(mysqli_num_rows($data) > 0){
                                while($d = mysqli_fetch_array($data))
                                    {?>
                                <a href="../assets/img/gallery/<?php echo $d["nama_file"]; ?>" data-fancybox="group" data-caption="<?php echo $d["judul"]; ?>" >
                                    <li class="one-forth text-center" style="background-image: url(../assets/img/gallery/<?php echo $d["nama_file"]; ?>); " alt="<?php echo $d['judul']; ?>" />
									<div class="case-studies-summary">
                    				<h2><?php echo $d['judul']; ?></h2>
									</div>
								</a>
								</li>
                            <?php }} ?>
						</ul>		
          		</div>
			</div>
		</div>
		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<p><b>“All journeys have secret destinations of which the traveler is unaware.”</b></p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
        <?php 
          include "../config/koneksi.php";
          $data = mysqli_query($kon,"select * from tour");
          if(mysqli_num_rows($data) > 0){
          while($d = mysqli_fetch_array($data)){?>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="detail.php?id=<?php echo $d['id_tour']; ?>"><img class="img-responsive" src="../assets/img/<?php echo $d['gambar']; ?>" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="detail.php?id=<?php echo $d['id_tour']; ?>"><?php echo $d['nama_tour']; ?></a></h3>
									<!-- <span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span> -->
									<p>Rp. <?php echo $d['pricing']; ?></p>
									<p><a href="detail.php?id=<?php echo $d['id_tour']; ?>">Learn More...</a></p>
								</div>
							</div> 
						</div>
					</div>
          <?php }} ?>
					<div class="clearfix visible-md-block"></div>
				</div>

				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Post <i class="icon-arrow-right22"></i></a></p>
				</div>

			</div>
		</div>
		<!-- fh5co-blog-section -->
		<div id="fh5co-testimonial" style="background-image:url(../assets/images/img_bg_1.jpg);">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				</div>
			</div>
			<div class="row">
      <?php 
          include "../config/koneksi.php";
          $data = mysqli_query($kon,"select * from review");
          if(mysqli_num_rows($data) > 0){
          while($d = mysqli_fetch_array($data)){?>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;<?php echo $d['pesan_review']; ?>.&rdquo;</p>
						</blockquote>
						<p class="author"><?php echo $d['nama_review']; ?> 
						<span class="subtext"></span>
						</p>
					</div>
				</div>
					<?php }} ?>
			</div>
		</div>
	</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							
						</div>
						<div class="col-md-8 col-sm-6 col-xs-12 fh5co-footer-link">
						<h3>About Travel</h3>
							<p>TRAVACELLO is an online based DMC (Destination Management Company) that strives for clients satisfaction, with extensive knowledge of indonesia archipelago. 
							TRAVACELLO offers memorable journeys that combine that combine the most enchanting landscape, fascinating cultural experiences, and sense of adventure, with a team of dedicated experts and a nationwide network. 
							TRAVACELLO is well equipped to answer all possible travel needs of travellers, TRAVACELLO proudly empowering local people to take part on every journey we offer. We believe, from any types of travellers you are, travelling should be beneficial for the locals.</p>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">

						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="../assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../assets/js/jquery.waypoints.min.js"></script>
	<script src="../assets/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="../assets/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="../assets/js/hoverIntent.js"></script>
	<script src="../assets/js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<script src="../assets/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="../assets/js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="../assets/js/classie.js"></script>
	<script src="../assets/js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="../assets/js/main.js"></script>

	</body>
</html>

