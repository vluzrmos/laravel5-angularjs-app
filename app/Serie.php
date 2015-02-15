<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Serie extends Model{
  use SoftDeletes;

  protected $fillable = ["title", "description"];
}