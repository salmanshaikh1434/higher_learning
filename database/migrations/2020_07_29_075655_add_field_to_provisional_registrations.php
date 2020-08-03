<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToProvisionalRegistrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('provisional_registrations', function (Blueprint $table) {
            $table->renameColumn('t_and_c', 'acceptna');
            $table->string('attachment_photo');
            $table->string('attachment_txncopy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provisional_registrations', function (Blueprint $table) {
            //
        });
    }
}
