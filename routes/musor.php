
<x-mail::message>
    # Introduction

    The body of your message.

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>


<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    // IndexController için tek bir route eklendi
    Route::get('/', 'Main\IndexController');

    // Kategori ve Tag için route grupları otomatik olarak oluşturulacak
    $namespaces = ['Category', 'Tag'];
    foreach ($namespaces as $namespace) {

        $plural = strtolower($namespace) === 'category' ? 'categories' : strtolower($namespace) . 's';

        Route::group(['namespace' => "$namespace", 'prefix' => $plural], function () use ($namespace) {
            Route::get('/', 'IndexController')->name("$namespace.index");
            Route::get('/create', 'CreateController')->name("$namespace.create");
            Route::post('/', 'StoreController')->name("$namespace.store");
            Route::get('/{'.strtolower($namespace).'}', 'ShowController')->name("$namespace.show");
            Route::get('/{'.strtolower($namespace).'}edit', 'EditController')->name("$namespace.edit");
            Route::patch('/{'.strtolower($namespace).'}', 'UpdateController')->name("$namespace.update");
            Route::delete('/{'.strtolower($namespace).'}', 'DeleteController')->name("$namespace.delete");
        });
    }
});




Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController');
    });


    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('category.index');
        Route::get('/create', 'CreateController')->name('category.create');
        Route::post('/', 'StoreController')->name('category.store');
        Route::get('/{category}', 'ShowController')->name('category.show');
        Route::get('/{category}/edit', 'EditController')->name('category.edit');
        Route::patch('/{category}', 'UpdateController')->name('category.update');
        Route::delete('/{category}', 'DeleteController')->name('category.delete');
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', 'IndexController')->name('tag.index');
        Route::get('/create', 'CreateController')->name('tag.create');
        Route::post('/', 'StoreController')->name('tag.store');
        Route::get('/{tag}', 'ShowController')->name('tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('tag.delete');
    });
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    // IndexController için tek bir route eklendi
    Route::get('/', 'Main\IndexController');

    // Kategori ve Tag için route grupları otomatik olarak oluşturulacak
    $namespaces = ['Category', 'Tag'];
    foreach ($namespaces as $namespace) {

        $plural = strtolower($namespace) === 'category' ? 'categories' : strtolower($namespace) . 's';

        Route::group(['namespace' => "$namespace", 'prefix' => $plural], function () use ($namespace) {
            Route::get('/', 'IndexController')->name($namespace . '.index');
            Route::get('/create', 'CreateController')->name($namespace . '.create');
            Route::post('/', 'StoreController')->name($namespace . '.store');
            Route::get('/{'.strtolower($namespace).'}', 'ShowController')->name($namespace . '.show');
            Route::get('/{'.strtolower($namespace).'}/edit', 'EditController')->name($namespace . '.edit');
            Route::patch('/{'.strtolower($namespace).'}', 'UpdateController')->name($namespace . '.update');
            Route::delete('/{'.strtolower($namespace).'}', 'DeleteController')->name($namespace . '.delete');
        });
    }
});




Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    $namespaces = ['Main', 'Category', 'Tag'];

    foreach ($namespaces as $namespace) {
        $prefix = strtolower($namespace) === 'category' ? 'categories' : strtolower($namespace) . 's';

        Route::group(['namespace' => $namespace, 'prefix' => $prefix], function () use ($namespace) {
            switch ($namespace) {
                case 'Main':
                    Route::get('/', 'IndexController');
                    break;
                case 'Category':
                    Route::get('/', 'IndexController')->name('category.index');
                    Route::get('/create', 'CreateController')->name('category.create');
                    Route::post('/', 'StoreController')->name('category.store');
                    Route::get('/{category}', 'ShowController')->name('category.show');
                    Route::get('/{category}/edit', 'EditController')->name('category.edit');
                    Route::patch('/{category}', 'UpdateController')->name('category.update');
                    Route::delete('/{category}', 'DeleteController')->name('category.delete');
                    break;
                case 'Tag':
                    Route::get('/', 'IndexController')->name('tag.index');
                    Route::get('/create', 'CreateController')->name('tag.create');
                    Route::post('/', 'StoreController')->name('tag.store');
                    Route::get('/{tag}', 'ShowController')->name('tag.show');
                    Route::get('/{tag}/edit', 'EditController')->name('tag.edit');
                    Route::patch('/{tag}', 'UpdateController')->name('tag.update');
                    Route::delete('/{tag}', 'DeleteController')->name('tag.delete');
                    break;
                default:
                    break;
            }
        });
    }
});

