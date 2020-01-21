<?php

namespace App\Http\Controllers;

use App\candidateEducation;
use Illuminate\Http\Request;

class CandidateEducationController extends Controller
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

        $candidateEducation= new candidateEducation();

        $this->validate($request,[
            'degree'=>'required',
            'school_name'=> 'required',
            'city'=> 'required',
            'field_of_study'=> 'required',
        ]);

        $candidateEducation->degree=$request->degree;
        $candidateEducation->school_type=$request->school_type;
        $candidateEducation->school_name=$request->school_name;
        $candidateEducation->city=$request->city;
        $candidateEducation->country=$request->country;
        $candidateEducation->state=$request->state;
        $candidateEducation->enrolldate=$request->enrolldate;
        $candidateEducation->still_studying=$request->still_studying;
        $candidateEducation->grad_date=$request->grad_date;
        $candidateEducation->exp_graddate=$request->exp_graddate;
        $candidateEducation->is_graduated=$request->is_graduated;
        $candidateEducation->lastenrollyear=$request->lastenrollyear;
        $candidateEducation->future_study=$request->future_study;
        $candidateEducation->field_of_study=$request->field_of_study;

        $candidateEducation->save();

        return view('/welcome');
    }

    
    public function show(candidateEducation $candidateEducation)
    {
        //
    }

    
    public function edit(candidateEducation $candidateEducation)
    {
        //
    }

    
    public function update(Request $request, candidateEducation $candidateEducation)
    {
        //
    }

    
    public function destroy(candidateEducation $candidateEducation)
    {
        //
    }
}
