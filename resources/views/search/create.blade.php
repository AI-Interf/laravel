
@extends('layouts.admin')

@section('content')

<div class="row searchData container-fluid">
      
      <div class="col-md-3 col-12 order-lg-1 order-2 side-bar">
         
       <!--  Search button  -->
        <div class="input-group rounded search">
        <input type="search" class="form-control rounded" placeholder="Subject" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
          <i class="fas fa-search"></i>
        </span>
      </div>

      <hr>

        <!-- list group -->
          <div class="list-group">
                    <label class="list-group-item">
                        <a href="#">English</a>
           
                    </label>

                    <label class="list-group-item">
                         <a href="#">Social Studies</a>
                    </label>
               
                    <label class="list-group-item">
                         <a href="#">Chemistry</a>
                    </label>
                    <label class="list-group-item">
                        <a href="#">Console</a>
                    </label>
                  <label class="list-group-item">
                    <a href="#">Career</a>
                  </label>

                      <label class="list-group-item">
                     <a href="#">Training</a>
                  </label>

                      <label class="list-group-item">
                     <a href="#">Internship</a>
                  </label>

                      <label class="list-group-item">
                     <a href="#">Job</a>
                  </label>

                      <label class="list-group-item">
                     <a href="#">Research</a>
                  </label>

                      <label class="list-group-item">
                     <a href="#">Retirement</a>
                  </label>
                </div>         
        
      </div>
      <!-- col-md-4 end -->


      <div class="col-md-9 col-12 order-lg-2 order-1 right-bar">

    <div class="row">


          <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      <div class="site-navbar site-navbar-target py-4" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-9">
              <div class="site-logo">
                <a href="{{ route('dashboard') }}" class="font-weight-bold text-white">Level</a>
                <a href="index.html" class="font-weight-bold text-white">About</a>
                <a href="index.html" class="font-weight-bold text-white">Help</a>
              </div>
            </div>

            <div class="col-3 text-end">
              

              <span class="d-inline-block d-lg-block"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="register.html" class="nav-link">Signup</a></li>
                  <li><a href="user.html" class="nav-link">Login</a></li>

                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </div>



        <div class="col-12 search-data">
          <p>This is user with name {{Auth::user()->name}}</p>   
        
        </div>

        <div class="col-12">
          <footer>

  
          @if($data <= 7)
        <form action="{{ route('search.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
      
            <div class="p-1 rounded">
            <div class="input-group">
              <input type="text" name="search_data" placeholder="Enter your Query here" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
              </div>
            </div>
          </div>
            </div>

            @elseif($show and $data >=7)
            <form action="{{ route('search.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
      
            <div class="p-1 rounded">
            <div class="input-group">
              <input type="text" name="search_data" placeholder="Search Here" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
              </div>
            </div>
          </div>
            </div>

            @else 
            <div class="p-1 rounded">
            <div class="input-group">
              <input type="text" placeholder="Pay for more query search" aria-describedby="button-addon1" class="form-control border-0 shadow-0" style="background-color:#343434;" readonly>
              <a class="btn btn-success" href="{{ route('checkout') }}"> Pay</a>
            </div>
          </div>
            </div>
        @endif
       
        </form>
     

         
        </footer>
        </div>
      

    </div>





        
      </div>

    </div>



@endsection