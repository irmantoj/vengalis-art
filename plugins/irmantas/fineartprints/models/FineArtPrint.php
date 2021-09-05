<?php namespace Irmantas\FineArtPrints\Models;

use Model;

/**
 * Model
 */
class FineArtPrint extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'irmantas_fineartprints_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* Relations */
    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $attachMany = [
        'images' => 'System\Models\File'
    ];
}
