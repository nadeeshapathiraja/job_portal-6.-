<?php

namespace App\Http\Controllers;

use App\candidateLanguage;
use Illuminate\Http\Request;

class CandidateLanguageController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $candidateLanguage= new candidateLanguage();

        $candidateLanguage->language_code=$request->language_code;
        $candidateLanguage->spoken_level=$request->spoken_level;
        $candidateLanguage->written_level=$request->written_level;
        $candidateLanguage->default=$request->default;

        $candidateLanguage->save();//save candidate Language

        // redirect another Page can change 
        return view('/welcome');
    }

    
    public function show(candidateLanguage $candidateLanguage)
    {
        //
    }

    
    public function edit(candidateLanguage $candidateLanguage)
    {
        //
    }

    
    public function update(Request $request, candidateLanguage $candidateLanguage)
    {
        //
    }

    
    public function destroy(candidateLanguage $candidateLanguage)
    {
        //
    }
}
