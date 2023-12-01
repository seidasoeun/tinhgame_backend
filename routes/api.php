<?php

use App\Http\Controllers\ApproveController;
use App\Http\Controllers\approveCustome;
use App\Http\Controllers\approvePhotoController;
use App\Http\Controllers\approvePhotoCustome;
use App\Http\Controllers\comment\commentController;
use App\Http\Controllers\comment\commentCustome;
use App\Http\Controllers\comment\replyController;
use App\Http\Controllers\comment\replyCustome;
use App\Http\Controllers\home_tokenController;
use App\Http\Controllers\tinhgame\UserController;
use App\Http\Controllers\login\AuthController;
use App\Http\Controllers\ProductPhotoController2;
use App\Http\Controllers\tinhgame\buyproductController;
use App\Http\Controllers\tinhgame\feedbackController;
use App\Http\Controllers\tinhgame\homePageCustome;
use App\Http\Controllers\tinhgame\inboxController;
use App\Http\Controllers\tinhgame\inboxCustome;
use App\Http\Controllers\tinhgame\inboxtoadminController;
use App\Http\Controllers\tinhgame\inboxtoadminCustome;
use App\Http\Controllers\tinhgame\product_photo;
use App\Http\Controllers\tinhgame\productController;
use App\Http\Controllers\tinhgame\productCustome;
use App\Http\Controllers\tinhgame\soldController;
use App\Http\Controllers\tinhgame\UserCustome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

// HomePage no need token
Route::get('/homepage',[homePageCustome::class,'getAllProduct']);
Route::get('/getproductbytype/{id}',[productCustome::class,'getProductByType']);

Route::middleware('auth:sanctum')->group(function(){
    Route::resource('/getUser',UserController::class);
    Route::resource('/product',productController::class);
    Route::resource('/product_photo',product_photo::class);
    Route::resource('/approved',ApproveController::class);
    Route::resource('/approved_photo',approvePhotoController::class);
    Route::resource('/inbox_toadmin',inboxtoadminController::class);
    Route::resource('/sold',soldController::class);
    Route::resource('/feedback',feedbackController::class);
    Route::resource('/comment',commentController::class);
    Route::resource('/reply',replyController::class);
    Route::resource('/buyproduct',buyproductController::class);

    // user & getall
    Route::get('/getalluser',[UserCustome::class,'getalluser']);
    Route::get('/getallproduct',[UserCustome::class,'getallproduct']);
    Route::get('/getallapprove',[UserCustome::class,'getallapprove']);
    Route::put('/changepass',[UserCustome::class,'changePass']);

    // Approve to Product
    Route::post('/apptopro',[approveCustome::class,'apptopro']);
    Route::post('/appPhotopro',[approvePhotoCustome::class,'appPhototopro']);

    // Approve Photo to product photo
    Route::get('/getPhotoappByID/{id}',[approvePhotoCustome::class,'getPhotoappByID']);

    // Inbox
    Route::resource('/inbox',inboxController::class);
    Route::get('/getdatainbox/{id}',[inboxCustome::class,'getDataInbox']);

    // User Product
    Route::get('/product_user',[productCustome::class,'getProductUser']);

    //get Len
    Route::get('/approve_len',[approveCustome::class,'getApproveLen']);

    // Inbox to admin custome
    Route::get('/allinbox_toadmin',[inboxtoadminCustome::class,'getAllDataInboxtoadmin']);
    Route::get('/getproductbyid/{id}',[productCustome::class,'getProductByID']);
    Route::get('/getproductbyidall/{id}',[productCustome::class,'getProductByIDAll']);


    // Table Relationship
        // product get user
        Route::get('/product_user/{id}',[productCustome::class,'getProductUserImg']);

    // Reply Custome
    Route::delete('/deletereplycustome/{id}',[replyCustome::class,'deleteAllReplyByComment']);

    // Get All Comment By product ID
    Route::get('/getallcommentbyproductid/{id}',[commentCustome::class,'getAllCommentByProductID']);

    // Delete All (User & Product)
    // comment & reply
    Route::delete('/deletecommentbyproduct/{id}',[commentCustome::class,'deleteByProduct']);
    Route::delete('/deletereplybyproduct/{id}',[replyCustome::class,'deleteByProduct']);
});