<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/form.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Account</title>
  </head>
  <body>
    <!-- Navbar Section -->
    <section id="header">
      <a href="{{route('home')}}"><img src="" alt="" class="logo"></a>
      <div>
            <ul id="navbar">
                <li><a class="a" href="{{route('home')}}">Home</a></li>
                <li><a class="a" href="{{route('products-page')}}">Shop</a></li>
                <li><a class="a" href="{{route('about')}}">About</a></li>
                <li><a class="a" href="{{route('contact')}}">Contact</a></li>
                <li><a  class="active" href="{{route('login')}}">Account</a></li>
                <li id="lg-bag"><a class="a" href="{{route('cart.index')}}"><i class="fa fa-shopping-bag bag"></i></a></li> 
                <a href="#" id="close"><i class="bi bi-x"></i> </a>  
            </ul>
        </div>
        <div id="mobile">
            <a href="{{route('cart.index')}}"><i class="fa fa-shopping-bag bag"></i></a>
            <i id="bar" class="fa fa-bars"></i>
        </div>
    </section>
    <!--End Of Navbar Section -->
    <div class="con">
      <div class="forms-con">
        <div class="signin-signup">
          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
            @csrf
            <div class="">
                @include('layouts.alerts')
            </div>
            <h2 class="title">Sign up</h2>
            <div class="form-group mb-2">
              <input type="text" name="name" class=" form-control @error('name') is-invalid @enderror" placeholder="User Name" value="{{ old('name') }}" >
              @error('name')
                  <span class="text-danger">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group mb-2">
                <input type="email" name="email" class=" form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" autofocus>
                @error('email')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                    @error('password')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group mb-2">
              <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
          </div>
            <button type="submit" class="btne solid" >Sign up</button>
          </form>
        

          
        </div>
      </div>

      <div class="panels-con" >
        <div class="panel left-panel">
            <div class="content" style="margin-top: -60px;">
                <h3>One of us ?</h3>
                <p style="color: white">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                  laboriosam ad deleniti.
                </p>
                <a href="{{ route('login') }}" class="btne  btn transparent text-white" id="sign-up-btn">
                    Sign in
                  </a>
              </div>
              <img src="{{asset('images/undraw_access_account_re_8spm.svg')}}" style="margin-top:-80px; width:60%" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>