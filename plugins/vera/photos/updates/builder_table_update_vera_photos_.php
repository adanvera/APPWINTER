<?php namespace Vera\Photos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateVeraPhotos extends Migration
{
    public function up()
    {
        Schema::table('vera_photos_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('vera_photos_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
