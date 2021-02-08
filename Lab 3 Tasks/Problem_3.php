<?php
$length = 50;
$width = 50;
$area;
$perimeter;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "The Area is: $area<br>";
echo "The Perimeter is: $perimeter<br>";


if ($length == $width)
	echo "The shape is a square.";

?>