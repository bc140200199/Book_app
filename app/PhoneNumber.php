<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;
class PhoneNumber extends Model
{
    public function user()
    {
      return $this->belongsTo(User::class);
	}
}
