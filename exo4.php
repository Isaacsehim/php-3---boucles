<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Exercice 4</title>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<?php
			for ($opacity = 100; $opacity >= 0; $opacity -= 25) {
				echo '<div class="col-4 mb-3">
						<div class="p-5 bg-primary text-white text-center" style="opacity:' . ($opacity / 100) . ';">' . $opacity . '%</div>
					</div>';
			}
			?>
		</div>
	</div>
</body>
</html>