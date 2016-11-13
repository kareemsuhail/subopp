<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 *
 * @package App
 * @property string $name
 * @property integer $country_id
 * @property-read \App\Country $country
*/
class City extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'country_id'];
    
    
    /**
     * Set to null if empty
     * @param $input
     */
    public function setCountryIdAttribute($input)
    {
        $this->attributes['country_id'] = $input ? $input : null;
    }
    
    public function country()
    {
        return $this->belongsTo(\App\Country::class);
    }
    
    public function UsersProfile()
    {

        return $this->hasMany(\App\UsersProfile::class);

    }
}
