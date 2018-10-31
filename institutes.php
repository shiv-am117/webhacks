<!--
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Evento</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Party Planners Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<!-- testimonials (owl-carousel) -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->
</head>
<?php 

	require "core.php";
	require "connect.php";
	require "connectsoc.php";
	$id=$_SESSION['id'];
	 if($id==0)
	 	header("Location:userlogin.php");
	 function finduser($data){
	 	global $id;
	 global $link;
	$query="SELECT `$data` FROM `userregister` WHERE `id`='$id'";
	$result=mysqli_query($link,$query);
	$output=mysqli_fetch_assoc($result);
	return $output["$data"];
}
	



 ?>
<body>
	<!-- header -->
	<header>
		<!-- top-bar -->
		<div class="top-bar py-2 bg-light">
			<div class="wrap">
				<div class="row">
					<div class="col-xl-6 col-md-3 top-left-locate">
						<div class="select-city text-md-left text-center">
							
									
								
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-xl-6 col-md-9 top-right-nav-w3ls mt-2 text-md-right text-center">
						<ul>
							
							<li >
								<a href="societyregister.php" class="text-dark ">Society Signup</a>
							</li>
							<li></li>
							<li>
								<a href="societylogin.php" class="text-dark ">Society Login</a>
							</li>
							<li></li>
							<li >
								<a href="userregister.php" class="text-dark ">User Signup</a>
							</li>
							<li></li>
							<li>
								<a href="userlogin.php" class="text-dark ">User Login</a>
							</li>
							
							<li>
								<a href="logout.php" class="text-dark ">Logout</a>
							</li>
							<li>
								<a href="event.php" class="text-dark ">Add Event</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- //top-bar -->
		<div class="header-middle-agile">
			<div class="row wrap">
				<div class="col-xl-8 col-md-6 col-sm-5 p-0 text-sm-left text-center">
					<!-- logo -->
					<!-- logo -->
					<!-- logo -->
					<h1>
						<a class="navbar-brand font-weight-bold" href="index.php">
							Event
							<span class="font-weight-light mr-1">Planners</span>
							<img src="images/logo2.png" class="img-fluid logo-img pt-1" alt="">
							<span class="text-dark logo-style-w3l">Fun For You</span>
							<h6>Welcome <?php echo finduser("name");?></h6>
						</a>
					</h1>
					<!-- //logo -->
				</div>
				<div class="col-xl-4 col-md-6 col-sm-7 right-w3ls p-0">
					<div class="row">
						<div class="col-sm-7 col-5 img-left-w3ls pt-3 text-right">
							
						</div>
						<div class="col-sm-5 col-7 info-w3ls mt-3">
						
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
	<div id="home">
		<!-- navigation -->
		<div class="main-top">
			<nav class="navbar navbar-expand-lg navbar-light fixed-navi p-lg-0 py-lg-0 py-2">
				<div class="wrap navi-agiles">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-lg-auto text-center">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item mx-xl-4 mx-lg-2">
								<a class="nav-link " href="latestevents.php">Latest events</a>
							</li>
							
							<li class="nav-item  mx-xl-4 mx-lg-2">
								<a class="nav-link" href="institutes.php">Institutes</a>
							</li>
						
							<li class="nav-item ml-xl-4 ml-lg-2">
								<a class="nav-link " href="institutesnext.php">Your Institute</a>
							</li>
						</ul>
						<!-- login --
						<a href="#" class="reqe-button ml-lg-5">Request a Call Back</a>
						<!-- //login -->
					</div>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
	</div>
	<!-- //header 2 -->

	<!-- banner -->
	<table name='mytable' id='mytable' class='table table-hover'>
 <thead><th>Institute Name</th><th>  Events</th><th>  View</th>

 </thead>
 <tbody>
 	<?php
 		$sql = "SELECT  id,institute_name, event FROM event";
$result=mysqli_query($link,$sql);
		
			

if(mysqli_affected_rows($link)>0) {
   
    while($row = mysqli_fetch_assoc($result)) {

        echo "<tr>" ."<td>". $row["institute_name"] ."</td>"."<td>". $row["event"]."</td><td>";
        echo '<form method="POST" action="single.php"><input type="hidden" name="id" value="'.$row["id"].'"><button type="submit">View</button></form></td></tr>';
    }}
 	?>
 </tbody></table>
	<!-- //banner -->

	

	




	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- dropdown smooth -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown smooth -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- text typing animation -->
	<script src="js/text-typing.js"></script>
	<!-- //text typing animation -->

	<!-- testimonials -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 1,
						nav: false
					},
					1000: {
						items: 1,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //testimonials -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/party.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

	<!-- //Js files -->


</body>

</html>