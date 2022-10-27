<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('css/form.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Admin Account</title>
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
                <li><a class="a" href="{{route('login')}}">Contact</a></li>
                <li><a  class="active" href="">Account</a></li>
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
            
          <form method="POST" action="{{ route('admin.login') }}" class="sign-in-form">
            @csrf
            <div class="">
                @include('layouts.alerts')
            </div>
            <h2 class="title">Admin Login</h2>
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
            <button type="submit" class="btne solid" >Login</button>
            <p><small class="mt-4 mb-3"><a href=" {{route('login')}}" style="text-decoration:none; color:black"><i class="fa fa-arrow-left"></i>  Back to user login page</a></small></p>
          </form>
          
        </div>
      </div>

      <div class="panels-con" >
        <div class="panel left-panel">
          <div class="content">
            <h3>Hello Admin!!</h3>
            <p style="color: white">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
          </div>
          <img src="{{asset('images/undraw_code_review_re_woeb.svg')}}" style="margin-top: -70px;" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
  </body>
</html>