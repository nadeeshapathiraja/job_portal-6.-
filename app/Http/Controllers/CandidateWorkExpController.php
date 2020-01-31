<?php

namespace App\Http\Controllers;

use App\candidateWorkExp;
use Illuminate\Http\Request;

class CandidateWorkExpController extends Controller
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
        $candidateWorkExp= new candidateWorkExp();

        $candidateWorkExp->employername=$request->employername;
        $candidateWorkExp->industry=$request->industry;
        $candidateWorkExp->city=$request->city;
        $candidateWorkExp->country=$request->country;
        $candidateWorkExp->state=$request->state;
        $candidateWorkExp->position=$request->position;
        $candidateWorkExp->start_date=$request->start_date;
        $candidateWorkExp->end_date=$request->end_date;
        $candidateWorkExp->still_working=$request->still_working;
        $candidateWorkExp->salary=$request->salary;

        $candidateWorkExp->save();//save Data for Candidate workExp  Table

        // return or redirect another page use redirect or view
        //return redirect()->back(); or use (can change) 
        return view('/welcome');
    }


    public function show(candidateWorkExp $candidateWorkExp)
    {
        //
    }


    public function edit(candidateWorkExp $candidateWorkExp)
    {
        //
    }


    public function update(Request $request, candidateWorkExp $candidateWorkExp)
    {
        //
    }


    public function destroy(candidateWorkExp $candidateWorkExp)
    {
        //
    }
}
