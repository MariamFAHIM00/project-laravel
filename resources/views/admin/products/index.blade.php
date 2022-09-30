<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Products</title>
</head>
<body>
    <input type="checkbox" name="" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <a href="#"><img src="" alt=></a>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{route("admin.index")}}">
                        <span class="las la-igloo"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route("admin.customers")}}">
                        <span class="las la-users"></span>
                        <span>Customers</span>
                    </a>
                </li>
                <li>
                    <a href="{{route("admin.products")}}" class="active">
                        <span class="las la-clipboard-list"></span>
                        <span>Products</span>
                    </a>
                </li>
                <li>
                    <a href="{{route("admin.orders")}}">
                        <span class="las la-shopping-bag"></span>
                        <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.logout') }}">
                        <span class="las la-arrow-alt-circle-left"></span>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h1> 
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h1>
            <div class="user-wrapper">
                <div>
                    <h4>{{ Auth()->guard('admin')->user()->name }}</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="">
                @include('layouts.alerts')   
            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="cardd">
                        <div class="cardd-header">
                            <h3>
                                <span class="iconn las la-clipboard-list"></span>
                                <span>Our Products</span>
                            </h3>
                            <a href="{{route("products.create")}}"><span class="las la-plus"></span> Add product</a>
                        </div>
                        <div class="cardd-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>Name</td>
                                            <td>Qty</td>
                                            <td>Price</td>
                                            <td>Disponible</td>
                                            <td>Image</td>
                                            <td>Category</td>
                                            <td>Update</td>
                                            <td>Delete</td>
                                        </tr>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{$product->id}}</td>
                                                    <td>{{$product->title}}</td>
                                                    <td>{{$product->inStock}}</td>
                                                    <td>{{$product->price}} DH</td>
                                                    <td> 
                                                        @if($product->inStock>0)
                                                            <i class="las la-check-circle" style="font-size: 35px"></i>
                                                        @else
                                                            <i class="las la-times" style="font-size: 35px"></i>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <img src="{{asset($product->image)}}" alt="{{$product->title}}"
                                                        width="50" height="50" class="img-fluid rounded">
                                                    </td>
                                                    <td>{{$product->category->title}}</td>
                                                    <td>
                                                        <a href="{{route("products.edit",$product->slug)}}">
                                                            <i class="las la-edit" style="font-size: 35px; color:black"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form id="{{$product->id}}" method="POST" action="{{route("products.destroy",$product->slug)}}">
                                                            @csrf
                                                            @method("DELETE")
                                                            <button style="border:none; background:#fff" onclick="event.preventDefault(); 
                                                            if(confirm('Are you sure you want delete the product {{$product->title}} ?'))
                                                            document.getElementById({{$product->id}}).submit();">
                                                                <i class="las la-trash" style="font-size: 35px; color:black; border:none"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="justify-content-center d-flex">
                    {{ $products->links() }}
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>