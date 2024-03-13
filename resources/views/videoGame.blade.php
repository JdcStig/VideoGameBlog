{{-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto --}}
{{-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_image_gallery_scroll --}}



@extends('layouts.app')

@section('content')

<body>

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
    



  <div class="left-padding ">
       

        <div class="game-position">
            <h2 class="game-header">
              FALLOUT 4: GAME OF THE YEAR EDITION
            </h2>
            
            <p class="game-text">
              Get the complete post-nuclear adventure from Bethesda Game Studios and winner of more than 200 ‘Best Of’ awards, including the DICE and BAFTA Game of the Year. Fallout 4 G.O.T.Y. includes the critically acclaimed core game and all six official add-ons including Automatron, Wasteland Workshop, Far Harbor, Contraptions Workshop, Vault-Tec Workshop, and Nuka-World. Please note that Fallout 4 add-ons are not pre loaded on the Fallout 4 disc. You must download all add-ons via the code provided in the box. Additional content is approx. 10-15GB depending on platform.

              As the sole survivor of Vault 111, you enter a world destroyed by nuclear war. Every second is a fight for survival, and every choice is yours. Only you can rebuild and determine the fate of the Wasteland. Welcome home. 
            </p>

        </div>

  <div>
  

  </div>

        <div>
          <img id="game-image" src="https://images.ctfassets.net/rporu91m20dc/2SL7cJCTf2Y8YoaA0UOOq6/19edacd0ba49d9543c46bd128d3a9e02/fo--buy--goty-box-art.jpg?q=70&&&fm=webp" width="300px" alt="">
      </div>

        </div>
    </div>

    <h2 class="game-header-dlc">
      FALLOUT 4: DLCs
    </h2>



    <div class="scroll-container">
      <img src="https://images.ctfassets.net/rporu91m20dc/U9ao8TIeceY6ae0uA4KWy/25e64c54f35123d4d0a57ebb0300f077/81150_6_1.jpg?q=70&&&fm=webp" alt="DLC1" width="400" height="265">
      <img src="https://images.ctfassets.net/rporu91m20dc/5CSbWpZ41qoiSKyqCQIq2i/756f132850738c2fe5d570ceba6dc921/82490_6_1.jpg?q=70&&&fm=webp" alt="DLC2" width="400" height="265">
      <img src="https://images.ctfassets.net/rporu91m20dc/1hxMzUKF9kIqWkAE0WIsUG/eebde2e811e66aa446e791d8d43f8060/85225_6_1.jpg?q=70&&&fm=webp" alt="DLC3" width="400" height="265">
        <img src="https://images.ctfassets.net/rporu91m20dc/2LvnqrAr3GYGQIKkAyGGYq/cca4b2054390d4ba0f6d96453f607c06/90278_6_1.jpg?q=70&&&fm=webp" alt="DLC4" width="400" height="265">
        <img src="https://images.ctfassets.net/rporu91m20dc/3Y5Y9u46vuIQcIIsGuQKyi/07fdf7cc51cd049de990d0a55911a26a/89535_6_1.jpg?q=70&&&fm=webp" alt="DLC5" width="400" height="265">
        <img src="https://images.ctfassets.net/rporu91m20dc/4zh6mXlNeo8aCg4gmUWqyg/4f203a2bcf6d171134bc3dce9803888c/94061_6_1.jpg?q=70&&&fm=webp" alt="DLC6" width="400" height="265">
        

    </div>

    <h2 class="game-header-dlc">
      Are you ready to exit the vault and explore The Waste Lands?
    </h2>

<div class="padding">
    <iframe width="1250" height="550" src="https://www.youtube.com/embed/X5aJfebzkrM?si=66dLNtGhlSZyyTnN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

    <p class = "py-pad text-show text-l">
      In the aftermath of nuclear devastation, the Commonwealth emerges as a sprawling canvas of survival, mutated landscapes, and moral ambiguity. Welcome to the post-apocalyptic masterpiece that is Fallout 4. Developed by Bethesda Game Studios and released in 2015, Fallout 4 takes players on a journey through the remnants of a once-thriving world, inviting them to navigate the challenges of a shattered society and unravel the mysteries that lie beneath the surface.</p>
      <p class = "py-pad text-show text-l">Set in and around the ruins of Boston, Massachusetts, Fallout 4's open-world setting is a stark and hauntingly beautiful portrayal of a world forever altered by nuclear war. The Commonwealth is a vast expanse, showcasing both the desolation of the wasteland and the pockets of life struggling to endure amidst the rubble. From the iconic cityscape to the irradiated wilderness, every corner holds secrets waiting to be uncovered.
    </p>

    <div class="map">
    <iframe class="falloutmap" src="https://www.google.com/maps/d/embed?mid=1GP3QtQFvcDiezEVWJ-VnteAULXs&hl=en_US&ehbc=2E312F" width="640" height="480"></iframe>
    </div>


</body>

@endsection