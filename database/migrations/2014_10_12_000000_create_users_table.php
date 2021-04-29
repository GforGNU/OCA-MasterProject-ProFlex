<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_type_id')->nullable();
            $table->foreign('user_type_id')->references('id')->on('user_types')->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('contact_number')->nullable();
            $table->boolean('sms_notification_active')->nullable();
            $table->boolean('email_notification_active')->nullable();
            $table->string('user_image')->default('default.png');
            $table->date('registration_date')->nullable();
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
        Schema::disableForeignKeyConstraints();
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign(['user_type_id']);
        });

        Schema::dropIfExists('users');
        Schema::enableForeignKeyConstraints();



        // Schema::dropIfExists('user_types');

        // Schema::dropIfExists('companies');
        // Schema::dropIfExists('job_posts');
        // Schema::dropIfExists('users');
    }
}
