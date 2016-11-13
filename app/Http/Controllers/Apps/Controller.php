<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use DB;
use App\UsersProfile;
use App\user;
use App\Job;
use App\Spical;
use App\Skill;
use App\Team;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   public function __construct(){
   	$this->middleware('auth');
   }
}
