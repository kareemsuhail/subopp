<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SiteSetting
 *
 * @package App
 * @property string $name
 * @property integer $language_id
 * @property-read \App\Language $language
 * @property text $meta_tag
 * @property string $url
*/
class SiteSetting extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'meta_tag', 'url', 'language_id'];
    
    
    /**
     * Set to null if empty
     * @param $input
     */
    public function setLanguageIdAttribute($input)
    {
        $this->attributes['language_id'] = $input ? $input : null;
    }
    
    public function language()
    {
        return $this->belongsTo(\App\Language::class);
    }
    
}
