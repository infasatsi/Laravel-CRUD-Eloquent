<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;
use Illuminate\Http\Request;

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

//First run this route to get csrf token. Then add this to header for edit or post request to avoid errors
// A header value should be set to     key: X-CSRF-TOKEN  value: <your csrf token>
Route::get('/', function () {
    return csrf_token();
});

// Retrieve all posts
Route::get('/posts', function () {
    return Post::all();
});

// Create a new post
Route::post('/posts', function (Request $request) {
    return Post::create($request->all());
});

// Retrieve a specific post
Route::get('/posts/{id}', function ($id) {
    return Post::findOrFail($id);
});

// Update a specific post
Route::put('/posts/{id}', function (Request $request, $id) {
    $post = Post::findOrFail($id);
    $post->update($request->all());
    return $post;
});

// Delete a specific post
Route::delete('/posts/{id}', function ($id) {
    Post::findOrFail($id)->delete();
    return response()->json(['message' => 'Post deleted']);
});
