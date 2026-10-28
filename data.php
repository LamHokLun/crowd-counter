<!DOCTYPE html>
<html>
<body>
	<?php 
	echo "<h3>The information are successfully submitted</h3>";
	echo "The data that you have filled are as follows: <br>";
	echo "Session: ". $_POST["session"]."<br>";
	echo "Time: ". $_POST["time"]."<br>";
	echo "Visitor: ". $_POST["visitor"]."<br>";
	?>
</body>
</html> 


<?php
$myFile = fopen("data.csv", "a") or die ("Could not open the file");
$myData = $_POST["session"].",".$_POST["time"].",".$_POST["visitor"]."\r\n";
fwrite($myFile, $myData);
fclose($myFile)
?>