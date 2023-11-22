<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap - Carousel</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
	  <h1 class="text-center">Carousel Captions</h1>
		<div id="carouselExampleCaptions" class="carousel slide bg-secondary">
		<center>
			<div id="carouselExampleCaptions" class="carousel slide bg-secondary">
                    <div class="carousel-indicators text-dark">
				        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><h3>1</h3></button>
				        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"><h3>2</h3></button>
				        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"><h3>3</h3></button>
				    </div>
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="/bootstrap/images/template.jpg" alt="GFG" width="400" height="300" alt="...">
					<div class="carousel-caption text-white">
						<h5>Caption for first slide</h5>
						<p>This is the first slide of the carousel component.</p>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="/bootstrap/images/template.jpg" alt="GFG" width="400" height="300" alt="...">
					<div class="carousel-caption text-white">
						<h5>Caption for second slide</h5>
						<p>This is the second slide of the carousel component.</p>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="/bootstrap/images/template.jpg" alt="GFG" width="400" height="300" alt="...">
					<div class="carousel-caption text-white">
						<h5>Caption for third slide</h5>
						<p>This is the third slide of the carousel component.</p>
					</div>
				  </div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
			  </div>
		</center>
	  </div>
  </body>
</html>