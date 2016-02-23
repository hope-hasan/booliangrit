<?php

namespace App;
use Input;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $table='comment';
  protected $fillable = [
  'comment','user_id',
  ];
}
