<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]--><head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Архітектурбуд</title>

  <link rel="stylesheet" href="css/normalize.css" />
  
  <link rel="stylesheet" href="css/foundation.css" />
  
  <script src="js/jquery-1.4.2.min.js"></script>
  <script src="js/TweenMax.min.js"></script>  
  <script src="js/vendor/custom.modernizr.js"></script>
  <script src="js/scripts/load_scripts.js"></script>

<style type="text/css">
/* Preloader */
#preloader {
	position:fixed;
	top:0;
	left:0;
	right:0;
	bottom:0;
	background-color:#fff; /* change if the mask should have another color then white */
	z-index:100000; /* makes sure it stays on top */
}

#status {
	width: 200px;
	height: 200px;
	position: fixed;
	left: 50%; /* centers the loading animation horizontally one the screen */
	top: 50%; /* centers the loading animation vertically one the screen */
	background-image: url(img/status.gif); /* path to your loading animation */
	background-repeat: no-repeat;
	background-position: center;
	margin: -100px 0 0 -100px; /* is width and height divided by two */
}
.shadow_effect {
	height: 100%;
	width: 100%;
	background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,0.3) 30%, rgba(116,116,116,0.7) 100%);
	background: -webkit-gradient(radial, center center, 0px, center center, 30%, color-stop(0%,rgba(255,255,255,0.3)), color-stop(100%,rgba(116,116,116,0.7)));
	background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,0.3) 30%,rgba(116,116,116,0.7) 100%);
	background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,0.3) 30%,rgba(116,116,116,0.7) 100%);
	background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,0.3) 30%,rgba(116,116,116,0.7) 100%);
	background: radial-gradient(center, ellipse cover, rgba(255,255,255,0.3) 30%,rgba(116,116,116,0.7) 100%);
}

.pattern_black {
	background-image: url(img/dark_wall.png);
	background-repeat: repeat;
	height: 100%;
	width: 100%;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	padding-top: 50px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
}

h1 {
	font-size: 60px;
	color: #FFF;
	text-decoration: none;
	font-family: "Wolfgang_Amadeus_Mozart";
	text-align: center;
	font-weight: 200;
}
h2 {
	font-size: 24px;
	color: #FFF;
	text-decoration: none;
	font-family: "OpenSans-CondLight";
	text-align: center;
	font-weight: 200;
}
p {
	font-size: 16px;
	font-weight: 100;
	color: #FFF;
	text-decoration: none;
	font-family: OpenSans-CondLight;
	line-height: 16px;
}
p span{
	font-family: "Wolfgang_Amadeus_Mozart";
	padding-right: 30px;
	font-size: 38px;
}
.section .content .large-block-grid-5 li {
	text-align: center;
	color:#FFF;
}
#left_box {
	float:right;
	z-index: 100;
}
#left {
	position: absolute;
	background-image: url(img/left_btn_img.jpg);
	background-repeat: no-repeat;
	height: 147px;
	width: 295px;
}
#left_hover {
	position: relative;
	background-image: url(img/dark_wall.png);
	height: 147px;
	width: 295px;
	background-repeat: repeat;
	text-align: justify;
	padding-top: 35px;
	padding-right: 35px;
	padding-bottom: 25px;
	padding-left: 35px;
}

#right_box {
	float:left;
	z-index: 100;
}
#right {
	position: absolute;
	background-image: url(img/right_btn_img.jpg);
	background-repeat: no-repeat;
	height: 147px;
	width: 295px;
}
#right_hover {
	position: relative;
	background-image: url(img/dark_wall.png);
	background-repeat: repeat;
	height: 147px;
	width: 295px;
	text-align: justify;
	padding-top: 35px;
	padding-right: 35px;
	padding-bottom: 25px;
	padding-left: 35px;
}

