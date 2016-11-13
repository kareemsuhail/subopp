<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;
use Carbon\Carbon;

/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $password
 * @property integer $role_id
 * @property-read \App\Role $role
 * @property string $remember_token
*/
class User extends Authenticatable
{
    
    protected $fillable = ['name', 'email', 'password', 'remember_token', 'role_id'];
    
    
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }
    
    /**
     * Set to null if empty
     * @param $input
     */
    public function setRoleIdAttribute($input)
    {
        $this->attributes['role_id'] = $input ? $input : null;
    }
    
    public function role()
    {
        return $this->belongsTo(\App\Role::class);
    }
    public function UsersProfile()
    {

        return $this->hasOne(\App\UsersProfile::class);

    }

    public function job()
    {

        return $this->hasMany(\App\Job::class);

    }



}
