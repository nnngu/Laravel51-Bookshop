<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('welcome', function () {
//    return view('welcome');
//});
//
//Route::get('/index', function () {
//    return 'Index Page';
//});
//
//Route::get('/help', function () {
//    return 'Help Page';
//});
//
//Route::post('/foo', function () {
//    // 该路由将匹配 post 方法的 '/foo' url
//});
//
//Route::put('/foo', function () {
//    // 该路由将匹配 put 方法的 '/foo' url
//});
//
//Route::match(['get', 'post'], '/foo', function () {
//    // 该路由将匹配 get 和 post 方法的 '/foo' url
//});
//
//Route::any('/foo', function () {
//    // 该路由将匹配 所有 类型的 '/foo' url
//});
//
//Route::get('name/{name}', function ($name) {
//    return 'I`m ' . $name;
//});
//
//Route::get('name/{name}/age/{age}', function ($name, $age) {
//    return 'I`m ' . $name . ' , and I`m ' . $age;
//});
//
//Route::get('hello/{name?}', function ($name = 'Jack') {
//    return 'Hello! ' . $name;
//});
//
//Route::get('foo', ['as' => 'foo', function () {
//    //
//}]);
//
//Route::get('foo', function () {
//    //
//})->name('foo');
//
//Route::group(['middleware' => 'auth'], function () {
//    Route::get('/', function () {
//        // 该路由将使用 Auth 中间件
//    });
//
//    Route::get('name', function () {
//        // 该路由也将使用 Auth 中间件
//    });
//});
//
//Route::group(['namespace' => 'Admin'], function () {
//    // 控制器在「App/Http/Controllers/Admin」命名空間
//
//    Route::group(['namespace' => 'User'], function () {
//        // 控制器在「App/Http/Controllers/Admin/User」命名空間
//    });
//});
//
//Route::group(['prefix' => 'user'], function () {
//    Route::get('name', function () {
//        //
//    });
//    Route::get('age', function () {
//        //
//    });
//    Route::get('introduction', function () {
//        //
//    });
//});
//
//Route::group(['prefix' => 'user/{id}'], function () {
//    Route::get('name', function ($id) {
//        // 符合 user/{id}/name 的url
//        return "$id";
//    });
//    Route::get('age', function($id) {
//        //符合 user/{id}/age 的url
//    });
//});
//
//Route::get('/help', function () {
//    return url('/help');
//});
//
//Route::get('help', function () {
//    return route('foo');
//});
//
//Route::get('foo', function () {
//    //
//})->name('foo');
//
//Route::get('hello/{name?}', function ($name = 'Tom') {
//    return "Hello! $name";
//})->where('name', '[A-Za-z]+');
//
//Route::get('name/{name}/age/{age}', function ($name, $age) {
//    return 'I`m '.$name.', and I`m '.$age;
//})->where(['name' => '[A-Za-z]+', 'age' => '[0-9]+']);
//
//Route::get('/', function() {
//    return view('welcome');
//});
//
//Route::get('user/name', 'User\UserController@name');
//Route::get('user/age', 'UserController@age');
//Route::get('user/introduction', 'UserController@introduction');
//Route::get('user/{id}', 'UserController@show');
//
//Route::get('/', function() {
//    return view('welcome');
//});
//Route::get('/young/{age?}', 'UserController@young')->middleware('young');
//
//Route::get('welcome', function() {
//    return view('welcome');
//});
//Route::get('/', function () {
//    return view('greeting', ['name' => 'James']);
//});
//Route::get('errors', function () {
//    return view('errors.503', ['message' => '503 haha哈哈']);
//});
//
//Route::get('/', 'HomeController@home')->name('home');
//
//
//Route::get("/", 'StaticPagesController@home')->name('home');
//Route::get('/about', 'StaticPagesController@about')->name('about');
//
//Route::get('/store/{name}', 'FlightController@store')->name('store');
//Route::get('/update/{id}/{new_name}', 'FlightController@update')->name('update');
//Route::get('/delete/{id}', 'FlightController@delete')->name('delete');
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/articles', 'ArticlesController@index')->name('articles.index');
//Route::get('/articles/{id}', 'ArticlesController@show')->name('articles.show');
//Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
//Route::post('/articles', 'ArticlesController@store')->name('articles.store');
//Route::get('/articles/{id}/edit', 'ArticlesController@edit')->name('articles.edit');
//Route::patch('/articles/{id}', 'ArticlesController@update')->name('articles.update');
//Route::delete('/articles/{id}', 'ArticlesController@destroy')->name('articles.destroy');

//Route::resource('articles', 'ArticlesController');
//
//Route::get('test', function () {
//    return 'get request';
//});
//Route::any('test', function () {
//    return 'any request';
//});
//Route::post('test', function () {
//    return 'post request';
//});
//Route::resource('user', 'UserController2');
//
//Route::get('plus/{num1}/{num2}', 'MathController@plus');

//Route::get('/my_welcome', 'MyController@index');
//Route::get('home2', function() {
//    $people = [
////        'name' => '小明',
////        'age' => 25
//        '小明1',
//        '小明2',
//        '小明3',
//        '小明4'
//    ];
//    return view('home2', compact('people'));
//});

//Route::get('{number}', function($number) {
//    return view('home' . $number);
//});

//Route::get('test', function () {
//    $arr = ['one'=>1, 'two'=>2, 'three'=>3];
//    $collection = collect($arr);
//    $r = $collection->take(-2);
//    return $r;

//    return $collection->all();
//    dd($collection);

//    $user = new App\User();
//    $users = $user->all();
//    return $users;
//});

//Route::get('form', function () {
//    return view('form');
//});



//Route::get('/', function (){
//    return view('welcome');
//});
//
//Route::any('test', 'TestController@create');
//
//Route::get('test/helper', function() {
//    $arr = [
//        'name'=>'jack',
//        'age'=>18,
//        'job'=>'no'
//    ];
//    return camel_case('hello_world');
//});
//
//Route::get('nnngu', function () {
//    return 'good nnngu !';
//});
//
//Route::get('haha', function() {
//	return '哈哈😁';
//});


//use App\Entity\Member;


Route::get('/', function() {
    return view('bookshop.login');
});

Route::get('/login', 'View\MemberController@toLogin');

Route::get('/register', 'View\MemberController@toRegister');

Route::any('service/validate_code/create', 'Service\ValidateController@create');




