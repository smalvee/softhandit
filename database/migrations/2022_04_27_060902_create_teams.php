<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('member_name');
            $table->string('member_mobile');
            $table->string('member_email');
            $table->string('member_address');
            $table->string('member_dob');
            $table->string('member_identity_proof');
            $table->string('member_identity_number');
            $table->string('member_identity_document');
            $table->string('member_emergency_contact');
            $table->string('member_ssc_institu_name');
            $table->string('member_ssc_institu_board');
            $table->string('member_ssc_result_passingyear');
            $table->string('member_hsc_institu_name');
            $table->string('member_hsc_institu_board');
            $table->string('member_hsc_result_passingyear');
            $table->string('member_bsc_institu_name')->nullable();
            $table->string('member_bsc_passingyear')->nullable();
            $table->string('member_bsc_result')->nullable();
            $table->string('member_other_institu_name')->nullable();
            $table->string('member_other_passingyear')->nullable();
            $table->string('member_other_result')->nullable();
            $table->string('member_type');
            $table->string('member_department');
            $table->string('member_designation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
