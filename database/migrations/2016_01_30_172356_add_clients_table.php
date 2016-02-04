<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
	    $table->boolean('status')->default(true);
	    $table->string('password', 18);
	    $table->tinyInteger('client_type');
	    $table->string('cedula_rif', 11)->unique();
	    $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->date('birthdate');
            $table->tinyInteger('civil_status');
            $table->tinyInteger('sex');
            $table->string('occupation', 50);
	    $table->string('email', 100)->unique();
            $table->string('bbpin', 8);
            $table->tinyInteger('billing_address');
            $table->tinyInteger('employment_type');
            $table->string('company_name', 50);
            $table->decimal('company_capital', 15, 2);
            $table->date('company_admission_date');
            $table->string('comments', 100);
            $table->tinyInteger('activity');
            $table->tinyInteger('group');
            $table->tinyInteger('branch_office');
            $table->integer('executive_representative');
            $table->integer('management');
            $table->integer('promoter');
            $table->integer('producer');
            $table->integer('collector');
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
        Schema::drop('clients');
    }
}
