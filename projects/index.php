<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id='favicon' rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-png">
    <title>Projects | Portfolio Munna Hasan</title>
</head>
<body oncontextmenu="return false">

<!-- navbar starts -->
<header>
        <a href="/" class="logo"><i class="fab fa-node-js"></i> Munna</a>

        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a href="/#home">Home</a></li>
            <li><a href="/#about">About</a></li>
            <li><a href="/#skills">Skills</a></li>
            <li><a href="/#education">Education</a></li>
            <li><a class="active" href="/#work">Work</a></li>
            <li><a href="/#experience">Experience</a></li>
            <li><a href="/#contact">Contact</a></li>
            </ul>
        </nav>
</header>
<!-- navbar ends -->

<!-- work project section starts -->
<section class="work" id="work">

  <h2 class="heading"><i class="fas fa-laptop-code"></i> Projects <span>Made</span></h2>
  
  <div id="filters" class="button-group">
    <button class="btn is-checked" data-filter="*">All Projects</button>
    <button class="btn" data-filter=".mern">MERN Stack</button>
    <button class="btn" data-filter=".lamp">LAMP Stack</button>
    <button class="btn" data-filter=".basicweb">Basic Web</button>
    <button class="btn" data-filter=".android">Android App</button>
    <button class="btn" data-filter=".android">Android App</button>
  </div>

  <div class="box-container">

     <!-- <div class="box tilt">
      <img src="/assets/images/projects/agecalc.PNG" alt="" />
      <div class="content">
        <div class="tag">
        <h3>Portfolio Website</h3>
        </div>
        <div class="desc">
          <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
          <div class="btns">
            <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="#" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div>   -->

  </div>

  <div class="backbtn">
    <a href="/#work" class="btn">
        <i class="fas fa-arrow-left"></i>
        <span>Back to Home</span>
  </a>
  </div>

</section>
<!-- work project section ends -->

<!-- scroll top btn -->
<a href="#work" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- vanilla tilt.js links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- isotope filter plugin cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

<script src="./script.js"></script>

</body>
</html>