<?php

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
Route::get('/candidateEducation', function () {
    return view('candidate/candidateEducation');
});
Route::get('/candidateWorkExp', function () {
    return view('candidate/candidateWorkExp');
});
Route::get('/candidateLanguage', function () {
    return view('candidate/candidateLanguage');
});
Route::get('/candidatePreference', function () {
    return view('candidate/candidatePreperence');
});
Route::get('/candidateProfile', function () {
    return view('candidate/candidateProfile');
});
Route::get('/viewCandidate', function () {
    return view('candidate/viewCandidateList');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
