<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HowItDo
 *
 * @package App
 * @property string $title
 * @property string $short_info
 * @property text $Description
 * @property string $image
 * @property string $video_url
*/
class HowItDo extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['title', 'short_info', 'Description', 'image', 'video_url'];
    
    
    
}
