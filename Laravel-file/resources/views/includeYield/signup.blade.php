@extends ('includeYield.master')

@section('title','Sign Up')
@section('content')
<div class='bold-line'></div>
<div class='container'>
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
      <div class='welcome'>Sign Up</div>
      <!-- <div class='subtitle'>We're almost done. Before using our services you need to create an account.</div> -->
      <div class='input-fields'>
        <input type='text' placeholder='First Name' class='input-line full-width'></input>
      <input type='text' placeholder='Second Name' class='input-line full-width'></input>
        <input type='email' placeholder='Email' class='input-line full-width'></input>
        <input type='password' placeholder='Password' class='input-line full-width'></input>
<input type='text' placeholder='City Name' class='input-line full-width'></input>
<input type='tel' placeholder='Mobile Number' class='input-line full-width'></input>
      </div>
      <!-- <div class='spacing'>or continue with <span class='highlight'>Facebook</span></div> -->
      <div><button class='ghost-round full-width'>Create Account</button></div>
    </div>
  </div>
</div>

@endsection
