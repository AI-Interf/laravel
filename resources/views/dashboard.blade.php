this is the new changes

@extends('layouts.admin')

@section('content')


<div class="col-md-12 main-link">

<a class="btn btn-success" href="{{ route('search.create') }}"> search</a>

<form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{ route('logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                    </a>
                                </form>

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