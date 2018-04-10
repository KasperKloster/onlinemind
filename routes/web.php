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

Route::get('/', 'PagesController@pageFront')->name('front');

Route::get('seo', 'PagesController@pageSEO')->name('seo');
Route::get('webudvikling', 'PagesController@pageWebudvikling')->name('webudvikling');
Route::get('grafisk-design', 'PagesController@pageGrafiskDesign')->name('grafisk_design');
Route::get('tekstforfatning', 'PagesController@pageTekstforfatning')->name('tekstforfatning');

Route::get('kontakt', 'PagesController@pageKontakt')->name('kontakt');
Route::post('kontakt', 'PagesController@postKontakt');
