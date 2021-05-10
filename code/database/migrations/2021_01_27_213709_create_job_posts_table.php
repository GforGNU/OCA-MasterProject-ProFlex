<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('posted_by_id');
            $table->unsignedBigInteger('job_type_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('posted_by_id')->references('id')->on('users');
            $table->foreign('job_type_id')->references('id')->on('job_types');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->date('created_date')->nullable();
            $table->string('job_name')->nullable();
            $table->string('job_description')->nullable();
            $table->boolean('is_active')->nullable();
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
        Schema::dropIfExists('job_posts');
    }
}
