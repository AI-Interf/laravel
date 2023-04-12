@extends('layouts.admin')

@section('content')


<div class="row justify-content-center">

<div class="col-6 register">

<form method="POST" action="{{ route('register') }}">
            @csrf
    <div class="register-form">

      <div class="text-center pb-3 text-white">
          <h2>Sign Up</h2>
          <span>Sign up to continue</span>
      </div>

       <div class="form-group ">
         <input type="text" name="name" class="form-control" placeholder="Username " id="UserName" required>
     
       </div>

       <div class="form-group ">
         <input type="text" name="email" class="form-control" placeholder="Email " id="Email" required>
       
       </div>

       <div class="form-group log-status">
         <input type="password" name="password" class="form-control" placeholder="Password" id="Passwod" required>
      
       </div>

       <div class="form-group log-status">
         <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" id="Confirm Password" required>
      
       </div>

       <button type="submit" class="log-btn" ><i class="mdi mdi-account"></i> Sign Up</button>


     </div>
   </form>


</div>

</div>


@endsection
