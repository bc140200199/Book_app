<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class PhoneNumber extends Model
{
	protected $table = 'phone_numbers';
	protected $fillable = ['user_id','number'];


    public function user()
    {
      return $this->belongsTo(User::class);
	}
}
