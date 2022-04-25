<?php

namespace App\Http\Controllers;

use App\Models\member_department;
use Illuminate\Http\Request;

class MemberDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member_department.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member_department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member_department = new Member_Department;

        $member_department->member_department =  $request->input('member_department');
        $member_department->save();
        return redirect()->back()->with('status', 'Add seccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\member_department  $member_department
     * @return \Illuminate\Http\Response
     */
    public function show(member_department $member_department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\member_department  $member_department
     * @return \Illuminate\Http\Response
     */
    public function edit(member_department $member_department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member_department  $member_department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, member_department $member_department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\member_department  $member_department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=member_department::find($id);
        $data->delete();
        return redirect()->back();
    }
}
