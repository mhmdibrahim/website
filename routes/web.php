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

Route::get('/','HomeController@index')->name('show');
Route::post('/','HomeController@contact_us')->name('contact_us');

Route::get('/admin','AdminController@index')->name('index');
Route::post('admin/login','Auth\LoginController@login');
Route::get('/logout','Auth\LoginController@logout');

Route::get('/home','AdminController@home')->middleware('auth');


Route::get('/sliders','SliderController@show')->name('slider.show')->middleware('auth');
Route::post('/slider/add','SliderController@add')->name('slider.add')->middleware('auth');
Route::get('/slider/edit/{id}','SliderController@edit')->name('slider.edit')->middleware('auth');
Route::post('/slider/{id}/update','SliderController@update')->name('slider.update')->middleware('auth');
Route::get('/slider/delete/{id}','SliderController@delete')->name('slider.delete')->middleware('auth');

Route::get('/about','AboutController@show')->name('about.show');
Route::post('/about/add','AboutController@add')->name('about.add');
Route::post('/about/{id}/update','AboutController@update')->name('about.update');
Route::get('/about/delete/{id}','AboutController@delete')->name('about.delete');

Route::get('/portfolio','PortofolioController@show')->name('portofolio.show')->middleware('auth');
Route::post('/portofolio/add','PortofolioController@add')->name('portofolio.add')->middleware('auth');
Route::post('/portofolio/update/{id}','PortofolioController@update')->name('portofolio.update')->middleware('auth');
Route::get('/portofolio/delete/{id}','PortofolioController@delete')->name('portofolio.delete')->middleware('auth');


Route::get('/teams','TeamController@show')->name('team.show')->middleware('auth');
Route::post('/team/add','TeamController@add')->name('Team.add')->middleware('auth');
Route::get('/team/delete/{id}','TeamController@delete')->name('Team.delete')->middleware('auth');

Route::get('/blogs','BlogController@show')->name('blogs.show');
Route::post('/blog/add','BlogController@add')->name('blog.add');
Route::post('/blog/{id}/update','BlogController@update')->name('blog.update');
Route::post('/blog/{id}/delete','BlogController@delete')->name('blog.delete');

Route::get('/clients','ClientController@show')->name('clients.show')->middleware('auth');
Route::post('/client/add','ClientController@add')->name('client.add')->middleware('auth');
Route::post('/client/update/{id}','ClientController@update')->name('client.update')->middleware('auth');
Route::get('/client/delete/{id}','ClientController@delete')->name('client.delete')->middleware('auth');


Route::get('/services','ServiceController@show')->name('services.show')->middleware('auth');
Route::post('/service/add','ServiceController@add')->name('service.add')->middleware('auth');
Route::post('/service/update/{id}','ServiceController@update')->name('service.update')->middleware('auth');
Route::get('/service/delete/{id}','ServiceController@delete')->name('service.delete')->middleware('auth');

Route::get('/contacts','ContactController@show')->name('contact.show')->middleware('auth');
Route::post('/contact/add','ContactController@add')->name('contact.add')->middleware('auth');
Route::post('/contact/update/{id}','ContactController@update')->name('contact.update')->middleware('auth');
Route::get('/contact/delete/{id}','ContactController@delete')->name('contact.delete')->middleware('auth');

