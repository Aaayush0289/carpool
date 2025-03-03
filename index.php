<?php
include ("connection.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CARPOOL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="image/1.png" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
   <div class="top">
    <img src="image/cloud.png" alt="cloud" class="cloud">
   <h1><span class="car">CAR</span>POOL</h1>
   <h2>A CARPOLING WEBSITE.</h2>
   <br>
   <img src="image/cloud.png" alt="cloud" class="cloud2">
   <p><a href="offer.php" class="operation">OFFER A RIDE |</a>
   <a href="book.php"  class="operation">BOOK A RIDE</a></p>
   <img src="image/car.png" alt="car" class="cars">
   </div>
   <div class="middle-container">
    <div class="profile">
      <img src="image/hello.png" alt="" class="hello">
      <h2>Hello/Namaste</h2>
      <p class="intro">Carpooling (also car-sharing, ride-sharing and lift-sharing) is the sharing of car journeys so that more than one person travels in a car, and prevents the need for others to have to drive to a location themselves.</p>
    </div>
    <hr>
    <div class="skills">
      <h2>What we offer.</h2>
      <div class="skill-row">
        <img class="book" src="image/book.png" alt="">
        <h3>BOOK A RIDE</h3>
        <p>CARPOOL offers to book ride nearby your location for best price. For best company at lowest price, say CARPOOL!</p>
      </div>
      <div class="skill-row">
        <img class="offer" src="image/offer.png" alt="">
        <h3>OFFER A RIDE</h3>
        <p>Become a CARPOOL driver and save on travel costs by sharing your ride with passengers.</p>
      </div>
    </div>
    <hr>
    <div class="contact-me">
      <h2>Get In Touch</h2>
      <h3>We are here at your service 24/7</h3>
      <p class="intro">Our team is at your disposal to answer any questions by email or social media. You can also have a live chat directly with experienced members.</p>
      <a class="btn" href="mailto:chauhan654ayush@gmail.com">CONTACT US</a>
    </div>
  </div>
  
  
  <div class="bottom-container">
    <a class="footer-link" href="https://www.linkedin.com/">LinkedIn</a>
    <a class="footer-link" href="https://twitter.com/">Twitter</a>
    <a class="footer-link" href="https://www.xyzzz.com/">Website</a>
    <p>© AYUSH CHAUHAN,2022.</p>
  </div>  
  </body>
</html>
