<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" />
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}" /> --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Dashboard</title>
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
                    <a href="{{route("admin.index")}}" class="active">
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
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>{{$users->count()}}</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>{{$products->count()}}</h1>
                        <span>Products</span>
                    </div>
                    <div>
                        <span class="las la-clipboard"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>{{$orders->count()}}</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>
            </div>

            <div class="image">
                {{-- <img src="undraw_dashboard_re_3b76.svg" alt="" >
                <img src="undraw_data_trends_re_2cdy.svg" alt="" class="img2"> --}}
            </div>
        </main>
    </div>

</body>
</html>