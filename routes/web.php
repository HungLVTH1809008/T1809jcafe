<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/quan_ly_category","MyController@CategoryList");
Route::get("/quan_ly_product","MyController@ProductList");
Route::get("/quan_ly_customer","DemoController@CustomerList");
Route::get("/quan_ly_employees","DemoController@EmployeesList");


Route::get("/danhsach","MyController@danhsach");

// Thêm dữ liệu
Route::get('/them_Category',"MyController@them_Category");
Route::post('/them_Category',"MyController@luucategory");

Route::get('/them_Product',"MyController@them_Product");
Route::post('/them_Product',"MyController@luuproduct");

Route::get('/them_Customer',"MyController@them_Customer");
Route::post('/them_Customer',"MyController@luucustomer");

Route::get('/them_Employees',"MyController@them_employees");
Route::post('/them_Employees',"MyController@luuemployees");

//sửa xóa dữ liệu
Route::get('/xoa-category/{id}',"MyController@xoacategory");
Route::get('/sua-category',"MyController@suacategory");
Route::post('/sua-category',"MyController@updatecategory");



//Route::get('/chitietsanpham',"MyController@chitietsanpam");



//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

