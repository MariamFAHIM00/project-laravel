<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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

    <!-- Hero Section -->
        <section id="page-header-contact">
            <h2>#Cart</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </section>
    <!-- End Of Hero Section -->

    <!-- Cart Section -->
        <section id="cart" class="section-p1">
            <a href="{{route("products-page")}}" style="text-decoration:none; color:black; font-weight:700; font-size:15px" class=""><i class="fa fa-arrow-circle-left me-2 " style="margin-bottom: 10px; border:0px; color:black;"></i>Back To Store</a>
            <table width="100%">
                <thead>
                    <tr>
                        <td>IMAGE</td>
                        <td>PRODUCT NAME</td>
                        <td>QUANTITY</td>
                        <td>PRICE</td>
                        <td>SUBTOTALE</td>
                        <td >REMOVE</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td><img src="{{asset($item->associatedModel->image)}}" alt="product image"></td>
                        <td>{{$item->name}}</td>
                        <td>
                            <form class="d-flex flex-row justify-content-center aligh-items-center" method="POST" action="{{route("update.cart",$item->associatedModel->slug)}}">
                                @csrf
                                @method("PUT")
                                <div class="form-group">
                                    <input type="number" name="qty" id="qty" value="{{ $item->quantity}}" placeholder="Quantite" max="{{$item->associatedModel->inStock}}" min="1" class="form-control">
                                </div>
                                <div class="form-group p-1">
                                    <button type="submit" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i>
                                    
                                    </button>
                                </div>
                            </form>
                        </td>
                        
                        <td>{{$item->price}} DH</td>
                        <td>{{$item->price * $item->quantity}} DH</td>
                        <td>
                            <form class="d-flex flex-row justify-content-center aligh-items-center" method="POST" action="{{route("remove.cart",$item->associatedModel->slug)}}">
                                @csrf
                                @method("DELETE")
                            <button class="border-0" type="submit"><i class="fa fa-times-circle close"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <section id="cart-add" class="section-p1">
            <div class="subtotal">
                <h3>Cart Totals</h3>
                <table>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>{{Cart::GetSubtotal()}} DH</strong></td>
                    </tr>
                </table>
                    <a href="{{route('cart.form')}}" type="submit" class="btn mt-3 text-white normal" style="background-color: #088178;">Pay</a>
            </div>
        </section>
    <!-- End Of Cart Section -->
    
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