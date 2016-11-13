<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JobStatus
 *
 * @package App
 * @property string $name
*/
class JobStatus extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['user_id','job_id'];
    

    public function user()
    {
        return $this->hasOne(\App\User::class);
    }

    public function job()
    {
        return $this->hasOne(\App\Job::class);
    }

    
    
}
