<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestsModel extends Model
{
    protected $table = "requests";
    protected $fillable = ['sender_id','reciver_id','team_id','status'];
    public function teamName()

    {
        return $this->belongsTo(\App\Team::class);

    }

}
