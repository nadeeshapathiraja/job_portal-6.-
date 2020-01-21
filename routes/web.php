<?php

// GET Requests
Route::get('/', function () {
    return view('welcome');
});
Route::get('/candidateEducation', function () {
    return view('candidate/candidateEducation/candidateEducation');
});
Route::get('/candidateWorkExp', function () {
    return view('candidate/candidateWorkExp/candidateWorkExp');
});
Route::get('/candidateLanguage', function () {
    return view('candidate/candidateLanguage/candidateLanguage');
});
Route::get('/candidatePreference', function () {
    return view('candidate/candidatePreperence/candidatePreperence');
});
Route::get('/candidateProfile', function () {
    return view('candidate/candidateProfile/candidateProfile');
});
Route::get('/viewCandidate', function () {
    return view('candidate/viewCandidateList');
});
Route::get('/candidateHome', function () {
    return view('candidate/index');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();



// POST Request(Form Data handel)
Route::post('/saveCandidate', 'CandidateProfileController@store');

Route::post('/saveEducation', 'CandidateEducationController@store');