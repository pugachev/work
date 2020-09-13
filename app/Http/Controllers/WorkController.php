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
            return view('work.list')->with('records', $records);
        }
        
        public function create() 
        {
            return view('work.input');
        }

        public function store(Request $request) 
        {
        $record = new Shohin();
        $record->money = $request->inputMoney;
        $rcvdate = DateTime::createFromFormat('m/d/Y',$request->inputDate);
        $record->targetDate = $rcvdate->format("Y-m-d");
        $record->result='○';
        $record->save();
        return redirect('/verification');
        }

      public function edit(Record $record) {
        $selectRecord = Record::find($record->id);
        $rcvdate = DateTime::createFromFormat('Y-m-d', $selectRecord->targetDate)->format('m/d/Y');
        $selectRecord->targetDate = $rcvdate;
        return view('savemoney.edit')->with('selectRecord', $selectRecord);
      }

      public function update(Request $request,Record $record) {
        $record->money = $request->inputMoney;
        $rcvdate = DateTime::createFromFormat('m/d/Y',$request->inputDate);
        $record->targetDate = $rcvdate->format("Y-m-d");
        $originalImg = $request->inputFile;
        // dd($originalImg);
        $filePath = $originalImg->store('public');
        $record->imgpath = str_replace('public/', '', $filePath);
        $record->result='○';
        $record->save();
        return redirect('/verification');
      }

      public function destroy(Request $request,Record $record) {
        $record->delete();
        return redirect('/verification');
      }
}
