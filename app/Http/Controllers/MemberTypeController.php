<?php

namespace App\Http\Controllers;

use App\Models\member_type;
use Illuminate\Http\Request;

class MemberTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member_type.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member_type = new Member_Type;

        $member_type->member_type =  $request->input('member_type');
        $member_type->save();
        return redirect()->back()->with('status', 'Add seccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\member_type  $member_type
     * @return \Illuminate\Http\Response
     */
    public function show(member_type $member_type)
    {
        // $member_type = member_Type::all();
        // return view('member_type.index', compact('member_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\member_type  $member_type
     * @return \Illuminate\Http\Response
     */
    public function edit(member_type $member_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member_type  $member_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, member_type $member_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\member_type  $member_type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=member_Type::find($id);
        $data->delete();
        return redirect()->back();
    }
}
