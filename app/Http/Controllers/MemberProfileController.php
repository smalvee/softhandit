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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
