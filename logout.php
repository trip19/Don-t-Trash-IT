<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Don't Trash IT</title>
</head>
<body>
  <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
      <div>
        <div>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#facts">Facts about plastic</a></li>
            <li><a href="#blogs">Blogs</a></li>
            <li><a href="#challenges">Daily challenges</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="logo">Don't Trash IT</div>
    <div class="login" ><a href="#">login/signup</a></div>
  </div>
  <!--home-->
  <div id="home">
    <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="img1.jpeg" style="width:100%; height: 650px;">
        <div class="text">Plastic pollution free world is not a choice but a commitment to life - a commitment to next generation ~ Amit ray</div>
      </div>
      
      <div class="mySlides fade">
        <img src="img2.jpeg" style="width:100%; height: 650px;">
        <div class="text">Reuse it or refuse if, Beat plastic pollution ~ Saurav Banerjee</div>
      </div>
      
      <div class="mySlides fade">
        <img src="img3.jpeg" style="width:100%; height: 650px;">
        <div class="text">Food belongs here, Bottles don't</div>
      </div>
      
      </div>
      
      <div class="dot-section" style="text-align:center; display: none;">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>
  </div>
  <!--facts-->
  <div id="facts">
       <div class="container1">
         <h1>Did you know?</h1>
         <ul>
          <li><img src="img4.png">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum corrupti, fuga facilis ab minus odio deleniti, nesciunt, repudiandae corporis dolorem vitae id enim unde explicabo asperiores autem. Aut, libero saepe!</li>
          <li><img src="img5.png">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod suscipit ullam tenetur provident aliquam culpa, reprehenderit odit incidunt laborum placeat quibusdam molestias quos dicta saepe quo odio explicabo sapiente doloribus!</li>
          <li><img src="img6.png">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi laudantium dolor vitae hic aliquid aliquam ratione inventore non animi, consequatur amet adipisci asperiores est officia veniam, incidunt maiores commodi ipsa?</li>
          <li><img src="img7.png">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga cum similique assumenda eos, voluptatibus tempore esse molestias officia, sapiente itaque fugit inventore maiores ad quia molestiae? Ullam laudantium repellat consequuntur.</li>
         </ul>
       </div>
  </div>

  <!--blogs-->
  <div id="blogs">
    <h1>From the blog</h1>
    <div class="container2">
    <div class="blog-card">
      <h2>One small step.</h2>
      <p>When you wake up at the end of your life, and notice the beauty you once knew isn’t there any longer would you feel relieved that you no longer have to be apart of it? Or do you think you would feel sadness because the children of the world now<a href="#">Read more</a></p>
      <h3>-BethanyRose Boutwell</h3>
    </div>
    <div class="blog-card">
      <h2>Plastics Are Taking Over The Oceans, And It’s All My Fault.</h2>
      <p>Look, if I never had to take a public speaking class, the world wouldn’t be in the predicament that we are in. Covid?No. I’m Not talking Covid, though who knows, that could be a by product of <a href="#">Read more</a></p>
      <h3>-zoomplanet</h3>
    </div>
    <div class="blog-card">
      <h2>A world free from plastic pollution is no longer a dream. Aussie startup ULUU leads the way</h2>
      <p>I have a love-hate relationship with plastic. I love all the amazing things it has created for us, but I hate the environmental impacts it has.<a href="#">Read more</a></p>
      <h3>-Dominic White</h3>
    </div>
  </div>
  <!--<div class="more"><a class="button" href="#">Go to blog</a></div>-->
  </div>

  <!--daily challenges-->
<div id="challenges">
  <h1>Want to reduce your plastic footprint?</h1>
  <h2>Take plastic reduction challenges everyday to reduce your plastic footprint and contribute to making the environment clean</h2>
  <div class="challenge">
  <div class="card">
    <p><a href="#">15-days challenge</a></p>
  </div>
  <div class="card">
    <p><a href="#">30-days challenge</a></p>
  </div>
</div>
</div>

  <!--contact-->
  <div id="contact">
    <div class="left">
      <ul>
        <li><a href="#">Join our community</a></li>
        <li><a href="#">Connect with NGOs</a></li>
        <li><a href="#">Contact us for more info</a></li>
      </ul>
      <div class = "socials">
        <a href="#"><img src="instagram.png" ></a>
          <a href="#"><img src="twitter.png" ></a>
          <a href="#"><img src="linkedin.png" ></a>
        </div>
    </div>
    <div class="right">
      <h1>Contact.</h1>
      <form >
        <textarea placeholder="Type your message here"></textarea>
        <button type="submit">Send</button>
      </form>
      
    </div>
    
  </div>

<script>
  var slideIndex = 0;
  showSlides();
  
  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
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
</body>
</html>