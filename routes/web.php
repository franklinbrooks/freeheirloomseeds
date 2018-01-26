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
    return View('welcome')->withTitle('Home');
});

// about page (app/views/about.blade.php)
Route::get('about', function()
{
    return View::make('about')->withTitle('About');
});

// volunteer page (app/views/volunteer.blade.php)
Route::get('volunteer', function()
{
    return View::make('volunteer')->withTitle('Volunteer');
});

// distributors page (app/views/distributors.blade.php)
Route::get('distributors', function()
{
    return View::make('distributors')->withTitle('Distributors');
});

// links page (app/views/links.blade.php)
Route::get('links', function()
{
    return View::make('links')->withTitle('Links');
});

// donate page (app/views/donate.blade.php)
Route::get('donate', function()
{
    return View::make('donate')->withTitle('Donate');
});

Route::get('contact', 'ContactController@getContact');
Route::post('contact', 'ContactController@postContact');

// work page (app/views/work.blade.php)
Route::get('work', array('as' => 'work', function()
{
    return View::make('work');
}));
