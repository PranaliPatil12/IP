<?php
	include "../../includes/studentlogin.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>QuizZone | Teacher Login</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="../styles/login.css">
</head>
<body>
	<div id="content"> 
		<div class="header">Student Login</div>

		<div class="form">
			<form action="loginStudent.php" method="post">
				<div id="emailid">
					<label>Email-id:  </label>
					<input type="email" name="email"><br>
				
				<div id="pass">
					<label>Password:</label>
					<input type="password" name="password"><br>
				</div>
				<div id="submit">
					<button type="submit" name="submit">Submit</button>
				</div>
			</form>	
		</div>
	</div>
</body>
</html>