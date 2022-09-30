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
            <div class="cardd-header">
                <h3>
                    <span class="iconn las la-plus"></span>
                    <span>Add Products</span>
                </h3>
            </div>
            <form method="POST" action="{{route("products.store")}}" enctype="multipart/form-data">
                @csrf
                @method("POST")
                <div class="form-group p-2">
                    <input type="text" name="title" placeholder="Product title" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group p-2">
                    <textarea name="description" placeholder="Product description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror"></textarea>
                    @error('description')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group p-2">
                    <input type="number" name="price" placeholder="Product price" class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group p-2">
                    <input type="number" name="old_price" placeholder="Product old price" class="form-control @error('old_price') is-invalid @enderror">
                    @error('old_price')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group p-2">
                    <input type="number" name="inStock" placeholder="Quantity in stock" class="form-control @error('inStock') is-invalid @enderror">
                    @error('inStock')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group p-2">
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group p-2">
                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                        <option value="" selected disabled>
                            Chose a category
                        </option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->title}}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group p-2">
                    <button type="submit" class="btn" style="background: #088178; color:#fff">
                        Add
                    </button>
                </div>
            </form>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>