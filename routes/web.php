<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpnseFormSubmitController;
use App\Models\ExpnseFormVal;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('editDataForm/{rowvalId}',['as'=>'editDataForm', 'uses'=> 'App\Http\Controllers\ExpnseFormSubmitController@editDataFormController']);

Route::get('removeDataForm/{rowvalId}',['as'=>'removeDataForm', 'uses'=> 'App\Http\Controllers\ExpnseFormSubmitController@removeDataFormController']);

Route::get('/editDataForm/{rowvalId}', function($rowvalId){
    
    return view("ProductDetailsTableView",['ExpnseFormValViewData'=>ExpnseFormVal::all(),'ExpnseFormEditData'=>ExpnseFormVal::wherePrdid($rowvalId)->first()]);

    } )->name('editDataForm');


Route::get('/ProductDetailsTableView',function(){//Home
    return view("ProductDetailsTableView",['ExpnseFormValViewData'=>ExpnseFormVal::all(),'ExpnseFormEditData'=>null]);
});


Route::post("formDataSumbit",[ExpnseFormSubmitController::class,'updateDataToDB']);
Route::post("editDataForm/formDataSumbit",[ExpnseFormSubmitController::class,'updateDataToDB']);

Route::get('/getAllDataFromDB',[ExpnseFormSubmitController::class,'getAllDataFromDB']);