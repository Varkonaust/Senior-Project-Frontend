<!DOCTYPE HTML>
<html>
	<head>
		<title>Lease Beast | Main</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

				<div id="header-wrapper">
					<div class="container">

                        <!-- Header-->
						<?php
							include_once 'header.php';
						?>
					</div>
				</div>

			<!-- Main Wrapper -->
				<div id="main-wrapper">
					<div class="wrapper style1">
						<div class="inner">

							<!-- Feature 1 -->
								<section class="container box feature1">
									<h2>Sign Up</h2>
                                    <form action="signup.inc.php" method="post">
                                        <input type="text" name="name" placeholder="Joe Johnson">
                                        <input type="text" name="email" placeholder="example@mail.com">
                                        <input type="text" name="uid" placeholder="Username">
                                        <input type="password" name="pwd" placeholder="Joe Johnson">
                                        <input type="password" name="name" placeholder="Joe Johnson">
                                    </form>
								</section>

						</div>
					</div>
				</div>

			<!-- Footer -->
				<?php
					include_once 'footer.php';
				?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>