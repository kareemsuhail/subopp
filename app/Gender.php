<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Gender
 *
 * @package App
 * @property string $name
*/
class Gender extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name'];
    
    
    
}