.img {
	z-index: 1;
}
.img_hover {
	z-index: 0;
	transform: rotateX(90deg);
	-webkit-transform: rotateX(90deg);
	-moz-transform: rotateX(90deg);
	-o-transform: rotateX(90deg);
	-ms-transform: rotateX(90deg);		
}

#line_black {
	background-image: url(img/line_black.png);
	height: 56px;
	width: 100%;
	margin-top: 10px;
	z-index: 100;
	background-size: cover;
	background-position: center bottom;
	background-repeat: no-repeat;
}
#line  {
	background-image: url(img/line.png);
	height: 28px;
	width: 100%;
	background-position: center;
	background-size: cover;
	z-index: 100;
	margin-top: -10px;
}
#line_scroll {
	z-index: 100;
	background-image: url(img/line_scroll.png);
	background-repeat: no-repeat;
	background-position: center;
	height: 29px;
	width: 144px;
	margin-right: auto;
	margin-left: auto;
	background-size: cover;
	margin-top: -5px;
}
a.share {
	opacity:1;
}

a.share:hover {
	opacity:0.5;
}

@media (min-width: 980px) {

.top-bar-section li a:not(.button) {
	background:transparent;
}

.top-bar {
	padding-top:20px;
	background:transparent;}

nav.top-bar {
	width:1000px;
	height:70px;
	margin-left:auto;
	margin-right:auto;}
		
.divider {
	display:none;}

#logo {
	background-image:url(img/menu_bnt_img.png);
	background-size:cover;
	width:503px;
	height:87px;
	margin-left:auto;
	margin-right:auto;}
			
#menu-left {
	width:603px;
	height:87px;
	position:relative;
	top:-30px;
	left:100px;}

#menu-right {
	width:130px;
	height:87px;
	position:absolute;
	top:13px;
	right:100px;}

#left-1 {
	height: 70px;
	width: 70px;
	position: absolute;
	left: 4.35%;
	top: 23.25%;
}

#left-2 {
	height: 70px;
	width: 70px;
	position: absolute;
	left: 4.35%;
	top: 38.75%;
}

#left-3 {
	height: 70px;
	width: 70px;
	position: absolute;
	left: 4.35%;
	top: 54.25%;
}

#left-4 {
	height: 70px;
	width: 70px;
	position: absolute;
	right: 4.85%;
	top: 23.25%;
}

#left-5 {
	height: 70px;
	width: 70px;
	position: absolute;
	right: 4.85%;
	top: 38.75%;
}

#left-6 {
	height: 70px;
	width: 70px;
	position: absolute;
	right: 4.85%;
	top: 54.25%;
}

.sub-menu {
	opacity: 0;
	text-shadow: 1px 1px 2px #000;
	width:70px;
	height:70px;
	border-radius:50%;
	padding-top:28px;
	margin-left:1px;

background: -moz-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%, rgba(0,0,0,0.5) 100%); /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(127,127,127,1)), color-stop(100%,rgba(0,0,0,0.5))); /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* IE10+ */
background: radial-gradient(ellipse at center, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7f7f7f', endColorstr='#80000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
	
}

.sub-menu-2 {
	opacity: 0;
	text-shadow: 1px 1px 2px #000;
	width:70px;
	height:70px;
	border-radius:50%;
	padding-top:20px;
	margin-left:1px;

background: -moz-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%, rgba(0,0,0,0.5) 100%); /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(127,127,127,1)), color-stop(100%,rgba(0,0,0,0.5))); /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* IE10+ */
background: radial-gradient(ellipse at center, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7f7f7f', endColorstr='#80000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
	
}

}

@media (min-width: 980px) and (max-width: 1250px) {
#left-1 {
	height: 55px;
	width: 55px;
	position: absolute;
	left: 4.55%;
	top: 23.9%;
}

#left-2 {
	height: 55px;
	width: 55px;
	position: absolute;
	left: 4.55%;
	top: 39.1%;
}

#left-3 {
	height: 55px;
	width: 55px;
	position: absolute;
	left: 4.55%;
	top: 54.55%;
}

