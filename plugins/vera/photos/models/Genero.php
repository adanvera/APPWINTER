<?php namespace Vera\Photos\Models;

use Model;

/**
 * Model
 */
class Genero extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'vera_photos_generos';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
