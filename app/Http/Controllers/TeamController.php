<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $create_team_member = new Team;

        $create_team_member->member_name =  $request->input('member_name');
        $create_team_member->member_mobile =  $request->input('member_mobile');
        $create_team_member->member_email =  $request->input('member_email');
        $create_team_member->member_address =  $request->input('member_address');
        $create_team_member->member_dob =  $request->input('member_dob');
        $create_team_member->member_identity_proof =  $request->input('member_identity_proof');
        $create_team_member->member_identity_number =  $request->input('member_identity_number');

        if ($request->hasfile('member_identity_document')) {

            $file = $request->file('member_identity_document');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/team-members/', $filename);
            $create_team_member->member_identity_document = $filename;
        }





        $create_team_member->member_emergency_contact       =  $request->input('member_emergency_contact');
        $create_team_member->member_ssc_institu_name        =  $request->input('member_ssc_institu_name');
        $create_team_member->member_ssc_institu_board       =  $request->input('member_ssc_institu_board');
        $create_team_member->member_ssc_result_passingyear  =  $request->input('member_ssc_result_passingyear');
        $create_team_member->member_hsc_institu_name        =  $request->input('member_hsc_institu_name');
        $create_team_member->member_hsc_institu_board       =  $request->input('member_hsc_institu_board');
        $create_team_member->member_hsc_result_passingyear  =  $request->input('member_hsc_result_passingyear');
        $create_team_member->member_bsc_institu_name        =  $request->input('member_bsc_institu_name');
        $create_team_member->member_bsc_passingyear         =  $request->input('member_bsc_passingyear');
        $create_team_member->member_bsc_result              =  $request->input('member_bsc_result');
        $create_team_member->member_other_institu_name      =  $request->input('member_other_institu_name');
        $create_team_member->member_other_passingyear       =  $request->input('member_other_passingyear');
        $create_team_member->member_other_result            =  $request->input('member_other_result');
        $create_team_member->member_type                    =  $request->input('member_type');
        $create_team_member->member_department              =  $request->input('member_department');
        $create_team_member->member_designation             =  $request->input('member_designation');
        $create_team_member->save();
        return redirect()->back()->with('status', 'Add seccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        //
    }
}
