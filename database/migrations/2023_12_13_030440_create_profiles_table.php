<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->text('caption')->nullable();
            $table->string('phone')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('logo_photo')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('telegram_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('copyright')->nullable();
            $table->string('about_caption')->nullable();
            $table->string('matches_caption')->nullable();
            $table->string('blogs_caption')->nullable();
            $table->string('players_caption')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
