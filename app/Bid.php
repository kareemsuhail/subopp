<?php
namespace App;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Bid
 *
 * @package App
 * @property integer $job_id
 * @property-read \App\Job $job
 * @property integer $price
 * @property string $length
 * @property integer $type_id
 * @property-read \App\Type $type
 * @property integer $user_id
 * @property-read \App\User $user
 * @property integer $team_id
 * @property-read \App\Team $team
 * @property integer $status_id
 * @property-read \App\Status $status
 * @property integer $bidtype_id
 * @property-read \App\BidType $bidtype
*/
class Bid extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['price', 'length', 'job_id', 'type_id', 'user_id', 'team_id', 'status_id', 'bidtype_id'];
    
    
    /**
     * Set to null if empty
     * @param $input
     */
    public function setJobIdAttribute($input)
    {
        $this->attributes['job_id'] = $input ? $input : null;
    }
    
    /**
     * Set to null if empty
     * @param $input
     */
    public function setTypeIdAttribute($input)
    {
        $this->attributes['type_id'] = $input ? $input : null;
    }
    
    /**
     * Set to null if empty
     * @param $input
     */
    public function setUserIdAttribute($input)
    {
        $this->attributes['user_id'] = $input ? $input : null;
    }
    
    /**
     * Set to null if empty
     * @param $input
     */
    public function setTeamIdAttribute($input)
    {
        $this->attributes['team_id'] = $input ? $input : null;
    }
    
    /**
     * Set to null if empty
     * @param $input
     */
    public function setStatusIdAttribute($input)
    {
        $this->attributes['status_id'] = $input ? $input : null;
    }
    
    /**
     * Set to null if empty
     * @param $input
     */
    public function setBidTypeIdAttribute($input)
    {
        $this->attributes['bidtype_id'] = $input ? $input : null;
    }
    
    public function job()
    {
        return $this->belongsTo(\App\Job::class);
    }
    public function type()
    {
        return $this->belongsTo(\App\Type::class);
    }
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
 

    public function team()
    {
        return $this->belongsTo(\App\Team::class);
    }
    public function status()
    {
        return $this->belongsTo(\App\Status::class);
    }
    public function bidtype()
    {
        return $this->belongsTo(\App\BidType::class);
    }

     public function userProfileSkills()
    {
        return $this->belongsToMany(\App\Skill::class,'usersprofile_skills','users_profile_id');
    }   
    

    /**
     * The "booting" method of the model.
     *
     * @return void
     */

   
    



    
}
