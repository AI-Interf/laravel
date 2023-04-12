@extends('layouts.admin')

@section('content')


<div class="row container-fluid">

<div class="col-md-6 col-12 bg-img">
  <span>EXPLORE</span>  
</div>

<div class="col-md-6 col-12 form">


<span class="d-inline-block d-lg-block text-end mt-5"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-white"></span></a></span>

              

<nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
  <ul class="site-menu main-menu js-clone-nav ml-auto ">
    <li class="active"><a href="register.html" class="nav-link">Signup</a></li>
    <li><a href="user.html" class="nav-link">Login</a></li>

  </ul>
</nav>

<form method="POST" action="{{ route('login') }}">
@csrf
    <div class="login-form">
       <div class="form-group ">
         <input type="email" name="email" class="form-control" placeholder="Enter Email" id="email">
         <i class="fa fa-user"></i>
       </div>
       <div class="form-group log-status">
         <input type="password" name="password" class="form-control" placeholder="Password" id="Passwod">
         <i class="fa fa-lock"></i>
       </div>
       <button type="submit" class="log-btn" ><i class="mdi mdi-account"></i> Log in</button>

       <div class="row mt-5">
         <div class="col-md-6 col-12 text-left">
           <a href="{{ route('register') }}">Create Account</a>
         </div>

         <div class="col-md-6 col-12 text-end">
           <a href="#">Need Help?</a>
         </div>
       </div>
     </div>
   </form>


</div>

</div>

@endsection

<style>
  a{
    text-decoration: none;
    color: rgba(255,255,255,.5)!important;
  }

  </style>