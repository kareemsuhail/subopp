<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
/**
 * Class Team
 *
 * @package App
 * @property string $name
 * @property string $logo
 * @property text $description
 * @property integer $spical_id
 * @property-read \App\Spical $spical
 * @property integer $user_id
 * @property-read \App\User $user
*/
class Team extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'logo', 'description', 'spical_id', 'user_id'];
    protected $casts = ['spical_id' => 'array'];
    
  
    /**
     * Set to null if empty
     * @param $input
     */
    public function setUserIdAttribute($input)
    {
        $this->attributes['user_id'] = $input ? $input : null;
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

     public function teamSkills()
    {
        return $this->belongsToMany(\App\Skill::class,'team_skill');
    }   
    

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('skills', function(Builder $builder) {
            $builder->with('teamSkills');
        });
    }    
    
}
