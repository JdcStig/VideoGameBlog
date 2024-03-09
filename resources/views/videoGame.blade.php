{{-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto --}}

@extends('layouts.app')

@section('content')



<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="https://c4.wallpaperflare.com/wallpaper/204/1016/10/fallout-fallout-4-bethesda-softworks-wallpaper-preview.jpg" style="width:100%"  height="50%">
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="https://c4.wallpaperflare.com/wallpaper/344/567/657/video-games-bethesda-softworks-fallout-4-artwork-wallpaper-preview.jpg" style="width:100%"  height="50%">
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="https://wallpapercave.com/wp/wp9703306.jpg" style="width:100%" height="50%">
    </div>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    
    <script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
    </script>




@endsection