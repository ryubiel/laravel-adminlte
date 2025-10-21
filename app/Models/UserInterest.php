<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInterest extends Model
{
    protected $fillable = [
      'user_id',
      'name',
    ];
}
