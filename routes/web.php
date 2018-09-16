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

//--------------------------------------------------------------
//AUTH
Route::get ( '/', function () {
    return view ( 'homePage' );
} );
Auth::routes ();


//--------------------------------------------------------------
//HOMEPAGE
Route::get ( '/home', 'HomeController@index' )->name ( 'home' );
Route::get ( '/homePage', 'indexController@index' );


//--------------------------------------------------------------
//RINGS ROUTES
//READ
Route::get ( '/ringCatalog', 'RingController@index' );

//DELETE
Route::get ( '/delete/{id}', 'RingController@delete' );

//CREATE
Route::get ( '/createRing/store', 'RingController@store' );
Route::post ( '/createRing/create', 'RingController@create' );

//EDIT
Route::get ( '/ringCatalog/{id}/edit', 'RingController@edit' );
Route::put ( '/ringCatalog/{id}', 'RingController@update' );


//--------------------------------------------------------------
//BRACELETS ROUTES
//READ
Route::get ( '/braceletCatalog', 'BraceletController@index' );

//CREATE
Route::get ( '/createBracelet/store', 'BraceletController@store' );
Route::post ( '/createBracelet/create', 'BraceletController@create' );

//DELETE
Route::get ( '/deleteBrac/{id}', 'BraceletController@delete' );

//EDIT
Route::get ( '/braceletCatalog/{id}/edit', 'BraceletController@edit' );
Route::put ( '/braceletCatalog/{id}', 'BraceletController@update' );


//--------------------------------------------------------------
//NECKLACES
//READ
Route::get ( '/necklacesCatalog', 'NecklacesController@index' );

//CREATE
Route::get ( '/createNecklaces/store', 'NecklacesController@store' );
Route::post ( '/necklacesCatalog/create', 'NecklacesController@create' );

//DELETE
Route::get ( '/deleteNeck/{id}', 'NecklacesController@delete' );

//EDIT
Route::get ( '/necklacesCatalog/{id}/edit', 'NecklacesController@edit' );
Route::put ( '/necklacesCatalog/{id}', 'NecklacesController@update' );


//--------------------------------------------------------------
//EARRING
//READ
Route::get ( '/earringCatalog', 'EarringController@index' );

//CREATE
Route::get ( '/createEarring/store', 'EarringController@store' );
Route::post ( '/earringCatalog/create', 'EarringController@create' );

//DELETE
Route::get ( '/deleteEar/{id}', 'EarringController@delete' );

//EDIT
Route::get ( '/earringCatalog/{id}/edit', 'EarringController@edit' );
Route::put ( '/earringCatalog/{id}', 'EarringController@update' );


//--------------------------------------------------------------
//GALLERY ROUTE
Route::get ( '/earringGallery', 'GalleryController@earring' );
Route::get ( '/ringGallery', 'GalleryController@ring' );
Route::get ( '/necklacesGallery', 'GalleryController@necklaces' );
Route::get ( '/braceletsGallery', 'GalleryController@bracelet' );
Route::get ( '/gallery', 'GalleryController@index' );

//--------------------------------------------------------------
//ABOUT JEWELRY
Route::get('/ringCatalog/{id}/about','AboutController@aboutRing');
Route::get('/necklacesCatalog/{id}/about','AboutController@aboutNecklace');
Route::get('/earringCatalog/{id}/about','AboutController@aboutEarring');
Route::get('/braceletCatalog/{id}/about','AboutController@aboutBracelet');

//--------------------------------------------------------------
//EMAIL
Route::get ( '/contacts', 'mailSetting@index' );
Route::post ( '/send', 'mailSetting@send' );


//--------------------------------------------------------------
//ABOUT US
Route::get ( '/aboutUs', function () {
    return view ( 'aboutUs' );
} );


//--------------------------------------------------------------
//BUY
Route::get ( '/ringCatalog/{id}/buy', 'BuyController@ring' );
Route::get ( '/necklacesCatalog/{id}/buy', 'BuyController@necklace' );
Route::get ( '/earringCatalog/{id}/buy', 'BuyController@earring' );
Route::get ( '/braceletCatalog/{id}/buy', 'BuyController@bracelet' );
Route::post ( '/sendProd', 'mailSetting@sendProd' );



