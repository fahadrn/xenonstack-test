<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>


<html>

<head>
	<title></title>

	<style>
		* {
			margin: 0;
			padding: 0;
		}

		.navbar {
			display: flex;
			align-items: center;
			justify-content: center;
			position: sticky;
			top: 0;
			cursor: pointer;
		}

		.background {
			background: black;
			background-blend-mode: darken;
			background-size: cover;
		}

		.nav-list {
			width: 70%;
			display: flex;
			align-items: center;
		}

		.logo {
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.logo img {
			width: 180px;
			border-radius: 50px;
		}

		.nav-list li {
			list-style: none;
			padding: 26px 30px;
		}

		.nav-list li a {
			text-decoration: none;
			color: white;
		}

		.nav-list li a:hover {
			color: grey;
		}

		.rightnav {
			width: 30%;
			text-align: right;
		}

		#search {
			padding: 5px;
			font-size: 17px;
			border: 2px solid grey;
			border-radius: 9px;
		}

		.firstsection {
			background-color: aqua;
			height: 400px;
		}

		.secondsection {
			background-color: burlywood;
			height: 400px;
		}

		.box-main {
			display: flex;
			justify-content: center;
			align-items: center;
			color: black;
			max-width: 80%;
			margin: auto;
			height: 80%;
		}

		.firsthalf {
			width: 100%;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		.secondhalf {
			width: 30%;
		}

		.secondhalf img {
			width: 70%;
			border: 4px solid white;
			border-radius: 150px;
			display: block;
			margin: auto;
		}

		.text-big {
			font-family: 'Piazzolla', serif;
			font-weight: bold;
			font-size: 35px;
		}

		.text-small {
			font-size: 18px;
		}

		.btn {
			padding: 8px 20px;
			margin: 7px 0;
			border: 2px solid white;
			border-radius: 8px;
			background: none;
			color: white;
			cursor: pointer;
		}

		.btn-sm {
			padding: 6px 10px;
			vertical-align: middle;
		}

		.section {
			height: 400px;
			display: flex;
			align-items: center;
			justify-content: center;
			max-width: 90%;
			margin: auto;
		}

		.section-Left {
			flex-direction: row-reverse;
		}

		.paras {
			padding: 0px 65px;
		}

		.thumbnail img {
			width: 250px;
			border: 2px solid black;
			border-radius: 26px;
			margin-top: 19px;
		}

		.center {
			text-align: center;
		}

		.text-footer {
			text-align: center;
			padding: 30px 0;
			font-family: 'Ubuntu', sans-serif;
			display: flex;
			justify-content: center;
			color: white;
		}
	</style>
</head>

<body>
	<nav class="navbar background">
		<ul class="nav-list">
			<div class="logo">
				<img src= "images/CARS4.jpg">
			</div>
			<li><a href="#cars">CARS</a></li>
			<li><a href="#models">MODELS</a></li>
			<li><a href="#contactus">ABOUT US</a></li>
		</ul>

		<div class="rightNav">
			<input type="text" name="search" id="search">
			<button class="btn btn-sm">Search</button>
		</div>
	</nav>

	<section class="firstsection">
		<div class="box-main">
			<div class="firstHalf">
            <img src ="images/car3.jpg">
				<h1 class="text-big" id="cars">CARS</h1>
				<p class="text-small">
				
				</p>


			</div>
		</div>
	</section>

	<section class="secondsection">
		<div class="box-main">
			<div class="firstHalf">
            <img src ="images/car1.jpg">
				<h1 class="text-big" id="models">
					MODELS
				</h1>
				<p class="text-small">
					
				</p>


			</div>
		</div>
	</section>

	<section class="section">
		<div class="paras">
            <img src ="images/car2.jpg">
			<h1 class="sectionTag text-big">CONTACT US</h1>


		</div>
	</section>

	<footer class="background">
		<p class="text-footer">
			Copyright ©-All rights are reserved 
            <a href="logout.php">     Logout</a>
		</p>
        

	</footer>

     

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>