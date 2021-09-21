<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'password', 'gender', 'contactnum',
         'dept_id','user_privilege', 'jobtitle',  'oauth_token', 'oauth_token_secret',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


//    public function getAvatarUrl()
//    {
//
//        if (is_null($this->path)) {
//
//            return 'http://www.gravatar.com/avatar/'.md5(strtolower(trim($this->email))).'?d=mm&s=40';
//        }
//
//        return $this->avatar;
//    }
//

    

    public function getAvatar(Requests $requests)
    {
         $path = request()->file('avatar')->store('avatars');

        if (is_null($this->path)) {

        return $path;
//         = $input['avatar'];

                               }

        return $this->avatar;
    }

    public function getAccessToken()
    {
        return $this->oauth_token;
    }

    public function getAccessTokenSecret()
    {
        return $this->oauth_token_secret;
    }

    
    public function tickets() {
        return $this->belongsTo('App\Ticket');
    }

    public function dept()
    {
        return $this->belongsTo('App\Dept');
    }
}
