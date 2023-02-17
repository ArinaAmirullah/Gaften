<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

route::get('/signup', function() {
    return view('auth.signup');
});

route::get('/adminlogin', function() {
    return view('auth.adminlogin');
});

route::get('/logout', function() {
    Session::forget('user');
    return redirect('/');
});

route::get('/forgot', function() {
    return view('auth.forgot');
});

route::get('/register', function() {
    return view('auth.register');
});

route::get('/home', function() {
    return view('admin.home');
});

route::get('/main', function() {
    return view('user.main');
});

route::get('/dashboard', function() {
    return view('user.dashboard');
});

route::get('/product', function() {
    return view('product');
});

route::get('/userlist', function() {
    return view('admin.userlist');
});

route::get('/useredit', function() {
    return view('useredit');
});

route::get('/userview', function() {
    return view('userview');
});

route::get('/prod', function() {
    return view('user.prod');
});

route::get('/products', function() {
    return view('user.products');
});

route::get('/about', function() {
    return view('user.about');
});

route::get('/contact', function() {
    return view('user.contact');
});




route::get('/product',[AdminController::class,'product']);

route::post('/uploadproduct',[AdminController::class,'uploadproduct']);

route::get('/showproduct',[AdminController::class,'showproduct']);

route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);

route::get('/updateview/{id}',[AdminController::class,'updateview']);

route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);

route::get('/showorder',[AdminController::class,'showorder']);

route::get('/updatestatus/{id}',[AdminController::class,'updatestatus']);





route::post('/login', [UserController::class, 'login']);

route::get('/login', [UserController::class, 'getuser']);

route::post('/register', [UserController::class, 'register']);

route::get('/',[UserController::class,'index']);

route::get('/dashboard',[UserController::class,'dashboard']);

route::get('/showuser',[UserController::class,'showuser']);

route::get('/search',[UserController::class,'search']);

route::post('/addcart/{id}',[UserController::class,'addcart']);

route::get('/showcart',[UserController::class,'showcart']);

route::post('/order',[UserController::class,'confirmorder']);

route::get('/delete/{id}',[UserController::class,'deletecart']);

route::get('/viewprofile',[UserController::class,'viewprofile']);

route::get('/editprofile',[UserController::class,'editprofile']);

route::post('/updateprofile',[UserController::class,'updateprofile']);




route::get('/addcart/{id}',[ProductController::class,'addcart']);






























