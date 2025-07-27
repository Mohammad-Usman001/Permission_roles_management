<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminpanel', function () {
    return view('admin.layout.master');
})->middleware(['auth', 'verified'])->name('adminpanel');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Permission Route
    Route::get('/permission-create',[PermissionController::class, 'create'])->name('permission.create');
    Route::post('/permission-store',[PermissionController::class, 'store'])->name('permission.store');
    Route::get('/permissions',[PermissionController::class, 'index'])->name('permissions.index');
    Route::delete('/permission/{id}',[PermissionController::class, 'destroy'])->name('permission.destroy');
    Route::get('/permission-edit/{id}',[PermissionController::class, 'edit'])->name('permission.edit');
    Route::put('/permission-update/{id}',[PermissionController::class, 'update'])->name('permission.update');

    // Role Route
    Route::get('/roles',[RoleController::class, 'index'])->name('roles.index');
    Route::get('/role-create',[RoleController::class, 'create'])->name('role.create');
    Route::post('/role-store',[RoleController::class, 'store'])->name('role.store');
    Route::get('/role-edit/{id}',[RoleController::class, 'edit'])->name('role.edit');
    Route::put('/role-update/{id}',[RoleController::class, 'update'])->name('role.update');
    Route::delete('/role/{id}',[RoleController::class, 'destroy'])->name('role.destroy');

    // Article Routes
    Route::get('/articles',[ArticleController::class, 'index'])->name('article.index');
    Route::get('/article-create',[ArticleController::class, 'create'])->name('article.create');
    Route::post('/article-store',[ArticleController::class, 'store'])->name('article.store');
    Route::delete('/article/{id}',[ArticleController::class, 'destroy'])->name('article.destroy');
    Route::get('/article-edit/{id}',[ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/article-update/{id}',[ArticleController::class, 'update'])->name('article.update');

      // Users Routes
    Route::get('/Users',[UserController::class, 'index'])->name('users.index');
    Route::get('/users-create',[UserController::class, 'create'])->name('users.create');
    Route::delete('/user/{id}',[UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/user-edit/{id}',[UserController::class, 'edit'])->name('user.edit');
    Route::put('/user-update/{id}',[UserController::class, 'update'])->name('user.update');
    Route::post('/user-store',[UserController::class, 'store'])->name('user.store');
});

// Route::view('/adminpanel', 'admin.layout.master')->name('adminpanel');
require __DIR__.'/auth.php';
