<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel="stylesheet" href="css/contactusstyle.css">

<link
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
	rel="stylesheet" />
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
	rel="stylesheet" />
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
<title>Talent Burgers|Contact Us</title>
</head>
<body>
	<nav class="navbar">
		<div class="container-fluid">
			<img src="images/burgerlogo.jpg" alt="Burger logo" width="100"
				height="100"> <a class="navbar-brand" href="index.php">Talent
				Burgers</a>
			<button class="navbar-toggler" type="button"
				data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
				aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="offcanvas offcanvas-end" tabindex="-1"
				id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas"
						aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
						<li class="nav-item"><a class="nav-link active"
							aria-current="page" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
						<li class="nav-item"><a class="nav-link active" href="signup.php">Sign
								Up</a></li>
						<li class="nav-item"><a class="nav-link active" href="contactus.php">Contact
								Us</a></li>
						<li class="nav-item"><a class="nav-link active" href="menu.php">Food Menu</a></li>

					</ul>
					<form class="d-flex mt-3" role="search">
						<input class="form-control me-2" type="search"
							placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>

					</form>
				</div>
			</div>
		</div>
	</nav>
	
	<div class="cUs">
	<div class = "container">
	<div class = "top-header">
		<header>Get In Touch</header>
	</div>
	<div class ="input-field">
		<input type ="text" class="input" placeholder ="Name">
		<i class="bi bi-person"></i>
	</div>	
	<div class ="input-field">
		<input type ="text" class="input" placeholder ="Email">
	<i class="bi bi-envelope-at"></i>
	</div>	
	<div class ="input-field">
		<input type ="number" class="input" placeholder ="Phone Number">
	<i class="bi bi-telephone"></i>
	</div>	
	
	<div class="input-field">
	<textarea class="input" placeholder="How Can We Help You?"></textarea>
	<i class="bi bi-question-circle"></i>
</div>

	<div class ="input-field">
		<input type ="submit" class="submit" value ="Send">
	</div>		
	
	</div>
	</div>
</body>
</html>
