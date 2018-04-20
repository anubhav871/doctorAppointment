<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Sajha Hospital</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
</head>
<body>
	<?php require_once '_navigation.php'; ?>
	<div id="body">
		<div class="contact">
			<h1>contact us</h1>
			<div>
				<form method="POST" action="actions/backend_sendmsg.php">
					<input type="text" name="fname" placeholder="Full Name" required> <br>
			        <input type="email" name="email" placeholder="Email"  required> <br>
			        <input type="text" name="subject" placeholder="Subject" required> <br>
			        <textarea name="message" placeholder="Message"></textarea> <br>
			        <input type="submit" name="submit" value="Send">
				</form>
			</div>	
			<div>	
				<ul>
					<li>You can contact us via:</li>
					<li>PO: 144411 Phagwara LPU</li>
					<li>Tel: +91-7631070530</li>
					<li>Toll Free:  1800-255-007</li>
					<li>Email: info@sajhahospital.com</li>
				</ul>
			</div>	
		</div>
	</div>
</body>
</html>