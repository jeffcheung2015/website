<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- My stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/styleGallery.css">

  <script>
    $(document).ready(function(){

    });

  </script>
  <title></title>
</head>
<body>
  <div class="wrapper-login">
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
            <img class="headerImg" src="img/search.png">
            <input class="search" type="search" name="">
          </li>
          <li class="rightList">
            <img class="headerImg" src="img/login.png"> <a href="login.php">LOGIN/REGISTER</a>
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

    <div class="loginForm">
      <form action="index.php" method="POST">
        <br>
        <h2>Login</h2>
        <div class="loginInput">
          <div class="leftBar">USERNAME</div>
          <input class="input" type="text" name="uname" placeholder=" Username" required>        
        </div>
        <div class="loginInput">
          <div class="leftBar">PASSWORD</div>
          <input class="input" type="password" name="password" placeholder=" Password" required>          
        </div>
        <div class="loginInput">
          <input class="btn" type="submit" value="LOGIN">
        </div>
      </form>
    </div>

    <div class="registerForm">
      <form action="/register.php" method="POST">
<br>
        <h2>Register</h2>
        <div class="regisInput">
          <div class="leftBar">NAME</div>
          <input class="input" type="text" name="name" placeholder=" Name" required>
        </div>
        <div class="regisInput">
          <div class="leftBar">AGE</div>
          <input class="input" type="text" name="age" placeholder=" Age" required>
        </div>
        <div class="regisInput">
          <div class="leftBar">GENDER</div>
          <select name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
          </select>
        </div>
        <div class="regisInput">
          <div class="leftBar">USERNAME</div>
          <input class="input" type="text" name="username" placeholder=" Username" required>
        </div>
        <div class="regisInput">
          <div class="leftBar">PASSWORD</div>
          <input class="input" type="password" name="password" placeholder=" Password" required>
        </div>
        <div class="regisInput">
          <input class="checkbox" type="checkbox" required><p>I agree the terms and conditions.</p>
        </div>
        <div class="regisInput">
          <input class="btn" type="submit" name="submit" value="REGISTER">
        </div>


      </form>
    </div>

    <datalist id= "gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </datalist>





    <div class="footer"></div>





  </div>




</body>
</html>

