<?php

namespace App;



use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;



/**

 * Class Teamskill

 *

 * @package App

 * @property string $team

 * @property string $skill

*/

class Teamskill extends Model

{

    use SoftDeletes;

    
    protected $table = 'team_skill';
    protected $fillable = ['team_id', 'skill_id'];

    

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

    public function setTeamIdAttribute($input)

    {

        $this->attributes['team_id'] = $input ? $input : null;

    }/**

     * Set to null if empty

     * @param $input

     */

    public function setSkillIdAttribute($input)

    {

        $this->attributes['skill_id'] = $input ? $input : null;

    }

    

    public function team()

    {

        return $this->belongsTo(Team::class, 'team_id');

    }

    

    public function skill()

    {

        return $this->belongsTo(Skill::class, 'skill_id');

    }

    

}
