<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utskill extends Model
{
    //

protected $fillable = ['type_id', 'user_id', 'team_id', 'job_id', 'skill_id'];

    public function setTypeIdAttribute($input)

    {

        $this->attributes['type_id'] = $input ? $input : null;

    }/**

     * Set to null if empty

     * @param $input

     */

    public function setUserIdAttribute($input)

    {

        $this->attributes['user_id'] = $input ? $input : null;

    }/**

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

    

    public function type()

    {

        return $this->belongsTo(Type::class, 'type_id');

    }

    

    public function user()

    {

        return $this->belongsTo(User::class, 'user_id');

    }

    

    public function team()

    {

        return $this->belongsTo(Team::class, 'team_id');

    }

     public function job()

    {

        return $this->belongsTo(Job::class);

    }   

    public function skill()

    {

        return $this->belongsTo(Skill::class, 'skill_id');

    }




}
