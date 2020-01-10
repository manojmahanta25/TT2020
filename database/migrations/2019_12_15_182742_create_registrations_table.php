<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('team_name');
            $table->string('team_leader');
            $table->string('event_name');
            $table->integer('total_member');
            $table->string('email');
            $table->bigInteger('phone');
            $table->text('address');
            $table->integer('pincode');
            $table->string('district');
            $table->string('institute_name');
            $table->tinyInteger('accommodations')->default('0');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}