#left-4 {
	height: 55px;
	width: 55px;
	position: absolute;
	right: 5.15%;
	top: 23.6%;
}

#left-5 {
	height: 55px;
	width: 55px;
	position: absolute;
	right: 5.2%;
	top: 38.75%;
}

#left-6 {
	height: 55px;
	width: 55px;
	position: absolute;
	right: 5.2%;
	top: 54.65%;
}
.sub-menu {
	opacity: 0;
	text-shadow: 1px 1px 2px #000;
	width:55px;
	height:55px;
	border-radius:50%;
	padding-top:18px;
	margin-left:1px;

background: -moz-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%, rgba(0,0,0,0.5) 100%); /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(127,127,127,1)), color-stop(100%,rgba(0,0,0,0.5))); /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* IE10+ */
background: radial-gradient(ellipse at center, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7f7f7f', endColorstr='#80000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
	
}

.sub-menu-2 {
	opacity: 0;
	text-shadow: 1px 1px 2px #000;
	width:55px;
	height:55px;
	border-radius:50%;
	padding-top:10px;
	margin-left:1px;

background: -moz-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%, rgba(0,0,0,0.5) 100%); /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(127,127,127,1)), color-stop(100%,rgba(0,0,0,0.5))); /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* IE10+ */
background: radial-gradient(ellipse at center, rgba(127,127,127,1) 0%,rgba(0,0,0,0.5) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7f7f7f', endColorstr='#80000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
	
}

#menu-right {
	width:130px;
	height:87px;
	position:absolute;
	top:13px;
	right:100px;}

}

@media (min-width: 768px) and (max-width: 979px) {
#left-1 {
	height: 50px;
	width: 50px;
	position: absolute;
	left: 4.5%;
	top: 22.7%;
}

#left-2 {
	height: 50px;
	width: 50px;
	position: absolute;
	left: 4.5%;
	top: 38.75%;
}

#left-3 {
	height: 50px;
	width: 50px;
	position: absolute;
	left: 4.5%;
	top: 54.25%;
}

#left-4 {
	height: 50px;
	width: 50px;
	position: absolute;
	right: 5.3%;
	top: 22.5%;
}

#left-5 {
	height: 50px;
	width: 50px;
	position: absolute;
	right: 5.3%;
	top: 38.75%;
}

#left-6 {
	height: 50px;
	width: 50px;
	position: absolute;
	right: 5.3%;
	top: 54.25%;
}
.section-container.auto section .title a,
.section-container.auto .section .title a {
	font-size: 19px;
}
#menu-right {
	width:100%;
	height:100%;}

.sub-menu {
	display:none;
}

.sub-menu-2 {
	display:none;
}

}
@media (max-width: 767px) {

#logo {
	background-image: url(img/main_logo.png);
	background-size:cover;
	width:193px;
	height:45px;
}

#left_box {
	float: none;
	z-index: 100;
}

#left {
	background-image: url(img/left_btn_img.jpg);
	background-repeat: no-repeat;
	height: 147px;
	width: 295px;
	margin-left:auto;
	margin-right:auto;
	margin-top: 50px;
	position:static;
}

#right_box {
	float: none;
	z-index: 100;
}

#right {
	position: absolute;
	background-image: url(img/right_btn_img.jpg);
	background-repeat: no-repeat;
	height: 147px;
	width: 295px;
	margin-left:auto;
	margin-right:auto;
	margin-top: 50px;
	margin-bottom: 50px;
	position:static;
}

.center {
	text-align:center;
	float:none;
}
#menu-right {
	width:100%;
	height:100%;}

}

@media (min-width: 1251px) {

#left-1 {
	height: 70px;
	width: 70px;
	position: absolute;
	left: 4.35%;
	top: 23.25%;
}

#left-2 {
	height: 70px;
	width: 70px;
	position: absolute;
	left: 4.35%;
	top: 38.75%;
}

