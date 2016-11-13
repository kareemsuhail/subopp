<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TopBar
 *
 * @package App
 * @property string $title
 * @property string $Url
*/
class TopBar extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['title', 'Url'];
    
    
    
}
