<?php
session_start();
ob_start();
if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];


use App\Controllers\ProductController;
use App\Controllers\CategoryController;
use App\Controllers\CommentController;
use App\Controllers\HomeController;
use App\Controllers\UsersController;
use App\Models\CategoryModel;
use App\Models\UsersModel;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";

$router = new Router;

// =============== ADMIN =================

Router::get('/home-admin', [CategoryController::class, 'home_admin']);

Router::get('/create-category', [CategoryController::class, 'create']);
Router::post('/create-category', [CategoryController::class, 'store']);
Router::get('/category', [CategoryController::class, 'index']);

Router::get('/update-category', [CategoryController::class, 'show']);
Router::post('/update-category', [CategoryController::class, 'update']);
Router::get('/delete-category', [CategoryController::class, 'delete']);

Router::get('/product', [ProductController::class, 'index']);

Router::get('/create-product', [ProductController::class, 'create']);
Router::post('/create-product', [ProductController::class, 'store']);

Router::get('/update-product', [ProductController::class, 'show']);
Router::post('/update-product', [ProductController::class, 'update']);
Router::get('/delete-product', [ProductController::class, 'delete']);


// +++++++++++++++++++++++ USERS ++++++++++++++++++++++++
Router::get('/', [HomeController::class, 'index']);

Router::get('/home', [HomeController::class, 'index']);
// Router::get('/home', [HomeController::class, 'showProductIddm']);

Router::get('/gioithieu', [HomeController::class, 'pageIntroduce']);
Router::get('/danhmuc', [HomeController::class, 'category']);
Router::get('/phukien', [HomeController::class, 'accessory']);
Router::get('/tintuc', [HomeController::class, 'news']);
Router::get('/lienhe', [HomeController::class, 'contact']);

Router::get('/sanpham_ct', [HomeController::class, 'sanpham_ct']);
Router::post('/sanpham_ct', [HomeController::class, 'storeBl']);

Router::get('/cart', [HomeController::class, 'cart']);
Router::post('/cart', [HomeController::class, 'storeCart']);

Router::get('/delete-cart', [HomeController::class, 'deleteCart']);



// ++++++++++++++++++++ Login - Logup ++++++++++++++++++++++
Router::get('/dangnhap', [UsersController::class, 'showLogin']);
Router::post('/dangnhap', [UsersController::class, 'login']);
Router::get('/dangky', [UsersController::class, 'showLogup']);
Router::post('/dangky', [UsersController::class, 'logup']);

Router::get('/logout',[UsersController::class,'unSession']);

// Router::get('/sanpham_ct', [CommentController::class, 'index']);


$router->resolve();



?>