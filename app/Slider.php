<?php

namespace App;



use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;



/**

 * Class Slider

 *

 * @package App

 * @property string $title

 * @property string $short_info

 * @property text $description

 * @property string $image

 * @property string $video_url

 * @property integer $status_id

 * @property-read \App\Status $status

*/

class Slider extends Model

{

    use SoftDeletes;

    

    protected $fillable = ['title', 'short_info', 'description', 'image', 'video_url', 'status_id'];

    

    

    /**

     * Set to null if empty

     * @param $input

     */

    public function setStatusIdAttribute($input)

    {

        $this->attributes['status_id'] = $input ? $input : null;

    }

    

    public function status()

    {

        return $this->belongsTo(\App\Status::class);

    }

    

}