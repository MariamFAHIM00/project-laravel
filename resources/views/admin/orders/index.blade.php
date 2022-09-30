<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Orders</title>
</head>
<body>
    <input type="checkbox" name="" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <a href="#"><img src="" alt="" class="logo"></a>
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
                    <a href="{{route("admin.products")}}">
                        <span class="las la-clipboard-list"></span>
                        <span>Products</span>
                    </a>
                </li>
                <li>
                    <a href="{{route("admin.orders")}}" class="active">
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
                                <span class="iconn las la-shopping-bag"></span>
                                <span>Informations of Orders</span>
                            </h3>
                        </div>
                        <div class="cardd-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>Client_Id</td>
                                            <td>Product Name</td>
                                            <td>Qty</td>
                                            <td>price</td>
                                            <td>Total</td>
                                            <td>Paid</td>
                                            <td>dilivred</td>
                                            <td>Update</td>
                                            <td>Delete</td>
                                        </tr>
                                        <tbody>
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td>{{$order->id}}</td>
                                                    <td>{{$order->user_id}}</td>
                                                    <td>{{$order->product_name}}</td>
                                                    <td>{{$order->qty}}</td>
                                                    <td>{{$order->price}} DH</td>
                                                    <td>{{$order->total}} DH</td>
                                                    <td>
                                                        @if($order->paid)
                                                            <i class="las la-check" style="color: #74B54F; font-size:20px"></i>
                                                        @else
                                                            <i class="las la-times" style="color:darkred; font-size:20px"></i>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($order->delivered)
                                                            <i class="las la-check" style="color: #74B54F; font-size:20px"></i>
                                                        @else
                                                            <i class="las la-times" style="color:darkred; font-size:20px"></i>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <form method="POST" action="{{route("orders.update",$order->id)}}">
                                                            @csrf
                                                            @method("PUT")
                                                            <button class="btn btn-sm btn-success">
                                                                <i class="las la-check" style="color: #fff; font-size:20px"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form id="{{$order->id}}" method="POST" action="{{route("orders.destroy",$order->id)}}">
                                                            @csrf
                                                            @method("DELETE")
                                                            <button onclick="event.preventDefault(); 
                                                            if(confirm('Are you sure you want delete the order {{$order->id}} ?'))
                                                            document.getElementById({{$order->id}}).submit();" class="btn btn-sm btn-danger">
                                                            <i class="las la-times" style="color:#fff; font-size:20px"></i>
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
                    {{ $orders->links() }}
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>