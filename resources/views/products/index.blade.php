<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar Section -->
    <section id="header">
        <a href="{{route('home')}}"><img src="" alt="" class="logo"></a>
            <div>
                <ul id="navbar">
                    <li><a class="a" href="{{route('home')}}">Home</a></li>
                    <li><a class="active a" href="{{route('products-page')}}">Shop</a></li>
                    <li><a class=" a" href="{{route('about')}}">About</a></li>
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

    <!-- Hero Section -->
        <section id="page-header">
            <h2>#OurStore</h2>
            <p>Enjoy</p>
        </section>
    <!-- End Of Hero Section -->

    <!-- Products Section -->
        <section id="product1" class="section-p1">
            <span>
                {{-- Drop Down: Down Menu --}}
                    <div class="dropdown ms-auto m-2">
                        {{-- Mobile BTN --}}
                            <button class="bi bi-bookmarks btn btn-md dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</button>
                        {{-- End Of Mobile BTN --}}
                        {{-- Drop Down Menu --}}
                            <div class="dropdown-menu m-1 p-2 bg-light" aria-labelledby="dropdownMenuButton">
                                <a href="{{route('products-page')}}" style="text-decoration: none; color:#088178">All</a>
                                @foreach ($categories as $category)
                                    <a href="{{route("category.products",$category->slug)}}" class="list-group-item list-group-item-action">
                                        
                                        {{$category->title}}
                                        ({{$category->products->count()}})
                                    </a>                      
                                @endforeach
                            </div>
                        {{-- End Of Drop Down Menu --}}
                    </div>
                {{-- Drop Down: Down Menu --}}
            </span>
            <div class="pro-container">
                @foreach ($products as $product)
                    <div class="pro">
                        <img src="{{asset($product->image)}}" alt="product1">
                        <div class="des">
                            <span>{{$product->category->title}}</span>
                            <h5>{{$product->title}}</h5>
                            <h4>{{$product->price}} DH</h4>
                        </div>
                        <a href="{{route("products.show",$product->id)}}"><i class="bi bi-cart4 cart"></i></a>
                    </div>
                @endforeach
            </div>
            <hr>
                <div class="justify-content-center d-flex">
                    {{$products->links()}}
                </div>
            </div>
        </section>
    <!-- End Of Products Section -->

    

    <!-- Newsletters Section -->
        <section id="newsletter">
            <div class="newstext">
                <h4>Sign Up For Newsletters</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
            </div>
            <div class="form">
                <input type="email" placeholder="Your email address">
                <button class="normal">Sign Up</button>
            </div>
        </section>
    <!--End Of Newsletters Section -->

    <!-- Footer Section -->
        <footer class="section-p1">
            <div class="cole">
                <br>
                <h4>Contact</h4>
                <p><strong>Address:</strong>........................</p>
                <p><strong>Phone:</strong>........................</p>
                <p><strong>Hours:</strong>..:.. - ..:.. , ... - ...</p>
                <br>
            </div>
            <div class="cole about">
                <h4>About</h4>
                <a href="{{route('about')}}">About Us</a>
                <a href="">Delivery Information</a>
                <a href="{{route('contact')}}">Contact Us</a>
            </div>
            <div class="cole account">
                <h4>My Account</h4>
                <a href="{{route('login')}}">Sign In</a>
                <a href="{{route('cart.index')}}">View Cart</a>
                <a href="">My Wishlist</a>
                <a href="">Track My Order</a>
                <a href="">Help</a>
            </div>
            
            <div class=" cole follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-pinterest"></i></a>
                </div>
            </div>
            <div class="copyright">
                <strong>&copy; Copy Right {{date('Y')}}. All Rights Reserved</strong>
            </div>
        </footer>
    <!-- End Of Footer Section -->
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    
</body>
</html>