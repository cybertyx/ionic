<?php
$this->group(['prefix' => 'admin', 'middleware' => 'auth.checkrole'], function() {
    /** ROTAS CATEGORIES */
    $this->get('categories/', 'CategoriesController@index')->name('categoriesIndex');
    $this->get('categories/create', 'CategoriesController@create')->name('createCategories');
    $this->get('categories/edit/{id}', 'CategoriesController@edit')->name('editCategories');
    $this->post('categories/upgrade/{id}', 'CategoriesController@upgrade')->name('upgradeCategories');
    $this->post('categories/store', 'CategoriesController@store')->name('storeCategories');
    $this->get('categories/destroy/{id}', 'CategoriesController@destroy')->name('destroyCategories');

    /** ROTAS PRODUTOS */
    $this->get('product/', 'ProductsController@index')->name('productsIndex');
    $this->get('product/create', 'ProductsController@create')->name('createProducts');
    $this->get('product/edit/{id}', 'ProductsController@edit')->name('editProducts');
    $this->post('product/update/{id}', 'ProductsController@update')->name('updateProducts');
    $this->post('product/store', 'ProductsController@store')->name('storeProducts');
    $this->get('product/destroy/{id}', 'ProductsController@destroy')->name('destroyProducts');

    /** ROTAS CLIENTS */
    $this->get('client/', 'clientsController@index')->name('clientsIndex');
    $this->get('client/create', 'clientsController@create')->name('createClients');
    $this->get('client/edit/{id}', 'clientsController@edit')->name('editclients');
    $this->post('client/update/{id}', 'clientsController@update')->name('updateclients');
    $this->post('client/store', 'clientsController@store')->name('storeclients');
    $this->get('client/destroy/{id}', 'clientsController@destroy')->name('destroyclients');
    
    /** ROTAS PEDIDOS (ORDERS) */
    $this->get('orders/', 'ordersController@index')->name('ordersIndex');
    $this->get('orders/create', 'ordersController@create')->name('createorders');
    $this->get('orders/edit/{id}', 'ordersController@edit')->name('editorders');
    $this->post('orders/update/{id}', 'ordersController@update')->name('updateorders');
    $this->post('orders/store', 'ordersController@store')->name('storeorders');
    $this->get('orders/destroy/{id}', 'ordersController@destroy')->name('destroyorders');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
