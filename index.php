<html>
	<head>
		<style>
			body {
				background: rgb(0, 0, 0, 0.2);
				color: red;
			}
		</style>
	</head>
	<body>
		<?php

			include 'blog.php';

			$man = new Blog;
			$man::all();

		?>
	</body>
</html>