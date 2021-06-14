<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppe_issues', function (Blueprint $table) {
            $table->id();
            $table->integer('request_id');
            $table->integer('user_id');
            $table->integer('issued_by')->nullable();
            $table->integer('issued_at')->nullable();
            $table->integer('collected_by')->nullable();
            $table->integer('collected_at')->nullable();
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
        Schema::dropIfExists('issues');
    }
}
