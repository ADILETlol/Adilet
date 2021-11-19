<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://img.favpng.com/10/0/3/anime-icon-away-icon-face-icon-png-favpng-kQqBnHR7jN8TxGRq3TJhqzewe.jpg">
    <link href='http://fonts.googleapis.com/css?family=Philosopher&subset=cyrillic' rel='stylesheet' type='text/css'>
    
      <title>adi</title>
      
  </head>
<html>
<body>
<h2>Log in</h2>
  <input type="text" name="username" id="username">
  <input type="password" name="password" id="password">
  <input type="submit" value="Submit" onclick="login()">
<script>
  function login(){
    console.log("Submit")
    username = document.getElementById("username");
    password = document.getElementById('password');
    if(username.value == "adi" && password.value == "1"){
      console.log("Correct username and password");
      window.location.replace("portfolio.html");
    }
  }
</script>
</body>
</html>
