import React from 'react';
<template>
<div class="intro">
<div class="container">
  <div class="slideshow-container">
    <div class="mySlides fade" style="display: block;">
<!--      <div class="numbertext">1 / 3</div>-->
      <img class="slideImage" src="../assets/image/slide1.jpg" alt="">
    </div>

    <div class="mySlides fade">
<!--      <div class="numbertext">2 / 3</div>-->
      <img class="slideImage" src="../assets/image/slide2.jpg" alt="">
    </div>

    <div class="mySlides fade">
<!--      <div class="numbertext">3 / 3</div>-->
      <img class="slideImage" src="../assets/image/slide3.jpg" alt="">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  <div style="text-align: center">
    <span class="dot active" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</div>
</div>
</template>

<script>
export default {
  name: "Home"
}
</script>
