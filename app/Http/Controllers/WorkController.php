<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shohin;
use App\Http\Requests\PostRequest;
use DateTime;

class WorkController extends Controller
{
    public function list() 
    {
        $records = Shohin::all();
        return view('savemoney.list')->with('records', $records);
    }
}
