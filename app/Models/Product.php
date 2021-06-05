<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Product.
 *
 * @package namespace App\Models;
 */
class Product extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $table = 'product';

  protected $fillable = [
    'title_uz',
    'title_ru',
    'weight_uz',
    'weight_ru',
    'image',
    'order',
  ];


}
