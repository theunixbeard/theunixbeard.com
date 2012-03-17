<html>
<head>
	<style type="text/css">
	h1 {color:red; text-align: center}
	h2 {color:black; text-align: center}
	</style>
</head>
<body>

<?php
$email = $_POST['email'];
$pass = $_POST['pass'];

echo "<h2>Your email address: <h2><h1>". $email . "</h1>.<br />";
echo "<h2>And... your password: </h2><h1>". $pass . "</h1>.<br />";

echo "<h2>Thank you for GETTING PHISHED!</h2>";

?>
</body></html>
