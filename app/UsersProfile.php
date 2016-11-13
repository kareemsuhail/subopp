<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;


/**
 * Class UsersProfile
 *
 * @package App
 * @property integer $user_id
 * @property-read \App\User $user
 * @property string $jobtitle
 * @property text $description
 * @property string $image
 * @property string $coverimage
 * @property integer $spical_id
 * @property integer $country_id
 * @property integer $city_id


 * @property date $birthday
*/
class UsersProfile extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['jobtitle', 'description', 'image','coverimage', 'birthday', 'user_id','spical_id','country_id','city_id'];
    protected $appends = ['name'];
    protected $casts = ['skills' => 'array'];



    public function getNameAttribute(){
        if($usr = $this->user()->first()){
           return $usr->name(); 
        }else{
            return "no name";
        }
        
    }
    
    /**
     * Set to null if empty
     * @param $input
     */
    public function setuseridAttribute($input)
    {
        $this->attributes['user_id'] = $input ? $input : null;
    }
    
    /**
     * Set attribute to date format
     * @param $input
     */
    public function setBirthdayAttribute($input)
    {
        if ($input != null) {
            $this->attributes['birthday'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['birthday'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getBirthdayAttribute($input)
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

    public function city()
    {
        return $this->belongsTo(\App\City::class);
    }

     public function userProfileSkills()
    {
        return $this->belongsToMany(\App\Skill::class,'usersprofile_skills');
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
            $builder->with('userProfileSkills');
        });
    }


}
