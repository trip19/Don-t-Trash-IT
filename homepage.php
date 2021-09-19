<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Homepage_css.css?v=<?php echo time(); ?>">
  <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="Plasty" 
  chat-icon="Plasty-TheBot.png"
  agent-id="3a75ae5a-aa88-4a5b-9d82-813cbf7681a1"
  language-code="en"
></df-messenger>
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
    <div class="login" ><a href="login.php">login/signup</a></div>
  </div>
  <!--home-->
  <div id="home">
    <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="img1.jpeg" style="width:100%; height: 723px;">
        <div class="text">Plastic pollution free world is not a choice but a commitment to life - a commitment to next generation ~ Amit ray</div>
      </div>
      
      <div class="mySlides fade">
        <img src="img2.jpeg" style="width:100%; height: 723px;">
        <div class="text">Reuse it or refuse if, Beat plastic pollution ~ Saurav Banerjee</div>
      </div>
      
      <div class="mySlides fade">
        <img src="img3.jpeg" style="width:100%; height: 723px;">
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
         <ul >
          <li id="fact1" onload="fact_fetch()"><img src="img4.png">Some tea bags release microplastic in your drinks.</li>
          <li id="fact2" onload="fact_fetch()"><img src="img5.png"> WorldEconomicForum has predicted that By 2050 there will be more plastic than fish in the ocean.</li>
          <li id="fact3" onload="fact_fetch()"><img src="img6.png">Around the world, nearly a million plastic beverage bottles are sold every minute.</li>
          <li id="fact4" onload="fact_fetch()"><img src="img7.png"> 69k pounds of plastic enter the ocean every 2 and a half minutes.</li>
         </ul>
       </div>
  </div>

  <!--blogs-->
  <div id="blogs">
    <h1>From the blog</h1>
    <div class="container2">
    <div class="blog-card">
      <h2>One small step.</h2>
      <p>When you wake up at the end of your life, and notice the beauty you once knew isn’t there any longer would you feel relieved that you no longer have to be apart of it? Or do you think you would feel sadness because the children of the world now <a href="#">Read more</a></p>
      <h3>-BethanyRose Boutwell</h3>
    </div>
    <div class="blog-card">
      <h2>Plastics Are Taking Over The Oceans, And It’s All My Fault.</h2>
      <p>Look, if I never had to take a public speaking class, the world wouldn’t be in the predicament that we are in. Covid?No. I’m Not talking Covid, though who knows, that could be a by product of <a href="#">Read more</a></p>
      <h3>-zoomplanet</h3>
    </div>
    <div class="blog-card">
      <h2>A world free from plastic pollution is no longer a dream. Aussie startup ULUU leads the way</h2>
      <p>I have a love-hate relationship with plastic. I love all the amazing things it has created for us, but I hate the environmental impacts it has. <a href="#">Read more</a></p>
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
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <p>15-days challenge</p>
      </div>
      <div class="flip-card-back">
        <p>Follow this fun 15 day challenge to reduce plastic usage for a Healthier life. Carry out simple tasks to make the environment cleaner</p>
      </div>
    </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <p>30-days challenge</p>
      </div>
      <div class="flip-card-back">
        <p>Follow this exciting 30 day to eliminate plastic wastage from your surroundings. Carry out simple tasks to make the environment cleaner</p>
      </div>
    </div>
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
  let facts;
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

  fetch("facts.json")
  .then(function(resp){
    return resp.json() ;
  })
  .then(function(data){
    console.log(data);
  });

  function fact_fetch(){
    let facts = JSON.parse(data);
    var i = 0 ;
    for(i = 0;i< facts.length;i++){
      document.getElementById("fact1")=facts[i].fact;
      document.getElementById("fact2")=facts[i+1].fact;
      document.getElementById("fact3")=facts[i+2].fact;
      document.getElementById("fact4")=facts[i+3].fact;
    }
  }
  </script>
</body>
</html>
