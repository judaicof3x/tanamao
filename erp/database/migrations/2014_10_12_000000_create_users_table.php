<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_financial')->default(false);
            $table->boolean('is_salesman')->default(false);
            $table->boolean('is_administrative')->default(false);
            $table->boolean('is_operational')->default(false);
            $table->boolean('is_clerk')->default(false);
            $table->boolean('is_customer')->default(false);
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('cpf')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('profile_photo_path', 2048)->default('blank.png');
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
        Schema::dropIfExists('users');
    }
}
