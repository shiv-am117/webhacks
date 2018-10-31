
<html>
<head>
	<title>Add Event</title>
	
		
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
<body><div class="top-bar py-2 bg-light">
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
		<h1 id="title">Add Event </h1>
	<?php 
	require "core.php";
	require "connect.php";
	require "connectsoc.php";
	$id=$_SESSION['id'];
	$sid=$_SESSION['sid'];

	 if($id==0)
	 	header("Location:userlogin.php");
	 if($sid==0)
	 	header("Location:societylogin.php");
	 function finduser($data){
	 	global $id;
	 global $link;
	$query="SELECT `$data` FROM `userregister` WHERE `id`='$id'";
	$result=mysqli_query($link,$query);
	$output=mysqli_fetch_assoc($result);
	return $output["$data"];
}
	 function findsoc($data){
	 	global $sid;
	 global $link;
	$query="SELECT `$data` FROM `society info` WHERE `id`='$sid'";
	$result=mysqli_query($link,$query);
	$output=mysqli_fetch_assoc($result);
	return $output["$data"];
}
	$link=@mysqli_connect('localhost','root','','');

	if(!$link||!@mysqli_select_db($link,'webhack_login'))
		die("Connection Error");

		if( isset($_POST['e']) && isset($_POST['d'])&& isset($_POST['dat']) ){
			if(!empty($_POST['e']) && !empty($_POST['d']) &&!empty($_POST['dat']) ){
				$event=htmlentities($_POST['e']);
				$description=htmlentities($_POST['d']);
				$dat=(htmlentities($_POST['dat']));
				$soc=findsoc("society_name");
				$ins=findsoc("institute_name");

				
					$query="INSERT INTO `event`(event,description,date,society_name,institute_name) VALUES ( '$event','$description','$dat','$soc','$ins')";
					echo 'event added';
					mysqli_query($link,$query);
					
				
			}
			}

	 ?>
		
		<form id="form" method="POST" action="event.php">

			<input required="required" class="form-control" type="text" name="e" placeholder="event name"><br>
			<textarea required="required" class="form-control" cols="50" rows="8" name="d" placeholder="description"></textarea><br>
			<input required="required" class="form-control" type="date" name="dat" ><br>
			
			
			
			
			<button id="submit" class="btn btn-default">Add Event</button>
		</form>
		
	</div>
</body>
</html>