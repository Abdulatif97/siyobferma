<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Page.
 *
 * @package namespace App\Models;
 */
class Page extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $table = 'page';

  protected $fillable = [
    'title_uz',
    'title_ru',
    'slug',
    'text_uz',
    'text_ru',
  ];

}
