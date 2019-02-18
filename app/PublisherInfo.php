<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;

class PublisherInfo extends Model
{
   protected $table = 'publisherInfo';
   protected $fillable = [
        'user_id','contact_person'
    ];
   public function user()
   {
   	  return $this->belongsTo(User::class);
   }
}
