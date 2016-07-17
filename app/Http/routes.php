<?php



Route::group(['middleware' => 'auth'], function () {

	Route::get('/Admin',function(){
  return view('Admin.index');
});
Route::get('/productList',function(){
  return view('Admin.productList');
});

Route::get('/addProduct',function(){
  return view('Admin.addProduct');
});

// Route::get('/editCategory',function(){
//   return view('Admin.editCategory');
// });

// Route::get('/categoryList',function(){
//   return view('Admin.categoryList');
// });

Route::get('/addCategory', 'CategoryController@create');
Route::post('/addCategory', 'CategoryController@store');
Route::get('/categoryList', 'CategoryController@show');
Route::get('/editCategory/{category}','CategoryController@edit');
Route::patch('/editCategory/{category}','CategoryController@update');
Route::get('/delete/{category}','CategoryController@destroy');

Route::get('/addProduct', 'ProductController@create');
Route::post('/addProduct', 'ProductController@store');
Route::get('/productList', 'ProductController@show');
Route::get('/editProduct/{product}','ProductController@edit');
Route::patch('/editProduct/{product}','ProductController@update');
Route::get('/deleteProduct/{product}','ProductController@destroy');

Route::get('/addslider', 'SliderController@create');
Route::post('/addslider', 'SliderController@store');
Route::get('/sliderlist', 'SliderController@show');
Route::get('/editSlider/{slider}','SliderController@edit');
Route::patch('/editSlider/{slider}','SliderController@update');
Route::get('/deleteSlider/{slider}','SliderController@destroy');

Route::get('/addBlog','BlogController@create');
Route::post('/addBlog','BlogController@store');
Route::get('/blogList','BlogController@show');
Route::get('/editBlog/{blog}','BlogController@edit');
Route::patch('/editBlog/{blog}','BlogController@update');
Route::get('/deleteBlog/{blog}','BlogController@destroy');
   

});

Route::get('/', 'pageController@indexPage');
Route::get('/contact', 'pageController@contactPage');
Route::get('/about', 'pageController@aboutPage');
Route::get('/bloglist', 'pageController@blogListPage');
Route::get('/blogsingle', 'pageController@blogSinglePage');
Route::get('/delivery', 'pageController@deliveryPage');
Route::get('/offers', 'pageController@offersPage');
Route::get('/shopsidebar', 'pageController@shopSideBarPage');
Route::get('/shopsidebar/{id}', 'pageController@shopSideBarPage');
Route::get('/shopsingle', 'pageController@shopSinglePage');
Route::get('/wishlist', 'pageController@wishListPage');
Route::get('/addtocard', 'pageController@addtoCardPage');

Route::auth();

