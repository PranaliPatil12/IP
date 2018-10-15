<?php
	include '../../includes/studentlogin.php';
	
	include "../../includes/dbh.inc.php";

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Student Home Page</title>
	<meta charset="utf-8"/>

	<style type="text/css">
		.btn1{
			background-color: #720245;
			float: right;
			width: 10%;
			padding: 15px;
			margin-right: 20px;
			border:unset;
			border-radius:20px;
			
		}
		.subbtn{
			/* display:none; */
		}
		.heading{
			font-family: "Times New Roman", Times, serif;
			padding: 20px;
			margin-left:300px;
		
		}
		.div-animate{
			-webkit-animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			-moz-animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			-ms-animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			}

		@-webkit-keyframes zoom-in-out {
			0%{ -webkit-transform: scale(1); transform: scale(1); }
			50%{ -webkit-transform: scale(1.08); transform: scale(1.08); }
			100%{ -webkit-transform: scale(1); transform: scale(1); }
			}

		@keyframes zoom-in-out {
			0%{ -ms-transform: scale(1); transform: scale(1); }
			50%{ -ms-transform: scale(1.08); transform: scale(1.08); }
			100%{ -ms-transform: scale(1); transform: scale(1); }
			}																									
	</style>
</head>
<body>
		<form  action="../../includes/crtquiz.php" method="post">
		<header>
		<div style="height:10px"></div>
			<div style="width:100%;height:60px;background-color: #eeee;font-size:30px;">
				<label>Name:</label>
				<label><?php echo $_SESSION['Name'];?></label>
				<label style="margin-left:50px;">Class:</label>
				<label><?php echo $_SESSION['Class'];?></label>
				<input type="button" name="pswd" value="Change_password" class="btn1" style="size: 10px;color:white" />
				<input type="button" name="logout" value="Logout" class="btn1" style="size: 10px;color:white" />

			</div>
		</header>
		<div style="width:15%;margin-top:70px;float:left">
			<form method='post' action=''>
			<input class="subtn" type="button" name="Sub1" value="Maths-1" style="width:100% ; font-size: 17px;padding:25px;background-color:#720245;color:white;border-radius:10px;margin-bottom:3px;" /> 
			<input class="subtn" type="button" name="Sub2" value="Logic Design" style="width:100% ;font-size: 17px;padding:25px;background-color:#720245;color:white;border-radius:10px;margin-bottom:3px ;" />
			<input class="subtn" type="button" name="Sub3" value="DSA" style="width:100%;font-size: 17px;padding:25px;background-color: #720245;color:white;border-radius:10px;margin-bottom:3px;" />
			<input class="subtn" type="button" name="Sub4" value="DBMS " style="width:100% ;font-size: 17px;padding:25px;background-color: #720245;color:white;border-radius:10px;margin-bottom:3px;" />
			</form>
		</div>
	
	<section >
		<div style="width:75%;float:left;height: 470px;margin-top: 60px;margin-left: 70px;border :solid 5px #720245 " class="div-animate">
			
			<?php
			include '../../includes/crtquiz.php';
			?>
			<input type="button" name="startqz" value="START QUIZ" onclick="document.location.href ='http://localhost/Ip/pages/student/questions.php';" style="width:13% ;height:32%;background-color:#720245;color:white;margin-left: 43.5%;margin-top:150px;border-radius: 50%;font-size: 16px;border:0px;">
			
	</section>
	</form>
</body>
</html>