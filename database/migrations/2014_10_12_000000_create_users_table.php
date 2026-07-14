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

            //Campo que será FK
            $table->unsignedBigInteger('country_id')->costrained('countries');

            //campos modelo ER
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birth_date');

            //Obrigatorios do Auth laravel
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            //Timestamps cria o created_at e o updated_at e o softDeletes cria o deleted_at
            $table->timestamps();
            $table->softDeletes();

            //Foreign Key - countries
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');


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
