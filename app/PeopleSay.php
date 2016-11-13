<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PeopleSay
 *
 * @package App
 * @property string $title
 * @property string $jobtitle
 * @property text $say
 * @property string $image
*/
class PeopleSay extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['title', 'jobtitle', 'say', 'image'];
    
    
    
}
