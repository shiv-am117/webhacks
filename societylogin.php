
<!DOCTYPE HTML>

<html>
<head>
	<title>Society page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<script type="text/javascript">
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

</head>
<?php 

	require "core.php";
	require "connect.php";
	require "connectsoc.php";
	$id=$_SESSION['id'];
	$_SESSION['sid']=0;
	 if($id==0)
	 	header("Location:userlogin.php");
	 function finduser($data){
	 	global $id;
	 global $link;
	$query="SELECT `$data` FROM `userregister` WHERE `id`='$id'";
	$result=mysqli_query($link,$query);
	$output=mysqli_fetch_assoc($result);
	return $output["$data"];

			$_SESSION['id']=$output["id"];
			header("Location:index.php");
}
	



 ?>
<body >
	
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
					<h1>
						<a class="navbar-brand font-weight-bold" href="index.php">
							Event
							<span class="font-weight-light mr-1">Planners</span>
							<img src="images/logo2.png" class="img-fluid logo-img pt-1" alt="">
							<span class="text-dark logo-style-w3l">Fun For You</span>
							
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
	<div id="main">
		<h1 id="title">Society Login</h1>
		<?php
			
			$_SESSION['sid']=0;
		if(isset($_POST['s']) && isset($_POST['p'])){
			if(!empty($_POST['s']) && !empty($_POST['p'])){
				$society=htmlentities($_POST['s']);
				$password=md5(htmlentities($_POST['p']));
				if(society_exists($society)&&socpass_match($society,$password)){
		$query="SELECT `id` from `society info` WHERE `society_name`='$society' ";
		$result=mysqli_query($link,$query);
		
			$output=mysqli_fetch_assoc($result);
			

			$_SESSION['sid']=$output["id"];
			header("Location:index.php");
			
		
		}
		else{
			echo '
			<div id="wrong">
			<h1>Wrong societyname or password</h1>

			</div>
			';
		

	}
}
}
		?>
		<form id="form" method="POST" action="societylogin.php">
			<input required="required" class="form-control" type="text" name="s" placeholder="society name"><br>
			<input required="required" class="form-control" type="password" name="p" placeholder="password"><br>
			
			<button id="submit" class="btn btn-default">Log in</button>
		</form>
		
	</div>
</body>
</html>




