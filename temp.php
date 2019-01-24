<!DOCTYPE html>
<html>
<body>
	
<?php
	$Temp=$_POST['temperature'];
	
  $Write="<p>Temperatura je".$Temp."</p>";
  file_put_contents('index.html',$Write);
?>

</body>
</html>
