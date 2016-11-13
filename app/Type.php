<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Type
 *
 * @package App
 * @property string $name
*/
class Type extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name'];
    
    
    
}
