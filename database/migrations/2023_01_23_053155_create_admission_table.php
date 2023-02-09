<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('roll_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('father_phone');
            $table->string('mother_phone');
            $table->string('gender');
            $table->string('email')->unique();
            $table->date('dob');
            $table->string('phone');
            $table->longtext('address');
            $table->longtext('current_address');
            $table->string('nationality');
            $table->string('passport');
            $table->tinyInteger('status');
            $table->date('date_registered');
            $table->integer('user_id');
            $table->integer('class_id');
            $table->string('image')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('admission');
    }
}
