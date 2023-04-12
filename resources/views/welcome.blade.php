@extends('layouts.admin')

@section('content')


<div class="row container-fluid">


<div class="col-md-12 main-link">


@if (Route::has('login'))
             
             @auth
             <a class="btn btn-success" href="{{ route('dashboard') }}"> Dashboard</a>     
             @else
             <a class="btn btn-success" href="{{ route('login') }}"> Login</a>
            <a class="btn btn-success" href="{{ route('register') }}"> Register</a>
             @endauth
      
     @endif



</div>

</div>

@endsection

<style>

  .main-link{
    position: absolute;
    top: 50%;
    left: 50%;
  }

  .main-link a{
    margin: 20px;
  }




  </style>