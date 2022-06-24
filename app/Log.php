<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Log extends Model
{    
	use Notifiable;
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'logs';
  
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = 
    [
      'id', 'descripcion', 'user_id'
    ];
}