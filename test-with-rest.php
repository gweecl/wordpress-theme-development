<html>
	<head>
		<link rel="stylesheet" href="http://localhost/wp-content/plugins/wp-bakery/assets/css/js_composer.min.css?ver=6.0.3">
		<link rel="stylesheet" id="wp-block-library-css" href="http://localhost/wp-includes/css/dist/block-library/style.min.css?ver=5.2.2" type="text/css" media="all">
		<link rel="stylesheet" href="http://localhost/wp-content/themes/theme-a/dist/css/style.css" type="text/css" media="screen">
	</head>

	<body>
		<div class="entry">
			<div class="entry-content">
				<?php
					// http://localhost/wp-content/themes/theme-a/test-with-rest.php
					$url     = 'http://localhost/wp-json/wp/v2/st';
					$results = file_get_contents( $url );

					$doc = json_decode( $results, true );

					echo $doc[0]['rendered_content'];
				?>
			</div>
		</div>
		<script src="http://localhost/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp"></script>
		<script src="http://localhost/wp-content/plugins/wp-bakery/assets/js/dist/js_composer_front.min.js?ver=6.0.3"></script>
	</body>
</html>
