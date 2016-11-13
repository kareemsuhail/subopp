<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Job
 *
 * @package App
 * @property string $title
 * @property integer $user_id
 * @property-read \App\User $user
 * @property integer $price
 * @property integer $length
 * @property text $description
 * @property string $specialty
 * @property string $skills
 * @property string $file
 * @property date $end_date
*/
class Job extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['title', 'price', 'length', 'description', 'specialty', 'skills', 'file', 'end_date', 'user_id'];
    protected $casts = ['skills' => 'array'];
    
    
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
    
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

     public function jobSkills()
    {
        return $this->belongsToMany(\App\Skill::class,'job_skills');
    }   
 
      public function jobBid()
    {
        return $this->belongsToMany(\App\Bid::class,'bids');
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
            $builder->with('jobSkills');
        });


    }
}
