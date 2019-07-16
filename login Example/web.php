<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:http://localhost/practice/loginExample/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 70px;
  text-align: center;
  background: #1abc9c;
  color: brown;
    font-size: 30px;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */ 
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #d14;
  color: yellow;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aba;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>My Website</h1>
  <p>A website created by me.</p>
</div>

<div class="navbar">
  <a href="http://52.220.116.248" target="_blank">Portal</a>
  <a href="https://www.w3schools.com" target="_blank">W3 School</a>
  <a href="https://www.sarkariresult.com/" class="right" target="_blank">Resuls</a>
  <a href="https://www.tutorialspoint.com" target="_blank">Tutorial Point</a>
  <a href="https://www.javatpoint.com/" target="_blank">JavatPoint</a>
  <a href="https://www.javatpoint.com/java-tutorial" target="_blank">Java</a>
  <a href="https://www.geeksforgeeks.org/c-programming-language/" target="_blank">C Programming</a>
  <a href="https://www.w3schools.com/js/" target="_blank">JavaScript</a>
  <a href="https://www.geeksforgeeks.org/data-structures/" target="_blank">Data Structure</a>
  <a href="https://www.w3schools.com/python/" target="_blank">Python</a>
  <a href="https://www.w3schools.com/sql/default.asp" target="_blank">MySql</a>
  <a href="logout.php" target="_blank">Logout</a>
</div>

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Image 1:</h5>
    <img src="img1.jpg" style="width: 100%;height: 20%" />
    <p>Iam a software Engineer. I am from Delhi</p>
    <h3>More Text</h3>
    <p>This Website is very effective</p>
      <h3>Image 2:</h3>
    <img src="img4.jpg" style="width: 100%;height: 20%" /><br>
      <h3>Image 3:</h3>
    <img src="img5.jpg" style="width: 100%;height: 20%" /><br>
      <h3>Image 4:</h3>
    <img src="img1.jpg" style="width: 100%;height: 20%" />
  </div>
  <div class="main">
    <h2>TITLE HEADING</h2>
    <h5>Title description, Mar 7, 2019</h5>
      <h3>Image 5:</h3>
    <img src="img2.jpg" style="width: 100%;height: 20%" />
    <p>Some text..</p>
    <p>A flower, sometimes known as a bloom or blossom, is the reproductive structure found in flowering plants (plants of the division Magnoliophyta, also called angiosperms). The biological function of a flower is to effect reproduction, usually by providing a mechanism for the union of sperm with eggs. Flowers may facilitate outcrossing (fusion of sperm and eggs from different individuals in a population) or allow selfing (fusion of sperm and egg from the same flower). Some flowers produce diaspores without fertilization (parthenocarpy). Flowers contain sporangia and are the site where gametophytes develop. Many flowers have evolved to be attractive to animals, so as to cause them to be vectors for the transfer of pollen. After fertilization, the ovary of the flower develops into fruit containing seeds.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Mar 2, 2019</h5>
      <h3>Image 6</h3>
    <img src="img3.jpg" style="width: 100%;height: 20%" title="Flower" />
    <p>Some text..</p>
    <p>A rose is a woody perennial flowering plant of the genus Rosa, in the family Rosaceae, or the flower it bears. There are over three hundred species and thousands of cultivars. They form a group of plants that can be erect shrubs, climbing, or trailing, with stems that are often armed with sharp prickles. Flowers vary in size and shape and are usually large and showy, in colours ranging from white through yellows and reds. Most species are native to Asia, with smaller numbers native to Europe, North America, and northwestern Africa. Species, cultivars and hybrids are all widely grown for their beauty and often are fragrant. Roses have acquired cultural significance in many societies. Rose plants range in size from compact, miniature roses, to climbers that can reach seven meters in height. Different species hybridize easily, and this has been used in the development of the wide range of garden roses.</p>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
<h5></h5>
</div>

</body>
</html>
