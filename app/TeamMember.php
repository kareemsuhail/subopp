<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TeamMember
 *
 * @package App
 * @property integer $team_id
 * @property-read \App\Team $team
 * @property integer $user_id
 * @property-read \App\User $user
*/
class TeamMember extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['team_id', 'user_id'];
    
    
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
    public function setUserIdAttribute($input)
    {
        $this->attributes['user_id'] = $input ? $input : null;
    }
    
    public function team()
    {
        return $this->belongsTo(\App\Team::class);
    }
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
    
}
