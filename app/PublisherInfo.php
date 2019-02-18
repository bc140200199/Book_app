<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;

class PublisherInfo extends Model
{
   protected $table = 'publisher_info';
   // protected $fillable = [
   //      'user_id','contact_person'
   //  ];
   protected $guarded = ['id'];


   public function user()
   {
   	  return $this->belongsTo(User::class);
   }
}
