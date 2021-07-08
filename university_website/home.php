<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<?php
      include('style-header.php');
    ?>                                                    
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
 <style>
      #grad1 {
  height: 1000px;
  background-color: white; /* For browsers that do not support gradients */
  background-image: url("image/background1.jpg");
  background-size: cover;
}

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active, .dot:hover {
  background-color: #717171;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.button {
  background-color: #87CEFA; /*  */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {width: 250px;}
}

</style>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
    alert("Hello! I am an alert box!!");
      
      $('#prov input').on('change',function(){
        var selected_prov=$("[type='radio']:checked").val();
        alert(selected_prov);

      })

      $('#minat input').on('change',function(){
        var selected_minat=$("[type='radio']:checked").val();
        alert(selected_minat);
        alert($("[type='radio']:checked").val());

      })

      $(".display").mouseenter(function(){
        $(this).css("background-color","gainsboro");
      });

      $(".display").mouseleave(function(){
        // alert("The paragraph was clicked.");
        $(this).css("background-color","Silver");
      });
  });

  
</script>

    <title>Home</title>
</head>

<body id="grad1">
  <?php
   include('header.php');
  ?>
  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/ugm.jpg" style="width:100%">
  <div class="text"><a class="button button1" href="pencarian_univ_idaman.php">Cari Universitas Idaman</a></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/tour.jpg" style="width:100%">
  <div class="text"><a class="button button1" href="form_daftar_universitas.php">Berkunjung ke Universitas Impian!</a></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/tourguide.jpg" style="width:100%">
  <div class="text"><a class="button button1" href="form-daftar.php">Jadi Tour Guide di Universitasmu!</a></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>