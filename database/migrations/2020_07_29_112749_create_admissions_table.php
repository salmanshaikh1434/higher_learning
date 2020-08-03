<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
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
            $table->string('amt_paid');
            $table->string("percentage");
            $table->string("lastinst")->comment("last institute");
            $table->string("attachment_last_exam");
            $table->string("attachment_cast_certificate")->nullable();
            $table->string('attachment_photo');
            $table->string('attachment_txncopy');
            $table->string("indian");
            $table->string("acceptna");
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
        Schema::dropIfExists('admissions');
    }
}
