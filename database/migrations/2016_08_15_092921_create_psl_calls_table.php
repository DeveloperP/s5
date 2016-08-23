<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePslCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psl_principals', function (Blueprint $table) {
            $table->increments('id');
            $table->text('principal_name');
            $table->timestamps();
        });

        Schema::create('psl_ports', function (Blueprint $table) {
            $table->increments('id');
            $table->text('port_name');
            $table->timestamps();
        });

        Schema::create('psl_branches', function (Blueprint $table) {
            $table->increments('id');
            $table->text('branch_name');
            $table->timestamps();
        });

        Schema::create('psl_jetties', function (Blueprint $table) {
            $table->increments('id');
            $table->text('jetty_name');
            $table->timestamps();
        });

        Schema::create('psl_calls', function (Blueprint $table) {
            $table->increments('id');
            $table->text('vessel_name');
            $table->text('voyage_no');
            $table->text('reference_no');
            $table->dateTime('eta_estimate_time');
            $table->dateTime('etb_estimate_time');
            $table->dateTime('etc_estimate_time');
            $table->dateTime('etd_estimate_time');
            $table->dateTime('ata_actual_time');
            $table->dateTime('atb_actual_time');
            $table->dateTime('atc_actual_time');
            $table->dateTime('atd_actual_time');
            $table->integer('principal_id')->unsigned();
            $table->integer('port_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->integer('jetty_id')->unsigned();
            $table->integer('previous_port_id')->unsigned();
            $table->integer('next_port_id')->unsigned();
            $table->enum('quality_rating', [1,2,3,4,5,6,7,8,9,10]);
            $table->boolean('cancel_call')->default(false);
            $table->string('cancel_remark');
            $table->boolean('no_cost_time')->default(false);
            $table->string('no_cost_time_remark');
            $table->integer('employee_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::create('psl_purposes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('psl_call_psl_purpose', function (Blueprint $table) {
            $table->integer('psl_call_id')->unsigned()->index();;
            $table->foreign('psl_call_id')->references('id')->on('psl_calls')->onDelete('cascade');

            $table->integer('psl_purpose_id')->unsigned()->index();;
            $table->foreign('psl_purpose_id')->references('id')->on('psl_purposes')->onDelete('cascade');

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
        Schema::drop('psl_principals');
        Schema::drop('psl_ports');
        Schema::drop('psl_branches');
        Schema::drop('psl_jetties');
        Schema::drop('psl_purposes');
        Schema::drop('psl_calls');
        Schema::drop('psl_call_psl_purpose');
    }
}
