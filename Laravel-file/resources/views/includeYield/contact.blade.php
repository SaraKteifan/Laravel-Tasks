@extends ('includeYield.master')

@section('title','Contact Us')
@section('content')
<section class="contactbody">
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
<section>
@endsection