
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - BeeHoney </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&family=Playfair+Display&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./style.css">


</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
		  <a class="navbar-brand" href="#"><span class="text-warning">Bee</span>Honey</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
		  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
		  aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link" href="./index.php">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="http://localhost/BeeHoneyPredictionSystemWebApp/User/index_cus.php">User Login</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="http://localhost/BeeHoneyPredictionSystemWebApp/Admin/login_admin.html">Admin Login</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#about">About</a>
			  </li> 
			</ul>
			
		  </div>
		</div>
	  </nav>

	  <div id="carouselExampleDark" class="carousel carousel-dark slide">
		<div class="carousel-indicators">
		  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
		  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
		  <div class="carousel-item active" data-bs-interval="1">
			<img src="Images/1.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption">
			  <h5>Best Bee Honey</h5>
			  <p>Honey is a natural sweet substance produced by bees from nectar, which has many health benefits.</p>
			  
			</div>
		  </div>
		  <div class="carousel-item" data-bs-interval="1">
			<img src="Images/2.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption">
			  <h5>The Importance of Bees</h5>
			  <p>Bees are essential to our ecosystem, pollinating plants 
				and producing honey, and communicate through pheromones and dances.</p>
			  
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="Images/cartoon.png" class="d-block w-100" alt="...">
			<div class="carousel-caption">
			  <h5>Exploring Bee Hives</h5>
			  <p>A bee hive is a home for bees to store their food, 
				raise their young, and live, organised into different sections and used to communicate through pheromones and dances.</p>
			  
			</div>
		  </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Next</span>
		</button>
	  </div>

      <!-- about section -->

      <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img"><br><br><br>
                        <img src="Images/about.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <br><h2>We Provide Best Quality Service Ever </h2>
                        <p>Our Web app is designed to help beekeepers predict the 
							amount of honey their bees will produce based on a variety of factors 
							such as weather patterns, hive population, and time of year. By inputting 
							data about your specific hive, our app uses machine learning algorithms 
							to provide you with an estimate of how much honey you can expect to harvest.
							Thank you for choosing our Bee Honey Prediction web app, and we hope it 
							helps you maximize your honey production and beekeeping success!</p>   
                    </div>
                </div>    
            </div>

        </div>
      </section>
<br>
	  <!-- services section -->

	  <section id="services" class="services section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
			<div class="section-header text-center pb-5">
				<h2> Our Services</h2>
				<p>Our service is designed to help beekeepers predict 
					the amount of honey their bees will produce based on a variety of factors such as weather
					 patterns, hive population, and time of year. By providing us with data about your specific 
					 hive, our team uses machine learning algorithms to provide you with an estimate of how much 
					 honey you can expect to harvest.</p>
			</div>		 
			</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
						 <i class="bi bi-subtract"></i>	
						 <h3 class="card-title">Best Quality</h3>
						 <p>The best quality of a Bee Honey Prediction web app is its ability to provide accurate 
							predictions of honey yields based on real-time data analysis. The app uses advanced 
							algorithms to analyze data on factors such as bee behavior, and plant 
							growth to predict the amount of honey that can be harvested from a hive.</p>

						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-slack"></i>
						 <h3 class="card-title">Sustainability</h3>
						 <p>The sustainability of a Bee Honey Prediction web app depends on its ability to provide 
							accurate predictions, its impact on the environment and bee populations, and its ability to 
							adapt to changing conditions. </p>

						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
						<i class="bi bi-tools"></i>
						 <h3 class="card-title">Integrity</h3>
						 <p>The integrity of a Bee Honey Prediction web app is essential for its success and trust of its users. 
							To ensure its accuracy and reliability, the app should be developed and maintained by experts with 
							knowledge and experience in beekeeping and data analysis.</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	  </section>
<br> <br> 
	  <!-- contact section-->
	  <section id="contact" class="contact section-padding">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
				<div class="section-header text-center pb-5">
					<h2>Contact Us</h2>
				</div>
			</div>
			</div>
			<div class="row m-0">
				<div class="col-md-12 p-0 pt-4 p-4">
					<form action="#" class="bg-light p-4.ms-auto">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<input type="text" class="form-control" required placeholder="Your Full Name">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<input type="email" class="form-control" required placeholder="Your Email Here">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<textarea rows="3" required class="form-control" required placeholder="Your Query Here"></textarea>
							</div>
						</div>
						<button class="btn btn-warning btn-lg btn-block mt-3"> Send Now </button>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </section>

	  <!-- Footer -->

	  <footer class="bg-dark p-2 text-center">
		<div class="container">
			<div class="text-white mb-3 mb-md-0">
                Copyright©HoneyBee 2023. All rights reserved. Developed by Chamali Senanayake
              </div>
		</div>
	  </footer>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>
</body>
</html>

