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



    <title>Address form</title>
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
                    @guest
                        @if (Route::has('login'))
                            <li><a class="a" href="{{route('login')}}">Account</a></li>
                        @endif
                        @else
                            @if(auth()->guard("admin")->check())
                                <li class="nav-item dropdown" style="list-style: none">
                                    <a id="navbarDropdown" class=" a nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <i class="fa fa-user p-1"></i>
                                            {{ Auth()->guard('admin')->user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                            {{ __('Logout') }}
                                        </a>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item dropdown" style="list-style: none">
                                    <a id="navbarDropdown" class="a nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fa fa-user p-1"></i>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endif
                    @endguest
                    <li id="lg-bag"><a class="active a" href="{{route('cart.index')}}"><i class="fa fa-shopping-bag bag"></i></a></li> 
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
            
          <form method="POST" action="{{route('make.payment')}}" class="sign-in-form">
            @csrf
            <h2 class="title">Address Book</h2>
            <div class="form-group mb-2">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="User name" value="{{auth()->user()->name}}">
                @error('name')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <input type="email" name="email" class=" form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{auth()->user()->email}}" autofocus>
                @error('email')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                    <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone number">
                    @error('phone')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group mb-2">
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address">
                @error('address')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" placeholder="Country">
                @error('country')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <input type="text" name="town" class="form-control @error('town') is-invalid @enderror" placeholder="Town">
                @error('town')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btne solid" >Sent</button>
          </form>
          
        </div>
      </div>

      <div class="panels-con" >
        <div class="panel left-panel">
          <div class="content">
            <h3>Finalisation of the order</h3>
            <p style="color: white">
              Please fill this form before completing your payment
            </p>
          </div>
          <img src="{{asset('images/undraw_my_location_re_r52x.svg')}}" style="margin-top: -100px; height:50%" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
  </body>
</html>