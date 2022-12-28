<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\CommiteeController;
use App\Http\Controllers\Api\PresidentController;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\VideoController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\SubCategoryController;
use App\Http\Controllers\Api\AdmitionController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\ParentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// ****************user api is ready*******************************//
Route::get('/users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);
// ****************user api is ready*******************************//
// ****************Teacher api is ready*******************************//
Route::get('teacher', [TeacherController::class, 'index']);
Route::post('teacher', [TeacherController::class, 'store']);
Route::get('teacher/{id}', [TeacherController::class, 'show']);
Route::put('teacher/{id}', [TeacherController::class, 'update']);
Route::delete('/teacher/{id}', [TeacherController::class, 'destroy']);
// ****************Teacher api is ready*******************************//
// ****************STUDENT api is ready*******************************//
Route::get('student/', [StudentController::class, 'index']);
Route::post('student/', [StudentController::class, 'store']);
Route::get('student/{id}', [StudentController::class, 'show']);
Route::put('student/{id}', [StudentController::class, 'update']);
Route::delete('student/{id}', [StudentController::class, 'destroy']);
// ****************STUDENT api is ready*******************************//
// ****************COMMITEE api is ready*******************************//
Route::get('commitee/', [CommiteeController::class, 'index']);
Route::post('commitee/', [CommiteeController::class, 'store']);
Route::get('commitee/{id}', [CommiteeController::class, 'show']);
Route::put('commitee/{id}', [CommiteeController::class, 'update']);
Route::delete('commitee/{id}', [CommiteeController::class, 'destroy']);
// ****************COMMITEE api is ready*******************************//
// ****************PRESIDENT api is ready*******************************//
Route::get('president/', [PresidentController::class, 'index']);
Route::post('president/', [PresidentController::class, 'store']);
Route::get('president/{id}', [PresidentController::class, 'show']);
Route::put('president/{id}', [PresidentController::class, 'update']);
Route::delete('president/{id}', [PresidentController::class, 'destroy']);
// ****************PRESIDENT api is ready*******************************//
// ****************SERIAL api is ready*******************************//
Route::get('blog', [BlogController::class, 'index']);
Route::post('blog/', [BlogController::class, 'store']);
Route::get('blog/{id}', [BlogController::class, 'show']);
Route::put('blog/{id}', [BlogController::class, 'update']);
Route::delete('blog/{id}', [BlogController::class, 'destroy']);
// ****************SERIAL api is ready*******************************//
// ****************VIDEO api is ready*******************************//
Route::get('video', [VideoController::class, 'index']);
Route::post('video/', [VideoController::class, 'store']);
Route::get('video/{id}', [VideoController::class, 'show']);
Route::put('video/{id}', [VideoController::class, 'update']);
Route::delete('video/{id}', [VideoController::class, 'destroy']);
// ****************VIDEO api is ready*******************************//
// ****************CATEGORY api is ready*******************************//
Route::get('category', [CategoryController::class, 'index']);
Route::post('category/', [CategoryController::class, 'store']);
Route::put('category/{id}', [CategoryController::class, 'update']);
Route::get('category/{id}', [CategoryController::class, 'show']);
Route::delete('category/{id}', [CategoryController::class, 'destroy']);
// ****************CATEGORY api is ready*******************************//
// ****************SUBCATEGORY api is ready*******************************//
Route::get('subcategory', [SubCategoryController::class, 'index']);
Route::post('subcategory/', [SubCategoryController::class, 'store']);
Route::put('subcategory/{id}', [SubCategoryController::class, 'update']);
Route::get('subcategory/{id}', [SubCategoryController::class, 'show']);
Route::delete('subcategory/{id}', [SubCategoryController::class, 'destroy']);
// ****************SUBCATEGORY api is ready*******************************//
// ****************ADMITION api is ready*******************************//
Route::get('admition', [AdmitionController::class, 'index']);
Route::post('admition', [AdmitionController::class, 'store']);
Route::get('admition/{id}', [AdmitionController::class, 'show']);
Route::put('admition/{id}', [AdmitionController::class, 'update']);
Route::delete('admition/{id}', [AdmitionController::class, 'destroy']);
// ****************ADMITION api is ready*******************************//
// ****************COMMENT api is ready*******************************//
Route::get('/comment', [CommentController::class, 'index']);
Route::post('comment', [CommentController::class, 'store']);
Route::get('comment/{id}', [CommentController::class, 'show']);
Route::put('comment/{id}', [CommentController::class, 'update']);
Route::delete('comment/{id}', [CommentController::class, 'destroy']);
// ****************COMMENT api is ready*******************************//
// ****************PARENTS api is ready*******************************//
Route::get('parent', [ParentController::class, 'index']);
Route::post('parent/', [ParentController::class, 'store']);
Route::get('parent/{id}', [ParentController::class, 'show']);
Route::put('parent/{id}', [ParentController::class, 'update']);
Route::delete('parent/{id}', [ParentController::class, 'destroy']);
// ****************PARENTS api is ready*******************************//

// Route::post('/hello', function () {
//     return response()->json("welcome to post api");
// });
// Route::get('/hello/{id}', function () {
//     return 'WELCOME TO LARAVE.POST API';
// });
// Route::put('/hello/{id}', function () {
//     return 'WELCOME TO LARAVE.POST API';
// });
// Route::delete('/hello/{id}', function () {
//     return 'WELCOME TO LARAVE.DELETE API';
// });
// Route::pathc('/hello/{id}', function () {
//     return 'WELCOME TO LARAVE.UPDATE API';
// });
