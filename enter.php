<?php
header('Content-Type: text/html; charset=UTF-8');
$db = mysqli_connect ("localhost","dertop", "assassin125", "anuardb");
// authorization
if (isset ($_POST['login'] ))  {
$username = $_POST['username'];
$password = $_POST['password'];
      //cheaking user's username in database
      $result = mysqli_query($db, "SELECT * FROM user WHERE username='$username'");
      $myrow = mysqli_fetch_array($result);
      //cheaking user's password
      if ($myrow['password']==$password){
        session_start();
        //Set session variables
        $_SESSION['userdata'] = $myrow;
        header('Location: forhome.html'); 
exit();
      } 
        else if ($password !== '' and $username !== '') {
          echo  "<script>alert(\"Error! Password or username is wrong!\");</script>";
        }        
      }      
?>
<html>
 <head>
    <title>Be Your Own Teacher</title>
    <link rel="icon" type="image/x-icon" href="faviconS.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
       html {
    height: 100%; /* Высота веб-страницы */
    background: #000 url(Gifka.gif) 
          no-repeat;
background-size: 100%;  /* Путь к графическому файлу с фоном */
    color: #fff; /* Белый цвет текста */
   }      body {
        display: flex;
        justify-content: center;
        height: 100%;
      }
      body, div, h1, form, input, p { 
        padding: 0;
        margin: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 16px;
        color: #666;
      }
      h1 {
        padding: 10px 0;
        font-size: 32px;
        font-weight: 300;
        text-align: center;
       }
      p {
        font-size: 12px;
      }
      .main-block {
        max-width: 340px; 
        min-height: 250px; 
        padding: 10px 0;
        margin: auto;
        border-radius: 5px; 
        border: solid 1px #ccc;
        box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
        background: #ebebeb; 
      }
      form {
        margin: 0 30px;
      }
      label#icon {
        margin: 0;
        border-radius: 5px 0 0 5px;
      }
      input[type=text], input[type=password] {
        width: calc(100% - 43px);
        height: 36px;
        margin: 13px 0 0 -5px;
        padding-left: 10px; 
        border-radius: 0 5px 5px 0;
        border: solid 1px #cbc9c9; 
        box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
        background: #fff; 
      }
      input[type=password] {
        margin-bottom: 10px;
      }
      #icon {
        display: inline-block;
        padding: 9.3px 15px;
        box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
        background: #1c87c9;
        color: #fff;
        text-align: center;
      }
      .btn-block {
        margin-top: 10px;
        text-align: center;
      }
      button {
        width: 90px;
        padding: 10px 0;
        margin: 5px auto;
        border-radius: 5px; 
        border: none;
        background: #1c87c9; 
        font-size: 14px;
        font-weight: 600;
        color: #fff;
      }
      button:hover {
        background: #26a9e0;
      }
    </style>
  </head>
  <body>
    
  </body>
</html>