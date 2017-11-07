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

			$("#imgUpload").on("change", function()
			{
				var reader = new FileReader();
				reader.addEventListener("load", function(e){
					$('#previewImg').attr('src', e.target.result);
				});
				reader.readAsDataURL(this.files[0]);
				
			});

		});

		function validateUpload(){
			if($("#imgUpload").val() == ""){ return false }
			if($("#imgD").val() == ""){ return false }
		}
	</script>
	<title></title>
</head>
<body>
	<div class="wrapper-fileu">
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

		<div class="uploadForm">
			<h2>Upload image:</h2><br>
			<div class="imgSlot">
				<img class="footerImg" src="" id="previewImg">
			</div>
			<form action="fileu.php" enctype="multipart/form-data" method="post" onsubmit="return validateUpload()">

				<input type="file" name="fileToUpload" id="imgUpload" required><br>
				<input type="text" name="imgDescript" id="imgD" placeholder="Image Description" required><br>
				<button type="submit" submit="test.html" name="submit">upload</button>
			</form>
		</div>




		<div class="footer">
			
		</div>

	</div>




</body>
</html>



