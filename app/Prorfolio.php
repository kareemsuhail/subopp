<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Prorfolio
 *
 * @package App
 * @property string $name
 * @property text $description
 * @property string $url
 * @property string $image
 * @property integer $type_id
 * @property-read \App\Type $type
 * @property integer $user_id
 * @property-read \App\User $user
 * @property integer $team_id
 * @property-read \App\Team $team
*/
class Prorfolio extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'description', 'url', 'image', 'type_id', 'user_id', 'team_id'];
    
    
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
    
}
