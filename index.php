<?php

   include('connect.php');
   // include('arrays.php');

   // Step 2: Preform Database Query
   $query = "SELECT * FROM portfolio";
   $result = mysqli_query($connection, $query);
   // Check there are no errors with our SQL statement
   if (!$result) {
     die ("Database query failed.");
   }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes, width=device-width, maximum-scale=1.0" />
    <meta charset="utf-8">
    <title>Brendan Russo</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>


    <div class="full">
      <ul>
        <li><h1>BRENDAN RUSSO</h1></li>
        <li class="bold"><a href="#about">about</a></li>
        <li class="bold"><a href="#dp">the zine</a></li>
        <li><a href="mailto:russobrendanm@gmail.com">email me</a></li>
        <li><a target="_blank" href="https://www.instagram.com/brendanr.us/">instagram</a></li>
      </ul>
      <div class="bgvideo">
      <video loop autoplay muted id="videohome">
     		<source src="video/backgroundvid.mp4.mp4" type="video/mp4">
     		<source src="video/backgroundvid.webmhd.webm" type="video/webm">
     		<source src="/images/mainbg.jpg">
     	</video>
      </div>

    </div>

    <div class="about" id="about">
      <img class="about2" src="img/about2big.jpg" alt="portrait">
      <div class="aboutInfo">
        <ul class="aboutText">
          <li><h3>BRENDAN RUSSO</h3></li>
          <li>Designer</li>
          <li>Front-end Developer</li>
          <li>Wannabe Artist</li>
          <li><a href="mailto:russobrendanm@gmail.com">Need something?</a></li>
        </ul>

      </div>
    </div>

    <div id="dp" class="project">
      <!--<div id="nav">
        <img src="img/logo.png" alt="logo">
        <div class="navBlock"></div>
        <div class="navBlock"><a href="#fader"></a></div>
        <div class="navBlock"></div>
        <div class="navBlock"></div>
        <div class="navBlock"><a href="#kanye"></a></div>
      </div>-->
      <div id="dpBox" class="sideBox">

      </div>
      <div id="dpImgs">
        <img id="dp1" src="img/dp1.png" alt="datpiff screenshot">
        <img id="dp2" src="img/dp2.png" alt="datpiff screenshot">
        <img id="dp3" src="img/dp3.png" alt="datpiff screenshot">
      </div>
      <div id="dpInfo">
      <h1>datPiff Redesign</h1>
        <p class="dpP">	A site redesign for datPiff. datPiff is a mixtpe sharing site. Many well known artists release their music on datPiff. The site focuses on allowing users to discover and share new music. The goal of my redesign was to centralize that focus even more. I created a more streamlined experience for users. Click <a href="project.php?id=1">here</a> for more info!</p>
      </div>
    </div>

    <div id="int1" class="interlude">
      <img id="bigger1" src="img/interlude<?php $random = rand(1,7); echo $random; ?>.jpg" alt="">
      <img id="smaller1" src="img/interlude<?php $random = rand(1,7); echo $random; ?>.jpg" alt="">
    </div>

    <div id="fader" class="project">
      <div id="faderBox" class="sideBox">

      </div>
      <div id="faderImgs">
        <img id="fader1" src="img/fader1.png" alt="fader screenshot">
        <img id="fader2" src="img/fader2.png" alt="fader screenshot">
        <img id="fader3" src="img/fader1.png" alt="fader screenshot">
      </div>
      <div id="faderInfo">
        <h1>theFADER Redesign</h1>
        <p class="faderP">	A site redesign for theFADER. FADER is a pop culture magazine focusing on music and fashion. They have become a well known publication in the hip-hop, indie, and streetwear worlds. Their covers are quite prolific featuring stunning portraits of well known artists. I chose to redesign their site at three breakpoints focusing on this amazing imagery. Click <a href="project.php?id=2">here</a> for more info! </p>
      </div>
    </div>

    <div id="int2" class="interlude">
      <img id="bigger2" src="img/2interlude<?php $random = rand(1,7); echo $random; ?>.jpg" alt="">
      <img id="smaller2" src="img/2interlude<?php $random = rand(1,7); echo $random; ?>.jpg" alt="">
    </div>

    <div id="kanye" class="project">
      <div id="kanyeBox" class="sideBox">

      </div>
      <div class="kanyeImgs">
        <img id="kanye1" src="img/kanye1.jpg" alt="kanye screenshot">
        <img id="kanye2" src="img/kanye2.jpg" alt="kanye screenshot">
        <img id="kanye3" src="img/kanye3.jpg" alt="kanye screenshot">
      </div>
      <div id="kanyeInfo">
        <h1>Kanye West Zodiac</h1>
        <p class="kanyeP">	In order to gain more experience in Javascript I worked on a zodiac calculator. This calculator asks for a birth date and runs that information through several scripts that assign you to a specific Kanye West song. The site calculates your song and then presents your result with audio and video. Click <a href="project.php?id=3">here</a> for more info!</p>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.js"
      integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="scroll.js"></script>
  </body>
</html>
