<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Spical
 *
 * @package App
 * @property string $name
*/
class Spical extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name'];
    
    
    
}
