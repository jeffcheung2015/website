<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include 'database.php';
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- My stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/styleGallery.css">
	
	<script>
		$(document).ready(function(){
		}
	</script>
	<title></title>
</head>
<body>
	<div class="wrapper-userProfile">
		<div class="header">
			<div class="navBar">
				<ul>
					
					<li class="leftList">
						<img class="headerImg" src="img/home.png">
						<a href="index.php">HOME</a>
					</li>						
					<li class="leftList">
						<img class="headerImg" src="img/Contact.png">
						<a href="5">CONTACT</a>						
					</li>
					<li class="leftList">
						<img class="headerImg"  src="img/search.png">
						<input class="search" type="search" name="">
					</li>
					<?php 
					if(!isset($_SESSION['username'])) {
						echo '<li class="rightList">
						<img class="headerImg" src="img/login.png">	
						<a href="login.php">LOGIN/REGISTER</a>
						</li>';	

					}
					else{
						echo '
			            <li class="rightList">            
			              <a href="accountSetting.php">Welcome,'.$_SESSION['username'].'</a>
			            </li>
						<li class="rightList">
						<img class="headerImg" src="img/logout.png">	
						<a href="logout.php">LOGOUT</a>
						</li>
						<li class="rightList">
						<div class="menuBar">		
						<img class="headerImg" class="menuImg" src="img/menu.png">					
						<div class="dropDown">								
						<a href="accountSetting.php">ACCOUNT SETTING<img class="headerImg" src="img/user.png"></a>
						<a href="upload.php">UPLOAD<img class="headerImg" src="img/login.png"></a>	
						</div>
						</div>
						</li>';
					}		            
					?>	
				</ul>
			</div>			
		</div>


		<div class="userProfile">
			<h2>User Profile</h2>

			<?php 

				echo "<p>Name:".$_SESSION['name']."<br>".
				"Age:".$_SESSION['age']."<br>".
				"Gender:".$_SESSION['gender']."<br>"."</p>";
			?>
		</div>



		

	</div>




</body>
</html>



