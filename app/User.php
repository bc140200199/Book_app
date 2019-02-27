<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \App\Role;
use \App\PhoneNumber;
use \App\PublisherInfo;
use \App\Address;
use App\Book;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


//     public function authorizeRoles($roles)
//     {
//       if (is_array($roles)) {
//         return $this->hasAnyRole($roles) || 
//          abort(401, 'This action is unauthorized.');
//     }
//         return $this->hasRole($roles) || 
//          abort(401, 'This action is unauthorized.');
//     }

// // * Check multiple roles
// // * @param array $roles

//     public function hasAnyRole($roles)
//     {
//       return null !== $this->roles()->whereIn('name', $roles)->first();
//     }
// /**
// * Check one role
// * @param string $role
// */
//     public function hasRole($role)
//     {
//      return null !== $this->roles()->where('name', $role)->first();
//     }

// $this->admin roles()->name 

//     public function is_admin(){
//         if($this->roles()->name->admin()){
//             return true;
//         }
//         return false;
//     }





 //   public function authorizeRoles($roles)
 //    {
 //       if ($this->hasAnyRole($roles)) {
 //         return true;
 //    }
 //      abort(401, 'This action is unauthorized.');
 // }
 //   public function hasAnyRole($roles)
 //    {
 //      if (is_array($roles)) {
 //       foreach ($roles as $role) {
 //      if ($this->hasRole($role)) {
 //        return true;
 //      }
 //    }
 //  } else {
 //    if ($this->hasRole($roles)) {
 //      return true;
 //    }
 //  }
 //  return false;
// }
  public function isAdmin()
  {
    if ($this->roles()->where('name', 'admin')->first()) {
    return true;
  }
    return false;
  }


  public function isModerator()
  {
    if ($this->roles()->where('name', 'moderator')->first()) {
    return true;
  }
    return false;
  }
   public function isPublisher()
  {
    if ($this->roles()->where('name', 'publisher')->first()) {
    return true;
  }
    return false;
  }


  public function publishersInfo()
  {
    return $this->hasOne(PublishersInfo::class);
  }

  public function addresses()
  {
    return $this->hasMany(Addresses::class);
  }

  public function phoneNumbers()
  {
    return $this->hasOne(PhoneNumbers::class);
  }

  public function book()
  {
    return $this->hasMany(Book::class);
  }

}

