<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script><style type="text/css"></style>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<title>OCIVICO</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="shortcut icon" href="sources/images/1.png" type="image/png">
<link rel="shortcut icon" type="image/png" href="http://www.example.com/favicon.png" />
</head>
<body>

<script type="text/javascript">
var currentTime = new Date().getHours();
if (7 <= currentTime && currentTime < 20) {
    if (document.body) {
        document.body.background = "sources/images/resized background.jpg";
    }
}
else {
    if (document.body) {
        document.body.background = "sources/images/nighttime.jpg";
    }
}

</script>

<div class="headers">
<style type="text/css">a {text-decoration: none;color:white;}
	</style>
	<h1>OCIVICO</h1>
	</div>

<header class="container">
<style type="text/css">a {text-decoration: none;color:white;}
	</style>
	<div class="row">
	<nav class="col-sm-8 text right">
    <p class="container"><a href="index.php"><b>Home</b></a></p>
    <p class="container"><a href="About.html"><b>About</b></a></p>
    <p class="container"><a href="Contact.html"><b>Contact</b></a></p>
	<p class="container"><a href="Programs.html">Programs</p>
	<p class="container"><a href="Workinprogress.html">Work In Progress</p>
	<p class="container"><a href="https://www.youtube.com/channel/UCq71PNGWPExpoJi_Tc9VNhw" target="_blank">Music Channel</p>
	<p class="container"><a href="Usefull_links.html">Usefull links</p>
     </nav>
     </div>
</header>
<div class="slideshowpos">
   <script type="text/javascript">



function slideSwitch() {
    var $active = $('#slideshow div.active');

    if ( $active.length == 0 ) $active = $('#slideshow div:last');

  
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow div:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 7000 );
});

</script> 

<style type="text/css">

#slideshow {
	border-style: solid;
	border-color: white;
	border-width: 5px;
    position:relative;
    margin: 0 auto;
    height:540px;
width:960px;
}

#slideshow .slide {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
    opacity:0.0;
}

#slideshow div.active {
    z-index:10;
    opacity:1.0;
}

#slideshow div.last-active {
    z-index:9;
}

</style>


</head><body><div id="slideshow">
<div class="slide" style="opacity: 1;"><img src="sources/images/img3.jpg" alt="Slideshow Image 1"></a></div>
<div class="slide active" style="opacity: 1;"><img src="sources/images/img2.jpg" alt="Slideshow Image 2"></a></div>
<div class="slide" style="opacity: 1;"><img src="sources/images/shia.gif" alt="Slideshow Image 3"></a></div>
</div></body></html>
</div>

<footer class="footer">
<p>&copy; 2016 OCIVICO</p>
</footer>

</body>
</html>