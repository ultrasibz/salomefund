<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppe_requests', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->integer('task_id');
            $table->string('ref_no');
            $table->integer('config_division_id');
            $table->integer('config_user_unit_id');

            //approval fields
            $table->integer('supervisor_id')->nullable();
            $table->timestamp('supervisor_approved_at')->nullable();

            $table->integer('manager_id')->nullable();
            $table->timestamp('manager_approved_at')->nullable();

            $table->integer('hod_id')->nullable();
            $table->timestamp('hod_approved_at')->nullable();

            $table->integer('sheq_manager_id')->nullable();
            $table->timestamp('sheq_manager_approved_at')->nullable();

            $table->integer('erm_id')->nullable();
            $table->timestamp('erm_approved_at')->nullable();

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
        Schema::dropIfExists('epp_requests');
    }
}
