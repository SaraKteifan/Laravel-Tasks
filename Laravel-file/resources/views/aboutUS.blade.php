
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ccfa87eec6.js" crossorigin="anonymous"></script>
    <title>About Us</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Exo+2:700');
* {
  margin: 0 auto;
  padding: 0;
}

body {
  background: url("https://images.pexels.com/photos/557665/pexels-photo-557665.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
  background-color: #212121;
  background-blend-mode: overlay;
  background-position: center;
  background-size: cover;
  text-align: center;
}

h1 {
  color: whitesmoke;
  font-family: 'Exo 2', sans-serif;
  font-size: 46px;
  font-weight: 900;
  text-transform: uppercase;
}

p {
  max-width: 700px;
  min-height: 200px;
  padding: 0;
  color: whitesmoke;
  font-family: OpenSans;
  font-size: 14px;
  font-weight: 300;
  line-height: 22px;
}

.square {
  height: 60px;
  width: 60px;
  border: 1px dashed white;
  margin: 0 0 0 55px;
  /*   padding: 1px; resize squares */
  background-color: rgba(255, 255, 255, 0.2);
  display: inline-block;
  transform: rotateZ(44deg);
}

.square:hover {
  background-color: rgba(27, 182, 239, 0.2);
  transition: ease 0.2s;
  cursor: pointer;
}

.square .icons {
  position: absolute;
  transform: rotateZ(-44deg);
  margin: 20px 0 0px 21px;
}

.fa-facebook,
.fa-twitter,
.fa-dribbbler,
.fa-youtube,
.fa-dribbble {
  width: 11px;
  height: 22px;
  color: white;
  font-family: FontAwesome;
  font-size: 23px;
  font-weight: 400;
  text-transform: uppercase;
}

.square:hover .fa-facebook {
  color: rgba(59, 89, 152, 1)
}

.square:hover .fa-twitter {
  color: rgba(27, 182, 239, 1)
}

.square:hover .fa-dribbble {
  color: rgba(199, 59, 111, 1)
}

.square:hover .fa-youtube {
  color: rgba(229, 45, 39, 1)
}
.logo{
   margin: 1em;
   position: fixed;
   bottom: -72px;
   z-index: 99999999999;
   right: 0;
}

.pen{
  fill:black;
 animation:rotateInDownLeft 3s forwards;
}
.all{
  animation:rotateOut 3s forwards;
}
@keyframes rotateInDownLeft {
  from {
    transform-origin: left bottom;
    transform: rotate3d(0,0,0, 0deg);
    opacity: 1;
  }

  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
 transform: ;
 transform:translateX(850px) translateY(-83px) rotate3d(0,0,1, -60deg);
    opacity: 1;
  }
}
@keyframes rotateOut {
  from {
    -webkit-transform-origin: center;
    transform-origin: center;
    opacity: 1;
  }

  to {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
    transform: rotate3d(0, 0, 1, 90deg);
    opacity: 1;
  }
}
    </style>
</head>
<body>

<h1  style="margin-top:200px;">
ABOUT US
<br>
<img src="https://image.ibb.co/nk616F/Layer_1_copy_21.png" width="47" height="11" align="center">
</h1>
<article>
  <p style="font-size: 20px; margin-top:20px;">
  <i>Candy Store</i> was established in 1999, by Sara Kteifan and her partners Aya Alsawa and Saja Alghalayini. The store provides the best candy in the world with the highest quality and yummiest taste. You can find our stores in every country around the globe, or you can for sure buy from our website here as we deliver candies to everywhere.
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
</article>
<div class="social_icons">
  <div class="square">
    <div class="icons">
      <i class="fa fa-facebook" aria-hidden="true"></i>
    </div>
  </div>
  <div class="square">
    <div class="icons">
      <i class="fa fa-youtube" aria-hidden="true"></i>
    </div>
  </div>
  <div class="square">
    <div class="icons">
      <i class="fa fa-twitter" aria-hidden="true"></i>
    </div>
  </div>
  <!-- <div class="square">
    <div class="icons">
    <i class="fa-brands fa-instagram"></i>
    </div>
  </div> -->
</div>
<div class="logo">

</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>