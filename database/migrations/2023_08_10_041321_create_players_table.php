<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('positions');
            $table->string('phone');
            $table->text('description');
            $table->string('no');
            $table->decimal('height', 5, 2); 
            $table->date('dob'); // Date of Birth
            $table->enum('preferred_foot', ['left', 'right']); // Preferred Foot (enum with options)
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
        Schema::dropIfExists('players');
    }
}
