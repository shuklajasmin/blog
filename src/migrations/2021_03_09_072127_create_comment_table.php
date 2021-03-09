<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->unsignedBigInteger('blog_id');
            $table->foreign('blog_id')->references('id')->on('blogs');
            $table->enum('status', ['visible', 'in-visible'])->default('in-visible');
            $table->string('user_name');
            $table->string('img')->default('avtar.jpg');
            $table->timestamps();
        });

        DB::table('comments')->insert([
            'text' => 'nice blog',
            'user_name' => 'test mail',
            'status' => 'visible',
            'blog_id' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
