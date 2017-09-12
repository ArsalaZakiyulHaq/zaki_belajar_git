<center>
<h3>Example Indexed Array :</h3>
<?php
$height = array("Zaki"=>"2m", "Budi"=>"4m", "Salim"=>"1/2m");

rsort($height);

foreach($height as $x => $x_value) {
	echo "Name = " . $x . " | Height = " . $x_value;
	echo "<br>";
}
?>
</center>
<hr>
<center>
<h3>Example Associative Array :</h3> 
<?php
$age = array("Zaki"=>"1000thn", "Budi"=>"5000thn", "Salim"=>"1thn");

sort($age);

foreach($age as $z => $z_value) {
	echo "Name = " . $z . " | age = " . $z_value;
	echo "<br>";
}

?>
</center>
<hr>
<center>
<h3>Example Multidimensional :</h3>
<!DOCTYPE html>
<html>
<body>

<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
  
ksort($cars);   
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>

</body>
</html>
</center>
<center><h1>THE END</h1></center>