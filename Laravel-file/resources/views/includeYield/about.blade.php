@extends ('includeYield.master')

@section('title','About Us')
@section('content')
<section class="aboutbody">
<h1  style="margin-top:200px;">
ABOUT US
<br>
<img src="https://image.ibb.co/nk616F/Layer_1_copy_21.png" width="47" height="11" align="center">
</h1>
<article>
  <p style="font-size: 20px; margin-top:20px;">
  <i>Candy Store</i> was established in 1999, by <?php echo $names[0]; ?> and her partners <?php echo $names[1]; ?> and <?php echo $names[2]; ?>. The store provides the best candy in the world with the highest quality and yummiest taste. You can find our stores in every country around the globe, or you can for sure buy from our website here as we deliver candies to everywhere.
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
<section>
@endsection
