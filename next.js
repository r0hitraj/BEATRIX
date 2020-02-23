
<!DOCTYPE html>
<html>
<head>
<style >
  body, html {
  height: 100%;
  margin: 0;
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
  background-color: white;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
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
  background-color: #025677;
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
  background-color: transparent;
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
<ul>
  <li><a class="index.php" href="#home">   &emsp;&emsp;&emsp; Home    </a></li>
  <li><a href="next.js">&emsp;&emsp;&emsp;&emsp; Platform    </a></li>
  <li><a href="#about">&emsp;&emsp;&emsp;&emsp; Developers      </a></li>
  </ul>
  <div><li></div>
  <div><li></div>
  <div><li></div>
  <div class="grid-container">
  <div>
  <img src="spo.jpg" alt="Avatar" style="width:50%">
    <h4><b><a href="main.php" >Spotify</b></a></h4>
  </div>
<div>
  <img src="app.png" alt="Avatar" style="width:50%">
  <h4><b>Apple music</b></h4>
  </div>
<div>
  <img src="sound.png" alt="Avatar" style="width:50%">
  <h4><b>Sound</b></h4>
  </div>
<div >
  <img src="you.png" alt="Avatar" style="width:45%">
  <h4><b>Youtube</b></h4>
  </div>
<div>
  <img src="com.JPG" alt="Avatar" style="width:50%">
  <h4><b><div class="container">
  <form action="http://musicsmasher.net/" method="get" target="_blank" id="search-form">
    <input name="q" type="text" placeholder="Search to listen..." autocomplete="off" autofocus>
    <button type="button"><i class="fas fa-microphone"></i></button>
  </form>
  <p class="info"></p>
</div></b></h4>
  </div>
  </div>
</body>
</html>
