<?php namespace Vera\Photos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateVeraPhotosPhotosGeneros extends Migration
{
    public function up()
    {
        Schema::create('vera_photos_photos_generos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('photo_id');
            $table->integer('gnero_id');
            $table->primary(['photo_id','gnero_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vera_photos_photos_generos');
    }
}
