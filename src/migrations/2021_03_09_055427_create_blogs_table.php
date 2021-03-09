<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img')->default('default.jpg');
            $table->string('slg')->unique();
            $table->text('description');
            $table->enum('status', ['active', 'in-active'])->default('in-active');
            $table->timestamps();
        });

        
        DB::table('blogs')->insert([
            'name' => 'test name',
            'slg' => 'bep',
            'description' => '<h1>test blog</h1>',
            'status' => 'active',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
