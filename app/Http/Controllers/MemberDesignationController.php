<?php

namespace App\Http\Controllers;

use App\Models\member_designation;
use Illuminate\Http\Request;

class MemberDesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member_designation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member_designation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member_designation = new Member_Designation;

        $member_designation->member_designation =  $request->input('member_designation');
        $member_designation->save();
        return redirect()->back()->with('status', 'Add seccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\member_designation  $member_designation
     * @return \Illuminate\Http\Response
     */
    public function show(member_designation $member_designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\member_designation  $member_designation
     * @return \Illuminate\Http\Response
     */
    public function edit(member_designation $member_designation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member_designation  $member_designation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, member_designation $member_designation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\member_designation  $member_designation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=member_designation::find($id);
        $data->delete();
        return redirect()->back();
    }
}
