<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_name');
            $table->integer('user_id');
            $table->string('id_name');
            $table->string('tag_type');
            $table->string('tag_no');
            $table->float('carapace_length', 8, 4);
            $table->float('carapace_width', 8, 4);
            $table->date('take_date');
            $table->string('part');
            $table->string('env');
            $table->string('location');
            $table->string('beach_name');
            $table->string('nest_id');
            
            
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
