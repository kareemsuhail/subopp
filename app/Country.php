<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 *
 * @package App
 * @property string $name
*/
class Country extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name'];
    
    public function city()
    {

        return $this->hasMany(\App\City::class);

    }    
    
}
