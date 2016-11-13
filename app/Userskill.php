<?php

namespace App;



use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;



/**

 * Class Userskill

 *

 * @package App

 * @property string $user

 * @property string $skill

*/

class Userskill extends Model

{	
	

    use SoftDeletes;

    
    protected $table = 'usersprofile_skills';
    protected $fillable = ['users_profile_id', 'skill_id'];

    

 /*   public static function boot()

    {

        parent::boot();



        Jobskill::observe(new \App\Observers\UserActionsObserver);

    }

*/


    

    /**

     * Set to null if empty

     * @param $input

     */

    public function setUserIdAttribute($input)

    {

        $this->attributes['users_profile_id'] = $input ? $input : null;

    }/**

     * Set to null if empty

     * @param $input

     */

    public function setSkillIdAttribute($input)

    {

        $this->attributes['skill_id'] = $input ? $input : null;

    }

    

    public function UserProfile()

    {

        return $this->belongsTo(UsersProfile::class, 'users_profile_id');

    }

    

    public function skill()

    {

        return $this->belongsTo(Skill::class, 'skill_id');

    }

    

}