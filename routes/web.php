<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaypalPayementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//home route
// Route::get('/home',function(){
//     return view('index')->with([
//         "products"=>Product::latest()->paginate(4),
//         "categories"=>Category::all(),
//     ]);
// });

// login logout & register routes
Auth::routes();

//home routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-page', [HomeController::class, 'aboutpage'])->name('about');


//products routes
Route::get('/products-page', [ProductController::class,'index'])->name('products-page');
Route::resource('products', ProductController::class);
Route::get('products/by/{category}',[HomeController::class,'getProductByCategory'])->name("category.products");

// cart routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/add/{product}/cart', [CartController::class, 'addProductToCart'])->name('add.cart');
Route::put('/update/{product}/cart', [CartController::class, 'updateProductOnCart'])->name('update.cart');
Route::delete('/remove/{product}/cart', [CartController::class, 'removeProductFromCart'])->name('remove.cart');
Route::get('/cart-form', [CartController::class, 'formView'])->name('cart.form');
Route::post('/pay',[CartController::class,'cartForm'])->name('make.payment');
Route::get('/pay-view', [CartController::class, 'payView'])->name('pay.view');
Route::get('/thank-you', [CartController::class, 'thankuView'])->name('thank.you');


//payment routes
Route::get('/verify_payment/{transaction_id}',[PaymentController::class,"verify_payment"])->name("verify_payment");
Route::get('/complete_payment',[PaymentController::class,"complete_payment"])->name("complete_payment");

//admin routes
Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
Route::get('/admin/login', [AdminController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
Route::get('/admin/products', [AdminController::class, 'getProducts'])->name('admin.products');
Route::get('/admin/orders', [AdminController::class,'getOrders'])->name('admin.orders');
Route::get('/admin/customers', [AdminController::class,'getCustomers'])->name('admin.customers');

//orders routes
Route::resource('orders',OrderController::class);

//contact routes
Route::get('/contactus-page', [ContactController::class, 'contactpage'])->name('contact');
Route::post('/Contact',[ContactController::class,'registerContact'])->name('contactus');

