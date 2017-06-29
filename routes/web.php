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
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
