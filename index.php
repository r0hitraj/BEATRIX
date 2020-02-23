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
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("1.jpg");
  width: 40em;

  /* Full height */
  height: 50%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

a {
    text-decoration: none;
    display: inline-block;
    padding: 16px 32px;
  }
.next {
  background-color:grey;
  color: white;
}
a:hover {
  background-color: #ddd;
  color: black;
}
</style>
</head>

<div class="bg">.</div>
<ul>
  <li><a class="index.php" href="#home">   &emsp;&emsp;&emsp; Home    </a></li>
  <li><a href="next.php">&emsp;&emsp;&emsp;&emsp; Platform    </a></li>
  <li><a href="#about">&emsp;&emsp;&emsp;&emsp; Developers      </a></li>
  </ul>
  <table style="width:100%">

  <tr>
    <th><font size="6" color="green">What is Beatrix?</th>
  </tr>
  <tr>
    <th><font size="5"  >With Beatrix,User can able to view and play the past 2 year songs available on the leading music streaming platforms.</font>
 </th>
  </tr>
  <tr>
    <th><font size="6" color="green">Why Beatrix?</font></th>
  </tr>
  <tr>
    <th><font size="5" >We  customized the content which is played by the user in last 2 year and show them according to the Generes,Album,& Artist present for a songs played.</font>
</th>
  </tr>
  <tr>
    <th><font size="6" color="green">Feel Safe To Share Your Credientials</font></th>
  </tr>
  <tr>
    <th><font size="5" >As Beatrix Use the API provided by the leading streaming platform it's 100% safe and Secure as  it is Authenticated by the music streaming platform itself.</font>
</th>
  </tr>
  <tr>
    <th><a href="next.php" class="next round">Proceed</a></th>
  </tr>
</table>
</body>
</html>
