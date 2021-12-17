<?php namespace Vera\Photos\Models;

use Model;

/**
 * Model
 */
class Photo extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'vera_photos_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**relations */
    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $attachMany = [
        'photo_gallery' => 'System\Models\File'
    ];
}
