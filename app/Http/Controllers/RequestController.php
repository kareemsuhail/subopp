<?php

namespace App\Http\Controllers;

use App\RequestsModel;
use Illuminate\Http\Request;
use Auth ;
use App\Http\Requests;

class RequestController extends Controller
{
    public function index(){}
    public function store(Request $request){
    $data = $request->only(['reciver_id','team_id']);
        $data['sender_id']= Auth::user()->id ;
        $data['status'] = "pending" ;
        RequestsModel::create($data);
        return "done";



    }
}
