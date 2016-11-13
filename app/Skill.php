<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Skill
 *
 * @package App
 * @property string $name
 * @property integer $spical_id
 * @property-read \App\Spical $spical
*/
class Skill extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'spical_id'];
    
    
    /**
     * Set to null if empty
     * @param $input
     */
    public function setSpicalIdAttribute($input)
    {
        $this->attributes['spical_id'] = $input ? $input : null;
    }
    
    public function spical()
    {
        return $this->belongsTo(\App\Spical::class);
    }

    public function jobs(){
        return $this->belongsToMany(\App\Job::class,'job_skills');
    }

    public function UserProfile(){
        return $this->belongsToMany(\App\UsersProfile::class,'usersprofile_skills');
    }    
    
}
