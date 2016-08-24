<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->boolean('is_admin');
            $table->boolean('is_active')->default(true);
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->string('email')->index();
            $table->string('token')->index();
        });

        Schema::create('calendar_events', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->text('description')->nullable();
            $table->boolean('is_featured');
            $table->boolean('is_has_ends_at');
            $table->boolean('is_all_day');
            $table->boolean('is_active')->default(true);
            $table->integer('user_id');
        });

        Schema::create('cache', function($table) {
            $table->string('key')->unique();
            $table->mediumText('value');
            $table->integer('expiration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('password_resets');
        Schema::drop('calendar_events');
        Schema::drop('cache');
    }
}
