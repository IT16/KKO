<?php
include "./scripts/con_db.php";
error_reporting (E_ALL & ~E_NOTICE);
session_start();
if($_SESSION['login'] == true){
  header('Location: admin.php');
 }
?>
<html lang="id">
<html>
  <head>
    <meta charset="utf-8">
    <title>Kelas Online | Login</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <style>
      *{
        margin: 0;
        box-sizing: border-box;
      }
      body{
        background-color: #2C3E50;
      }

      div#header .header-background{
        background-color : #34495E;
        box-shadow: 0px 5px 5px #000000;
        width: 100%;
        height: 14%;
      }
      div#header .header-background .header-text{
        padding: 20;
        text-align: center;
      }
      div#header .header-background .header-text label.h1{
        font-size: 2.0em;
        color: #FFFFFF;
        font-weight: bold;
      	text-shadow : 0px 1px #000000;
      }
      div#header .header-background .header-text label.h1 span.logo-text{
        color: #2980B9;
      }
      div#header .header-background .header-text label.description{
        font-size: 1.0em;
        color: #FFFFFF;
      }

      div#container{
        height: 75%;
      }
      div#login-dimension{
        padding-top: 10%;
        width: 320px;
        height: auto;
        color: #FFFFFF;
      }
      div#login-dimension .login-box-header{
        box-shadow: 0px 0px 20px #2980B9;
        background-color: #2573A7;
        color: #FFFFFF;
        font-size: 2.00em;
        text-align: center;
      }

      div#login-dimension .login-box-content form.login-form{
        box-shadow: 0px 0px 20px #2980B9;
        background-color: #BDC3C7;
        width: auto;
        height: auto;
        padding: 12;
      }

      div#login-dimension .login-box-content form.login-form label{
        font-weight: bold;
        font-size: 1.23em;
        color: #000000;
      }

      div#login-dimension .login-box-content form.login-form input[type="text"]{
        padding: 5;
        margin-top: 5;
        margin-bottom: 5;
        width: 100%;
      }
      div#login-dimension .login-box-content form.login-form input[type="password"]{
        padding: 5;
        margin-top: 5;
        margin-bottom: 5;
        width: 100%;
      }
      div#login-dimension .login-box-content form.login-form input[type="submit"]{
        background-color: #2573A7;
        border: none;
        margin: 5 auto;
        padding: 10;
        width: 100%;
      }
	  div#login-dimension .login-box-footer{
        box-shadow: 0px 0px 20px #2980B9;
        background-color: #2573A7;
        color: #FFFFFF;
        font-size: 1.00em;
        text-align: center;
      }
	  

      div#footer .footer-background{
        width: 100%;
        height: 14%;
        background-color : #34495E;
        box-shadow: 0px -5px 5px #000000;
        text-align: center;
      }

      .error {
      	color: black;
      }
    </style>
  </head>
  <body>
    <header>
      <div id="header">
        <div class="header-background">
          <div class="header-text">
            <label class="h1">KELAS<span class="logo-text">ONLINE</span></label><br>
            <label class="description">A web based application for management your class.</label>
          </div>
        </div>
      </div>
    </header><center><div id="container">
      <div id="login-dimension">
        <div class="login-box-header">
          LOGIN USER
        </div>
        <div class="login-box-content">
          <form action="./scripts/login-proses.php" method="post" class="login-form">
            <label for="user_field">USERNAME : </label><br>
            <input type="text" name="user_field" value=""><br>
            <label for="pass_field">PASSWORD : </label><br>
            <input type="password" name="pass_field" value=""><br>
            <input type="submit" name="btn-login" value="LOGIN">
          </form>
        </div>
        <div class="login-box-footer">
		<?php 
		if (isset($_GET['p'])){
		echo $_GET['p']; 
		}
		?>
        </div>
      </div>
    </div></center>
    <footer>
      <div id="footer">
        <div class="footer-background">
          <div class="text-background">
            Created By : <span class"team-name">TEAM IT16'</span> |
            Copyright &copy 2017, Allright Reserved.<br>
            Credited to :<br>
            name1 | name2 | name3 | name4 | name5 | name6 | name7 | name8 | name9 | name10 | name11
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
