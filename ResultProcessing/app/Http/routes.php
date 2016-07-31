<?php


Route::get('/',[
	'uses' => 'ResultProcessingController@home',
	'as' => 'route.home'

	]);

Route::get('/studentRegistriationForm',[
	'uses' => 'ResultProcessingController@studentRegistriationForm',
	'as' => 'route.studentRegistriationForm'

	]);

Route::post('/studentRegistrationFormPost',[
		'uses' => 'ResultProcessingController@studentRegistraionPost',
		'as' => 'route.postStudentRegistration'

	]);

Route::get('/subjectRegistriationForm',[
	'uses' => 'ResultProcessingController@subjectRegistriationForm',
	'as' => 'route.subjectRegistriationForm'

	]);


Route::post('/subjectRegistration',[
	'uses' => 'ResultProcessingController@subjectPost',
	'as' => 'route.subjectPost'

	]);



//////////////// Result Computing/////////////

Route::get('/resultForm',[
	'uses' => 'ResultComputing@resultCompute',
	'as' => 'route.resultCompute'

	]);


Route::get('/classFullName',[
	'uses' => 'ResultComputing@getClass',
	'as' => 'route.result'

	]);

Route::post('/fullname',[
	'uses' => 'ResultComputing@postClass',
	'as' => 'route.postClass'

	]);

Route::post('/resulPosting',[
	'uses' => 'ResultComputing@postResult',
	'as' =>'route.resultPost'

	]);
/////////////// Input Class and Name ...........  Then Show the Subject wise result.......... Not final Result..
Route::get('/takeClass',[
	'uses' => 'ResultComputing@indexResult',
	'as' => 'route.index'
	]);



Route::post('/showResultDetail',[
	'uses' => 'ResultComputing@resultDetail',
	'as' => 'route.resultDetail'

	]);
//////////////////////// SemiFinal Result Sheet...............

Route::post('/semiFinalResult',[
	'uses' => 'ResultComputing@resultDetailWithTotal',
	'as' => 'route.TotalCount'

	]);



///////////////////////////// Final Result sheet.................

Route::get('finalResultSheet',[
	'uses' => 'ResultComputing@finalResultSheet',
	'as' => 'route.finalResultSheet'


	]);


Route::post('/postFinalResult',[
	'uses' => 'ResultComputing@postFinalResult',
	'as' => 'route.finalResultSheetPost'


	]);