#left-3 {
	height: 70px;
	width: 70px;
	position: absolute;
	left: 4.35%;
	top: 54.25%;
}

#left-4 {
	height: 70px;
	width: 70px;
	position: absolute;
	right: 4.85%;
	top: 23.25%;
}

#left-5 {
	height: 70px;
	width: 70px;
	position: absolute;
	right: 4.85%;
	top: 38.75%;
}

#left-6 {
	height: 70px;
	width: 70px;
	position: absolute;
	right: 4.85%;
	top: 54.25%;
}

}
</style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41998152-1', 'arhitecturbud.com');
  ga('send', 'pageview');

</script>
</head>
<body>
<!--preloader-->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>

<!-- Preloader -->
<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$("#status").fadeOut(); // will first fade out the loading animation
			$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
		})
	//]]>
</script> 

<div class="shadow_effect">
<!-- Navigation -->
 
  <nav class="top-bar">
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
		<div id="logo"></div>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>меню</span></a></li>
    </ul>
 
    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <div id="menu-left">
      <ul>
        <li class="divider"></li>
        <li><a href="index.html">Головна</a></li>
        <li class="divider"></li>
        <li><a href="about.html">Про Нас</a></li>
        <li class="divider"></li>
        <li><a href="portfolio.html">Портфоліо</a></li>
        <li class="divider"></li>
        <li><a href="catalog.html">Каталог</a></li>
        <li class="divider"></li>
        <li><a href="tech.html">Технологія</a></li>
        <li class="divider"></li>
        <li><a href="contacts.html">Контакти</a></li>
      </ul>
      </div>
      
      <div id="menu-right">
      <ul>
        <li class="divider"></li>
        <li><a href="index.html">Укр</a></li>
        <li class="divider"></li>
        <li><a href="rus/index.html">Рус</a></li>
        <li class="divider"></li>
        <li><a href="pl/index.html">Pl</a></li>
      </ul>
      </div>

    </section>
  </nav>
 
  <!-- End Top Bar -->
 
<br/><br/>
  <div class="row" style="max-width:62.5em">
    <div class="large-12 columns">
      <h1 style="color:#000; font-size:72px">Контакти</h1>
    </div>
  </div>

  <div id="line_black">
  	<div id="line_scroll"></div>
  	<div id="line"></div>
  </div>
  
</div><!-- End shadow effect -->

<div class="pattern_black"> 

  <div class="row">
  	<div class="large-12 column" style="text-align:center">
