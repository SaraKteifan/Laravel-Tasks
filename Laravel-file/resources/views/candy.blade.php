<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Candy Store</title>
    <style>
   @import url(https://fonts.googleapis.com/css?family=Lato);
html, body {
  padding: 0;
  margin: 0;
  height: 100%;
}

html {
  font: 1em/1.5 "Lato", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizelegibility;
}

body {
  font-size: 1.3em;
}

header {
  height: 100%;
  position: relative;
  overflow: hidden;
  background: url(https://images.pexels.com/photos/6798399/pexels-photo-6798399.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center no-repeat;
  /* Image Credit: Unsplash.me */
  background-size: cover;
}
header .content {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
}
header h1, header h2 {
  margin: 0;
}
header h2 {
  text-transform: uppercase;
  margin-top: -.5em;
}
header hgroup {
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  display: inline-block;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  color: #fff;
  border: 5px solid #fff;
  padding: .5em 3em;
  background-color: rgba(0, 0, 0, 0.2);
  z-index: 2;
}
header .overlay {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background:#333 center no-repeat;
  background-size: cover;
  z-index: 0;
  opacity: 0;  -webkit-filter: blur(4px);
}
img{
  margin-right:20px
}
.site {
  padding: 20em 0;
  text-align: center;
  background-color: #efefef;
  font-size: .8em;
  color: #444;
  position:relative
}
.site a {
  color: #666;
  text-decoration: none;
}
.site a:hover {
  color: #222;
}

.site nav{
  position:absolute;
  top:0;
  left:0;
  background:#222;
  width:100%
}
.site nav a{
  padding:10px 30px;
  font-size:1.3em;
  display:inline-block
}
.site nav a:hover{
  background:#333;
  color:#fff
}
.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
.barimg{
    width:100%;
}
    </style>
</head>
<body>
<header>
  <div class="content">
    <hgroup>
      <h1>Candy Store</h1>
      <i>since 1999</i>
    </hgroup>
  </div>
  <div class="overlay"></div>
</header>
<section class="site">
  <nav style="z-index:1;">
    <a href="">Home</a>
    <a href="">Shop</a>
    <a href="">About Us</a>
    <a href="">Contact Us</a>
    <a href="">Account</a>
  </nav>
  <div class="container">
  <div class="row">
    <div class="col-sm">
      <img class="barimg" src="https://cocoaffaire.com/wp-content/uploads/2021/11/SNICKERS-SINGLE-50-GM.jpg" alt="candybar">
      <p style="margin:10px 0;"> 12 JOD </p>
      <button type="button" class="btn btn-dark">Buy Now</button>
    </div>
    <div class="col-sm">
      <img class="barimg" src="https://cdnprod.mafretailproxy.com/sys-master-root/hf4/hef/12416485031966/548097_main.jpg_1700Wx1700H" alt="candybar">
      <p style="margin:10px 0;"> 7 JOD </p>
      <button type="button" class="btn btn-dark">Buy Now</button>
    </div>
    <div class="col-sm">
      <img class="barimg" src="data:image/jpeg;base64,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" alt="candybar">
      <p style="margin:10px 0;"> 5 JOD </p>
      <button type="button" class="btn btn-dark">Buy Now</button>
    </div>
  </div>
</div>
</section>
<!-- Site footer -->
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"><i>Candy Store</i> was established in 1999, by Sara Kteifan and her partners Aya Alsawa and Saja Alghalayini. The store provides the best candy in the world with the highest quality and yummiest taste. You can find our stores in every country around the globe, or you can for sure buy from our website here as we deliver candies to everywhere.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>//Based on the Scroller function from @sallar
var $content = $('header .content')
  , $blur    = $('header .overlay')
  , wHeight  = $(window).height();

$(window).on('resize', function(){
  wHeight = $(window).height();
});

window.requestAnimFrame = (function()
{
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          function( callback ){
            window.setTimeout(callback, 1000 / 60);
          };
})();

function Scroller()
{
  this.latestKnownScrollY = 0;
  this.ticking            = false;
}

Scroller.prototype = {
 
  init: function() {
    window.addEventListener('scroll', this.onScroll.bind(this), false);
    $blur.css('background-image',$('header:first-of-type').css('background-image'));
  },


  onScroll: function() {
    this.latestKnownScrollY = window.scrollY;
    this.requestTick();
  },

  
  requestTick: function() {
    if( !this.ticking ) {
      window.requestAnimFrame(this.update.bind(this));
    }
    this.ticking = true;
  },

  update: function() {
    var currentScrollY = this.latestKnownScrollY;
    this.ticking       = false;
    
    
    var slowScroll = currentScrollY / 2
      , blurScroll = currentScrollY * 2
      , opaScroll = 1.4 - currentScrollY / 400;
   if(currentScrollY > wHeight)
     $('nav').css('position','fixed');
   else
     $('nav').css('position','absolute');
    
    $content.css({
      'transform'         : 'translateY(' + slowScroll + 'px)',
      '-moz-transform'    : 'translateY(' + slowScroll + 'px)',
      '-webkit-transform' : 'translateY(' + slowScroll + 'px)',
      'opacity' : opaScroll
    });
    
    $blur.css({
      'opacity' : blurScroll / wHeight
    });
  }
};


var scroller = new Scroller();  
scroller.init();</script>
</html>