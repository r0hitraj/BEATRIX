<!DOCTYPE html>
<html>
<head>
<style >

  body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.bg-image {
  /* The image used */
  background-image: url("nextb.jpg");

  /* Add the blur effect */

  /* Full height */
  height: 80%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #111;
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
.grid-container {
  display: grid;
  height: 400px;
  align-content: center;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;

  padding: 10px;
}

.grid-container > div {
;
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
  @import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Montserrat', sans-serif;
  background-image: url("nextb.JPG");
  color: #fff;
}
.container {
  padding: 30px 50px;
}
#search-form {
  width: 30%;
  margin: 0 auto;
  position: relative;
}
#search-form input {
  width: 100%;
  font-size: 1.5rem;
  padding: 10px 15px;
  border: 2px solid #ccc;
  border-radius: 2px;
}
#search-form button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  background-color: black;
  outline: none;
  border: none;
  width: 3rem;
  text-align: center;
  font-size: 1.75rem;
  cursor: pointer;
  color: #333;
}
.info {
  margin-top: 0.5rem;
  text-align: center;
  font-size: 0.75rem;
}

@media (max-width: 1200px) {
  #search-form { width: 50%; }
}
@media (max-width: 768px) {
  .container { padding: 30px 35px; }
  #search-form { width: 100%; }
  .info { font-size: 0.5rem; }
}
</style>
</head>
<body background="nextb.jpg">
<div class="bg-image"></div>
<ul>
  <li><a class="index.php" href="#home">   &emsp;&emsp;&emsp; Home    </a></li>
  <li><a href="next.php">&emsp;&emsp;&emsp;&emsp; Platform    </a></li>
  <li><a href="#about">&emsp;&emsp;&emsp;&emsp; Developers      </a></li>
  </ul>
  <div><li></div>
  <div><li></div>
  <div><li></div>
    <h1>
  <div class="grid-container">
      <div> <h4> . </h4>   </div>
        <div>  <h4> . </h4>   </div>
          <div>   <h4> . </h4></div>

  <div>
  <img src="spo.jpg" alt="Avatar" style="width:50%">
    <h4><b><a href="main.php" >Spotify</b></a></h4>
  </div>
<div>
  <img src="app.png" alt="Avatar" style="width:50%">
  <h4><b><a href="#">Apple music</b></a></h4>
  </div>
<div>
  <img src="sound.png" alt="Avatar" style="width:50%">
  <h4><b><a href="#">Sound cloud</b></a></h4>
  </div>
<div >
  <img src="you.png" alt="Avatar" style="width:45%">
  <h4><b><a href="#">Youtube</b></a></h4>
  </div>
<div>
  <img src="xyz.png" alt="Avatar" style="width:50%">
  <h4><b> Search to listen..."<div class="container">
  <form action="http://musicsmasher.net" method="get" target="_blank" id="search-form">
    <input name="q" type="text" placeholder="Search to listen..." autocomplete="off" autofocus>
    <button type="button"><i class="fas fa-microphone"></i></button>
  </form>
  <p class="info"></p>
</div></b></h4>
  </div>
  </div>
</h1>
</body>
</html>
