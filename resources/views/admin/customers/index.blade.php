<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Customers</title>
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
                    <a href="{{route("admin.customers")}}" class="active">
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
            <div class="recent-grid">
                <div class="projects">
                    <div class="cardd">
                        <h3>
                            <span class="iconn las la-users"></span>
                            <span>Informations of Customers</span>
                        </h3>
                        <div class="cardd-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>Name</td>
                                            <td>Email</td>
                                            <td>Phone</td>
                                            <td>Address</td>
                                            <td>Country</td>
                                            <td>Town</td>
                                        </tr>
                                        <tbody>
                                            @foreach ($customers as $customer)
                                                <tr>
                                                    <td>{{$customer->user_id}}</td>
                                                    <td>{{$customer->name}}</td>
                                                    <td>{{$customer->email}}</td>
                                                    <td>{{$customer->phone}}</td>
                                                    <td>{{$customer->address}}</td>
                                                    <td>{{$customer->country}}</td>
                                                    <td>{{$customer->town}}</td>
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
                    {{ $customers->links() }}
                </div>
            </div>
        </main>
    </div>

</body>
</html>