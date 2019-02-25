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

/*
Ardie notes:
At later stage, move all unusual functions to its own controller, (can be single-action controller if u want)
 */

Route::get('/', function () {
    return view('/welcome');
});

Route::get('/books', 'BookController@show'); // ----------
Route::get('/books/filter', 'BookController@showfilter'); // ----------
Route::get('/book/create', 'BookController@create'); // ----------
Route::post('/book/save', 'BookController@store'); // ----------
Route::get('/book/edit/{id}', 'BookController@edit'); // ----------
Route::post('/book/update/{id}', 'BookController@update'); // ----------

Route::post('/admin/book/delete/{id}', 'BookController@destroy'); // ----------


Route::get('/admin', 'AdminController@index'); // ----------
Route::get('/admin/authors', 'AuthorsController@show'); // ----------
Route::get('/admin/authors/filter', 'AuthorsController@showfilter'); // ----------
Route::get('/admin/authors/create', 'AuthorsController@create'); // ----------
Route::post('/admin/authors/save', 'AuthorsController@store'); // ----------
Route::get('/admin/authors/edit/{id}', 'AuthorsController@edit'); // ----------
Route::post('/admin/authors/update/{id}', 'AuthorsController@update'); // ----------

Route::post('/admin/authors/delete/{id}', 'AuthorsController@destroy'); // ----------


Route::get('/admin/categories', 'CategoriesController@show'); // ----------
Route::get('/admin/categories/filter', 'CategoriesController@showfilter'); // ----------
Route::get('/admin/categories/create', 'CategoriesController@create'); // // ----------
Route::post('/admin/categories/save', 'CategoriesController@store'); // ----------
Route::get('/admin/categories/edit/{id}', 'CategoriesController@edit'); // ----------
Route::post('/admin/categories/update/{id}', 'CategoriesController@update'); // ----------

Route::post('/admin/categories/delete/{id}', 'CategoriesController@destroy'); // ----------


// subcategories deletion is not enforced/cascaded on books, but deletion of categories do..
Route::get('/admin/subcategories', 'SubcategoriesController@show'); // ----------
Route::get('/admin/subcategories/filter', 'SubcategoriesController@showfilter');  // ----------
Route::get('/admin/subcategories/create', 'SubcategoriesController@create'); // ----------
Route::post('/admin/subcategories/save', 'SubcategoriesController@store'); // ----------
Route::get('/admin/subcategories/edit/{id}', 'SubcategoriesController@edit'); // ----------
Route::post('/admin/subcategories/update/{id}', 'SubcategoriesController@update'); // ----------

Route::post('/admin/subcategories/delete/{id}', 'SubcategoriesController@destroy'); // ----------


// ------------------------------ advanced search ------------------------------
// ---------- single action controller magic is available for later versions of Laravel
// ---------- Dont you think you should upgrade too? what are u doing Ardie?
Route::get('/advancedsearch', 'AdvancedSearchController@index');
Route::get('/filterkeyword', 'AdvancedSearchController@showfilter');
// ------------------------------ advanced search ------------------------------

Route::post('/verifydelete/{id}', 'VerifyDeleteController@verifydelete'); // ----------



