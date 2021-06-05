<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class File
 *
 * @property $created_at
 * @property $updated_at
 * @property $create_person_id
 * @property $updated_person_id
 * @property $deleted
 * @property $deleted_at
 * @property $id
 * @property $referenced_column_id
 * @property $type
 * @property $original_name
 * @property $generated_name
 * @property $file_extension
 *
 * @property Handbk $handbk
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class File extends Model
{
    use SoftDeletes;

    static $rules = [
		'create_person_id' => 'required',
		'updated_person_id' => 'required',
		'deleted' => 'required',
		'type' => 'required',
		'original_name' => 'required',
		'generated_name' => 'required',
		'file_extension' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['create_person_id','updated_person_id','deleted','referenced_column_id','type','original_name','generated_name','file_extension'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function handbk()
    {
        return $this->hasOne('App\Models\Handbk', 'files_t_fk', 'type');
    }
    

}
