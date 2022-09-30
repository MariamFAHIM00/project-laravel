<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <!-- Product Details Section -->
        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="{{asset($product->image)}}" alt="" width="100%" id="MainImg">
            </div>
            <div class="single-pro-details card  bg-transparent">
                <h6>{{$product->category->title}}</h6>
                <h4> {{ $product->title }}</h4>
                <h3>{{$product->price}} DH</h3>
                <form method="POST" action="{{route("add.cart",$product->slug)}}">
                    @csrf
                    <input type="number" name="qty" id="qty" value="1" placeholder="Quantite" max="{{$product->inStock}}" min="1">
                    <button type="submit" class="normal">Add To Cart</button>
                </form>
                <h4>Product Description</h4>
                <span class="card-text">{{$product->description}}</span>
            </div>
        </section>
    <!-- End Of Product Details Section -->

    <!-- Latest Products Section -->
        <section id="product1" class="section-p1">
            <h2 style="font-weight: 800; font-size:xx-large">Featured Products</h2>
            <p>Summer colelection New Modern Design</p>
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
        </section>
    <!-- End Of Latest Products Section -->

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
    
</body>
</html>