<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "rserg7@gmail.com";
    $email_to = "arhitecturbud@ukr.net";
     
    $email_subject = "Архітектурбуд форма зворотнього зв'язку";
     
     
    function died($error) {
        // your error code can go here
        echo "<h2 style='color: white'>Нам дуже шкода, але були знайдені помилки в формі.</h2> ";
        echo "<h2 style='color: white'>Помилки подані нижче.</h2><br /><br />";
        echo $error."<br /><br />";
        echo "<h2 style='color: white'>Будь-ласка поверніться та виправіть помилки.</h2><br /><br />";
		echo "
    <footer class='row'>
  <div class='large-12 columns'><hr />
      <div class='row'>

        <div class='large-4 columns center'>
          <div class='row'>
            <div class='large-8 columns'>
              <div class='row'>
                <div class='large-12 columns' style='text-align:center; margin-top:15px; margin-bottom:13px'>
                  <a href='#' style='font-size:18px'>arhitecturbud@ukr.net</a>
                </div>
              </div>
              <div class='row hide-for-small'>
                <div class='large-3 columns' style='padding-left:10px; padding-right:0px'>
                  <a class='share' href='#'><img src='img/share_vk.png' /></a>
                </div>
                <div class='large-3 columns' style='padding-left:10px; padding-right:0px'>
                  <a class='share' href='#'><img src='img/share_facebook.png' /></a>
                </div>
                <div class='large-3 columns' style='padding-left:10px; padding-right:0px'>
                  <a class='share' href='#'><img src='img/share_twitter.png' /></a>
                </div>
                <div class='large-3 columns' style='padding-left:10px; padding-right:0px'>
                  <a class='share' href='#'><img src='img/share_g.png' /></a>
                </div>
              </div>
            </div>
            <div class='large-4 columns hide-for-small'>
              <img src='img/inc.png' />
            </div>
          </div>
	        <hr class='show-for-small' />  
        </div>

        <div class='large-4 columns center hide-for-small'>
          <img src='img/a.png' />
          <p style='font-size:13px; line-height:10px; text-align:center'>Використовувати матеріали з ресурсу можливо тільки за письмової згоди власника</p>
          <p style='font-size:15px; line-height:6px; text-align:center; margin:0px; padding:0px'>2013 &copy; Усі права збережено</p>
        </div>
 
        <div class='large-4 columns center'>
            <img src='img/tel.png'/>
        </div>
 
      </div><hr />
  </div>
  </footer>

		";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Нам дуже шкода, але були знайдені помилки в формі.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= '<p style="color: white">Неправильний еmail адрес.</p><br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= '<p style="color: white">Напишіть повідомлення.</p><br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Имя: ".clean_string($first_name)."\n";
    $email_message .= "Фамилия: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Телефон: ".clean_string($telephone)."\n";
    $email_message .= "Сообщение: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
<h1>Дякуємо Вам за звернення. </h1>
<h1 style="padding-bottom:50px; line-height:20px">Ми зв'яжемось з Вами найближчим часом. </h1>
<a href="index.html" style="color:#FFF">Повернуться на головну</a>
 
    </div>
  </div>
     
  <footer class="row">
  <div class="large-12 columns"><hr />
      <div class="row">

        <div class="large-4 columns center">
          <div class="row">
            <div class="large-8 columns">
              <div class="row">
                <div class="large-12 columns" style="text-align:center; margin-top:15px; margin-bottom:13px">
                  <a href="#" style="font-size:18px">arhitecturbud@ukr.net</a>
                </div>
              </div>
              <div class="row hide-for-small">
                <div class="large-3 columns" style="padding-left:10px; padding-right:0px">
                  <a class="share" href="#"><img src="img/share_vk.png" /></a>
                </div>
                <div class="large-3 columns" style="padding-left:10px; padding-right:0px">
                  <a class="share" href="#"><img src="img/share_facebook.png" /></a>
                </div>
                <div class="large-3 columns" style="padding-left:10px; padding-right:0px">
                  <a class="share" href="#"><img src="img/share_twitter.png" /></a>
                </div>
                <div class="large-3 columns" style="padding-left:10px; padding-right:0px">
                  <a class="share" href="#"><img src="img/share_g.png" /></a>
                </div>
              </div>
            </div>
            <div class="large-4 columns hide-for-small">
              <img src="img/inc.png" />
            </div>
          </div>
	        <hr class="show-for-small" />  
        </div>

        <div class="large-4 columns center hide-for-small">
          <img src="img/a.png" style="margin-top:-10px"/>
          <p style="font-size:13px; line-height:10px; text-align:center">Використовувати матеріали з ресурсу можливо тільки за письмової згоди власника</p>
          <p style="font-size:15px; line-height:6px; text-align:center; margin:0px; padding:0px">2013 &copy; Усі права збережено.</p>
          <p style="font-size:15px; line-height:35px; text-align:center; margin:0px; padding:0px">Проект розроблено агенством <a href="http://www.core.lviv.ua">CORE</a></p>
        </div>
 
        <div class="large-4 columns center">
            <img src="img/tel.png"/>
        </div>
 
      </div><hr />
  </div>
  </footer>

</div><!-- End black pattern -->

<?php
}
die();
?>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  
  <script>
    $(document).foundation();
  </script>

</body>
</html>
