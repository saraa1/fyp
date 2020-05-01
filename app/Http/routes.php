<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
//


Route::group(['middleware' => ['web']], function () {
    //
    Route::auth();



    Route::get('/admin',function (){

        return view ('admin.index');
    });
    Route::resource('/person','Admin');
    Route::resource('/admin/psychiatrist','AdminPsychiatristController');
    Route::resource('/admin/patient','AdminPatientController');
    Route::resource('/admin/appointment','AppointmentController');
    Route::resource('/admin/category','AdminCategoryController');
    Route::resource('/admin/questionaire','AdminQuestionaireController');
    Route::get('/questionaire/{questionaire}/questions/create',['as'=>'question.create','uses'=>'QuestionController@create']);
    Route::post('/questionaire/{questionaire}/questions',['as'=>'question.store','uses'=>'QuestionController@store']);
    Route::delete('/questionaire/{questionaire}/questions/{question}',['as'=>'question.delete','uses'=>'QuestionController@destroy']);


    Route::get('/surveys/{questionaire}-{slug}','SurveyController@show');
    Route::post('/surveys/{questionaire}-{slug}','SurveyController@store');

    Route::resource('/survey_response','SurveyResponseController');


});
Route::get('/home', 'HomeController@index');




