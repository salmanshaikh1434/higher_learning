<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvisionalRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provisional_registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("firstname");
            $table->string("middlename");
            $table->string("lastname");
            $table->string("phone");
            $table->string("email");
            $table->string("dob");
            $table->string("sex");
            $table->string("cast");
            $table->string("course");
            $table->string("lastexam");
            $table->string("percentage");
            $table->string("lastinst")->comment("last institute");
            $table->string("attachment_last_exam")->nullable();
            $table->string("attachment_cast_certificate")->nullable();
            $table->string("indian");
            $table->string("t_and_c");
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
        Schema::dropIfExists('provisional_registrations');
    }
}
