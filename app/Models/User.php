<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;


class User extends  Authenticatable
{
  use HasApiTokens, Notifiable;




    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','password','email'];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password'
  ];

  /**
   * Add a mutator to ensure hashed passwords
   */
//  public function setPasswordAttribute($password)
//  {
//    $this->attributes['password'] = bcrypt($password);
//  }
//

}
