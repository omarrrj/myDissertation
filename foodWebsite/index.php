<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel="stylesheet" href="css/stylesheet.css">

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
<title>Talent Burgers</title>
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
	
	<div id ="background">
	<div class ="container">
		<h1 id="welHead">Welcome To Talent Burgers</h1>

		<table class = "welcome">
			<tr>
				<td id="leftc"><img src="images/whitesearch.png" alt="Image 1"
					width="100" height="100">
					<h1 class="display-5">Order here</h1>
					<p>Order with just a few clicks <br> and treat yourself to delicious meals </p>
					</td>
					
				<td id=middlec><img src="images/whitedelivery.png" alt="Image 1"
					width="125" height="100">
					
					<h1 class="display-5">Deliver</h1>
					<p>Experience the ultimate convenience of online ordering and <br>have your favorite meals delivered right to your doorstep</p>
					</td>
				<td id="rightc"><img src="images/enjoy3.jpeg" alt="Image 1"
					width="100" height="100">
					<h1 class="display-5">Enjoy</h1>
					<p>Receiving them right at your doorstep<br> all with just a few clicks of a button</p>
					</td>
			</tr>
		</table>
	</div>

	<div class="container">
	<h1 id="welHead">Book A Table</h1>
	<table>
		<tr>
			<td id=bookO>
				<h1 class="display-5">You Can Now Book Online</h1>
				<p>Great news! You can now book tables directly through our website's online ordering system.<br>
				 Simply navigate to the form on the right and choose your preferred date and time.<br> We can't wait to welcome you 
				 for a fantastic dining experience! </p>
			</td>
			<td>
				<form class="row justify-content-center mb-4">
			<div class="col-10 mb-3">
				<label for="title"></label> <input class="form-control"
					type="text" name="name" placeholder="Enter Name...">
			</div>
			<div class="col-10 mb-3">
				<label for="year"></label> <input class="form-control"
					type="text" name="email" placeholder="Enter Email...">
			</div>
			<div class="col-10 mb-3">
				<label for="director"></label> <input class="form-control"
					type="number" name="phoneNumber" placeholder="Enter Phone Number...">
			</div>
			<div class="col-10 mb-3">
				<label for="stars"></label> <input class="form-control"
					type="number" name="attendees" placeholder="Enter People Attending...">
			</div>
			<div class="col-10 mb-3">
				<label for="review"></label> <input class="form-control"
					type="time" name="time" placeholder="Choose A Time...">
			</div>
			<div class="col-10 mb-3">
				<label for="review"></label> <input class="form-control"
					type="date" name="date" placeholder="Choose A Date...">
			</div>
			<div class="col-10">
				<input id="viewSubmit" type="submit" value="Book Now">
			</div>
		</form>
				
			</td>
			
			
		</tr>
	</table>
</div>
	<div>
	<table>
		<tr>
			<td>
				<h1 class="display-5">View Meals</h1>
				<p>Hungry for some delicious food? You can now easily view our menu on our online ordering system.<br> Simply click on the "Menu" tab and explore our selection of mouth-watering dishes. 
				<br>From savory entrees to delectable desserts, we've got something to satisfy every craving.</p>
				<a href="menu.php">
  <button type="submit" id="viewSubmit">View Our Meals</button>
</a>

				
			</td>
			<td>
				
			</td>
	</tr>
	</table>
		
			</div>
<div class="footer">
  <table id="foot">
    <tr>
      <td class="legal">
        <h1 class="foot-head">Legal</h1>
        <ul>
          <li><a href="#">Terms and Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Careers</a></li>
        </ul>
      </td>
      <td class="help">
        <h1 class="foot-head">Help</h1>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </td>
      <td class="social">
        <h1 class="foot-head">Social</h1>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Snapchat</a></li>
        </ul>
	</div>

</body>
</html>
