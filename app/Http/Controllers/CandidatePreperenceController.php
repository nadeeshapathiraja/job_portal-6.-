<?php

namespace App\Http\Controllers;

use App\candidatePreperence;
use Illuminate\Http\Request;

class CandidatePreperenceController extends Controller
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
        // make object use model
        $candidatePreperence=new candidatePreperence();

        $candidatePreperence->specialization=$request->specialization;
        $candidatePreperence->location_country=$request->location_country;
        $candidatePreperence->location_state=$request->location_state;
        $candidatePreperence->salary_currency=$request->salary_currency;
        $candidatePreperence->salary_amount=$request->salary_amount;

        $candidatePreperence->save();

        // redirct another page
        return view('/welcome');

    }

    
    public function show(candidatePreperence $candidatePreperence)
    {
        //
    }

    
    public function edit(candidatePreperence $candidatePreperence)
    {
        //
    }

    
    public function update(Request $request, candidatePreperence $candidatePreperence)
    {
        //
    }

    
    public function destroy(candidatePreperence $candidatePreperence)
    {
        //
    }
}
