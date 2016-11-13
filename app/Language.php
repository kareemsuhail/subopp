<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Language
 *
 * @package App
 * @property string $name
*/
class Language extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name'];
    
    
    
}
