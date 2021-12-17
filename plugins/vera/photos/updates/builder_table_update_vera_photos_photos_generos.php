<?php namespace Vera\Photos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateVeraPhotosPhotosGeneros extends Migration
{
    public function up()
    {
        Schema::table('vera_photos_photos_generos', function($table)
        {
            $table->dropPrimary(['photo_id','gnero_id']);
            $table->renameColumn('gnero_id', 'genero_id');
            $table->primary(['photo_id','genero_id']);
        });
    }
    
    public function down()
    {
        Schema::table('vera_photos_photos_generos', function($table)
        {
            $table->dropPrimary(['photo_id','genero_id']);
            $table->renameColumn('genero_id', 'gnero_id');
            $table->primary(['photo_id','gnero_id']);
        });
    }
}
