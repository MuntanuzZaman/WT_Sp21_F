<?php

$recognized = array ("Raju","Mina","Mithu");
$user = array("Mithu");

if ($user[0] == $recognized[0]) 
	echo "<b>Hello.</b>";
else if ($user[0] == $recognized[1])
	echo "<b>Hello.</b>";
else if ($user[0] == $recognized[2])
	echo "<b>Hello.</b>";
else 
	echo "You are not recognized";


?>