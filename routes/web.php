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
Route::get('/candidateHome', function () {
    return view('candidate/index');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();



// POST Request(Form Data handel)
Route::post('/saveCandidate', 'CandidateProfileController@store');

Route::post('/saveEducation', 'CandidateEducationController@store');

Route::post('/saveLanguage', 'CandidateLanguageController@store');

Route::post('/savePreperence', 'CandidatePreperenceController@store');

Route::post('/saveWorkExp', 'CandidateWorkExpController@store');


//Mage views
Route::get('/viewCandidate', function () {
    $allCandidates=App\candidateProfile::all();
    return view('candidate/viewCandidateList')->with('viewCandidateLists',$allCandidates);
    //return view('candidate/viewCandidateList');
});
Route::get('/viewUserList', function () {
    $allUsers=App\User::all();
    return view('auth/viewUserList')->with('viewUserLists',$allUsers);
});


