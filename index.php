<?php require_once('includes/arrays.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/thumbnail-gallery.css">	
</head>
<body>

	<div class="container">

		<?php
			foreach ($cars as $car) {
				?>
				<div class="carimages grid">			
						<div class="col-sm-4 image grid-item">
							<a href="#" class="thumbnail">						
								<img src="images/<?= $car['img'] ?>" alt="<?= $car['alt'] ?>" class="img-responsive">
							</a>					
						</div>
				</div>
				<?php
			}
		?>
		
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ==" crossorigin="anonymous"></script>

	<script>
		$('body').masonry({
			itemSelector: '.image',
			isAnimated: true,
			isFitWidth: true
		});
	</script>

	<script src="js/scripts.js"></script>
</body>
</html>