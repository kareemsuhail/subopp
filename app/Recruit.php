<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Recruit
 *
 * @package App
 * @property integer $job_id
 * @property-read \App\Job $job
 * @property integer $user_id
 * @property-read \App\User $user
 * @property date $end_date
*/
class Recruit extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['end_date', 'job_id', 'user_id'];
    
    
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
    public function setUserIdAttribute($input)
    {
        $this->attributes['user_id'] = $input ? $input : null;
    }
    
    /**
     * Set attribute to date format
     * @param $input
     */
    public function setEndDateAttribute($input)
    {
        if ($input != null) {
            $this->attributes['end_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['end_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getEndDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));
        
        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }
    
    public function job()
    {
        return $this->belongsTo(\App\Job::class);
    }
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
    
}
