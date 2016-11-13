<?php

namespace App;



use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;



/**

 * Class Jobskill

 *

 * @package App

 * @property string $job

 * @property string $skill

*/

class Jobskill extends Model

{

    use SoftDeletes;

    
    protected $table = 'job_skills';
    protected $fillable = ['job_id', 'skill_id'];

    

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

    public function setJobIdAttribute($input)

    {

        $this->attributes['job_id'] = $input ? $input : null;

    }/**

     * Set to null if empty

     * @param $input

     */

    public function setSkillIdAttribute($input)

    {

        $this->attributes['skill_id'] = $input ? $input : null;

    }

    

    public function job()

    {

        return $this->belongsTo(Job::class, 'job_id');

    }

    

    public function skill()

    {

        return $this->belongsTo(Skill::class, 'skill_id');

    }

    

}
