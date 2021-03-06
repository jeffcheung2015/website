<?php 
session_start();	
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
		var leftBarVisible = false;
		$(document).ready(function(){
			var bannerTimeOutID = window.setInterval(bannerScroll, 4000);


			$(".bannerContainer").hover(function(){
				clearInterval(bannerTimeOutID);
			}, function(){
				bannerTimeOutID = window.setInterval(bannerScroll, 4000);
			});

			$("#leftBarButton").on("click",function(){
				$(".leftSidebar").css({
					"width" : (leftBarVisible) ? "0%" : "100%",
					 "left" : (leftBarVisible) ? "-100%" : "0%"});
				leftBarVisible = !leftBarVisible;
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
						<img class="headerImg" src="img/leftBar.png" id="leftBarButton">
					</li>
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


		<div class="banner">
			<div class="bannerContainer">
				<img class="bannerImg" id="banner1" src="img/banner1.jpg">	
				<img class="bannerImg" id="banner2" src="img/banner2.jpg">	
				<img class="bannerImg" id="banner3" src="img/banner3.jpg">	
				<img class="bannerImg" id="banner4" src="img/banner4.jpg">	
				<input type="image" src="img/left.png" class="leftArrow" onclick=""/>
				<input type="image" src="img/right.png" class="rightArrow" onclick=""/>
			</div>
		</div>


		<div class="gallery">

			<?php 
			$imgRes = $mysqli->query("select * from imgdb");
			while($row = $imgRes->fetch_assoc()){
				echo '
				<div class="slot">
				<div class="imgSlot">
				<img class="galleryImg" src="'.$row["imgAddr"].'">
				</div>
				<div class="descriptSlot">
				<p class="imgDescript">
				Description:'.$row["imgDescript"].
				'<br>Uploader: '.$row['userName'].'</p>

				</div>
				</div>
				';
			}
			?>		

			<div class="pageBar">
				<ul>
					<li>1</li>
					<li>1</li>
					<li>1</li>
					<li>1</li>
					<li>1</li>
					<li>1</li>
					<li>1</li>
					<li>1</li>
					<li>1</li>
					<li>1</li>
				</ul>
			</div>
		</div>

		<div class="leftSidebar">
			<h3>Categories</h3>
			<ul>
				<li class="cateList"><a href="">1234</a></li>
				<li class="cateList"><a href="">1234</a></li>
				<li class="cateList"><a href="">1234</a></li>
				<li class="cateList"><a href="">1234</a></li>
				<li class="cateList"><a href="">1234</a></li>
				<li class="cateList"><a href="">1234</a></li>
				<li class="cateList"><a href="">1234</a></li>
			</ul>
		</div>

		<div class="modal">
			<div class="blackenedArea"></div>
			<div class="modalBody">
				<img class="modalBodyImg" src="">	
			</div>				
		</div>
		<div class="footer">			
		</div>
	</div>
<script>
	$(".slot").on("click", function(e){
		$(".modal").css("display","block");
		$(".modalBodyImg").attr('src',$(this).find(".galleryImg").attr('src'));
	});

	$(".blackenedArea").on("click", function(){
		$(".modal").css("display","none");
	});

</script>


</body>
</html>



