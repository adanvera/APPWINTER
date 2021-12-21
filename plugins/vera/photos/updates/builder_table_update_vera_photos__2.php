<?php namespace Vera\Photos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateVeraPhotos2 extends Migration
{
    public function up()
    {
        Schema::table('vera_photos_', function($table)
        {
            $table->text('author')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('vera_photos_', function($table)
        {
            $table->dropColumn('author');
        });
    }
}
