<?php

namespace App\Http\Controllers;

use App\candidateProfile;
use Illuminate\Http\Request;


class CandidateProfileController extends Controller
{
    
    public function index()
    {
        
    }

    
    public function create()
    {
    
    }

    
    public function store(Request $request)
    {
        //dd($request->all());echo data for user
        $candidateProfile= new candidateProfile();

        // Form Validation
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=> 'required',
            'mobile'=> 'required|min:10|max:10',
        ]);

        // Get data in input fields
        //$candidateProfile->image=$request->image;
        $candidateProfile->firstname=$request->firstname;
        $candidateProfile->lastname=$request->lastname;
        $candidateProfile->mobile=$request->mobile;
        $candidateProfile->telephone=$request->telephone;
        $candidateProfile->address1=$request->address1;
        $candidateProfile->address2=$request->address2;
        $candidateProfile->city=$request->city;
        $candidateProfile->state=$request->state;
        $candidateProfile->country=$request->country;
        $candidateProfile->zipcode=$request->zipcode;
        $candidateProfile->fresh_graduate=$request->fresh_graduate;
        $candidateProfile->nationality=$request->nationality;
        $candidateProfile->country_residingin=$request->country_residingin;
        $candidateProfile->state_residingin=$request->state_residingin;
        $candidateProfile->working_since=$request->working_since;
        $candidateProfile->prefered_category=$request->prefered_category;
        $candidateProfile->prefered_level=$request->prefered_level;
        $candidateProfile->prefered_type=$request->prefered_type;
        $candidateProfile->prefered_salary_currency=$request->prefered_salary_currency;
        $candidateProfile->prefered_salary=$request->prefered_salary;
        $candidateProfile->prefered_location=$request->prefered_location;
        $candidateProfile->about_myself=$request->about_myself;
        $candidateProfile->gender=$request->gender;
        $candidateProfile->date_of_birth=$request->date_of_birth;
        $candidateProfile->core_skills=$request->core_skills;
        $candidateProfile->race=$request->race;
        $candidateProfile->prefered_location2=$request->prefered_location2;
        $candidateProfile->prefered_location3=$request->prefered_location3;
        $candidateProfile->prefered_industry=$request->prefered_industry;
        $candidateProfile->acc_name=$request->acc_name;
        $candidateProfile->acc_no=$request->acc_no;
        $candidateProfile->bank=$request->bank;

        $candidateProfile->save();//save Data for Candidate Profile Table

        // get data for one veriabal use array we can view use this variable
        $allCandidates=candidateProfile::all();
        
        // return or redirect another page use redirect or view
        //return redirect()->back(); or use
        return view('/welcome');
    }

    
    public function show(candidateProfile $candidateProfile)
    {
        
    }

    
    public function edit(candidateProfile $candidateProfile)
    {
        
    }

    
    public function update(Request $request, candidateProfile $candidateProfile)
    {
        
    }

    
    public function destroy(candidateProfile $candidateProfile)
    {
        
    }
}
