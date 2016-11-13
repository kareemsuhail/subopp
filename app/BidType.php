<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BidType
 *
 * @package App
 * @property string $name
*/
class BidType extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name'];
    
    
    
}
