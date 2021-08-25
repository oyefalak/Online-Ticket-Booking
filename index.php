<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73)),url("body.jpg");
  
  background-color: #cccccc;
  height: 641px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
</style>
<link rel="stylesheet" type="text/css" href="menu.css">
<link rel="stylesheet" type="text/css" href="button.css">

</head>
<body>

<div class="hero-image">
<div style="width:100%; height:10%; background-color:white;">
<img src="banner.png" /> 
</div>

<nav>
  <ul>
    <li>
      <a href="bollywood/bollywood.php">Bollywood</a>
    </li>
    <li>
      <a href="#">Hollywood</a>
    </li>
    <li>
      <a href="#">Tollywood</a>
    </li>
    
  </ul>
</nav>
  <div class="hero-text">
    <h1 style="font-size:50px">WelCome Movie Show</h1>
    <h3>World best Online Movie Tickit Platform</h3>
    <button class="button" style="margin-top:5%;">Latest Updates</button>
  </div>
</div>


</body>
</html>
