<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/shop/{id}','HomeController@shop')->name('shop');

    Route::get('/dangnhap','UserController@Login')->name('home.login');
    Route::get('/dangky','UserController@Register')->name('home.register');
    Route::POST('/postlogin','UserController@PostLogin')->name('home.postLogin');
    Route::POST('/postregister','UserController@PostRegister')->name('home.postRegister');
    Route::get('/logout','UserController@logout')->name('home.logout');
    Route::get('/quen-matkhau','UserController@changepass')->name('home.changepass');
    Route::POST('/quen-matkhau/layemail','UserController@getemail')->name('home.getemail');
    Route::get('/quen-matkhau/matkhau-moi/{email}','UserController@newpass')->name('home.newpass');
    Route::POST('/quen-matkhau/mkm','UserController@postpasss')->name('home.postpasss');
    
    Route::prefix('admin')->group(function () {
        // route User
        Route::get('/doimatkhau/{id}','AdminController@changepass')->name('admin.changepass');
        Route::POST('/doimatkhau/{id}','AdminController@postchangepass')->name('admin.postchangepass');
        Route::get('/index','AdminController@index')->name('admin.index');
        Route::get('/listuser','AdminController@listUser')->name('admin.listUser');
        Route::get('/edituser','AdminController@editUser')->name('admin.edituser');
        // route Product
        Route::get('/danhsach-sanpham','ProductController@list')->name('admin.listProduct');
        Route::get('/editproduct/{id}','ProductController@edit')->name('admin.editProduct');
        Route::PUT('/updateproduct/{id}','ProductController@update')->name('admin.updateProduct');
        Route::get('/addproduct','ProductController@add')->name('admin.addProduct');
        Route::POST('/postaddproduct','ProductController@create')->name('admin.postaddProduct');
        Route::DELETE('/deleteproduct/{id}','ProductController@delete')->name('admin.deleteProduct');
        //category
        Route::get('/danhsach-Category','CategoryController@list')->name('admin.listCategory');
        Route::get('/editpCategory/{id}','CategoryController@edit')->name('admin.editCategory');
        Route::PUT('/updatepCategory/{id}','CategoryController@update')->name('admin.updateCategory');
        Route::get('/addCategory','CategoryController@add')->name('admin.addCategory');
        Route::POST('/postadCategory','CategoryController@create')->name('admin.postaddCategory');
        Route::DELETE('/deleteCategory/{id}','CategoryController@delete')->name('admin.deleteCategory');

        //route blob
        Route::get('/danhsach-blog','BlogController@list')->name('admin.listBlog');
        Route::get('/editblog/{id}','BlogController@edit')->name('admin.editBlog');
        Route::PUT('/updateblog/{id}','BlogController@update')->name('admin.updateBlog');
        Route::get('/addblog','BlogController@add')->name('admin.addBlog');
        Route::POST('/postaddblog','BlogController@create')->name('admin.postaddBlog');
        Route::DELETE('/deleteblog/{id}','BlogController@delete')->name('admin.deleteBlog');
        //Route Bill
        Route::get('/','BillsController@list')->name('admin.listBill');
        Route::get('/hoadon/sanpham/{id}/{idUser}','BillsController@sanpham')->name('admin.sanpham');
        Route::get('/editbill/{id}','BillsController@edit')->name('admin.editBill');
        Route::PUT('/updatebill/{id}','BillsController@update')->name('admin.updateBill');
        Route::get('/addbill','BillsController@add')->name('admin.addBill');
        Route::get('/changebill/{id}','BillsController@change')->name('admin.changeBill');
        Route::POST('/postaddbill','BillsController@create')->name('admin.postaddBill');
        Route::DELETE('/deletebill/{id}','BillsController@delete')->name('admin.deleteBill');
        Route::get('/historyBill','BillsController@history')->name('admin.historyBill');
    });
    Route::prefix('/')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/thit', 'HomeController@thit')->name('home.thit');
    Route::get('/haisan', 'HomeController@haisan')->name('home.haisan');
    Route::get('/donglanh', 'HomeController@donglanh')->name('home.donglanh');
    Route::get('/goihang', 'HomeController@goihang')->name('home.goihang');
    Route::get('/addcart/{idUser}/{idProduct}', 'HomeController@addcart')->name('home.addcart');
    Route::get('/themcart/{idUser}/{idProduct}', 'HomeController@themcart')->name('home.themcart');
    Route::get('/trucart/{idUser}/{idProduct}', 'HomeController@trucart')->name('home.trucart');
    Route::get('/nguoidung=1acas2{idUser}az2dxa/cart', 'HomeController@cartUser')->name('home.cartUser');
    Route::get('/sanpham/{idProduct}', 'HomeController@viewProduct')->name('home.product');
    Route::get('/blog/{idBlog}', 'HomeController@blog')->name('home.blog');
    Route::get('/suatancongnghiep', 'HomeController@suatan')->name('home.blogs');
    Route::get('/thanhtoan', 'HomeController@pay')->name('home.pay');
    Route::POST('/postthanhtoan','HomeController@postthanhtoan')->name('home.postthanhtoan');
    Route::DELETE('/deleteproductuser/{id}','HomeController@delete')->name('home.deleteProduct');
    Route::get('/kiemtradonhang', 'HomeController@mycart')->name('home.mycart');
    
    });