<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ccfa87eec6.js" crossorigin="anonymous"></script>
    <title>Contact Us</title>
    <style>
   @import url("https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Pretty Stuff */
.contact-form-container {
  background: #F4F3F3;
  font-family: "Lato", sans-serif;
}

.contact-us {
  background: url('https://images.pexels.com/photos/3866851/pexels-photo-3866851.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
  position: relative;
  width: 250px;
  /* background: #C3E0EC; */
  overflow: hidden;
}
/* .contact-us:before {
  position: absolute;
  content: "";
  bottom: -50px;
  left: -100px;
  height: 250px;
  width: 400px;
  background: #F8B7D8;
  transform: rotate(25deg);
}
.contact-us:after {
  position: absolute;
  content: "";
  bottom: -80px;
  right: -100px;
  height: 270px;
  width: 400px;
  background: #9ED8EB;
  transform: rotate(-25deg);
} */

.contact-header {
  color: white;
  position: absolute;
  transform: rotate(-90deg);
  top: 120px;
  left: -40px;
}
.contact-header h1 {
  font-size: 1.5rem;
}

.social-bar {
  position: absolute;
  bottom: 20px;
  left: 75px;
  z-index: 1;
  width: 100px;
}
.social-bar ul {
  list-style-type: none;
}
.social-bar ul li {
  display: inline-block;
  color: white;
  width: 25px;
  height: 25px;
  line-height: 25px;
  text-align: center;
  margin-right: -4px;
  font-size: 1.2rem;
}

.header {
  text-align: center;
  padding: 20px 0;
  color: #444;
}
.header h1 {
  font-weight: normal;
}
.header h2 {
  margin-top: 10px;
  font-weight: 300;
}

.address, .email, .phone {
  text-align: center;
  padding: 20px 0;
  color: #444;
}
.address h3, .email h3, .phone h3 {
  font-size: 1rem;
  font-weight: 300;
}
.address i, .email i, .phone i {
  color: #F8B7D8;
  font-size: 1.7rem;
  margin-bottom: 20px;
}

form {
  position: relative;
  width: 440px;
  margin: 0 auto;
  padding: 20px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  background: white;
}
form input, form textarea {
  background: white;
  display: block;
  margin: 20px auto;
  width: 100%;
  border: 0;
}
form input {
  height: 40px;
  line-height: 40px;
  outline: 0;
  border-bottom: 1px solid rgba(68, 68, 68, 0.3);
  font-size: 1rem;
  color: rgba(68, 68, 68, 0.8);
}
form textarea {
  border-bottom: 1px solid rgba(68, 68, 68, 0.3);
  resize: none;
  outline: none;
  font-size: 1rem;
  font-family: lato;
  color: rgba(68, 68, 68, 0.8);
}
form button {
  position: absolute;
  display: block;
  height: 40px;
  width: 250px;
  left: 95px;
  border: 0;
  border-radius: 20px;
  bottom: -20px;
  background: #9ED8EB;
  color: white;
  font-size: 1.1rem;
  font-weight: 300;
  outline: none;
}

.contact-form {
  padding-bottom: 40px;
}

/* Layout Stuff */
body {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2042508-jpeg.jpg");
  height: 100vh;
  width: 100vw;
  position: relative;
  background-size: cover;
  background-repeat: no-repeat;
  display: grid;
  justify-items: center;
  align-items: center;
}

.contact-form-container {
  width: 800px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 0.5fr 0.5fr 2fr;
  grid-template-areas: "contact-us header header header" "contact-us address phone email" "contact-us contact-form contact-form contact-form";
}

.contact-us {
  grid-area: contact-us;
}

.header {
  grid-area: header;
}

.address {
  grid-area: address;
}

.phone {
  grid-area: phone;
}

.email {
  grid-area: email;
}

.contact-form {
  grid-area: contact-form;
}
    </style>
</head>
<body>
<div class="contact-form-container">
  <div class="contact-us">
    <div class="contact-header">
      <h1>
        &#9135;&#9135;&#9135;&#9135;&nbsp;&nbsp;CONTACT US
      </h1>
    </div>
    <div class="social-bar">
      <ul>
        <li>
          <i class="fab fa-facebook-f"></i>
        </li>
        <li>
          <i class="fab fa-twitter"></i>
        </li>
        <li>
          <i class="fab fa-instagram"></i>
        </li>
      </ul>
    </div>
  </div>
  <div class="header">
    <h1>
      Contact Us
    </h1>
    <h2>
      We are always happy to read your feedback! 
    </h2>
  </div>
  <div class="address">
    <i class="fas fa-map-marker-alt"></i>
    <h3>
      123 AQSt.
    </h3>
    <h3>
      Aqaba, JO
    </h3>
  </div>
  <div class="phone">
    <i class="fas fa-phone-alt"></i>
    <h3>
      757 287 1608
    </h3>
  </div>
  <div class="email">
    <i class="fas fa-envelope"></i>
    <h3>
      candy@store.com
    </h3>
  </div>
  <div class="contact-form">
    <form>
      <input placeholder="Name" type="text" /><input placeholder="Email" type="email" /><textarea placeholder="Your Message" rows="4"></textarea><button type="button">SEND </button>
    </form>
  </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>