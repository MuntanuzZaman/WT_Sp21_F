<?php
	$uname = "";
	$err_uname="";
	$pass="";
	$err_pass="";
	$bio = "";
	$err_bio="";
	$gender="";
	$err_gender="";
	$profession="";
	$err_profession="";
	$hobbies="";
	$err_hobbies="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["uname"]))
		{
			$err_uname = "Username Required";
		}
		elseif(strlen($_POST["uname"]) < 6)
		{
			$err_uname = "Username should be at least 6 characters.";
		}
		elseif(strpos($_POST["uname"], " "))
		{
			$err_uname = "Username can not contain white space.";
		}
		else
		{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"]))
		{
			$err_pass = "Password Required";
		}
		else
		{
			$pass = $_POST["pass"];
		}
		if(empty($_POST["bio"]))
		{
			$err_bio = "Bio Required";
		}
		else
		{
			$bio = $_POST["bio"];
		}
		
		 
		if(!isset($_POST["gender"]))
		{ 
			$err_gender = "No buttons were checked."; 
		} 
		else
		{
			$gender = $_POST["gender"];
		}
		
		if(!isset($_POST["hobbies"]))
		{ 
			$err_hobbies = "No buttons were checked."; 
		} 
		else
		{
			$hobbies = $_POST["hobbies"];
		}
		
		if(!isset($_POST["profession"]))
		{ 
			$err_profession = "No buttons were chosen."; 
		} 
		else
		{
			$profession = $_POST["profession"];
		}
		
		echo "Name: ". $_POST["uname"]."<br>";
		echo "Password: ". $_POST["pass"]."<br>";
		echo "Gender: ". $_POST["gender"]."<br>";
		echo "Profession: ". $_POST["profession"]."<br>";
		echo "Bio: ". $_POST["bio"]."<br>";
		
		 /*$var=array($_POST["hobbies"]);
			  echo "hobbies: ";
			  
			  for($i=0;$i<count($var) ;$i++)
			  {
				  echo $var[$i].", ";
			  }*/
			  
		$var = $_POST["hobbies"];
		echo "Hobbies: ";
		for($i=0; $i<count($var); $i++)
		{
			echo $var[$i]. ", ";
		}
		
	}
	
	

?>

<html>
	<head></head>
	<body>
		
		<h1>User Registration</h1>
		<form action="" method="post">
			<table>
				<tr>
					<td><span><b>Username</b>:</span></td>
					<td>:<input type="text" name="uname" value = "<?php echo $uname;?>" placeholder = "Username"><br>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td>:<input type="password" name="pass" value = "<?php echo $pass;?>"><br>
					<td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Gender</b>:</span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span></td>
					<td><span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
					<td><span><b>Hobbies</b>:</span></td>
					<td>:<input type="checkbox" value = "Movies" name = hobbies[] > Movies
					    <input type="checkbox" value = "Music" name = hobbies[] > Music
						<input type="checkbox" value = "Games" name = hobbies[] > Games
						<input type="checkbox" value = "Gardening" name = hobbies[] > Gardening
						<td><span><?php echo $err_hobbies;?></span></td>
				</tr>
				<tr>
					<td><span><b>Profession</b>:</span></td>
					<td>
						:<select name="profession">
							<option disabled selected>Choose One</option>
							<option>Teaching</option>
							<option>Service</option>
							<option>Business</option>
							<option>others</option>
							
						</select>
						<td><span><?php echo $err_profession;?></span></td>
					</td>
				</tr>
				
				<tr>
					<td><span><b>Bio</b>:</span></td>
					<td>:<textarea name="bio" value = "<?php echo $uname;?>"></textarea><br>
					<td><span><?php echo $err_bio;?></span></td>
				</tr>
				
			</table>
			<br>
			<input type="submit" name="Submit">
		</form>
	</body>
</html>