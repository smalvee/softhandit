<?php

namespace App\Http\Controllers;

use App\Models\member_profile;
use Illuminate\Http\Request;

class MemberProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('adminpages.member_profile', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('member_profile.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $member_profile = new Member_Profile;

        $member_profile->main_id            =  $request->input('main_id');
        $member_profile->about_yourself     =  $request->input('about_yourself');
        $member_profile->hobbies            =  $request->input('hobbies');
        $member_profile->salary             =  $request->input('salary');
        $member_profile->profile_picture    =  $request->input('profile_picture');
        $member_profile->save();
        return redirect()->back()->with('status', 'Add seccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\member_profile  $member_profile
     * @return \Illuminate\Http\Response
     */
    public function show(member_profile $member_profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\member_profile  $member_profile
     * @return \Illuminate\Http\Response
     */
    public function edit(member_profile $member_profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member_profile  $member_profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, member_profile $member_profile)
    {
        $member_profile =Member_Profile::find($request->pp_id);
        $member_profile->about_yourself     =  $request->input('about_yourself');
        $member_profile->hobbies            =  $request->input('hobbies');
        $member_profile->save();
        return redirect()->back()->with('status', 'Add seccessfully');
    }

    public function update_profile_picture(Request $request, member_profile $member_profile)
    {
        $member_profile =Member_Profile::find($request->picture_id);

        if ($request->hasfile('profile_picture')) {

            $file = $request->file('profile_picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/profile/', $filename);
            $member_profile->profile_picture = $filename;
        }
        $member_profile->save();
        return redirect()->back()->with('status', 'Add seccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\member_profile  $member_profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(member_profile $member_profile)
    {
        //
    }
}
