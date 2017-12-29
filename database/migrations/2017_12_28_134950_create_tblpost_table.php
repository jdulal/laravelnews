<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblpostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpost', function (Blueprint $table) {
            $table->increments('id');
            $table->text('posttitle');
            $table->text('postsummary');
            $table->text('postdetails');
            $table->string('postslug');
            $table->string('postimg',100);
            $table->string('postby',100)->nullable();
            $table->dateTime('postdate');
            $table->enum('poststatus', ['active', 'inactive']);
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
        Schema::dropIfExists('tblpost');
    }
}
