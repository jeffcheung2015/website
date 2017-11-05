<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'ajax.php';
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- My stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/styleGallery.css">
	
	<script>
		$(document).ready(function(){
			$("#img").on("change", function()
			{
				var reader = new FileReader();

				reader.addEventListener("load", function(e){
					$('#juimg').attr('src', e.target.result);
				});
				reader.readAsDataURL(this.files[0]);
				
			});
			//
			var bannerTimeOutID = window.setInterval(bannerScroll, 4000);


			$(".banner").hover(function(){
				clearInterval(bannerTimeOutID);
			}, function(){
				bannerTimeOutID = window.setInterval(bannerScroll, 4000);
			});

			
			$(".leftArrow").click(function(){				

				$("#banner1").finish();
				$("#banner2").finish();
				$("#banner3").finish();
				$("#banner4").finish();

				scroll("#banner1",$("#banner1").position().left,-1,1000);
				scroll("#banner2",$("#banner2").position().left,-1,1000);
				scroll("#banner3",$("#banner3").position().left,-1,1000);
				scroll("#banner4",$("#banner4").position().left,-1,1000);		
			});

			$(".rightArrow").click(function(){

				$("#banner1").finish();
				$("#banner2").finish();
				$("#banner3").finish();
				$("#banner4").finish();

				scroll("#banner1",$("#banner1").position().left,1,1000);
				scroll("#banner2",$("#banner2").position().left,1,1000);
				scroll("#banner3",$("#banner3").position().left,1,1000);
				scroll("#banner4",$("#banner4").position().left,1,1000);		
			});
		});
		// ==> dir=-1
		// <== dir=+1		
		function scroll (idstr,posLeft,dir,time){
			
			switch(posLeft){
				case -800:				
					if(dir==1){
						$(idstr).css('display','none');
					}	
					$(idstr).animate({'left':(dir == 1) ? 1600 : 0}, time, "swing", function(){
						if(dir==1){
							$(idstr).css('display','inline');
						}
					});			
					break;
				case 0:
					$(idstr).animate({'left':(dir == 1) ? -800 : 800}, time);
					break;
				case 800:
					$(idstr).animate({'left':(dir == 1) ? 0 : 1600}, time);
					break;
				case 1600:
					if(dir==-1){
						$(idstr).css('display','none');
					}
					$(idstr).animate({'left':(dir == 1) ? 800 : -800}, time, "swing", function(){
						if(dir==-1){
							$(idstr).css('display','inline');
						}
					});
					break;
			}
		}
		//banner scroll over time, called every 3s, animation last 2s only
		function bannerScroll(){
			
			scroll("#banner1",$("#banner1").position().left,-1,1000);
			scroll("#banner2",$("#banner2").position().left,-1,1000);
			scroll("#banner3",$("#banner3").position().left,-1,1000);
			scroll("#banner4",$("#banner4").position().left,-1,1000);
			
		}
	</script>
	<title></title>
</head>
<body>
	<div class="wrapper">
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
					<li class="rightList">
						<img class="headerImg" src="img/login.png">	<a href="login.php">LOGIN/REGISTER</a>
					</li>

					<li class="rightList">
						<div class="menuBar">		
							<img class="headerImg" class="menuImg" src="img/menu.png">					
							<div class="dropDown">								
								<a href="3">ACCOUNT SETTING<img class="headerImg" src="img/user.png"></a>
								<a href="upload.php">UPLOAD<img class="headerImg" src="img/login.png"></a>	
							</div>
						</div>
					</li>
				</ul>


			</div>			
		</div>






		<div class="footer">
			<h2>Image to be uploaded:</h2><br>
			<img class="footerImg" src="" id="juimg">
			<br>
			<form action="fileu.php" enctype="multipart/form-data" method="post">
				<input type="file" name="fileToUpload" id="img"><br>
				<input type="text" name="imgDescript" id="imgD" placeholder="Image Description"><br>
				<button type="submit" submit="test.html" name="submit">upload</button>
			</form>
		</div>

	</div>




</body>
</html>



