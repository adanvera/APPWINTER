<?php namespace Vera\Photos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateVeraPhotosGeneros extends Migration
{
    public function up()
    {
        Schema::create('vera_photos_generos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('genero_titulo');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vera_photos_generos');
    }
}
